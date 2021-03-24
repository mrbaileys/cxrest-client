<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRVacancy;

/**
 * @method AbstractCRVacancy setToContact() setToContact(array|CRUser $value)
 * @method CRContact getToContact getToContact($index = null)
 */
class CRVacancy extends AbstractCRVacancy
{
    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toProvinceNode
     * @default            1
     * @nodeType           Regio
     */
    public $toProvinceNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     * @nodeType           Groep-Vacature
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name toContact
     */
    public $toContact = null;

    /**
     * @param array|CRDataNode $value
     * @return AbstractCRVacancy
     */
    public function setToProvinceNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toProvinceNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode
     */
    public function getToProvinceNode()
    {
        return $this->toProvinceNode;
    }
}
