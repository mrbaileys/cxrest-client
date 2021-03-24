<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRNodeType;
use Carerix\Api\Rest\EntityConfiguration;

class CRNodeType extends AbstractCRNodeType
{
    /**
     * @param EntityConfiguration $entityConfiguration
     */
    public static function configure(EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("typeID");
    }
}
