<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Model;

class ResourceObject
{
    /**
     * @var int
     */
    protected $nanoCPUs;
    /**
     * @var int
     */
    protected $memoryBytes;
    /**
     * @var GenericResourcesItem[]
     */
    protected $genericResources;

    /**
     * @return int
     */
    public function getNanoCPUs()
    {
        return $this->nanoCPUs;
    }

    /**
     * @param int $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs($nanoCPUs = null)
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    /**
     * @return int
     */
    public function getMemoryBytes()
    {
        return $this->memoryBytes;
    }

    /**
     * @param int $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes($memoryBytes = null)
    {
        $this->memoryBytes = $memoryBytes;

        return $this;
    }

    /**
     * @return GenericResourcesItem[]
     */
    public function getGenericResources()
    {
        return $this->genericResources;
    }

    /**
     * @param GenericResourcesItem[] $genericResources
     *
     * @return self
     */
    public function setGenericResources(array $genericResources = null)
    {
        $this->genericResources = $genericResources;

        return $this;
    }
}
