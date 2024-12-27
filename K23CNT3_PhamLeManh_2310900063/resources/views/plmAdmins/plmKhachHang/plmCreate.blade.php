@extends('layout.admins.master')
@section('title', 'CreateKhachHang')
@section('content-body')
    <h2>Create New Khách Hàng</h2>
    <form action="{{ route('plmAdmins.plmkhachhang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Mã KH:</label>
            <input type="text" name="plmMaKhachHang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tên KH:</label>
            <input type="text" name="plmHoTenKhachHang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Địa Chỉ:</label>
            <input type="text" name="plmDiaChi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Điện Thoại:</label>
            <input type="text" name="plmDienThoai" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Trạng Thái:</label>
            <select name="plmTrangThai" class="form-control" required>
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
