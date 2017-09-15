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


Route::post('/home22','HomeController@postTest');

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::post('/user','UserController@newUser')->name('user');

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/edit','EditController@index')->name('edit');
Route::get('/add','AddController@index')->name('add');
