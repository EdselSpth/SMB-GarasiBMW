<?php

use Illuminate\Support\Facades\Route;

// Route Login
Route::get('/', function () {
    return view('login');
});

// Route Master Data -> Pelanggan
Route::get('/pelanggan', function () {
    return view('pages.pelanggan.pelanggan');
})->name('pelanggan.index');
Route::get('/pelanggan/tambah', function () {
    return view('pages.pelanggan.tambahPelanggan');
})->name('pelanggan.create');
Route::get('/pelanggan/detail', function () {
    return view('pages.pelanggan.detailPelanggan');
})->name('pelanggan.show');

//Route Master Data -> Jenis Mesin
Route::get('/jenis-mesin', function () {
    return view('pages.master_data.jenis_mesin.jenisMesin');
})->name('jenis-mesin.index');
Route::get('/jenis-mesin/tambah', function () {
    return view('pages.master_data.jenis_mesin.tambahJenisMesin');
})->name('jenis-mesin.create');
Route::get('/master-data/jenis-mesin/detail/{id}', function ($id) {
    return view('pages.master_data.jenis_mesin.detailJenisMesin', compact('id'));
})->name('jenis-mesin.show');
Route::get('/master-data/jenis-mesin/edit/{id}', function ($id) {
    return view('pages.master_data.jenis_mesin.editJenisMesin');
})->name('jenis-mesin.edit');
Route::get('/master-data/jenis-mesin/delete/{id}', function ($id) {
    return view('pages.master_data.jenis_mesin.jenisMesin');
})->name('jenis-mesin.delete');

// Route Master Data -> Jenis Mobil
Route::get('/jenis-mobil', function () {
    return view('pages.master_data.jenis_mobil.jenisMobil');
})->name('jenis-mobil.index');
Route::get('/jenis-mobil/tambah', function () {
    return view('pages.master_data.jenis_mobil.tambahJenisMobil');
})->name('jenis-mobil.create');
Route::get('/jenis-mobil/detail/{id}', function ($id) {
    return view('pages.master_data.jenis_mobil.detailJenisMobil');
})->name('jenis-mobil.show');
Route::get('/jenis-mobil/edit/{id}', function ($id) {
    return view('pages.master_data.jenis_mobil.editJenisMobil');
})->name('jenis-mobil.edit');
Route::get('/jenis-mobil/delete/{id}', function ($id) {
    return view('pages.master_data.jenis_mobil.jenisMobil');
})->name('jenis-mobil.delete');

//Route Master Data -> Kategori Sparepart
Route::get('/kategori-sparepart', function () {
    return view('pages.master_data.kategori_sparepart.kategoriSparepart');
})->name('kategori-sparepart.index');
Route::get('/kategori-sparepart/tambah', function () {
    return view('pages.master_data.kategori_sparepart.tambahKategoriSparepart');
})->name('kategori-sparepart.create');
Route::get('/kategori-sparepart/detail/{id}', function ($id) {
    return view('pages.master_data.kategori_sparepart.detailKategoriSparepart');
})->name('kategori-sparepart.show');
Route::get('/kategori-sparepart/edit/{id}', function ($id) {
    return view('pages.master_data.kategori_sparepart.editKategoriSparepart');
})->name('kategori-sparepart.edit');
Route::get('/kategori-sparepart/delete/{id}', function ($id) {
    return view('pages.master_data.kategori_sparepart.kategoriSparepart');
})->name('kategori-sparepart.delete');

//Route Master Data -> Supplier
Route::get('/supplier', function () {
    return view('pages.master_data.supplier.supplier');
})->name('supplier.index');
Route::get('/supplier/tambah', function () {
    return view('pages.master_data.supplier.tambahSupplier');
})->name('supplier.create');
Route::get('/supplier/detail/{id}', function ($id) {
    return view('pages.master_data.supplier.detailSupplier');
})->name('supplier.show');
Route::get('/supplier/edit/{id}', function ($id) {
    return view('pages.master_data.supplier.editSupplier');
})->name('supplier.edit');
Route::get('/supplier/delete/{id}', function ($id) {
    return view('pages.master_data.supplier.supplier');
})->name('supplier.delete');

// Route Kepegawaian -> Data Karyawan
Route::get('/manajemen-pegawai', function () {
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

// Route Kepegawaian -> Laporan Absensi
Route::get('/laporan-absensi', function () {
    return view('pages.laporan_absensi.laporanAbsensi');
})->name('laporan-absensi.index');

// Route Kepegawaian -> Pendataan Izin
Route::get('/izin-terlambat', function () {
    return view('pages.izin_keterlambatan.manajemenIzinKeterlambatan');
});

// Route Kepegawaian -> Penggajian
Route::get('/payroll', function () {
    return view('pages.payroll.payroll');
});

// Route Layanan Servis -> Penerimaan Servis
Route::get('/manajemen-servis', function () {
    return view('pages.manajemen_servis_mobil.manajemenServisMobil');
});

Route::get('/manajemen-karyawan', function () {
    return view('pages.manajemen_pegawai.data_manajemenPegawai');
});

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});

Route::get('/suku-cadang', function () {
    return view('pages.suku_cadang.sukuCadang');
});
