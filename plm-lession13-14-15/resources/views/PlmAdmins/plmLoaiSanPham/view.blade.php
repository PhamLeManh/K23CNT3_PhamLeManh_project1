@extends('layout.admins.master')
@section('title', 'Chi Tiết Loại Sản Phẩm')
@section('content-body')
<div class="container">
    <h1>Chi Tiết Loại Sản Phẩm</h1>
    <p><strong>Mã Loại:</strong> {{ $loaiSanPham->plmMaLoai }}</p>
    <p><strong>Tên Loại:</strong> {{ $loaiSanPham->plmTenLoai }}</p>
    <p><strong>Trạng Thái:</strong> {{ $loaiSanPham->plmTrangThai }}</p>
    <a href="{{ route('plmLoaiSanPham.index') }}" class="btn btn-secondary">Quay Lại</a>
</div>
@endsection
