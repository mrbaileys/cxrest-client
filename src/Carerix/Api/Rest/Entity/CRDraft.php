<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRDraft;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmail;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRMeeting;

class CRDraft extends AbstractCRDraft
{

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toDelayUnitNode
     * @nodeType           Uitstel-eenheid
     */
    public $toDelayUnitNode = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $notes = null;

    /**
     * @cx_field    true
     * @access      private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type
     * @value_type_human
     */
    public $delay = null;

    /**
     * @param array|CRDataNode $value
     * @return AbstractCRDraft
     */
    public function setToDelayUnitNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toDelayUnitNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToDelayUnitNode()
    {
        return $this->toDelayUnitNode;
    }

    /**
     * @param string $value [optional]
     * @return self
     */
    public function setNotes($value)
    {
        $this->notes = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param integer $value [optional]
     * @return self
     */
    public function setDelay($value)
    {
        $this->delay = $value;
        return $this;
    }

    /**
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }
}
