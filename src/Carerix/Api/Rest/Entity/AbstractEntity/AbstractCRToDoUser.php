<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:31 +0000
 * @method AbstractCRToDoUser setProcessDate() setProcessDate(string $value)
 * @method string getProcessDate getProcessDate()
 * @method AbstractCRToDoUser setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRToDoUser setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRToDoUser setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRToDoUser setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRToDoUser setEmailAddressKey() setEmailAddressKey(integer $value)
 * @method integer getEmailAddressKey getEmailAddressKey()
 * @method AbstractCRToDoUser setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRToDoUser setToToDo() setToToDo(array|CRToDo $value)
 * @method CRToDo getToToDo getToToDo($index = null)
 * @method AbstractCRToDoUser setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRToDoUser setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRToDoUser setToRoleNode() setToRoleNode(array|CRDataNode $value)
 * @method CRDataNode getToRoleNode getToRoleNode($index = null)
 */
abstract class AbstractCRToDoUser extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRToDoUser';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $processDate;

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
    public $creationDate;

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
    public $emailAddressKey;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 1
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     * @inverseName toDoUsers
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var CRToDo
     * @OneToOne (targetEntity="CRToDo")
     * @mandatory 1
     * @destination_entity CRToDo
     * @to_many 0
     * @name toToDo
     * @inverseName toDoUsers
     */
    public $toToDo;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     * @inverseName toDoUsers
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
     * @default 1
     * @nodeType Deelnemer-status
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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("toDoUserID");
        $entityConfiguration->setName("CRToDoUser");
    }
}
