<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DASHBOARD
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);

// AUTHORS
Route::get('/authors', [\App\Http\Controllers\AuthorController::class, 'index']);
Route::get('/authors/create/', [\App\Http\Controllers\AuthorController::class, 'create']);
Route::get('/authors/edit/{id}', [\App\Http\Controllers\AuthorController::class, 'edit']);

Route::post('/authors/save', [\App\Http\Controllers\AuthorController::class, 'save']);
Route::post('/authors/remove', [\App\Http\Controllers\AuthorController::class, 'remove']);

// BOOKS
Route::get('/books', [\App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/create/', [\App\Http\Controllers\BookController::class, 'create']);
Route::get('/books/edit/{id}', [\App\Http\Controllers\BookController::class, 'edit']);

Route::post('/books/save', [\App\Http\Controllers\BookController::class, 'save']);
Route::post('/books/remove', [\App\Http\Controllers\BookController::class, 'remove']);
