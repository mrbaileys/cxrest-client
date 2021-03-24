<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRCompanyAlias;
use Carerix\Api\Rest\Entity\CRCompanyStatus;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRLead;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRTalentPoolCompany;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserCompany;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRWorkHistory;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:22 +0000
 * @method AbstractCRCompany setUrl() setUrl(string $value)
 * @method string getUrl getUrl()
 * @method AbstractCRCompany setVisitStreet() setVisitStreet(string $value)
 * @method string getVisitStreet getVisitStreet()
 * @method AbstractCRCompany setVisitCity() setVisitCity(string $value)
 * @method string getVisitCity getVisitCity()
 * @method AbstractCRCompany setCompanyID() setCompanyID(integer $value)
 * @method integer getCompanyID getCompanyID()
 * @method AbstractCRCompany setEmailAddress() setEmailAddress(string $value)
 * @method string getEmailAddress getEmailAddress()
 * @method AbstractCRCompany setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRCompany setVisitPostalCode() setVisitPostalCode(string $value)
 * @method string getVisitPostalCode getVisitPostalCode()
 * @method AbstractCRCompany setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRCompany setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRCompany setVisitNumber() setVisitNumber(string $value)
 * @method string getVisitNumber getVisitNumber()
 * @method AbstractCRCompany setMailingCity() setMailingCity(string $value)
 * @method string getMailingCity getMailingCity()
 * @method AbstractCRCompany setMailingNumber() setMailingNumber(string $value)
 * @method string getMailingNumber getMailingNumber()
 * @method AbstractCRCompany setMailingPostalCode() setMailingPostalCode(string $value)
 * @method string getMailingPostalCode getMailingPostalCode()
 * @method AbstractCRCompany setMailingStreet() setMailingStreet(string $value)
 * @method string getMailingStreet getMailingStreet()
 * @method AbstractCRCompany setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRCompany setVisitNumberSuffix() setVisitNumberSuffix(string $value)
 * @method string getVisitNumberSuffix getVisitNumberSuffix()
 * @method AbstractCRCompany setShortName() setShortName(string $value)
 * @method string getShortName getShortName()
 * @method AbstractCRCompany setMailingNumberSuffix() setMailingNumberSuffix(string $value)
 * @method string getMailingNumberSuffix getMailingNumberSuffix()
 * @method AbstractCRCompany setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRCompany setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRCompany setIsSupplier() setIsSupplier(integer $value)
 * @method integer getIsSupplier getIsSupplier()
 * @method AbstractCRCompany setCreditUntilDate() setCreditUntilDate(string $value)
 * @method string getCreditUntilDate getCreditUntilDate()
 * @method AbstractCRCompany setCreditLimit() setCreditLimit(float $value)
 * @method float getCreditLimit getCreditLimit()
 * @method AbstractCRCompany setLastContactDate() setLastContactDate(string $value)
 * @method string getLastContactDate getLastContactDate()
 * @method AbstractCRCompany setInvoiceDiscountPercentage() setInvoiceDiscountPercentage(float $value)
 * @method float getInvoiceDiscountPercentage getInvoiceDiscountPercentage()
 * @method AbstractCRCompany setGAccountKey() setGAccountKey(integer $value)
 * @method integer getGAccountKey getGAccountKey()
 * @method AbstractCRCompany setGAccountPercentage() setGAccountPercentage(float $value)
 * @method float getGAccountPercentage getGAccountPercentage()
 * @method AbstractCRCompany setTaxChargeKey() setTaxChargeKey(integer $value)
 * @method integer getTaxChargeKey getTaxChargeKey()
 * @method AbstractCRCompany setCreditRestrictPercentage() setCreditRestrictPercentage(float $value)
 * @method float getCreditRestrictPercentage getCreditRestrictPercentage()
 * @method AbstractCRCompany setVisitFullAddress() setVisitFullAddress(string $value)
 * @method string getVisitFullAddress getVisitFullAddress()
 * @method AbstractCRCompany setMailingFullAddress() setMailingFullAddress(string $value)
 * @method string getMailingFullAddress getMailingFullAddress()
 * @method AbstractCRCompany setDivision() setDivision(string $value)
 * @method string getDivision getDivision()
 * @method AbstractCRCompany setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRCompany setIsCompetitor() setIsCompetitor(integer $value)
 * @method integer getIsCompetitor getIsCompetitor()
 * @method AbstractCRCompany setPaymentCode() setPaymentCode(string $value)
 * @method string getPaymentCode getPaymentCode()
 * @method AbstractCRCompany setCompanySize() setCompanySize(integer $value)
 * @method integer getCompanySize getCompanySize()
 * @method AbstractCRCompany setDebtorNumber() setDebtorNumber(string $value)
 * @method string getDebtorNumber getDebtorNumber()
 * @method AbstractCRCompany setFaxNumber() setFaxNumber(string $value)
 * @method string getFaxNumber getFaxNumber()
 * @method AbstractCRCompany setInvoiceCity() setInvoiceCity(string $value)
 * @method string getInvoiceCity getInvoiceCity()
 * @method AbstractCRCompany setInvoiceFullAddress() setInvoiceFullAddress(string $value)
 * @method string getInvoiceFullAddress getInvoiceFullAddress()
 * @method AbstractCRCompany setInvoiceNumber() setInvoiceNumber(string $value)
 * @method string getInvoiceNumber getInvoiceNumber()
 * @method AbstractCRCompany setInvoiceNumberSuffix() setInvoiceNumberSuffix(string $value)
 * @method string getInvoiceNumberSuffix getInvoiceNumberSuffix()
 * @method AbstractCRCompany setInvoicePostalCode() setInvoicePostalCode(string $value)
 * @method string getInvoicePostalCode getInvoicePostalCode()
 * @method AbstractCRCompany setInvoiceStreet() setInvoiceStreet(string $value)
 * @method string getInvoiceStreet getInvoiceStreet()
 * @method AbstractCRCompany setKvkNumber() setKvkNumber(string $value)
 * @method string getKvkNumber getKvkNumber()
 * @method AbstractCRCompany setNameAlias1() setNameAlias1(string $value)
 * @method string getNameAlias1 getNameAlias1()
 * @method AbstractCRCompany setNameAlias2() setNameAlias2(string $value)
 * @method string getNameAlias2 getNameAlias2()
 * @method AbstractCRCompany setNameAlias3() setNameAlias3(string $value)
 * @method string getNameAlias3 getNameAlias3()
 * @method AbstractCRCompany setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRCompany setPaymentTerm() setPaymentTerm(integer $value)
 * @method integer getPaymentTerm getPaymentTerm()
 * @method AbstractCRCompany setRevenue() setRevenue(float $value)
 * @method float getRevenue getRevenue()
 * @method AbstractCRCompany setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRCompany setTaxNumber() setTaxNumber(string $value)
 * @method string getTaxNumber getTaxNumber()
 * @method AbstractCRCompany setBankAccountNumberOld() setBankAccountNumberOld(string $value)
 * @method string getBankAccountNumberOld getBankAccountNumberOld()
 * @method AbstractCRCompany setBankName() setBankName(string $value)
 * @method string getBankName getBankName()
 * @method AbstractCRCompany setCreditFromDate() setCreditFromDate(string $value)
 * @method string getCreditFromDate getCreditFromDate()
 * @method AbstractCRCompany setNumberOfInvoicePrints() setNumberOfInvoicePrints(integer $value)
 * @method integer getNumberOfInvoicePrints getNumberOfInvoicePrints()
 * @method AbstractCRCompany setInvoiceSettings() setInvoiceSettings(NSDictionary|array $value)
 * @method NSDictionary|array getInvoiceSettings getInvoiceSettings()
 * @method AbstractCRCompany setContactCount() setContactCount(integer $value)
 * @method integer getContactCount getContactCount()
 * @method AbstractCRCompany setCoordX() setCoordX(integer $value)
 * @method integer getCoordX getCoordX()
 * @method AbstractCRCompany setCoordY() setCoordY(integer $value)
 * @method integer getCoordY getCoordY()
 * @method AbstractCRCompany setCorrespondenceName() setCorrespondenceName(string $value)
 * @method string getCorrespondenceName getCorrespondenceName()
 * @method AbstractCRCompany setCompanyProfile() setCompanyProfile(string $value)
 * @method string getCompanyProfile getCompanyProfile()
 * @method AbstractCRCompany setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCRCompany setCreateCollectiveInvoices() setCreateCollectiveInvoices(integer $value)
 * @method integer getCreateCollectiveInvoices getCreateCollectiveInvoices()
 * @method AbstractCRCompany setGAccountNotes() setGAccountNotes(string $value)
 * @method string getGAccountNotes getGAccountNotes()
 * @method AbstractCRCompany setGAccountNumber() setGAccountNumber(string $value)
 * @method string getGAccountNumber getGAccountNumber()
 * @method AbstractCRCompany setFeePercentage() setFeePercentage(float $value)
 * @method float getFeePercentage getFeePercentage()
 * @method AbstractCRCompany setBankBicCode() setBankBicCode(string $value)
 * @method string getBankBicCode getBankBicCode()
 * @method AbstractCRCompany setBankIbanCode() setBankIbanCode(string $value)
 * @method string getBankIbanCode getBankIbanCode()
 * @method AbstractCRCompany setLinkedInUrl() setLinkedInUrl(string $value)
 * @method string getLinkedInUrl getLinkedInUrl()
 * @method AbstractCRCompany setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRCompany setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRCompany setBankAccountNumber() setBankAccountNumber(string $value)
 * @method string getBankAccountNumber getBankAccountNumber()
 * @method AbstractCRCompany setKvkCity() setKvkCity(string $value)
 * @method string getKvkCity getKvkCity()
 * @method AbstractCRCompany setMailingCountrySort() setMailingCountrySort(string $value)
 * @method string getMailingCountrySort getMailingCountrySort()
 * @method AbstractCRCompany setMailingAddressUseVisitAddress() setMailingAddressUseVisitAddress(integer $value)
 * @method integer getMailingAddressUseVisitAddress getMailingAddressUseVisitAddress()
 * @method AbstractCRCompany setInvoiceAddressUseMailingAddress() setInvoiceAddressUseMailingAddress(integer $value)
 * @method integer getInvoiceAddressUseMailingAddress getInvoiceAddressUseMailingAddress()
 * @method AbstractCRCompany setEvaluation() setEvaluation(NSDictionary|array $value)
 * @method NSDictionary|array getEvaluation getEvaluation()
 * @method AbstractCRCompany setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRCompany setToMainUser() setToMainUser(array|CRUser $value)
 * @method CRUser getToMainUser getToMainUser($index = null)
 * @method AbstractCRCompany setUserCompanies() setUserCompanies(array|Collection $values)
 * @method Collection|CRUserCompany getUserCompanies getUserCompanies()
 * @method AbstractCRCompany setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRCompany setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRCompany setFinancialContact() setFinancialContact(array|CRUser $value)
 * @method CRUser getFinancialContact getFinancialContact($index = null)
 * @method AbstractCRCompany setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRCompany setToVisitProvinceNode() setToVisitProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitProvinceNode getToVisitProvinceNode($index = null)
 * @method AbstractCRCompany setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCRCompany setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCRCompany setToKeyAccountNode() setToKeyAccountNode(array|CRDataNode $value)
 * @method CRDataNode getToKeyAccountNode getToKeyAccountNode($index = null)
 * @method AbstractCRCompany setToVisitCountryNode() setToVisitCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitCountryNode getToVisitCountryNode($index = null)
 * @method AbstractCRCompany setChildren() setChildren(array|Collection $values)
 * @method Collection|CRCompany getChildren getChildren()
 * @method AbstractCRCompany setParents() setParents(array|Collection $values)
 * @method Collection|CRCompany getParents getParents()
 * @method AbstractCRCompany setStatuses() setStatuses(array|Collection $values)
 * @method Collection|CRCompanyStatus getStatuses getStatuses()
 * @method AbstractCRCompany setParent() setParent(array|CRCompany $value)
 * @method CRCompany getParent getParent($index = null)
 * @method AbstractCRCompany setToBikNode1() setToBikNode1(array|CRDataNode $value)
 * @method CRDataNode getToBikNode1 getToBikNode1($index = null)
 * @method AbstractCRCompany setToBikNode2() setToBikNode2(array|CRDataNode $value)
 * @method CRDataNode getToBikNode2 getToBikNode2($index = null)
 * @method AbstractCRCompany setToMailingCountryNode() setToMailingCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToMailingCountryNode getToMailingCountryNode($index = null)
 * @method AbstractCRCompany setToMailingProvinceNode() setToMailingProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToMailingProvinceNode getToMailingProvinceNode($index = null)
 * @method AbstractCRCompany setToInvoiceCollectionNode() setToInvoiceCollectionNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceCollectionNode getToInvoiceCollectionNode($index = null)
 * @method AbstractCRCompany setToCreditStatusNode() setToCreditStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToCreditStatusNode getToCreditStatusNode($index = null)
 * @method AbstractCRCompany setToInvoiceCurrencyNode() setToInvoiceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceCurrencyNode getToInvoiceCurrencyNode($index = null)
 * @method AbstractCRCompany setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRCompany setToAccountTypeNode() setToAccountTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToAccountTypeNode getToAccountTypeNode($index = null)
 * @method AbstractCRCompany setToInvoiceCountryNode() setToInvoiceCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceCountryNode getToInvoiceCountryNode($index = null)
 * @method AbstractCRCompany setToInvoiceProvinceNode() setToInvoiceProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceProvinceNode getToInvoiceProvinceNode($index = null)
 * @method AbstractCRCompany setToRechtsvormNode() setToRechtsvormNode(array|CRDataNode $value)
 * @method CRDataNode getToRechtsvormNode getToRechtsvormNode($index = null)
 * @method AbstractCRCompany setToRevenueCurrencyNode() setToRevenueCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToRevenueCurrencyNode getToRevenueCurrencyNode($index = null)
 * @method AbstractCRCompany setVacancies() setVacancies(array|Collection $values)
 * @method Collection|CRVacancy getVacancies getVacancies()
 * @method AbstractCRCompany setToCreditLimitCurrencyNode() setToCreditLimitCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCreditLimitCurrencyNode getToCreditLimitCurrencyNode($index = null)
 * @method AbstractCRCompany setToInvoicePeriodNode() setToInvoicePeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoicePeriodNode getToInvoicePeriodNode($index = null)
 * @method AbstractCRCompany setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRCompany setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRCompany setToKindNode() setToKindNode(array|CRDataNode $value)
 * @method CRDataNode getToKindNode getToKindNode($index = null)
 * @method AbstractCRCompany setToPaymentPeriodNode() setToPaymentPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentPeriodNode getToPaymentPeriodNode($index = null)
 * @method AbstractCRCompany setToTaxRateNode() setToTaxRateNode(array|CRDataNode $value)
 * @method CRDataNode getToTaxRateNode getToTaxRateNode($index = null)
 * @method AbstractCRCompany setToUnionConditions1Node() setToUnionConditions1Node(array|CRDataNode $value)
 * @method CRDataNode getToUnionConditions1Node getToUnionConditions1Node($index = null)
 * @method AbstractCRCompany setToUnionConditions2Node() setToUnionConditions2Node(array|CRDataNode $value)
 * @method CRDataNode getToUnionConditions2Node getToUnionConditions2Node($index = null)
 * @method AbstractCRCompany setToInvoiceHandlingNode() setToInvoiceHandlingNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceHandlingNode getToInvoiceHandlingNode($index = null)
 * @method AbstractCRCompany setToInvoiceLineLabelNode() setToInvoiceLineLabelNode(array|CRDataNode $value)
 * @method CRDataNode getToInvoiceLineLabelNode getToInvoiceLineLabelNode($index = null)
 * @method AbstractCRCompany setToPaymentPeriodStartDateNode() setToPaymentPeriodStartDateNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentPeriodStartDateNode getToPaymentPeriodStartDateNode($index = null)
 * @method AbstractCRCompany setToCreditMethodNode() setToCreditMethodNode(array|CRDataNode $value)
 * @method CRDataNode getToCreditMethodNode getToCreditMethodNode($index = null)
 * @method AbstractCRCompany setWorkHistories() setWorkHistories(array|Collection $values)
 * @method Collection|CRWorkHistory getWorkHistories getWorkHistories()
 * @method AbstractCRCompany setAliases() setAliases(array|Collection $values)
 * @method Collection|CRCompanyAlias getAliases getAliases()
 * @method AbstractCRCompany setFreelanceCandidates() setFreelanceCandidates(array|Collection $values)
 * @method Collection|CREmployee getFreelanceCandidates getFreelanceCandidates()
 * @method AbstractCRCompany setTalentPoolCompanies() setTalentPoolCompanies(array|Collection $values)
 * @method Collection|CRTalentPoolCompany getTalentPoolCompanies getTalentPoolCompanies()
 * @method AbstractCRCompany setOpportunities() setOpportunities(array|Collection $values)
 * @method Collection|CROpportunity getOpportunities getOpportunities()
 * @method AbstractCRCompany setLeads() setLeads(array|Collection $values)
 * @method Collection|CRLead getLeads getLeads()
 */
abstract class AbstractCRCompany extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRCompany';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $url;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $visitStreet;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $visitCity;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $companyID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $emailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $name;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $visitPostalCode;

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
     * @width 10
     */
    public $visitNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $mailingCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $mailingNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $mailingPostalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $mailingStreet;

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
     * @width 10
     */
    public $visitNumberSuffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 16
     */
    public $shortName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $mailingNumberSuffix;

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
     * @width 40
     */
    public $phoneNumber;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isSupplier;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $creditUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $creditLimit;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastContactDate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $invoiceDiscountPercentage;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $gAccountKey;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $gAccountPercentage;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $taxChargeKey;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $creditRestrictPercentage;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $visitFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $mailingFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $division;

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
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isCompetitor;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentCode;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $companySize;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $debtorNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $faxNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $invoiceCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $invoiceFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $invoiceNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $invoiceNumberSuffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $invoicePostalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $invoiceStreet;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $kvkNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $nameAlias1;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $nameAlias2;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $nameAlias3;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $paymentTerm;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $revenue;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $companyInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $taxNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $bankAccountNumberOld;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $bankName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $creditFromDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $numberOfInvoicePrints;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $invoiceSettings;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $contactCount;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $correspondenceName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $companyProfile;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $createCollectiveInvoices;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $gAccountNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $gAccountNumber;

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
     * @width 40
     */
    public $bankBicCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $bankIbanCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $linkedInUrl;

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
     * @width 40
     */
    public $bankAccountNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $kvkCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $mailingCountrySort;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $mailingAddressUseVisitAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $invoiceAddressUseMailingAddress;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $externalIdentifier;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toMainUser
     */
    public $toMainUser;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserCompany")
     * @mandatory 0
     * @destination_entity CRUserCompany
     * @to_many 1
     * @name userCompanies
     */
    public $userCompanies;

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
     * @name financialContact
     */
    public $financialContact;

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
     * @name toVisitProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toVisitProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     * @default 1
     * @nodeType Branche0
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
     * @default 1
     * @nodeType Branche1
     */
    public $toBrancheLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toKeyAccountNode
     * @default 1
     * @nodeType Key-account
     */
    public $toKeyAccountNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVisitCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toVisitCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 1
     * @name children
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 1
     * @name parents
     */
    public $parents;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompanyStatus")
     * @mandatory 0
     * @destination_entity CRCompanyStatus
     * @to_many 1
     * @name statuses
     */
    public $statuses;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name parent
     */
    public $parent;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBikNode1
     * @default 0
     * @nodeType BIK
     */
    public $toBikNode1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBikNode2
     * @default 0
     * @nodeType BIK
     */
    public $toBikNode2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMailingCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toMailingCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMailingProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toMailingProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceCollectionNode
     * @default 1
     * @nodeType Verzamelfacturen
     */
    public $toInvoiceCollectionNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCreditStatusNode
     * @default 1
     * @nodeType Krediet-status
     */
    public $toCreditStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toInvoiceCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     * @default 0
     * @nodeType Bron-Opdrachtgever
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
     * @name toAccountTypeNode
     * @default 1
     * @nodeType Rekeningtype
     */
    public $toAccountTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toInvoiceCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toInvoiceProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRechtsvormNode
     * @default 1
     * @nodeType Rechtspersoon
     */
    public $toRechtsvormNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRevenueCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toRevenueCurrencyNode;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCreditLimitCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toCreditLimitCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoicePeriodNode
     * @default 1
     * @nodeType Facturatieperiode
     */
    public $toInvoicePeriodNode;

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
     * @name toLanguageNode
     * @default 1
     * @nodeType Taal
     */
    public $toLanguageNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toKindNode
     * @default 1
     * @nodeType Opdrachtgever-soort
     */
    public $toKindNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentPeriodNode
     * @default 1
     * @nodeType Betalingstermijn
     */
    public $toPaymentPeriodNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTaxRateNode
     * @default 1
     * @nodeType BTW-tarief
     */
    public $toTaxRateNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toUnionConditions1Node
     */
    public $toUnionConditions1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toUnionConditions2Node
     */
    public $toUnionConditions2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceHandlingNode
     * @default 1
     * @nodeType Factuurafhandeling
     */
    public $toInvoiceHandlingNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toInvoiceLineLabelNode
     * @default 1
     * @nodeType Factuurregel-label
     */
    public $toInvoiceLineLabelNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentPeriodStartDateNode
     * @default 1
     * @nodeType Betalingstermijn-startdatum
     */
    public $toPaymentPeriodStartDateNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCreditMethodNode
     * @default 1
     * @nodeType Crediteringsmethode
     */
    public $toCreditMethodNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWorkHistory")
     * @mandatory 0
     * @destination_entity CRWorkHistory
     * @to_many 1
     * @name workHistories
     */
    public $workHistories;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompanyAlias")
     * @mandatory 0
     * @destination_entity CRCompanyAlias
     * @to_many 1
     * @name aliases
     */
    public $aliases;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 1
     * @name freelanceCandidates
     */
    public $freelanceCandidates;

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
     * @var Collection
     * @OneToMany (targetEntity="CRLead")
     * @mandatory 0
     * @destination_entity CRLead
     * @to_many 1
     * @name leads
     */
    public $leads;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("companyID");
        $entityConfiguration->setName("CRCompany");
    }
}
