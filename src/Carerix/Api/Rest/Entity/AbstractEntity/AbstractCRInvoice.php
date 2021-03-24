<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRInvoice;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:28 +0000
 * @method AbstractCRInvoice setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRInvoice setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRInvoice setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRInvoice setInvoiceID() setInvoiceID(integer $value)
 * @method integer getInvoiceID getInvoiceID()
 * @method AbstractCRInvoice setNumber() setNumber(integer $value)
 * @method integer getNumber getNumber()
 * @method AbstractCRInvoice setDate() setDate(string $value)
 * @method string getDate getDate()
 * @method AbstractCRInvoice setCompanyName() setCompanyName(string $value)
 * @method string getCompanyName getCompanyName()
 * @method AbstractCRInvoice setAttention() setAttention(string $value)
 * @method string getAttention getAttention()
 * @method AbstractCRInvoice setAddress() setAddress(string $value)
 * @method string getAddress getAddress()
 * @method AbstractCRInvoice setTotal() setTotal(float $value)
 * @method float getTotal getTotal()
 * @method AbstractCRInvoice setSenderBankAccountName() setSenderBankAccountName(string $value)
 * @method string getSenderBankAccountName getSenderBankAccountName()
 * @method AbstractCRInvoice setSenderBankAccountNumberOld() setSenderBankAccountNumberOld(string $value)
 * @method string getSenderBankAccountNumberOld getSenderBankAccountNumberOld()
 * @method AbstractCRInvoice setSenderBankBicCode() setSenderBankBicCode(string $value)
 * @method string getSenderBankBicCode getSenderBankBicCode()
 * @method AbstractCRInvoice setSenderBankIbanCode() setSenderBankIbanCode(string $value)
 * @method string getSenderBankIbanCode getSenderBankIbanCode()
 * @method AbstractCRInvoice setSenderBankName() setSenderBankName(string $value)
 * @method string getSenderBankName getSenderBankName()
 * @method AbstractCRInvoice setSenderName() setSenderName(string $value)
 * @method string getSenderName getSenderName()
 * @method AbstractCRInvoice setSenderKvkNumber() setSenderKvkNumber(string $value)
 * @method string getSenderKvkNumber getSenderKvkNumber()
 * @method AbstractCRInvoice setSenderTaxNumber() setSenderTaxNumber(string $value)
 * @method string getSenderTaxNumber getSenderTaxNumber()
 * @method AbstractCRInvoice setSenderAddress() setSenderAddress(string $value)
 * @method string getSenderAddress getSenderAddress()
 * @method AbstractCRInvoice setSubject() setSubject(string $value)
 * @method string getSubject getSubject()
 * @method AbstractCRInvoice setTaxPercentage() setTaxPercentage(float $value)
 * @method float getTaxPercentage getTaxPercentage()
 * @method AbstractCRInvoice setPaymentPeriod() setPaymentPeriod(string $value)
 * @method string getPaymentPeriod getPaymentPeriod()
 * @method AbstractCRInvoice setCurrency() setCurrency(string $value)
 * @method string getCurrency getCurrency()
 * @method AbstractCRInvoice setCustomerReference() setCustomerReference(string $value)
 * @method string getCustomerReference getCustomerReference()
 * @method AbstractCRInvoice setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRInvoice setCredited() setCredited(integer $value)
 * @method integer getCredited getCredited()
 * @method AbstractCRInvoice setPurchaseTotal() setPurchaseTotal(float $value)
 * @method float getPurchaseTotal getPurchaseTotal()
 * @method AbstractCRInvoice setHeader() setHeader(string $value)
 * @method string getHeader getHeader()
 * @method AbstractCRInvoice setFooter() setFooter(string $value)
 * @method string getFooter getFooter()
 * @method AbstractCRInvoice setValueDate() setValueDate(string $value)
 * @method string getValueDate getValueDate()
 * @method AbstractCRInvoice setSenderBankAccountNumber() setSenderBankAccountNumber(string $value)
 * @method string getSenderBankAccountNumber getSenderBankAccountNumber()
 * @method AbstractCRInvoice setSenderKvkCity() setSenderKvkCity(string $value)
 * @method string getSenderKvkCity getSenderKvkCity()
 * @method AbstractCRInvoice setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRInvoice setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRInvoice setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRInvoice setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRInvoice setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRInvoice setToContact() setToContact(array|CRUser $value)
 * @method CRUser getToContact getToContact($index = null)
 * @method AbstractCRInvoice setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRInvoice setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRInvoice setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRInvoice setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 * @method AbstractCRInvoice setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRInvoice setTodos() setTodos(array|Collection $values)
 * @method Collection|CRToDo getTodos getTodos()
 * @method AbstractCRInvoice setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRInvoice setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRInvoice setToCreditInvoice() setToCreditInvoice(array|CRInvoice $value)
 * @method CRInvoice getToCreditInvoice getToCreditInvoice($index = null)
 */
abstract class AbstractCRInvoice extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRInvoice';

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
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $invoiceID;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $number;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $date;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $companyName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $attention;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $address;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $total;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $senderBankAccountName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderBankAccountNumberOld;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderBankBicCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderBankIbanCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $senderBankName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $senderName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderKvkNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderTaxNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $senderAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $subject;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $taxPercentage;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $paymentPeriod;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $currency;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $customerReference;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $credited;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseTotal;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $header;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $footer;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $valueDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderBankAccountNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $senderKvkCity;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 1
     * @nodeType Factuur-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy;

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

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toContact
     */
    public $toContact;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments;

    /**
     * @cx_field true
     * @access private
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy;

    /**
     * @cx_field true
     * @access private
     * @var CRJob
     * @OneToOne (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 0
     * @name toJob
     */
    public $toJob;

    /**
     * @cx_field true
     * @access private
     * @var CRPublication
     * @OneToOne (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 0
     * @name toPublication
     */
    public $toPublication;

    /**
     * @cx_field true
     * @access private
     * @var CRAgency
     * @OneToOne (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name agency
     */
    public $agency;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name todos
     */
    public $todos;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoice
     * @OneToOne (targetEntity="CRInvoice")
     * @mandatory 0
     * @destination_entity CRInvoice
     * @to_many 0
     * @name toCreditInvoice
     */
    public $toCreditInvoice;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("invoiceID");
        $entityConfiguration->setName("CRInvoice");
    }
}
