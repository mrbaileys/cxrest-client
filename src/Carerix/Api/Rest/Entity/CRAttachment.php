<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRAttachment;

class CRAttachment extends AbstractCRAttachment
{
    /**
     * Missing from describe schema
     *
     * @cx_field true
     * @access   private
     * @var string
     */
    public $content = null;

    /**
     * @param string $value [optional]
     * @return self
     */
    public function setContent($value)
    {
        $this->content = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getDecodedContent()
    {
        if ($this->content !== null) {
            return base64_decode($this->content);
        }
        return null;
    }
}
