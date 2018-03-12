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

Route::get('/view','GitController@view')->name('git.view');

Route::get('/','GitController@index')->name('git.index');

Route::get('/execute','GitController@execute')->name('git.execute');