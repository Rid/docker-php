<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Model;

class ServicesCreateResponse201
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var string
     */
    protected $warning;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * @param string $warning
     *
     * @return self
     */
    public function setWarning($warning = null)
    {
        $this->warning = $warning;

        return $this;
    }
}
