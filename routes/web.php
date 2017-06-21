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

Route::get('/normalgallery', function () {
    return view('normalgallery');
});

Route::get('/adminwelcome', function() {
    return view('/adminwelcome');
});


Route::get('/getInsert', 'CrudController@getInsert');
Route::post('/postInsert', 'CrudController@postInsert');
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::post('/image-gallery', 'ImageGalleryController@upload');
Route::delete('/image-gallery/{id}', 'ImageGalleryController@destroy');
Route::get('normalgallery', 'ImageGalleryController@index2');
Route::get('adminwelcome', 'AdminController@getInsert');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
