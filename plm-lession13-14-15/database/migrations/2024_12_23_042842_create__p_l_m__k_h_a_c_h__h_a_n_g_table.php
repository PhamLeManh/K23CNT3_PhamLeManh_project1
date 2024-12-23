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
        Schema::create('PLM_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('plmKhacHang', 255)->unique(); // Fixed missing semicolon
            $table->string('plmHoTenKhachHang', 255);    
            $table->string('plmEmail', 255);
            $table->string('plmMatKhau', 255);
            $table->string('plmDienThoai', 255);
            $table->string('plmDiaChi', 255);
            $table->date('plmNgayDangKy'); // Removed 255 length
            $table->tinyInteger('plmTrangThai'); // Removed 255 length
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_KHACH_HANG');
    }
};
