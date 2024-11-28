<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ViewdemoController extends Controller
{
    public function view4()
{
return view('view4')
->with('name', 'Pham Le Manh')
->with('company', 'Devmaster Academy');;
}
public function view5()
{
// dữ liệu
$info = "VIỆN CÔNG NGHỆ VÀ ĐÀO TẠO DEVMASTER";
$emp = array(
"Name"=>"Pham Le Manh",
"Email"=>"phamlemanh07022005@gmail.com",
"Phone"=>"0799079636",
);
if(View::exists('view5')){
return view('view5',compact('info','emp'));
}else{
return "Không tồn tại view5";
}
}

}

