<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//Catalog
Route::resource('/catalogs', App\Http\Controllers\CatalogController::class);
//Book
Route::resource('/books', App\Http\Controllers\BookController::class);
Route::get('/api/books', [App\Http\Controllers\BookController::class, 'api']);
//Author
Route::resource('/authors', App\Http\Controllers\AuthController::class);
Route::get('/api/authors', [App\Http\Controllers\AuthController::class, 'api']);
//Member
Route::resource('/members', App\Http\Controllers\Membercontroller::class);
Route::get('/api/members', [App\Http\Controllers\Membercontroller::class, 'api']);
//Publihser
Route::resource('/publishers', App\Http\Controllers\Publishercontroller::class);
Route::get('/api/publishers', [App\Http\Controllers\Publishercontroller::class, 'api']);
//Transaction
Route::resource('/transactions', App\Http\Controllers\Transactioncontroller::class);
//Transaction
Route::resource('/transactiondetails', App\Http\Controllers\TransactionDetailcontroller::class);
//Transaction
Route::resource('/users', App\Http\Controllers\Usercontroller::class);
