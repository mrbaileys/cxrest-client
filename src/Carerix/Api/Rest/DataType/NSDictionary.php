<?php

namespace Carerix\Api\Rest\DataType;

use ArrayObject;
use ReflectionException;
use SimpleXMLElement;

class NSDictionary extends ArrayObject implements DataTypeInterface
{
    const DATA_TYPE = 'NSDictionary';

    /**
     * Converts array into class instance
     * @param array $array
     * @return NSDictionary
     */
    public static function fromArray($array)
    {
        if (!is_array($array)) {
            return new NSDictionary();
        }
        $values = [];
        foreach ($array as $k => $v) {
            $k = self::normalize($k);
            if (is_array($v)) {
                $dataType = key($v);
                if ($dataType == NSArray::DATA_TYPE) {
                    $v = NSArray::fromArray($v[$dataType]);
                }
            }
            $values[$k] = $v;
        }
        return new NSDictionary($values);
    }

    /**
     * Magic getter implementation
     * @param string $name
     * @return mixed|null
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this)) {
            return $this[$name];
        }
        return null;
    }

    /**
     * Magic setter implementation
     * @param string $name
     * @param mixed  $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        return $this[$name] = $value;
    }

    /**
     * Hydrates each record in a collection to array
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $k => $v) {
            $k         = self::normalize($k);
            $array[$k] = $v;
        }
        return $array;
    }

    /**
     * Transform key that is not a valid XML element name (because it starts with a digit, for example) is prefixed with an underscore.
     * @param mixed $key
     * @return false|string
     */
    protected static function normalize($key)
    {
        if (substr($key, 0, 1) == '_') {
            $key = substr($key, 1);
        }
        return $key;
    }

    /**
     * Hydrates object to SimpleXMLElement
     * @param array|null $sxe
     * @return SimpleXMLElement|null
     * @throws ReflectionException
     */
    public function toSimpleXMLElement(&$sxe = null)
    {
        if ($sxe === null) {
            $sxe = new SimpleXMLElement('<' . self::DATA_TYPE . '/>');
        }
        foreach ($this as $k => $v) {
            //key that is not a valid XML element name (because it starts with a digit, for example) is prefixed with an underscore.
            if (!preg_match(self::XML_ELEMENT_NAME_REGEX, $k)) {
                $k = '_' . $k;
            }

            if (is_array($v)) {
                $v = new NSArray($v);
            }

            if ($v instanceof NSArray) {
                if ($sxe->getName() == self::DATA_TYPE) {
                    $v->toSimpleXMLElement($sxe->$k->{NSArray::DATA_TYPE});
                } else {
                    $v->toSimpleXMLElement($sxe->{self::DATA_TYPE}->$k->{NSArray::DATA_TYPE});
                }
            } elseif ($sxe->getName() == self::DATA_TYPE) {
                // if root element is already named as self::DATA_TYPE
                $sxe->$k = $v;
            } else {
                $sxe->{self::DATA_TYPE}->$k = $v;
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
     * @throws ReflectionException
     */
    public function __toString()
    {
        return $this->toXml();
    }
}
