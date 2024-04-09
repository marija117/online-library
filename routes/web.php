<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route to fetch authors
Route::get('/authors', [AuthorController::class, 'index']);

// Route to delete an author
Route::delete('/authors/{id}', [AuthorController::class, 'delete']);

// Route to fetch a single author
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// Route to add a new author
Route::post('/authors', [AuthorController::class, 'store']);
