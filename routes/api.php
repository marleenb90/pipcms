<?php

use Illuminate\Http\Request;

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

Route::get('authors', 'Author@index');

Route::get('authors/{author}', 'Author@show');

Route::post('authors','Author@store');

Route::put('authors/{author}','Author@update');

Route::delete('authors/{author}', 'sAuthor@delete');
