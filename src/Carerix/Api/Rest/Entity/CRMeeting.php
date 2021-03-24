<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRMeeting;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRNote;

class CRMeeting extends AbstractCRMeeting
{

    /**
     * Recurrence day list is a workaround for the lack of NSArray support.
     * When inserting a new appointment, the lack of NSArray support prevents
     * setting the days at which week appointments recur. Carerix development
     * has extended the API to accept a recurrenceDayList attribute, which is
     * internally exploded and set to the recurrenceDays field.
     *
     * @cx_field  true
     * @access    private
     * @var string
     * @mandatory 0
     * @name $recurrenceDayList
     */
    public $recurrenceDayList = null;

    /**
     * @cx_field         true
     * @access           private
     * @var integer
     * @value_class      NSNumber
     * @allows_null      0
     * @value_type       s
     * @value_type_human short integer (16 bits)
     */
    public $isOpened;

    /**
     * @cx_field true
     * @access   private
     * @var integer
     * @type NSNumber
     * @length   N/A
     * @required true
     */
    public $isVisibleForAllUsers = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toActivityTypeNode
     * @nodeType           Afspraak-type
     */
    public $toActivityTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toResultNode
     * @nodeType           Afspraak-resultaat
     */
    public $toResultNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default            1
     * @nodeType           Afspraak-status
     */
    public $toStatusNode = null;

    /**
     * @param integer $value
     * @return CRMeeting
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
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToActivityTypeNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toActivityTypeNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToActivityTypeNode()
    {
        return $this->toActivityTypeNode;
    }

    /**
     * @param array|CRDataNode $value
     * @return self
     */
    public function setToResultNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toResultNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToResultNode()
    {
        return $this->toResultNode;
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
     * @return string
     */
    public function getRecurrenceDayList()
    {
        return $this->recurrenceDayList;
    }

    /**
     * @param string $list
     * @return self
     */
    public function setRecurrenceDayList($list)
    {
        $this->recurrenceDayList = $list;
        return $this;
    }
}
