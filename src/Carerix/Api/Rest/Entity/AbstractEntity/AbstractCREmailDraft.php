<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:45 +0000
 */
abstract class AbstractCREmailDraft extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmailDraft';

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("emailDraftID");
        $entityConfiguration->setName("CREmailDraft");
    }
}
