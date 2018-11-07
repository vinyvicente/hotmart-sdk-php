<?php

namespace Hotmart;

final class Connection
{
    /**
     * @var string
     */
    private $appId;

    /**
     * @var string
     */
    private $appSecret;

    /**
     * @var string
     */
    private $urlRedirect;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $grantType;

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return Connection
     */
    public function setAppId(string $appId): Connection
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    /**
     * @param string $appSecret
     * @return Connection
     */
    public function setAppSecret(string $appSecret): Connection
    {
        $this->appSecret = $appSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlRedirect(): string
    {
        return $this->urlRedirect;
    }

    /**
     * @param string $urlRedirect
     * @return Connection
     */
    public function setUrlRedirect(string $urlRedirect): Connection
    {
        $this->urlRedirect = $urlRedirect;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Connection
     */
    public function setCode(string $code): Connection
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrantType(): ?string
    {
        return $this->grantType;
    }

    /**
     * @param string $grantType
     * @return Connection
     */
    public function setGrantType(string $grantType): Connection
    {
        $this->grantType = $grantType;
        return $this;
    }
}
