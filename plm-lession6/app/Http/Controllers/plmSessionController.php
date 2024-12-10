<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class plmSessionController extends Controller
{
#Đọc dữ liệu từ session
public function plmgetSessionData(Request $request)
{
if($request->session()->has('k23cnt3_phamlemanh'))
{
echo $request->session()->get('k23cnt3_phamlemanh');
}
else
{
echo "<h2> Không có dữ liệu trong session </h2>";
}
}
#Lưu dữ liệu vào session
public function plmstoreSessionData(Request $request)
{
$request->session()->put('k23cnt3_phamlemanh','Devmaster Academy');
echo "<h2> Dữ liệu đã được lưu và session </h2>";
}
#Xóa dữ liệu trong session
public function plmdeleteSessionData(Request $request)
{
$request->session()->forget('k23cnt3_phamlemanh');
echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
}
}