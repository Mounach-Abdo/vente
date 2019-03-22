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

<<<<<<< HEAD
Route::resource('brands','brandController');
=======
Route::resource('articles','ArticleController');

Route::resource('categories','CategoryController');
>>>>>>> 6644799c10830811473fe05aae1410916222a58a
