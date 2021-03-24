<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:29 +0000
 * @method AbstractCRMatch setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMatch setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMatch setRecruiterPreferenceKey() setRecruiterPreferenceKey(integer $value)
 * @method integer getRecruiterPreferenceKey getRecruiterPreferenceKey()
 * @method AbstractCRMatch setProofPeriod() setProofPeriod(integer $value)
 * @method integer getProofPeriod getProofPeriod()
 * @method AbstractCRMatch setAgreedSalary() setAgreedSalary(string $value)
 * @method string getAgreedSalary getAgreedSalary()
 * @method AbstractCRMatch setJobStartDate() setJobStartDate(string $value)
 * @method string getJobStartDate getJobStartDate()
 * @method AbstractCRMatch setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRMatch setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRMatch setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRMatch setInvoiceRate() setInvoiceRate(float $value)
 * @method float getInvoiceRate getInvoiceRate()
 * @method AbstractCRMatch setWageRate() setWageRate(float $value)
 * @method float getWageRate getWageRate()
 * @method AbstractCRMatch setMotivation() setMotivation(string $value)
 * @method string getMotivation getMotivation()
 * @method AbstractCRMatch setWageRatePerHour() setWageRatePerHour(integer $value)
 * @method integer getWageRatePerHour getWageRatePerHour()
 * @method AbstractCRMatch setEvaluation() setEvaluation(NSDictionary|array $value)
 * @method NSDictionary|array getEvaluation getEvaluation()
 * @method AbstractCRMatch setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRMatch setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRMatch setCostPrice() setCostPrice(float $value)
 * @method float getCostPrice getCostPrice()
 * @method AbstractCRMatch setSellingPrice() setSellingPrice(float $value)
 * @method float getSellingPrice getSellingPrice()
 * @method AbstractCRMatch setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCRMatch setPurchaseRate() setPurchaseRate(float $value)
 * @method float getPurchaseRate getPurchaseRate()
 * @method AbstractCRMatch setDefaultSalesFactor() setDefaultSalesFactor(float $value)
 * @method float getDefaultSalesFactor getDefaultSalesFactor()
 * @method AbstractCRMatch setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRMatch setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRMatch setExternalInfo() setExternalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getExternalInfo getExternalInfo()
 * @method AbstractCRMatch setApplySource() setApplySource(string $value)
 * @method string getApplySource getApplySource()
 * @method AbstractCRMatch setApplyTags() setApplyTags(NSArray|array $value)
 * @method NSArray|array getApplyTags getApplyTags()
 * @method AbstractCRMatch setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRMatch setFitScore() setFitScore(integer $value)
 * @method integer getFitScore getFitScore()
 * @method AbstractCRMatch setFitGap() setFitGap(string $value)
 * @method string getFitGap getFitGap()
 * @method AbstractCRMatch setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRMatch setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRMatch setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRMatch setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRMatch setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRMatch setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 * @method AbstractCRMatch setToMedium() setToMedium(array|CRMedium $value)
 * @method CRMedium getToMedium getToMedium($index = null)
 * @method AbstractCRMatch setStatusInfo() setStatusInfo(array|CRStatusInfo $value)
 * @method CRStatusInfo getStatusInfo getStatusInfo($index = null)
 * @method AbstractCRMatch setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCRMatch setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRMatch setToWageRateCurrencyNode() setToWageRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToWageRateCurrencyNode getToWageRateCurrencyNode($index = null)
 * @method AbstractCRMatch setToWageRateUnitNode() setToWageRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToWageRateUnitNode getToWageRateUnitNode($index = null)
 * @method AbstractCRMatch setToInvoiceRateCurrencyNode() setToInvoiceRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceRateCurrencyNode getToInvoiceRateCurrencyNode($index = null)
 * @method AbstractCRMatch setToInvoiceRateUnitNode() setToInvoiceRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceRateUnitNode getToInvoiceRateUnitNode($index = null)
 * @method AbstractCRMatch setToLevel2Company() setToLevel2Company(array|CRCompany $value)
 * @method CRCompany getToLevel2Company getToLevel2Company($index = null)
 * @method AbstractCRMatch setToLevel2User() setToLevel2User(array|CRUser $value)
 * @method CRUser getToLevel2User getToLevel2User($index = null)
 * @method AbstractCRMatch setToLevel1Company() setToLevel1Company(array|CRCompany $value)
 * @method CRCompany getToLevel1Company getToLevel1Company($index = null)
 * @method AbstractCRMatch setToLevel1User() setToLevel1User(array|CRUser $value)
 * @method CRUser getToLevel1User getToLevel1User($index = null)
 * @method AbstractCRMatch setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRMatch setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCRMatch setToCostPriceCurrencyNode() setToCostPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceCurrencyNode getToCostPriceCurrencyNode($index = null)
 * @method AbstractCRMatch setToCostPriceUnitNode() setToCostPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceUnitNode getToCostPriceUnitNode($index = null)
 * @method AbstractCRMatch setToSellingPriceCurrencyNode() setToSellingPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceCurrencyNode getToSellingPriceCurrencyNode($index = null)
 * @method AbstractCRMatch setToSellingPriceUnitNode() setToSellingPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceUnitNode getToSellingPriceUnitNode($index = null)
 * @method AbstractCRMatch setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRMatch setToPreferenceNode() setToPreferenceNode(array|CRDataNode $value)
 * @method CRDataNode getToPreferenceNode getToPreferenceNode($index = null)
 * @method AbstractCRMatch setToPurchaseRateCurrencyNode() setToPurchaseRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateCurrencyNode getToPurchaseRateCurrencyNode($index = null)
 * @method AbstractCRMatch setToPurchaseRateUnitNode() setToPurchaseRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateUnitNode getToPurchaseRateUnitNode($index = null)
 * @method AbstractCRMatch setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRMatch setToCurrentEmployeeBrancheLevel1() setToCurrentEmployeeBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToCurrentEmployeeBrancheLevel1 getToCurrentEmployeeBrancheLevel1($index = null)
 * @method AbstractCRMatch setToCurrentEmployeeBrancheLevel2() setToCurrentEmployeeBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentEmployeeBrancheLevel2 getToCurrentEmployeeBrancheLevel2($index = null)
 * @method AbstractCRMatch setToCurrentEmployeeFunctionLevel2() setToCurrentEmployeeFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentEmployeeFunctionLevel2 getToCurrentEmployeeFunctionLevel2($index = null)
 */
abstract class AbstractCRMatch extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRMatch';

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recruiterPreferenceKey;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $proofPeriod;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $agreedSalary;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $jobStartDate;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoiceRate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wageRate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $motivation;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $wageRatePerHour;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $evaluation;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $sortOrder;

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
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costPrice;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sellingPrice;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $salesFactor;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $defaultSalesFactor;

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
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $externalInfo;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $applySource;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     * @xmlSubelementName tag
     */
    public $applyTags;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $externalIdentifier;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $fitScore;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $fitGap;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 1
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     */
    public $toEmployee;

    /**
     * @cx_field true
     * @access private
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 1
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy;

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
     * @var CRPublication
     * @OneToOne (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 0
     * @name toPublication
     */
    public $toPublication;

    /**
     * @cx_field true
     * @access private
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toMedium
     */
    public $toMedium;

    /**
     * @cx_field true
     * @access private
     * @var CRStatusInfo
     * @OneToOne (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 0
     * @name statusInfo
     */
    public $statusInfo;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 1
     * @name jobs
     */
    public $jobs;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWageRateCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toWageRateCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWageRateUnitNode
     * @default 1
     * @nodeType Inkooptarief-eenheid
     */
    public $toWageRateUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceRateCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toInvoiceRateCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceRateUnitNode
     * @default 1
     * @nodeType Verkooptarief-eenheid
     */
    public $toInvoiceRateUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toLevel2Company
     */
    public $toLevel2Company;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toLevel2User
     */
    public $toLevel2User;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toLevel1Company
     */
    public $toLevel1Company;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toLevel1User
     */
    public $toLevel1User;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceCurrencyNode
     */
    public $toCostPriceCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceUnitNode
     */
    public $toCostPriceUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceCurrencyNode
     */
    public $toSellingPriceCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceUnitNode
     */
    public $toSellingPriceUnitNode;

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
     * @name toPreferenceNode
     * @default 1
     * @nodeType Match-Favoriet
     */
    public $toPreferenceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateCurrencyNode
     */
    public $toPurchaseRateCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateUnitNode
     */
    public $toPurchaseRateUnitNode;

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
     * @name toCurrentEmployeeBrancheLevel1
     */
    public $toCurrentEmployeeBrancheLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentEmployeeBrancheLevel2
     */
    public $toCurrentEmployeeBrancheLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentEmployeeFunctionLevel2
     */
    public $toCurrentEmployeeFunctionLevel2;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("matchID");
        $entityConfiguration->setName("CRMatch");
    }
}
