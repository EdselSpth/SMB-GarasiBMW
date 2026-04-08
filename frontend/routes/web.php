<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/jenis-mesin', function () {
    return view('pages.master_data.jenis_mesin.jenisMesin');
});

Route::get('/manajemen-karyawan', function (){
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

