<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRMatch;
use ReflectionException;

class CRMatch extends AbstractCRMatch
{
    /**
     * @param NSArray|array $applyTags
     * @return NSArray
     * @throws ReflectionException
     */
    public function setApplyTags($applyTags)
    {
        parent::setApplyTags($applyTags);

        if ($this->applyTags instanceof NSArray) {
            $this->applyTags->setSubElementName(
                $this->getAttributeValueByPropertyName('applyTags', 'xmlSubelementName')
            );
        }

        return $this->applyTags;
    }
}
