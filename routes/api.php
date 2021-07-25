<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('users', TechnoBureau\UI\Http\Controllers\UserController::class);
    Route::resource('groups', TechnoBureau\UI\Http\Controllers\GroupController::class);
    Route::resource('permissions', TechnoBureau\UI\Http\Controllers\PermissionController::class);
});
Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('categories', TechnoBureau\Blog\Http\Controllers\CategoryController::class,['as'=>'api']);

    Route::get('/{category}/', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'showByCategory']
        )->name('api.article.category');

    Route::get('/{category}/{subcategory}/', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'showBySubCategory']
        )->name('api.article.subcategory');
        
    Route::get('/{category}/{subcategory}/{title}.{id}/', 
            [TechnoBureau\Blog\Http\Controllers\ArticleController::class,'view']
        )->name('api.article.view');        
});
