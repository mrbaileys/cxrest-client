<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourComment;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:36 +0000
 * @method AbstractCRWeekHourView setHoursTotal() setHoursTotal(float $value)
 * @method float getHoursTotal getHoursTotal()
 * @method AbstractCRWeekHourView setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRWeekHourView setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRWeekHourView setEmployeeID() setEmployeeID(integer $value)
 * @method integer getEmployeeID getEmployeeID()
 * @method AbstractCRWeekHourView setDateString() setDateString(string $value)
 * @method string getDateString getDateString()
 * @method AbstractCRWeekHourView setIsEmpty() setIsEmpty(integer $value)
 * @method integer getIsEmpty getIsEmpty()
 * @method AbstractCRWeekHourView setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRWeekHourView setAllWeekHours() setAllWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getAllWeekHours getAllWeekHours()
 * @method AbstractCRWeekHourView setWeekHourJobViews() setWeekHourJobViews(array|Collection $values)
 * @method Collection|CRWeekHourJobView getWeekHourJobViews getWeekHourJobViews()
 * @method AbstractCRWeekHourView setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRWeekHourView setComments() setComments(array|Collection $values)
 * @method Collection|CRWeekHourComment getComments getComments()
 */
abstract class AbstractCRWeekHourView extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRWeekHourView';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeID;

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
     * @inverseName toWeekHourView
     */
    public $allWeekHours;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 1
     * @name weekHourJobViews
     */
    public $weekHourJobViews;

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
        $entityConfiguration->setIdentifierKey("weekHourViewID");
        $entityConfiguration->setName("CRWeekHourView");
    }
}
