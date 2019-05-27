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

  $articles = DB::table('articles')->orderBy('rank')->Paginate(5); // för att få ut endast 5 åt gången när man ska edit
  $ads = DB::table('ads')->orderBy('rank')->Paginate(2);
return view('welcome', [
'articles' => $articles,
'ads' => $ads
]);
});


Route::get('articles', 'ArticleController@index')->name ('articles');

Route::get('edit', 'AdminController@edit');

Route::get('article', 'AdminController@edit');

Route::get('/update', 'AdminController@update');

Route::get('article', 'AdminController@update');

Route::get('basketball', 'ArticleController@basketball')->name ('basketball');

Route::get('football', 'ArticleController@football')->name ('football');

Route::get('/baseball', 'ArticleController@baseball')->name ('baseball');

Route::get('/private', 'AdminController@secret')->name ('admin');

Route::get('/user', 'AdminController@UserSecret');

Route::delete('/private/{article}', 'AdminController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/{id}/edit','ArticleController@update')->name('update');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('article', 'ArticleController');
});
