<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\CommentController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\MainController;
use  App\Http\Controllers\LoginController;

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
//Auth::routes();
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('login', [MainController::class, 'login'])->name('login');
Route::get('signup', [MainController::class, 'signup'])->name('signup');

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);

Route::group(['prefix' => 'comments', "as" => "comments."], function () {
    Route::post('store', [CommentController::class, 'store'])->name("store");
    Route::delete('{article}', [CommentController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'authentication', "as" => "authentication."], function () {
    Route::post('login', [LoginController::class, 'login'])->name("login");
    Route::post('signup', [LoginController::class, 'signup'])->name("signup");
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
