<h1>{{ $author['first_name'] }} {{ $author['last_name'] }}</h1>
<p>Biografy: {{ $author['biography'] }}</p>
<p>Birthday: {{ $author['birthday'] }}</p>
<p>Gender: {{ $author['gender'] }}</p>
<p>Place of birth: {{ $author['place_of_birth'] }}</p>

<h2>Books</h2>
<ul>
  @foreach($books as $book)
    <li>{{ $book['title'] }}</li>
    <li>{{ $book['release_date'] }}</li>
    <li>{{ $book['description'] }}</li>
    <li>{{ $book['isbn'] }}</li>
    <li>{{ $book['format'] }}</li>
    <li>{{ $book['number_of_pages'] }}</li>
  @endforeach
</ul>
