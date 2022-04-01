<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

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
//'middleware' => 'auth:sanctum' -




Route::get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['middleware' => 'auth:sanctum'], function(){
//     // Users
//     Route::get('users', 'UserController@index')->middleware('isAdmin');
//     Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
// });

//post
//add group for posts
//Route::prefix("posts"->group(function () {
//    Route::post('/add', 'PostController@add');
//    Route::put('/{id}', 'PostController@update');
//    Route::delete('/{id}', 'PostController@delete');
//    Route::get('/', 'PostController@get');
//    Route::get('/{id}', 'PostController@getById');
//});

//  Route::post('/add', 'PostController@add');
//     Route::put('/{id}', 'PostController@update');
//     Route::delete('/{id}', 'PostController@delete');
//     Route::get('/', 'PostController@get');
//     Route::get('/{id}', 'PostController@getById');

Route::prefix('auth')->group(function(){
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');


    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');

        // Route::post('profile/{$id}', 'AuthController@update');


    });
    

});

// Products

Route::middleware('api')->group(function () {
    Route::get('products', 'ProductController@index');
});




Route::post('profile', function($id,Request $request){
    $user = User::find($id);
    $user->update($request->all());
    return response()->json('User updated!', 200);
});