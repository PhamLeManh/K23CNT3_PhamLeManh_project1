<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLM_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP001",
            'plmTenSanPham' => "LapTopAcer",
            'plmHinhAnh' => "https://cdn.tgdd.vn/Products/Images/44/321436/acer-aspire-a315-44p-r9w8-r7-nxksjsv002-thumb-600x600.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP002",
            'plmTenSanPham' => "LapTopAsus",
            'plmHinhAnh' => "https://cdn.tgdd.vn/Products/Images/44/305009/asus-vivobook-15-x1504va-nj023w-thumb-600x600.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>799000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP003",
            'plmTenSanPham' => "LapTopLegion",
            'plmHinhAnh' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-I3eZ92jkfXcMGApIgy348K1cCIhGkXONyQ&s",
            'plmSoLuong' =>100,
            'plmDonGia' =>699900,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP004",
            'plmTenSanPham' => "LapTopSamSung",
            'plmHinhAnh' => "https://laptop88.vn/media/product/7849_7052_6976_samsung_galaxy_book_pro_2021_h2_jpeg.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699880,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT001",
            'plmTenSanPham' => "LapTopAcer",
            'plmHinhAnh' => "https://cdn.tgdd.vn/Products/Images/44/321436/acer-aspire-a315-44p-r9w8-r7-nxksjsv002-thumb-600x600.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT002",
            'plmTenSanPham' => "LapTopAsus",
            'plmHinhAnh' => "https://cdn.tgdd.vn/Products/Images/44/305009/asus-vivobook-15-x1504va-nj023w-thumb-600x600.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699900,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT003",
            'plmTenSanPham' => "LapTopLegion",
            'plmHinhAnh' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-I3eZ92jkfXcMGApIgy348K1cCIhGkXONyQ&s",
            'plmSoLuong' =>100,
            'plmDonGia' =>899000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT004",
            'plmTenSanPham' => "LapTopSamSung",
            'plmHinhAnh' => "https://laptop88.vn/media/product/7849_7052_6976_samsung_galaxy_book_pro_2021_h2_jpeg.jpg",
            'plmSoLuong' =>300,
            'plmDonGia' =>999000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
    }
}