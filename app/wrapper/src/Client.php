<?php

namespace SkipTheDragon\DockerWrapper;

use Symfony\Component\HttpClient\NativeHttpClient;

class Client
{
    public function createConnection(): void
    {
        $client = new NativeHttpClient();
    }
}
