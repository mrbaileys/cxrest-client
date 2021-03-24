<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCREmployeeDocument;

class CREmployeeDocument extends AbstractCREmployeeDocument
{
    /**
     * @cx_field           true
     * @access             private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory          0
     * @destination_entity CRDataNode
     * @to_many            0
     * @name toDocumentNode
     * @nodeType           Kandidaat-document
     */
    public $toDocumentNode = null;
}
