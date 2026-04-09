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

Route::get('/izin-terlambat', function () {
    return view('pages.izin_keterlambatan.manajemenIzinKeterlambatan');
});

Route::get('/manajemen-pegawai', function () {
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

Route::get('/manajemen-servis', function () {
    return view('pages.manajemen_servis_mobil.manajemenServisMobil');
});

Route::get('/payroll', function () {
    return view('pages.payroll.payroll');
});

Route::get('/pelanggan', function () {
    return view('pages.pelanggan.pelanggan');
});

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});