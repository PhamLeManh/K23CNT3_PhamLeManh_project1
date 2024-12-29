-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2024 lúc 06:47 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k23cnt3_phamlemanh_2310900063_project1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2024_12_25_033310_create__p_l_m__q_u_a_n__t_r_i_table', 1),
(40, '2024_12_25_033416_create__p_l_m__l_o_a_i__s_a_n__p_h_a_m_table', 1),
(41, '2024_12_25_033453_create__p_l_m__s_a_n__p_h_a_m_table', 1),
(42, '2024_12_25_033519_create__p_l_m__k_h_a_c_h__h_a_n_g_table', 1),
(43, '2024_12_25_033541_create__p_l_m__h_o_a__d_o_n_table', 1),
(44, '2024_12_25_033558_create__p_l_m__c_t__h_o_a__d_o_n_table', 1),
(45, '2024_12_26_141502_add_plm_ma_khach_hang_to_plm_khach_hang_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_ct_hoa_don`
--

CREATE TABLE `plm_ct_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plmHoaDonID` bigint(20) UNSIGNED NOT NULL,
  `plmSanPhamID` bigint(20) UNSIGNED NOT NULL,
  `plmSoLuongMua` int(11) NOT NULL,
  `plmDonGiaMua` double(8,2) NOT NULL,
  `plmThanhTien` decimal(15,2) NOT NULL,
  `plmTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_ct_hoa_don`
--

INSERT INTO `plm_ct_hoa_don` (`id`, `plmHoaDonID`, `plmSanPhamID`, `plmSoLuongMua`, `plmDonGiaMua`, `plmThanhTien`, `plmTrangThai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 749000.00, 1498000.00, 0, NULL, NULL),
(2, 1, 2, 1, 799000.00, 799000.00, 0, NULL, NULL),
(3, 2, 3, 1, 899000.00, 899000.00, 1, NULL, NULL),
(4, 3, 4, 2, 699880.00, 1399760.00, 0, NULL, NULL),
(5, 4, 5, 1, 799000.00, 799000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_hoa_don`
--

CREATE TABLE `plm_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plmHoaDon` varchar(255) NOT NULL,
  `plmMaKhachHang` bigint(20) UNSIGNED NOT NULL,
  `plmNgayHoaDon` date NOT NULL,
  `plmHoTenKhachHang` varchar(255) NOT NULL,
  `plmEmail` varchar(255) NOT NULL,
  `plmDienThoai` varchar(255) NOT NULL,
  `plmDiaChi` varchar(255) NOT NULL,
  `plmTongGiaTri` decimal(15,2) NOT NULL,
  `plmTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_hoa_don`
--

INSERT INTO `plm_hoa_don` (`id`, `plmHoaDon`, `plmMaKhachHang`, `plmNgayHoaDon`, `plmHoTenKhachHang`, `plmEmail`, `plmDienThoai`, `plmDiaChi`, `plmTongGiaTri`, `plmTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'HD001', 1, '2023-05-10', 'Nguyen Van A', 'nguyenvana@example.com', '0123456789', '123 Street, City, Country', 1498000.00, 0, NULL, NULL),
(2, 'HD002', 2, '2023-06-12', 'Tran Thi B', 'tranthib@example.com', '0987654321', '456 Avenue, City, Country', 1799900.00, 1, NULL, NULL),
(3, 'HD003', 3, '2023-07-20', 'Le Van C', 'levanc@example.com', '0912345678', '789 Boulevard, City, Country', 2598000.00, 0, NULL, NULL),
(4, 'HD004', 4, '2023-08-15', 'Pham Thi D', 'phamthid@example.com', '0934567890', '101 Road, City, Country', 3495000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_khach_hang`
--

CREATE TABLE `plm_khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plmMaKhachHang` varchar(255) NOT NULL,
  `plmKhachHang` varchar(255) NOT NULL,
  `plmHoTenKhachHang` varchar(255) NOT NULL,
  `plmEmail` varchar(255) NOT NULL,
  `plmMatKhau` varchar(255) NOT NULL,
  `plmDienThoai` varchar(255) NOT NULL,
  `plmDiaChi` varchar(255) NOT NULL,
  `plmNgayDangKy` date NOT NULL,
  `plmTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_khach_hang`
--

INSERT INTO `plm_khach_hang` (`id`, `plmMaKhachHang`, `plmKhachHang`, `plmHoTenKhachHang`, `plmEmail`, `plmMatKhau`, `plmDienThoai`, `plmDiaChi`, `plmNgayDangKy`, `plmTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'KH001', 'A', 'Nguyen Van A', 'nguyenvana@example.com', '$2y$10$ODg4827zTGwiPccrJlkGBeTG14YOFD1GwUVCrrWH8Iru/ZpI/Osm.', '0123456789', '123 Street, City, Country', '2023-01-15', 1, NULL, NULL),
(2, 'KH002', 'B', 'Tran Thi B', 'tranthib@example.com', '$2y$10$Iw/Fj35iXEU4/9WBpYG.ZOwo5GhxyKzNLdAxP4cj0PoGs.Y9D0/Am', '0987654321', '456 Avenue, City, Country', '2023-02-10', 1, NULL, NULL),
(3, 'KH003', 'C', 'Le Van C', 'levanc@example.com', '$2y$10$wtznodHqkK8BzN0oTq1xuud5SIiZfE241ijGCfmuUsX2zoCTOop5e', '0912345678', '789 Boulevard, City, Country', '2023-03-20', 0, NULL, NULL),
(4, 'KH004', 'D', 'Pham Thi D', 'phamthid@example.com', '$2y$10$I1ogdALsFN1/R9C2ef8G1..9du8gp1vnRbSEP2zdZPbJdAXhtXZpq', '0934567890', '101 Road, City, Country', '2023-04-05', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_loai_san_pham`
--

CREATE TABLE `plm_loai_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plmMaLoai` varchar(10) NOT NULL,
  `plmTenLoai` varchar(255) NOT NULL,
  `plmTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_loai_san_pham`
--

INSERT INTO `plm_loai_san_pham` (`id`, `plmMaLoai`, `plmTenLoai`, `plmTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'L001', 'LapTopAcer', 0, NULL, NULL),
(2, 'L002', 'LapTopAsus', 0, NULL, NULL),
(3, 'L003', 'LapTopLegion', 0, NULL, NULL),
(4, 'L004', 'LapTopSamSung', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_quan_tri`
--

CREATE TABLE `plm_quan_tri` (
  `id` int(11) NOT NULL,
  `plmTaiKhoan` varchar(255) NOT NULL,
  `plmMatKhau` varchar(255) NOT NULL,
  `plmTrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_quan_tri`
--

INSERT INTO `plm_quan_tri` (`id`, `plmTaiKhoan`, `plmMatKhau`, `plmTrangThai`) VALUES
(3, 'phamlemanh070205@gmail.com', '$2y$10$R3msi8R6v/oPiCIgrtt6Y.AEguauQN7.X0mNGlPgnEZNXPU7T8nEq', 1),
(4, '0790970936', '$2y$10$Q6hRzs0vyGxR3w56w.IT3e8EVnbC50zJTHdsVJptfTSGu8re8AOqq', 0),
(5, 'phamlemanh070205@gmail.com', '0c8abdb962f042d1857c66dd26b0c87b', 0),
(6, '0799079636', '0c8abdb962f042d1857c66dd26b0c87b', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plm_san_pham`
--

CREATE TABLE `plm_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plmMaSanPham` varchar(255) NOT NULL,
  `plmTenSanPham` varchar(255) NOT NULL,
  `plmHinhAnh` varchar(255) NOT NULL,
  `plmSoLuong` int(11) NOT NULL,
  `plmDonGia` double(8,2) NOT NULL,
  `plmMaLoai` bigint(20) NOT NULL,
  `plmTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plm_san_pham`
--

INSERT INTO `plm_san_pham` (`id`, `plmMaSanPham`, `plmTenSanPham`, `plmHinhAnh`, `plmSoLuong`, `plmDonGia`, `plmMaLoai`, `plmTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'VP001', 'LapTopAcer', 'https://cdn.tgdd.vn/Products/Images/44/321436/acer-aspire-a315-44p-r9w8-r7-nxksjsv002-thumb-600x600.jpg', 100, 699000.00, 1, 0, NULL, NULL),
(2, 'VP002', 'LapTopAsus', 'https://cdn.tgdd.vn/Products/Images/44/305009/asus-vivobook-15-x1504va-nj023w-thumb-600x600.jpg', 100, 799000.00, 1, 0, NULL, NULL),
(3, 'VP003', 'LapTopLegion', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-I3eZ92jkfXcMGApIgy348K1cCIhGkXONyQ&s', 100, 699900.00, 1, 0, NULL, NULL),
(4, 'VP004', 'LapTopSamSung', 'https://laptop88.vn/media/product/7849_7052_6976_samsung_galaxy_book_pro_2021_h2_jpeg.jpg', 100, 699880.00, 1, 0, NULL, NULL),
(5, 'PT001', 'LapTopAcer', 'https://cdn.tgdd.vn/Products/Images/44/321436/acer-aspire-a315-44p-r9w8-r7-nxksjsv002-thumb-600x600.jpg', 100, 699000.00, 1, 0, NULL, NULL),
(6, 'PT002', 'LapTopAsus', 'https://cdn.tgdd.vn/Products/Images/44/305009/asus-vivobook-15-x1504va-nj023w-thumb-600x600.jpg', 100, 699900.00, 1, 0, NULL, NULL),
(7, 'PT003', 'LapTopLegion', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-I3eZ92jkfXcMGApIgy348K1cCIhGkXONyQ&s', 100, 899000.00, 1, 0, NULL, NULL),
(8, 'PT004', 'LapTopSamSung', 'https://laptop88.vn/media/product/7849_7052_6976_samsung_galaxy_book_pro_2021_h2_jpeg.jpg', 300, 999000.00, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `plm_ct_hoa_don`
--
ALTER TABLE `plm_ct_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plm_ct_hoa_don_plmhoadonid_foreign` (`plmHoaDonID`),
  ADD KEY `plm_ct_hoa_don_plmsanphamid_foreign` (`plmSanPhamID`);

--
-- Chỉ mục cho bảng `plm_hoa_don`
--
ALTER TABLE `plm_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plm_hoa_don_plmhoadon_unique` (`plmHoaDon`),
  ADD KEY `plm_hoa_don_plmmakhachhang_foreign` (`plmMaKhachHang`);

--
-- Chỉ mục cho bảng `plm_khach_hang`
--
ALTER TABLE `plm_khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plm_khach_hang_plmmakhachhang_unique` (`plmMaKhachHang`),
  ADD UNIQUE KEY `plm_khach_hang_plmkhachhang_unique` (`plmKhachHang`);

--
-- Chỉ mục cho bảng `plm_loai_san_pham`
--
ALTER TABLE `plm_loai_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plm_loai_san_pham_plmmaloai_unique` (`plmMaLoai`);

--
-- Chỉ mục cho bảng `plm_quan_tri`
--
ALTER TABLE `plm_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `plm_san_pham`
--
ALTER TABLE `plm_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plm_san_pham_plmmasanpham_unique` (`plmMaSanPham`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `plm_ct_hoa_don`
--
ALTER TABLE `plm_ct_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `plm_hoa_don`
--
ALTER TABLE `plm_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `plm_khach_hang`
--
ALTER TABLE `plm_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `plm_loai_san_pham`
--
ALTER TABLE `plm_loai_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `plm_quan_tri`
--
ALTER TABLE `plm_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `plm_san_pham`
--
ALTER TABLE `plm_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `plm_ct_hoa_don`
--
ALTER TABLE `plm_ct_hoa_don`
  ADD CONSTRAINT `plm_ct_hoa_don_plmhoadonid_foreign` FOREIGN KEY (`plmHoaDonID`) REFERENCES `plm_hoa_don` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plm_ct_hoa_don_plmsanphamid_foreign` FOREIGN KEY (`plmSanPhamID`) REFERENCES `plm_san_pham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `plm_hoa_don`
--
ALTER TABLE `plm_hoa_don`
  ADD CONSTRAINT `plm_hoa_don_plmmakhachhang_foreign` FOREIGN KEY (`plmMaKhachHang`) REFERENCES `plm_khach_hang` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
