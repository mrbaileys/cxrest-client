<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;
use Carerix\Api\Rest\Entity\CRTemplateReference;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:39 +0000
 * @method AbstractCRTalentPoolMatchStageTemplateReference setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolMatchStageTemplateReference setToTalentPoolMatchStage() setToTalentPoolMatchStage(array|CRTalentPoolMatchStage $value)
 * @method CRTalentPoolMatchStage getToTalentPoolMatchStage getToTalentPoolMatchStage($index = null)
 * @method AbstractCRTalentPoolMatchStageTemplateReference setToTemplateReference() setToTemplateReference(array|CRTemplateReference $value)
 * @method CRTemplateReference getToTemplateReference getToTemplateReference($index = null)
 */
abstract class AbstractCRTalentPoolMatchStageTemplateReference extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchStageTemplateReference';

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
     * @var CRTalentPoolMatchStage
     * @OneToOne (targetEntity="CRTalentPoolMatchStage")
     * @mandatory 1
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 0
     * @name toTalentPoolMatchStage
     */
    public $toTalentPoolMatchStage;

    /**
     * @cx_field true
     * @access private
     * @var CRTemplateReference
     * @OneToOne (targetEntity="CRTemplateReference")
     * @mandatory 1
     * @destination_entity CRTemplateReference
     * @to_many 0
     * @name toTemplateReference
     */
    public $toTemplateReference;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageTemplateReferenceID");
        $entityConfiguration->setName("CRTalentPoolMatchStageTemplateReference");
    }
}
