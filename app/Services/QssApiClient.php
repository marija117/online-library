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

  public function authors()
  {
    $accessToken = Session::get('access_token');

    $response = $this->client->get('/api/v2/authors?orderBy=id&direction=ASC&limit=12&page=1',  [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ]
    ]);

    return json_decode($response->getBody(), true);
  }
}
