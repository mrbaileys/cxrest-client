<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRWeekHour;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:41 +0000
 * @method AbstractCRMonthHourJobView setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMonthHourJobView setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMonthHourJobView setMonthString() setMonthString(string $value)
 * @method string getMonthString getMonthString()
 * @method AbstractCRMonthHourJobView setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRMonthHourJobView setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRMonthHourJobView setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRMonthHourJobView setToMonthHourView() setToMonthHourView(array|CRMonthHourView $value)
 * @method CRMonthHourView getToMonthHourView getToMonthHourView($index = null)
 * @method AbstractCRMonthHourJobView setWeekhoursWithMonthString() setWeekhoursWithMonthString(array|Collection $values)
 * @method Collection|CRWeekHour getWeekhoursWithMonthString getWeekhoursWithMonthString()
 */
abstract class AbstractCRMonthHourJobView extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRMonthHourJobView';

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
     * @allows_null 0
     */
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 0
     * @width 8
     */
    public $monthString;

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
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name weekhoursWithMonthString
     */
    public $weekhoursWithMonthString;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("monthHourJobViewID");
        $entityConfiguration->setName("CRMonthHourJobView");
    }
}
