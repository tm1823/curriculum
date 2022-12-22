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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', 'PostController@add');
Route::post('post', 'PostController@create');
Route::get('post', 'PostController@index');
Route::get('post/delete', 'PostController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
