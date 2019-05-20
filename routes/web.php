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

Route::get('basketball', 'ArticleController@basketball');

<<<<<<< HEAD
Route::resource('articles', 'ArticleController');
=======
Route::get('football', 'ArticleController@football');
>>>>>>> ee502ea4a2555109a95eccc385bb6c7172d6a470

Route::get('baseball', 'ArticleController@baseball');

Route::get('/private', 'AdminController@secret');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('article', 'ArticleController');
});