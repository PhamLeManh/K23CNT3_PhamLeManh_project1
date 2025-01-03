<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PLM_QUAN_TRITableseeder::class,
            PLM_LOAI_SAN_PHAMTableSeeder::class,
            PLM_CT_HOA_DONTableSeeder::class,
            PLM_HOA_DONTableSeeder::class,
            PLM_KHACH_HANGTableSeeder::class,
            PLM_SAN_PHAMTableSeeder::class
        ]);
    }
}