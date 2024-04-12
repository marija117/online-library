@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
      <label class="ml-5" for="email">Email</label>
      <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
        <span>{{ $message }}</span>
      @enderror
    </div>

    <div class="mt-2">
      <label for="password">Password</label>
      <input id="password" type="password" name="password" required autocomplete="current-password">
      @error('password')
        <span>{{ $message }}</span>
      @enderror
    </div>

    <div>
      <button class="btn btn-primary mt-2" type="submit">Login</button>
    </div>
  </form>
@endsection
