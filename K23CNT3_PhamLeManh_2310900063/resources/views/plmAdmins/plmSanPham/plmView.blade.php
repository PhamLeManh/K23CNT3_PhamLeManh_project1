@extends('layout.admins.master')
@section('title', 'Xem Chi Tiết Sản Phẩm')

@section('content-body')
<div class="container mt-4">
    <h2 class="rgb-text">Chi Tiết Sản Phẩm</h2>

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
    <div class="mb-3">
        <strong>Mã Sản Phẩm:</strong> {{ $item->plmMaSanPham }}
    </div>
    <div class="mb-3">
        <strong>Tên Sản Phẩm:</strong> {{ $item->plmTenSanPham }}
    </div>
    <div class="mb-3">
        <strong>Hình Ảnh:</strong><br>
        <img src="{{ $item->plmHinhAnh }}" alt="Hình ảnh" width="100">
    </div>
    <div class="mb-3">
        <strong>Số Lượng:</strong> {{ $item->plmSoLuong }}
    </div>
    <div class="mb-3">
        <strong>Đơn Giá:</strong> {{ number_format($item->plmDonGia, 0, ',', '.') }} VNĐ
    </div>
    <div class="mb-3">
        <strong>Trạng Thái:</strong> {{ $item->plmTrangThai ? 'Hoạt động' : 'Không hoạt động' }}
    </div>
    <a href="{{ route('plmAdmins.plmsanpham') }}" class="btn btn-secondary">Cancel</a>
</div>
@endsection
