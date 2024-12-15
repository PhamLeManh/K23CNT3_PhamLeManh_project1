<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm mới sinh viên</h1>
    <form action="{{ route('sinhvien.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="MaSV">Mã sinh viên</label>
            <input type="text" name="MaSV" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="HoVaTen">Họ và tên</label>
            <input type="text" name="HoVaTen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Phai">Giới tính</label>
            <select name="Phai" class="form-control">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="NgaySinh">Ngày sinh</label>
            <input type="date" name="NgaySinh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="NoiSinh">Nơi sinh</label>
            <input type="text" name="NoiSinh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="MaKhoa">Mã khoa</label>
            <input type="text" name="MaKhoa" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="HocBong">Học bổng</label>
            <input type="number" name="HocBong" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection

</body>
</html>