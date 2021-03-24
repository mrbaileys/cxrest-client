<?php

namespace Carerix\Api\Rest\DataType;

interface DataTypeInterface
{
    const XML_ELEMENT_NAME_REGEX = '/\A(?!XML)[a-z][\w0-9-]*/i';

    /**
     * @param $array
     * @return mixed
     */
    public static function fromArray($array);

    public function toArray();

    /**
     * @param null $sxe
     * @return mixed
     */
    public function toSimpleXMLElement(&$sxe = null);
}
