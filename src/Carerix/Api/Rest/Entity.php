<?php

namespace Carerix\Api\Rest;

use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\DataType\Transient;
use Exception;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;
use Serializable;
use SimpleXMLElement;

abstract class Entity implements Serializable
{
    const CARERIX_XML_DECLARATION = '<?xml version="1.0" encoding="utf-8"?>';

    const HYDRATE_OBJECT       = 1;
    const HYDRATE_NONE         = 2;
    const HYDRATE_ARRAY        = 3;
    const HYDRATE_OBJECT_XML   = 4;
    const HYDRATE_OBJECT_ARRAY = 5;

    const ENTITIES_NAMESPACE = '\Carerix\Api\Rest\Entity\\';

    /**
     * @cx_field true
     * @var      Transient
     */
    protected $transient;

    /**
     * @var array
     */
    protected $lastParameters;

    /**
     * @var static
     */
    protected $snapshot;

    /**
     * @cx_field true
     * @var      array
     */
    public $attributes = null;

    /**
     * stableHash - unique record identifier in transient state, e.g. 348278036
     * @cx_field true
     * @var      integer
     */
    public $stableHash;

    /**
     * @var string
     */
    protected $raw;

    /**
     * @var Manager
     */
    private static $manager;

    private static $propertyCache = [];

    protected $reflectionClass;

    public function __construct(array $values = null)
    {
        if ($values !== null) {
            $this->fromArray($values);
        }
    }

    /**
     * @return Transient
     */
    public function getTransient()
    {
        return $this->transient;
    }

    /**
     * @param Transient|array $values
     * @return self
     */
    public function setTransient($values)
    {
        if ($values instanceof Transient) {
            $this->transient = $values;
        } elseif (is_array($values)) {
            $this->transient = new Transient($values);
        }

        return $this;
    }

    /**
     * Set the original record state right after the read operation
     * @param object $self
     * @return void
     */
    protected function setSnapshot($self)
    {
        if ($self == null) {
            $this->snapshot = null;
        }
        $this->snapshot = clone $self;
    }

    /**
     * Get object's dirty attributes - changed since the last read
     * @param Entity $context
     * @return array  attributes that changed since the last read
     * @throws ReflectionException
     */
    protected function getObjectDirtyVars(Entity $context)
    {
        // if there is no snapshot every attribute is considered to be dirty
        if (empty($context->snapshot)) {
            return self::getObjectVars($context);
        }
        $origVars = self::getObjectVars($context->snapshot);
        $userVars = self::getObjectVars($context);

        return array_diff_assoc($userVars, $origVars);
    }

    /**
     * @param Manager $manager
     * @return void
     */
    public static function setManager(Manager $manager)
    {
        self::$manager = $manager;
    }

    /**
     * @return Manager
     */
    public static function getManager()
    {
        return self::$manager;
    }

    /**
     * Return entity as XML document
     * @param boolean $raw   pass true to get the original XML response from the server
     * @param boolean $dirty when true - render only dirty attributes, otherwise render all attributes
     * @return string XML document
     * @throws Exception
     */
    public function toXml($raw = false, $dirty = false)
    {
        if ($raw === true) {
            return $this->getRaw();
        }
        $sxe = null; // required!
        $sxe = $this->toSimpleXMLElement($sxe, null, $dirty);
        return $sxe->asXML();
    }

    /**
     * Template method
     * @param EntityConfiguration $entityConfiguration
     */
    public static function configure(EntityConfiguration $entityConfiguration)
    {
    }

    /**
     * Get entity name from php object. Example: CRToDo
     * @param object|string $object
     * @return string
     */
    public static function getEntityFromObject($object)
    {
        if ($object instanceof Entity) {
            $entityName = get_class($object);
        } elseif (is_string($object)) {
            $entityName = $object;
        } else {
            return null;
        }

        $className = self::getEntityClassName($entityName);
        return constant($className . '::ENTITY');
    }

    /**
     * Create XML document
     * @param SimpleXMLElement $sxe
     * @param Entity           $context
     * @param boolean          $dirty true render only dirty attributes, otherwise render all attributes
     * @return SimpleXMLElement
     * @throws Exception
     * @throws ReflectionException
     */
    public function toSimpleXMLElement(SimpleXMLElement &$sxe = null, Entity $context = null, $dirty = false)
    {
        if ($context === null) {
            $context = $this;
        }

        $vars       = ($dirty === false) ? self::getObjectVars($context) : $this->getObjectDirtyVars($context);
        $entityName = self::getEntityFromObject($context);

        if ($sxe === null) {
            try {
                $sxe = new SimpleXMLElement(self::CARERIX_XML_DECLARATION . '<' . $entityName . '/>', LIBXML_NOXMLDECL | LIBXML_COMPACT);
            } catch (Exception $e) {
                throw new Exception('Unable to parse XML document');
            }
        }

        $entityID = self::$manager->getEntityConfiguration(get_class($context))->getIdentifierKey();

        if (empty($vars)) {
            $tempObjectVars     = self::getObjectVars($context);
            $vars['attributes'] = $tempObjectVars['attributes'];
            $tempObjectVars     = null;
        }
        if (array_key_exists($entityID, $vars) && isset($vars[$entityID])) {
            $sxe['id'] = $vars[$entityID];
            unset($vars[$entityID]);
        }

        // inject attributes into root node
        if (array_key_exists('attributes', $vars) && !empty($vars['attributes'])) {
            foreach ($vars['attributes'] as $k => $v) {
                $sxe[$k] = $v;
            }
            unset($vars['attributes']);
        }

        foreach ($vars as $k => $v) {
            // don't include empty vars into XML document
            if ($v === null) {
                continue;
            }

            // The NSArray element will be eliminated completely in a future release
            if ($v instanceof NSArray) {
                $v->toSimpleXMLElement($sxe->{$k});
            } elseif ($v instanceof NSDictionary) {
                $v->toSimpleXMLElement($sxe->{$k});
            } elseif ($v instanceof Collection) {
                foreach ($v as $vv) {
                    if ($vv instanceof Entity) {
                        $entityName = self::getEntityFromObject($vv);
                        $this->toSimpleXMLElement($sxe->{$k}->{$entityName}[], $vv, $dirty);
                    }
                }
            } elseif (is_array($v)) {
                foreach ($v as $kk => $vv) {
                    if (is_array($vv)) {
                        foreach ($vv as $kkk => $vvv) {
                            $sxe->{$k}->{$kk}->{$kkk} = $vvv;
                        }
                    } else {
                        $sxe->{$k} = $vv;
                    }
                }
            } else {
                if ($v instanceof Entity) {
                    $entityName = self::getEntityFromObject($v);
                    $this->toSimpleXMLElement($sxe->{$k}->{$entityName}, $v, $dirty);
                } else {
                    $sxe->{$k} = $v;
                }
            }
        }

        // support for transient.* attributes
        if (method_exists($context, 'getTransient')) {
            $transient = $context->getTransient();
            if ($transient instanceof Transient) {
                $transient->toSimpleXMLElement($sxe);
            }
        }

        return $sxe;
    }

    /**
     * Check if the record exists
     * @return boolean
     */
    public function exists()
    {
        return self::$manager->entityExists($this);
    }

    /**
     * Get record identifier
     * @return string
     */
    public function getIdentifierProxy()
    {
        return self::$manager->getEntityIdentifier($this);
    }

    /**
     * Get fully-qualified class name for a given entity class name
     * @param  $className
     * @return string
     */
    protected static function getEntityClassName($className)
    {
        if (strpos($className, '\\') === false) {
            $className = self::ENTITIES_NAMESPACE . $className;
        }

        return $className;
    }

    /**
     * Get Record Identifier Key
     * @return integer
     */
    public function getIdentifierKeyProxy()
    {
        return self::$manager->getEntityConfiguration($this)->getIdentifierKey();
    }

    /**
     * Generates a request URL
     * @param array $options
     * @param null  $className
     * @return mixed
     */
    public static function generateUrl(array $options = [], $className = null)
    {
        if ($className === null) {
            $className = get_called_class();
        }
        $configuration = self::$manager->getEntityConfiguration($className);
        return $configuration->generateUrl($options);
    }

    /**
     * Find an entity
     * @param string  $id
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return static|Entity|null
     * @throws Exception
     */
    public static function find($id, $parameters = null, $hydrate = null)
    {
        if ($parameters !== null && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = null;
        }

        $className = str_replace('Carerix\Api\Rest\Entity\\', '', get_called_class());
        $url       = self::generateUrl(get_defined_vars(), $className);

        $entity = self::$manager->execute($className, $url, Client::GET, $parameters, null, $hydrate);

        if ($entity instanceof Entity) {
            $entity->lastParameters = $parameters;
            $entity->setSnapshot($entity);
        } elseif (is_array($entity)) {
            $entity['lastParameters'] = $parameters;
        }

        return $entity;
    }

    /**
     * Get a collection of entities
     * @param string  $action     [default:list] specify a different action name to invoke
     * @param array   $parameters any extra GET parameters to send
     * @param integer $hydrate    hydration method
     * @return Collection<static>|null collection of entities on success, null on failure
     * @throws Exception
     */
    public static function findAll($action = 'list', $parameters = null, $hydrate = null)
    {
        if (is_array($action)) {
            if ($parameters !== null) {
                $hydrate = $parameters;
            }
            $parameters = $action;
            $action     = 'list';
        }

        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        $collection = self::$manager->execute($className, $url, Client::GET, $parameters, null, $hydrate);

        // ensures isDirty works correctly for records from the collection
        if ($collection instanceof Collection) {
            foreach ($collection as $entity) {
                if ($entity instanceof Entity) {
                    $entity->setSnapshot($entity);
                }
            }
        }

        return $collection;
    }

    /**
     * Save an object
     * @param string $action     specify a different action name to invoke
     * @param array  $parameters any extra GET parameters to send
     * @return static|Entity
     * @throws Exception
     * @throws ReflectionException
     */
    public function save($action = null, $parameters = null)
    {
        // don't send any requests to backend if record state hasn't changed since the last read
        if (!$this->isDirty()) {
            return $this;
        }

        $exists = $this->exists();
        $method = $exists ? Client::PUT : Client::POST;
        $id     = $exists ? $this->getIdentifierProxy() : null;

        // backend save method doesn't support GET query params
        $definedVars = get_defined_vars();
        unset($definedVars['parameters']);

        $className = get_called_class();
        $url       = self::generateUrl($definedVars, $className);

        $entity = self::$manager->execute($this, $url, $method, null, $this->toXml(false, true));

        // empty id is a signal that backend didn't persist the entity
        $id = $entity->getId();
        if (empty($id)) {
            throw new Exception('The save request was sent to the REST API but it was unable to process it. Please make sure you are sending a minimum required set of attributes for your entity.');
        }

        if ($parameters === null && $this->lastParameters === null) {
            return $entity;
        }

        if ($parameters === null) {
            $parameters = $this->lastParameters;
        }

        // If we are supplied with GET query params we must re-fetch the record again.
        $url    = self::generateUrl(get_defined_vars(), $className);
        $entity = self::$manager->execute($entity, $url, Client::GET);
        $this->setSnapshot($entity);

        return $entity;
    }

    /**
     * Delete an object
     * @param string $action     specify a different action name to invoke
     * @param array  $parameters any extra GET parameters to send
     * @return Entity
     * @throws Exception
     */
    public function delete($action = null, $parameters = null)
    {
        $className = get_called_class();
        $id        = $this->getIdentifierProxy();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($this, $url, Client::DELETE);
    }

    /**
     * Update an object
     * @param string $action     specify a different action name to invoke
     * @param array  $parameters any extra GET parameters to send
     * @return Entity
     * @throws Exception
     */
    public function post($action = null, $parameters = null)
    {
        $className = get_called_class();
        $id        = $this->getIdentifierProxy();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($this, $url, Client::POST, $parameters, $this->toXml());
    }

    /**
     * Get an object
     * @param string  $action     specify a different action name to invoke
     * @param array   $parameters any extra GET parameters to send
     * @param integer $hydrate    hydration method
     * @return Entity
     * @throws Exception
     */
    public function get($action = null, $parameters = null, $hydrate = null)
    {
        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($this, $url, Client::GET, null, null, $hydrate);
    }

    /**
     * Create a new object
     * @param string $action     specify a different action name to invoke
     * @param array  $parameters any extra GET parameters to send
     * @return Entity
     * @throws Exception
     */
    public function put($action = null, $parameters = null)
    {
        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($this, $url, Client::PUT, $parameters, $this->toXml());
    }

    /**
     * Execute a generic call to the REST API
     * @param string  $method     HTTP verb: GET, POST, etc.
     * @param string  $action     specify a different action name to invoke
     * @param array   $parameters any extra GET parameters to send
     * @param string  $body       request body
     * @param integer $hydrate    hydration method
     * @return Collection|Entity|string|mixed
     * @throws Exception
     */
    public static function execute($method, $action, $parameters = null, $body = null, $hydrate = null)
    {
        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute(new $className(), $url, $method, $parameters, $body, $hydrate);
    }

    /**
     * Get an attachment
     * @param array   $parameters e.g. array('tag' => 'logo', 'show' => array('label', 'filePath'), 'language' => 'English')
     * @param integer $hydrate    hydration method
     * @return mixed Collection of CRAttachment objects|array|raw
     * @throws Exception
     */
    public function attachment(array $parameters, $hydrate = null)
    {
        if (!$this->getId()) {
            throw new Exception('Please load the object from the REST API first or set its id before calling this method.');
        }

        $className = get_called_class();
        if ($className == 'CRAttachment') {
            throw new Exception('This method cannot be invoked on ' . $className);
        }

        $entity     = self::getEntityFromObject($className);
        $parameters = array_merge($parameters, ['entity' => $entity, 'id' => $this->getId()]);
        $action     = 'attachment';
        $url        = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute('CRAttachment', $url, Client::GET, null, null, $hydrate);
    }

    /**
     * Send an email
     * @param array   $parameters e.g. array('emailtemplate' => 'forgotpwd')
     * @param integer $hydrate    [optional] hydration method
     * @return mixed Collection of CRToDo objects|array|raw
     * @throws Exception
     */
    public function email(array $parameters, $hydrate = null)
    {
        if (!$this->getId()) {
            throw new Exception('Please load the object from the REST API first or set its id before calling this method.');
        }

        $className  = get_called_class();
        $entity     = self::getEntityFromObject($className);
        $parameters = array_merge($parameters, ['entity' => $entity, 'id' => $this->getId()]);
        $action     = 'email';
        $url        = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute('CRToDo', $url, Client::GET, null, null, $hydrate);
    }

    /**
     * Get object schema
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return mixed
     * @throws Exception
     */
    public static function describe($parameters = null, $hydrate = self::HYDRATE_NONE)
    {
        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = null;
        }

        if (!in_array($hydrate, [self::HYDRATE_NONE, self::HYDRATE_ARRAY])) {
            throw new Exception('Unsupported hydration mode for ' . __METHOD__);
        }

        $className = get_called_class();
        $action    = 'describe';
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($className, $url, Client::GET, $parameters, null, $hydrate);
    }

    /**
     * Get object's Sencha Model
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return mixed
     * @throws Exception
     */
    public static function sencha($parameters = null, $hydrate = self::HYDRATE_NONE)
    {
        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = null;
        }

        if (!in_array($hydrate, [self::HYDRATE_NONE, self::HYDRATE_ARRAY])) {
            throw new Exception('Unsupported hydration mode for ' . __METHOD__);
        }

        $action    = 'sencha';
        $format    = 'js';
        $className = get_called_class();
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($className, $url, Client::GET, $parameters, null, $hydrate);
    }

    /**
     * Subscribe a contact person (CRUser) or a candidate (CREmployee) in your Carerix system to newsletters, groups or job alerts (except for CRUser)
     * @param array   $parameters e.g. array('x-cx-subscribe-mail' => 'web-subscribe')
     * @param integer $hydrate    hydration method
     * @return static
     * @throws Exception
     */
    public function subscribe(array $parameters = null, $hydrate = null)
    {
        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = [];
        }

        $exists = $this->exists();
        $method = $exists ? Client::PUT : Client::POST;

        $className = get_class($this);
        $action    = 'subscribe';
        $url       = self::generateUrl(get_defined_vars(), $className);

        return self::$manager->execute($className, $url, $method, $parameters, $this->toXml(), $hydrate);
    }

    /**
     * Initialize an entity object from xml
     * @param string|SimpleXMLElement $xml
     * @param string|null             $className
     * @return Entity|Collection
     * @throws Exception
     */
    public static function fromXml($xml, $className = null)
    {
        if ($xml instanceof SimpleXMLElement) {
            $xml = $xml->asXML();
        }

        if ($className === null) {
            $className = get_called_class();
        }

        return self::$manager->parse($xml, $className);
    }

    /**
     * Populates entity based on user-defined array and initializes linked objects if any
     * @param array $values key-value pairs
     * @return static
     * @throws ReflectionException
     */
    public function fromArray(array $values)
    {
        $vars = self::getObjectVars($this);
        $vars = array_merge($vars, ['id' => '']);
        foreach ($values as $k => $v) {
            $method = 'set' . ucfirst($k);
            if (!array_key_exists($k, $vars) || !is_callable([$this, $method])) {
                trigger_error(sprintf('No setter defined for "%s" attribute', $k), E_USER_WARNING);
                continue;
            }
            $this->$method($v);
        }

        return $this;
    }

    /**
     * Initialize a new entity from array received from XML parser
     * @param array         $data
     * @param Entity|string $class
     * @param EntityConfiguration|null
     * @return Entity
     * @throws Exception
     */
    public static function fromArrayStatic(array $data, $class = null, EntityConfiguration $configuration = null)
    {
        if (!is_array($data)) {
            return null;
        }

        if (is_null($class)) {
            $class = get_called_class();
        }
        $instance = ($class instanceof Entity) ? $class : new $class();

        $vars     = self::getObjectVars($instance);
        $varsKeys = array_keys($vars);

        if (is_null($configuration)) {
            $configuration = self::$manager->getEntityConfiguration($class);
        }

        $identifierKey = $configuration->getIdentifierKey();

        $transient = [];
        foreach ($data as $k => $v) {
            if ($k == 'id') {
                $k = 'attributes';
                $v = ['id' => $v];
            }

            if (!in_array($k, $varsKeys)) {
                if (preg_match('/transient\..+/', $k)) {
                    // special case - transient properties
                    $transient[$k] = $v;
                }

                continue;
            }

            if (is_array($v)) {
                $reflection  = new ReflectionProperty($instance, $k);
                $association = self::getAssociationTarget($reflection);

                $varType = self::getVar($reflection, 'value_class');

                if ($varType == NSArray::DATA_TYPE) {
                    $v = NSArray::fromArray($v[$varType], $reflection);
                } elseif ($varType == NSDictionary::DATA_TYPE) {
                    $v = NSDictionary::fromArray($v[$varType]);
                } elseif (self::isOneToOneAssociation($reflection)) {
                    //go up one level
                    $v         = array_shift($v);
                    $className = self::getEntityClassName($association);
                    $v         = call_user_func($className . '::fromArrayStatic', $v, $className);
                } elseif (self::isOneToManyAssociation($reflection)) {
                    $entityName = Entity::getEntityFromObject($association);

                    if (!array_key_exists($entityName, $v)) {
                        continue;
                    }

                    if (!array_key_exists(0, $v[$entityName])) {
                        $v[$entityName] = [$v[$entityName]];
                    }

                    $collection = new Collection();
                    if (array_key_exists('attributes', $v) && array_key_exists('count', $v['attributes'])) {
                        $collection->setTotalCount($v['attributes']['count']);
                        unset($v['attributes']);
                    }

                    $v = array_shift($v);

                    if (is_array($v)) {
                        foreach ($v as $kk => $vv) {
                            if (preg_match('/(_' . $kk . ')$/', $association) && is_array($vv) && is_array(current($vv))) {
                                foreach ($vv as $vvv) {
                                    $collection->append(call_user_func($association . '::fromArrayStatic', $vvv, $association));
                                }
                            } else {
                                $className = self::getEntityClassName($association);
                                $collection->append(call_user_func($className . '::fromArrayStatic', $vv, $className));
                            }
                        }
                    }
                    $v = $collection;
                }
            }

            if ($k == 'attributes') {
                if ($configuration->getValue($instance, $identifierKey) === null && isset($v['id'])) {
                    $configuration->setValue($instance, $identifierKey, $v['id']);
                }
            }

            $configuration->setValue($instance, $k, $v);

            $instance->{$k} = $v;
        }

        if (!empty($transient)) {
            $transient = Transient::fromArray($transient);
            $instance->setTransient($transient);
        }

        return $instance;
    }

    /**
     * Hydrate php objects to array with non-null values only
     * @param boolean $dirty true to hydrate dirty attributes only, otherwise hydrate all
     * @return array
     * @throws ReflectionException
     */
    public function toArray($dirty = false)
    {
        return self::toArrayStatic($this, $dirty);
    }

    /**
     * Hydrate php objects to array with non-null values only
     * @param Entity  $instance
     * @param boolean $dirty when true - hydrate only dirty attributes, otherwise hydrate all
     * @return array
     * @throws ReflectionException
     */
    public static function toArrayStatic($instance, $dirty = null)
    {
        $vars      = ($dirty === false) ? self::getObjectVars($instance) : $instance->getObjectDirtyVars($instance);
        $className = get_class($instance);
        $array     = [];
        foreach ($vars as $k => $v) {
            if ($v === null || (is_array($v) && empty($v))) {
                continue;
            }
            if (is_object($v)) {
                $reflection  = new ReflectionProperty($className, $k);
                $association = self::getAssociationTarget($reflection);
                if ($valueClass = self::getVar($reflection, 'value_class')) {
                    if ($valueClass === NSDictionary::DATA_TYPE || $valueClass === NSArray::DATA_TYPE) {
                        $v = (array)$v; // cast as array
                    } else {
                        $v = (string)$v; // cast the rest as string
                    }
                } elseif (self::isOneToOneAssociation($reflection)) {
                    // convert one dimensional array to a value;
                    if (array_key_exists(0, $v)) {
                        $v = array_shift($v);
                    }
                    $associationClassName = self::getEntityClassName($association);
                    $v                    = call_user_func($associationClassName . '::toArrayStatic', $v, $dirty);
                } elseif (self::isOneToManyAssociation($reflection)) {
                    $objects = [];
                    foreach ($v as $kk => $vv) {
                        $associationClassName = self::getEntityClassName($association);
                        $objects[]            = call_user_func($associationClassName . '::toArrayStatic', $vv, $dirty);
                    }
                    $v = $objects;
                }
            }
            $array[$k] = $v;
        }

        return $array;
    }

    /**
     * Get var type
     * @param ReflectionProperty|string
     * @param string
     * @return string
     */
    public static function getVar($reflection, $name)
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty) ? $reflection->getDocComment() : $reflection;

        preg_match('/\* @' . preg_quote($name) . ' (.*)$/siUum', $propertyDoc, $matches);
        if (array_key_exists(1, $matches)) {
            return trim($matches[1]);
        }

        return false;
    }

    /**
     * Check if property is an association
     * @param ReflectionProperty|string
     * @param string
     * @return boolean
     */
    public static function isAssociation($reflection, $type = 'OneToOne')
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty) ? $reflection->getDocComment() : $reflection;

        return (bool)preg_match('/@' . $type . '/i', $propertyDoc);
    }

    /**
     * Check if property is one-to-one association
     * @param ReflectionProperty|string $reflection
     * @return boolean
     */
    public static function isOneToOneAssociation($reflection)
    {
        return self::isAssociation($reflection, 'OneToOne');
    }

    /**
     * Check if property is one-to-many association
     * @param ReflectionProperty|string $reflection
     * @return boolean
     */
    public static function isOneToManyAssociation($reflection)
    {
        return self::isAssociation($reflection, 'OneToMany');
    }

    /**
     * Get association target entity
     * @param ReflectionProperty|string
     * @return string|boolean string on success, false on failure
     */
    public static function getAssociationTarget($reflection)
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty) ? $reflection->getDocComment() : $reflection;

        preg_match('/targetEntity=\"([^\"]+)\"/i', $propertyDoc, $matches);
        if (array_key_exists(1, $matches)) {
            return trim($matches[1]);
        }

        return false;
    }

    /**
     * Check if property has cx_filed true docComment
     * @param ReflectionProperty|string $reflection
     * @return boolean
     */
    public static function isCxField($reflection)
    {
        $propertyDoc = ($reflection instanceof ReflectionProperty) ? $reflection->getDocComment() : $reflection;

        return preg_match('/@cx_field\s+true/', $propertyDoc);
    }

    /**
     * @param integer|string $value
     * @return static
     */
    public function setId($value)
    {
        self::$manager->setEntityIdentifier($this, $value);
        return $this;
    }

    /**
     * @return integer|string
     */
    public function getId()
    {
        $className     = get_called_class();
        $identifierKey = self::$manager->getEntityConfiguration($className)->getIdentifierKey();

        if (property_exists($this, $identifierKey)) {
            return $this->{$identifierKey};
        }

        return $this->attributes['id'];
    }

    /**
     * @param array $value
     * @return static
     */
    public function setAttributes($value)
    {
        $this->attributes = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return integer
     */
    public function getStableHash()
    {
        return $this->stableHash;
    }

    /**
     * @param integer $stableHash stableHash
     * @return static
     */
    public function setStableHash($stableHash)
    {
        $this->stableHash = $stableHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * @param string $raw raw
     * @return static
     */
    public function setRaw($raw)
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * Custom implementation of get_object_vars
     * @param Entity $context object to extract variables from
     * @return array
     * @throws ReflectionException
     */
    public static function getObjectVars(Entity $context)
    {
        $props = $context->getPropertyCache();
        $props = array_keys($props);
        $vars  = [];
        foreach ($props as $item) {
            $vars[$item] = $context->{$item};
        }

        return $vars;
    }

    /**
     * Returns regular object vars and additionally raw, attributes, lastParameters, stableHash, transient and snapshot
     * @param Entity $context object to extract variables from
     * @return array
     * @throws ReflectionException
     */
    public static function getExtendedObjectVars(Entity $context)
    {
        $data                   = self::getObjectVars($context);
        $data['raw']            = $context->raw;
        $data['lastParameters'] = $context->lastParameters;
        $data['snapshot']       = $context->snapshot;
        $data['transient']      = $context->transient;
        $data['attributes']     = $context->attributes;
        $data['stableHash']     = $context->stableHash;

        return $data;
    }

    /**
     * Returns true if the record is dirty, false otherwise
     * @return boolean
     * @throws ReflectionException
     */
    public function isDirty()
    {
        $vars = $this->getObjectDirtyVars($this);

        return !empty($vars);
    }

    /**
     * @param bool $safe
     * @return string
     */
    public static function getLastRequest($safe = true)
    {
        return self::$manager->getClient()->getLastRequest($safe);
    }

    /**
     * @return string
     */
    public static function getLastResponse()
    {
        return self::$manager->getClient()->getLastResponse();
    }

    /**
     * Computes unique id of a class. Used by array_diff
     * @return string
     * @throws ReflectionException
     */
    public function __toString()
    {
        $data = self::getExtendedObjectVars($this);
        return md5(serialize($data));
    }

    /**
     * @return false|string
     * @throws ReflectionException
     */
    public function serialize()
    {
        $data = self::getExtendedObjectVars($this);

        $data['raw']            = $this->raw;
        $data['lastParameters'] = $this->lastParameters;
        $data['snapshot']       = $this->snapshot;
        $data['transient']      = $this->transient;

        return json_encode($data);
    }

    /**
     * @param string $serialized
     * @return void
     * @throws ReflectionException
     */
    public function unserialize($serialized)
    {
        $json = json_decode($serialized, true);

        $data       = self::getObjectVars($this);
        $properties = array_keys($data);

        foreach ($properties as $property) {
            $this->{$property} = $json[$property];
        }

        $this->raw            = $json['raw'];
        $this->lastParameters = $json['lastParameters'];
        $this->snapshot       = $json['snapshot'];
        $this->transient      = $json['transient'];
        $this->attributes     = $json['attributes'];
        $this->stableHash     = $json['stableHash'];
    }

    /**
     * Implements magic getters and setters for all public class properties with tag @cx_field true
     * Feel free to declare your getters and setters to provide your own implementation
     * @param string $name
     * @param array  $arguments
     * @return mixed
     * @throws ReflectionException|Exception
     */
    public function __call($name, $arguments)
    {
        $action             = substr($name, 0, 3);
        $property           = lcfirst(substr($name, 3));
        $reflectionProperty = $this->getPropertyCache($property);
        $value              = (isset($arguments[0])) ? $arguments[0] : null;

        if ($reflectionProperty === false) {
            throw new Exception(sprintf('property "%s" does not exist', $property));
        }

        $valueClass        = $reflectionProperty['value_class'];
        $associationTarget = $reflectionProperty['targetEntity'];

        if ($action === 'set') {
            if (is_array($value)) {
                if ($reflectionProperty['OneToOne']) {
                    if (substr($associationTarget, 0, 2) == 'CR') {
                        $associationTarget = self::getEntityClassName($associationTarget);
                    }
                    $value = new $associationTarget($value);
                } else if ($reflectionProperty['OneToMany']) {
                    $value = new Collection($value, $associationTarget);
                } else if (in_array($valueClass, [NSArray::DATA_TYPE, NSDictionary::DATA_TYPE])) {
                    $class = 'Carerix\Api\Rest\DataType\\' . $valueClass;
                    $value = new $class($value);
                }
            }
            $this->{$property} = $value;
            return $this;
        } else if ($action === 'get') {
            if ($reflectionProperty['OneToMany']) {
                // try to read a collection element by $index
                if (is_int($value)) {
                    return $this->{$property}[$value];
                }
            }
            return $this->{$property};
        }

        throw new Exception(sprintf('method "%s" is not supported', $name));
    }

    /**
     * @param string $propertyName  - Name of the field, like applyTags, id, etc.
     * @param string $attributeName - Name of the attribute from this field
     * @return string
     * @throws ReflectionException
     */
    protected function getAttributeValueByPropertyName($propertyName, $attributeName)
    {
        return Entity::getVar(
            $this->getReflectionClass()->getProperty($propertyName),
            $attributeName
        );
    }

    /**
     * @return ReflectionClass
     * @throws ReflectionException
     */
    protected function getReflectionClass()
    {
        if (is_null($this->reflectionClass)) {
            $this->reflectionClass = new ReflectionClass($this);
        }

        return $this->reflectionClass;
    }

    /**
     * Fill the cache of properties name and docBlock data
     * @return void
     * @throws ReflectionException
     */
    protected function initPropertyCache()
    {
        $class        = get_class($this);
        $reflection   = $this->getReflectionClass();
        $propertyList = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        if (!isset(self::$propertyCache)) {
            self::$propertyCache = [];
        }
        if (!isset(self::$propertyCache[$class])) {
            self::$propertyCache[$class] = [];
        } else {
            return;
        }
        foreach ($propertyList as $item) {
            $docComment = $item->getDocComment();
            if (self::isCxField($docComment)) {
                self::$propertyCache[$class][$item->getName()] = [
                    'value_class'  => self::getVar($docComment, 'value_class'),
                    'targetEntity' => self::getAssociationTarget($docComment),
                    'OneToOne'     => self::isOneToOneAssociation($docComment),
                    'OneToMany'    => self::isOneToManyAssociation($docComment),
                ];
            }
        }
    }

    /**
     * @param string $index
     * @return array|false
     * @throws ReflectionException
     */
    protected function getPropertyCache($index = null)
    {
        $class = get_class($this);
        $this->initPropertyCache();
        if (is_null($index)) {
            return self::$propertyCache[$class];
        }

        return (array_key_exists($index, self::$propertyCache[$class])) ? self::$propertyCache[$class][$index] : false;
    }

    public function __wakeup()
    {
        // reset reflectionClass cache cause "Failed to retrieve the reflection object" error
        // happens when trying to get reflectionClass after object was serialized and unserialized
        $this->reflectionClass = null;
    }
}
