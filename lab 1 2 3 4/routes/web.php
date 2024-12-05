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

Route::get('/greeting', function () {
    return "<h1> Hello Friend </h1>";
});



use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\ViewController;

Route::get('/account',[AccountController::class,'index'])->name('account.index');

route::get('/account-create', [AccountController::class, 'create'])->name('account.create');

Route::get('/account-show',[AccountController::class,'showData'])->name('account.show');


Route::get('/account-list', [AccountController::class, 'list']);


Route::get('/account-getall',[AccountController::class,'getAllAccount'])->name('account.getallaccount');

#Views
Route::get('/view-1',function(){return view('view1');});

Route::get('/view-2',function(){return view('view2',['name'=>'Welcome to,Devmaster']);});
    
Route::get('/view-3',function(){return view('admin.view3',['name'=>'Quản trị nộidung']);});

use App\Http\Controllers\ViewdemoController;

Route::get('/view-4',[ViewdemoController::class,'view4'])->name('viewdemo.view4');

Route::get('/view-5',[ViewdemoController::class,'view5'])->name('viewdemo.view5');

Route::get('/view-6',function(){return view('view6');});

//lab4
Route::get('/view-11',function(){return view('view11',['name'=>'DevmasterAcademy!']);});


Route::get('/view-12',function(){
    return view('view12',[
    
    'name'=>'Devmaster Academy!',
    'arr'=>[1,4,7,2,9],
    ]);
    
    });

    Route::get('/view-13',function(){
        return view('view13',[
        
        'name'=>["Devmaster","Academy","Chung","Trịnh"],
        
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],
        ]);
        
        });
       // 
        use App\Http\Controllers\WelcomeController;

        Route::get('/', [ProductController::class, 'index']);
    
    
        #Template Blade Layout
    Route::get('/home',function(){
        return view('index');
        });
    Route::get('/about-us',function(){
        return view('about');
        });
    Route::get('/contact',function(){
        return view('contact');
        });
        
        