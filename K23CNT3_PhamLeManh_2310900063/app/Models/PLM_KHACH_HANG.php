<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLM_KHACH_HANG extends Model
{
    use HasFactory;
    protected $table = 'plm_khach_hang';  

   
    protected $fillable = [
        'plmMaKhachHang',
        'plmHoTenKhachHang',
        'plmDiaChi',
        'plmDienThoai',
        'plmTrangThai',
    ];
}