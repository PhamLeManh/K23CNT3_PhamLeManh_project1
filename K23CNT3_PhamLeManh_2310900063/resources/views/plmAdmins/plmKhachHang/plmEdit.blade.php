@extends('layout.admins.master')
@section('title', 'Edit KhachHang')
@section('content-body')
    <h2>Chỉnh Sửa Khách Hàng</h2>
    <form action="{{ route('plmAdmins.plmkhachhang.update', ['id' => $plmKhachHang->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- This simulates a PUT request -->

        <div class="form-group">
            <label>Mã KH:</label>
            <input type="text" name="plmMaKhachHang" value="{{ $plmKhachHang->plmMaKhachHang }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Tên KH:</label>
            <input type="text" name="plmHoTenKhachHang" value="{{ $plmKhachHang->plmHoTenKhachHang }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Địa Chỉ:</label>
            <input type="text" name="plmDiaChi" value="{{ $plmKhachHang->plmDiaChi }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Điện Thoại:</label>
            <input type="text" name="plmDienThoai" value="{{ $plmKhachHang->plmDienThoai }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Trạng Thái:</label>
            <select name="plmTrangThai" class="form-control">
                <option value="1" {{ $plmKhachHang->plmTrangThai ? 'selected' : '' }}>Hoạt động</option>
                <option value="0" {{ !$plmKhachHang->plmTrangThai ? 'selected' : '' }}>Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('plmAdmins.plmkhachhang') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
