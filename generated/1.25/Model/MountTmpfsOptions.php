<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Model;

class MountTmpfsOptions
{
    /**
     * @var int
     */
    protected $sizeBytes;
    /**
     * @var int
     */
    protected $mode;

    /**
     * @return int
     */
    public function getSizeBytes()
    {
        return $this->sizeBytes;
    }

    /**
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes($sizeBytes = null)
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        $this->mode = $mode;

        return $this;
    }
}
