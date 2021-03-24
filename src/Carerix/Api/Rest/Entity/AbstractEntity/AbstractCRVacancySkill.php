<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:35 +0000
 * @method AbstractCRVacancySkill setVacancySkillID() setVacancySkillID(integer $value)
 * @method integer getVacancySkillID getVacancySkillID()
 * @method AbstractCRVacancySkill setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRVacancySkill setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRVacancySkill setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRVacancySkill setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRVacancySkill setToSkillLevel1() setToSkillLevel1(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel1 getToSkillLevel1($index = null)
 * @method AbstractCRVacancySkill setToSkillLevel2() setToSkillLevel2(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel2 getToSkillLevel2($index = null)
 * @method AbstractCRVacancySkill setToSkillLevel3() setToSkillLevel3(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel3 getToSkillLevel3($index = null)
 */
abstract class AbstractCRVacancySkill extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRVacancySkill';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancySkillID;

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
     * @name toSkillLevel1
     */
    public $toSkillLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSkillLevel2
     */
    public $toSkillLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSkillLevel3
     */
    public $toSkillLevel3;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancySkillID");
        $entityConfiguration->setName("CRVacancySkill");
    }
}
