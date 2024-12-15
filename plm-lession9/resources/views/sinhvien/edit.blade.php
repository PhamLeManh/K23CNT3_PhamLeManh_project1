<form action="{{ route('sinhvien.update', $sinhVien->MaSV) }}" method="POST">
    @csrf
    <!-- Các trường nhập dữ liệu với giá trị mặc định -->
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
