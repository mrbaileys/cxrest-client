<?php

namespace Carerix\Api\Rest\Entity;

use Carerix\Api\Rest\Entity\AbstractEntity\AbstractCRJob;

class CRJob extends AbstractCRJob
{
    /**
     * alias for _flags setter
     * @param $value
     * @return AbstractCRJob
     */
    public function setFlags($value)
    {
        return $this->set_flags($value);
    }

    /**
     * alias for _flags getter
     */
    public function getFlags()
    {
        return $this->get_flags();
    }

    /**
     * alias for _todos setter
     * @param $values
     * @return AbstractCRJob
     */
    public function setTodos($values)
    {
        return $this->set_todos($values);
    }

    /**
     * alias for _todos getter
     */
    public function getTodos()
    {
        return $this->get_todos();
    }
}
