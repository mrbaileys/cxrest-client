<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:38 +0000
 * @method AbstractCRTalentPoolMatchStageEmailTemplate setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolMatchStageEmailTemplate setToEmailTemplate() setToEmailTemplate(array|CREmailTemplate $value)
 * @method CREmailTemplate getToEmailTemplate getToEmailTemplate($index = null)
 * @method AbstractCRTalentPoolMatchStageEmailTemplate setToTalentPoolMatchStage() setToTalentPoolMatchStage(array|CRTalentPoolMatchStage $value)
 * @method CRTalentPoolMatchStage getToTalentPoolMatchStage getToTalentPoolMatchStage($index = null)
 */
abstract class AbstractCRTalentPoolMatchStageEmailTemplate extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchStageEmailTemplate';

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
     * @var CREmailTemplate
     * @OneToOne (targetEntity="CREmailTemplate")
     * @mandatory 1
     * @destination_entity CREmailTemplate
     * @to_many 0
     * @name toEmailTemplate
     */
    public $toEmailTemplate;

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

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageEmailTemplateID");
        $entityConfiguration->setName("CRTalentPoolMatchStageEmailTemplate");
    }
}
