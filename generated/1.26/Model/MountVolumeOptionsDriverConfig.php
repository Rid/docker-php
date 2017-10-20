<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Model;

class MountVolumeOptionsDriverConfig
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $options;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(\ArrayObject $options = null)
    {
        $this->options = $options;

        return $this;
    }
}
