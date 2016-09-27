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


Route::get('/', 'HomeController@index');
Route::get('home/searchbygarage/{garagename}', 'HomeController@searchbygarage');
Route::get('home/searchbycountry/{country}', 'HomeController@searchbycountry');
Route::get('home/searchbyowner/{ownername}', 'HomeController@searchbyowner');
Route::get('home/searchbyemail/{email}', 'HomeController@searchbyemail');
Route::get('home/searchbylocation/{location}', 'HomeController@searchbylocation');


