<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLM_QUAN_TRITableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plmMatKhau = md5("123456@"); // Thêm dấu chấm phẩy ở cuối dòng

        DB::table('PLM_QUAN_TRI')->insert([
            'plmTaiKhoan' => "phamlemanh070205@gmail.com",
            'plmMatKhau' => $plmMatKhau,
            'plmTrangThai' => 0
        ]);

        DB::table('PLM_QUAN_TRI')->insert([
            'plmTaiKhoan' => "0799079636",
            'plmMatKhau' => $plmMatKhau,
            'plmTrangThai' => 0    
        ]);
    }
}
