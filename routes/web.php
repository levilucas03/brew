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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/dashboard', 'brewController@index')->name('brew');

Route::get('/brewtime', 'brewController@brewed_user');


Route::resource('admin/users', 'UserController')->only([
    'index', 'show'
]);

Route::resource('admin/account', 'AccountController')->only([
    'index', 'show', 'create'
]);



