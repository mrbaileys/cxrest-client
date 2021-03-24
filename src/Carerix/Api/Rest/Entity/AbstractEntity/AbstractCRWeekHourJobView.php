<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourComment;
use Carerix\Api\Rest\Entity\CRWeekHourView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:36 +0000
 * @method AbstractCRWeekHourJobView setHoursTotal() setHoursTotal(float $value)
 * @method float getHoursTotal getHoursTotal()
 * @method AbstractCRWeekHourJobView setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRWeekHourJobView setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRWeekHourJobView setDateString() setDateString(string $value)
 * @method string getDateString getDateString()
 * @method AbstractCRWeekHourJobView setIsEmpty() setIsEmpty(integer $value)
 * @method integer getIsEmpty getIsEmpty()
 * @method AbstractCRWeekHourJobView setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRWeekHourJobView setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRWeekHourJobView setAllWeekHours() setAllWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getAllWeekHours getAllWeekHours()
 * @method AbstractCRWeekHourJobView setToWeekHourView() setToWeekHourView(array|CRWeekHourView $value)
 * @method CRWeekHourView getToWeekHourView getToWeekHourView($index = null)
 * @method AbstractCRWeekHourJobView setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRWeekHourJobView setComments() setComments(array|Collection $values)
 * @method Collection|CRWeekHourComment getComments getComments()
 */
abstract class AbstractCRWeekHourJobView extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRWeekHourJobView';

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hoursTotal;

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
    public $dateString;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEmpty;

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
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name allWeekHours
     * @inverseName toWeekHourJobView
     */
    public $allWeekHours;

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
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHourComment")
     * @mandatory 0
     * @destination_entity CRWeekHourComment
     * @to_many 1
     * @name comments
     */
    public $comments;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("weekHourJobViewID");
        $entityConfiguration->setName("CRWeekHourJobView");
    }
}
