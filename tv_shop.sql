-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2020 lúc 10:47 AM
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
-- Cơ sở dữ liệu: `tv_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL,
  `masanpham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madonhang`, `masanpham`, `soluong`, `dongia`) VALUES
(40, 277, '49N5500', 1, 9100000),
(41, 277, '32N4000', 1, 4800000),
(42, 278, '49N5500', 1, 9100000),
(43, 278, '32N4000', 1, 4800000),
(44, 279, '49N5500', 1, 9100000),
(45, 279, '32N4000', 1, 4800000),
(46, 280, '49N5500', 1, 9100000),
(47, 280, '32N4000', 2, 4800000),
(48, 280, '65B6T', 1, 48700000),
(49, 281, '49N5500', 1, 9100000),
(50, 281, '32N4000', 2, 4800000),
(51, 281, '65B6T', 1, 48700000),
(52, 282, '49N5500', 1, 9100000),
(53, 282, '32N4000', 2, 4800000),
(54, 282, '65B6T', 2, 48700000),
(55, 283, 'QA49Q6FN', 2, 15000000),
(56, 284, 'QA55Q8C', 1, 28300000),
(57, 284, 'QA55Q8CAM', 1, 43900000),
(58, 285, 'QA55Q8CAM', 2, 43900000),
(59, 285, 'QA55Q6FN', 1, 20300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngaythanhtoan` timestamp NULL DEFAULT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madonhang`, `tenkhachhang`, `sodienthoai`, `email`, `diachi`, `ngaytao`, `ngaythanhtoan`, `trangthai`) VALUES
(277, 'Nguyễn Thanh Thuỳ', '0918278788', '', 'lsdc', '2020-12-02 09:53:51', NULL, 1),
(278, 'Nguyễn Thanh Thuỳ', '0917293011', '', 'dsd', '2020-12-02 09:54:13', NULL, 1),
(279, 'Hoàng Văn Tam', '0918278788', '', 'dsâ', '2020-12-02 10:01:59', NULL, 1),
(280, 'Ngô Văn Chính', '0900900900', 'thuy@gmail.com', 'cv', '2020-12-02 10:02:40', NULL, 1),
(281, 'Ngô Văn Chính', '0900900900', 'thuy@gmail.com', 'cv', '2020-12-02 10:03:06', '2020-12-04 08:26:29', 1),
(282, 'Nguyễn Văn Long', '0918278788', '', 'dsađf', '2020-12-02 10:03:49', NULL, 1),
(283, 'Nguyễn Thanh Thuỳ', '0917293011', '', 'lo', '2020-12-02 10:05:55', NULL, 1),
(284, 'Hoàng Thị Thu', '0911826391', 'thu@gmail.com', 'Thanh Hoá\r\n', '2020-12-04 07:59:33', '2020-12-04 08:47:37', 1),
(285, 'Lê Thanh Sơn', '0999772577', 'son@gmail.com', 'Thái Bình', '2020-12-04 09:05:41', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

CREATE TABLE `nhanhieu` (
  `manhanhieu` int(11) NOT NULL,
  `tennhanhieu` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`manhanhieu`, `tennhanhieu`) VALUES
(18, 'Toshiba'),
(19, 'Sony'),
(20, 'LG'),
(21, 'Samsung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manhanhieu` int(11) NOT NULL,
  `giatien` float NOT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `manhanhieu`, `giatien`, `mota`, `avatar`, `ngaytao`) VALUES
('32N4000', 'Samsung 32N4000 32 inch full HD', 21, 4800000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/tivi-led-samsung-32n4000-32-inch-full-hd/\" style=\"color: rgb(51, 102, 255);\">Tivi Samsung 32 inch UA32N4000</a></span> được thiết kế đẹp mắt, trang nhã, nâng đỡ cho chiếc tivi là hai chân đế rất cứng cáp.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/tivi-samsung/\" style=\"color: rgb(51, 102, 255);\">Tivi Samsung</a></span> 32 inch có kích thước màn hình nhỏ gọn phù hợp để đặt trong các không gian nhỏ như: phòng ngủ, phòng làm việc,…</p>', '18e2999891374a475d0687ca9f989d83.jpg', '2020-11-28 08:33:25'),
('49N5500', 'Samsung 49 inch 49N5500', 21, 9100000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Trải nghiệm hình ảnh với chiều sâu ấn tượng. Công nghệ Tương Phản Tự Động (Contrast Enhancer) phủ nhiều lớp sáng tối lên toàn bộ màn hình mang đến cảm giác choáng ngợp trước những thước phim hùng vĩ.</span></p>', '8266e4bfeda1bd42d8f9794eb4ea0a13.png', '2020-11-28 08:33:25'),
('65B6T', 'OLED LG 65 inch 65B6T', 20, 48700000, '<p><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify; color: rgb(128, 0, 0);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-oled-lg-65-inch-65b6t/\" style=\"color: rgb(128, 0, 0);\">Tivi OLED LG 65 inch 65B6T</a></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;được thiết kế siêu mỏng vô cùng tinh tế (do thiết kế không cần dùng đèn nền). Với thiết kế này, bạn có thể thoải mái lựa chọn việc đặt để tivi ở bất kỳ đâu trong ngôi nhà của bạn dù là khi treo tường hay để bàn đều rất sang trọng.</span></p>', '4a47a0db6e60853dedfcfdf08a5ca249.png', '2020-11-28 08:37:12'),
('82NU8', 'Tivi Samsung 82 inch 82NU8', 21, 38900000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-samsung-82-inch-82nu8000-4k-premium-uhd-hdr/\" style=\"color: rgb(51, 102, 255);\">Smart tivi Samsung 4K 82 inch UA82NU8000</a></span> có thiết kế tràn viền với 3 cạnh viền siêu mỏng đi cùng chân đế nhựa màu bạc sang trọng góp phần làm nổi bật không gian nội thất của gia đình bạn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"font-weight: 700;\">Tivi Samsung 82 inch</span> có góc nhìn rộng phù hợp với không gian có kích thước lớn như: phòng khách, phòng họp hội nghị,…</p>', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-11-28 08:33:25'),
('QA49Q6FN', 'Samsung 4K 49 inch QA49Q6FN', 21, 15000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-qled-samsung-4k-49-inch-qa49q6fn/\" style=\"color: rgb(51, 102, 255);\">Smart Tivi QLED Samsung 4K 49 inch QA49Q6FN</a></span> sở hữu thiết kế liền mạch, tinh xảo đi kèm viền màn hình nhựa siêu mỏng cho trải nghiệm xem tivi của bạn thêm phần hấp dẫn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Chân đế hình chữ V bằng nhựa, kiểu dáng thanh mảnh nhưng vững chắc, giúp tivi đứng vững trên nhiều bề mặt.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-samsung-49-inch/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(51, 102, 255);\">Tivi Samsung 49 inch</span></a> hài hòa với nhiều không gian vừa và lớn như phòng khách, phòng ăn,…</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"> </p>', 'ae566253288191ce5d879e51dae1d8c3.jpg', '2020-11-28 08:33:25'),
('QA55Q6FN', 'Samsung 4K 55 inch QA55Q6FN', 21, 20300000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 500px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"font-size: 13px; line-height: 22px; background: url(\"../../../../../../themes/dienmayonline/images/icon_dot.png\") left top 8px no-repeat; padding-left: 13px;\">Độ phân giải <i class=\"cate-yt\"></i>4K cực nét cùng công nghệ Q HDR Elite hiển thị hình ảnh cực kì chi tiết trong cả vùng sáng hoặc tối nhất.</li></ul>', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', '2020-11-28 08:33:25'),
('QA55Q8C', 'Qled Samsung QA55Q', 21, 28300000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; width: 365px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 13px; list-style: none !important;\"><li style=\"padding: 0px; margin-bottom: 5px;\">Thùng tivi có: Sách hướng dẫn, Remote, Chân đế, Adapter</li><li style=\"padding: 0px; margin-bottom: 5px;\">Giao hàng miễn phí trong 4 tiếng (nếu đặt hàng sau 17h  sẽ giao hàng vào hôm sau)</li><li style=\"padding: 0px; margin-bottom: 5px;\">Áp dụng 100% chính sách bảo hành của nhà sản xuất.</li><li style=\"padding: 0px; margin-bottom: 5px;\">Bảo hành chính hãng tivi 2 năm, adapter 2 năm</li></ul>', '156005c5baf40ff51a327f1c34f2975b.jpg', '2020-11-28 08:33:25'),
('QA55Q8CAM', 'Samsung 55 inch QA55Q8CAM', 21, 43900000, '<p><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\">Smart Tivi Cong 55 inch QA55Q8CAM</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> sở hữu cho mình một thiết kế hiện đại, và mang vẻ đẹp đẳng cấp tạo điểm nhấn cho không gian cho căn nhà của bạn. Với thiết kế </span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\">màn hình cong</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> có kích thước lên đến</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> 55 inch</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> vậy nên rất phù hợp với phòng có diện tích lớn như phòng khách, phòng họp,…</span></p>', 'd0096ec6c83575373e3a21d129ff8fef.jpg', '2020-11-28 08:33:25'),
('UA43NU7800', 'Samsung 4K 43 inch UA43NU7800', 21, 8400000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/smart-tivi-samsung-4k-43-inch-ua43nu7800/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">Smart Tivi Samsung 4K 43 inch UA43NU7800</span></a> với thiết kế gọn nhưng không kém phần tinh tế với viền màn hình mỏng, tông đen hiện đại song song đó là thiết kế chân bằng nhựa đế cứng cáp giúp tivi dễ dàng trụ vững trên nhiều dạng mặt phẳng khác nhau.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước màn hình<span style=\"font-weight: 700;\"> 43 inch</span> giúp bạn dễ dàng bố trí tivi ở nhiều nơi như: phòng khách, phòng họp, phòng ăn,…</p>', '30e62fddc14c05988b44e7c02788e187.jpg', '2020-11-28 08:33:25'),
('UA49J5250', 'Samsung 49 inch UA49J5250', 21, 8600000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-samsung-49-inch-ua49j5250/\" style=\"color: rgb(51, 102, 255);\">Smart Tivi Samsung 49 inch UA49J5250</a></span> mang trong mình thiết kế tinh tế và sang trọng. Bên cạnh đó, chân đế to bản cũng là điểm sáng trong thiết kế, nó còn giúp tivi có thể đứng vững chãi trên nhiều bề mặt.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước <span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-samsung-49-inch/\" style=\"color: rgb(51, 102, 255);\">tivi Samsung 49 inch</a></span> rộng rãi, phù hợp với nhiều không gian bố trí trong nhà.</p>', '8cda81fc7ad906927144235dda5fdf15.jpg', '2020-11-28 08:33:25'),
('UA55N', 'SAMSUNG 55 INCH UA55N', 21, 11400000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; width: 365px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 13px; list-style: none !important;\"><li style=\"padding: 0px; margin-bottom: 5px;\">Thùng tivi có: Sách hướng dẫn, Remote, Chân đế, Adapter</li><li style=\"padding: 0px; margin-bottom: 5px;\">Giao hàng miễn phí trong 4 tiếng (nếu đặt hàng sau 17h  sẽ giao hàng vào hôm sau)</li><li style=\"padding: 0px; margin-bottom: 5px;\">Áp dụng 100% chính sách bảo hành của nhà sản xuất.</li><li style=\"padding: 0px; margin-bottom: 5px;\">Bảo hành chính hãng tivi 2 năm, adapter 2 năm</li></ul>', '38070136893366144b44964a83b9a1c7.jpg', '2020-11-28 08:33:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`tendangnhap`, `matkhau`, `email`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin@gmail.com'),
('viethan', 'c81e728d9d4c2f636f067f89cc14862c', 'viethan@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(11) NOT NULL,
  `tentrangthai` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `tentrangthai`) VALUES
(1, 'Mới tạo'),
(2, 'Đang giao hàng'),
(3, 'Đã giao hàng'),
(4, 'Kết thúc'),
(5, 'Đã huỷ đơn');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_donhang_trangthai`
-- (See below for the actual view)
--
CREATE TABLE `v_donhang_trangthai` (
`madonhang` int(11)
,`tenkhachhang` varchar(50)
,`sodienthoai` varchar(15)
,`diachi` varchar(50)
,`email` varchar(50)
,`ngaytao` timestamp
,`ngaythanhtoan` timestamp
,`id` int(11)
,`tentrangthai` varchar(30)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_sanpham_nhanhieu`
-- (See below for the actual view)
--
CREATE TABLE `v_sanpham_nhanhieu` (
`masanpham` varchar(30)
,`tensanpham` varchar(50)
,`giatien` float
,`manhanhieu` int(11)
,`tennhanhieu` varchar(20)
,`avatar` varchar(255)
,`mota` text
,`ngaytao` timestamp
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_donhang_trangthai`
--
DROP TABLE IF EXISTS `v_donhang_trangthai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_donhang_trangthai`  AS SELECT `donhang`.`madonhang` AS `madonhang`, `donhang`.`tenkhachhang` AS `tenkhachhang`, `donhang`.`sodienthoai` AS `sodienthoai`, `donhang`.`diachi` AS `diachi`, `donhang`.`email` AS `email`, `donhang`.`ngaytao` AS `ngaytao`, `donhang`.`ngaythanhtoan` AS `ngaythanhtoan`, `trangthai`.`id` AS `id`, `trangthai`.`tentrangthai` AS `tentrangthai` FROM (`donhang` join `trangthai` on(`donhang`.`trangthai` = `trangthai`.`id`)) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_sanpham_nhanhieu`
--
DROP TABLE IF EXISTS `v_sanpham_nhanhieu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sanpham_nhanhieu`  AS SELECT `sanpham`.`masanpham` AS `masanpham`, `sanpham`.`tensanpham` AS `tensanpham`, `sanpham`.`giatien` AS `giatien`, `nhanhieu`.`manhanhieu` AS `manhanhieu`, `nhanhieu`.`tennhanhieu` AS `tennhanhieu`, `sanpham`.`avatar` AS `avatar`, `sanpham`.`mota` AS `mota`, `sanpham`.`ngaytao` AS `ngaytao` FROM (`sanpham` join `nhanhieu` on(`sanpham`.`manhanhieu` = `nhanhieu`.`manhanhieu`)) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manuochoa` (`masanpham`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`);

--
-- Chỉ mục cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  ADD PRIMARY KEY (`manhanhieu`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tendangnhap`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `manhanhieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
