@extends('layout.admins.master') 
@section('title', 'Danh Sach Loai San Pham') 

@section('content-body')
    <div class="container border">
        <div class="row"> 
            <div class="col-12">
                <h2 class="rgb-text">Danh Sách Loại Sản Phẩm ✇</h2>

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
                <a href="{{ route('plmAdmins.plmloaisanpham.plmCreate') }}" class="btn btn-primary mb-3">Thêm Mới</a>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($plmLoaiSanPhams as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->plmMaLoai }}</td>
                        <td>{{ $item->plmTenLoai }}</td>
                        <td>{{ $item->plmTrangThai }}</td>
                        <td>
                            <!-- View Button -->
                            <a href="{{ route('plmAdmins.plmloaisanpham.plmView', $item->id) }}" class="btn btn-info btn-sm">View</a>
                            
                            <!-- Edit Button -->
                            <a href="{{ route('plmAdmins.plmloaisanpham.plmEdit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Delete Button (with confirmation) -->
                            <form action="{{ route('plmAdmins.plmloaisanpham.plmDelete', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Chưa Có Thông Tin Sản Phẩm</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

