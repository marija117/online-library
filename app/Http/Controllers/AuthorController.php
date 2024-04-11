<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\QssApiClient;

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

  public function store(Request $request)
  {
    $request->validate([
      'first_name' => 'required|string',
      'last_name' => 'required|string',
      'birthday' => 'required|date',
      'biography' => 'required|string',
      'gender' => 'required|string',
      'place_of_birth' => 'required|string',
    ]);

    $response = $this->qssApiClient->createAuthor(
      $request->input('first_name'),
      $request->input('last_name'),
      $request->input('birthday'),
      $request->input('biography'),
      $request->input('gender'),
      $request->input('place_of_birth'),
    );

    return redirect()->route('authors.index')->with('success', 'Author created successfully.');
  }

  public function destroy($id)
  {
    $response = $this->qssApiClient->deleteAuthor($id);

    return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
  }
}
