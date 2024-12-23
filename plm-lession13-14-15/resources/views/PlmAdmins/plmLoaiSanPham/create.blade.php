@extends('layout.admins.master')

@section('title', 'Tạo Mới Loại Sản Phẩm')

@section('content-body')
<div class="container">
    <h1>Tạo Mới Loại Sản Phẩm</h1>
    <form action="{{ route('plmLoaiSanPham.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="plmMaLoai" class="form-label">Mã Loại</label>
            <input type="text" class="form-control" id="plmMaLoai" name="plmMaLoai" required>
        </div>
        <div class="mb-3">
            <label for="plmTenLoai" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" id="plmTenLoai" name="plmTenLoai" required>
        </div>
        <div class="mb-3">
            <label for="plmTrangThai" class="form-label">Trạng Thái</label>
            <select class="form-control" id="plmTrangThai" name="plmTrangThai" required>
                <option value="1">Hoạt Động</option>
                <option value="0">Không Hoạt Động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tạo Mới</button>
        <a href="{{ route('plmLoaiSanPham.list') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
