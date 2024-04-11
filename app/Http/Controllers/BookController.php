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

  public function destroy($id)
  {
    $this->qssApiClient->deleteBook($id);

    return redirect()->back()->with('success', 'Book deleted successfully');
  }
}
