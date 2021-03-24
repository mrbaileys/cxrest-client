<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:40 +0000
 * @method AbstractCROpportunityUser setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCROpportunityUser setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCROpportunityUser setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCROpportunityUser setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCROpportunityUser setToOpportunity() setToOpportunity(array|CROpportunity $value)
 * @method CROpportunity getToOpportunity getToOpportunity($index = null)
 * @method AbstractCROpportunityUser setToOpportunityRoleNode() setToOpportunityRoleNode(array|CRDataNode $value)
 * @method CRDataNode getToOpportunityRoleNode getToOpportunityRoleNode($index = null)
 */
abstract class AbstractCROpportunityUser extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CROpportunityUser';

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
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var CROpportunity
     * @OneToOne (targetEntity="CROpportunity")
     * @mandatory 0
     * @destination_entity CROpportunity
     * @to_many 0
     * @name toOpportunity
     */
    public $toOpportunity;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toOpportunityRoleNode
     */
    public $toOpportunityRoleNode;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("opportunityUserID");
        $entityConfiguration->setName("CROpportunityUser");
    }
}
