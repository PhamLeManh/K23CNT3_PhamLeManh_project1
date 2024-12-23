@extends('layout.admins.master')

@section('title', 'Xóa Loại Sản Phẩm')

@section('content-body')
<div class="container">
    <h1>Xóa Loại Sản Phẩm</h1>
    <p>Bạn có chắc chắn muốn xóa loại sản phẩm này?</p>
    <p><strong>Mã Loại:</strong> {{ $loaiSanPham->plmMaLoai }}</p>
    <p><strong>Tên Loại:</strong> {{ $loaiSanPham->plmTenLoai }}</p>
    <p><strong>Trạng Thái:</strong> {{ $loaiSanPham->plmTrangThai }}</p>
    <form action="{{ route('plmLoaiSanPham.destroy', $loaiSanPham->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('plmLoaiSanPham.list') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
