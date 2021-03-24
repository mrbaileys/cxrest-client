<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRTalentPool;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:37 +0000
 * @method AbstractCRTalentPoolUser setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTalentPoolUser setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolUser setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTalentPoolUser setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRTalentPoolUser setToTalentPool() setToTalentPool(array|CRTalentPool $value)
 * @method CRTalentPool getToTalentPool getToTalentPool($index = null)
 * @method AbstractCRTalentPoolUser setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRTalentPoolUser setToResultNode() setToResultNode(array|CRDataNode $value)
 * @method CRDataNode getToResultNode getToResultNode($index = null)
 */
abstract class AbstractCRTalentPoolUser extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolUser';

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
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 1
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPool
     * @OneToOne (targetEntity="CRTalentPool")
     * @mandatory 1
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     */
    public $toTalentPool;

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
     * @name toResultNode
     * @default 1
     * @nodeType Talent-pool-result
     */
    public $toResultNode;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolUserID");
        $entityConfiguration->setName("CRTalentPoolUser");
    }
}
