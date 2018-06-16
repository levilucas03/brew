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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/brew', 'brewController@index')->name('brew');

Route::get('/whosnext', 'brewController@getUser');

Auth::routes();

Route::resource('admin/users', 'UserController')->only([
    'index', 'show'
]);




