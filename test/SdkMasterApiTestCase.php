<?php

namespace Heartbeat\Master\Test;

use Heartbeat\Master\Client;
use PHPUnit\Framework\TestCase;

class SdkMasterApiTestCase extends TestCase
{
    protected function getClient()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__);
        $dotenv->safeLoad();

        $client = new Client(getenv('token'));
        //$client->sandbox();
        return $client;
    }
}