<?php

namespace App\Http\Controllers;

use App\Models\PLM_LOAI_SAN_PHAM; // Make sure the model is imported
use Illuminate\Http\Request;

class PLM_LOAI_SAN_PHAMController extends Controller
{
    public function plmList(){
        
        $plmLoaiSanPhams = PLM_LOAI_SAN_PHAM::all(); // Fetching data from the model
        return view('plmAdmins.plmLoaiSanPham.plmList', ['plmLoaiSanPhams' => $plmLoaiSanPhams]); // Pass the correct variable to the view
    }
 
     // View single product (new method)
     public function plmView($id)
     {
         $item = PLM_LOAI_SAN_PHAM::findOrFail($id);
         return view('plmAdmins.plmLoaiSanPham.plmView', compact('item'));
     }
 
     // Edit product (new method)
     public function plmEdit($id)
     {
         $item = PLM_LOAI_SAN_PHAM::findOrFail($id);
         return view('plmAdmins.plmLoaiSanPham.plmEdit', compact('item'));
     }
 
     // Delete product (new method)
     public function plmDelete($id)
     {
         $item = PLM_LOAI_SAN_PHAM::findOrFail($id);
         $item->delete();
         return redirect()->route('plmAdmins.plmloaisanpham')->with('success', 'Item deleted successfully');
     }
     public function update(Request $request, $id)
{
    // Kiểm tra đầu vào
    $request->validate([
        'plmMaLoai' => 'required|string|max:255',
        'plmTenLoai' => 'required|string|max:255',
        'plmTrangThai' => 'required|in:0,1', // Kiểm tra chỉ nhận 0 hoặc 1 nếu kiểu integer
    ]);

    $item = PLM_LOAI_SAN_PHAM::findOrFail($id);

    // Cập nhật
    $item->update([
        'plmMaLoai' => $request->plmMaLoai,
        'plmTenLoai' => $request->plmTenLoai,
        'plmTrangThai' => $request->plmTrangThai, // Gửi giá trị 0 hoặc 1 nếu kiểu integer
    ]);

    return redirect()->route('plmAdmins.plmloaisanpham')->with('success', 'Item updated successfully');
}

public function plmCreate()
{
    return view('plmAdmins.plmLoaiSanPham.plmCreate');
}
public function store(Request $request)
{
    // Validate the input
    $request->validate([
        'plmMaLoai' => 'required|string|max:255',
        'plmTenLoai' => 'required|string|max:255',
        'plmTrangThai' => 'required|boolean',
    ]);

    // Create a new product
    PLM_LOAI_SAN_PHAM::create([
        'plmMaLoai' => $request->plmMaLoai,
        'plmTenLoai' => $request->plmTenLoai,
        'plmTrangThai' => $request->plmTrangThai,
    ]);

    // Redirect back to the list page
    return redirect()->route('plmAdmins.plmloaisanpham')->with('success', 'Sản phẩm đã được thêm mới!');
}







}
