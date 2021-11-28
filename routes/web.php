<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/category/{category}', [BookController::class, 'filter']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::get('/contact', [BookController::class, 'contact']);
