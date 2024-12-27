<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLM_HOA_DON extends Model
{
    use HasFactory;

    protected $table = 'PLM_HOA_DON';

    protected $fillable = [
        'plmHoaDon',
        'plmMaKhachHang',
        'plmNgayHoaDon',
        'plmHoTenKhachHang',
        'plmEmail',
        'plmDienThoai',
        'plmDiaChi',
        'plmTongGiaTri',
        'plmTrangThai',
    ];
}
