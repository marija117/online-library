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

  public function showAuthor($id)
  {
    $accessToken = Session::get('access_token');

    $response = $this->client->get('/api/v2/authors/'.$id,  [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ]
    ]);

    return json_decode($response->getBody(), true);
  }

  public function deleteAuthor($id)
  {
    $accessToken = Session::get('access_token');

    $response = $this->client->delete('/api/v2/authors/'.$id,  [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ]
    ]);

    return json_decode($response->getBody(), true);
  }

  public function createBook($title, $author_id, $release_date, $description, $isbn, $format, $number_of_pages)
  {
    $accessToken = Session::get('access_token');

    $response = $this->client->post('/api/v2/books',  [
      'headers' => [
          'Authorization' => 'Bearer ' . $accessToken,
          'Accept' => 'application/json',
      ],
      'json' => [
        'author' => [
          'id' => $author_id,
        ],
        'title' => $title,
        'release_date' => $release_date,
        'description' => $description,
        'isbn' => $isbn,
        'format' => $format,
        'number_of_pages' => (int)$number_of_pages,
      ]
    ]);
  
    return json_decode($response->getBody(), true);
  }

  public function deleteBook($id)
  {
    $accessToken = Session::get('access_token');
    
    $response = $this->client->delete('/api/v2/books/' . $id,  [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ]
    ]);

    return json_decode($response->getBody(), true);
  }
}
