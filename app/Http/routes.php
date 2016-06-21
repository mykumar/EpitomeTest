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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rand', function () {
    return 'WElCOME TO THE RAND';
});


Route::get('getBetas', 'HtmlController@getBetas');
Route::get('getSingle', 'HtmlController@getSingle');
Route::get('testMultiParams/{firstId}/{secondId}', 'HtmlController@testMultiParams');
Route::get('getDoc', 'HtmlController@getDoc');

Route::get('testAngular', 'AngularController@testAngular');
Route::get('testAngularUi', 'AngularController@testAngularUi');
Route::get('welcome', 'AngularController@welcome');
Route::get('testAngularGrid', 'AngularController@testAngularGrid');
Route::get('getTestJson', 'AngularController@getTestJson');




