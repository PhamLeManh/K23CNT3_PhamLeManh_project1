<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PLM_LOAI_SAN_PHAM;

class PLM_LOAI_SAN_PHAMController extends Controller
{
    public function plmList(){
        $plmLoaiSanPham = PLM_LOAI_SAN_PHAM::all();
        return view('PlmAdmins.plmLoaiSanPham.plm-list', ['plmLoaiSanPham' => $plmLoaiSanPham]);
    }

    // Phương thức view sản phẩm
    public function view($id)
    {
        $loaiSanPham = PLM_LOAI_SAN_PHAM::findOrFail($id);
        return view('PlmAdmins.plmLoaiSanPham.view', compact('loaiSanPham'));  // Đảm bảo đường dẫn đúng
    }

    // Phương thức chỉnh sửa sản phẩm
    public function edit($id)
    {
        $loaiSanPham = PLM_LOAI_SAN_PHAM::findOrFail($id);
        return view('PlmAdmins.plmLoaiSanPham.edit', compact('loaiSanPham'));  // Đảm bảo đường dẫn đúng
    }

    // Phương thức xóa sản phẩm
    public function delete($id)
    {
        $loaiSanPham = PLM_LOAI_SAN_PHAM::findOrFail($id);
        $loaiSanPham->delete();
        return redirect()->route('plmLoaiSanPham.list')->with('success', 'Đã xóa loại sản phẩm thành công.');
    }

public function create()
{
    return view('PlmAdmins.plmLoaiSanPham.create');
}

public function store(Request $request)
{
    $request->validate([
        'plmMaLoai' => 'required|string|max:255',
        'plmTenLoai' => 'required|string|max:255',
        'plmTrangThai' => 'required|boolean',
    ]);

    PLM_LOAI_SAN_PHAM::create([
        'plmMaLoai' => $request->plmMaLoai,
        'plmTenLoai' => $request->plmTenLoai,
        'plmTrangThai' => $request->plmTrangThai,
    ]);

    return redirect()->route('plmLoaiSanPham.list')->with('success', 'Tạo mới loại sản phẩm thành công.');
}
public function update(Request $request, $id)
{
    $request->validate([
        'plmMaLoai' => 'required|string|max:255',
        'plmTenLoai' => 'required|string|max:255',
        'plmTrangThai' => 'required|boolean',
    ]);

    $loaiSanPham = PLM_LOAI_SAN_PHAM::findOrFail($id);
    $loaiSanPham->update([
        'plmMaLoai' => $request->plmMaLoai,
        'plmTenLoai' => $request->plmTenLoai,
        'plmTrangThai' => $request->plmTrangThai,
    ]);

    return redirect()->route('plmLoaiSanPham.list')->with('success', 'Cập nhật loại sản phẩm thành công.');
}


}
