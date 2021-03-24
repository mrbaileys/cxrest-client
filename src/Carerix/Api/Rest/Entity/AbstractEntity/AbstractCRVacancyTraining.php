<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRVacancy;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:34 +0000
 * @method AbstractCRVacancyTraining setVacancyTrainingID() setVacancyTrainingID(integer $value)
 * @method integer getVacancyTrainingID getVacancyTrainingID()
 * @method AbstractCRVacancyTraining setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRVacancyTraining setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRVacancyTraining setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRVacancyTraining setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRVacancyTraining setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRVacancyTraining setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRVacancyTraining setToTrainingLevel1() setToTrainingLevel1(array|CRDataNode $value)
 * @method CRDataNode getToTrainingLevel1 getToTrainingLevel1($index = null)
 * @method AbstractCRVacancyTraining setToTrainingLevel2() setToTrainingLevel2(array|CRDataNode $value)
 * @method CRDataNode getToTrainingLevel2 getToTrainingLevel2($index = null)
 */
abstract class AbstractCRVacancyTraining extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRVacancyTraining';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $vacancyTrainingID;

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
     * @name toTrainingLevel1
     * @default 0
     * @nodeType Cursus0
     */
    public $toTrainingLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrainingLevel2
     * @default 0
     * @nodeType Cursus1
     */
    public $toTrainingLevel2;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("vacancyTrainingID");
        $entityConfiguration->setName("CRVacancyTraining");
    }
}
