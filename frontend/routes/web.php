<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/jenis-mesin', function () {
    return view('pages.jenisMesin');
});

