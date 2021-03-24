<?php

namespace Carerix\Api\Rest;

use Exception;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;
use SimpleXMLElement;

class EntityGenerator
{
    const API_ENDPOINT          = 'https://api.carerix.com';
    const ABSTRACT_CLASS        = 'CR';
    const COLLECTION_CLASS      = 'Collection';
    const DATA_TYPES            = ['NSDictionary', 'NSArray'];
    const ENTITY_BASE_NAMESPACE = 'Carerix\Api\Rest\Entity';

    /**
     * List of entities to generate data models for
     * @var array
     */
    protected $entities;

    /**
     * @var string
     */
    protected $endpoint = self::API_ENDPOINT;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @param string $entity
     * @return bool|string
     * @throws Exception
     */
    public function getScheme($entity)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getEndpoint() . '/' . $entity . '/describe');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Expect:']);
        curl_setopt($ch, CURLOPT_PROXY, 'localhost:8888');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_USERAGENT, __CLASS__);
        $username = $this->getUsername();
        $password = $this->getPassword();
        if ($username && $password) {
            curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
        }

        $result = curl_exec($ch);
        if (!$result) {
            $errorNumber = curl_errno($ch);
            $error       = curl_error($ch);
            curl_close($ch);
            throw new Exception($errorNumber . ': ' . $error);
        }

        curl_close($ch);
        return $result;
    }

    /**
     * Generate abstract classes
     * @param string $dir where to generate classes
     * @return void
     */
    public function build($dir = null)
    {
        foreach ($this->getEntities() as $entity) {
            try {
                $xml = $this->getScheme($entity);
            } catch (Exception $ex) {
                echo $ex->getMessage();
                continue;
            }

            $sxe = new SimpleXMLElement($xml);

            $entityClassNameX     = 'Abstract' . $this->getEntityClassName($entity);
            $entityClassFileNameX = 'AbstractEntity/' . $entityClassNameX;
            $entityPathX          = $dir . '/' . $entityClassFileNameX;

            $file    = new PhpFile();
            $printer = new PsrPrinter();
            $class   = new ClassType($entityClassNameX);
            $class->setExtends(Entity::class);
            $class->setAbstract();

            foreach (self::getClassDocblock()['tags'] as $tag) {
                $comment = !empty($tag['name']) ? '@' . $tag['name'] . ' ' . $tag['description'] : $tag['description'];
                $class->addComment($comment);
            }
            $class->addConstant('ENTITY', $entity);
            $this->addCommonMethodsX($entity, $class);

            $namespace = $file->addNamespace(self::ENTITY_BASE_NAMESPACE . '\AbstractEntity');

            // attributes
            foreach ($sxe->attribute as $attribute) {
                if (in_array($attribute['value-class'], self::DATA_TYPES)) {
                    $namespace->addUse('Carerix\Api\Rest\DataType\\' . $attribute['value-class']);
                }
                $this->addAttribute($class, $attribute);
                if ((string)$attribute['name'] === 'additionalInfo') {
                    $attribute['name'] = 'additionalInfoPartial';
                    $this->addAttribute($class, $attribute);
                }
            }

            // relationships
            foreach ($sxe->relationship as $relationship) {
                $namespace->addUse(self::ENTITY_BASE_NAMESPACE . '\\' . $relationship['destination-entity']);
                if (self::isMany($relationship)) {
                    $namespace->addUse('Carerix\Api\Rest\\' . self::COLLECTION_CLASS);
                }
                $this->addRelationship($class, $relationship);
            }

            $namespace->add($class);
            $this->mkdir($entityPathX);
            file_put_contents($entityPathX . '.php', $printer->printFile($file));
            $sxe = $xml = $class = $code = null;
            // build concrete classes
            $entityClassNameX     = $this->getEntityClassName($entity);
            $entityClassFileNameX = $entityClassNameX;
            $entityPathX          = $dir . '/' . $entityClassFileNameX;

            $file  = new PhpFile();
            $class = new ClassType($entityClassNameX);
            $class->setExtends(self::ENTITY_BASE_NAMESPACE . '\AbstractEntity\Abstract' . $entityClassNameX);
            foreach (self::getClassDocblock()['tags'] as $tag) {
                $comment = !empty($tag['name']) ? '@' . $tag['name'] . ' ' . $tag['description'] : $tag['description'];
                $class->addComment($comment);
            }
            $this->mkdir($entityPathX);

            // don't override existing concrete classes
            if (file_exists($entityPathX . '.php')) {
                continue;
            }

            $namespace = $file->addNamespace(self::ENTITY_BASE_NAMESPACE);
            $namespace->add($class);
            $this->mkdir($entityPathX);
            file_put_contents($entityPathX . '.php', $printer->printFile($file));
        }
    }

    /**
     * Entity property: generate an attribute and corresponding mutators
     * @param ClassType        $class
     * @param SimpleXMLElement $attribute
     */
    protected function addAttribute(ClassType $class, SimpleXMLElement $attribute)
    {
        $paramType = self::normalizeVarType($attribute['value-class']);
        $property  = [
            'name'       => (string)$attribute['name'],
            'visibility' => 'public',
            'docblock'   => [
                'tags' => [
                    [
                        'name'        => 'cx_field',
                        'description' => 'true',
                    ],
                    [
                        'name'        => 'access',
                        'description' => 'private',
                    ],
                    [
                        'name'        => 'var',
                        'description' => $paramType,
                    ],
                    [
                        'name'        => 'value_class',
                        'description' => $attribute['value-class'],
                    ],
                    [
                        'name'        => 'allows_null',
                        'description' => $attribute['allows-null'],
                    ],
                ]
            ]
        ];
        switch ($attribute['value-class']) {
            case 'NSString':
            case 'PRBitVector':
                $property = array_merge_recursive($property, [
                    'docblock' => [
                        'tags' => [
                            [
                                'name'        => 'width',
                                'description' => $attribute['width'],
                            ],
                        ]
                    ]]);

                break;
            case 'NSNumber':
                $property = array_merge_recursive($property, [
                    'docblock' => [
                        'tags' => [
                            [
                                'name'        => 'value_type',
                                'description' => $attribute['value-type'],
                            ],
                            [
                                'name'        => 'value_type_human',
                                'description' => self::normalizeValueType($attribute['value-type']),
                            ],
                        ]
                    ]]);

                break;
        }

        // @see GET /CRDataNode/describe
        if (property_exists($attribute, 'isUnique')) {
            $property = array_merge_recursive($property, [
                'docblock' => [
                    'tags' => [
                        [
                            'name'        => 'isUnique',
                            'description' => (string)$attribute->isUnique,
                        ],
                    ]
                ]]);
        }

        //Set sublement name for NSArray
        if (property_exists($attribute, 'xmlSubelementName')) {
            $property = array_merge_recursive($property, [
                'docblock' => [
                    'tags' => [
                        [
                            'name'        => 'xmlSubelementName',
                            'description' => (string)$attribute->xmlSubelementName,
                        ],
                    ]
                ]]);
        }

        // set default value if any
        if (isset($attribute['default'])) {
            $property = array_merge_recursive($property, [
                'defaultValue' => (int)$attribute['default'],
            ]);
        }

        $methodName     = ucfirst($attribute['name']);
        $setMethodName  = 'set' . $methodName;
        $getMethodName  = 'get' . $methodName;
        $classTagSetter = [
            'name'        => 'method',
            'description' => $class->getName() . ' ' . $setMethodName . '() ' . $setMethodName . '(' . $paramType . ' $value)',
        ];
        $classTagGetter = [
            'name'        => 'method',
            'description' => $paramType . ' ' . $getMethodName . ' ' . $getMethodName . '()',
        ];
        $classTags      = [$classTagSetter, $classTagGetter];

        $classProperty = $class
            ->addProperty($property['name'], null)
            ->setPublic();

        foreach ($property['docblock']['tags'] as $tag) {
            try {
                $classProperty->addComment('@' . $tag['name'] . ' ' . $tag['description']);
            } catch (Exception $e) {
                echo $e;
            }
        }

        foreach ($classTags as $tag) {
            try {
                $class->addComment('@' . $tag['name'] . ' ' . $tag['description']);
            } catch (Exception $e) {
                echo $e;
            }
        }
    }

    /**
     * Entity relationship: generate an attribute and corresponding mutators
     * @param ClassType        $class
     * @param SimpleXMLElement $relationship
     */
    protected function addRelationship(ClassType $class, SimpleXMLElement $relationship)
    {
        $paramType = $relationship['destination-entity'];
        $property  = [
            'name'       => (string)$relationship['name'],
            'visibility' => 'public',
            'docblock'   => [
                'tags' => [
                    [
                        'name'        => 'cx_field',
                        'description' => 'true',
                    ],
                    [
                        'name'        => 'access',
                        'description' => 'private',
                    ],
                    [
                        'name'        => 'var',
                        'description' => self::isMany($relationship) ? self::COLLECTION_CLASS : $paramType,
                    ],
                    [
                        'name'        => self::isMany($relationship) ? 'OneToMany' : 'OneToOne',
                        'description' => '(targetEntity="' . $paramType . '")',
                    ],
                    [
                        'name'        => 'mandatory',
                        'description' => $relationship['mandatory'],
                    ],
                    [
                        'name'        => 'destination_entity',
                        'description' => $relationship['destination-entity'],
                    ],
                    [
                        'name'        => 'to_many',
                        'description' => $relationship['to-many'],
                    ],
                    [
                        'name'        => 'name',
                        'description' => $relationship['name'],
                    ],
                ]
            ]
        ];

        if (property_exists($relationship, 'default')) {
            $property = array_merge_recursive($property, [
                'docblock' => [
                    'tags' => [
                        [
                            'name'        => 'default',
                            'description' => (string)$relationship->default,
                        ],
                    ]
                ]]);
        }
        if (property_exists($relationship, 'nodeType')) {
            $property = array_merge_recursive($property, [
                'docblock' => [
                    'tags' => [
                        [
                            'name'        => 'nodeType',
                            'description' => (string)$relationship->nodeType,
                        ],
                    ]
                ]]);
        }
        // @see GET /CRDataNode/describe
        if (property_exists($relationship, 'inverseName')) {
            $property = array_merge_recursive($property, [
                'docblock' => [
                    'tags' => [
                        [
                            'name'        => 'inverseName',
                            'description' => (string)$relationship->inverseName,
                        ],
                    ]
                ]]);
        }

        $methodName     = ucfirst($relationship['name']);
        $setMethodName  = 'set' . $methodName;
        $getMethodName  = 'get' . $methodName;
        $classTagSetter = [
            'name'        => 'method',
            'description' => $class->getName() . ' ' . $setMethodName . '() ' . $setMethodName . '(' . (self::isMany($relationship) ? 'array|' . self::COLLECTION_CLASS . ' $values' : 'array|' . $paramType . ' $value') . ')',
        ];
        $classTagGetter = [
            'name'        => 'method',
            'description' => (self::isMany($relationship) ?
                    self::COLLECTION_CLASS . '|' . $paramType
                    : $paramType) . ' ' . $getMethodName . ' ' . $getMethodName . '(%s)',
        ];
        if (self::isMany($relationship)) {
            $classTagGetter['description'] = sprintf($classTagGetter['description'], '');
        } else {
            $classTagGetter['description'] = sprintf($classTagGetter['description'], '$index = null');
        }

        $classTags = [$classTagSetter, $classTagGetter];

        $classProperty = $class
            ->addProperty($property['name'], null)
            ->setPublic();

        foreach ($property['docblock']['tags'] as $tag) {
            try {
                $classProperty->addComment('@' . $tag['name'] . ' ' . $tag['description']);
            } catch (Exception $e) {
                echo $e;
            }
        }

        foreach ($classTags as $tag) {
            try {
                $class->addComment('@' . $tag['name'] . ' ' . $tag['description']);
            } catch (Exception $e) {
                echo $e;
            }
        }
    }

    /**
     * Carerix integer type description
     * @param string $value
     * @return string
     */
    public static function normalizeValueType($value)
    {
        switch ($value) {
            case 's':
                return 'short integer (16 bits)';
            case 'i':
                return 'long integer (32 bits)';
            default:
                return null;
        }
    }

    /**
     * Add shared methods to all classes
     * @param string    $entity
     * @param ClassType $class
     * @return void
     */
    protected function addCommonMethodsX($entity, ClassType $class)
    {
        $class->addMethod('configure')
            ->setStatic()
            ->setPublic()
            ->setBody('parent::configure($entityConfiguration);' . PHP_EOL .
                '$entityConfiguration->setIdentifierKey("' . self::getIdentifierKey($entity) . '");' . PHP_EOL .
                '$entityConfiguration->setName("' . $entity . '");')
            ->addParameter('entityConfiguration')
            ->setType(EntityConfiguration::class);
    }

    /**
     * Converts entity names using different patterns
     * @param String $entity
     * @param String $explode
     * @param String $implode
     * @return string
     */
    public static function getEntityName($entity, $explode = '-', $implode = '_')
    {
        $parts = explode($explode, $entity);
        $parts = array_map('ucfirst', $parts);
        return implode($implode, $parts);
    }

    /**
     * @param string $entity
     * @return string
     */
    public static function getIdentifierKey($entity)
    {
        if (substr($entity, 0, 2) == 'CR') {
            $entity = substr($entity, 2);
        }
        $entity = lcfirst($entity);
        return $entity . 'ID';
    }

    /**
     * @param string $entity
     * @return string
     */
    public static function getEntityClassName($entity)
    {
        return $entity;
    }

    /**
     * @param string $filename
     * @return void
     */
    protected function mkdir($filename)
    {
        $dir = dirname($filename);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    /**
     * @param SimpleXMLElement $element
     * @return boolean
     */
    protected static function isMany(SimpleXMLElement $element)
    {
        return (string)$element['to-many'] == '1';
    }

    /**
     * @param SimpleXMLElement $element
     * @return boolean
     */
    protected static function isOptionalAttribute(SimpleXMLElement $element)
    {
        return (string)$element['allows-null'] == '1';
    }

    /**
     * Maps Carerix variable type to PHP type
     * @param string $type
     * @return string
     */
    protected static function normalizeVarType($type)
    {
        switch ($type) {
            default:
            case 'NSData':
            case 'NSCalendarDate':
            case 'NSString':
            case 'PRBitVector':
                return 'string';

            case 'NSNumber':
                return 'integer';

            case 'NSDecimalNumber':
                return 'float';

            case 'NSArray':
                return 'NSArray|array';

            case 'NSDictionary':
                return 'NSDictionary|array';
        }
    }

    /**
     * @return array
     */
    public static function getClassDocblock()
    {
        return [
            'tags' => [
                [
                    'name'        => '',
                    'description' => "THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT. \nYOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.",
                ],
                [
                    'name'        => 'version',
                    'description' => date('r'),
                ],
            ]
        ];
    }

    /**
     * @param string $value
     * @return array
     */
    protected static function getDefaults($value)
    {
        $defaults = explode(',', $value);
        return array_map('trim', $defaults);
    }

    /**
     * @param string $value
     * @return array
     */
    protected static function getDefault($value)
    {
        $parts = explode('=', $value);
        return array_map('trim', $parts);
    }

    /**
     * @param string $value
     * @return array
     */
    protected static function keyPathToArray($value)
    {
        return explode('.', $value);
    }

    /**
     * @param array $entities entities
     * @return self
     */
    public function setEntities($entities)
    {
        $this->entities = $entities;
        return $this;
    }

    /**
     * @return array
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * @param string $username username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $password password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint endpoint
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }
}
