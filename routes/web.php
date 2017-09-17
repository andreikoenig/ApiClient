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
Route::get('/posts', 'PostController@getAllPosts');
Route::get('/users', 'UserController@getAllUsers');
Route::get('/albums', 'AlbumController@getAllAlbums');

Route::get('/post', 'PostController@getPostId');
Route::post('/post', 'PostController@getAPost');

Route::get('/user', 'UserController@getUserId');
Route::post('/user', 'UserController@getAUser');

Route::get('/album', 'AlbumController@getAlbumId');
Route::post('/album', 'AlbumController@getAnAlbum');

Route::get('/', function () {
    return view('main');
});
