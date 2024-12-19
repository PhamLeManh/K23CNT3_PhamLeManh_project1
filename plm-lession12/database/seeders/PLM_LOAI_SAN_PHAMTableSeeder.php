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
                'plmTenLoai' => "CayCanhVanPhong",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L002",
                'plmTenLoai' => "CayCanhPhongThuy",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L003",
                'plmTenLoai' => "CayCanhDeBan",
                'plmTrangThai' => 0
            ],
            [
                'plmMaLoai' => "L004",
                'plmTenLoai' => "CayThuyCanh",
                'plmTrangThai' => 0
            ],
        ];

        DB::table('PLM_LOAI_SAN_PHAM')->insert($data);
    }
}
