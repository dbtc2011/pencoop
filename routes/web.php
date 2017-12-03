<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('acc_verifier','AccVerifierController');
Route::resource('home','HomeController');
// Route::get('home','HomeController@index');
Route::get('about','HomeController@about');
Route::get('services','HomeController@services');
Route::get('events','HomeController@events');
Route::get('contact','HomeController@contact');
Route::get('loan','HomeController@loan');
Route::get('summary','HomeController@summary');
Route::get('/', function () {
    return view('home');
});

