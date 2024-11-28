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
    return "<h1>Hello Word<h1>  ";
});
#redirect
Route::redirect('/here','three');
Route::get('/three', function () {
    return "<h1>su dung redirect<h1>  ";
});

#router return view
route::get('/pham-le-manh',function(){
    return view('phamlemanh');
}); 