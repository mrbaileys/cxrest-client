<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRWeekHour;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:27 +0000
 * @method AbstractCRHour setHourID() setHourID(integer $value)
 * @method integer getHourID getHourID()
 * @method AbstractCRHour setDate() setDate(string $value)
 * @method string getDate getDate()
 * @method AbstractCRHour setHours() setHours(float $value)
 * @method float getHours getHours()
 * @method AbstractCRHour setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRHour setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRHour setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRHour setApprovedHours() setApprovedHours(float $value)
 * @method float getApprovedHours getApprovedHours()
 * @method AbstractCRHour setInvoicedHours() setInvoicedHours(float $value)
 * @method float getInvoicedHours getInvoicedHours()
 * @method AbstractCRHour setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRHour setToWeekHour() setToWeekHour(array|CRWeekHour $value)
 * @method CRWeekHour getToWeekHour getToWeekHour($index = null)
 */
abstract class AbstractCRHour extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRHour';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $hourID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $date;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hours;

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
    public $deleted;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $approvedHours;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoicedHours;

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
     * @var CRWeekHour
     * @OneToOne (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 0
     * @name toWeekHour
     */
    public $toWeekHour;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("hourID");
        $entityConfiguration->setName("CRHour");
    }
}
