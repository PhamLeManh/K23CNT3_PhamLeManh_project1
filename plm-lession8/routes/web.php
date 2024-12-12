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

#MonHoc - Query Buider And CRUD
use App\Http\Controllers\MonHocController;
Route::get('/monhoc',[MonHocController::class,'getMonHocs'])->name('monhoc.index');
//
Route::get('/monhoc/detail/{mamh}',[MonHocController::class,'getMonHocById'])->name('monhoc.detail');

# thêm mới
Route::get('/monhoc/create',[MonHocController::class,'create'])->name('monhoc.create');
Route::post('/monhoc/create',[MonHocController::class,'createSubmit'])->name('monhoc.createSubmit');

// Route to display the edit form for a subject (with the subject code `mamh`)
Route::get('/monhoc/edit/{mamh}', [MonHocController::class, 'edit'])->name('monhoc.edit');

// Route to handle the form submission for updating the subject information
Route::post('/monhoc/edit/{mamh}', [MonHocController::class, 'editSubmit'])->name('monhoc.editSubmit');


## Xóa thông tin môn học
Route::get('/monhoc/delete/{mamh}',[MonHocController::class,'delete'])->name('monhoc.delete');



