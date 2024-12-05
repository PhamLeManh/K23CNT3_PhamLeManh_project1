<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // của account-getall không có thì không chạy được

class AccountController extends Controller
{
    public function index()
    {
        return "<h1>Account Controller; action index; return string</h1>";
    }
    
    public function create()
    {
        return view("account-create");
    }

        // action: return view and data
    public function showData()
    {

        // Trả về view có tên account-show trong thư mục \\resources\views\account-show.blade.php

        $data = array('2310900019','Pham Le Manh');
        return view('account-show',compact('data'));
    }

    public function list()
    {
        // Dữ liệu
        $data = array(
            ["id" => 1, "UserName" => "NHD", "Password" => "123456a@", "FullName" => "Pham Le Manh"],
            ["id" => 2, "UserName" => "Devmaster", "Password" => "123456a@", "FullName" => "Devmaster Academy"]
        );

        // Trả về view và data
        return view('account-list', compact('data'));
        //  return view("account-list");
    }


    // get database
public function getAllAccount()
    {
        $data = DB::table('account')->get();
        return view('account-getall',compact('data'));
    }
    

    // xong lad 3
}
