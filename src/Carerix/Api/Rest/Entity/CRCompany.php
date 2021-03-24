<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRCompany;

/**
 * @method static setLogo() setLogo(CRAttachment $value)
 * @method CRAttachment getLogo getLogo()
 */
class CRCompany extends AbstractCRCompany
{
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
     * @nodeType           Opdrachtgever-status
     */
    public $toStatusNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var array
     * @OneToMany (targetEntity="CRUser")
     * @mandatory          0
     * @destination_entity CRUser
     * @to_many            0
     * @name users
     */
    public $users;

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
     * @nodeType           Groep-Opdrachtgever
     */
    public $groupNodes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRAttachment
     * @OneToOne (targetEntity="CRAttachment")
     * @mandatory          0
     * @destination_entity CRAttachment
     * @to_many            0
     * @name attachments
     */
    public $logo = null;

    /**
     * @param array|CRDataNode $value
     * @return $this
     */
    public function setToStatusNode($value)
    {
        if (is_array($value)) {
            $value = new CRDataNode($value);
        }
        $this->toStatusNode = $value;
        return $this;
    }

    /**
     * @return CRDataNode|null
     */
    public function getToStatusNode()
    {
        return $this->toStatusNode;
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
     * @return CRCompany
     */
    public function setOwner($value)
    {
        if (is_array($value)) {
            $value = new CRUser($value);
        }
        $this->owner = $value;
        return $this;
    }

    /**
     * @param array|Collection $values
     * @return CRCompany
     */
    public function setUsers($values)
    {
        if (is_array($values)) {
            $values = new Collection($values, 'CRUser');
        }
        $this->users = $values;
        return $this;
    }

    /**
     * @param $index [optional] integer get an item at specified index
     * @return Collection|CRUser
     */
    public function getUsers($index = null)
    {
        if ($index !== null) {
            return $this->users[$index];
        }
        return $this->users;
    }
}
