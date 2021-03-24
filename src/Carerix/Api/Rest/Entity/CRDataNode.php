<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Client;
use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRDataNode;
use Exception;

/**
 * @method CRDataNode setTag setTag(string $tag)
 * @method string getTag getTag()
 */
class CRDataNode extends AbstractCRDataNode
{
    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $value = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $sortOrder = null;

    /**
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       20
     */
    public $indicationColor = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @type NSString
     * @allows_null 1
     */
    public $tag = null;

    /**
     * @cx_field    true
     * @value_class NSArray
     * @allows_null 1
     * @access      private
     */
    public $tags = null;

    /**
     * @param string $value [optional]
     * @return CRDataNode
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value [optional]
     * @return CRDataNode
     */
    public function setSortOrder($value)
    {
        $this->sortOrder = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param string $value [optional]
     * @return self
     */
    public function setIndicationColor($value)
    {
        $this->indicationColor = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndicationColor()
    {
        return $this->indicationColor;
    }

    /**
     * Get data-nodes by type
     * @param array   $parameters additional parameters to pass for GET request
     * @param integer $hydrate    hydration method
     * @return Collection
     * @throws Exception
     */
    public static function listBy(array $parameters, $hydrate = null)
    {
        return self::execute(Client::GET, 'list-by', $parameters, null, $hydrate);
    }
}
