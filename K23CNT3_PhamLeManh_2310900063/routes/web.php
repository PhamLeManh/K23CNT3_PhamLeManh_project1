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

// Admins route
Route::get('/plm-admins', function () {
    return view('PlmAdmins.index');
});
Route::get('/plm-dulieu', function () {
    return view('PlmAdmins.dulieu');
});

use App\Http\Controllers\PLM_LOAI_SAN_PHAMController;


Route::get('/plm-admins/plm-loaisanpham', [PLM_LOAI_SAN_PHAMController::class, 'plmList'])->name('plmAdmins.plmloaisanpham');



//

Route::get('/plm-admins/plm-loaisanpham/view/{id}', [PLM_LOAI_SAN_PHAMController::class, 'plmView'])->name('plmAdmins.plmloaisanpham.plmView');
Route::get('/plm-admins/plm-loaisanpham/edit/{id}', [PLM_LOAI_SAN_PHAMController::class, 'plmEdit'])->name('plmAdmins.plmloaisanpham.plmEdit');
Route::delete('/plm-admins/plm-loaisanpham/delete/{id}', [PLM_LOAI_SAN_PHAMController::class, 'plmDelete'])->name('plmAdmins.plmloaisanpham.plmDelete');
Route::put('/plm-admins/plm-loaisanpham/update/{id}', [PLM_LOAI_SAN_PHAMController::class, 'update'])->name('plmAdmins.plmloaisanpham.update');

// Routes for PLM_LOAI_SAN_PHAM
Route::get('/plm-admins/plm-loaisanpham/create', [PLM_LOAI_SAN_PHAMController::class, 'plmCreate'])->name('plmAdmins.plmloaisanpham.plmCreate');
Route::post('/plm-admins/plm-loaisanpham', [PLM_LOAI_SAN_PHAMController::class, 'store'])->name('plmAdmins.plmloaisanpham.store');

use App\Http\Controllers\PLM_QUAN_TRIController;


Route::get('/login', [PLM_QUAN_TRIController::class, 'plmLogin'])->name('plmaccount.plmLogin');  // Route hiển thị form đăng nhập
Route::post('/login', [PLM_QUAN_TRIController::class, 'plmLoginSubmit'])->name('plmaccount.plmLoginsubmit');  // Route xử lý đăng nhập




Route::post('/login', [PLM_QUAN_TRIController::class, 'login'])->name('plmAdmins.login');


Route::get('/plm-admins', [PLM_QUAN_TRIController::class, 'index'])->name('plmAdmins.index');


use App\Http\Controllers\PLM_SAN_PHAMController;

Route::get('/plm-admins/plm-sanpham', [PLM_SAN_PHAMController::class, 'plmList'])->name('plmAdmins.plmsanpham');


Route::get('/plm-admins/plm-sanpham/view/{id}', [PLM_SAN_PHAMController::class, 'plmView'])->name('plmAdmins.plmsanpham.plmView');
Route::get('/plm-admins/plm-sanpham/edit/{id}', [PLM_SAN_PHAMController::class, 'plmEdit'])->name('plmAdmins.plmsanpham.plmEdit');
Route::delete('/plm-admins/plm-sanpham/delete/{id}', [PLM_SAN_PHAMController::class, 'plmDelete'])->name('plmAdmins.plmsanpham.plmDelete');
Route::put('/plm-admins/plm-sanpham/update/{id}', [PLM_SAN_PHAMController::class, 'update'])->name('plmAdmins.plmsanpham.update');


// Routes for PLM_LOAI_SAN_PHAM
Route::get('/plm-admins/plm-sanpham/create', [PLM_SAN_PHAMController::class, 'plmCreate'])->name('plmAdmins.plmsanpham.plmCreate');
Route::post('/plm-admins/plm-sanpham', [PLM_SAN_PHAMController::class, 'store'])->name('plmAdmins.plmsanpham.store');

use App\Http\Controllers\PLM_KHACH_HANGController;
Route::get('/plm-admins/plm-khachhang', [PLM_KHACH_HANGController::class, 'plmList'])->name('plmAdmins.plmkhachhang');
Route::get('/plm-admins/plm-khachhang/view/{id}', [PLM_KHACH_HANGController::class, 'plmView'])->name('plmAdmins.plmkhachhang.plmView');
Route::get('/plm-admins/plm-khachhang/edit/{id}', [PLM_KHACH_HANGController::class, 'plmEdit'])->name('plmAdmins.plmkhachhang.plmEdit');
Route::delete('/plm-admins/plm-khachhang/delete/{id}', [PLM_KHACH_HANGController::class, 'plmDelete'])->name('plmAdmins.khachhang.plmDelete');
Route::put('/plm-admins/plm-khachhang/update/{id}', [PLM_KHACH_HANGController::class, 'update'])->name('plmAdmins.plmkhachhang.update');

// Route để hiển thị form tạo khách hàng mới
Route::get('plm-admins/plm-khachhang/create', [PLM_KHACH_HANGController::class, 'plmCreate'])->name('plmAdmins.plmkhachhang.create');

// Route để lưu khách hàng mới
Route::post('plm-admins/plm-khachhang/store', [PLM_KHACH_HANGController::class, 'plmStore'])->name('plmAdmins.plmkhachhang.store');


use App\Http\Controllers\PLM_HOA_DONController;

Route::get('/plm-admins/plm-hoadon', [PLM_HOA_DONController::class, 'plmList'])->name('plmAdmins.plmhoadon');



use App\Http\Controllers\PLM_CT_HOA_DONController;

Route::get('/plm-admins/plm-cthoadon', [PLM_CT_HOA_DONController::class, 'plmList'])->name('plmAdmins.plmcthoadon');
