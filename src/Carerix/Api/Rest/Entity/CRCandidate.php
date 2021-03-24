<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRCandidate;

class CRCandidate extends AbstractCRCandidate
{
    const ROLE_ID = 1;

    /**
     * @param array|mixed $value
     * @return $this|AbstractCRCandidate
     */
    public function setToUserRole($value)
    {
        parent::setToUserRole($value);
        $this->toUserRole->setUserRoleID(self::ROLE_ID);
        return $this;
    }
}
