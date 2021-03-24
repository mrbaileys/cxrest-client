<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRDraft;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmail;

class CREmail extends AbstractCREmail
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
     * @param array|CRDataNode $value
     * @return self
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
}
