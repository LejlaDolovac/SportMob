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

Route::get('/basketbal', function(){
      return view('basketbal');
});

Route::get('/fotbal', function(){
    return view('fotbal');
});

Route::get('/basebal', function(){
    return view('basebal');
});


Route::resource('articles', 'ArticleController');

Route::get('/articles/{id}', 'ArticleController@show');

Route::get('/private', 'AdminController@secret');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('article', 'ArticleController');
});