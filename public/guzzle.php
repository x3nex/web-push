<?php

use GuzzleHttp\Client;
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client();

$res = $client->request('GET', 'https://api.github.com/user', [
    'auth' => ['user', 'pass']
    ]);


echo $res->getBody();

