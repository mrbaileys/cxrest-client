<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRHour;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRMonthHourJobView;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;
use Carerix\Api\Rest\Entity\CRWeekHourView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:35 +0000
 * @method AbstractCRWeekHour setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRWeekHour setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRWeekHour setWeekHourID() setWeekHourID(integer $value)
 * @method integer getWeekHourID getWeekHourID()
 * @method AbstractCRWeekHour setInfo() setInfo(string $value)
 * @method string getInfo getInfo()
 * @method AbstractCRWeekHour setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRWeekHour setIsPlanning() setIsPlanning(integer $value)
 * @method integer getIsPlanning getIsPlanning()
 * @method AbstractCRWeekHour setApprovedTotal() setApprovedTotal(float $value)
 * @method float getApprovedTotal getApprovedTotal()
 * @method AbstractCRWeekHour setInvoicedTotal() setInvoicedTotal(float $value)
 * @method float getInvoicedTotal getInvoicedTotal()
 * @method AbstractCRWeekHour setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRWeekHour setDateString() setDateString(string $value)
 * @method string getDateString getDateString()
 * @method AbstractCRWeekHour setIsJobPending() setIsJobPending(integer $value)
 * @method integer getIsJobPending getIsJobPending()
 * @method AbstractCRWeekHour setIsJobPendingValue() setIsJobPendingValue(integer $value)
 * @method integer getIsJobPendingValue getIsJobPendingValue()
 * @method AbstractCRWeekHour setMonthString() setMonthString(string $value)
 * @method string getMonthString getMonthString()
 * @method AbstractCRWeekHour setHoursUnsorted() setHoursUnsorted(array|Collection $values)
 * @method Collection|CRHour getHoursUnsorted getHoursUnsorted()
 * @method AbstractCRWeekHour setToHourTypeNode() setToHourTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToHourTypeNode getToHourTypeNode($index = null)
 * @method AbstractCRWeekHour setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRWeekHour setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRWeekHour setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRWeekHour setToWeekHourView() setToWeekHourView(array|CRWeekHourView $value)
 * @method CRWeekHourView getToWeekHourView getToWeekHourView($index = null)
 * @method AbstractCRWeekHour setToWeekHourJobView() setToWeekHourJobView(array|CRWeekHourJobView $value)
 * @method CRWeekHourJobView getToWeekHourJobView getToWeekHourJobView($index = null)
 * @method AbstractCRWeekHour setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRWeekHour setToMonthHourView() setToMonthHourView(array|CRMonthHourView $value)
 * @method CRMonthHourView getToMonthHourView getToMonthHourView($index = null)
 * @method AbstractCRWeekHour setToMonthHourJobView() setToMonthHourJobView(array|CRMonthHourJobView $value)
 * @method CRMonthHourJobView getToMonthHourJobView getToMonthHourJobView($index = null)
 * @method AbstractCRWeekHour setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 */
abstract class AbstractCRWeekHour extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRWeekHour';

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
    public $weekHourID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $info;

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
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isPlanning;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $approvedTotal;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoicedTotal;

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
     * @value_class NSString
     * @allows_null 1
     * @width 8
     */
    public $dateString;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isJobPending;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isJobPendingValue;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 6
     */
    public $monthString;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRHour")
     * @mandatory 0
     * @destination_entity CRHour
     * @to_many 1
     * @name hoursUnsorted
     */
    public $hoursUnsorted;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHourTypeNode
     * @default 0
     * @nodeType Declaratiesoort
     */
    public $toHourTypeNode;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 0
     * @nodeType Weekstaat-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourView
     * @OneToOne (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 0
     * @name toWeekHourView
     * @inverseName allWeekHours
     */
    public $toWeekHourView;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourJobView
     * @OneToOne (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 0
     * @name toWeekHourJobView
     * @inverseName allWeekHours
     */
    public $toWeekHourJobView;

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
     * @var CRMonthHourView
     * @OneToOne (targetEntity="CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 0
     * @name toMonthHourView
     */
    public $toMonthHourView;

    /**
     * @cx_field true
     * @access private
     * @var CRMonthHourJobView
     * @OneToOne (targetEntity="CRMonthHourJobView")
     * @mandatory 0
     * @destination_entity CRMonthHourJobView
     * @to_many 0
     * @name toMonthHourJobView
     */
    public $toMonthHourJobView;

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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("weekHourID");
        $entityConfiguration->setName("CRWeekHour");
    }
}
