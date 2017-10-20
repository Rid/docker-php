<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_28\Model;

class SwarmSpecDispatcher
{
    /**
     * @var int
     */
    protected $heartbeatPeriod;

    /**
     * @return int
     */
    public function getHeartbeatPeriod()
    {
        return $this->heartbeatPeriod;
    }

    /**
     * @param int $heartbeatPeriod
     *
     * @return self
     */
    public function setHeartbeatPeriod($heartbeatPeriod = null)
    {
        $this->heartbeatPeriod = $heartbeatPeriod;

        return $this;
    }
}
