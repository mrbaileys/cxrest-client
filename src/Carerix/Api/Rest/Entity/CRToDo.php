<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSCalendarDate;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRDraft;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRToDo;
use Carerix\Api\Rest\EntityConfiguration;

class CRToDo extends AbstractCRToDo
{
    const TODO_TYPE_KEY_TASK            = 0;
    const TODO_TYPE_KEY_EMAIL           = 3;
    const TODO_TYPE_KEY_NOTE            = 4;
    const TODO_TYPE_KEY_DRAFT           = 5;
    const TODO_TYPE_KEY_SYSTEM_ACTIVITY = 25;
    const TODO_TYPE_KEY_CAMPAIGN        = 22;
    const TODO_TYPE_KEY_NEWSLETTER      = 33;
    const TODO_TYPE_KEY_EDITION         = 34;
    const TODO_TYPE_KEY_MEETING         = 1;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       i
     * @value_type_human long integer (32 bits)
     * @entity           CRToDo.meeting
     */
    public $ownerID = null;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSString
     * @entity   CRToDo.meeting
     */
    public $id;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSString
     * @entity   CRToDo.meeting
     */
    public $bgColorCode;

    /**
     * @cx_field true
     * @access   private
     * delay
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $delay;

    /**
     * isOpened
     * @entity CRToDo.Edition
     * @var integer
     * @access private
     * @type NSNumber
     */
    public $isOpened;

    /**
     * @cx_field true
     * @access   private
     * isReceived
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $isReceived;

    /**
     * @cx_field true
     * @access   private
     * placeHolders
     * @entity   CRToDo.Edition
     * @var ?
     */
    public $placeHolders;

    /**
     * @cx_field true
     * @access   private
     * numberSent
     * @entity   CRToDo.Edition
     * @var integer
     * @type NSNumber
     */
    public $numberSent;

    /**
     * @cx_field true
     * @access   private
     * title
     * @var string
     * @type NSString
     */
    public $title;

    /**
     * @var integer
     * @type NSNumber
     * @length   N/A
     * @required true
     * @access   private
     */
    public $isVisibleForAllUsers = null;

    /**
     * @cx_field true
     * @access   private
     * @var integer
     * @type NSNumber
     * @length   N/A
     * @required true
     * @entity   CRToDo.meeting
     */
    public $isAllDay = null;

    /**
     * @cx_field true
     * @access   private
     * @var string
     * @type NSCalendarDate
     * @length   N/A
     * @required false
     * @entity   CRToDo.meeting
     */
    public $startDate;

    /**
     * @cx_field true
     * @var string
     * @type NSCalendarDate
     * @length   N/A
     * @required false
     * @access   private
     * @entity   CRToDo.meeting
     */
    public $endDate;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     * @entity      CRToDo.meeting
     */
    public $notes = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     * @entity      CRToDo.meeting
     */
    public $summary = null;

    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000
     */
    public $name = null;

    /**
     * @cx_field    true
     * @access      private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $editions = null;

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

    /**
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * @param integer $delay delay
     * @return self
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
        return $this;
    }

    /**
     * @return integer
     */
    public function getIsOpened()
    {
        return $this->isOpened;
    }

    /**
     * @param integer $isOpened isOpened
     * @return self
     */
    public function setIsOpened($isOpened)
    {
        $this->isOpened = $isOpened;
        return $this;
    }

    /**
     * @return PropertyType
     */
    public function getIsReceived()
    {
        return $this->isReceived;
    }

    /**
     * @param PropertyType $isReceived isReceived
     * @return self
     */
    public function setIsReceived($isReceived)
    {
        $this->isReceived = $isReceived;
        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberSent()
    {
        return $this->numberSent;
    }

    /**
     * @param integer $numberSent numberSent
     * @return self
     */
    public function setNumberSent($numberSent)
    {
        $this->numberSent = $numberSent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaceHolders()
    {
        return $this->placeHolders;
    }

    /**
     * @param mixed $placeHolders placeHolders
     * @return self
     */
    public function setPlaceHolders($placeHolders)
    {
        $this->placeHolders = $placeHolders;
        return $this;
    }

    /**
     * @var string
     * @access private
     * @type NSString
     */
    public $subTitle;

    /**
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param array|Collection $values
     * @return CRToDo
     */
    public function setEditions($values)
    {
        if (is_array($values)) {
            $values = new NSArray($values);
        }
        $this->editions = $values;
        return $this;
    }

    /**
     * @return NSArray|array
     */
    public function getEditions()
    {
        return $this->editions;
    }

    /**
     * @param string $value
     * @return CRToDo
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param integer $value
     * @return CRToDo
     */
    public function setIsVisibleForAllUsers($value)
    {
        $this->isVisibleForAllUsers = $value;
        return $this;
    }

    /**
     * @return integer
     */
    public function getIsVisibleForAllUsers()
    {
        return $this->isVisibleForAllUsers;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate startDate
     * @return CRToDo
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate endDate
     * @return CRToDo
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @param integer $value
     * @return CRToDo
     */
    public function setIsAllDay($value)
    {
        $this->isAllDay = $value;
        return $this;
    }

    /**
     * @return integer
     */
    public function getIsAllDay()
    {
        return $this->isAllDay;
    }

    /**
     * Entity configuration.
     * Patch for non-standard identifier key. Expected toDoID. Actual todoID.
     * @param EntityConfiguration $entityConfiguration
     */
    public static function configure(EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("todoID");
    }

    /**
     * @return NSString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param NSString $notes notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
}
