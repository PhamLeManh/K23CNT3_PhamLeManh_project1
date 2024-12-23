<?php

use App\Http\Controllers\PLM_LOAI_SAN_PHAMController;
use App\Http\Controllers\PLM_QUAN_TRIController;
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

Route::get('/admins/plm-login', [PLM_QUAN_TRIController::class, 'plmLogin'])->name('admins.plmLogin');

Route::post('/plm-login-submit', [PLM_QUAN_TRIController::class, 'plmLoginSubmit'])->name('plmaccount.plmLoginsubmit');

// Admins route
Route::get('/plm-admins', function () {
    return view('PlmAdmins.index');
});

Route::get('/plm-admins/plmLoaiSanPham',[PLM_LOAI_SAN_PHAMController::class,'plmList'])->name('plmadmins.plmLoaiSanPham');

use App\Http\Controllers\LoaiSanPhamController;

Route::prefix('loai-san-pham')->group(function () {
    Route::get('/view/{id}', [PLM_LOAI_SAN_PHAMController::class, 'view'])->name('plmLoaiSanPham.view');
    Route::get('/edit/{id}', [PLM_LOAI_SAN_PHAMController::class, 'edit'])->name('plmLoaiSanPham.edit');
    Route::delete('/delete/{id}', [PLM_LOAI_SAN_PHAMController::class, 'delete'])->name('plmLoaiSanPham.delete');
});


Route::get('/plm-admins', [PLM_LOAI_SAN_PHAMController::class, 'plmList'])->name('plmLoaiSanPham.index');

Route::delete('/loai-san-pham/destroy/{id}', [PLM_LOAI_SAN_PHAMController::class, 'destroy'])->name('plmLoaiSanPham.destroy');


Route::get('/plm-loai-san-pham/create', [PLM_LOAI_SAN_PHAMController::class, 'create'])->name('plmLoaiSanPham.create');
Route::post('/plm-loai-san-pham/store', [PLM_LOAI_SAN_PHAMController::class, 'store'])->name('plmLoaiSanPham.store');



Route::get('/plm-loai-san-pham', [PLM_LOAI_SAN_PHAMController::class, 'plmList'])->name('plmLoaiSanPham.list');



Route::put('/plm-loai-san-pham/{id}', [PLM_LOAI_SAN_PHAMController::class, 'update'])->name('plmLoaiSanPham.update');

