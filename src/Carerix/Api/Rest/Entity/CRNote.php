<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRNote;

class CRNote extends AbstractCRNote
{
    /**
     * @cx_field    true
     * @access      private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width       1000000
     */
    public $notes = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toActivityTypeNode
     * @nodeType           Notitie-type
     */
    public $toActivityTypeNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toResultNode
     * @nodeType           Notitie-resultaat
     */
    public $toResultNode = null;

    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toStatusNode
     * @nodeType           Notitie-status
     */
    public $toStatusNode = null;

    /**
     * @return NSString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param NSString $notes notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
}
