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
        Schema::create('vattu', function (Blueprint $table) {
            // $table->id(); // mặc định id là khóa chính
            $table->string('MaVTu')->primary();
            $table->string('TenVTu')->unique();
            $table->string('DvTinh');
            $table->float('PhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattu');
    }
};