<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * @var EndpointSettings[]
     */
    protected $networks;

    /**
     * @return EndpointSettings[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param EndpointSettings[] $networks
     *
     * @return self
     */
    public function setNetworks(\ArrayObject $networks = null)
    {
        $this->networks = $networks;

        return $this;
    }
}
