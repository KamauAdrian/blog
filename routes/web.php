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

Route::get('/','Postcontroller@index')->name('home');
Route::get('/user/register','PostController@register');
Route::post('/register','UsersController@store')->name('register');
Route::get('/create','Postcontroller@create');
Route::post('/save','Postcontroller@store')->name('save');
