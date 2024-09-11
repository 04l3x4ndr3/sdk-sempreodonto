<?php
/**
 * Copyright (c) 2024.
 * @author Alexandre G R Alves
 * @repository:  https://github.com/04l3x4ndr3/sdk-sempreodonto
 */

namespace O4l3x4ndr3\SdkSempreOdonto;

class  Configuration
{
    public const ENV_STAGE = "development";
    public const ENV_PRODUCTION = "production";
    public const URL_STAGE = "https://api.sempreodonto.com.br";
    public const URL_PRODUCTION = "https://api.sempreodonto.com.br";

    private ?string $environment;
    private ?array $credentials;
    private ?array $httpHeader;

    public function __construct(?string $apiKey = NULL)
    {
        $this->environment = $_SERVER['SEMPREODONTO_ENVIRONMENT'] ?? self::ENV_STAGE;
        $this->credentials = $_SERVER['SEMPREODONTO_API_KEY'] ?? $apiKey;
        $this->httpHeader = [];
    }

    /**
     * @return array
     */
    public function getCredential(): array
    {
        return $this->credentials;
    }

    /**
     * @param string|null $apiKey
     * @return Configuration
     */
    public function setCredential(?string $apiKey = NULL): Configuration
    {
        $this->credentials = $apiKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     * @return Configuration
     */
    public function setEnvironment(string $environment): Configuration
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     * @return Configuration
     */
    public function setHttpHeader(array $httpHeader): Configuration
    {
        $this->httpHeader = $httpHeader;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        if ($this->getEnvironment() === self::ENV_PRODUCTION) {
            return self::URL_PRODUCTION;
        }

        return self::URL_STAGE;
    }
}
