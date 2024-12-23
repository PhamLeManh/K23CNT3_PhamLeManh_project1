@extends('layout.admins.master') 
@section('title', 'Danh Sach Loai San Pham') 
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sach Cac Loai San Pham</h1>
                <a href="{{ route('plmLoaiSanPham.create') }}" class="btn btn-success mb-3">Create New</a>
            </div>        
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>MaLoai</th>
                    <th>TenLoai</th>
                    <th>TrangThai</th>
                    <th>ChucNang</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($plmLoaiSanPham as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->plmMaLoai }}</td>
                            <td>{{ $item->plmTenLoai }}</td>
                            <td>{{ $item->plmTrangThai }}</td>
                            <td>
                                <a href="{{ route('plmLoaiSanPham.view', $item->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('plmLoaiSanPham.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('plmLoaiSanPham.delete', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ban co chac chan muon xoa?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Chua Co Thong Tin Loai San Pham</td>
                        </tr>
                    @endforelse
                </tbody> 
            </table>
        </div>
    </div>
@endsection
