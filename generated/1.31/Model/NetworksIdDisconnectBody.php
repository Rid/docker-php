<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class NetworksIdDisconnectBody
{
    /**
     * @var string
     */
    protected $container;
    /**
     * @var bool
     */
    protected $force;

    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer($container = null)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param bool $force
     *
     * @return self
     */
    public function setForce($force = null)
    {
        $this->force = $force;

        return $this;
    }
}
