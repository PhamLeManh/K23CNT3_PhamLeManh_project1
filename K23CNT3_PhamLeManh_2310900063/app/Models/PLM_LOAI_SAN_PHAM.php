<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLM_LOAI_SAN_PHAM extends Model
{
    use HasFactory;

    protected $table = 'plm_loai_san_pham'; // Tên bảng trong cơ sở dữ liệu

    // Các cột được phép mass assignment
    protected $fillable = [
        'plmMaLoai',
        'plmTenLoai',
        'plmTrangThai',
    ];
    
}