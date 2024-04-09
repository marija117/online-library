<?php

namespace App\Http\Controllers;

use App\Services\QssApiClient;

class AuthorController extends Controller
{
  protected $qssApiClient;

  public function __construct(QssApiClient $qssApiClient)
  {
      $this->qssApiClient = $qssApiClient;
  }

  public function index()
  {
    $response = $this->qssApiClient->authors();

    $authors = $response['items'];

    return view('author.index',['authors'=>$authors]);
  }
}
