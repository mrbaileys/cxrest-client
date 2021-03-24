<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRCampaign;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:50 +0000
 * @method AbstractCRActivityParticipant setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRActivityParticipant setProcessDate() setProcessDate(string $value)
 * @method string getProcessDate getProcessDate()
 * @method AbstractCRActivityParticipant setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRActivityParticipant setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRActivityParticipant setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRActivityParticipant setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRActivityParticipant setToRoleNode() setToRoleNode(array|CRDataNode $value)
 * @method CRDataNode getToRoleNode getToRoleNode($index = null)
 * @method AbstractCRActivityParticipant setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRActivityParticipant setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRActivityParticipant setToToDo() setToToDo(array|CRCampaign $value)
 * @method CRCampaign getToToDo getToToDo($index = null)
 */
abstract class AbstractCRActivityParticipant extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRActivityParticipant';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $processDate;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 16
     */
    public $importID;

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
     * @name toRoleNode
     */
    public $toRoleNode;

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
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var CRCampaign
     * @OneToOne (targetEntity="CRCampaign")
     * @mandatory 0
     * @destination_entity CRCampaign
     * @to_many 0
     * @name toToDo
     */
    public $toToDo;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("activityParticipantID");
        $entityConfiguration->setName("CRActivityParticipant");
    }
}
