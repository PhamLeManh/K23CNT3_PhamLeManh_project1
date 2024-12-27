@extends('layout.admins.master') 
@section('title', 'Danh Sách Hóa Đơn') 
@section('content-body')
<div class="container-body">
    <h2 class="rgb-text">Danh Sách Hóa Đơn ✇</h2>

                <style>
                .rgb-text {
                    animation: rgb-animation 5s linear infinite;
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
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã hóa đơn</th>
                <th>Khách hàng</th>
                <th>Ngày hóa đơn</th>
                <th>Tổng giá trị</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hoaDons as $hoaDon)
            <tr>
                <td>{{ $hoaDon->id }}</td>
                <td>{{ $hoaDon->plmHoaDon }}</td>
                <td>{{ $hoaDon->plmHoTenKhachHang }}</td>
                <td>{{ $hoaDon->plmNgayHoaDon }}</td>
                <td>{{ number_format($hoaDon->plmTongGiaTri, 2) }}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
