<?php

use App\Http\Controllers\plmSessionController;
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

#Session
use App\Http\Controllers\SessionController;
Route::get('/session/get', [plmSessionController::class,'plmgetSessionData'])->name('session.get');
Route::get('/session/set', [plmSessionController::class,'plmstoreSessionData'])->name('session.set');
Route::get('/session/delete', [plmSessionController::class,'plmdeleteSessionData'])->name('session.delete');

use App\Http\Controllers\ControllerAccount;
Route::get('/Login',[ControllerAccount::class,'plmLogin'])->name('plmaccount.plmLogin');
Route::get('/plm-login',[ControllerAccount::class,'plmLoginSubmmit'])->name('plmaccount.plmLoginsubmit');

