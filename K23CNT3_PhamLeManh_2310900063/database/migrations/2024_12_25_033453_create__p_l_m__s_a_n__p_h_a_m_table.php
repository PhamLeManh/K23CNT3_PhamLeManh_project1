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
        Schema::create('PLM_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('plmMaSanPham',255)->unique();
            $table->string('plmTenSanPham',255);
            $table->string('plmHinhAnh',0,255);
            $table->integer('plmSoLuong');
            $table->float('plmDonGia');
            $table->bigInteger('plmMaLoai')->references('id')->on('PLM_LOAI_SAN_PHAM');
            $table->tinyInteger('plmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_SAN_PHAM');
    }
};
