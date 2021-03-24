<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRAdmin;

class CRAdmin extends AbstractCRAdmin
{
    const ROLE_ID = 20;

    /**
     * @param array|mixed $value
     * @return $this|CRAdmin
     */
    public function setToUserRole($value)
    {
        parent::setToUserRole($value);
        $this->toUserRole->setUserRoleID(self::ROLE_ID);
        return $this;
    }
}
