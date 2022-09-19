<?php

use Illuminate\Support\Facades\Route;

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
    return view('articles/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formation_list', 'Formation_listController@index')->name('formation_list');
Route::get('/formation/{id}', 'Formation_listController@show')->name('show');

Route::post('/formation/{id}', 'PostController@store')->name('store');

Route::post('/formation/{id}/like', 'LikeController@like')->name('like');
Route::post('/formation/{id}/unlike', 'LikeController@unlike')->name('unlike');
