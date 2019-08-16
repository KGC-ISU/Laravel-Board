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

Route::get('/', 'MainController@index');

Route::get('/login', 'LoginController@loginPage');
Route::get('/register', 'LoginController@registerPage');
Route::post('/login', 'LoginController@login');
Route::post('/register', 'LoginController@register');
