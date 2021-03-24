<?php

namespace Carerix\Api\Rest\DataType;

use ArrayObject;
use Carerix\Api\Rest\Exception;
use Carerix\Api\Rest\Entity;
use ReflectionException;
use ReflectionProperty;
use SimpleXMLElement;

class NSArray extends ArrayObject implements DataTypeInterface
{
    const DATA_TYPE              = 'NSArray';
    const DEFAULT_ARRAY_ITEM_KEY = 'arrayitem';

    /**
     * @var string
     */
    protected $subElementName = null;

    /**
     * Converts array received from XML parser into class instance
     * @param array                   $array
     * @param ReflectionProperty|null $reflection
     * @return NSArray
     */
    public static function fromArray($array, $reflection = null)
    {
        $subElementName = Entity::getVar($reflection, 'xmlSubelementName');
        $values         = [];

        if (!is_array($array)) {
            return new NSArray();
        }
        foreach ($array as $k => $v) {
            $type = null;
            switch (true) {
                case $k === NSDictionary::DATA_TYPE:
                    $type = '\Carerix\Api\Rest\DataType\NSDictionary';
                    break;

                case substr($k, 0, 2) == 'CR':
                    $type = Entity::ENTITIES_NAMESPACE . '' . $k;
                    break;

                default:
                    break;
            }
            // convert single-dimensional array to multi-dimensional
            if (!is_array($v) || !array_key_exists(0, $v)) {
                $v = [$v];
            }
            foreach ($v as $vv) {
                // special case when dealing with entity object
                if (substr($k, 0, 2) == 'CR') {
                    $values[] = call_user_func_array($type . '::fromArrayStatic', [$vv]);
                } else {
                    if (isset($type)) {
                        $values[] = new $type($vv);
                    } elseif ($subElementName || $k === self::DEFAULT_ARRAY_ITEM_KEY) {
                        $values[] = $vv;
                    }
                }
            }
        }
        $array = new NSArray($values);
        $array->setSubElementName($subElementName);

        return $array;
    }

    /**
     * @return array
     * @throws ReflectionException
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $k => $v) {
            if (
                $v instanceof NSDictionary
                || $v instanceof Entity
            ) {
                $array[$k] = $v->toArray();
            }
        }
        return $array;
    }

    /**
     * @param SimpleXMLElement $sxe
     * @return SimpleXMLElement
     * @throws ReflectionException
     */
    public function toSimpleXMLElement(&$sxe = null)
    {
        $subElementName = $this->getSubElementName();
        if ($sxe === null) {
            $sxe = new SimpleXMLElement('<' . self::DATA_TYPE . '/>');
        }

        foreach ($this as $v) {
            if ($v instanceof NSDictionary) {
                $v->toSimpleXMLElement($sxe->{NSDictionary::DATA_TYPE}[]);
            } elseif ($v instanceof Entity) {
                $entity = Entity::getEntityFromObject($v);
                $v->toSimpleXMLElement($sxe->{$entity}, $v);
            } elseif ($subElementName) {
                $sxe->addChild($subElementName, $v);
            } else {
                $sxe->addChild(self::DEFAULT_ARRAY_ITEM_KEY, $v);
            }
        }

        return $sxe;
    }

    /**
     * Hydrates to XML string
     * @return mixed|string
     * @throws ReflectionException
     */
    public function toXml()
    {
        $sxe = $this->toSimpleXMLElement();
        return (!is_null($sxe)) ? $sxe->asXML() : '';
    }

    /**
     * Magic method implementation
     * @return mixed|string
     * @throws \Exception
     */
    public function __toString()
    {
        return $this->toXml();
    }

    /**
     * @return string
     */
    public function getSubElementName()
    {
        return $this->subElementName;
    }

    /**
     * @param string $subElementName
     */
    public function setSubElementName($subElementName)
    {
        $this->subElementName = $subElementName;
    }
}
