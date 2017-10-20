<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Model;

class ThrottleDevice
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $rate;

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
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     *
     * @return self
     */
    public function setRate($rate = null)
    {
        $this->rate = $rate;

        return $this;
    }
}
