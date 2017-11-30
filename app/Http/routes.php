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

Route::get('/view/data',"EveryController@viewData");
Route::get('/view/{ajax?}',"EveryController@view");

Route::get('/data', "EveryController@homeData");
Route::get('/{ajax?}', "EveryController@home");
