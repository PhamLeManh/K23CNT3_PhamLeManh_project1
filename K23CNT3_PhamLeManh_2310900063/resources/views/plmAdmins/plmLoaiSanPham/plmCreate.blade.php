@extends('layout.admins.master') 
@section('title', 'Thêm Mới Loai San Pham') 

@section('content-body')
    <div class="container">
        <h2 class="rgb-text">Thêm Mới Loại Sản Phẩm</h2>

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
        <form action="{{ route('plmAdmins.plmloaisanpham.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="plmMaLoai">Mã Loại:</label>
                <input type="text" class="form-control" name="plmMaLoai" value="{{ old('plmMaLoai') }}" required>
            </div>
            <div class="form-group">
                <label for="plmTenLoai">Tên Loại:</label>
                <input type="text" class="form-control" name="plmTenLoai" value="{{ old('plmTenLoai') }}" required>
            </div>
            <div class="form-group">
                <label for="plmTrangThai">Trạng Thái:</label>
                <select name="plmTrangThai" class="form-control">
                    <option value="1" {{ old('plmTrangThai') == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('plmTrangThai') == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
                <a href="{{ route('plmAdmins.plmloaisanpham') }}" class="btn btn-secondary">cancel</a>
        </form>
    </div>
@endsection
 