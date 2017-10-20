<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class PluginConfigInterface
{
    /**
     * @var PluginInterfaceType[]
     */
    protected $types;
    /**
     * @var string
     */
    protected $socket;

    /**
     * @return PluginInterfaceType[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param PluginInterfaceType[] $types
     *
     * @return self
     */
    public function setTypes(array $types = null)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * @return string
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @param string $socket
     *
     * @return self
     */
    public function setSocket($socket = null)
    {
        $this->socket = $socket;

        return $this;
    }
}
