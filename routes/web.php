<?php

use Illuminate\Support\Facades\Route;
use App\Album;

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

//Albums

Route::get('/addAlbum','AlbumsController@create');

Route::post('/storeAlbum','AlbumsController@store');

Route::get('/albums', 'AlbumsController@index')->name('albums');
Route::get('/albums/{id}/delete','AlbumsController@delete');
Route::get('/albums/{id}/edit','AlbumsController@edit');
Route::post('/albums/{id}/update','AlbumsController@update');

Route::resource('user','UserController');
Route::resource('photo','PhotoController');
