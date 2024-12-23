@extends('layout.admins.master')

@section('title', 'Chỉnh Sửa Loại Sản Phẩm')

@section('content-body')
<div class="container">
    <h1>Chỉnh Sửa Loại Sản Phẩm</h1>
    <form action="{{ route('plmLoaiSanPham.update', $loaiSanPham->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="plmMaLoai" class="form-label">Mã Loại</label>
            <input type="text" class="form-control" id="plmMaLoai" name="plmMaLoai" value="{{ $loaiSanPham->plmMaLoai }}" required>
        </div>
        <div class="mb-3">
            <label for="plmTenLoai" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" id="plmTenLoai" name="plmTenLoai" value="{{ $loaiSanPham->plmTenLoai }}" required>
        </div>
        <div class="mb-3">
            <label for="plmTrangThai" class="form-label">Trạng Thái</label>
            <select class="form-control" id="plmTrangThai" name="plmTrangThai" required>
                <option value="1" {{ $loaiSanPham->plmTrangThai == 1 ? 'selected' : '' }}>Hoạt Động</option>
                <option value="0" {{ $loaiSanPham->plmTrangThai == 0 ? 'selected' : '' }}>Không Hoạt Động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        <a href="{{ route('plmLoaiSanPham.list') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
