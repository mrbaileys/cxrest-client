<?php

namespace Carerix\Api\Rest\URLGenerator;

class ApontadorURLGenerator extends AbstractURLGenerator
{
    /**
     * @param array $options
     * @return string
     */
    public function generate(array $options)
    {
        $id                 = $this->optionsValue($options, 'id');
        $action             = $this->optionsValue($options, 'action');
        $parameters         = $this->optionsValue($options, 'parameters', []);
        $parameters['type'] = $this->entityConfiguration->getResponseType();

        $path = $this->buildPath($id, $action);
        $url  = $this->entityConfiguration->getUrl() . '/' . $this->entityConfiguration->getName() . $path;
        if (is_array($parameters) && $parameters) {
            foreach ($this->entityConfiguration->getProperties() as $field) {
                unset($parameters[$field]);
            }
            if ($parameters) {
                $url .= '?' . http_build_query($parameters);
            }
        }
        return $url;
    }
}
