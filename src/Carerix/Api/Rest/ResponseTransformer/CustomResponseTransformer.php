<?php

namespace Carerix\Api\Rest\ResponseTransformer;

use Carerix\Api\Rest\EntityConfiguration;
use Carerix\Api\Rest\Exception;

class CustomResponseTransformer extends AbstractResponseTransformer
{
    /**
     * @var mixed SimpleXMLElement|array
     */
    protected $adapter = null;

    /**
     * Get transformer adapter
     * @return  mixed SimpleXMLElement|array|null
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * Get root name of response tree
     * @return string
     */
    public function getRootName()
    {
        switch ($this->entityConfiguration->getResponseType()) {
            case EntityConfiguration::RESPONSE_TYPE_XML:
                return $this->adapter->getName();
            case EntityConfiguration::RESPONSE_TYPE_JSON:
                $array = array_keys($this->adapter);
                return $array[0];
        }

        return null;
    }

    /**
     * @param $data
     * @return array|string|null
     * @throws Exception
     * @see AbstractResponseTransformer::transform()
     */
    public function transform($data)
    {
        switch ($this->entityConfiguration->getResponseType()) {
            case EntityConfiguration::RESPONSE_TYPE_XML:
                return $this->xmlToArray($data);
            case EntityConfiguration::RESPONSE_TYPE_JSON:
                return $this->jsonToArray($data);
        }

        return [];
    }

    /**
     * Transforms XML string into array
     * @param string $data
     * @return array|null
     * @throws Exception
     */
    public function xmlToArray($data)
    {
        $libxmlLoaderValue = libxml_disable_entity_loader(true);

        libxml_use_internal_errors(true);
        $this->adapter = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NONET | LIBXML_NOBLANKS);
        if (!$this->adapter) {
            $errors = ['Failed loading XML'];
            foreach (libxml_get_errors() as $error) {
                $errors[] = $error->message;
            }
            throw new Exception(implode("\n", $errors));
        }
        $json  = json_encode($this->adapter);
        $array = json_decode($json, true);
        $array = $this->normalizeXmlArray($array);

        libxml_disable_entity_loader($libxmlLoaderValue);

        return $array;
    }

    /**
     * Normalize array format for backwards compatibility reasons
     * @param array $array
     * @return array
     */
    protected function normalizeXmlArray($array)
    {
        foreach ($array as $k => $v) {
            if (is_int($k) && is_string($v) && trim($v) === '') {
                /**
                 * handles empty text nodes. example:
                 * [CRAgency] => Array ([@attributes] => Array ( [id] => 24 ) [0] => ())
                 */
                unset($array[$k]);
            } elseif ($k === '@attributes') {
                /**
                 * converts @attributes to attributes. example:
                 * [CRAgency] => Array ([@attributes] => Array( [id] => 24 ))
                 */
                $array['attributes'] = $array[$k];
                unset($array[$k]);
            } elseif (is_array($v)) {
                $array[$k] = $this->normalizeXmlArray($v);
            }
        }

        return $array;
    }

    /**
     * Transforms JSON encoded string into array
     * @param string $json
     * @return array|null
     */
    public function jsonToArray($json)
    {
        $this->adapter = (array)json_decode($json);
        return $this->adapter;
    }
}
