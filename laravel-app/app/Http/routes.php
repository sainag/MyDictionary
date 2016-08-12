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

Route::model('words','Word');
Route::get('/', function () {
    return view('welcome');
});

Route::get('about','WordsController@about');
Route::get('contact','WordsController@contact');

Route::resource('words','WordsController');

Route::bind('words', function($value) {
	return App\Word::where('wordid',$value)->first();
});
