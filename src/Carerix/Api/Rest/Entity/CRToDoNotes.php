<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRToDoNotes;
use Carerix\Api\Rest\EntityConfiguration;

class CRToDoNotes extends AbstractCRToDoNotes
{
    /**
     * @param EntityConfiguration $entityConfiguration
     */
    public static function configure(EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("todoNotesID");
    }
}
