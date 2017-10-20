<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_32\Model;

class TLSInfo
{
    /**
     * @var string
     */
    protected $trustRoot;
    /**
     * @var string
     */
    protected $certIssuerSubject;
    /**
     * @var string
     */
    protected $certIssuerPublicKey;

    /**
     * @return string
     */
    public function getTrustRoot()
    {
        return $this->trustRoot;
    }

    /**
     * @param string $trustRoot
     *
     * @return self
     */
    public function setTrustRoot($trustRoot = null)
    {
        $this->trustRoot = $trustRoot;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertIssuerSubject()
    {
        return $this->certIssuerSubject;
    }

    /**
     * @param string $certIssuerSubject
     *
     * @return self
     */
    public function setCertIssuerSubject($certIssuerSubject = null)
    {
        $this->certIssuerSubject = $certIssuerSubject;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertIssuerPublicKey()
    {
        return $this->certIssuerPublicKey;
    }

    /**
     * @param string $certIssuerPublicKey
     *
     * @return self
     */
    public function setCertIssuerPublicKey($certIssuerPublicKey = null)
    {
        $this->certIssuerPublicKey = $certIssuerPublicKey;

        return $this;
    }
}
