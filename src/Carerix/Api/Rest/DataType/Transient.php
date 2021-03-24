<?php

namespace Carerix\Api\Rest\DataType;

use ArrayObject;
use SimpleXMLElement;

class Transient extends ArrayObject implements DataTypeInterface
{
    /**
     * @var string
     */
    const DATA_TYPE = 'transient';

    /**
     * Converts array into class instance
     * @param array $array
     * @return Transient
     */
    public static function fromArray($array)
    {
        if (!is_array($array)) {
            return new Transient();
        }
        $values = [];
        foreach ($array as $k => $v) {
            $k          = self::normalize($k);
            $values[$k] = $v;
        }
        return new Transient($values);
    }

    /**
     * @param string $key
     * @return string
     */
    protected static function normalize($key)
    {
        if (stristr($key, self::DATA_TYPE . '.')) {
            return substr($key, strlen(self::DATA_TYPE . '.'));
        }
        return $key;
    }

    /**
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
     * @param SimpleXMLElement $sxe
     * @return SimpleXMLElement
     */
    public function toSimpleXMLElement(&$sxe = null)
    {

        foreach ($this as $k => $v) {
            $sxe->{self::DATA_TYPE . '.' . $k} = $v;
        }

        return $sxe;
    }

    /**
     * Computes unique id of a class. Used by array_diff
     * @return string
     */
    public function __toString()
    {
        return md5(serialize($this));
    }
}
