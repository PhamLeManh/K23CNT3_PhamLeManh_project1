<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PLM_KHACH_HANG;

class PLM_KHACH_HANGController extends Controller
{
    public function plmList()
    {
        $plmKhachHangs = PLM_KHACH_HANG::all();  
        return view('plmAdmins.plmKhachHang.plmList', compact('plmKhachHangs'));
    }

    public function plmView($id)
    {
        $plmKhachHang = PLM_KHACH_HANG::findOrFail($id);
        return view('plmAdmins.plmKhachHang.plmView', compact('plmKhachHang'));
    }

    public function plmEdit($id)
    {
        $plmKhachHang = PLM_KHACH_HANG::findOrFail($id);
        return view('plmAdmins.plmKhachHang.plmEdit', compact('plmKhachHang'));
    }

    // Phương thức để hiển thị form tạo mới khách hàng
    public function plmCreate()
    {
        return view('plmAdmins.plmKhachHang.plmCreate'); // Trả về form tạo khách hàng mới
    }

    // Phương thức để lưu khách hàng mới vào cơ sở dữ liệu
    public function plmStore(Request $request)
    {
        // Validate dữ liệu từ form
        $validated = $request->validate([
            'plmMaKhachHang' => 'required',
            'plmHoTenKhachHang' => 'required',
            'plmDiaChi' => 'required',
            'plmDienThoai' => 'required',
        ]);

        // Lưu khách hàng mới vào cơ sở dữ liệu
        $plmKhachHang = new PLM_KHACH_HANG();
        $plmKhachHang->plmMaKhachHang = $request->plmMaKhachHang;
        $plmKhachHang->plmHoTenKhachHang = $request->plmHoTenKhachHang;
        $plmKhachHang->plmDiaChi = $request->plmDiaChi;
        $plmKhachHang->plmDienThoai = $request->plmDienThoai;
        $plmKhachHang->plmTrangThai = $request->plmTrangThai;
        $plmKhachHang->save();

        return redirect()->route('plmAdmins.plmkhachhang')->with('success', 'Khách hàng đã được tạo mới!');

    }
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'plmMaKhachHang' => 'required',
        'plmHoTenKhachHang' => 'required',
        'plmDiaChi' => 'required',
        'plmDienThoai' => 'required',
        'plmTrangThai' => 'required|integer',
    ]);

    $plmKhachHang = PLM_KHACH_HANG::findOrFail($id);
    $plmKhachHang->plmMaKhachHang = $request->plmMaKhachHang;
    $plmKhachHang->plmHoTenKhachHang = $request->plmHoTenKhachHang;
    $plmKhachHang->plmDiaChi = $request->plmDiaChi;
    $plmKhachHang->plmDienThoai = $request->plmDienThoai;
    $plmKhachHang->plmTrangThai = $request->plmTrangThai;
    $plmKhachHang->save();

    return redirect()->route('plmAdmins.plmkhachhang')->with('success', 'Cập nhật khách hàng thành công!');
}

    

    public function plmDelete($id)
    {
        $plmKhachHang = PLM_KHACH_HANG::findOrFail($id);
        $plmKhachHang->delete();
        return redirect()->route('plmAdmins.plmkhachhang')->with('success', 'Deleted successfully!');
    }
}
