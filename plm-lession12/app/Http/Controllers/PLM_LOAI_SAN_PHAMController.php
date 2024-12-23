<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PLM_LOAI_SAN_PHAM;

class PLM_LOAI_SAN_PHAMController extends Controller
{
    public function plmList(){
        $plmLoaiSanPham = PLM_LOAI_SAN_PHAM::all();

        return view('PlmAdmins.plmLoaiSanPham.plm-list',['plmLoaiSanPham'=>$plmLoaiSanPham]);
    }
}
