<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRWeekHour;

class CRWeekHour extends AbstractCRWeekHour
{
    /**
     * @cx_field    true
     * @access      private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $hours = null;

    /**
     * @return NSArray|array
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param NSArray|array $value [optional]
     * @return CRWeekHour
     */
    public function setHours($value)
    {
        if (is_array($value)) {
            $value = new NSArray($value);
        }
        $this->hours = $value;
        return $this;
    }
}
