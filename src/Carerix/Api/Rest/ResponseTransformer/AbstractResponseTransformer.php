<?php

namespace Carerix\Api\Rest\ResponseTransformer;

use Carerix\Api\Rest\EntityConfiguration;

abstract class AbstractResponseTransformer
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
     * Transform response according the the specified input format
     * @param mixed $data
     * @return mixed
     */
    abstract public function transform($data);
}
