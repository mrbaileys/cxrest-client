<?php

namespace Carerix\Api\Rest\URLGenerator;

use Carerix\Api\Rest\EntityConfiguration;

abstract class AbstractURLGenerator
{
    /**
     * @var EntityConfiguration
     */
    protected $entityConfiguration;

    /**
     * @param EntityConfiguration $entityConfiguration
     */
    public function __construct(EntityConfiguration $entityConfiguration)
    {
        $this->entityConfiguration = $entityConfiguration;
    }

    /**
     * @param array $options
     * @param       $key
     * @param null  $default
     * @return mixed|null
     */
    protected function optionsValue(array $options, $key, $default = null)
    {
        return (isset($options[$key])) ? $options[$key] : $default;
    }

    /**
     * @param $id
     * @param $action
     * @return string
     */
    protected function buildPath($id, $action)
    {
        $path = '';
        if ($id) {
            $path = sprintf('/%s', $id);
        }
        if ($action !== null) {
            $path = sprintf($path . '/%s', $action);
        }

        return $path;
    }

    /**
     * @param array $options
     */
    abstract public function generate(array $options);
}
