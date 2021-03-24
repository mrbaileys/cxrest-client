<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRRecruiter;

class CRRecruiter extends AbstractCRRecruiter
{
    const ROLE_ID = 21;

    /**
     * @param array|CRUserRole $value
     * @return AbstractCRRecruiter
     */
    public function setToUserRole($value)
    {
        parent::setToUserRole($value);
        $this->toUserRole->setUserRoleID(self::ROLE_ID);
        return $this;
    }
}
