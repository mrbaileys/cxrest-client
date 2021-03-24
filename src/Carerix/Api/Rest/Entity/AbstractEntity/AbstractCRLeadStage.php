<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CRLeadStage;
use Carerix\Api\Rest\Entity\CRLeadStageName;
use Carerix\Api\Rest\Entity\CRTemplateReference;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:39 +0000
 * @method AbstractCRLeadStage setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRLeadStage setIsFinal() setIsFinal(integer $value)
 * @method integer getIsFinal getIsFinal()
 * @method AbstractCRLeadStage setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCRLeadStage setLeadStageID() setLeadStageID(integer $value)
 * @method integer getLeadStageID getLeadStageID()
 * @method AbstractCRLeadStage setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRLeadStage setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRLeadStage setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRLeadStage setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRLeadStage setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRLeadStage setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRLeadStage setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRLeadStage setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCRLeadStage setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCRLeadStage setTemplateReferences() setTemplateReferences(array|Collection $values)
 * @method Collection|CRTemplateReference getTemplateReferences getTemplateReferences()
 * @method AbstractCRLeadStage setEmailTemplates() setEmailTemplates(array|Collection $values)
 * @method Collection|CREmailTemplate getEmailTemplates getEmailTemplates()
 * @method AbstractCRLeadStage setToProcedureNode() setToProcedureNode(array|CRDataNode $value)
 * @method CRDataNode getToProcedureNode getToProcedureNode($index = null)
 * @method AbstractCRLeadStage setChildren() setChildren(array|Collection $values)
 * @method Collection|CRLeadStage getChildren getChildren()
 * @method AbstractCRLeadStage setParents() setParents(array|Collection $values)
 * @method Collection|CRLeadStage getParents getParents()
 * @method AbstractCRLeadStage setNames() setNames(array|Collection $values)
 * @method Collection|CRLeadStageName getNames getNames()
 * @method AbstractCRLeadStage setToLeadStageGroupNode() setToLeadStageGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToLeadStageGroupNode getToLeadStageGroupNode($index = null)
 */
abstract class AbstractCRLeadStage extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRLeadStage';

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
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isFinal;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $code;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $leadStageID;

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
     * @width 255
     * @isUnique 1
     */
    public $importID;

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
    public $isActive;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isDefault;

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
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $packageID;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $packageConfig;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 1
     * @name templateReferences
     */
    public $templateReferences;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 1
     * @name emailTemplates
     */
    public $emailTemplates;

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
     * @OneToMany (targetEntity="CRLeadStage")
     * @mandatory 0
     * @destination_entity CRLeadStage
     * @to_many 1
     * @name children
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRLeadStage")
     * @mandatory 0
     * @destination_entity CRLeadStage
     * @to_many 1
     * @name parents
     */
    public $parents;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRLeadStageName")
     * @mandatory 0
     * @destination_entity CRLeadStageName
     * @to_many 1
     * @name names
     */
    public $names;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLeadStageGroupNode
     */
    public $toLeadStageGroupNode;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("leadStageID");
        $entityConfiguration->setName("CRLeadStage");
    }
}
