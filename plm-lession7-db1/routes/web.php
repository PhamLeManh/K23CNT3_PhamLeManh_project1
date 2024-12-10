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
