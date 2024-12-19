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
            'plmTenSanPham' => "CayPhuQuy",
            'plmHinhAnh' => "images/san-pham/VP001.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP002",
            'plmTenSanPham' => "CayDaiPhuGia",
            'plmHinhAnh' => "images/san-pham/VP002.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>799000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP003",
            'plmTenSanPham' => "CayHanhPhuc",
            'plmHinhAnh' => "images/san-pham/VP003.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699900,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "VP004",
            'plmTenSanPham' => "CayVanLoc",
            'plmHinhAnh' => "images/san-pham/VP004.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699880,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT001",
            'plmTenSanPham' => "CayThiatMocLan",
            'plmHinhAnh' => "images/san-pham/PT001.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT002",
            'plmTenSanPham' => "CayTruongSinh",
            'plmHinhAnh' => "images/san-pham/PT002.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>699900,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT003",
            'plmTenSanPham' => "CayHanhPhuc",
            'plmHinhAnh' => "images/san-pham/PT003.jpg",
            'plmSoLuong' =>100,
            'plmDonGia' =>899000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
        DB::table('PLM_SAN_PHAM')->insert([
            'plmMaSanPham' => "PT004",
            'plmTenSanPham' => "CayHoaNhai",
            'plmHinhAnh' => "images/san-pham/PT004.jpg",
            'plmSoLuong' =>300,
            'plmDonGia' =>999000,
            'plmMaLoai' =>1,
            'plmTrangThai' =>0
        ]);
    }
}
