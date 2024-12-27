@extends('layout.admins.master')

@section('title', 'Edit Loai San Pham')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h2 class="rgb-text">Edit Loại Sản Phẩm</h2>

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
            <form action="{{ route('plmAdmins.plmloaisanpham.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="plmMaLoai">Ma Loai</label>
                    <input type="text" name="plmMaLoai" id="plmMaLoai" class="form-control" value="{{ $item->plmMaLoai }}" required>
                </div>
                <div class="form-group">
                    <label for="plmTenLoai">Ten Loai</label>
                    <input type="text" name="plmTenLoai" id="plmTenLoai" class="form-control" value="{{ $item->plmTenLoai }}" required>
                </div>
                <div class="form-group">
                    <label for="plmTrangThai">Trang Thai</label>
                    <select name="plmTrangThai" id="plmTrangThai" class="form-control" required>
                        <option value="Active" {{ $item->plmTrangThai == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ $item->plmTrangThai == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('plmAdmins.plmloaisanpham') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
