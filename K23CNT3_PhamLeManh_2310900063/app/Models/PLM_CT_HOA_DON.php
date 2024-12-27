<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLM_CT_HOA_DON extends Model
{
    use HasFactory;

    // Đặt tên bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'PLM_CT_HOA_DON';

    // Các trường có thể được gán đại trà
    protected $fillable = [
        'plmHoaDonID',
        'plmSanPhamID',
        'plmSoLuongMua',
        'plmDonGiaMua',
        'plmThanhTien',
        'plmTrangThai',
    ];

    // Nếu cần, bạn có thể định nghĩa các quan hệ với các bảng khác ở đây
}
