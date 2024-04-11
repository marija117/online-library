<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route to fetch authors
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');

// Route to add a new author
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');

// Route to fetch a single author
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');

// Route to delete an author
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
