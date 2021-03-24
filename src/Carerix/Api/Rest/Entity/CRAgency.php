<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRAgency;

class CRAgency extends AbstractCRAgency
{
    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          ?
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toFunctionLevel1
     * @default
     * @nodeType
     */
    public $toFunctionLevel1 = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       40
     */
    public $invoiceCompanyName;

    /**
     * @return string
     */
    public function getInvoiceCompanyName()
    {
        return $this->invoiceCompanyName;
    }

    /**
     * @param string $value
     * @return CRAgency
     */
    public function setInvoiceCompanyName($value)
    {
        $this->invoiceCompanyName = $value;
        return $this;
    }

    /**
     * Gets toFunctionLevel1
     *
     * @return CRDataNode
     */
    public function getToFunctionLevel1()
    {
        return $this->toFunctionLevel1;
    }

    /**
     * @param array|CRDataNode $value
     * @return CRAgency
     */
    public function setToFunctionLevel1($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toFunctionLevel1 = $value;
        return $this;
    }
}
