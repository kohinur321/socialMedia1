<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);
Route::get('/post/details/{id}', [FrontendController::class, 'postDetails']);
Route::post('/post/comment/{id}', [FrontendController::class, 'postComment']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'category'], function(){
Route::get('/add', [CategoryController::class, 'addCategory']);
Route::get('/manage', [CategoryController::class, 'manageCategory']);
Route::post('/store', [CategoryController::class, 'categoryStore']);
Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('/update/{id}', [CategoryController::class, 'categoryUpdate']);
Route::get('/delete/{id}', [CategoryController::class, 'categoryDelete']);
});

Route::group(['prefix' => 'post'], function(){
    Route::get('/add', [PostController::class, 'addPost']);
    Route::get('/manage', [PostController::class, 'managePost']);
    Route::post('/store', [PostController::class, 'postStore']);
    Route::get('/edit/{id}', [PostController::class, 'postEdit']);
    Route::post('/update/{id}', [PostController::class, 'postUpdate']);
    Route::get('/delete/{id}', [PostController::class, 'postDelete']);
    });
