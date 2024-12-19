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
        Schema::create('PLM_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id(); // Cột ID tự động
            $table->string('plmMaLoai', 10)->unique(); // Cột mã loại
            $table->string('plmTenLoai', 255);
            $table->tinyInteger('plmTrangThai');
            $table->timestamps(); // Cột created_at và updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_LOAI_SAN_PHAM');
    }
};
