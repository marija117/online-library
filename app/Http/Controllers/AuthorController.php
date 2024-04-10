<?php

namespace App\Http\Controllers;

use App\Services\QssApiClient;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  protected $qssApiClient;

  public function __construct(QssApiClient $qssApiClient)
  {
      $this->qssApiClient = $qssApiClient;
  }

  public function index()
  {
    $response = $this->qssApiClient->authors();

    $authors = $response['items'];

    return view('author.index',['authors'=>$authors]);
  }

  public function show($id)
  {
    $response = $this->qssApiClient->showAuthor($id);

    $author = $response;
    $books = $response['books'];

    return view('author.show', compact('author', 'books'));
  }

  public function create()
  {
    return view('author.create');
  }

  public function destroy($id)
  {
   $response = $this->qssApiClient->deleteAuthor($id);

    return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
  }
}
