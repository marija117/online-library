<div class="container">
  <h1>Add New Book</h1>
  <form method="POST" action="{{ route('books.store') }}">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <select class="form-control" id="author_id" name="author_id">
          @foreach($authors as $author)
              <option value="{{ $author['id'] }}">{{ $author["first_name"] }} {{ $author["last_name"] }}</option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group">
      <label for="title">Release date</label>
      <input type="date" class="form-control" id="release_date" name="release_date">
    </div>
    <div class="form-group">
      <label for="title">ISBN</label>
      <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <div class="form-group">
      <label for="title">Format</label>
      <input type="text" class="form-control" id="format" name="format">
    </div>
    <div class="form-group">
      <label for="title">Number of pages</label>
      <input type="number" class="form-control" id="number_of_pages" name="number_of_pages">
    </div>
    <button type="submit" class="btn btn-primary">Add Book</button>
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
