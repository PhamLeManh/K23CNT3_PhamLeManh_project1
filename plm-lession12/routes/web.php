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