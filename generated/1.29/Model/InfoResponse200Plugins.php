<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class InfoResponse200Plugins
{
    /**
     * @var string[]
     */
    protected $volume;
    /**
     * @var string[]
     */
    protected $network;

    /**
     * @return string[]
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param string[] $volume
     *
     * @return self
     */
    public function setVolume(array $volume = null)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string[] $network
     *
     * @return self
     */
    public function setNetwork(array $network = null)
    {
        $this->network = $network;

        return $this;
    }
}
