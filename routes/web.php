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

Route::get('/list', 'ArticleController@showList')->name('list');
Route::get('/regist','ArticleController@showRegistForm')->name('regist');
Route::post('/regist','ArticleController@registSubmit')->name('submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
