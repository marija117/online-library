@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add New Author</h1>
    <form method="POST" action="{{ route('authors.store') }}">
      @csrf
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
      </div>
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input id="last_name" type="text" class="form-control" name="last_name" required>
      </div>
      <div class="form-group">
        <label for="birthday">Birthday</label>
        <input id="birthday" type="date" class="form-control" name="birthday" required>
      </div>
      <div class="form-group">
        <label for="biography">Biography</label>
        <input id="biography" type="text" class="form-control" name="biography" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <input id="gender" type="text" class="form-control" name="gender" required>
      </div>
      <div class="form-group">
        <label for="place_of_birth">Place of birth</label>
        <input id="place_of_birth" type="text" class="form-control" name="place_of_birth" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Author</button>
    </form>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
@endsection
