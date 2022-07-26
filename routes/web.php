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


 
// // ■コラム
// ログインしていない場合のリダイレクト処理に、middlewareを利用します。
// middlewareの利用は、下記のサイトを参考にするといいです。

// https://readouble.com/laravel/6.x/ja/middleware.html




// 課題4
// 管理画面
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
     Route::get('news', 'Admin\NewsController@index');
     Route::get('news/edit', 'Admin\NewsController@edit');
     Route::post('news/edit', 'Admin\NewsController@update');
     Route::get('news/delete', 'Admin\NewsController@delete');
});

// プロフィール
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::post('profile/create', 'Admin\ProfileController@create');
     Route::get('profile', 'Admin\ProfileController@index');
     Route::get('profile/edit', 'Admin\ProfileController@edit');
     Route::post('profile/edit', 'Admin\ProfileController@update');
});





// 課題3
// Route::get('XXX','AAAController@bbb');   
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'NewsController@index');

Route::get('/profile', 'ProfileController@index');