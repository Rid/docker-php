<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_32\Model;

class ContainerConfigVolumes
{
    /**
     * @var mixed
     */
    protected $additionalProperties;

    /**
     * @return mixed
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param mixed $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties = null)
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }
}
