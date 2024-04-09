<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class QssApiClient
{
  protected $client;
  protected $baseUrl = 'https://symfony-skeleton.q-tests.com';

  public function __construct()
  {
      $this->client = new Client(['base_uri' => $this->baseUrl]);
  }

  public function login($email, $password)
  {
    $response = $this->client->post('/api/v2/token', [
        'json' => [
            'email' => $email,
            'password' => $password,
        ]
    ]);

    return json_decode($response->getBody(), true);
  }
}
