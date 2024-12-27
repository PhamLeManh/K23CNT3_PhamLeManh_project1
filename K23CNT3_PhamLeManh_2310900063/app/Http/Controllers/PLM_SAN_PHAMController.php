<?php

namespace App\Http\Controllers;

use App\Models\PLM_SAN_PHAM; // Sử dụng model PLM_SAN_PHAM
use Illuminate\Http\Request;

class PLM_SAN_PHAMController extends Controller
{
    public function plmList()
    {
        // Lấy tất cả sản phẩm với trạng thái hoạt động (plmTrangThai = 0)
        $plmSanPhams = PLM_SAN_PHAM::select('id', 'plmMaSanPham', 'plmTenSanPham', 'plmHinhAnh', 'plmSoLuong', 'plmDonGia', 'plmTrangThai')
            ->where('plmTrangThai', 0)
            ->get();

        return view('plmAdmins.plmSanPham.plmList', ['plmSanPhams' => $plmSanPhams]);
    }

    public function plmView($id)
    {
        $item = PLM_SAN_PHAM::findOrFail($id);
        return view('plmAdmins.plmSanPham.plmView', compact('item'));
    }

    public function plmEdit($id)
    {
        $item = PLM_SAN_PHAM::findOrFail($id);
        return view('plmAdmins.plmSanPham.plmEdit', compact('item'));
    }

    public function plmDelete($id)
    {
        $item = PLM_SAN_PHAM::findOrFail($id);
        $item->delete();
        return redirect()->route('plmAdmins.plmsanpham')->with('success', 'Sản phẩm đã được xóa thành công!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'plmMaSanPham' => 'required|string|max:255',
            'plmTenSanPham' => 'required|string|max:255',
            'plmTrangThai' => 'required|in:0,1',
            'plmSoLuong' => 'required|integer|min:0',
            'plmDonGia' => 'required|numeric|min:0',
        ]);

        $item = PLM_SAN_PHAM::findOrFail($id);

        $item->update([
            'plmMaSanPham' => $request->plmMaSanPham,
            'plmTenSanPham' => $request->plmTenSanPham,
            'plmTrangThai' => $request->plmTrangThai,
            'plmSoLuong' => $request->plmSoLuong,
            'plmDonGia' => $request->plmDonGia,
        ]);

        return redirect()->route('plmAdmins.plmsanpham')->with('success', 'Sản phẩm đã được cập nhật!');
    }

    public function plmCreate()
    {
        return view('plmAdmins.plmSanPham.plmCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plmMaSanPham' => 'required|string|max:255',
            'plmTenSanPham' => 'required|string|max:255',
            'plmTrangThai' => 'required|boolean',
            'plmSoLuong' => 'required|integer|min:0',
            'plmDonGia' => 'required|numeric|min:0',
        ]);

        PLM_SAN_PHAM::create([
            'plmMaSanPham' => $request->plmMaSanPham,
            'plmTenSanPham' => $request->plmTenSanPham,
            'plmTrangThai' => $request->plmTrangThai,
            'plmSoLuong' => $request->plmSoLuong,
            'plmDonGia' => $request->plmDonGia,
            'plmHinhAnh' => $request->plmHinhAnh,
        ]);

        return redirect()->route('plmAdmins.plmsanpham')->with('success', 'Sản phẩm đã được thêm mới!');
    }
}
