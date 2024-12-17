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
        foreach(range(1,100) as $index){
            DB::table('nhacc')->insert([
                'MaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'TenNCC'=>$faker->sentence(5),
                'Diachi'=>$faker->address(),
                'Dienthoai'=>$faker->phoneNumber(10),
                'email'=>$faker->email(),
                'status'=>$faker->boolean()
            ]);
        }
        }
    }

