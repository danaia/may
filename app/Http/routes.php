<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('big/{id}', 'BigController@big');

Route::resource('write', 'WriteController');

