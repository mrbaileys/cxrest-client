<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRTalentPoolMatchStage;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:38 +0000
 * @method AbstractCRTalentPoolMatchStageName setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRTalentPoolMatchStageName setName() setName(string $value)
 * @method string getName getName()
 * @method AbstractCRTalentPoolMatchStageName setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRTalentPoolMatchStageName setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRTalentPoolMatchStageName setToTalentPoolMatchStage() setToTalentPoolMatchStage(array|CRTalentPoolMatchStage $value)
 * @method CRTalentPoolMatchStage getToTalentPoolMatchStage getToTalentPoolMatchStage($index = null)
 */
abstract class AbstractCRTalentPoolMatchStageName extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchStageName';

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
     * @width 255
     */
    public $name;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     */
    public $toLanguageNode;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPoolMatchStage
     * @OneToOne (targetEntity="CRTalentPoolMatchStage")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatchStage
     * @to_many 0
     * @name toTalentPoolMatchStage
     */
    public $toTalentPoolMatchStage;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageNameID");
        $entityConfiguration->setName("CRTalentPoolMatchStageName");
    }
}
