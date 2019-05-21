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


Route::get('articles', 'ArticleController@index');

<<<<<<< HEAD
Route::get('/basketball', 'ArticleController@basketball')->name ('basketball');

Route::get('/football', 'ArticleController@football')->name ('football');
=======
Route::get('ads', 'AdController@ad');

Route::get('basketball', 'ArticleController@basketball');

Route::resource('articles', 'ArticleController');
Route::get('football', 'ArticleController@football');
>>>>>>> 40420025c140709fd0b466ac12d9617ccc4c9716

Route::get('/baseball', 'ArticleController@baseball')->name ('baseball');

Route::get('/private', 'AdminController@secret');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('article', 'ArticleController');
});