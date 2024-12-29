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
            $table->unsignedBigInteger('plmMaKhachHang'); 
            $table->foreign('plmMaKhachHang')->references('id')->on('PLM_KHACH_HANG')->onDelete('cascade'); 
            $table->date('plmNgayHoaDon');
            $table->string('plmHoTenKhachHang', 255);
            $table->string('plmEmail', 255);
            $table->string('plmDienThoai', 255);
            $table->string('plmDiaChi', 255);
            $table->decimal('plmTongGiaTri', 15, 2); 
            $table->tinyInteger('plmTrangThai');
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
