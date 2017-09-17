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
Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/add','AddController@index')->name('add');
Route::post('/add','AddController@index1')->name('add');
Route::post('/add','UserController@create')->name('add');

Route::get('edit/{id}', 'UserController@edit')->name('edit');

Route::post('register', 'AddController@create');

Route::post('/user', 'UserController@store');

Route::delete('user/{id}', 'UserController@destroy');