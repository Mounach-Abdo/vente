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

Route::post('articles/vote{vote}{id}','RatingController@store');
Route::resource('brands','BrandController');
Route::resource('clients','ClientController');
Route::resource('articles','ArticleController');

Route::resource('categories','CategoryController');

Route::post('articles/{id}/{rate}','RateController@store');

