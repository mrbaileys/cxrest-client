<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRFinance;
use Carerix\Api\Rest\Entity\CRInvoice;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRPurchaseInvoice;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;
use Carerix\Api\Rest\Entity\CRWeekHourView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:28 +0000
 * @method AbstractCRInvoiceLine setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRInvoiceLine setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRInvoiceLine setInvoiceLineID() setInvoiceLineID(integer $value)
 * @method integer getInvoiceLineID getInvoiceLineID()
 * @method AbstractCRInvoiceLine setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRInvoiceLine setInfo() setInfo(string $value)
 * @method string getInfo getInfo()
 * @method AbstractCRInvoiceLine setAmount() setAmount(float $value)
 * @method float getAmount getAmount()
 * @method AbstractCRInvoiceLine setNumberOfTimes() setNumberOfTimes(float $value)
 * @method float getNumberOfTimes getNumberOfTimes()
 * @method AbstractCRInvoiceLine setDiscountPercentage() setDiscountPercentage(float $value)
 * @method float getDiscountPercentage getDiscountPercentage()
 * @method AbstractCRInvoiceLine setTotal() setTotal(float $value)
 * @method float getTotal getTotal()
 * @method AbstractCRInvoiceLine setMonNumber() setMonNumber(float $value)
 * @method float getMonNumber getMonNumber()
 * @method AbstractCRInvoiceLine setTueNumber() setTueNumber(float $value)
 * @method float getTueNumber getTueNumber()
 * @method AbstractCRInvoiceLine setWedNumber() setWedNumber(float $value)
 * @method float getWedNumber getWedNumber()
 * @method AbstractCRInvoiceLine setThuNumber() setThuNumber(float $value)
 * @method float getThuNumber getThuNumber()
 * @method AbstractCRInvoiceLine setFriNumber() setFriNumber(float $value)
 * @method float getFriNumber getFriNumber()
 * @method AbstractCRInvoiceLine setSatNumber() setSatNumber(float $value)
 * @method float getSatNumber getSatNumber()
 * @method AbstractCRInvoiceLine setSunNumber() setSunNumber(float $value)
 * @method float getSunNumber getSunNumber()
 * @method AbstractCRInvoiceLine setUnit() setUnit(string $value)
 * @method string getUnit getUnit()
 * @method AbstractCRInvoiceLine setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRInvoiceLine setInvoicingDate() setInvoicingDate(string $value)
 * @method string getInvoicingDate getInvoicingDate()
 * @method AbstractCRInvoiceLine setInvoicingConditions() setInvoicingConditions(string $value)
 * @method string getInvoicingConditions getInvoicingConditions()
 * @method AbstractCRInvoiceLine setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRInvoiceLine setServiceDate() setServiceDate(string $value)
 * @method string getServiceDate getServiceDate()
 * @method AbstractCRInvoiceLine setPurchaseAmount() setPurchaseAmount(float $value)
 * @method float getPurchaseAmount getPurchaseAmount()
 * @method AbstractCRInvoiceLine setShowPurchaseInvoiceDetails() setShowPurchaseInvoiceDetails(integer $value)
 * @method integer getShowPurchaseInvoiceDetails getShowPurchaseInvoiceDetails()
 * @method AbstractCRInvoiceLine setPurchaseNotes() setPurchaseNotes(string $value)
 * @method string getPurchaseNotes getPurchaseNotes()
 * @method AbstractCRInvoiceLine setPurchaseDescription() setPurchaseDescription(string $value)
 * @method string getPurchaseDescription getPurchaseDescription()
 * @method AbstractCRInvoiceLine setCredited() setCredited(integer $value)
 * @method integer getCredited getCredited()
 * @method AbstractCRInvoiceLine setWeekTotalNumber() setWeekTotalNumber(float $value)
 * @method float getWeekTotalNumber getWeekTotalNumber()
 * @method AbstractCRInvoiceLine setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRInvoiceLine setToWeekHour() setToWeekHour(array|CRWeekHour $value)
 * @method CRWeekHour getToWeekHour getToWeekHour($index = null)
 * @method AbstractCRInvoiceLine setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRInvoiceLine setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRInvoiceLine setToInvoice() setToInvoice(array|CRInvoice $value)
 * @method CRInvoice getToInvoice getToInvoice($index = null)
 * @method AbstractCRInvoiceLine setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRInvoiceLine setToServiceNode() setToServiceNode(array|CRDataNode $value)
 * @method CRDataNode getToServiceNode getToServiceNode($index = null)
 * @method AbstractCRInvoiceLine setToCurrencyNode() setToCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrencyNode getToCurrencyNode($index = null)
 * @method AbstractCRInvoiceLine setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRInvoiceLine setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 * @method AbstractCRInvoiceLine setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRInvoiceLine setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRInvoiceLine setTodos() setTodos(array|Collection $values)
 * @method Collection|CRToDo getTodos getTodos()
 * @method AbstractCRInvoiceLine setToWeekHourJobView() setToWeekHourJobView(array|CRWeekHourJobView $value)
 * @method CRWeekHourJobView getToWeekHourJobView getToWeekHourJobView($index = null)
 * @method AbstractCRInvoiceLine setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRInvoiceLine setToToDo() setToToDo(array|CRToDo $value)
 * @method CRToDo getToToDo getToToDo($index = null)
 * @method AbstractCRInvoiceLine setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRInvoiceLine setToInvoicingConditionNode() setToInvoicingConditionNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoicingConditionNode getToInvoicingConditionNode($index = null)
 * @method AbstractCRInvoiceLine setPurchaseInvoices() setPurchaseInvoices(array|Collection $values)
 * @method Collection|CRPurchaseInvoice getPurchaseInvoices getPurchaseInvoices()
 * @method AbstractCRInvoiceLine setToSupplier() setToSupplier(array|CRCompany $value)
 * @method CRCompany getToSupplier getToSupplier($index = null)
 * @method AbstractCRInvoiceLine setToSupplierContact() setToSupplierContact(array|CRUser $value)
 * @method CRUser getToSupplierContact getToSupplierContact($index = null)
 * @method AbstractCRInvoiceLine setToPurchaseCurrencyNode() setToPurchaseCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseCurrencyNode getToPurchaseCurrencyNode($index = null)
 * @method AbstractCRInvoiceLine setToFinance() setToFinance(array|CRFinance $value)
 * @method CRFinance getToFinance getToFinance($index = null)
 * @method AbstractCRInvoiceLine setToCreditInvoiceLine() setToCreditInvoiceLine(array|CRInvoiceLine $value)
 * @method CRInvoiceLine getToCreditInvoiceLine getToCreditInvoiceLine($index = null)
 * @method AbstractCRInvoiceLine setToWeekHourView() setToWeekHourView(array|CRWeekHourView $value)
 * @method CRWeekHourView getToWeekHourView getToWeekHourView($index = null)
 * @method AbstractCRInvoiceLine setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 */
abstract class AbstractCRInvoiceLine extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRInvoiceLine';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $invoiceLineID;

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
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $info;

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
    public $numberOfTimes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $discountPercentage;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $monNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tueNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wedNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $thuNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $friNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $satNumber;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sunNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $unit;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $invoicingDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $invoicingConditions;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $serviceDate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseAmount;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $showPurchaseInvoiceDetails;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $purchaseNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $purchaseDescription;

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
    public $weekTotalNumber;

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
     * @nodeType Factuurregel-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHour
     * @OneToOne (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 0
     * @name toWeekHour
     */
    public $toWeekHour;

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
     * @var CRInvoice
     * @OneToOne (targetEntity="CRInvoice")
     * @mandatory 0
     * @destination_entity CRInvoice
     * @to_many 0
     * @name toInvoice
     */
    public $toInvoice;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toServiceNode
     * @default 1
     * @nodeType Dienst
     */
    public $toServiceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toCurrencyNode;

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
     * @var CRWeekHourJobView
     * @OneToOne (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 0
     * @name toWeekHourJobView
     */
    public $toWeekHourJobView;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee;

    /**
     * @cx_field true
     * @access private
     * @var CRToDo
     * @OneToOne (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 0
     * @name toToDo
     */
    public $toToDo;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoicingConditionNode
     */
    public $toInvoicingConditionNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRPurchaseInvoice")
     * @mandatory 0
     * @destination_entity CRPurchaseInvoice
     * @to_many 1
     * @name purchaseInvoices
     */
    public $purchaseInvoices;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toSupplier
     */
    public $toSupplier;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toSupplierContact
     */
    public $toSupplierContact;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseCurrencyNode
     */
    public $toPurchaseCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRFinance
     * @OneToOne (targetEntity="CRFinance")
     * @mandatory 0
     * @destination_entity CRFinance
     * @to_many 0
     * @name toFinance
     */
    public $toFinance;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoiceLine
     * @OneToOne (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 0
     * @name toCreditInvoiceLine
     */
    public $toCreditInvoiceLine;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourView
     * @OneToOne (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 0
     * @name toWeekHourView
     */
    public $toWeekHourView;

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
        $entityConfiguration->setIdentifierKey("invoiceLineID");
        $entityConfiguration->setName("CRInvoiceLine");
    }
}
