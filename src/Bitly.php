<?php

declare(strict_types=1);

namespace Bitly;

use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Message\Authentication\Bearer;

class Bitly
{
    /** @var Client */
    public $client;

    /**
     * Instantiates Bitly client.
     *
     * @param string $apiKey Bitly access token: https://app.bitly.com/settings/api/
     */
    public function __construct(string $apiKey)
    {
        $bearer = new Bearer($apiKey);
        $plugins = [
            new AuthenticationPlugin($bearer),
        ];
        $this->client = Client::create(null, $plugins);
    }
}
