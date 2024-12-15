<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;

class SinhVienController extends Controller
{
    // Danh sách sinh viên
    public function index()
    {
        $sinhViens = SinhVien::all();
        return view('sinhvien.index', compact('sinhViens'));
    }

    // Chi tiết sinh viên
    public function show($id)
    {
        $sinhVien = SinhVien::findOrFail($id);
        return view('sinhvien.show', compact('sinhVien'));
    }

    // Form thêm mới
    public function create()
    {
        return view('sinhvien.create');
    }

    // Lưu sinh viên mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'MaSV' => 'required|unique:sinhviens', // Use correct table name
            'HoSV' => 'required',
            'TenSV' => 'required',
            'Phai' => 'required',
            'NgaySinh' => 'required|date',
            'NoiSinh' => 'required',
            'MaKH' => 'required',
            'HocBong' => 'required|numeric',
            'DiemTrungBinh' => 'required|numeric',
        ]);

        try {
            SinhVien::create($validated);
            return redirect()->route('sinhvien.index')->with('success', 'Thêm sinh viên thành công');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }

    // Form chỉnh sửa
    public function edit($id)
    {
        $sinhVien = SinhVien::findOrFail($id);
        return view('sinhvien.edit', compact('sinhVien'));
    }

    // Cập nhật sinh viên
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'MaSV' => 'required|unique:sinhviens,MaSV,' . $id, // Ignore current record
            'HoSV' => 'required',
            'TenSV' => 'required',
            'Phai' => 'required',
            'NgaySinh' => 'required|date',
            'NoiSinh' => 'required',
            'MaKH' => 'required',
            'HocBong' => 'required|numeric',
            'DiemTrungBinh' => 'required|numeric',
        ]);

        try {
            $sinhVien = SinhVien::findOrFail($id);
            $sinhVien->update($validated);
            return redirect()->route('sinhvien.index')->with('success', 'Cập nhật sinh viên thành công');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }

    // Xóa sinh viên
    public function destroy($id)
    {
        try {
            $sinhVien = SinhVien::findOrFail($id);
            $sinhVien->delete();
            return redirect()->route('sinhvien.index')->with('success', 'Xóa sinh viên thành công');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }
}
