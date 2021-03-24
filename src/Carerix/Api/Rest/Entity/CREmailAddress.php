<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmailAddress;

/**
 * @method int getIsPrimary getIsPrimary() - returns indication if email address is primary
 * @method void setIsPrimary setIsPrimary(int aValue) - marks/removes mark if email address is primary,
 * if email address is set as primary, another email address for this user will be unchecked
 */
class CREmailAddress extends AbstractCREmailAddress
{

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $deleted = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isPrimary = null;

    /**
     * @param integer $value
     * @return AbstractCREmailAddress
     */
    public function setDeleted($value)
    {
        $this->deleted = $value;
        return $this;
    }

    /**
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
