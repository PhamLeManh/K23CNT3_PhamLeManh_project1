<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    // Phương thức hiển thị danh sách khoa
    public function index()
    {
        // Truy vấn đọc dữ liệu từ bảng plmkhoa
        $khoas = DB::select('select * from plmkhoa');
        return view('khoa.plmlist', ['khoas' => $khoas]);
    }

    // Phương thức hiển thị chi tiết khoa
    public function detail($makh)
    {
        // Truy vấn đọc dữ liệu từ bảng plmkhoa theo mã khoa
        $khoa = DB::select('select * from plmkhoa where PLMMAKHOA = ?', [$makh]);
        // Nếu không tìm thấy dữ liệu, trả về lỗi 404
        if (empty($khoa)) {
            abort(404, 'Khoa không tồn tại');
        }
        return view('khoa.plmDetail', ['khoa' => $khoa[0]]);
    }

    // Phương thức hiển thị form tạo mới khoa
    public function create()
    {
        return view('khoa.plmcreate');
    }

    // Phương thức xử lý việc thêm mới khoa
    public function createSubmit(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'PLMMAKHOA' => 'required|unique:plmkhoa,PLMMAKHOA|max:10',
            'PLMTENKH' => 'required|max:100',
        ]);

        // Thực hiện thêm mới khoa vào bảng plmkhoa
        DB::insert('insert into plmkhoa (PLMMAKHOA, PLMTENKH) values (?, ?)', 
            [$request->PLMMAKHOA, $request->PLMTENKH]);

        // Chuyển hướng về danh sách khoa sau khi thêm thành công
        return redirect('/khoa')->with('success', 'Khoa đã được thêm mới');
    }
    public function plmEdit($makh)
    {
        $khoa = DB::select(query: "Select * from plmkhoa where PLMMAKHOA = ?",bindings: [$makh])[0];
        return view(view:"plmKhoa.plmEdit",data: ['khoa'=>$khoa]);
    } 
}
