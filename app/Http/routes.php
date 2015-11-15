<?php

// use App\Http\Lib\Family;
// Route::get('/nice', function () {
//     return Family::getFam();
// });

// use App\Http\Lib\Util;
// Route::get('/image', function () {
//     return Util::gravatar();
// });

// Route::get('/user/{id}', function ($id) {
//     return App\User::find($id);
// });



Route::get('/', function () {
    return view('pages.home');
});

Route::get('myWork', 'WriteController@index');
Route::get('create', 'WriteController@create');


Route::resource('/write', 'WriteController');
Route::resource('/user', 'UserController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');