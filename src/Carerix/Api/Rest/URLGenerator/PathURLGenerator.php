<?php

namespace Carerix\Api\Rest\URLGenerator;

/**
 * Path URL generator for ZendFramework
 */
class PathURLGenerator extends AbstractURLGenerator
{
    /**
     * @param array $options
     * @return string
     */
    public function generate(array $options)
    {
        $id                   = $this->optionsValue($options, 'id');
        $action               = $this->optionsValue($options, 'action');
        $parameters           = $this->optionsValue($options, 'parameters', []);
        $parameters['format'] = $this->optionsValue($options, 'format', $this->entityConfiguration->getResponseType());

        $path = $this->buildPath($id, $action);
        $url  = $this->entityConfiguration->getUrl() . '/' . $this->entityConfiguration->getName() . $path;
        if (is_array($parameters) && $parameters) {
            // prevents from passing params with the same name as the object property
            $parts = [];
            foreach ($parameters as $name => $values) {
                if (!is_array($values)) {
                    $values = [$values];
                }
                foreach ($values as $value) {
                    $parts[] = $name . '/' . rawurlencode($value);
                }
            }
            if (!empty($parts)) {
                $url .= '/' . implode('/', $parts);
            }
        }
        return $url;
    }
}
