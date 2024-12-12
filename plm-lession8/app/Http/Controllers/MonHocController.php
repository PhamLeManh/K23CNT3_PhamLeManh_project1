<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonHocController extends Controller
{
    // Đọc toàn bộ dữ liệu trong bảng môn học 
    public function getMonHocs()
    {
        $monHocs = DB::table('MonHoc')->get();
        return view('monhoc.index', ['monHocs' => $monHocs]);
    }

    // Đọc chi tiết thông tin môn học theo mã môn
    public function getMonHocById($mamh)
    {
        $monHoc = DB::table('MonHoc')->where('MaMH', $mamh)->first();

        if (!$monHoc) {
            return response()->json(['message' => 'Môn học không tồn tại'], 404);
        }

        return view('monhoc.detail', ['monHoc' => $monHoc]);
    }

    // Create Form
    public function create()
    {
        return view('monhoc.create');
    }

    // Create Form Submit
    public function createSubmit(Request $request)
    {
        DB::table('MonHoc')->insert([
            'MaMH' => $request->MaMH,
            'TenMH' => $request->TenMH,
            'Sotiet' => $request->Sotiet,
        ]);
        return redirect('/monhoc');
    }

    // Edit Form
    public function edit($mamh)
    {
        $monHoc = DB::table('MonHoc')->where('MaMH', $mamh)->first();

        if (!$monHoc) {
            return redirect()->route('monhoc.index')->with('error', 'Môn học không tồn tại.');
        }

        return view('monhoc.edit', ['monHoc' => $monHoc]);
    }

    // Edit Submit (Cập nhật môn học)
    public function editSubmit(Request $request, $mamh)
    {
        // Validate the input
        $validated = $request->validate([
            'TenMH' => 'required|string|max:255',
            'Sotiet' => 'required|integer|min:0',
        ]);

        // Cập nhật thông tin môn học trong cơ sở dữ liệu
        DB::table('MonHoc')->where('MaMH', $mamh)->update([
            'TenMH' => $validated['TenMH'],
            'Sotiet' => $validated['Sotiet'],
        ]);

        return redirect()->route('monhoc.index')->with('success', 'Môn học đã được cập nhật.');
    }

        // delete -> $mamh
    public function delete($mamh)
    {
    DB::table('MonHoc')->where('MaMH','=', $mamh)->delete();
    return redirect('/monhoc');
    }
}

