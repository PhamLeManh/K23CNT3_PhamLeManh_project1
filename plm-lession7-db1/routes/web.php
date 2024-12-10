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

#Khoa
use App\Http\Controllers\KhoaController;
Route::get('/khoa',[KhoaController::class,'index'])->name('khoa.plmlist');


Route::get('/khoa/detail/{makh}',
[KhoaController::class,'detail'])->name('khoa.plmDetail');

Route::get('/khoa/create',[KhoaController::class,'create'])->name('khoa.plmcreate');

Route::post('/khoa/create',[KhoaController::class,'createSubmit'])->name('khoa.createSubmit');

Route::post('/khoa/create-submit', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit');

//


Route::get('/khoa', [KhoaController::class, 'index'])->name('khoa.plmlist');  // Danh sách khoa
Route::get('/khoa/{makh}', [KhoaController::class, 'detail'])->name('khoa.plmDetail'); // Chi tiết khoa
Route::get('/khoa/create', [KhoaController::class, 'create'])->name('khoa.plmcreate');  // Form tạo mới
Route::post('/khoa/create-submit', [KhoaController::class, 'createSubmit'])->name('khoa.createSubmit');  // Xử lý tạo mới
