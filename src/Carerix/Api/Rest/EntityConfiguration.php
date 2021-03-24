<?php

namespace Carerix\Api\Rest;

use Carerix\Api\Rest\ResponseTransformer\AbstractResponseTransformer;
use Carerix\Api\Rest\URLGenerator\AbstractURLGenerator;
use ReflectionClass;

class EntityConfiguration
{
    const RESPONSE_TYPE_XML    = 'xml';
    const RESPONSE_TYPE_JSON   = 'json';
    const RESPONSE_TYPE_SENCHA = 'sencha';
    const RESPONSE_TYPE_JS     = 'js';

    private $url;
    private $userName;
    private $password;
    private $proxy;
    private $name;
    private $urlGeneratorImpl;
    private $responseTransformerImpl;
    private $identifierKey;
    private $className;
    private $reflection;
    private $properties   = [];
    private $responseType = self::RESPONSE_TYPE_XML;

    /**
     * EntityConfiguration constructor
     * @param $className
     */
    public function __construct($className)
    {
        $this->className  = $className;
        $this->reflection = new ReflectionClass(Entity::ENTITIES_NAMESPACE . $className);
        foreach ($this->reflection->getProperties() as $property) {
            $declaringClass = $property->getDeclaringClass()->getName();
            if (strpos($declaringClass, 'Abstract') == false) {
                $declaringClass = substr($declaringClass, strpos($declaringClass, 'Entity\\') + 7);
            }

            if ($declaringClass == $className || stripos($declaringClass, 'Abstract')) {
                $this->properties[] = $property->getName();
            }
        }
    }

    /**
     * @param Entity $entity
     * @param        $attribute
     * @return mixed
     */
    public function getValue(Entity $entity, $attribute)
    {
        return property_exists($entity, $attribute) ? $entity->{$attribute} : null;
    }

    /**
     * @param Entity $entity
     * @param        $key
     * @param mixed  $value
     */
    public function setValue(Entity $entity, $key, $value)
    {
        $entity->{$key} = $value;
    }

    /**
     * @return mixed
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param mixed $responseType
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return AbstractURLGenerator
     */
    public function getUrlGeneratorImpl()
    {
        return $this->urlGeneratorImpl;
    }

    /**
     * @param AbstractURLGenerator $urlGeneratorImpl
     */
    public function setUrlGeneratorImpl(AbstractURLGenerator $urlGeneratorImpl)
    {
        $this->urlGeneratorImpl = $urlGeneratorImpl;
    }

    /**
     * @return AbstractResponseTransformer
     */
    public function getResponseTransformerImpl()
    {
        return $this->responseTransformerImpl;
    }

    /**
     * @param AbstractResponseTransformer $responseTransformerImpl
     */
    public function setResponseTransformerImpl(AbstractResponseTransformer $responseTransformerImpl)
    {
        $this->responseTransformerImpl = $responseTransformerImpl;
    }

    /**
     * @return mixed
     */
    public function getIdentifierKey()
    {
        return $this->identifierKey;
    }

    /**
     * @param mixed $identifierKey
     */
    public function setIdentifierKey($identifierKey)
    {
        $this->identifierKey = $identifierKey;
    }

    /**
     * @param $options
     * @return mixed
     */
    public function generateUrl($options)
    {
        return $this->urlGeneratorImpl->generate($options);
    }

    public function getClass()
    {
        return $this->className;
    }

    /**
     * @return mixed
     */
    public function newInstance()
    {
        $className = '\Carerix\Api\Rest\Entity\\' . $this->getClass();
        return new $className();
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }
}
