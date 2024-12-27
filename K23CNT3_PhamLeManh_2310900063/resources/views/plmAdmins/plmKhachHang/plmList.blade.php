@extends('layout.admins.master')
@section('title', 'Danh Sách Khách Hàng Vip')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h2 class="rgb-text">Danh Sách Khách Hàng Vip ✇</h2>

                <style>
                .rgb-text {
                    animation: rgb-animation 5s linear infinite;
                    background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }

                @keyframes rgb-animation {
                    0% { background-position: 0% 50%; }
                    50% { background-position: 100% 50%; }
                    100% { background-position: 0% 50%; }
                }
                </style>
                <a href="{{ route('plmAdmins.plmkhachhang.create') }}" class="btn btn-primary mb-3">Thêm Mới</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>#</th>
                        <th>Mã Khách Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Trạng Thái</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($plmKhachHangs as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->plmMaKhachHang }}</td>
                            <td>{{ $item->plmHoTenKhachHang }}</td>
                            <td>{{ $item->plmDiaChi }}</td>
                            <td>{{ $item->plmDienThoai }}</td>
                            <td>{{ $item->plmTrangThai ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>{{ $item->plmNgayDangKy }}</td>
                            <td>
                                <a href="{{ route('plmAdmins.plmkhachhang.plmView', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('plmAdmins.plmkhachhang.plmEdit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('plmAdmins.khachhang.plmDelete', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Chưa Có Thông Tin Khách Hàng</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
