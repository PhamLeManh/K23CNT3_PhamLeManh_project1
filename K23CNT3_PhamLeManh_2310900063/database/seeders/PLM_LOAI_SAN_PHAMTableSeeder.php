<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLM_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'plmMaLoai' => "L001",
                'plmTenLoai' => "LapTopAcer",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L002",
                'plmTenLoai' => "LapTopAsus",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L003",
                'plmTenLoai' => "LapTopLegion",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L004",
                'plmTenLoai' => "LapTopSamSung",
                'plmTrangThai' => 0
            ],
        ];

        DB::table('PLM_LOAI_SAN_PHAM')->insert($data);
    }
}