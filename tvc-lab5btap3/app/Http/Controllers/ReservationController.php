<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Thêm các phương thức xử lý logic tại đây
    public function create()
    {
        return view('reservation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'arrival_date' => 'required|date',
            'nights' => 'required|integer|min:1',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
            'room_type' => 'required',
            'bed_type' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        // Lưu dữ liệu vào database
        // ...

        return redirect()->back()->with('success', 'Đặt phòng thành công!');
    }
}
