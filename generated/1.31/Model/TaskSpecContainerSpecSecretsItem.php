<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class TaskSpecContainerSpecSecretsItem
{
    /**
     * @var TaskSpecContainerSpecSecretsItemFile
     */
    protected $file;
    /**
     * @var string
     */
    protected $secretID;
    /**
     * @var string
     */
    protected $secretName;

    /**
     * @return TaskSpecContainerSpecSecretsItemFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param TaskSpecContainerSpecSecretsItemFile $file
     *
     * @return self
     */
    public function setFile(TaskSpecContainerSpecSecretsItemFile $file = null)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecretID()
    {
        return $this->secretID;
    }

    /**
     * @param string $secretID
     *
     * @return self
     */
    public function setSecretID($secretID = null)
    {
        $this->secretID = $secretID;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecretName()
    {
        return $this->secretName;
    }

    /**
     * @param string $secretName
     *
     * @return self
     */
    public function setSecretName($secretName = null)
    {
        $this->secretName = $secretName;

        return $this;
    }
}
