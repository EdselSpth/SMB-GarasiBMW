<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ServiceTransactionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\EngineTypeController;
use App\Http\Controllers\TransactionItemController;
use App\Http\Controllers\AdditionalIncomeController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\CarWorkController;



// Route buat tamu (yang belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// Route yang cuma bisa diakses kalo udah login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Anggap aja ini halaman dashboard awal
    Route::view('/dashboard', 'backend.dashboard.index')->name('dashboard');

    // Route custom buat update status servis
    Route::put('/transactions/{id}/status', [ServiceTransactionController::class, 'updateStatus'])->name('transactions.updateStatus');

    Route::resource('employees', EmployeeController::class);
    Route::resource('attendances', AttendanceController::class);
    Route::resource('transactions', ServiceTransactionController::class);
    Route::resource('spareparts', SparepartController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('item-categories', ItemCategoryController::class);
    Route::resource('payrolls', PayrollController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('car-types', CarTypeController::class);
    Route::resource('engine-types', EngineTypeController::class);
    Route::resource('transaction-items', TransactionItemController::class)->only(['store', 'destroy']);
    Route::resource('additional-incomes', AdditionalIncomeController::class)->only(['store', 'destroy']);
    Route::resource('savings', SavingController::class);
    Route::resource('car-works', CarWorkController::class);
});

Route::get('/', function () {
    return view('welcome');
});
