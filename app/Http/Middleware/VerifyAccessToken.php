<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class VerifyAccessToken
{
  public function handle($request, Closure $next)
  {
    if (!Session::has('access_token')) {
      return redirect()->route('login');
    }

    return $next($request);
  }
}
