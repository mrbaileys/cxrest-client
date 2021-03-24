<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRLeadStage;
use Carerix\Api\Rest\Entity\CRLeadUser;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:39 +0000
 * @method AbstractCRLead setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRLead setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRLead setLeadID() setLeadID(integer $value)
 * @method integer getLeadID getLeadID()
 * @method AbstractCRLead setWorkPostalCode() setWorkPostalCode(string $value)
 * @method string getWorkPostalCode getWorkPostalCode()
 * @method AbstractCRLead setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRLead setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRLead setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRLead setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRLead setLeadNo() setLeadNo(string $value)
 * @method string getLeadNo getLeadNo()
 * @method AbstractCRLead setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRLead setSuccessRatePercentage() setSuccessRatePercentage(float $value)
 * @method float getSuccessRatePercentage getSuccessRatePercentage()
 * @method AbstractCRLead setEstimatedAmount() setEstimatedAmount(float $value)
 * @method float getEstimatedAmount getEstimatedAmount()
 * @method AbstractCRLead setWorkCity() setWorkCity(string $value)
 * @method string getWorkCity getWorkCity()
 * @method AbstractCRLead setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRLead setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRLead setCoordX() setCoordX(integer $value)
 * @method integer getCoordX getCoordX()
 * @method AbstractCRLead setCoordY() setCoordY(integer $value)
 * @method integer getCoordY getCoordY()
 * @method AbstractCRLead setFeePercentage() setFeePercentage(float $value)
 * @method float getFeePercentage getFeePercentage()
 * @method AbstractCRLead setWorkLocation() setWorkLocation(string $value)
 * @method string getWorkLocation getWorkLocation()
 * @method AbstractCRLead setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRLead setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRLead setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRLead setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRLead setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRLead setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRLead setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRLead setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRLead setToProvince1Node() setToProvince1Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince1Node getToProvince1Node($index = null)
 * @method AbstractCRLead setToSignAuthority() setToSignAuthority(array|CRUser $value)
 * @method CRUser getToSignAuthority getToSignAuthority($index = null)
 * @method AbstractCRLead setToCountry1Node() setToCountry1Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry1Node getToCountry1Node($index = null)
 * @method AbstractCRLead setToEstimatedAmountCurrencyNode() setToEstimatedAmountCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToEstimatedAmountCurrencyNode getToEstimatedAmountCurrencyNode($index = null)
 * @method AbstractCRLead setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRLead setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRLead setBroughtInBy() setBroughtInBy(array|CRUser $value)
 * @method CRUser getBroughtInBy getBroughtInBy($index = null)
 * @method AbstractCRLead setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRLead setToCountry2Node() setToCountry2Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry2Node getToCountry2Node($index = null)
 * @method AbstractCRLead setToCountry3Node() setToCountry3Node(array|CRDataNode $value)
 * @method CRDataNode getToCountry3Node getToCountry3Node($index = null)
 * @method AbstractCRLead setToProvince2Node() setToProvince2Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince2Node getToProvince2Node($index = null)
 * @method AbstractCRLead setToProvince3Node() setToProvince3Node(array|CRDataNode $value)
 * @method CRDataNode getToProvince3Node getToProvince3Node($index = null)
 * @method AbstractCRLead setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRLead setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCRLead setLeadUsers() setLeadUsers(array|Collection $values)
 * @method Collection|CRLeadUser getLeadUsers getLeadUsers()
 * @method AbstractCRLead setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCRLead setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRLead setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCRLead setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCRLead setToLeadStage() setToLeadStage(array|CRLeadStage $value)
 * @method CRLeadStage getToLeadStage getToLeadStage($index = null)
 * @method AbstractCRLead setToProcedureNode() setToProcedureNode(array|CRDataNode $value)
 * @method CRDataNode getToProcedureNode getToProcedureNode($index = null)
 * @method AbstractCRLead setVacancies() setVacancies(array|Collection $values)
 * @method Collection|CRVacancy getVacancies getVacancies()
 * @method AbstractCRLead setOpportunities() setOpportunities(array|Collection $values)
 * @method Collection|CROpportunity getOpportunities getOpportunities()
 * @method AbstractCRLead setToPriorityNode() setToPriorityNode(array|CRDataNode $value)
 * @method CRDataNode getToPriorityNode getToPriorityNode($index = null)
 */
abstract class AbstractCRLead extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRLead';

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
    public $leadID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $workPostalCode;

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
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 45
     */
    public $leadNo;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $successRatePercentage;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $estimatedAmount;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $workCity;

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
     * @width 255
     */
    public $sourceInfo;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordX;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordY;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $feePercentage;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $workLocation;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince1Node
     */
    public $toProvince1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toSignAuthority
     */
    public $toSignAuthority;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry1Node
     */
    public $toCountry1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toEstimatedAmountCurrencyNode
     */
    public $toEstimatedAmountCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     */
    public $toSourceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name broughtInBy
     */
    public $broughtInBy;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry2Node
     */
    public $toCountry2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountry3Node
     */
    public $toCountry3Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince2Node
     */
    public $toProvince2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvince3Node
     */
    public $toProvince3Node;

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
     * @var Collection
     * @OneToMany (targetEntity="CRLeadUser")
     * @mandatory 0
     * @destination_entity CRLeadUser
     * @to_many 1
     * @name leadUsers
     */
    public $leadUsers;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     */
    public $toBrancheLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel2
     */
    public $toBrancheLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRLeadStage
     * @OneToOne (targetEntity="CRLeadStage")
     * @mandatory 0
     * @destination_entity CRLeadStage
     * @to_many 0
     * @name toLeadStage
     */
    public $toLeadStage;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProcedureNode
     */
    public $toProcedureNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 1
     * @name vacancies
     */
    public $vacancies;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunity")
     * @mandatory 0
     * @destination_entity CROpportunity
     * @to_many 1
     * @name opportunities
     */
    public $opportunities;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPriorityNode
     */
    public $toPriorityNode;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("leadID");
        $entityConfiguration->setName("CRLead");
    }
}
