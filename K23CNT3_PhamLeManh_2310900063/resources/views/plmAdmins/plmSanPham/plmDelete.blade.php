@extends('layout.admins.master')
@section('title', 'Xóa Sản Phẩm')

@section('content-body')
<div class="container mt-4">
    <h2>Xóa Sản Phẩm</h2>
    <p>Bạn có chắc chắn muốn xóa sản phẩm: <strong>{{ $item->plmTenSanPham }}</strong>?</p>
    <form action="{{ route('plmAdmins.plmsanpham.plmDelete', $item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('plmAdmins.plmsanpham') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
