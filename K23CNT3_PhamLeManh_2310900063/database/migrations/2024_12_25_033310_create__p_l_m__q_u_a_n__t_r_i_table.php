<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Thêm dữ liệu vào bảng PLM_QUAN_TRI
     */
    public function up(): void
    {
       
        if (Schema::hasTable('PLM_QUAN_TRI')) {
            DB::table('PLM_QUAN_TRI')->insert([
                [
                    'plmTaiKhoan' => 'phamlemanh070205@gmail.com',
                    'plmMatKhau' => Hash::make('123456@'), 
                    'plmTrangThai' => 1,
                ],
                [
                    'plmTaiKhoan' => '0790970936',
                    'plmMatKhau' => Hash::make('123456@'), // Use the same password as in Seeder
                    'plmTrangThai' => 0,
                ],
            ]);
        }
    }

    /**
     * Hoàn tác việc thêm dữ liệu vào bảng
     */
    public function down(): void
    {
       
        if (Schema::hasTable('PLM_QUAN_TRI')) {
            DB::table('PLM_QUAN_TRI')->where('plmTaiKhoan', 'phamlemanh070205@gmail.com')->delete();
            DB::table('PLM_QUAN_TRI')->where('plmTaiKhoan', '0790970936')->delete();
        }
    }
};
