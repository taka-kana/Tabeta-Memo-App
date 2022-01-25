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

Route::get('/', 'ArticleController@index')->name('index');

Route::get('/register','UserController@create')->name('register');
Route::post('/register','UserController@store');
//登録完了画面
Route::get('register/popup','UserController@getPopup')->name('popup');
//Route::get('register/mypage','UserController@mypage')->name('mypage');


