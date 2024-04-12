@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title">{{ $author['first_name'] }} {{ $author['last_name'] }}</h1>
                    <p class="card-text">Birthday: {{ $author['birthday'] }}</p>
                    <p class="card-text">Gender: {{ $author['gender'] }}</p>
                    <p class="card-text">Place of birth: {{ $author['place_of_birth'] }}</p>
                </div>
            </div>

            <h2>Books</h2>
            @foreach($books as $book)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $book['title'] }}</h5>
                    <p class="card-text">Release Date: {{ $book['release_date'] }}</p>
                    <p class="card-text">Description: {{ $book['description'] }}</p>
                    <p class="card-text">ISBN: {{ $book['isbn'] }}</p>
                    <p class="card-text">Format: {{ $book['format'] }}</p>
                    <p class="card-text">Number of Pages: {{ $book['number_of_pages'] }}</p>
                    <form action="{{ route('books.destroy', $book['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @if(! $books)
    <form action="{{ route('authors.destroy', $author['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-2">Delete Author</button>
    </form>
    @else
    <button class="btn btn-danger mb-2" disabled>Delete Author</button>
    @endif

    <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
</div>
@endsection
