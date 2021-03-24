<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRTalentPoolCompany;
use Carerix\Api\Rest\Entity\CRTalentPoolMatch;
use Carerix\Api\Rest\Entity\CRTalentPoolUser;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:36 +0000
 * @method AbstractCRTalentPool setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTalentPool setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTalentPool setTalentPoolID() setTalentPoolID(integer $value)
 * @method integer getTalentPoolID getTalentPoolID()
 * @method AbstractCRTalentPool setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRTalentPool setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRTalentPool setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRTalentPool setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRTalentPool setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRTalentPool setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPool setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRTalentPool setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRTalentPool setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRTalentPool setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRTalentPool setToProductTypeNode() setToProductTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode getToProductTypeNode($index = null)
 * @method AbstractCRTalentPool setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCRTalentPool setToFunctionLevel1() setToFunctionLevel1(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel1 getToFunctionLevel1($index = null)
 * @method AbstractCRTalentPool setToFunctionLevel2() setToFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel2 getToFunctionLevel2($index = null)
 * @method AbstractCRTalentPool setToFunctionLevel3() setToFunctionLevel3(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel3 getToFunctionLevel3($index = null)
 * @method AbstractCRTalentPool setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRTalentPool setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRTalentPool setTalentPoolMatches() setTalentPoolMatches(array|Collection $values)
 * @method Collection|CRTalentPoolMatch getTalentPoolMatches getTalentPoolMatches()
 * @method AbstractCRTalentPool setTalentPoolUsers() setTalentPoolUsers(array|Collection $values)
 * @method Collection|CRTalentPoolUser getTalentPoolUsers getTalentPoolUsers()
 * @method AbstractCRTalentPool setTalentPoolCompanies() setTalentPoolCompanies(array|Collection $values)
 * @method Collection|CRTalentPoolCompany getTalentPoolCompanies getTalentPoolCompanies()
 */
abstract class AbstractCRTalentPool extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPool';

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
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $talentPoolID;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $name;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial;

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
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner;

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
     * @name toProductNode
     */
    public $toProductNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode
     */
    public $toProductTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCategoryNode
     */
    public $toCategoryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel1
     */
    public $toFunctionLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel2
     */
    public $toFunctionLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel3
     */
    public $toFunctionLevel3;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     */
    public $groupNodes;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatch")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatch
     * @to_many 1
     * @name talentPoolMatches
     */
    public $talentPoolMatches;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolUser")
     * @mandatory 0
     * @destination_entity CRTalentPoolUser
     * @to_many 1
     * @name talentPoolUsers
     */
    public $talentPoolUsers;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolCompany")
     * @mandatory 0
     * @destination_entity CRTalentPoolCompany
     * @to_many 1
     * @name talentPoolCompanies
     */
    public $talentPoolCompanies;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolID");
        $entityConfiguration->setName("CRTalentPool");
    }
}
