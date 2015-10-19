<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});
/*/
Route::resource('users','UserController');
Route::resource('newsarticles','NewsArticleController');
Route::delete('users/{id}', ['uses' => 'UserController@destroy', 'as'=>'users.destroy',]);
Route::delete('newsarticles/{id}', ['uses' => 'NewsArticleController@destroy', 'as'=>'newsarticles.destroy',]);
Route::get('newsarticles/{title_slug}', 'NewsArticleController@show');
Route::get('newsarticles/viewall', 'NewsArticleController@viewall');