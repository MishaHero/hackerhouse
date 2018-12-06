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

// Pages
Route::get('/', 'PagesController@getWelcome');
Route::get('/home', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::post('/messages', 'PagesController@getMessages');



//Controllers
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@getMessages');

