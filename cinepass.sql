-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2023 lúc 12:10 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinepass`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_phim`, `id_user`, `noidung`, `ngaybinhluan`) VALUES
(1, 6, 2, 'khá ok', '2023-12-02 16:21:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hang` varchar(255) NOT NULL,
  `cot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ngay_tt` datetime NOT NULL,
  `trang_thai` int(1) DEFAULT 0,
  `thanh_tien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ngay_tt`, `trang_thai`, `thanh_tien`) VALUES
(95, '2023-11-30 14:03:54', 0, 385000),
(96, '2023-11-30 16:27:55', 0, 510000),
(97, '2023-11-30 17:23:11', 1, 285000),
(98, '2023-11-30 17:27:37', 0, 285000),
(99, '2023-11-30 17:32:42', 0, 0),
(100, '2023-11-30 17:33:00', 0, 285000),
(101, '2023-11-30 17:35:24', 0, 285000),
(102, '2023-11-30 17:36:22', 0, 285000),
(103, '2023-11-30 18:07:37', 1, 285000),
(104, '2023-12-01 11:35:07', 1, 385000),
(105, '2023-12-01 12:03:11', 1, 385000),
(106, '2023-12-01 12:07:47', 1, 285000),
(107, '2023-12-01 16:12:59', 1, 985000),
(108, '2023-12-01 16:24:43', 1, 1185000),
(109, '2023-12-01 16:30:13', 1, 585000),
(110, '2023-12-01 22:56:12', 1, 3585000),
(111, '2023-12-01 23:25:23', 1, 200000),
(112, '2023-12-01 23:32:30', 0, 1185000),
(113, '2023-12-01 23:47:23', 0, 3600000),
(114, '2023-12-02 11:21:12', 1, 700000),
(115, '2023-12-02 16:27:44', 1, 285000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int(11) NOT NULL,
  `id_lich_chieu` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `thoi_gian_chieu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `id_lich_chieu`, `id_phong`, `thoi_gian_chieu`) VALUES
(6, 10, 1, '23:15:00'),
(7, 11, 1, '23:15:00'),
(8, 10, 2, '17:00:00'),
(9, 11, 2, '17:00:00'),
(10, 14, 1, '23:15:00'),
(11, 14, 1, '12:00:00'),
(12, 13, 1, '00:00:00'),
(13, 11, 1, '22:00:00'),
(14, 15, 1, '22:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichchieu`
--

CREATE TABLE `lichchieu` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichchieu`
--

INSERT INTO `lichchieu` (`id`, `id_phim`, `ngay_chieu`) VALUES
(10, 6, '2023-11-27'),
(11, 7, '2023-11-27'),
(12, 8, '2023-12-01'),
(13, 8, '2023-12-02'),
(14, 5, '2023-12-04'),
(15, 6, '2023-12-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphim`
--

CREATE TABLE `loaiphim` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphim`
--

INSERT INTO `loaiphim` (`id`, `name`) VALUES
(1, 'Kinh Dị'),
(2, 'Ngôn Tình'),
(3, 'Hài'),
(5, 'Ca nhạc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `daodien` varchar(255) NOT NULL,
  `dienvien` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `date_phat_hanh` date NOT NULL,
  `thoi_luong_phim` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `quoc_gia` varchar(255) NOT NULL,
  `gia_han_tuoi` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `link_trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `tieu_de`, `daodien`, `dienvien`, `img`, `mo_ta`, `date_phat_hanh`, `thoi_luong_phim`, `id_loai`, `trangthai`, `quoc_gia`, `gia_han_tuoi`, `banner`, `link_trailer`) VALUES
(5, 'Đất rừng phương bắc', '', '', 'Kỳ án trên đồi tuyết.jpg', 'phim hay', '0000-00-00', 4, 3, 0, '', 0, '', ''),
(6, 'Búp bê', '', '', 'Năm đêm kinh hoàng.jpg', 'phim như hạch', '0000-00-00', 2, 1, 0, '', 0, '', ''),
(7, 'Đất rừng phương nam', '', '', 'Đất rừng phương nam.jpg', 'hay', '0000-00-00', 123, 3, 0, '', 0, '', ''),
(8, 'Siêu nhân', '', '', 'Biệt đội Marvels.jpg', 'hay phết', '2023-11-09', 233, 3, 0, '', 0, '', ''),
(22, 'QUỶ LÙN TINH NGHỊCH: ĐỒNG TÂM HIỆP NHẠC', '', '', 'wolfoo và hòn đảo kỳ bí.jpg', 'Sự xuất hiện đột ngột của John Dory, anh trai thất lạc đã lâu của Branch mở ra quá khứ bí mật được che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để làm một ban nhạc như xưa trở thành chuyến phiêu lưu âm nhạc đầy cảm xúc, tràn trề hi vọng về một cuộc sum họp gia đình tuyệt với nhất.', '2023-11-23', 85, 2, 1, '', 0, '', ''),
(23, 'QUỶ LÙN TINH NGHỊCH: ĐỒNG TÂM HIỆP NHẠC', '', '', 'wolfoo và hòn đảo kỳ bí.jpg', 'Sự xuất hiện đột ngột của John Dory, anh trai thất lạc đã lâu của Branch mở ra quá khứ bí mật được che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để làm một ban nhạc như xưa trở thành chuyến phiêu lưu âm nhạc đầy cảm xúc, tràn trề hi vọng về một cuộc sum họp gia đình tuyệt với nhất.', '2023-11-23', 85, 2, 1, '', 0, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongchieu`
--

CREATE TABLE `phongchieu` (
  `id` int(11) NOT NULL,
  `id_rap` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongchieu`
--

INSERT INTO `phongchieu` (`id`, `id_rap`, `name`) VALUES
(1, 1, 'P101'),
(2, 2, 'P102');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapchieu`
--

CREATE TABLE `rapchieu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vi_tri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rapchieu`
--

INSERT INTO `rapchieu` (`id`, `name`, `vi_tri`) VALUES
(1, 'CinePass Hà Đông', 'Hà Đông'),
(2, 'CinePass Ba Đình', 'Ba Đình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `vai_tro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `user`, `pass`, `email`, `phone`, `dia_chi`, `vai_tro`) VALUES
(1, 'Trung Kiên', 'kien48', '12345678', 'lkien0408@gmail.com', '0366508004', 'Yên Bình - Phúc La - Hà Đông', 1),
(2, 'Kiên', 'admin kien', '12345678', 'lkien0408@gmail.com', '0366508008', 'hà nội', 0),
(3, 'Lê Trung Kiên ', 'admin kien', '12345678', 'lkien0408@gmail.com', '0366508004', 'hà nội', 0),
(4, 'Ảo game', 'kien', '1234', 'kienltph35295@fpt.edu.vn', '0366508004', 'hà nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_thoi_gian_chieu` int(11) NOT NULL,
  `id_ngay_chieu` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `ghe` varchar(255) NOT NULL,
  `combo` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 0,
  `ngay_dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id`, `id_phim`, `id_thoi_gian_chieu`, `id_ngay_chieu`, `id_tk`, `ghe`, `combo`, `price`, `id_hd`, `trang_thai`, `ngay_dat`) VALUES
(102, 8, 12, 13, 1, 'A2, A1', 'Combo-Wish-B3', '385000', 95, 1, '2023-11-30 14:03:54'),
(103, 8, 12, 13, 1, 'B3, B2', 'Combo-Wish-C1, Combo-Wish-B3', '510000', 96, 1, '2023-11-30 16:27:55'),
(104, 8, 12, 13, 4, 'D8', 'Combo-Wish-B3', '285000', 97, 1, '2023-11-30 17:23:11'),
(105, 8, 12, 13, 4, 'E8', 'Combo-Wish-B3', '285000', 98, 0, '2023-11-30 17:27:37'),
(106, 8, 12, 13, 4, 'E2', 'Combo-Wish-B3', '285000', 100, 0, '2023-11-30 17:33:00'),
(107, 8, 12, 13, 4, 'E9', 'Combo-Wish-B3', '285000', 101, 0, '2023-11-30 17:35:24'),
(108, 8, 12, 13, 4, 'E9', 'Combo-Wish-B3', '285000', 102, 1, '2023-11-30 17:36:22'),
(109, 8, 12, 13, 4, 'E3', 'Combo-Wish-B3', '285000', 103, 1, '2023-11-30 18:07:37'),
(110, 8, 12, 13, 4, 'E7, E8', 'Combo-Wish-B3', '385000', 104, 1, '2023-12-01 11:35:07'),
(111, 6, 14, 15, 4, 'E8, E9', 'Combo-Wish-B3', '385000', 105, 1, '2023-12-01 12:03:11'),
(112, 8, 12, 13, 4, 'E8', 'Combo-Wish-B3', '285000', 106, 1, '2023-12-01 12:07:47'),
(117, 6, 14, 15, 4, 'E1, E9', '', '200000', 111, 1, '2023-12-01 23:25:23'),
(118, 6, 14, 15, 4, 'D1,D3,D2,D4,D5,D6,D7', 'Combo-Wish-B3', '1185000', 112, 1, '2023-12-01 23:32:30'),
(119, 6, 14, 15, 6, 'C7,C6,B6,B7,A7,A6,A5,B5,C5,C4,B4,A4,A3,B3,C3,B1,C2,B2,A2,A1,C1', '', '3600000', 113, 1, '2023-12-01 23:47:23'),
(120, 5, 11, 14, 2, 'A8,D8,C8,B8,A9,E8,E9', '', '700000', 114, 1, '2023-12-02 11:21:12'),
(121, 5, 11, 14, 2, 'E1', 'Combo-Wish-B3', '285000', 115, 1, '2023-12-02 16:27:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim` (`id_phim`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lich_chieu` (`id_lich_chieu`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim` (`id_phim`);

--
-- Chỉ mục cho bảng `loaiphim`
--
ALTER TABLE `loaiphim`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rap` (`id_rap`);

--
-- Chỉ mục cho bảng `rapchieu`
--
ALTER TABLE `rapchieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tk` (`id_tk`),
  ADD KEY `ve_ibfk_2` (`id_thoi_gian_chieu`),
  ADD KEY `id_ngay_chieu` (`id_ngay_chieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `loaiphim`
--
ALTER TABLE `loaiphim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `rapchieu`
--
ALTER TABLE `rapchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD CONSTRAINT `khung_gio_chieu_ibfk_1` FOREIGN KEY (`id_lich_chieu`) REFERENCES `lichchieu` (`id`),
  ADD CONSTRAINT `khung_gio_chieu_ibfk_2` FOREIGN KEY (`id_phong`) REFERENCES `phongchieu` (`id`);

--
-- Các ràng buộc cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD CONSTRAINT `lichchieu_ibfk_1` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loaiphim` (`id`);

--
-- Các ràng buộc cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD CONSTRAINT `phongchieu_ibfk_1` FOREIGN KEY (`id_rap`) REFERENCES `rapchieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
