<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plm_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('plmMaKhachHang')->unique();  // Thêm cột plmMaKhachHang
            $table->string('plmKhachHang', 255)->unique(); // Đảm bảo cột này có dữ liệu duy nhất
            $table->string('plmHoTenKhachHang', 255);    
            $table->string('plmEmail', 255);
            $table->string('plmMatKhau', 255);
            $table->string('plmDienThoai', 255);
            $table->string('plmDiaChi', 255);
            $table->date('plmNgayDangKy');
            $table->tinyInteger('plmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plm_khach_hang');
    }
};

