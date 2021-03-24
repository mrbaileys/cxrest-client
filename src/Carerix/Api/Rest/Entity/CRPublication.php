<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRPublication;
use Exception;

class CRPublication extends AbstractCRPublication
{
    /**
     * @cx_field    true
     * @access      private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $postingMappings = null;

    /**
     * @param NSDictionary|array $value
     * @return AbstractCRPublication
     */
    public function setPostingMappings($value)
    {
        if (is_array($value)) {
            $value = new NSDictionary($value);
        }
        $this->postingMappings = $value;
        return $this;
    }

    /**
     * @return NSDictionary|array
     */
    public function getPostingMappings()
    {
        return $this->postingMappings;
    }

    /**
     * Get a list of published jobs
     * @param array   $parameters
     * @param integer $hydrate hydration method
     * @return Collection
     * @throws Exception
     */
    public static function listBy($parameters = null, $hydrate = null)
    {
        if (func_num_args() == 1 && !is_array($parameters)) {
            $hydrate    = $parameters;
            $parameters = [];
        }

        return CRPublication::findAll('list-by', $parameters, $hydrate);
    }
}
