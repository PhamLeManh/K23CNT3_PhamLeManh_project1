<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PLM_QUAN_TRIController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'plmEmail' => 'required|email',
            'plmMatKhau' => 'required',
        ]);

        // Check if the user exists in the database
        $user = DB::table('PLM_QUAN_TRI')->where('plmTaiKhoan', $request->plmEmail)->first();

        // Validate password
        if ($user && Hash::check($request->plmMatKhau, $user->plmMatKhau)) {
            
            session(['user' => $user]);

            return redirect()->route('plmAdmins.index'); 
        }

        return back()->withErrors(['message' => 'Email hoặc mật khẩu không đúng']); 
    }

    public function index()
    {
        
        return view('plmAdmins.index');
    }
}
