<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Model;

class ObjectVersion
{
    /**
     * @var int
     */
    protected $index;

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param int $index
     *
     * @return self
     */
    public function setIndex($index = null)
    {
        $this->index = $index;

        return $this;
    }
}
