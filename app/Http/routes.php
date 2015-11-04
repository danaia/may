<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/may', function () {
    return 'nice may to winter'; 
});

