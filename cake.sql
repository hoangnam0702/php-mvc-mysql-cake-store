-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2021 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cake`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(1, 'img/slide-img/banner-02.jpg'),
(2, 'img/slide-img/banner-01.jpg'),
(3, 'img/slide-img/banner-003.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(1, 4, 4, 149000),
(2, 10, 1, 189000),
(3, 11, 3, 179000),
(4, 11, 2, 179000),
(5, 10, 1, 189000),
(6, 11, 1, 179000),
(7, 5, 1, 199000),
(8, 6, 1, 199000),
(8, 7, 1, 259000),
(9, 8, 1, 179000),
(10, 9, 1, 199000),
(11, 12, 1, 250000),
(12, 12, 1, 250000),
(13, 11, 1, 179000),
(14, 12, 1, 250000),
(15, 8, 1, 179000),
(16, 10, 3, 189000),
(17, 2, 4, 149000),
(18, 2, 1, 149000),
(18, 1, 2, 119000),
(19, 10, 1, 189000),
(20, 1, 3, 119000),
(21, 1, 1, 119000),
(21, 11, 1, 179000),
(22, 3, 1, 149000),
(23, 2, 1, 149000),
(24, 1, 2, 119000),
(25, 7, 2, 259000),
(26, 2, 3, 149000),
(26, 12, 1, 250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreateAt` date NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `MaND`, `MaSP`, `NoiDung`, `CreateAt`, `star`) VALUES
(1, 1, 2, 'jhsdf', '2021-01-14', 1),
(2, 1, 2, 'ịọppo', '2021-01-14', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL,
  `HinhAnh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `HinhAnh`) VALUES
(1, 'Bánh kem', NULL),
(2, 'Bánh lạnh', NULL),
(3, 'Bánh Su Kem', NULL),
(4, 'Bánh Cupcake', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaND`, `NgayLap`, `NguoiNhan`, `SDT`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`) VALUES
(1, 1, '2020-12-21 10:10:16', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 596000, '0'),
(2, 1, '2020-12-23 08:29:02', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 189000, '0'),
(3, 1, '2020-12-24 09:12:46', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 537000, '0'),
(4, 2, '2020-12-24 14:42:18', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 358000, '0'),
(5, 2, '2020-12-24 15:29:11', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 189000, '0'),
(6, 1, '2020-12-24 20:33:34', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 179000, '0'),
(7, 2, '2020-12-29 09:39:40', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 199000, '0'),
(8, 2, '2020-12-29 10:02:30', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 458000, '0'),
(9, 2, '2020-12-29 10:06:50', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 179000, '0'),
(10, 2, '2020-12-29 10:09:26', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 199000, '0'),
(11, 2, '2020-12-29 10:13:58', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 250000, '0'),
(12, 2, '2020-12-29 10:40:46', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 250000, '0'),
(13, 2, '2020-12-29 10:46:37', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 179000, '0'),
(14, 1, '2020-12-30 13:37:43', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 250000, '0'),
(15, 1, '2020-12-30 13:39:15', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 179000, '1'),
(16, 1, '2020-12-30 13:39:55', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 567000, '1'),
(17, 1, '2020-12-30 14:31:32', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 596000, '0'),
(18, 1, '2020-12-30 14:32:44', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 387000, '1'),
(19, 2, '2020-12-31 07:55:03', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 189000, '0'),
(20, 2, '2020-12-31 07:55:53', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 357000, '0'),
(21, 3, '2020-12-31 09:50:43', 'Hoàng  Văn Loan', '0969037917', 'Nghệ An', '', 298000, '0'),
(22, 1, '2020-12-31 10:01:12', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 149000, '0'),
(23, 3, '2020-12-31 11:15:08', 'Nguyễn Hoài Nam', '0969037917', 'Nghệ An', '', 149000, '0'),
(24, 1, '2021-01-05 11:02:41', 'Hoàng  Loan', '096903712222', 'Nghệ A', '', 238000, '1'),
(25, 1, '2021-01-08 19:56:47', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 518000, '0'),
(26, 2, '2021-01-13 18:49:56', 'Hoàng  Loan', '0969037917', 'Nghệ An', '', 697000, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `NgayBD` datetime NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `TrangThai`) VALUES
(1, 'Không khuyến mãi', 'Null', 0, '2020-12-21 09:50:44', 1),
(2, 'Giảm giá', 'giamgia', 50000, '2021-01-13 18:43:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`, `MaDM`) VALUES
(1, 'Hộp 6 cup', '', '', 4),
(2, 'Hộp 9 cup', '', '', 4),
(3, 'Bánh sinh nhật', '', '', 1),
(4, 'Bánh cưới - hỏi', '', '', 1),
(5, 'Cheesecake', '', '', 2),
(6, 'Creme', '', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TaiKhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Hoàng ', 'Loan', 'Nam', '0969037917', 'hvloan.19it5@vku.udn.vn', 'Nghệ An', 'loanhe123', '7a69559069041e60b7ddd142719e23ac', 2, 1),
(2, 'Hoàng ', 'Loan', 'Nam', '0969037917', 'loanhe1xb@gmail.com', 'Nghệ An', 'loanhe12345', '545d3034b6f2dd6a0c0f4fdccffbe4b3', 1, 1),
(3, 'Nguyễn Hoài', 'Nam', 'Nam', '0969037917', 'natopten01@gmail.com', 'Nghệ An', 'Dziii09', '99950ab84df163a5aba03060dafd8c8b', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaKM` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `MaDM`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `Size`, `MaKM`, `TrangThai`, `MoTa`, `ThoiGian`) VALUES
(1, 1, 1, 'Cupcake 6 cup', 119000, 25, 'img/upload/c6.jpg', '/img/upload/c6.jpg', '/img/upload/c6.jpg', 'M', 1, 1, 'Loại bánh cupcake 6 cup có kích cỡ bằng 1 cái cốc, ghép lại với nhau\r\ncó thể dùng để đãi tiệc hoặc trang trí thành set tổng hợp tặng sinh nhật.', '2020-12-30 14:16:02'),
(2, 2, 1, 'Cupcake 9 cup', 149000, 25, 'img/upload/c9.jpg', '/img/upload/c9.jpg', '/img/upload/c9.jpg', 'M', 1, 1, 'Loại bánh cupcake 9 cup  có kích cỡ bằng 1 cái cốc, ghép lại với nhau\r\ncó thể dùng để đãi tiệc hoặc trang trí thành set tổng hợp tặng sinh nhật.', '2020-12-30 14:16:43'),
(3, 3, 1, 'Bánh sinh nhật ', 149000, 25, 'img/upload/gai.jpg', '/img/upload/gai.jpg', '/img/upload/gai.jpg', 'S', 1, 1, 'Bánh sinh nhật dễ thương cho bé gái', '2020-12-21 09:58:32'),
(4, 3, 1, 'Bánh sinh nhật', 149000, 25, 'img/upload/tonghop.jpg', '/img/upload/tonghop.jpg', '/img/upload/tonghop.jpg', 'L', 1, 1, 'Bánh sinh nhật cho mọi lứa tuổi', '2020-12-21 10:00:04'),
(5, 4, 1, 'Bánh đám cưới', 199000, 25, 'img/upload/mau-banh-cuoi-dep-1-150x150.jpg', '/img/upload/mau-banh-cuoi-dep-1-150x150.jpg', '/img/upload/mau-banh-cuoi-dep-1-150x150.jpg', 'XL', 1, 1, 'Bánh đẹp chuẩn cho đám cưới của bạn', '2020-12-21 10:02:20'),
(6, 4, 1, 'Bánh kem đám hỏi', 199000, 25, 'img/upload/mau-banh-cuoi-dep-12-150x150.jpg', '/img/upload/mau-banh-cuoi-dep-12-150x150.jpg', '/img/upload/mau-banh-cuoi-dep-12-150x150.jpg', 'L', 1, 1, 'Mẫu bánh đám hỏi cực đẹp cho mọi người cần', '2020-12-21 10:03:17'),
(7, 5, 2, 'Bánh kem cheesecake', 259000, 25, 'img/upload/cs1.jpg', '/img/upload/cs1.jpg', '/img/upload/cs1.jpg', 'L', 1, 1, 'Bánh cheese luôn là một sản phẩm được ưa chuộng mọi nơi', '2020-12-21 10:05:31'),
(8, 6, 3, 'Bánh su kem Creme', 179000, 25, 'img/upload/banh-su-kem-tiem-banh-kem-miacake-da-nang-324x324.jpg', '/img/upload/banh-su-kem-tiem-banh-kem-miacake-da-nang-324x324.jpg', '/img/upload/banh-su-kem-tiem-banh-kem-miacake-da-nang-324x324.jpg', 'M', 1, 1, 'Bánh su kem dành cho những cặp đôi khi hjen hò với nhau', '2020-12-21 10:07:17'),
(9, 3, 1, 'Bánh sinh nhật', 199000, 25, 'img/upload/kem2.jpg', '/img/upload/kem2.jpg', '/img/upload/kem2.jpg', 'M', 1, 1, 'Oke', '2020-12-22 10:02:56'),
(10, 3, 1, 'Bánh sinh nhật', 189000, 25, 'img/upload/sp6.jpg', '/img/upload/sp6.jpg', '/img/upload/sp6.jpg', 'L', 1, 1, 'Perfect', '2020-12-22 10:04:57'),
(11, 3, 1, 'Bánh sinh nhật', 179000, 25, 'img/upload/sp15jpg.jpg', '/img/upload/sp15jpg.jpg', '/img/upload/sp15jpg.jpg', 'L', 1, 1, 'Bánh kem bóng đá', '2020-12-22 10:07:49'),
(12, 2, 4, 'Cup 9 CupCake', 250000, 25, 'img/upload/c9.jpg', '/img/upload/c9.jpg', '/img/upload/c9.jpg', 'M', 1, 1, 'Okeee', '2020-12-29 10:13:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`) USING BTREE;

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE;

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`) USING BTREE;

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`) USING BTREE,
  ADD KEY `MaDM` (`MaDM`) USING BTREE,
  ADD KEY `MaLSP` (`MaLSP`,`MaDM`) USING BTREE,
  ADD KEY `MaLSP_2` (`MaLSP`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`) USING BTREE,
  ADD KEY `MaQuyen` (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`) USING BTREE,
  ADD KEY `LoaiSP` (`MaLSP`) USING BTREE,
  ADD KEY `MaKM` (`MaKM`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`);

--
-- Các ràng buộc cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`MaLSP`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
