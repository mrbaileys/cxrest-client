<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployee;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:36 +0000
 * @method AbstractCRWorkHistory setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRWorkHistory setEmployer() setEmployer(string $value)
 * @method string getEmployer getEmployer()
 * @method AbstractCRWorkHistory setEndDate() setEndDate(string $value)
 * @method string getEndDate getEndDate()
 * @method AbstractCRWorkHistory setFunction() setFunction(string $value)
 * @method string getFunction getFunction()
 * @method AbstractCRWorkHistory setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRWorkHistory setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRWorkHistory setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCRWorkHistory setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRWorkHistory setInfo() setInfo(string $value)
 * @method string getInfo getInfo()
 * @method AbstractCRWorkHistory setWorkHistoryID() setWorkHistoryID(integer $value)
 * @method integer getWorkHistoryID getWorkHistoryID()
 * @method AbstractCRWorkHistory setWorkLocation() setWorkLocation(string $value)
 * @method string getWorkLocation getWorkLocation()
 * @method AbstractCRWorkHistory setEmployerInfo() setEmployerInfo(string $value)
 * @method string getEmployerInfo getEmployerInfo()
 * @method AbstractCRWorkHistory setEndReason() setEndReason(string $value)
 * @method string getEndReason getEndReason()
 * @method AbstractCRWorkHistory setReference() setReference(string $value)
 * @method string getReference getReference()
 * @method AbstractCRWorkHistory setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCRWorkHistory setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCRWorkHistory setToFunctionLevel1() setToFunctionLevel1(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel1 getToFunctionLevel1($index = null)
 * @method AbstractCRWorkHistory setToFunctionLevel2() setToFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToFunctionLevel2 getToFunctionLevel2($index = null)
 * @method AbstractCRWorkHistory setToProductTypeNode() setToProductTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode getToProductTypeNode($index = null)
 * @method AbstractCRWorkHistory setToContractTypeNode() setToContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToContractTypeNode getToContractTypeNode($index = null)
 * @method AbstractCRWorkHistory setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRWorkHistory setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 */
abstract class AbstractCRWorkHistory extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRWorkHistory';

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
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $employer;

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
     * @width 128
     */
    public $function;

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
    public $info;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $workHistoryID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 128
     */
    public $workLocation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $employerInfo;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $endReason;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $reference;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     * @default 0
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
     * @default 0
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
     * @name toFunctionLevel1
     * @default 0
     * @nodeType Functie0
     */
    public $toFunctionLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionLevel2
     * @default 0
     * @nodeType Functie1
     */
    public $toFunctionLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toContractTypeNode
     * @default 0
     * @nodeType Dienstverband
     */
    public $toContractTypeNode;

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
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("workHistoryID");
        $entityConfiguration->setName("CRWorkHistory");
    }
}
