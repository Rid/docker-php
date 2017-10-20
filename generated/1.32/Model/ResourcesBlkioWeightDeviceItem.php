<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_32\Model;

class ResourcesBlkioWeightDeviceItem
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $weight;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return self
     */
    public function setWeight($weight = null)
    {
        $this->weight = $weight;

        return $this;
    }
}
