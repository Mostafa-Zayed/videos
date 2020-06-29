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

Route::get('/','HomeController@index')->name('home');
Route::get('/courses/{id}','HomeController@course');
Route::get('category/{category}','HomeController@category')->name('category');
Route::get('skill/{skill}','HomeController@skill')->name('skill');
Route::get('contact-us','HomeController@contact')->name('contact');

Auth::routes();


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where('provider','facebook|google|twitter|github|linkedin');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('provider','facebook|google|twitter|github|linkedin');
