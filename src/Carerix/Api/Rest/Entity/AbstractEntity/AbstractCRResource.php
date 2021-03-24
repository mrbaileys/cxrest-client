<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRToDoResource;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:30 +0000
 * @method AbstractCRResource setResourceID() setResourceID(integer $value)
 * @method integer getResourceID getResourceID()
 * @method AbstractCRResource setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRResource setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRResource setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRResource setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRResource setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRResource setLocation() setLocation(string $value)
 * @method string getLocation getLocation()
 * @method AbstractCRResource setResourceDescription() setResourceDescription(string $value)
 * @method string getResourceDescription getResourceDescription()
 * @method AbstractCRResource setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRResource setLocationUrl() setLocationUrl(string $value)
 * @method string getLocationUrl getLocationUrl()
 * @method AbstractCRResource setUrl() setUrl(string $value)
 * @method string getUrl getUrl()
 * @method AbstractCRResource setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRResource setIdentification() setIdentification(string $value)
 * @method string getIdentification getIdentification()
 * @method AbstractCRResource setAmount() setAmount(float $value)
 * @method float getAmount getAmount()
 * @method AbstractCRResource setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRResource setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRResource setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRResource setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRResource setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRResource setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRResource setToResourceTypeNode() setToResourceTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToResourceTypeNode getToResourceTypeNode($index = null)
 * @method AbstractCRResource setToRegulationTypeNode() setToRegulationTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToRegulationTypeNode getToRegulationTypeNode($index = null)
 * @method AbstractCRResource setToAmountCurrencyNode() setToAmountCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToAmountCurrencyNode getToAmountCurrencyNode($index = null)
 * @method AbstractCRResource setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRResource setToDoResources() setToDoResources(array|Collection $values)
 * @method Collection|CRToDoResource getToDoResources getToDoResources()
 */
abstract class AbstractCRResource extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRResource';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $resourceID;

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
     * @width 100
     */
    public $name;

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
     * @width 1000000
     */
    public $location;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $resourceDescription;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $locationUrl;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $url;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $identification;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $amount;

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
     * @name toResourceTypeNode
     * @default 0
     * @nodeType Faciliteit-type
     */
    public $toResourceTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRegulationTypeNode
     * @default 0
     * @nodeType Regeling-type
     */
    public $toRegulationTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAmountCurrencyNode
     */
    public $toAmountCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRAgency
     * @OneToOne (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name agency
     */
    public $agency;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoResource")
     * @mandatory 0
     * @destination_entity CRToDoResource
     * @to_many 1
     * @name toDoResources
     */
    public $toDoResources;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("resourceID");
        $entityConfiguration->setName("CRResource");
    }
}
