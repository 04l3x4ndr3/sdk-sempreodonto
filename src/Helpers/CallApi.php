<?php

namespace O4l3x4ndr3\SdkSempreOdonto\Helpers;

use O4l3x4ndr3\SdkSempreOdonto\Configuration;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CallApi
{
    private Configuration $config;
    private ?array $header;
    private ?string $credential;

    /**
     * @param Configuration|null $config
     */
    public function __construct(?Configuration $config = NULL)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredential();
        $this->header = array_merge([
            'User-Agent' => 'SDKSempreOdonto',
            'Content-Type' => 'application/json',
            'X-API-KEY' => $this->credential
        ], $this->config->getHttpHeader());
    }

    /**
     * @return array|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array|null $header
     *
     * @return CallApi
     */
    public function setHeader(?array $header): CallApi
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCredential(): ?string
    {
        return $this->credential;
    }

    /**
     * @param string|null $credential
     *
     * @return CallApi
     */
    public function setCredential(?string $credential): CallApi
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $body
     * @return object
     * @throws GuzzleException
     */
    public function call(string $method, string $endpoint, ?array $body = NULL): object
    {
        $client = new Client();
        $options = array_filter([
            'headers' => $this->header,
            'json' => $body
        ]);
        $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
        return json_decode($res->getBody());
    }

}
