<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\CommentController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);

Route::group(['prefix' => 'comments', "as" => "comments."], function () {
    Route::post('store', [CommentController::class, 'store'])->name("store");
    Route::delete('{article}', [CommentController::class, 'destroy'])->name('destroy');
});
