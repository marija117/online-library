<?php

namespace App\Http\Controllers;

use App\Services\QssApiClient;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
  protected $qssApiClient;

  public function __construct(QssApiClient $qssApiClient)
  {
      $this->qssApiClient = $qssApiClient;
  }

  public function login()
  {
    $email = 'ahsoka.tano@q.agency';
    $password = 'Kryze4President';

    $response = $this->qssApiClient->login($email, $password);

    if ($response['id']) {
      // Retrieve access token from response
      $accessToken = $response['token_key'];

      Session::put('access_token', $accessToken);

      return view('welcome');
    } else {
        return back()->withInput()->withErrors(['email' => 'Invalid email or password.']);
    }
  }
}
