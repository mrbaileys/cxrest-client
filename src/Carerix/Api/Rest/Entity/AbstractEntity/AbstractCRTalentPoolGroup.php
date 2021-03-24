<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CRTalentPool;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:37 +0000
 * @method AbstractCRTalentPoolGroup setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRTalentPoolGroup setToGroupNode() setToGroupNode(array|CRDataNode $value)
 * @method CRDataNode getToGroupNode getToGroupNode($index = null)
 * @method AbstractCRTalentPoolGroup setToTalentPool() setToTalentPool(array|CRTalentPool $value)
 * @method CRTalentPool getToTalentPool getToTalentPool($index = null)
 */
abstract class AbstractCRTalentPoolGroup extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolGroup';

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
     * @var CRTalentPool
     * @OneToOne (targetEntity="CRTalentPool")
     * @mandatory 1
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     */
    public $toTalentPool;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolGroupID");
        $entityConfiguration->setName("CRTalentPoolGroup");
    }
}
