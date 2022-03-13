<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

//Assignment 1
Route::group(['namespace'=>'Admin','as'=>'user.','middleware'=>'test'],function(){
    Route::get('/user/{name}',[UserController::class,'show'])->name('show');
});

Route::group(['prefix'=>'product'],function(){
    Route::resource('category',CategoryController::class);
});

//Assignment 2
Route::resources([
    'post'=>PostController::class,
    'product'=>ProductController::class
]);






