<?php

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);