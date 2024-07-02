<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
//Catalog
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'create']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'store']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'show']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'edit']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'update']);
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'destroy']);
//Book
Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'create']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'store']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'show']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'edit']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'update']);
Route::get('/book', [App\Http\Controllers\BookController::class, 'destroy']);
//Author
Route::get('/author', [App\Http\Controllers\AuthController::class, 'index']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'create']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'store']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'show']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'edit']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'update']);
Route::get('/author', [App\Http\Controllers\AuthController::class, 'destroy']);
//Member
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'index']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'create']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'store']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'show']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'edit']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'update']);
Route::get('/member', [App\Http\Controllers\Membercontroller::class, 'destroy']);
//Publihser
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'index']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'create']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'store']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'show']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'edit']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'update']);
Route::get('/publisher', [App\Http\Controllers\Publishercontroller::class, 'destroy']);
//Transaction
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'index']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'create']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'store']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'show']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'edit']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'update']);
Route::get('/transaction', [App\Http\Controllers\Transactioncontroller::class, 'destroy']);
//Transaction
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'index']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'create']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'store']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'show']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'edit']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'update']);
Route::get('/transactiondetail', [App\Http\Controllers\TransactionDetailcontroller::class, 'destroy']);
//Transaction
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'index']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'create']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'store']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'show']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'edit']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'update']);
Route::get('/user', [App\Http\Controllers\Usercontroller::class, 'destroy']);
