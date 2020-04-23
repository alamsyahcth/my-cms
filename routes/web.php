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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/','pagesController@index');

Route::get('/posts', 'postController@index');
Route::get('/add-posts', 'postController@create');
Route::post('/posts/create', 'postController@store');
Route::get('/edit-posts/{slug}', 'postController@edit');
Route::post('/posts/update/{id}', 'postController@update');
Route::get('/posts/destroy/{id}', 'postController@destroy');

Route::get('/category', 'categoryController@index');
Route::get('/add-category', 'categoryController@create');
Route::post('/category/create', 'categoryController@store');
Route::get('/edit-category/{slug}', 'categoryController@edit');
Route::post('/category/update/{id}', 'categoryController@update');
Route::get('/category/destroy/{id}', 'categoryController@destroy');
