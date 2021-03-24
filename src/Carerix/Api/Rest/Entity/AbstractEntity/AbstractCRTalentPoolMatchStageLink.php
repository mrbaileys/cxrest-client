<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:38 +0000
 */
abstract class AbstractCRTalentPoolMatchStageLink extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRTalentPoolMatchStageLink';

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("talentPoolMatchStageLinkID");
        $entityConfiguration->setName("CRTalentPoolMatchStageLink");
    }
}
