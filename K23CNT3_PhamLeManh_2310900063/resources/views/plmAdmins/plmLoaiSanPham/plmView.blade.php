@extends('layout.admins.master')

@section('title', 'View Loai San Pham')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h2 class="rgb-text">View Loài Sản Phẩm</h2>

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
                
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->plmMaLoai }}</td>
                        <td>{{ $item->plmTenLoai }}</td>
                        <td>{{ $item->plmTrangThai }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('plmAdmins.plmloaisanpham') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
@endsection
