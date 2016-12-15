<?php

use Illuminate\Http\Request;
// use App\Http\Controllers;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
 //  $api->get('hello', function () {
 //     return "Hello...";
 $api->resource('articles','App\Http\Controllers\ArticlesController');
 $api->get('articles/{article}/edit','App\Http\Controllers\ArticlesController@edit')->name('articles.edit');
 // });
});
