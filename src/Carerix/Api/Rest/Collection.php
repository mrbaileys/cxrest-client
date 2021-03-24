<?php

namespace Carerix\Api\Rest;

use ArrayObject;
use ReflectionException;

class Collection extends ArrayObject
{
    /**
     * @var string
     */
    protected $raw;

    /**
     * Total number of records
     * @var integer
     */
    protected $totalCount;

    /**
     * @param array  $array
     * @param string $target
     */
    public function __construct($array = null, $target = null)
    {
        if ($array === null) {
            parent::__construct();
            return;
        }
        if (!array_key_exists(0, $array)) {
            $array = [$array];
        }
        if ($target !== null) {
            foreach ($array as $k => $v) {
                if (is_array($v) && class_exists($target)) {
                    $v         = new $target($v);
                    $array[$k] = $v;
                }
            }
        }
        parent::__construct((array)$array);
    }

    /**
     * Hydrates each record in a collection to array
     * @return array
     * @throws ReflectionException
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $record) {
            if (
                !$record instanceof Entity
                && !$record instanceof Collection
            ) {
                continue;
            }
            $array[] = $record->toArray();
        }
        return $array;
    }

    /**
     * Hydrates collection to XML document
     * @param boolean $raw pass true to get the original XML response from the server
     * @return string XML document
     * @throws \Exception
     */
    public function toXml($raw = false)
    {
        if ($raw === true) {
            return $this->getRaw();
        }
        $xml   = [];
        $xml[] = Entity::CARERIX_XML_DECLARATION . "\n";
        $xml[] = '<array count="' . $this->getTotalCount() . '">';
        foreach ($this as $record) {
            if (
                !$record instanceof Entity
                && !$record instanceof Collection
            ) {
                continue;
            }

            $xml[] = trim(str_replace(Entity::CARERIX_XML_DECLARATION, '', $record->toXML()));
        }
        $xml[] = '</array>';
        return implode('', $xml);
    }

    /**
     * "Unserialize" XML into Collection object
     * @param string        $xml
     * @param string|object $class entity name contained in the collection
     * @return Collection
     */
    public static function fromXml($xml, $class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }
        return call_user_func([$class, 'fromXml'], $xml);
    }

    /**
     * Save a collection. Backend doesn't support batch requests
     * Instead we emulate it by sending save requests for each record in the collection
     * @param string $action     specify a different action name to invoke
     * @param array  $parameters any extra GET parameters to send
     * @return Collection
     * @throws ReflectionException
     */
    public function save($action = null, $parameters = null)
    {
        foreach ($this as $record) {
            if (!$record instanceof Entity) {
                continue;
            }
            $record->save($action, $parameters);
        }

        return $this;
    }

    /**
     * @return integer
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
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
     * @param string $raw
     * @return self
     */
    public function setRaw($raw)
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * Computes unique id of a class. Used by array_diff
     * @return string
     */
    public function __toString()
    {
        return md5(serialize($this));
    }

    /**
     * Required for partial update to work correctly. Otherwise, if a property is changed in the collection
     * it will be changed in the snapshot object by reference resulting in no update of a record.
     * Thanks to Jasper for pointing this out.
     * @return self
     */
    public function __clone()
    {
        return unserialize(serialize($this));
    }
}
