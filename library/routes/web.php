<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//Catalog
Route::get('/catalogs', [App\Http\Controllers\CatalogController::class, 'index']);
Route::get('/catalogs/create', [App\Http\Controllers\CatalogController::class, 'create']);
Route::post('/catalogs', [App\Http\Controllers\CatalogController::class, 'store']);
Route::get('/catalogs/show', [App\Http\Controllers\CatalogController::class, 'show']);
Route::get('/catalogs/{catalog}/edit', [App\Http\Controllers\CatalogController::class, 'edit']);
Route::put('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'update']);
Route::delete('/catalogs/{catalog}', [App\Http\Controllers\CatalogController::class, 'destroy']);
//Book
Route::get('/books', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/books', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/books/show', [App\Http\Controllers\BookController::class, 'show']);
Route::get('/books/{book}/edit', [App\Http\Controllers\BookController::class, 'edit']);
Route::put('/books/{book}', [App\Http\Controllers\BookController::class, 'update']);
Route::delete('/books/{book}', [App\Http\Controllers\BookController::class, 'destroy']);
//Author
Route::get('/authors', [App\Http\Controllers\AuthController::class, 'index']);
Route::get('/authors/create', [App\Http\Controllers\AuthController::class, 'create']);
Route::post('/authors', [App\Http\Controllers\AuthController::class, 'store']);
Route::get('/authors/show', [App\Http\Controllers\AuthController::class, 'show']);
Route::get('/authors/{author}/edit', [App\Http\Controllers\AuthController::class, 'edit']);
Route::put('/authors/{author}', [App\Http\Controllers\AuthController::class, 'update']);
Route::delete('/authors/{author}', [App\Http\Controllers\AuthController::class, 'destroy']);
//Member
Route::get('/members', [App\Http\Controllers\Membercontroller::class, 'index']);
Route::get('/members/create', [App\Http\Controllers\Membercontroller::class, 'create']);
Route::post('/members', [App\Http\Controllers\Membercontroller::class, 'store']);
Route::get('/members/show', [App\Http\Controllers\Membercontroller::class, 'show']);
Route::get('/members/{member}/edit', [App\Http\Controllers\Membercontroller::class, 'edit']);
Route::put('/members/{member}', [App\Http\Controllers\Membercontroller::class, 'update']);
Route::delete('/members/{member}', [App\Http\Controllers\Membercontroller::class, 'destroy']);
//Publihser
Route::get('/publishers', [App\Http\Controllers\Publishercontroller::class, 'index']);
Route::get('/publishers/create', [App\Http\Controllers\Publishercontroller::class, 'create']);
Route::post('/publishers', [App\Http\Controllers\Publishercontroller::class, 'store']);
Route::get('/publishers/show', [App\Http\Controllers\Publishercontroller::class, 'show']);
Route::get('/publishers/{publisher}/edit', [App\Http\Controllers\Publishercontroller::class, 'edit']);
Route::put('/publishers/{publisher}', [App\Http\Controllers\Publishercontroller::class, 'update']);
Route::delete('/publishers/{publisher}', [App\Http\Controllers\Publishercontroller::class, 'destroy']);
//Transaction
Route::get('/transactions', [App\Http\Controllers\Transactioncontroller::class, 'index']);
Route::get('/transactions/create', [App\Http\Controllers\Transactioncontroller::class, 'create']);
Route::get('/transactions', [App\Http\Controllers\Transactioncontroller::class, 'store']);
Route::get('/transactions/show', [App\Http\Controllers\Transactioncontroller::class, 'show']);
Route::get('/transactions/edit', [App\Http\Controllers\Transactioncontroller::class, 'edit']);
Route::get('/transactions/update', [App\Http\Controllers\Transactioncontroller::class, 'update']);
Route::get('/transactions/destroy', [App\Http\Controllers\Transactioncontroller::class, 'destroy']);
//Transaction
Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailcontroller::class, 'index']);
Route::get('/transactiondetails/create', [App\Http\Controllers\TransactionDetailcontroller::class, 'create']);
Route::get('/transactiondetails', [App\Http\Controllers\TransactionDetailcontroller::class, 'store']);
Route::get('/transactiondetails/show', [App\Http\Controllers\TransactionDetailcontroller::class, 'show']);
Route::get('/transactiondetails/edit', [App\Http\Controllers\TransactionDetailcontroller::class, 'edit']);
Route::get('/transactiondetails/update', [App\Http\Controllers\TransactionDetailcontroller::class, 'update']);
Route::get('/transactiondetails/destroy', [App\Http\Controllers\TransactionDetailcontroller::class, 'destroy']);
//Transaction
Route::get('/users', [App\Http\Controllers\Usercontroller::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\Usercontroller::class, 'create']);
Route::get('/users', [App\Http\Controllers\Usercontroller::class, 'store']);
Route::get('/users/show', [App\Http\Controllers\Usercontroller::class, 'show']);
Route::get('/users/edit', [App\Http\Controllers\Usercontroller::class, 'edit']);
Route::get('/users/update', [App\Http\Controllers\Usercontroller::class, 'update']);
Route::get('/users/destroy', [App\Http\Controllers\Usercontroller::class, 'destroy']);
