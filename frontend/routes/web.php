<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

//btw itu beberapa udah ku kasi ->name('bblablabla) biar kalo mau ganti link tinggal ganti aja gausah otak atik yg lain
//ini buat route jenis mesin yah kawan
Route::get('/jenis-mesin', function () {
    return view('pages.master_data.jenis_mesin.jenisMesin');
})->name('jenis-mesin.index');
Route::get('/jenis-mesin/tambah', function () {
    return view('pages.master_data.jenis_mesin.tambahJenisMesin');
})->name('jenis-mesin.create');
Route::get('/jenis-mesin/detail', function () {
    return view('pages.master_data.jenis_mesin.detailJenisMesin');
})->name('jenis-mesin.show');


Route::get('/manajemen-karyawan', function (){
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

//ini buat route jenis mobil ya kawan
Route::get('/jenis-mobil', function () {
    return view('pages.master_data.jenis_mobil.jenisMobil');
})->name('jenis-mobil.index');
Route::get('/jenis-mobil/tambah', function () {
    return view('pages.master_data.jenis_mobil.tambahJenisMobil');
})->name('jenis-mobil.create');
Route::get('/jenis-mobil/detail', function () {
    return view('pages.master_data.jenis_mobil.detailJenisMobil');
})->name('jenis-mobil.show');

//ini buat route kategori sparepart ya ge ya
Route::get('/kategori-sparepart', function () {
    return view('pages.master_data.kategori_sparepart.kategoriSparepart');
})->name('kategori-sparepart.index');
Route::get('/kategori-sparepart/tambah', function () {
    return view('pages.master_data.kategori_sparepart.tambahKategoriSparepart');
})->name('kategori-sparepart.create');
Route::get('/kategori-sparepart/detail', function () {
    return view('pages.master_data.kategori_sparepart.detailKategoriSparepart');
})->name('kategori-sparepart.show');

//ini buat route rupplier ya teman temanku
Route::get('/supplier', function () {
    return view('pages.master_data.supplier.supplier');
})->name('supplier.index');
Route::get('/supplier/tambah', function () {
    return view('pages.master_data.supplier.tambahSupplier');
})->name('supplier.create');
Route::get('/supplier/detail', function () {
    return view('pages.master_data.supplier.detailSupplier');
})->name('supplier.show');

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});

Route::get('/izin-terlambat', function () {
    return view('pages.izin_keterlambatan.manajemenIzinKeterlambatan');
});

Route::get('/manajemen-pegawai', function () {
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

Route::get('/laporan-absensi', function () {
    return view('pages.laporan_absensi.laporanAbsensi');
})->name('laporan-absensi.index');

Route::get('/manajemen-servis', function () {
    return view('pages.manajemen_servis_mobil.manajemenServisMobil');
});

Route::get('/payroll', function () {
    return view('pages.payroll.payroll');
});

//ini route buat MasterData dataPelanggan
Route::get('/pelanggan', function () {
    return view('pages.pelanggan.pelanggan');
})->name('pelanggan.index');
Route::get('/pelanggan/tambah', function () {
    return view('pages.pelanggan.tambahPelanggan');
})->name('pelanggan.create');
Route::get('/pelanggan/detail', function () {
    return view('pages.pelanggan.detailPelanggan');
})->name('pelanggan.show');

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});