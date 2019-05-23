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

Route::resource('articles', 'ArticleController'); // CRUD

Route::get('football', 'ArticleController@football');

Route::get('baseball', 'ArticleController@baseball');

Route::get('/private', 'AdminController@secret');

Route::delete('/private', 'AdminController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('article', 'ArticleController');
});