<?php
declare(strict_types=1);

namespace RG\AzuraCast\Api;

use GuzzleHttp\Client;

abstract class AbstractClient
{
    /**
     * @var Client
     */
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->setHttpClient($httpClient);
    }

    /**
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    /**
     * @param Client $httpClient
     *
     * @return AbstractClient
     */
    public function setHttpClient(Client $httpClient): AbstractClient
    {
        $this->httpClient = $httpClient;
        return $this;
    }

}