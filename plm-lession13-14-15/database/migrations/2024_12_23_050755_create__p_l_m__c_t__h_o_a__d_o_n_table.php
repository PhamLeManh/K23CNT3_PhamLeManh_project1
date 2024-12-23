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
        Schema::create('PLM_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plmHoaDonID')->unsigned();  // Thêm unsigned() cho khóa ngoại
            $table->foreign('plmHoaDonID')->references('id')->on('PLM_HOA_DON')->onDelete('cascade'); // Định nghĩa khóa ngoại

            $table->bigInteger('plmSanPhamID')->unsigned(); // Thêm unsigned() cho khóa ngoại
            $table->foreign('plmSanPhamID')->references('id')->on('PLM_SAN_PHAM')->onDelete('cascade'); // Định nghĩa khóa ngoại

            $table->integer('plmSoLuongMua');
            $table->float('plmDonGiaMua');
            $table->float('plmThanhTien');
            $table->tinyInteger('plmTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_CT_HOA_DON');
    }
};
