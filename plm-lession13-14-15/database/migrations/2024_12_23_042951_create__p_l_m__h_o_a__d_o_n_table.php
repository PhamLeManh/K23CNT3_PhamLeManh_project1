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
        Schema::create('PLM_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('plmHoaDon', 255)->unique();
            $table->bigInteger('plmMaKhachHang')->unsigned(); // Sử dụng unsigned để phù hợp với kiểu của cột id
            $table->foreign('plmMaKhachHang')->references('id')->on('PLM_KHACH_HANG')->onDelete('cascade'); // Khóa ngoại với bảng PLM_KHACH_HANG
            $table->date('plmNgayHoaDon');
            $table->string('plmHoTenKhachHang', 255);
            $table->string('plmEmail', 255);
            $table->string('plmDienThoai', 255);
            $table->string('plmDiaChi', 255);
            $table->float('plmTongGiaTri', 8, 2); // Độ chính xác 8 và 2 chữ số thập phân
            $table->tinyInteger('plmTrangThai'); // Không cần chiều dài
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_HOA_DON');
    }
};
