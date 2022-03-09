<?php

Route::get('/','ArticleController@welcome')->name('article.welcome');
//トップ画面
Route::get('/index', 'ArticleController@index')->name('article.index');
//検索機能
Route::get('/index/search', 'ArticleController@search')->name('article.search');
//記事詳細
Route::get('articles/{id}','ArticleController@show')->name('article.show');


/*==========================================================================
|ログイン後のみアクセス可能
==========================================================================*/
Route::group(['middleware' => 'auth'],function()
{
    //マイページ
    Route::get('/mypage','UserController@mypage')->name('user.mypage');
    //マイページ編集機能
    Route::get('/mypage/{id}/edit','UserController@edit')->name('user.edit');
    Route::put('/mypage/{id}','UserController@update')->name('user.update');
    // my-memo
    Route::get('/mymemo','ArticleController@myMemo')->name('article.mymemo');
    //検索機能
    Route::get('/mymemo/search', 'ArticleController@myMemoSearch')->name('article.myMemoSearch');

    //記事投稿画面
    Route::get('/create', 'ArticleController@getCreate')->name('article.getCreate');
    Route::post('/create', 'ArticleController@postCreate')->name('article.postCreate');
    //記事編集機能
    Route::get('/articles/{id}/edit', 'ArticleController@edit')->name('article.edit');
    Route::post('/articles/{id}', 'ArticleController@update')->name('article.update');
    //記事削除機能
    Route::delete('/articles/{id}', 'ArticleController@destroy')->name('article.destroy');

    //ログアウト
    Route::get('/logout','USerController@getLogout')->name('user.logout');
});

/*==========================================================================
|Auth関連
==========================================================================*/
//ユーザー登録機能
Route::get('/register','UserController@create')->name('user.register');
Route::post('/register','UserController@store');
//登録完了画面
Route::get('register/popup','UserController@getPopup')->name('user.popup');
//ログイン
Route::get('/login','UserController@getLogin')->name('user.getLogin');
Route::post('/login','UserController@postLogin')->name('user.postLogin');



