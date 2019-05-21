<?php

Route::get('/',function(){
    return view("Welcome");
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('clients','ClientController');
//Route::resource('articles','ArticleController');
Route::get('articles/vote/{vote}/{id}','RatingController@store')->middleware('auth:client');

// **************** Brand rootes ... ****************
Route::resource('brands','BrandController')->middleware('auth:staff');

// **************** Articles rootes ... ****************
Route::post('articles/','ArticleController@store')->middleware('auth:staff');
Route::get('articles/trash','ArticleController@showtrash')->middleware('auth:staff');

Route::get('articles/create', 'ArticleController@create')->middleware('auth:staff');
Route::get('articles/{id}/edit','ArticleController@edit')->middleware('auth:staff');
Route::put('articles/{id}','ArticleController@update')->middleware('auth:staff');
Route::post('articles/{id}/{rate}','RatingController@store')->where('rate','[0-9]*\.[0-9]+|[0-9]+')->middleware('auth:client');
Route::get('articles', 'ArticleController@index');
Route::get('articles/editing','ArticleController@showeditpage');
Route::get('articles/{id}', 'ArticleController@show');
Route::delete('articles/{id}','ArticleController@destroy')->middleware('auth:staff');
Route::post('articles','ArticleController@search');

Route::post('articles/{id}/restore','ArticleController@restore')->middleware('auth:staff');

// **************** Catégory routes ... ****************
Route::resource('categories','CategoryController')->middleware('auth:staff');
// **************** Login staff routes ... ****************

Route::get('staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff-login');
Route::post('staff/login', 'Auth\StaffLoginController@login');
Route::get('staff/logout', 'Auth\StaffLoginController@logout');
Route::get('staff/account', 'StaffController@show')->middleware('auth:staff');
Route::get('staff/menu','StaffController@showmenu')->middleware('auth:staff');

// **************** Registration staff routes ... ****************
Route::get('staff/register', 'Auth\StaffRegisterController@showRegisterForm');
Route::post('staff/register', 'Auth\StaffRegisterController@register');


//  **************** Login clients  routes ... ****************
Route::get('clients/login','auth\ClientLoginController@showLoginForm')->name('client-login');
Route::post('clients/login','auth\ClientLoginController@login');
Route::get('clients/account', 'ClientController@show')->middleware('auth:client');

//  **************** Registration clients routes ... ****************
Route::get('clients/register','auth\ClientRegisterController@showRegisterForm');
Route::post('clients/register','auth\ClientRegisterController@register');
Route::get('clients/logout', 'Auth\ClientLoginController@logout');
Route::get('clients/account','ClientController@show')->name('clients-account')->middleware('auth:client');


