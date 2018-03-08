-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2018 lúc 02:58 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `new_fp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `IDDH` int(11) DEFAULT NULL,
  `TenSP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `IDDH`, `TenSP`, `SL`) VALUES
(1, 6, 'Peripera SPF', 2),
(2, 7, 'Peripera SPF', 3),
(3, 8, 'Super Aqua-Missha', 1),
(4, 9, 'Jeju lava/50ml', 1),
(5, 10, 'Super Aqua-Missha', 5),
(6, 11, 'Peripera SPF', 22),
(7, 12, 'Peripera SPF', 1),
(8, 12, 'Jeju lava/50ml', 1),
(9, 12, 'Jeju sparkling/50ml', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `ID` int(11) NOT NULL,
  `IDSP` int(11) DEFAULT NULL,
  `TenSP` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gia` decimal(10,0) DEFAULT NULL,
  `Hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Noibat` int(3) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`ID`, `IDSP`, `TenSP`, `Gia`, `Hinh`, `Mota`, `Noibat`, `created_at`) VALUES
(1, 1, 'Jeju lava/50ml', '120000', 'public/image/product/1.jpg', 'Nước khoáng từ suối nước nóng ở núi Sanbang, Jeju – hòn đảo được hình thành từ 800 nghìn năm trước – cực kỳ quý hiếm trên toàn thế giới. Nó là nguồn nước siêu sạch bắt nguồn từ sâu trong lòng đất (sâu 535m) mà bàn tay con người không thể chạm đến. \r\n16 lo', 0, '0000-00-00'),
(2, 2, 'Jeju sparkling/50ml', '90000', 'public/image/product/2.jpg', 'Các tính chất đặc biệt của nước biển sâu vùng đá nham thạch \r\nNước biển sâu vùng đá nham thạch chứa nhiều khoáng chất đặc biệt do nước biển thấm qua các lớp đá nham thạch dưới lòng đại dương.', 1, '0000-00-00'),
(3, 1, 'Peripera SPF', '80000', 'public/image/product/3.jpg', 'Nước biển sâu vùng đá nham thạch là nước biển chảy ngầm qua lớp đá nham thạch tại đảo Jeju qua hàng trăm nghìn năm \r\nNước biển sâu vùng đá nham thạch được lọc sạch qua lớp đá nham thạch của đảo Jeju trong hàng trăm nghìn năm', 0, '0000-00-00'),
(4, 2, 'Ink-cushion', '70000', 'public/image/product/4.jpg', 'Đôi mắt đầy sức sống với đầu mát-xa mát lạnh \r\nMát-xa bằng đầu kim loại mát lạnh giúp lưu thông máu và vùng da mắt trở nên săn chắc, đầy sức sống.', 2, '0000-00-00'),
(5, 1, 'Super Aqua-Missha', '95000', 'public/image/product/5.jpg', 'Nước biển dung nham chứa thành phần khoáng chất đặc biệt giúp kích hoạt năng lượng dưỡng ẩm, có tác dụng chống lão hóa da. \r\n', 3, '0000-00-00'),
(6, 1, 'Jeju lava/50ml', '120000', 'public/image/product/8.jpg', 'Nước khoáng từ suối nước nóng ở núi Sanbang, Jeju – hòn đảo được hình thành từ 800 nghìn năm trước – cực kỳ quý hiếm trên toàn thế giới. Nó là nguồn nước siêu sạch bắt nguồn từ sâu trong lòng đất (sâu 535m) mà bàn tay con người không thể chạm đến. \r\n16 lo', 0, '0000-00-00'),
(7, 2, 'Jeju sparkling/50ml', '90000', 'public/image/product/2.jpg', 'Các tính chất đặc biệt của nước biển sâu vùng đá nham thạch \r\nNước biển sâu vùng đá nham thạch chứa nhiều khoáng chất đặc biệt do nước biển thấm qua các lớp đá nham thạch dưới lòng đại dương.', 1, '0000-00-00'),
(8, 1, 'Peripera SPF', '80000', 'public/image/product/6.jpg', 'Nước biển sâu vùng đá nham thạch là nước biển chảy ngầm qua lớp đá nham thạch tại đảo Jeju qua hàng trăm nghìn năm \r\nNước biển sâu vùng đá nham thạch được lọc sạch qua lớp đá nham thạch của đảo Jeju trong hàng trăm nghìn năm', 0, '0000-00-00'),
(9, 2, 'Ink-cushion', '70000', 'public/image/product/9.jpg', 'Đôi mắt đầy sức sống với đầu mát-xa mát lạnh \r\nMát-xa bằng đầu kim loại mát lạnh giúp lưu thông máu và vùng da mắt trở nên săn chắc, đầy sức sống.', 2, '0000-00-00'),
(10, 1, 'Super Aqua-Missha', '95000', 'public/image/product/7.jpg', 'Nước biển dung nham chứa thành phần khoáng chất đặc biệt giúp kích hoạt năng lượng dưỡng ẩm, có tác dụng chống lão hóa da. \r\n', 3, '0000-00-00'),
(11, 1, 'Jeju lava/50ml', '120000', 'public/image/product/8.jpg', 'Nước khoáng từ suối nước nóng ở núi Sanbang, Jeju – hòn đảo được hình thành từ 800 nghìn năm trước – cực kỳ quý hiếm trên toàn thế giới. Nó là nguồn nước siêu sạch bắt nguồn từ sâu trong lòng đất (sâu 535m) mà bàn tay con người không thể chạm đến. \r\n16 lo', 0, '0000-00-00'),
(12, 2, 'Jeju sparkling/50ml', '90000', 'public/image/product/2.jpg', 'Các tính chất đặc biệt của nước biển sâu vùng đá nham thạch \r\nNước biển sâu vùng đá nham thạch chứa nhiều khoáng chất đặc biệt do nước biển thấm qua các lớp đá nham thạch dưới lòng đại dương.', 1, '0000-00-00'),
(13, 1, 'Peripera SPF', '80000', 'public/image/product/6.jpg', 'Nước biển sâu vùng đá nham thạch là nước biển chảy ngầm qua lớp đá nham thạch tại đảo Jeju qua hàng trăm nghìn năm \r\nNước biển sâu vùng đá nham thạch được lọc sạch qua lớp đá nham thạch của đảo Jeju trong hàng trăm nghìn năm', 0, '0000-00-00'),
(14, 2, 'Ink-cushion', '70000', 'public/image/product/9.jpg', 'Đôi mắt đầy sức sống với đầu mát-xa mát lạnh \r\nMát-xa bằng đầu kim loại mát lạnh giúp lưu thông máu và vùng da mắt trở nên săn chắc, đầy sức sống.', 2, '0000-00-00'),
(15, 1, 'Super Aqua-Missha', '95000', 'public/image/product/7.jpg', 'Nước biển dung nham chứa thành phần khoáng chất đặc biệt giúp kích hoạt năng lượng dưỡng ẩm, có tác dụng chống lão hóa da. \r\n', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IDDH` int(11) NOT NULL,
  `Ten` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tongtien` decimal(10,0) DEFAULT NULL,
  `SDT` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAY` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IDDH`, `Ten`, `Diachi`, `Tongtien`, `SDT`, `NGAY`) VALUES
(6, 'Hao Nguyen Huy', 'ktx khu B, tx.Di An', '160', '981404392', '2018-01-13'),
(7, 'huyr', 'Q.thủ đức,TP.Hồ Chí Minh', '240', '012346546', '2018-01-13'),
(8, 'van', 'ha noi', '95', '01233333444', '2018-01-13'),
(9, 'bất bại đại nhân', 'sài gòn', '120', '012345678', '2018-01-13'),
(10, 'anh', 'da lat', '475', '0123456755', '2018-01-13'),
(11, 'duyên', 'ktx khu B, tx.Di An', '1760', '012345678', '2018-01-13'),
(12, 'Duong', 'Khu 3 ẤP 7 Xã An Phước Huyện Long Thành Tỉnh Đồng Nai', '380000', '0967488581', '2018-01-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `ID` int(11) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`ID`, `Hinh`) VALUES
(1, 'public/image/banner/banner-1.jpg'),
(2, 'public/image/banner/banner-2.jpg'),
(3, 'public/image/banner/banner-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `IDLoaiSp` int(11) NOT NULL,
  `TenLoaiSP` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`IDLoaiSp`, `TenLoaiSP`) VALUES
(1, 'Dưỡng Da'),
(2, 'Trang Điểm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_at`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2017-12-23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDDH` (`IDDH`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDH`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`IDLoaiSp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `IDLoaiSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IDDH`) REFERENCES `donhang` (`IDDH`);

--
-- Các ràng buộc cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD CONSTRAINT `chitietsp_ibfk_1` FOREIGN KEY (`IDSP`) REFERENCES `loaisp` (`IDLoaiSp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
