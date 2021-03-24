<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CROpportunityStage;
use Carerix\Api\Rest\Entity\CROpportunityStageName;
use Carerix\Api\Rest\Entity\CRTemplateReference;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:40 +0000
 * @method AbstractCROpportunityStage setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCROpportunityStage setIsFinal() setIsFinal(integer $value)
 * @method integer getIsFinal getIsFinal()
 * @method AbstractCROpportunityStage setCode() setCode(string $value)
 * @method string getCode getCode()
 * @method AbstractCROpportunityStage setOpportunityStageID() setOpportunityStageID(integer $value)
 * @method integer getOpportunityStageID getOpportunityStageID()
 * @method AbstractCROpportunityStage setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCROpportunityStage setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCROpportunityStage setSortOrder() setSortOrder(integer $value)
 * @method integer getSortOrder getSortOrder()
 * @method AbstractCROpportunityStage setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCROpportunityStage setIsDefault() setIsDefault(integer $value)
 * @method integer getIsDefault getIsDefault()
 * @method AbstractCROpportunityStage setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCROpportunityStage setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCROpportunityStage setPackageID() setPackageID(string $value)
 * @method string getPackageID getPackageID()
 * @method AbstractCROpportunityStage setPackageConfig() setPackageConfig(NSDictionary|array $value)
 * @method NSDictionary|array getPackageConfig getPackageConfig()
 * @method AbstractCROpportunityStage setTemplateReferences() setTemplateReferences(array|Collection $values)
 * @method Collection|CRTemplateReference getTemplateReferences getTemplateReferences()
 * @method AbstractCROpportunityStage setEmailTemplates() setEmailTemplates(array|Collection $values)
 * @method Collection|CREmailTemplate getEmailTemplates getEmailTemplates()
 * @method AbstractCROpportunityStage setToProcedureNode() setToProcedureNode(array|CRDataNode $value)
 * @method CRDataNode getToProcedureNode getToProcedureNode($index = null)
 * @method AbstractCROpportunityStage setNames() setNames(array|Collection $values)
 * @method Collection|CROpportunityStageName getNames getNames()
 * @method AbstractCROpportunityStage setToOpportunityStageGroupNode() setToOpportunityStageGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToOpportunityStageGroupNode getToOpportunityStageGroupNode($index = null)
 * @method AbstractCROpportunityStage setChildren() setChildren(array|Collection $values)
 * @method Collection|CROpportunityStage getChildren getChildren()
 * @method AbstractCROpportunityStage setParents() setParents(array|Collection $values)
 * @method Collection|CROpportunityStage getParents getParents()
 */
abstract class AbstractCROpportunityStage extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CROpportunityStage';

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
    public $opportunityStageID;

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
     * @OneToMany (targetEntity="CROpportunityStageName")
     * @mandatory 0
     * @destination_entity CROpportunityStageName
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
     * @name toOpportunityStageGroupNode
     */
    public $toOpportunityStageGroupNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunityStage")
     * @mandatory 0
     * @destination_entity CROpportunityStage
     * @to_many 1
     * @name children
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunityStage")
     * @mandatory 0
     * @destination_entity CROpportunityStage
     * @to_many 1
     * @name parents
     */
    public $parents;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("opportunityStageID");
        $entityConfiguration->setName("CROpportunityStage");
    }
}
