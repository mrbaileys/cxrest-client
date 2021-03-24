<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:20 +0000
 * @method AbstractCRAgency setAgencyID() setAgencyID(integer $value)
 * @method integer getAgencyID getAgencyID()
 * @method AbstractCRAgency setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRAgency setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRAgency setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRAgency setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRAgency setActivityCode() setActivityCode(string $value)
 * @method string getActivityCode getActivityCode()
 * @method AbstractCRAgency setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRAgency setShortName() setShortName(string $value)
 * @method string getShortName getShortName()
 * @method AbstractCRAgency setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRAgency setEmailAddress() setEmailAddress(string $value)
 * @method string getEmailAddress getEmailAddress()
 * @method AbstractCRAgency setFaxNumber() setFaxNumber(string $value)
 * @method string getFaxNumber getFaxNumber()
 * @method AbstractCRAgency setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRAgency setVisitCity() setVisitCity(string $value)
 * @method string getVisitCity getVisitCity()
 * @method AbstractCRAgency setVisitFullAddress() setVisitFullAddress(string $value)
 * @method string getVisitFullAddress getVisitFullAddress()
 * @method AbstractCRAgency setVisitNumber() setVisitNumber(string $value)
 * @method string getVisitNumber getVisitNumber()
 * @method AbstractCRAgency setVisitNumberSuffix() setVisitNumberSuffix(string $value)
 * @method string getVisitNumberSuffix getVisitNumberSuffix()
 * @method AbstractCRAgency setVisitStreet() setVisitStreet(string $value)
 * @method string getVisitStreet getVisitStreet()
 * @method AbstractCRAgency setIsLegalEntity() setIsLegalEntity(integer $value)
 * @method integer getIsLegalEntity getIsLegalEntity()
 * @method AbstractCRAgency setIsMainAgency() setIsMainAgency(integer $value)
 * @method integer getIsMainAgency getIsMainAgency()
 * @method AbstractCRAgency setBankName() setBankName(string $value)
 * @method string getBankName getBankName()
 * @method AbstractCRAgency setBankAccountNumberOld() setBankAccountNumberOld(string $value)
 * @method string getBankAccountNumberOld getBankAccountNumberOld()
 * @method AbstractCRAgency setBankAccountName() setBankAccountName(string $value)
 * @method string getBankAccountName getBankAccountName()
 * @method AbstractCRAgency setBankBicCode() setBankBicCode(string $value)
 * @method string getBankBicCode getBankBicCode()
 * @method AbstractCRAgency setBankIbanCode() setBankIbanCode(string $value)
 * @method string getBankIbanCode getBankIbanCode()
 * @method AbstractCRAgency setTaxNumber() setTaxNumber(string $value)
 * @method string getTaxNumber getTaxNumber()
 * @method AbstractCRAgency setKvkNumber() setKvkNumber(string $value)
 * @method string getKvkNumber getKvkNumber()
 * @method AbstractCRAgency setMailingCity() setMailingCity(string $value)
 * @method string getMailingCity getMailingCity()
 * @method AbstractCRAgency setMailingFullAddress() setMailingFullAddress(string $value)
 * @method string getMailingFullAddress getMailingFullAddress()
 * @method AbstractCRAgency setMailingNumber() setMailingNumber(string $value)
 * @method string getMailingNumber getMailingNumber()
 * @method AbstractCRAgency setMailingNumberSuffix() setMailingNumberSuffix(string $value)
 * @method string getMailingNumberSuffix getMailingNumberSuffix()
 * @method AbstractCRAgency setMailingStreet() setMailingStreet(string $value)
 * @method string getMailingStreet getMailingStreet()
 * @method AbstractCRAgency setVisitPostalCode() setVisitPostalCode(string $value)
 * @method string getVisitPostalCode getVisitPostalCode()
 * @method AbstractCRAgency setMailingPostalCode() setMailingPostalCode(string $value)
 * @method string getMailingPostalCode getMailingPostalCode()
 * @method AbstractCRAgency setIsHidden() setIsHidden(integer $value)
 * @method integer getIsHidden getIsHidden()
 * @method AbstractCRAgency setBankAccountNumber() setBankAccountNumber(string $value)
 * @method string getBankAccountNumber getBankAccountNumber()
 * @method AbstractCRAgency setKvkCity() setKvkCity(string $value)
 * @method string getKvkCity getKvkCity()
 * @method AbstractCRAgency setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRAgency setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRAgency setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRAgency setAdditionalIndicationColor() setAdditionalIndicationColor(string $value)
 * @method string getAdditionalIndicationColor getAdditionalIndicationColor()
 * @method AbstractCRAgency setParent() setParent(array|CRAgency $value)
 * @method CRAgency getParent getParent($index = null)
 * @method AbstractCRAgency setChildren() setChildren(array|Collection $values)
 * @method Collection|CRAgency getChildren getChildren()
 * @method AbstractCRAgency setUsers() setUsers(array|Collection $values)
 * @method Collection|CRUser getUsers getUsers()
 * @method AbstractCRAgency setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRAgency setToVisitCountryNode() setToVisitCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitCountryNode getToVisitCountryNode($index = null)
 * @method AbstractCRAgency setToVisitProvinceNode() setToVisitProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitProvinceNode getToVisitProvinceNode($index = null)
 * @method AbstractCRAgency setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRAgency setToMailingCountryNode() setToMailingCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToMailingCountryNode getToMailingCountryNode($index = null)
 * @method AbstractCRAgency setToMailingProvinceNode() setToMailingProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToMailingProvinceNode getToMailingProvinceNode($index = null)
 */
abstract class AbstractCRAgency extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRAgency';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $agencyID;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $activityCode;

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
     * @width 16
     */
    public $shortName;

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
     * @width 60
     */
    public $emailAddress;

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
    public $phoneNumber;

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
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $visitFullAddress;

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
     * @width 10
     */
    public $visitNumberSuffix;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isLegalEntity;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMainAgency;

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
    public $bankAccountName;

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
    public $kvkNumber;

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
     * @width
     */
    public $mailingFullAddress;

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
     * @width 10
     */
    public $mailingNumberSuffix;

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
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $mailingPostalCode;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isHidden;

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
     * @width 20
     */
    public $indicationColor;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $additionalIndicationColor;

    /**
     * @cx_field true
     * @access private
     * @var CRAgency
     * @OneToOne (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name parent
     */
    public $parent;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 1
     * @name children
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 1
     * @name users
     */
    public $users;

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
     * @name toVisitCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toVisitCountryNode;

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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("agencyID");
        $entityConfiguration->setName("CRAgency");
    }
}
