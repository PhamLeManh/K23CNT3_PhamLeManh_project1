<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PLM_QUAN_TRIController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'plmEmail' => 'required|email',
            'plmMatKhau' => 'required',
        ]);

        $user = DB::table('PLM_QUAN_TRI')->where('plmTaiKhoan', $request->plmEmail)->first();

        if ($user && Hash::check($request->plmMatKhau, $user->plmMatKhau)) {
            // Lưu thông tin người dùng vào session hoặc sử dụng auth nếu cần
            session(['user' => $user]);

            return redirect()->route('plmAdmins.index'); 
        }

        return back()->withErrors(['message' => 'Email hoặc mật khẩu không đúng']);
    }

    public function index()
    {
        // Logic xử lý cho trang index
        return view('plmAdmins.index'); // Trả về view (ví dụ)
    }
}

