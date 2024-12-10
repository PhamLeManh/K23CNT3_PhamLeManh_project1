<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KhoaController extends Controller
{
public function index()
{
// Truy vấn đọc dữ liệu từ bảng khoa
$khoas = DB::select('select * from plmkhoa ');
return view('khoa.plmlist',['khoas'=>$khoas]);
}

public function detail($makh)
{
// Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
$khoa = DB::select('select * from plmkhoa where PLMMAKHOA=?',[$makh])[0];
return view('khoa.plmDetail',['khoa'=>$khoa]);
}

}


