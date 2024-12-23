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
        Schema::create('PLM_QUAN_TRI', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->string('plmTaiKhoan', 255)->unique(); // Unique constraint
            $table->string('plmMatKhau', 255);
            $table->tinyInteger('plmTrangThai');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PLM_QUAN_TRI');
    }
};
