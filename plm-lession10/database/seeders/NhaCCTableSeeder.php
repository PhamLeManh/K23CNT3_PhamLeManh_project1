<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import DB Facade
use Faker\Factory as Faker; // Import Faker

class NhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo đối tượng Factory
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('nhacc')->insert([
                'MaNCC'    => $faker->uuid(), // Tạo UUID
                // 'MaNCC' => $faker->word(15), // Nếu muốn là từ có độ dài cố định
                'TenNCC'   => $faker->words(3, true), // Tạo tên NCC
                'Diachi'   => $faker->address, // Địa chỉ
                'Dienthoai' => $faker->phoneNumber, // Số điện thoại
                'email'    => $faker->email, // Email
                'status'   => $faker->boolean, // Trạng thái
            ]);
        }
    }
}
