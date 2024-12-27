@extends('layout.admins.master') 
@section('title', 'Danh Sách Hóa Đơn') 
@section('content-body')

<!-- Section Header -->
<div class="container-body">
    <h2 class="rgb-text">Danh Sách Chi Tiết Hóa Đơn ✇</h2>

    <style>
        .rgb-text {
            animation: rgb-animation 5s linear infinite;
            background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 36px;
            font-weight: bold;
        }

        @keyframes rgb-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Table Styles */
        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-size: 16px;
        }

        .table td {
            font-size: 14px;
            background-color: #f9f9f9;
        }

        .table tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
        }

        .status-chua {
            background-color: #f44336;
            color: white;
        }

        .status-da {
            background-color: #4caf50;
            color: white;
        }
    </style>

    <!-- Table Content -->
    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Hóa Đơn ID</th>
                    <th>Sản Phẩm ID</th>
                    <th>Số Lượng Mua</th>
                    <th>Đơn Giá Mua</th>
                    <th>Thành Tiền</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hoaDons as $hoaDon)
                    <tr>
                        <td>{{ $hoaDon->plmHoaDonID }}</td>
                        <td>{{ $hoaDon->plmSanPhamID }}</td>
                        <td>{{ $hoaDon->plmSoLuongMua }}</td>
                        <td>{{ number_format($hoaDon->plmDonGiaMua, 0, ',', '.') }} VND</td>
                        <td>{{ number_format($hoaDon->plmThanhTien, 0, ',', '.') }} VND</td>
                        <td>
                            <span class="status {{ $hoaDon->plmTrangThai == 0 ? 'status-chua' : 'status-da' }}">
                                {{ $hoaDon->plmTrangThai == 0 ? 'Chưa thanh toán' : 'Đã thanh toán' }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection


