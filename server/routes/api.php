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

Route::get('login', 'Api\AuthController@login');
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');

// Route::middleware('auth:api')->group(function () {
Route::get('logout', 'Api\AuthController@logout');
Route::get('usergetdata', 'Api\UserController@usergetdata');
Route::post('createuser', 'Api\UserController@createuser');
Route::post('usercreateorupgrade', 'Api\UserController@usercreateorupgrade');
Route::post('rolemanage', 'Api\UserController@rolemanage');
Route::post('userdelete', 'Api\UserController@userdelete');
// });
