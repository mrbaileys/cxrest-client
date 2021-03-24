<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRMeeting;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRTask;

class CRTask extends AbstractCRTask
{
    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toActivityTypeNode
     * @nodeType           Taak-type
     */
    public $toActivityTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toResultNode
     * @nodeType           Taak-resultaat
     */
    public $toResultNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default            1
     * @nodeType           Taak-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isAllDay = null;

    /**
     * @param integer $value
     * @return self
     */
    public function setIsAllDay($value)
    {
        $this->isAllDay = $value;
        return $this;
    }

    /**
     * @return integer
     */
    public function getIsAllDay()
    {
        return $this->isAllDay;
    }
}
