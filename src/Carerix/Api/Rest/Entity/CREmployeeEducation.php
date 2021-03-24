<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmployeeEducation;

class CREmployeeEducation extends AbstractCREmployeeEducation
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
}
