<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .btn {
            --bs-btn-line-height: 1;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách sinh viên</h1>
    <a href="{{ route('sinhvien.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã SV</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Nơi sinh</th>
                <th>Mã khoa</th>
                <th>Học bổng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sinhViens as $sinhVien)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sinhVien->MaSV }}</td>
                <td>{{ $sinhVien->HoVaTen }}</td>
                <td>{{ $sinhVien->Phai == 1 ? 'Nam' : 'Nữ' }}</td>
                <td>{{ $sinhVien->NgaySinh }}</td>
                <td>{{ $sinhVien->NoiSinh }}</td>
                <td>{{ $sinhVien->MaKhoa }}</td>
                <td>{{ $sinhVien->HocBong }}</td>
                <td>
                    <a href="{{ route('sinhvien.show', $sinhVien->id) }}" class="btn btn-info">Chi tiết</a>
                    <a href="{{ route('sinhvien.edit', $sinhVien->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('sinhvien.destroy', $sinhVien->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</html>
