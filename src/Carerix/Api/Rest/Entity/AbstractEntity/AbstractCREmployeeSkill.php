<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:26 +0000
 * @method AbstractCREmployeeSkill setEmployeeSkillID() setEmployeeSkillID(integer $value)
 * @method integer getEmployeeSkillID getEmployeeSkillID()
 * @method AbstractCREmployeeSkill setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployeeSkill setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployeeSkill setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployeeSkill setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCREmployeeSkill setToSkillLevel1() setToSkillLevel1(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel1 getToSkillLevel1($index = null)
 * @method AbstractCREmployeeSkill setToSkillLevel2() setToSkillLevel2(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel2 getToSkillLevel2($index = null)
 * @method AbstractCREmployeeSkill setToSkillLevel3() setToSkillLevel3(array|CRDataNode $value)
 * @method CRDataNode getToSkillLevel3 getToSkillLevel3($index = null)
 */
abstract class AbstractCREmployeeSkill extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmployeeSkill';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeSkillID;

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
     * @name toSkillLevel1
     * @default 0
     * @nodeType Vaardigheid0
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
     * @default 0
     * @nodeType Vaardigheid1
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
     * @default 0
     * @nodeType Vaardigheid2
     */
    public $toSkillLevel3;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeSkillID");
        $entityConfiguration->setName("CREmployeeSkill");
    }
}
