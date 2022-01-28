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
//トップ画面
Route::get('/', 'ArticleController@index')->name('index');
Route::get('/search', 'ArticleController@search')->name('search');

//認証関連
Route::group(['middleware' => 'auth'],function()
{
    //マイページ
    Route::get('/mypage','UserController@mypage')->name('mypage');
    //ログアウト
    Route::get('/logout','USerController@getLogout')->name('logout');
});
//ユーザー登録機能
Route::get('/register','UserController@create')->name('register');
Route::post('/register','UserController@store');
//登録完了画面
Route::get('register/popup','UserController@getPopup')->name('popup');
//ログイン
Route::get('/login','UserController@getLogin')->name('getLogin');
Route::post('/login','UserController@postLogin')->name('postLogin');



