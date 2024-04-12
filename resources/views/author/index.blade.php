@extends('layouts.app')

@section('content')
<div class="container">
  <h1>All Authors</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Place of Birth</th>
      </tr>
    </thead>
    <tbody>
      @foreach($authors as $author)
      <tr>
        <td>{{ $author['first_name'] }}</td>
        <td>{{ $author['last_name'] }}</td>
        <td>{{ $author['birthday'] }}</td>
        <td>{{ $author['gender'] }}</td>
        <td>{{ $author['place_of_birth'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('authors.create') }}" class="btn btn-primary">{{ __('Add New Author') }}</a>
</div>
@endsection
