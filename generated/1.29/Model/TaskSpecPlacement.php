<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class TaskSpecPlacement
{
    /**
     * @var string[]
     */
    protected $constraints;
    /**
     * @var TaskSpecPlacementPreferencesItem[]
     */
    protected $preferences;

    /**
     * @return string[]
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * @param string[] $constraints
     *
     * @return self
     */
    public function setConstraints(array $constraints = null)
    {
        $this->constraints = $constraints;

        return $this;
    }

    /**
     * @return TaskSpecPlacementPreferencesItem[]
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * @param TaskSpecPlacementPreferencesItem[] $preferences
     *
     * @return self
     */
    public function setPreferences(array $preferences = null)
    {
        $this->preferences = $preferences;

        return $this;
    }
}
