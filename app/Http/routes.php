<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BaseController@getIndex');
Route::get('/Coll', 'CollController@getIndex');
Route::post('/coll', 'CollController@postIndex');
Route::auth();

Route::get('/home', 'HomeController@index');
//Дальнейшая строка всегда должна быть последней
Route::get('{id}', 'StaticController@getIndex');
