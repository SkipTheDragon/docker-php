<?php

namespace SkipTheDragon\DockerSDK;

use Symfony\Component\HttpClient\NativeHttpClient;

class Client
{
    public function createConnection(): void
    {
        $client = new NativeHttpClient();
    }
}
