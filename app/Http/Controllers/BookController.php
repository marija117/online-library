<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QssApiClient;

class BookController extends Controller
{
  protected $qssApiClient;

  public function __construct(QssApiClient $qssApiClient)
  {
    $this->qssApiClient = $qssApiClient;
  }

  public function create()
  {
    $response = $this->qssApiClient->authors();

    $authors = $response['items'];
    return view('book.create', compact('authors'));
  }

  public function store(Request $request)
  {
    $response = $this->qssApiClient->createBook(
      $request->input('title'),
      $request->input('author_id'),
      $request->input('release_date'),
      $request->input('description'),
      $request->input('isbn'),
      $request->input('format'),
      $request->input('number_of_pages'),
    );

    return redirect()->route('authors.show', ['id' => $request->input('author_id')])->with('success', 'Book added successfully.');
  }

  public function destroy($id)
  {
    $this->qssApiClient->deleteBook($id);

    return redirect()->back()->with('success', 'Book deleted successfully');
  }
}
