<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Model;

class VolumesPruneResponse200
{
    /**
     * @var string[]
     */
    protected $volumesDeleted;
    /**
     * @var int
     */
    protected $spaceReclaimed;

    /**
     * @return string[]
     */
    public function getVolumesDeleted()
    {
        return $this->volumesDeleted;
    }

    /**
     * @param string[] $volumesDeleted
     *
     * @return self
     */
    public function setVolumesDeleted(array $volumesDeleted = null)
    {
        $this->volumesDeleted = $volumesDeleted;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpaceReclaimed()
    {
        return $this->spaceReclaimed;
    }

    /**
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed($spaceReclaimed = null)
    {
        $this->spaceReclaimed = $spaceReclaimed;

        return $this;
    }
}
