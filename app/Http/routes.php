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
Route::get('home/searchbygarage', 'HomeController@searchbygarage');
Route::get('home/searchbycountry', 'HomeController@searchbycountry');
Route::get('home/searchbyowner', 'HomeController@searchbyowner');
Route::get('home/searchbyemail', 'HomeController@searchbyemail');
Route::get('home/searchbylocation', 'HomeController@searchbylocation');


