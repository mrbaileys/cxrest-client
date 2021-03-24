<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStageLink;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStageName;
use Carerix\Api\Rest\Entity\CRTemplateReference;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:38 +0000
 * @method AbstractCRTalentPoolMatchStage setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTalentPoolMatchStage setIsFinal() setIsFinal(integer $value)
 * @method integer getIsFinal getIsFinal()
 * @method AbstractCRTalentPoolMatchStage setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCRTalentPoolMatchStage setTalentPoolMatchStageID() setTalentPoolMatchStageID(integer $value)
 * @method integer getTalentPoolMatchStageID getTalentPoolMatchStageID()
 * @method AbstractCRTalentPoolMatchStage setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRTalentPoolMatchStage setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolMatchStage setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCRTalentPoolMatchStage setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRTalentPoolMatchStage setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCRTalentPoolMatchStage setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRTalentPoolMatchStage setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTalentPoolMatchStage setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCRTalentPoolMatchStage setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCRTalentPoolMatchStage setToProcedureNode() setToProcedureNode(array|CRDataNode $value)
 * @method CRDataNode getToProcedureNode getToProcedureNode($index = null)
 * @method AbstractCRTalentPoolMatchStage setToTalentPoolMatchStageGroupNode() setToTalentPoolMatchStageGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToTalentPoolMatchStageGroupNode getToTalentPoolMatchStageGroupNode($index = null)
 * @method AbstractCRTalentPoolMatchStage setChildrenLinks() setChildrenLinks(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStageLink getChildrenLinks getChildrenLinks()
 * @method AbstractCRTalentPoolMatchStage setParentLinks() setParentLinks(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStageLink getParentLinks getParentLinks()
 * @method AbstractCRTalentPoolMatchStage setChildren() setChildren(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStage getChildren getChildren()
 * @method AbstractCRTalentPoolMatchStage setNames() setNames(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStageName getNames getNames()
 * @method AbstractCRTalentPoolMatchStage setParents() setParents(array|Collection $values)
 * @method Collection|CRTalentPoolMatchStage getParents getParents()
 * @method AbstractCRTalentPoolMatchStage setEmailTemplates() setEmailTemplates(array|Collection $values)
 * @method Collection|CREmailTemplate getEmailTemplates getEmailTemplates()
 * @method AbstractCRTalentPoolMatchStage setTemplateReferences() setTemplateReferences(array|Collection $values)
 * @method Collection|CRTemplateReference getTemplateReferences getTemplateReferences()
 */
abstract class AbstractCRTalentPoolMatchStage extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchStage';

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
    public $talentPoolMatchStageID;

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
     * @allows_null 1
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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTalentPoolMatchStageGroupNode
     */
    public $toTalentPoolMatchStageGroupNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStageLink")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageLink
     * @to_many 1
     * @name childrenLinks
     */
    public $childrenLinks;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStageLink")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageLink
     * @to_many 1
     * @name parentLinks
     */
    public $parentLinks;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 1
     * @name children
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStageName")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStageName
     * @to_many 1
     * @name names
     */
    public $names;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 1
     * @name parents
     */
    public $parents;

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
     * @var Collection
     * @OneToMany (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 1
     * @name templateReferences
     */
    public $templateReferences;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageID");
        $entityConfiguration->setName("CRTalentPoolMatchStage");
    }
}
