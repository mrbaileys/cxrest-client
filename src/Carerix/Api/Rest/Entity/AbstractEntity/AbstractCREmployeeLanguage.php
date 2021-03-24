<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:26 +0000
 * @method AbstractCREmployeeLanguage setEmployeeLanguageID() setEmployeeLanguageID(integer $value)
 * @method integer getEmployeeLanguageID getEmployeeLanguageID()
 * @method AbstractCREmployeeLanguage setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployeeLanguage setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployeeLanguage setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployeeLanguage setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCREmployeeLanguage setToLanguageSpeakLevel() setToLanguageSpeakLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageSpeakLevel getToLanguageSpeakLevel($index = null)
 * @method AbstractCREmployeeLanguage setToLanguageReadLevel() setToLanguageReadLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageReadLevel getToLanguageReadLevel($index = null)
 * @method AbstractCREmployeeLanguage setToLanguageWriteLevel() setToLanguageWriteLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageWriteLevel getToLanguageWriteLevel($index = null)
 * @method AbstractCREmployeeLanguage setToLanguage() setToLanguage(array|CRDataNode $value)
 * @method CRDataNode getToLanguage getToLanguage($index = null)
 */
abstract class AbstractCREmployeeLanguage extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmployeeLanguage';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeLanguageID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
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
     * @name toLanguageSpeakLevel
     * @default 0
     * @nodeType Taalvaardigheid
     */
    public $toLanguageSpeakLevel;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageReadLevel
     * @default 0
     * @nodeType Taalvaardigheid
     */
    public $toLanguageReadLevel;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageWriteLevel
     * @default 0
     * @nodeType Taalvaardigheid
     */
    public $toLanguageWriteLevel;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguage
     * @default 0
     * @nodeType Taal
     */
    public $toLanguage;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeLanguageID");
        $entityConfiguration->setName("CREmployeeLanguage");
    }
}
