<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:35 +0000
 * @method AbstractCRVacancyLanguage setVacancyLanguageID() setVacancyLanguageID(integer $value)
 * @method integer getVacancyLanguageID getVacancyLanguageID()
 * @method AbstractCRVacancyLanguage setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRVacancyLanguage setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRVacancyLanguage setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRVacancyLanguage setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRVacancyLanguage setToLanguageSpeakLevel() setToLanguageSpeakLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageSpeakLevel getToLanguageSpeakLevel($index = null)
 * @method AbstractCRVacancyLanguage setToLanguageReadLevel() setToLanguageReadLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageReadLevel getToLanguageReadLevel($index = null)
 * @method AbstractCRVacancyLanguage setToLanguageWriteLevel() setToLanguageWriteLevel(array|CRDataNode $value)
 * @method CRDataNode getToLanguageWriteLevel getToLanguageWriteLevel($index = null)
 * @method AbstractCRVacancyLanguage setToLanguage() setToLanguage(array|CRDataNode $value)
 * @method CRDataNode getToLanguage getToLanguage($index = null)
 */
abstract class AbstractCRVacancyLanguage extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRVacancyLanguage';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancyLanguageID;

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
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     */
    public $toVacancy;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageSpeakLevel
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
     */
    public $toLanguage;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancyLanguageID");
        $entityConfiguration->setName("CRVacancyLanguage");
    }
}
