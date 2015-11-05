<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/may', function () {
    return 'nice may to winter'; 
});

Route::get('go', 'BigController@index')->name('go');


Route::get('big/{id}', 'BigController@big');