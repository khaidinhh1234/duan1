-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

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
  `xephang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichchieu`
--

CREATE TABLE `lichchieu` (
  `id` int(11) NOT NULL,
  `namelichc` varchar(200) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_phong_chieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichchieu`
--

INSERT INTO `lichchieu` (`id`, `namelichc`, `id_phim`, `id_phong_chieu`) VALUES
(1, 'Phim Đang Chiếu', 6, 1),
(2, 'Phim Sắp Chiếu', 40, 1);

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
  `quoc_gia` varchar(200) NOT NULL,
  `gia_han_tuoi` int(50) NOT NULL,
  `date_phat_hanh` date NOT NULL,
  `thoi_luong_phim` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `id_lichchieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `tieu_de`, `daodien`, `dienvien`, `img`, `mo_ta`, `quoc_gia`, `gia_han_tuoi`, `date_phat_hanh`, `thoi_luong_phim`, `id_loai`, `id_lichchieu`) VALUES
(5, 'Đất rừng phương bắc', 'Victor Vũ', 'Kaity Nguyễn,Quang Thắng,Thuận Nguyễn,', 'Cuộc truy đuổi kỳ qoái.jpg', 'phim hay', 'Việt Nam', 16, '0000-00-00', 4, 5, 0),
(6, 'Búp bê', '', '', 'Năm đêm kinh hoàng.jpg', 'phim như hạch', '', 0, '0000-00-00', 2, 1, 0),
(7, 'Đất rừng phương nam', ' Quang Dũng', 'Trấn Thành,Mai Tài Phến,Kỳ Phong', 'Đất rừng phương nam.jpg', 'hay', 'Việt Nam', 17, '0000-00-00', 123, 3, 0),
(8, 'Siêu nhân', 'Siêu Nhân BỐ', 'Siêu nhân con và các siêu nhân khác', 'Những kỷ nguyên của taylor swift.jpg', 'hay phết', 'China', 18, '2023-11-09', 233, 3, 0),
(40, 'Người Vợ Cuối Cùng 1', 'Victor Vũ', 'Kaity Nguyễn,Quang Thắng,Thuận Nguyễn,', 'Mỹ nhân đạo chích.jpg', 'rất hay ', 'Việt Nam ', 18, '2023-11-18', 120, 1, 0),
(41, 'Người Vợ Cuối Cùng 1', 'Victor Vũ', 'Kaity Nguyễn,Quang Thắng,Thuận Nguyễn,', 'Yêu lại vợ ngầu.jpg', 'rất hay ', 'Việt Nam ', 18, '2023-11-18', 120, 1, 0),
(42, 'Cậu bé dũng sĩ Yakari 1', 'NGuyễn Tuân', '5 anh em siêu nhân ', 'Quỷ môn quan gọi hồn.jpg', 'hay', 'USA', 14, '2023-11-10', 1232, 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongchieu`
--

CREATE TABLE `phongchieu` (
  `id` int(11) NOT NULL,
  `id_rap` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `suc_chua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongchieu`
--

INSERT INTO `phongchieu` (`id`, `id_rap`, `name`, `suc_chua`) VALUES
(1, 2, '1', 1);

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
(1, 'Trung Kiên', 'kien48', '12345678', 'lkien0408@gmail.com', '0366508004', 'Yên Bình - Phúc La - Hà Đông', 0),
(2, 'Kiên idol', 'admin kien', '12345678', 'lkien0408@gmail.com', '0366508008', 'hà nội', 0),
(3, 'Lê Trung Kiên ', 'admin kien', '12345678', 'lkien0408@gmail.com', '0366508004', 'hà nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `id_thoi_gian_chieu` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_phim` int(11) NOT NULL,
  `so_ghe` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Chỉ mục cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `id_thoi_gian_chieu` (`id_thoi_gian_chieu`),
  ADD KEY `id_phim` (`id_phim`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaiphim`
--
ALTER TABLE `loaiphim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `phongchieu`
--
ALTER TABLE `phongchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `rapchieu`
--
ALTER TABLE `rapchieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `lichchieu`
--
ALTER TABLE `lichchieu`
  ADD CONSTRAINT `lichchieu_ibfk_1` FOREIGN KEY (`id_phong_chieu`) REFERENCES `phongchieu` (`id`),
  ADD CONSTRAINT `lichchieu_ibfk_2` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`);

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

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`id_thoi_gian_chieu`) REFERENCES `lichchieu` (`id`),
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
