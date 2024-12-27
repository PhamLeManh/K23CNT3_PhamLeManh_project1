<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PLM_HOA_DON;

class PLM_HOA_DONController extends Controller
{
    public function plmList()
    {
        $hoaDons = PLM_HOA_DON::all();
        return view('plmAdmins.plmHoaDon.plmList', compact('hoaDons'));
    }

}
