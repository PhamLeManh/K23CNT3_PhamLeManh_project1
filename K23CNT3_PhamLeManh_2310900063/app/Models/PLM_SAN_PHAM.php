<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLM_SAN_PHAM extends Model
{
    use HasFactory;

    protected $table = 'plm_san_pham'; // Tên bảng trong database

    protected $fillable = [
        'plmMaSanPham',
        'plmTenSanPham',
        'plmHinhAnh',
        'plmSoLuong',
        'plmDonGia',
        'plmTrangThai',
    ];
}
