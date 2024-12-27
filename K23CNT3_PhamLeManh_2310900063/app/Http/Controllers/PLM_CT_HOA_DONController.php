<?php

namespace App\Http\Controllers;

use App\Models\PLM_CT_HOA_DON;
use Illuminate\Http\Request;

class PLM_CT_HOA_DONController extends Controller
{
    // Hàm để hiển thị danh sách các hóa đơn
    public function plmList()
    {
        // Lấy tất cả các dữ liệu từ bảng PLM_CT_HOA_DON
        $hoaDons = PLM_CT_HOA_DON::all();

        // Trả về view 'plmList' và truyền dữ liệu
        return view('plmAdmins.plmCTHoaDon.plmList', compact('hoaDons'));
    }
}
