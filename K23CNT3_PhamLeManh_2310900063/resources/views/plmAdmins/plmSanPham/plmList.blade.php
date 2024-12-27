
@extends('layout.admins.master') 
@section('title', 'Danh Sách Các Sản Phẩm') 

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="rgb-text">Danh Sách Sản Phẩm ✇</h2>

                <style>
                .rgb-text {
                animation: rgb-animation 5s linear infinite; /* Thời gian, kiểu chuyển động, lặp vô hạn */
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
                <!-- Nút Thêm Mới -->
                <a href="{{ route('plmAdmins.plmsanpham.plmCreate') }}" class="btn btn-primary mb-3">Thêm Mới</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình Ảnh</th>
                            <th>Số Lượng</th>
                            <th>Đơn Giá</th>
                            <th>Trạng Thái</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plmSanPhams as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td> <!-- Thứ tự bắt đầu từ 1 -->
                                <td>{{ $item->plmMaSanPham }}</td>
                                <td>{{ $item->plmTenSanPham }}</td>
                                <td><img src="{{ $item->plmHinhAnh }}" alt="Hình ảnh" width="50"></td>
                                <td>{{ $item->plmSoLuong }}</td>
                                <td>{{ $item->plmDonGia }}</td>
                                <td>{{ $item->plmTrangThai ? 'Hoạt động' : 'Không hoạt động' }}</td>
                                <td>
                                    <!-- Nút Xem (View) -->
                                    <a href="{{ route('plmAdmins.plmsanpham.plmView', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                    
                                    <!-- Nút Sửa (Edit) -->
                                    <a href="{{ route('plmAdmins.plmsanpham.plmEdit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    
                                    <!-- Nút Xóa (Delete) -->
                                    <form action="{{ route('plmAdmins.plmsanpham.plmDelete', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

    