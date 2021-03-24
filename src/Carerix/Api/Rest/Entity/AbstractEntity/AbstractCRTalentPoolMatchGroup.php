<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRTalentPoolMatch;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:38 +0000
 * @method AbstractCRTalentPoolMatchGroup setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolMatchGroup setToGroupNode() setToGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToGroupNode getToGroupNode($index = null)
 * @method AbstractCRTalentPoolMatchGroup setToTalentPoolMatch() setToTalentPoolMatch(array|CRTalentPoolMatch $value)
 * @method CRTalentPoolMatch getToTalentPoolMatch getToTalentPoolMatch($index = null)
 */
abstract class AbstractCRTalentPoolMatchGroup extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchGroup';

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 1
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toGroupNode
     */
    public $toGroupNode;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPoolMatch
     * @OneToOne (targetEntity="CRTalentPoolMatch")
     * @mandatory 1
     * @destination_entity CRTalentPoolMatch
     * @to_many 0
     * @name toTalentPoolMatch
     */
    public $toTalentPoolMatch;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchGroupID");
        $entityConfiguration->setName("CRTalentPoolMatchGroup");
    }
}
