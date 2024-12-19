<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PLM_QUAN_TRIController extends Controller
{
    // GET request for login page
    public function plmLogin()
    {
        return view('PlmLogin.plm-login');
    }

    // POST request for submitting login
    public function plmLoginSubmit(Request $request)
    {
        // Bạn có thể xử lý logic login tại đây, ví dụ kiểm tra thông tin đăng nhập
        // Giả sử thông tin hợp lệ, bạn có thể chuyển hướng về trang dashboard
        // hoặc trả về thông báo lỗi nếu sai
        return view('PlmLogin.plm-login');
    }
}
