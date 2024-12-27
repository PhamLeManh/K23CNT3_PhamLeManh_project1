@extends('layout.admins.master')

@section('title', 'View Khách Hàng')

@section('content-body')
    <h2>Thông Tin Khách Hàng</h2>
    <p>Mã KH: {{ $plmKhachHang->plmMaKhachHang }}</p>
    <p>Tên KH: {{ $plmKhachHang->plmHoTenKhachHang }}</p>
    <p>Địa Chỉ: {{ $plmKhachHang->plmDiaChi }}</p>
    <p>Điện Thoại: {{ $plmKhachHang->plmDienThoai }}</p>
    <p>Trạng Thái: {{ $plmKhachHang->plmTrangThai ? 'Hoạt động' : 'Không hoạt động' }}</p>
    
    <!-- Nút Hủy (Quay lại danh sách khách hàng hoặc trang trước) -->
    <a href="{{ route('plmAdmins.plmkhachhang') }}" class="btn btn-secondary">Cancel</a>
@endsection

