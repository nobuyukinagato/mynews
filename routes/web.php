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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
});
// Route::group(['prefix' => 'admin'], function() {

//     Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');;
// });

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');;
    });

// 課題3
// Route::get('XXX','AAAController@bbb');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
