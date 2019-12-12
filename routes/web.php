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
    return view('Welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@verify']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'LogoutController@index']);

Route::get('/home',['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('/album',['as'=>'album', 'uses'=>'AlbumsController@index']);
Route::get('/album/create',['as'=>'album/create', 'uses'=>'AlbumsController@create']);
