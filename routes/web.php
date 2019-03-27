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


Route::get('/',function(){
    return view('welcome');
});

Route::get('articles/vote/{vote}/{id}','RatingController@store');
Route::resource('brands','BrandController');
Route::resource('clients','ClientController');
Route::resource('articles','ArticleController');

Route::resource('categories','CategoryController');

Route::post('articles/{id}/{rate}','RateController@store');



Route::get('staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff-login');
Route::post('staff/login', 'Auth\StaffLoginController@login');
Route::get('staff/logout', 'Auth\StaffLoginController@logout');

Route::get('staff/account', 'StaffController@show')->name('staff-account')->middleware('auth:staff');


// Registration routes...
Route::get('staff/register', 'Auth\StaffRegisterController@showRegisterForm');
Route::post('staff/register', 'Auth\StaffRegisterController@register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

