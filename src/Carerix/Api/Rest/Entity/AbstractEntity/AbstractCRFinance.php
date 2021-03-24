<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRNodeType;
use Carerix\Api\Rest\Entity\CRResource;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:27 +0000
 * @method AbstractCRFinance setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRFinance setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRFinance setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRFinance setInfo() setInfo(string $value)
 * @method string getInfo getInfo()
 * @method AbstractCRFinance setFinanceID() setFinanceID(integer $value)
 * @method integer getFinanceID getFinanceID()
 * @method AbstractCRFinance setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRFinance setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRFinance setAmount() setAmount(float $value)
 * @method float getAmount getAmount()
 * @method AbstractCRFinance setTariff() setTariff(float $value)
 * @method float getTariff getTariff()
 * @method AbstractCRFinance setNoInvoice() setNoInvoice(integer $value)
 * @method integer getNoInvoice getNoInvoice()
 * @method AbstractCRFinance setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRFinance setPurchaseRate() setPurchaseRate(float $value)
 * @method float getPurchaseRate getPurchaseRate()
 * @method AbstractCRFinance setToTypeNode() setToTypeNode(array|CRNodeType $value)
 * @method CRNodeType getToTypeNode getToTypeNode($index = null)
 * @method AbstractCRFinance setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRFinance setToKindNode() setToKindNode(array|CRDataNode $value)
 * @method CRDataNode getToKindNode getToKindNode($index = null)
 * @method AbstractCRFinance setToCurrencyNode() setToCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrencyNode getToCurrencyNode($index = null)
 * @method AbstractCRFinance setToUnitNode() setToUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToUnitNode getToUnitNode($index = null)
 * @method AbstractCRFinance setToResource() setToResource(array|CRResource $value)
 * @method CRResource getToResource getToResource($index = null)
 * @method AbstractCRFinance setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 */
abstract class AbstractCRFinance extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRFinance';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $info;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $financeID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $amount;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tariff;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $noInvoice;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate;

    /**
     * @cx_field true
     * @access private
     * @var CRNodeType
     * @OneToOne (targetEntity="CRNodeType")
     * @mandatory 0
     * @destination_entity CRNodeType
     * @to_many 0
     * @name toTypeNode
     */
    public $toTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toKindNode
     * @default 0
     * @nodeType ${toTypeNode.name}
     */
    public $toKindNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrencyNode
     * @default 0
     * @nodeType Valuta
     */
    public $toCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toUnitNode
     * @default 0
     * @nodeType ${toTypeNode.name}-eenheid
     */
    public $toUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRResource
     * @OneToOne (targetEntity="CRResource")
     * @mandatory 0
     * @destination_entity CRResource
     * @to_many 0
     * @name toResource
     */
    public $toResource;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 1
     * @name invoiceLines
     */
    public $invoiceLines;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("financeID");
        $entityConfiguration->setName("CRFinance");
    }
}
