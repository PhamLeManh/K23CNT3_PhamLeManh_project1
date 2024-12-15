<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SinhVienController;

// Danh sách sinh viên
Route::get('/sinhvien', [SinhVienController::class, 'index'])->name('sinhvien.index');

// Xem chi tiết
Route::get('/sinhvien/{id}', [SinhVienController::class, 'show'])->name('sinhvien.show');

// Sửa sinh viên
Route::get('/sinhvien/{id}/edit', [SinhVienController::class, 'edit'])->name('sinhvien.edit');
Route::post('/sinhvien/{id}/update', [SinhVienController::class, 'update'])->name('sinhvien.update');

// Xóa sinh viên
Route::post('/sinhvien/{id}/delete', [SinhVienController::class, 'destroy'])->name('sinhvien.destroy');

// Thêm mới sinh viên
Route::get('/sinhvien/create', [SinhVienController::class, 'create'])->name('sinhvien.create');
Route::post('/sinhvien/store', [SinhVienController::class, 'store'])->name('sinhvien.store');





