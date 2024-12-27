<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PLM_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'plmMaKhachHang' => 'KH001', 
                'plmKhachHang' => "A",
                'plmHoTenKhachHang' => "Nguyen Van A",
                'plmEmail' => "nguyenvana@example.com",
                'plmMatKhau' => Hash::make('password123'),
                'plmDienThoai' => "0123456789",
                'plmDiaChi' => "123 Street, City, Country",
                'plmNgayDangKy' => "2023-01-15",
                'plmTrangThai' => 1,
            ],
            [
                'plmMaKhachHang' => 'KH002', 
                'plmKhachHang' => "B",
                'plmHoTenKhachHang' => "Tran Thi B",
                'plmEmail' => "tranthib@example.com",
                'plmMatKhau' => Hash::make('password123'),
                'plmDienThoai' => "0987654321",
                'plmDiaChi' => "456 Avenue, City, Country",
                'plmNgayDangKy' => "2023-02-10",
                'plmTrangThai' => 1,
            ],
            [
                'plmMaKhachHang' => 'KH003',
                'plmKhachHang' => "C",
                'plmHoTenKhachHang' => "Le Van C",
                'plmEmail' => "levanc@example.com",
                'plmMatKhau' => Hash::make('password123'),
                'plmDienThoai' => "0912345678",
                'plmDiaChi' => "789 Boulevard, City, Country",
                'plmNgayDangKy' => "2023-03-20",
                'plmTrangThai' => 0,
            ],
            [
                'plmMaKhachHang' => 'KH004', 
                'plmKhachHang' => "D",
                'plmHoTenKhachHang' => "Pham Thi D",
                'plmEmail' => "phamthid@example.com",
                'plmMatKhau' => Hash::make('password123'),
                'plmDienThoai' => "0934567890",
                'plmDiaChi' => "101 Road, City, Country",
                'plmNgayDangKy' => "2023-04-05",
                'plmTrangThai' => 1,
            ],
        ];
        

        DB::table('PLM_KHACH_HANG')->insert($data);
    }
}
