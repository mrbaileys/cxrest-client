<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRContact;

class CRContact extends AbstractCRContact
{
    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       200
     */
    public $emailAddressBusiness = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name owner
     */
    public $owner = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groupNodes
     * @nodeType           Groep-Contactpersoon
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            1
     * @name groups
     * @nodeType           Groep-Contactpersoon
     */
    public $groups = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @default
     * @nodeType           Contact-status
     */
    public $toStatusNode = null;

    /**
     * @param string $value [optional]
     * @return AbstractCRContact
     */
    public function setEmailAddressBusiness($value)
    {
        $this->emailAddressBusiness = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddressBusiness()
    {
        return $this->emailAddressBusiness;
    }

    /**
     * @return CRUser
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param array|CRUser $value
     * @return CRContact
     */
    public function setOwner($value)
    {
        if (is_array($value)) {
            $value = new CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }
}
