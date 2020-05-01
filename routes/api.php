<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\Todo;

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

    Route::get('items', 'TodoController@index');
    Route::get('items/{item}', 'TodoController@show');
    Route::post('items', 'TodoController@store');
    Route::put('items/{item}', 'TodoController@update');
    Route::delete('items/{item}', 'TodoController@delete');

    return $request->user();
});

Route::post('registerUser', 'Auth\RegisterController@registerUser');
Route::post('loginUser', 'Auth\LoginController@loginUser');
Route::post('logoutUser', 'Auth\LoginController@logoutUser');
