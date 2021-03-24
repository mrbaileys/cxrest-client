<?php

namespace Carerix\Api\Rest;

use Exception;
use InvalidArgumentException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionException;
use SplFileObject;

class Manager
{
    const COLLECTION_ROOT_ELEMENT = 'array';

    private $responseTransformerImpl = 'CustomResponseTransformer';
    private $urlGeneratorImpl        = 'StandardURLGenerator';
    private $url                     = 'https://api.carerix.com/';
    private $username;
    private $password;
    private $proxy;

    private $client;

    private $entityConfigurations = [];
    private $identityMap          = [];

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Manager
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Manager
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Manager
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param mixed $proxy
     * @return Manager
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseTransformerImpl()
    {
        return $this->responseTransformerImpl;
    }

    /**
     * @param string $responseTransformerImpl
     * @return Manager
     */
    public function setResponseTransformerImpl(string $responseTransformerImpl)
    {
        $this->responseTransformerImpl = $responseTransformerImpl;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlGeneratorImpl()
    {
        return $this->urlGeneratorImpl;
    }

    /**
     * @param string $urlGeneratorImpl
     * @return Manager
     */
    public function setUrlGeneratorImpl(string $urlGeneratorImpl)
    {
        $this->urlGeneratorImpl = $urlGeneratorImpl;
        return $this;
    }

    /**
     * Register an entity
     * @param string $entity
     * @return void
     */
    public function registerEntity($entity)
    {
        $this->entityConfigurations[$entity] = 'Carerix\Api\Rest\Entity\\' . $entity;
    }

    /**
     * Register entities
     * @param array $entities
     * @return void
     */
    public function registerEntities($entities)
    {
        foreach ($entities as $entity) {
            $this->registerEntity($entity);
        }
    }

    /**
     * Automatically discover and register entities
     * @return void
     */
    public function autoDiscoverEntities()
    {
        $this->discoverEntitiesFromPath(dirname(__FILE__) . '/Entity');
    }

    /**
     * Automatically discover and register entities within the specified path.
     * @param string $path location of entities
     * @param string $abstract
     * @return void
     */
    public function discoverEntitiesFromPath($path, $abstract = EntityGenerator::ABSTRACT_CLASS)
    {
        $path = realpath($path);
        /** @var SplFileObject $it */
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::KEY_AS_PATHNAME));
        while ($it->valid()) {
            if (
                $it->isFile()
                && pathinfo($it->getRealPath(), PATHINFO_EXTENSION) == 'php'
                && !preg_match('/' . preg_quote(DIRECTORY_SEPARATOR . 'AbstractEntity' . DIRECTORY_SEPARATOR, '/') . '/', $it->getRealPath())
            ) {
                $file = $it->key();

                $entity = str_replace(DIRECTORY_SEPARATOR, '_', $file);
                $pos    = strpos($entity, $abstract);
                $entity = substr($entity, $pos);
                $entity = pathinfo($entity, PATHINFO_FILENAME);

                $this->registerEntity($entity);
            }
            $it->next();
        }
    }

    /**
     * Get entity configuration
     * @param Entity|string $className
     * @return EntityConfiguration
     */
    public function getEntityConfiguration($className)
    {
        if ($className instanceof Entity) {
            $className = get_class($className);
        }
        $array      = explode('\\', $className);
        $entityName = array_pop($array);

        if (!isset($this->entityConfigurations[$entityName])) {
            throw new InvalidArgumentException(sprintf('Could not find entity configuration for "%s"', $entityName));
        }

        $entityConfiguration = $this->entityConfigurations[$entityName];
        if ($entityConfiguration instanceof EntityConfiguration) {
            return $entityConfiguration;
        }

        $entityConfiguration = new EntityConfiguration($entityName);
        $entityConfiguration->setUrl($this->getUrl());
        $entityConfiguration->setUsername($this->getUsername());
        $entityConfiguration->setPassword($this->getPassword());
        $entityConfiguration->setProxy($this->getProxy());

        if ($urlGeneratorImpl = $this->getUrlGeneratorImpl()) {
            $generatorClassName = 'Carerix\Api\Rest\URLGenerator\\' . $urlGeneratorImpl;
            $entityConfiguration->setURLGeneratorImpl(new $generatorClassName($entityConfiguration));
        }

        if ($responseTransformerImpl = $this->getResponseTransformerImpl()) {
            $transformerClassName = 'Carerix\Api\Rest\ResponseTransformer\\' . $responseTransformerImpl;
            $entityConfiguration->setResponseTransformerImpl(new $transformerClassName($entityConfiguration));
        }

        // override options with entity specific config
        $entityNameWithNamespace = Entity::ENTITIES_NAMESPACE . $entityName;
        call_user_func_array(
            [$entityNameWithNamespace, 'configure'],
            [$entityConfiguration]
        );

        $this->entityConfigurations[$entityName] = $entityConfiguration;

        return $this->entityConfigurations[$entityName];
    }

    /**
     * Check if entity exists
     * @param Entity $entity
     * @return boolean
     */
    public function entityExists(Entity $entity)
    {
        return (bool)$this->getEntityIdentifier($entity);
    }

    /**
     * Get entity identifier
     * @param Entity $entity
     * @return string
     */
    public function getEntityIdentifier(Entity $entity)
    {
        $configuration    = $this->getEntityConfiguration($entity);
        $identifierKey    = $configuration->getIdentifierKey();
        $entityIdentifier = $configuration->getValue($entity, $identifierKey);
        // required! handles a situation when id was assigned after object was initialized
        if ($entityIdentifier === null && property_exists($entity, $identifierKey) && $entity->$identifierKey !== null) {
            $entityIdentifier = $entity->$identifierKey;
        }
        return $entityIdentifier;
    }

    /**
     * Set entity identifier
     * @param Entity $entity
     * @param mixed  $value
     */
    public function setEntityIdentifier(Entity $entity, $value)
    {
        $configuration = $this->getEntityConfiguration(get_class($entity));
        $identifierKey = $configuration->getIdentifierKey();
        $configuration->setValue($entity, $identifierKey, $value);
    }

    /**
     * Execute REST request
     * @param Entity|string $entity
     * @param string        $url        request url
     * @param string        $method     request method
     * @param array         $parameters request params
     * @param string        $body       request body
     * @param integer       $hydrate    hydration mode
     * @return mixed Collection|Entity|array|xml|null
     * @throws Exception
     */
    public function execute($entity, $url = null, $method = Client::GET, $parameters = [], $body = null, $hydrate = null)
    {
        $configuration = $this->getEntityConfiguration($entity);

        $request = new Request();
        $request->setUrl($url);
        $request->setMethod($method);
        $request->setBody($body);
        $request->setUsername($configuration->getUsername());
        $request->setPassword($configuration->getPassword());
        $request->setProxy($configuration->getProxy());
        $request->setResponseType($configuration->getResponseType());
        $request->setResponseTransformerImpl($configuration->getResponseTransformerImpl());

        $responseText = $this->client->execute($request);

        return $this->parse($responseText, $entity, $hydrate);
    }

    /**
     * @param EntityConfiguration $configuration
     * @param                     $identifier
     * @return mixed
     */
    protected function instanceFromIdentityMap(EntityConfiguration $configuration, $identifier)
    {
        $className = $configuration->getClass();

        if (!isset($this->identityMap[$className][$identifier])) {
            $instance = $configuration->newInstance();
            if (!isset($this->identityMap[$className])) {
                $this->identityMap[$className] = [];
            }
            $this->identityMap[$className][$identifier] = $instance;
        }

        return $this->identityMap[$className][$identifier];
    }

    /**
     * @param EntityConfiguration $configuration
     * @param                     $identifier
     * @param                     $instance
     */
    protected function updateInstanceInIdentityMap(EntityConfiguration $configuration, $identifier, $instance)
    {
        $className                                  = $configuration->getClass();
        $this->identityMap[$className][$identifier] = $instance;
    }

    /**
     * Parse server's response and hydrate it if necessary
     * @param string        $responseText
     * @param Entity|string $entity
     * @param integer       $hydrate hydration mode
     * @return string|Entity|Collection
     * @throws Exception
     */
    public function parse($responseText, $entity, $hydrate = null)
    {
        $configuration = $this->getEntityConfiguration($entity);

        if ($hydrate === Entity::HYDRATE_NONE) {
            return $responseText;
        }

        $result = $configuration->getResponseTransformerImpl()->transform($responseText);

        if ($hydrate === Entity::HYDRATE_ARRAY) {
            return $result;
        }

        if (!is_array($result)) {
            return $result;
        }

        // <array count="\d+"> doesn't always exist.
        // data-node/list-by doesn't have count attribute in the results, e.g. <array></array>
        // have to check the name of the root node, if = array then we have a collection
        if ($configuration->getResponseTransformerImpl()->getRootName() == self::COLLECTION_ROOT_ELEMENT) {
            // parsing a collection
            $entityName = Entity::getEntityFromObject($configuration->getClass());

            $collection = new Collection();
            $collection->setRaw($responseText);

            if (!array_key_exists($entityName, $result)) {
                return $this->hydrateCollection($collection, $hydrate);
            }

            // not always available (see data-node/list-by)
            if (array_key_exists('attributes', $result) && array_key_exists('count', $result['attributes'])) {
                $collection->setTotalCount((int)$result['attributes']['count']);
                unset($result['attributes']);
            }

            // wrap single record in array
            if (!array_key_exists(0, $result[$entityName])) {
                $result[$entityName] = [$result[$entityName]];
            }

            // drop 'CR*' index
            $result = array_shift($result);

            // add count for results w/o "count" attribute in root "array" element
            if ($collection->getTotalCount() === null) {
                $collection->setTotalCount(count($result));
            }

            foreach ($result as $data) {
                $identifier = $this->getIdentifier($configuration, $data);
                $instance   = $this->instanceFromIdentityMap($configuration, $identifier);
                $collection->append($this->hydrateObject($configuration, $instance, $data, null));
            }

            return $this->hydrateCollection($collection, $hydrate);
        } else {
            // parsing a single record
            $identifier = $this->getIdentifier($configuration, $result);
            if ($entity instanceof Entity) {
                $instance = $this->hydrateObject($configuration, $entity, $result, $hydrate);
                $this->updateInstanceInIdentityMap($configuration, $identifier, $instance);
            } else {
                // this approach doesn't warrant 2 entities with the same id to co-exist provided
                // they were fetched w/ different query params
                if ($identifier !== null) {
                    $instance = $this->instanceFromIdentityMap($configuration, $identifier);
                } else {
                    // no identifier is available - new record
                    // usage scenario: Entity::fromXml('<?xml><CREntity><attr>value</attr></CREntity>
                    $instance = $configuration->newInstance();
                }
                $instance->setRaw($responseText); // set raw server response for raw hydration feature
                $instance = $this->hydrateObject($configuration, $instance, $result, $hydrate);
            }

            return $instance;
        }
    }

    /**
     * Get identifier
     * @param EntityConfiguration $configuration
     * @param array               $result
     * @return mixed|null
     */
    public function getIdentifier(EntityConfiguration $configuration, $result)
    {
        $identifierKey = $configuration->getIdentifierKey();
        if (array_key_exists($identifierKey, $result)) {
            return $result[$identifierKey];
        } elseif (array_key_exists('attributes', $result) && array_key_exists('id', $result['attributes'])) {
            return $result['attributes']['id'];
        }

        return null;
        // incompatible w/ Entity::fromXml method. XML document might contain a new record w/o id.
    }

    /**
     * Generate a unique pointer for entity object
     * @param EntityConfiguration $configuration
     * @param String              $response raw response body from the server
     * @return string
     */
    public function getUniqueIdentifier(EntityConfiguration $configuration, $response)
    {
        return md5($response);
    }

    /**
     * Hydrates a collection
     * @param Collection $collection
     * @param integer    $hydrate [optional] hydration mode
     * @return mixed Collection|array|xml
     * @throws ReflectionException
     */
    private function hydrateCollection(Collection $collection, $hydrate = null)
    {
        if ($hydrate === Entity::HYDRATE_OBJECT_ARRAY) {
            return $collection->toArray();
        }
        if ($hydrate === Entity::HYDRATE_OBJECT_XML) {
            return $collection->toXml();
        }

        return $collection;
    }

    /**
     * Update in-memory entity state
     * @param EntityConfiguration $configuration
     * @param Entity              $instance
     * @param array               $data
     * @param integer             $hydrate
     * @return mixed Entity|array|string
     * @throws Exception
     */
    private function hydrateObject(EntityConfiguration $configuration, Entity $instance, array $data, $hydrate = null)
    {
        Entity::fromArrayStatic($data, $instance, $configuration);
        if ($hydrate === Entity::HYDRATE_OBJECT_ARRAY) {
            return $instance->toArray();
        }
        if ($hydrate === Entity::HYDRATE_OBJECT_XML) {
            return $instance->toXml();
        }

        return $instance;
    }
}
