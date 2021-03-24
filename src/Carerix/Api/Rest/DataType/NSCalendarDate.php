<?php

namespace Carerix\Api\Rest\DataType;

use DateTime;

class NSCalendarDate extends DateTime
{
    const DATA_TYPE = 'NSCalendarDate';
    const CARERIX   = 'Y-m-d H:i:s';

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return string
     */
    public function toString()
    {
        return $this->format(self::CARERIX);
    }
}
