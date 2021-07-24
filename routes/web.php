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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [TechnoBureau\UI\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', TechnoBureau\UI\Http\Controllers\UserController::class);
    Route::resource('groups', TechnoBureau\UI\Http\Controllers\GroupController::class);
    Route::resource('permissions', TechnoBureau\UI\Http\Controllers\PermissionController::class);
});

Route::get('/', [TechnoBureau\Blog\Http\Controllers\IndexController::class,'index'])->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('categories', TechnoBureau\Blog\Http\Controllers\CategoryController::class);
});

Route::get('/{category}/', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'showByCategory']
        )->name('showByCategory');

Route::get('/{category}/{subcategory}/', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'showBySubCategory']
        )->name('showBySubCategory');
        
Route::get('/{category}/{subcategory}/{title}/article{id}.html', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'show']
        )->name('showByID');
