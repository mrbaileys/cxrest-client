<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRToDoUser;
use Carerix\Api\Rest\EntityConfiguration;

class CRToDoUser extends AbstractCRToDoUser
{
    /**
     * @param EntityConfiguration $entityConfiguration
     */
    public static function configure(EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("todoUserID");
    }
}
