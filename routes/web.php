<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('mivista', function (){
    return "Mi primer vista";
});

Route::resource('books', BookController::class);
Route::post('/books/add', [BookController::class, 'store'])->name('books.store');

Route::resource('users', UserController::class);
Route::post('/users/add', [UserController::class, 'store'])->name('users.store');

Route::resource('categories', CategoryController::class);
Route::post('categories/add', [CategoryController::class, 'store'])->name('categories.store');