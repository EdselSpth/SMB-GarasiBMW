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

Route::get('/jenis-mobil', function () {
    return view('pages.master_data.jenis_mobil.jenisMobil');
});

Route::get('/kategori-sparepart', function () {
    return view('pages.master_data.kategori_sparepart.kategoriSparepart');
});

Route::get('/supplier', function () {
    return view('pages.master_data.supplier.supplier');
});

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});