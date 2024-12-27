<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLM_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'plmHoaDon' => 'HD001',
                'plmMaKhachHang' => 1, // Assuming the customer with ID 1 exists in PLM_KHACH_HANG
                'plmNgayHoaDon' => '2023-05-10',
                'plmHoTenKhachHang' => 'Nguyen Van A',
                'plmEmail' => 'nguyenvana@example.com',
                'plmDienThoai' => '0123456789',
                'plmDiaChi' => '123 Street, City, Country',
                'plmTongGiaTri' => 1498000.00,
                'plmTrangThai' => 0,
            ],
            [
                'plmHoaDon' => 'HD002',
                'plmMaKhachHang' => 2, // Assuming the customer with ID 2 exists in PLM_KHACH_HANG
                'plmNgayHoaDon' => '2023-06-12',
                'plmHoTenKhachHang' => 'Tran Thi B',
                'plmEmail' => 'tranthib@example.com',
                'plmDienThoai' => '0987654321',
                'plmDiaChi' => '456 Avenue, City, Country',
                'plmTongGiaTri' => 1799900.00,
                'plmTrangThai' => 1,
            ],
            [
                'plmHoaDon' => 'HD003',
                'plmMaKhachHang' => 3, // Assuming the customer with ID 3 exists in PLM_KHACH_HANG
                'plmNgayHoaDon' => '2023-07-20',
                'plmHoTenKhachHang' => 'Le Van C',
                'plmEmail' => 'levanc@example.com',
                'plmDienThoai' => '0912345678',
                'plmDiaChi' => '789 Boulevard, City, Country',
                'plmTongGiaTri' => 2598000.00,
                'plmTrangThai' => 0,
            ],
            [
                'plmHoaDon' => 'HD004',
                'plmMaKhachHang' => 4, // Assuming the customer with ID 4 exists in PLM_KHACH_HANG
                'plmNgayHoaDon' => '2023-08-15',
                'plmHoTenKhachHang' => 'Pham Thi D',
                'plmEmail' => 'phamthid@example.com',
                'plmDienThoai' => '0934567890',
                'plmDiaChi' => '101 Road, City, Country',
                'plmTongGiaTri' => 3495000.00,
                'plmTrangThai' => 1,
            ],
        ];

        DB::table('PLM_HOA_DON')->insert($data);
    }
}
