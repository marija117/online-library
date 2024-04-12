<?php

namespace App\Http\Controllers;

use App\Services\QssApiClient;
use Illuminate\Support\Facades\Log;
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

    if (isset($response['token_key'])) {
      // Retrieve access token from response
      $accessToken = $response['token_key'];

      Session::put('access_token', $accessToken);
      Session::put('user', $response['user']);

      return redirect()->route('authors.index');
    } else {
        return back()->withInput()->withErrors(['email' => 'Invalid email or password.']);
    }
  }

  public function logout()
  {
    Session::forget('access_token');
    Session::forget('user');
    
    return redirect()->route('login');
  }
}
