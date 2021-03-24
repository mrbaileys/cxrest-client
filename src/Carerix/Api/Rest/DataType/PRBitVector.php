<?php

namespace Carerix\Api\Rest\DataType;

/**
 * PRBitVector representation
 *
 * The format is
 * [<length>-:<set-bits>]
 * where <set-bits> is a comma-separated list of bits numbers or number ranges.
 *
 * Examples:
 * [8-:1,3,5] => 8 bits total; bits 1, 3, and 5 are set.
 * [8-:2-4,7] => 8 bits total; bits 2, 3, 4, and 7 are set.
 *
 */
class PRBitVector
{
    const DATA_TYPE = 'PRBitVector';

    /**
     * @var integer
     */
    protected $length;

    /**
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param integer $length length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = (int)$length;
        return $this;
    }

    /**
     * @var string
     */
    protected $bits;

    /**
     * @return string
     */
    public function getBits()
    {
        return $this->bits;
    }

    /**
     * @param string $bits bits
     * @return self
     */
    public function setBits($bits)
    {
        $this->bits = (string)$bits;
        return $this;
    }

    /**
     * @param integer $length
     * @param string  $bits
     */
    public function __construct($length = null, $bits = null)
    {
        if ($length !== null) {
            $this->setLength($length);
        }
        if ($bits !== null) {
            $this->setBits($bits);
        }
    }

    /**
     * @return string
     */
    public function toString()
    {
        return '[' . $this->length . '-' . $this->bits . ']';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}
