@extends('layout.admins.master')
@section('title', 'Sửa Sản Phẩm')

@section('content-body')
<div class="container mt-4">
    <h2 class="rgb-text">Edit Sản Phẩm</h2>

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
    <form action="{{ route('plmAdmins.plmsanpham.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="plmMaSanPham" class="form-label">Mã Sản Phẩm</label>
            <input type="text" class="form-control" id="plmMaSanPham" name="plmMaSanPham" value="{{ $item->plmMaSanPham }}" required>
        </div>
        <div class="mb-3">
            <label for="plmTenSanPham" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="plmTenSanPham" name="plmTenSanPham" value="{{ $item->plmTenSanPham }}" required>
        </div>
        <div class="mb-3">
            <label for="plmHinhAnh" class="form-label">Hình Ảnh (URL)</label>
            <input type="text" class="form-control" id="plmHinhAnh" name="plmHinhAnh" value="{{ $item->plmHinhAnh }}" required>
        </div>
        <div class="mb-3">
            <label for="plmSoLuong" class="form-label">Số Lượng</label>
            <input type="number" class="form-control" id="plmSoLuong" name="plmSoLuong" value="{{ $item->plmSoLuong }}" required>
        </div>
        <div class="mb-3">
            <label for="plmDonGia" class="form-label">Đơn Giá</label>
            <input type="number" class="form-control" id="plmDonGia" name="plmDonGia" value="{{ $item->plmDonGia }}" required>
        </div>
        <div class="mb-3">
            <label for="plmTrangThai" class="form-label">Trạng Thái</label>
            <select class="form-control" id="plmTrangThai" name="plmTrangThai" required>
                <option value="1" {{ $item->plmTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
                <option value="0" {{ $item->plmTrangThai == 0 ? 'selected' : '' }}>Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('plmAdmins.plmsanpham') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
