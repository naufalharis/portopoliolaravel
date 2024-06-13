<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index.blade.php', function () {
    return view('index');
});

Route::get('/index1.blade.php', function () {
    return view('index1');
});

