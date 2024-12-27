<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PLM_CT_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'plmHoaDonID' => 1, // Assuming the invoice with ID 1 exists in PLM_HOA_DON
                'plmSanPhamID' => 1, // Assuming the product with ID 1 exists in PLM_SAN_PHAM
                'plmSoLuongMua' => 2,
                'plmDonGiaMua' => 749000, // Price of the product
                'plmThanhTien' => 1498000.00, // Total amount for this product
                'plmTrangThai' => 0, // The status of the item in the invoice
            ],
            [
                'plmHoaDonID' => 1, // Assuming the invoice with ID 1 exists in PLM_HOA_DON
                'plmSanPhamID' => 2, // Assuming the product with ID 2 exists in PLM_SAN_PHAM
                'plmSoLuongMua' => 1,
                'plmDonGiaMua' => 799000, // Price of the product
                'plmThanhTien' => 799000.00, // Total amount for this product
                'plmTrangThai' => 0, // The status of the item in the invoice
            ],
            [
                'plmHoaDonID' => 2, // Assuming the invoice with ID 2 exists in PLM_HOA_DON
                'plmSanPhamID' => 3, // Assuming the product with ID 3 exists in PLM_SAN_PHAM
                'plmSoLuongMua' => 1,
                'plmDonGiaMua' => 899000, // Price of the product
                'plmThanhTien' => 899000.00, // Total amount for this product
                'plmTrangThai' => 1, // The status of the item in the invoice
            ],
            [
                'plmHoaDonID' => 3, // Assuming the invoice with ID 3 exists in PLM_HOA_DON
                'plmSanPhamID' => 4, // Assuming the product with ID 4 exists in PLM_SAN_PHAM
                'plmSoLuongMua' => 2,
                'plmDonGiaMua' => 699880, // Price of the product
                'plmThanhTien' => 1399760.00, // Total amount for this product
                'plmTrangThai' => 0, // The status of the item in the invoice
            ],
            [
                'plmHoaDonID' => 4, // Assuming the invoice with ID 4 exists in PLM_HOA_DON
                'plmSanPhamID' => 5, // Assuming the product with ID 5 exists in PLM_SAN_PHAM
                'plmSoLuongMua' => 1,
                'plmDonGiaMua' => 799000, // Price of the product
                'plmThanhTien' => 799000.00, // Total amount for this product
                'plmTrangThai' => 1, // The status of the item in the invoice
            ],
        ];

        DB::table('PLM_CT_HOA_DON')->insert($data);
    }
}
