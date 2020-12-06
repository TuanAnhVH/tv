-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2020 lúc 10:57 AM
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
(59, 285, 'QA55Q6FN', 1, 20300000),
(60, 286, 'UA55N', 2, 11400000);

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
(285, 'Lê Thanh Sơn', '0999772577', 'son@gmail.com', 'Thái Bình', '2020-12-04 09:05:41', NULL, 1),
(286, 'Hoàng Thị Tứ', '0918263511', 'tu@gmail.com', 'Hà Nội', '2020-12-04 09:52:33', NULL, 1);

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
(18, 'Sharp'),
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
('43LK5000', 'LG 43 Inch Full HD 43LK5000', 20, 5700000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Kích thước không chân/treo tường: Dài: 97cm – Rộng: 6.68cm – Cao: 56,9cm</li></ul>', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-12-05 13:59:10'),
('43LM5700', 'LG 43 inch 43LM5700', 20, 6300000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"font-weight: 700;\"><a href=\"https://thegioidienmayonline.com/smart-tivi-lg-43-inch-43lm5700/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(51, 102, 255);\">Smart Tivi LG 43 inch 43LM5700PTC</span></a></span>&nbsp;có thiết kế viền mỏng và phong cách, tạo nên sự hài hòa với nội thất của bạn để tạo ra một trải nghiệm xem tốt hơn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Tivi LG 43 inch phù hợp với các không gian vừa và nhỏ như phòng khách, phòng ngủ,…</p>', 'ae566253288191ce5d879e51dae1d8c3.jpg', '2020-12-05 14:07:00'),
('43Q65T', 'Samsung 43Q65T 43 inch Smart TV', 21, 14300000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Mở ra kỷ nguyên chất lượng hình ảnh chân thực bạn chưa từng thấy. Trên một khung hình sống động, từng chi tiết nhỏ nhất được tái tạo tỉ mỉ đến khó tin, kết hợp với độ phân giải đỉnh cao, QLED 4K Q65T như bao trùm mọi giác quan, biến từng thước phim trở nên chân thật như chính bạn đang chứng kiến.</span></p>', '9eb60bc8bf2b004e4db7d1cc0d5f1d8c.png', '2020-12-05 14:55:39'),
('43UM7400PTA', 'LG 4K 43 inch 43UM7400PTA', 20, 8000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-lg-4k-43-inch-43um7400pta/\" style=\"color: rgb(51, 102, 255);\">Smart Tivi LG 4K 43 inch 43UM7400PTA</a>&nbsp;</span>sở hữu thiết kế tối giản đi kèm chân đế hình chữ V thanh mảnh nhưng không kém phần vững chãi, giúp tivi LG trụ vững trên mọi không gian đặt.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Tivi LG 43 inch phù hợp với các không gian vừa và nhỏ như phòng khách, phòng ngủ,…</p>', '18e2999891374a475d0687ca9f989d83.jpg', '2020-12-05 14:02:40'),
('49N5500', 'Samsung 49 inch 49N5500', 21, 9100000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Trải nghiệm hình ảnh với chiều sâu ấn tượng. Công nghệ Tương Phản Tự Động (Contrast Enhancer) phủ nhiều lớp sáng tối lên toàn bộ màn hình mang đến cảm giác choáng ngợp trước những thước phim hùng vĩ.</span></p>', '8266e4bfeda1bd42d8f9794eb4ea0a13.png', '2020-11-28 08:33:25'),
('49NANO81TNA', 'NanoCell LG 4K 49 inch 49NANO81TNA', 20, 46000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Smart Tivi LG 4K 49 inch 49NANO81TNA&nbsp;sở hữu thiết kế đơn giản, thanh mảnh cùng chân đế hình bán nguyệt làm nổi bật nét độc đáo riêng của&nbsp;tivi. Sự kết hợp hài hòa của tổng thể tạo nên nét thanh lịch cho cả không gian của bạn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước màn hình&nbsp;tivi LG 49 inch&nbsp;phù hợp với phòng khách, phòng ngủ,… vừa giải trí cũng vừa là vật trang trí ấn tượng</p>', '64b8299d1597b8a5c7b9cb9c88642f6c.jpg', '2020-12-05 14:57:12'),
('49UM7400PTA', 'LG 4K 49 inch 49UM7400PTA', 20, 11300000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Bluetooth: Có (kết nối loa bluetooth)</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Kết nối Internet: Cổng LAN, Wifi</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Cổng AV: Có cổng Composite và cổng Component</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cổng HDMI: 3 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Cổng xuất âm thanh: Cổng Optical (Digital Audio Out), HDMI ARC</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">USB: 2 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Tích hợp đầu thu kỹ thuật số: DVB-C, DVB-T2, DVB-T2C</li></ul>', '85b6f89b41cae26786ac72365fff771b.jpg', '2020-12-05 14:14:17'),
('50UM7600PTA', 'LG 4K 50 inch 50UM7600PTA', 20, 10100000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 500px; float: left; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Độ phân giải 4K sắc nét gấp 4 lần Full HD.</li><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Công nghệ 4K Active HDR tăng cường độ tương phản.</li><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Công nghệ True Color Accuracy cho màu sắc chính xác.</li><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Chip xử lý Quad Core hoàn thiện chất lượng hình ảnh.</li></ul><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\">&nbsp;</p>', 'db3a17f7bcac837ecc1fe2bc630a5473.jpg', '2020-12-05 14:13:07'),
('55B6T', 'OLED LG 55 inch 55B6T', 20, 21000000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Với thiết kế siêu mỏng Blade Slim (do không có đèn nền phía sau),&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-oled-lg-55-inch-55b6t/\" style=\"color: rgb(0, 0, 255);\">Tivi OLED LG 55B6T</a></span></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;chắc chắn sẽ là điểm nhấn đắt giá trong việc trang trí ngôi nhà bạn dù là khi treo tường hay để bàn</span></p>', '156005c5baf40ff51a327f1c34f2975b.jpg', '2020-12-05 13:57:38'),
('55C8PTA', 'OLED LG 4K 55 inch 55C8PTA', 20, 23500000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-oled-lg-4k-55-inch-55c8pta/\" style=\"color: rgb(0, 0, 255);\">Smart Tivi OLED LG 4K 55 inch 55C8PTA</a></span>&nbsp;với thiết kế không viền sang trọng hòa quyện hoàn hảo với mọi không gian.&nbsp;<span style=\"font-weight: 700;\">Tivi OLED LG</span>&nbsp;tựa như một kiệt tác nghệ thuật, tạo điểm nhấn đẳng cấp cho căn phòng.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Màn hình tivi lớn 55 inch phù hợp với những gian phòng rộng như phòng khách, phòng họp ở công ty,… hoặc với những gia chủ thích xem tivi trên màn hình lớn.</p>', '032b2cc936860b03048302d991c3498f.jpg', '2020-12-05 14:01:30'),
('55Q70TAK', 'Samsung 55Q70TAK 55 inch', 21, 33000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"font-weight: 700;\">Đắm Chìm Trong Khung Hình 4K Đỉnh Cao</span></p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Mở ra kỷ nguyên chất lượng hình ảnh chân thực bạn chưa từng thấy. Trên một khung hình sống động, từng chi tiết nhỏ nhất được tái tạo tỉ mỉ đến khó tin, kết hợp với độ phân giải đỉnh cao, QLED 4K Q70T như bao trùm mọi giác quan, biến từng thước phim trở nên chân thật như chính bạn đang chứng kiến.</p>', '59b2900aa03cb2182a51cdb520b535b6.png', '2020-12-05 15:00:01'),
('55UM7300', 'LED LG 4K 55 inch 55UM7300', 20, 10200000, '<p><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Cho dù bạn ngồi chỗ nào, góc xem rộng của tấm nền IPS 4K giúp hiển thị độ chính xác màu gần như 100%, thậm chí từ góc xem 60 độ.</span></p><p><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">4K Cinema HDR của tivi LG 55 inch mang đến hình ảnh của nhà làm phim bằng việc hỗ trợ hầu hết các định dạng HDR. Đắm chìm trong không gian điện ảnh với các định dạng HDR chính bao gồm Advanced HDR của Techncolor và HDR10 Pro.</span></p>', '9414a8f5b810972c3c9a0e2860c07532.jpg', '2020-12-05 14:10:27'),
('55UM7400PTA', 'LG 4K 55 inch 55UM7400PTA', 20, 11800000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Chíp xử lý thông minh: Quad Core Processor</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">HDR: 4K Active HDR</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">HDR10 Pro &amp; HLG: Có</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Bộ nâng cấp màu – Color Enhancer: Advanced Color Enhancer</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Màu sắc chính xác: True Color Accuracy</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Nâng cấp độ phân giải – Upscaler: 4K Upscaler</li></ul>', '8df7b73a7820f4aef47864f2a6c5fccf.jpg', '2020-12-05 14:08:57'),
('55UM7600PTA', 'LG 4K 55 inch 55UM7600PTA', 20, 12600000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Tích hợp đầu thu kỹ thuật số: DVB-C, DVB-T2, DVB-T2C</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Tính năng thông minh (Cập nhật 3/2019)</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Hệ điều hành, giao diện: WebOS 4.5</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Các ứng dụng sẵn có: Youtube, Netflix, Trình duyệt web, LG Content Store</li></ul>', 'edab7ba7e203cd7576d1200465194ea8.jpg', '2020-12-05 14:11:39'),
('65A8G', '4K Sony 65inch 65A8G', 19, 49600000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Sống trọn với hiện tại cùng hình ảnh chân thực như cuộc sống và âm thanh xứng tầm đẳng cấp. Hình ảnh tinh tế đến từng chi tiết kết hợp cùng Sound-from-Picture Reality™ của chúng tôi cho hiệu suất âm thanh-hình ảnh tuyệt diệu.</span></p>', '9eb60bc8bf2b004e4db7d1cc0d5f1d8c.png', '2020-12-05 14:31:28'),
('65B6T', 'OLED LG 65 inch 65B6T', 20, 48700000, '<p><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify; color: rgb(128, 0, 0);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-oled-lg-65-inch-65b6t/\" style=\"color: rgb(128, 0, 0);\">Tivi OLED LG 65 inch 65B6T</a></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;được thiết kế siêu mỏng vô cùng tinh tế (do thiết kế không cần dùng đèn nền). Với thiết kế này, bạn có thể thoải mái lựa chọn việc đặt để tivi ở bất kỳ đâu trong ngôi nhà của bạn dù là khi treo tường hay để bàn đều rất sang trọng.</span></p>', '4a47a0db6e60853dedfcfdf08a5ca249.png', '2020-11-28 08:37:12'),
('65B9PTA', 'LG 4K 65 Inch 65B9PTA', 20, 33900000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li data-block=\"true\" data-editor=\"65cfr\" data-offset-key=\"arauf-0-0\" style=\"width: 600px; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Điều khiển tivi bằng điện thoại: Bằng ứng dụng LG TV Remote, LG Tivi Plus<br>Kết nối không dây với điện thoại, máy tính bảng Chuyển video, ảnh với LG Smartshare</li></ul>', '8cda81fc7ad906927144235dda5fdf15.jpg', '2020-12-05 14:04:51'),
('65C8PTA', 'OLED LG 4K 65 inch 65C8PTA', 20, 47500000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-oled-lg-4k-65-inch-65c8pta/\" style=\"color: rgb(51, 102, 255);\">Smart Tivi OLED LG 4K 65 inch 65C8PTA</a></span>&nbsp;sở hữu thiết kế không viền hấp dẫn, tinh xảo tạo lên sự đẳng cấp, thu hút sự tập trung tuyệt đối vào nội dung giải trí trên màn hình tivi.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Chân đế phủ kim loại sáng bóng góp phần tô điểm thêm cho căn nhà bạn, mang đến một không gian sống hoàn hảo mang đậm tuyệt tác thiết kế của LG.</p>', 'd0096ec6c83575373e3a21d129ff8fef.jpg', '2020-12-05 14:00:14'),
('65C9PTA', 'LG 4K 65 Inch 65C9PTA', 20, 42900000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li data-block=\"true\" data-editor=\"65cfr\" data-offset-key=\"arauf-0-0\" style=\"width: 600px; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Công nghệ hình ảnh: Tối ưu hóa độ sáng dành cho công nghệ LED nền, 4K Cinema HDR, 4K Upscaler, True Color Accuracy, HDR10 Pro, Nano Cell 2, Bộ nâng cấp màu Advanced Colour Enhancer, Nâng cấp độ sâu hình ảnh tự động, Dolby Vision, Chip xử lý thông minh α9 Gen 2, Ultra Luminan</li></ul>', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', '2020-12-05 14:03:54'),
('65E8PTA', 'OLED LG 4K 65 inch 65E8PTA', 20, 2000000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 500px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Công nghệ hiển thị OLED, chíp xử lý A9, 4K Cinema HDR, 4K HFR</li><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Tivi dành cho Game thủ chuyên nghiệp</li><li style=\"font-size: 13px; line-height: 22px; background: url(&quot;../../../../../../themes/dienmayonline/images/icon_dot.png&quot;) left top 8px no-repeat; padding-left: 13px;\">Nhiều tính năng thông minh: Thin Q AI, Điều khiển ma thuật, tìm kiếm bằng giọng nói…</li></ul>', '30e62fddc14c05988b44e7c02788e187.jpg', '2020-12-05 14:06:03'),
('65TU8500', 'Samsung 4K 65 inch 65TU8500', 21, 19900000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Samsung&nbsp;TU8500 có kiểu dáng sang trọng, đường viền mỏng, tinh tế mang đến vẻ đẹp hiện đại, thanh lịch cho gian phòng của bạn.</span></p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Sở hữu kích thước&nbsp;tivi&nbsp;không quá lớn, tivi này thích hợp bố trí vào không gian nội thất như phòng khách, phòng họp,… hay có thể treo tường gọn gàng. Ngoài ra,&nbsp;Smart&nbsp;tivi Samsung&nbsp;này còn có chân đế chắc chắn, giúp giữ vững trên nhiều dạng bề mặt phẳng.</span></p><div><span style=\"color: rgb(0, 0, 0);\"><br></span></div>', 'c00b57557743e709b8b96933432e0dfa.png', '2020-12-05 15:01:12'),
('82NU8', 'Tivi Samsung 82 inch 82NU8', 21, 38900000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-samsung-82-inch-82nu8000-4k-premium-uhd-hdr/\" style=\"color: rgb(51, 102, 255);\">Smart tivi Samsung 4K 82 inch UA82NU8000</a></span> có thiết kế tràn viền với 3 cạnh viền siêu mỏng đi cùng chân đế nhựa màu bạc sang trọng góp phần làm nổi bật không gian nội thất của gia đình bạn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"font-weight: 700;\">Tivi Samsung 82 inch</span> có góc nhìn rộng phù hợp với không gian có kích thước lớn như: phòng khách, phòng họp hội nghị,…</p>', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-11-28 08:33:25'),
('KD-43X7000G', 'Sony 4K 43 inch KD-43X7000G', 19, 8700000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Kết nối Internet: Cổng LAN, Wifi</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cổng AV: Có cổng Composite</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Cổng HDMI: 3 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cổng xuất âm thanh: Cổng Optical (Digital Audio Out), Jack loa 3.5 mm, HDMI ARC</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">USB: 3 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Tích hợp đầu thu kỹ thuật số: DVB-T2</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Tính năng thông minh (Cập nhật 3/2019)</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Hệ điều hành, giao diện: CEB</li></ul>', '586e508f161f26ce94633729ac56c602.png', '2020-12-05 14:28:34'),
('KD-43X8000G', '4K 43 INCH KD-43X8000G', 19, 8700000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/?post_type=product&amp;p=54424&amp;preview=true\" style=\"color: rgb(0, 0, 255);\">Android Tivi Sony 4K 43 inch KD-43X8000G</a></span>&nbsp;có kiểu dáng gọn gàng, tổng thể hài hoà cùng tông màu đen mạnh mẽ, lịch lãm, mang đến sự hiện đại cho căn phòng được bố trí.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước tivi 43 inch hợp lí, thích hợp bố trí vào nhiều không gian nội thất khác nhau như phòng khách, phòng ngủ,… Ngoài ra, với chân đế chữ V bằng kim loại chắc chắn, giúp tivi đứng vững trên nhiều dạng bề mặt phẳng khác nhau.</p>', '8cda81fc7ad906927144235dda5fdf15.jpg', '2020-12-05 14:24:24'),
('KD-49X8000G', '4K 49 inch KD-49X8000G', 19, 10800000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/?post_type=product&amp;p=54446&amp;preview=true\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">Android Tivi Sony 4K 43 inch KD-49X8000G</span></a>&nbsp;sở hữu thiết kế hiện đạ, gọn gàng cùng tông màu tối cứng cáp, mang đến sự hài hoà, tối ưu cho căn phòng được bố trí.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước tivi 49 inch, thích hợp sử dụng tại nhiều không gian nội thất khác nhau như phòng khách, phòng họp,… Ngoài ra, với chân đế hình chữ V bằng kim loại chắc chắn, giúp tivi đứng vững trên nhiều bề mặt phẳng khác nhau.</p>', '9414a8f5b810972c3c9a0e2860c07532.jpg', '2020-12-05 14:32:19'),
('KD-49X9000F', 'Sony 49 inch KD-49X9000F', 19, 15300000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/android-tivi-sony-49-inch-kd-49x9000f/\" style=\"color: rgb(51, 102, 255);\">Android Tivi Sony 49 inch KD-49X9000F</a></span>&nbsp;với thiết kế viền màn hình mỏng được làm bằng kim loại tạo cảm giác sang trọng cho gian phòng, hơn thế tivi còn được trang bị chân đế hình chữ L tối giản càng tăng thêm nét tinh tế cho gia chủ.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/tivi-sony/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(51, 102, 255);\">Tivi Sony</span></a>&nbsp;này có màn hình 49 inch rất thích hợp để đặt ở phòng khách, ngoài ra bạn cũng có thể đặt ở bàn làm việc hoặc treo tường ở phòng ngủ,…</p>', '09dd8c2662b96ce14928333f055c5580.png', '2020-12-05 14:20:42'),
('KD-55A8F', 'Sony 4K 55 inch KD-55A8F', 19, 28000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"font-weight: 700;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/android-tivi-sony-4k-55-inch-kd-55a8f-2018/\" style=\"color: rgb(51, 102, 255); text-decoration-line: underline; outline: 0px;\">Android Tivi Sony 4K 55 inch KD-55A8F</a></span></span>&nbsp;với thiết kết hiện đại, khung viền siêu mỏng chất liệu kim loại sang trọng và đẳng cấp. Chú trọng từng đường nét thanh thoát, chiếc Tivi Sony không chỉ là thiết bị giải trí hữu ích mà còn là vật trang trí điểm nhấn cho không gian nội thất nhà bạn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Chiếc&nbsp;<span style=\"color: rgb(255, 0, 0);\">Tivi 55 inch</span>&nbsp;với màn hình tivi lớn, phù hợp đặt ở những phòng khách lớn, phòng họp… mang đến sự thanh lịch cho cả căn phòng.</p>', 'edab7ba7e203cd7576d1200465194ea8.jpg', '2020-12-05 14:33:21'),
('KD-55A8H', 'Sony 4K 55 inch KD-55A8H 2020', 19, 19000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Android Tivi OLED Sony 4K 55 inch KD-55A8H&nbsp;sở hữu thiết kế&nbsp;One Slate siêu mỏng hiện đại, viền kim loại mỏng cho bạn tập trung tối đa vào màn hình giúp bạn đắm chìm&nbsp;trong từng hình ảnh mà không bị phân tâm.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Ngoài ra, tivi có chân đế bằng kim loại vừa vững chắc vừa có thể&nbsp;hỗ trợ ẩn giấu cáp kết nối hiệu quả giúp cho tivi trông đẹp hơn mà không bị vướng víu khi nhìn. Kích thước&nbsp;tivi Sony 55 inch&nbsp;thích hợp đặt ở các nơi như: phòng khách, phòng họp,…</p>', 'db3a17f7bcac837ecc1fe2bc630a5473.jpg', '2020-12-05 14:58:43'),
('KD-55A9F', 'OLED Sony 4K 55 inch KD-55A9F', 19, 39500000, '<p><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/android-tivi-oled-sony-4k-55-inch-kd-55a9f/\" style=\"color: rgb(0, 0, 255);\">Android Tivi OLED Sony 4K 55 inch KD-55A9F</a>&nbsp;</span></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">với thiết kế viền kim loại tối giản nhưng không kém phần hiện đại chắc chắn sẽ là điểm nhấn nội thất đắt giá cho ngôi nhà bạn.</span></p>', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', '2020-12-05 14:23:24'),
('KD-55X8500G', 'Sony 4K 55 inch KD-55X8500G', 19, 15900000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Android Tivi Sony 4K 55 inch KD-55X8500G&nbsp;sở hữu thiết kế tối giản đặc trưng của Sony đi kèm viền kim loại, chân đế kim loại hình chữ V úp ngược thanh mảnh, góp phần mang đến vẻ đẹp hiện đại sang trọng cho mọi không gian phòng.</span></p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">Tivi Sony 55 inch&nbsp;có thể đặt bàn trên phòng khách, phòng làm việc hay treo tường trên phòng họp, phòng ngủ tùy vào cách bố trí của người dùng.</span></p><div><span style=\"color: rgb(0, 0, 0);\"><br></span></div>', '30e62fddc14c05988b44e7c02788e187.jpg', '2020-12-05 14:25:17'),
('KD-65A8F', 'OLED Sony 4K 65 inch KD-65A8F', 19, 41200000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/android-tivi-oled-sony-4k-65-inch-kd-65a8f-moi-2018/\" style=\"color: rgb(51, 102, 255);\">Android Tivi OLED Sony 4K 65 inch KD-65A8F</a></span>&nbsp;được thiết kế với viền màn hình mỏng đi kèm chân đế kim loại sang trọng giúp tivi nổi bật hơn trong gian phòng đặt.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Màn hình tivi có kích thước lên đến 65 inch rất thích hợp để bạn treo tường hay đặt ở phòng khách, phòng họp,…</p>', '032b2cc936860b03048302d991c3498f.jpg', '2020-12-05 14:21:38'),
('KD-65A9F', 'OLED Sony 4K 65 inch KD-65A9F', 19, 69000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/android-tivi-oled-sony-4k-65-inch-kd-65a9f/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">Android Tivi OLED Sony 4K 55 inch KD-65A9F</span></a>&nbsp;sở hữu thiết kế tối giản với phiến đá đen – chính là màn hình và được giữ vững bằng một chân đế duy nhất ở phía sau. Thiết kế chắc chắn, góp phần tôn lên nét thẩm mỹ cho&nbsp;<a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-sony-65-inch/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">tivi Sony 65 inch</span></a>&nbsp;này.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Bạn có thể bố trí Android tivi màn hình 65 inch ở phòng họp, hội nghị hay phòng khách.</p>', '18e2999891374a475d0687ca9f989d83.jpg', '2020-12-05 14:22:34'),
('KD-65X9500G', 'Sony 4K 65 inch KD-65X9500G', 19, 32900000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Độ phân giải 4K HDR _ Chi tiết gấp bốn lần so với độ phân giải Full HD.</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Bộ vi xử lý hình ảnh phiên bản mới X1 Ultimate – Vi xử lý thế hệ mới mạnh gấp đôi so với thế hệ trước là X1 Extreme.</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Hiệu chỉnh nét vật thể độc lập</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cơ sở dữ liệu so sánh kép</li></ul>', '62bf1edb36141f114521ec4bb4175579.jpg', '2020-12-05 14:30:04'),
('KDL-32R300D', 'LED Sony 32 inch KDL-32R300D', 19, 4900000, '<p><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Tivi Sony 32R300D</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;đã thiết kế cho chiếc tivi này có tính năng hoàn thiện hình ảnh, nhằm giảm thiểu hiện tượng nhiễu, mờ để đem đến cho người xem những khung hình thực tế nhất.</span></p>', 'f3ccdd27d2000e3f9255a7e3e2c48800.jpg', '2020-12-05 14:17:42'),
('KDL-32R300E', 'LED Sony 32 inch KDL-32R300E', 19, 4900000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Chiếc&nbsp;<span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-sony-32-inch\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"color: rgb(0, 0, 255);\">tivi Sony 32 inch</a></span>&nbsp;này với độ phân giải 1366 x 768 pixels chuẩn HD mang đến cho người xem những thước phim sống động sắc nét và cực kỳ sống động và chân thực</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Bên cạnh đó công nghệ Clear Resolution Enhancer tân tiến kết hợp cùng với độ nét chuẩn HD mang đến cho chiếc Tivi LED Sony 32 inch KDL-32R300E&nbsp;màu sắc tự nhiên và gần gũi.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</p>', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-12-05 14:19:46'),
('LC-32LE280', 'Sharp 32 Inch LC-32LE280', 18, 40000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">TIVI SHARP 32 INCH LC-32LE280X sở hữu tấm nền&nbsp;<a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-full-hd/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">Full HD</span></a>&nbsp;từ Nhật Bản (1,920 x 1,080 điểm ảnh) cho phép hiển thị hình ảnh độ nét cực cao. Góc nhìn rộng 176º theo cả chiều ngang và chiều dọc. Tivi Sharp sử dụng đèn nền&nbsp;<a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-led/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">LED</span></a>&nbsp;tăng độ trực tiếp độ sáng cho màn hình.&nbsp;<span style=\"font-weight: 700;\">&nbsp;</span>tích hợp chức năng giảm nhiễu Analogue và tăng cường tín hiệu Ăng-ten giúp hình ảnh rõ nét hơn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</p>', '032b2cc936860b03048302d991c3498f.jpg', '2020-12-05 14:40:29'),
('LC-32LE375X', 'SHARP 32 Inch LC-32LE375X', 18, 9000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">TV SHARP được chứng minh hoạt động an toàn và độ bền cao trong những hoàn cảnh khác nhau. Giờ đây bạn có thể tận hưởng trải nghiệm hình ảnh tuyệt vời từ chiếc TV chất lượng tuyệt hảo được bảo vệ bởi 7 tính năng an toàn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</p>', '30e62fddc14c05988b44e7c02788e187.jpg', '2020-12-05 14:44:32'),
('LC-40LE280X', 'Sharp 40 inch LC-40LE280X', 18, 24000000, '<p><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/tivi-led-sharp-40-inch-lc-40le280x/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">TV Sharp 40 inch 40LE280X</span></a>&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;với màn hình rộng&nbsp;</span><a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-sharp-40-inch/\" style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700;\">40 inch</span></span></a><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">, độ phân giải lớn cung cấp cho người xem những hình ảnh hấp dẫn. Ngoài ra, đây cũng là một trong những sản phẩm của hãng được tích hợp công nghệ giảm nhiễu Analogue, tăng khả năng nhận tín hiệu của ăng-ten duy trì hình ảnh rõ nét.</span></p>', '18e2999891374a475d0687ca9f989d83.jpg', '2020-12-05 14:41:27'),
('LC-40SA5500X', 'Sharp 40 inch LC-40SA5500X', 18, 14000000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Kết nối Internet: Cổng LAN, Wifi</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cổng HDMI: 2 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Cổng AV:Có cổng Composite và cổng Component</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Cổng xuất âm thanh: Jack loa 3.5 mm</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">USB: 1 cổng</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Tích hợp đầu thu kỹ thuật số: DVB-T2</li><li style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Tính năng thông minh (Cập nhật 05/2018)</li></ul>', '62bf1edb36141f114521ec4bb4175579.jpg', '2020-12-05 14:46:40'),
('LC-50LE275X', 'Led Sharp LC-50LE275X Full HD', 18, 26900000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Tấm nền Full HD từ Nhật Bản (1,920 x 1,080 điểm ảnh)&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/tivi-led-sharp-lc-50le275x-full-hd/\" style=\"color: rgb(0, 0, 255);\">Tivi Sharp LC-50LE275X</a></span></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;cho phép hiển thị hình ảnh độ nét cực cao. Đèn nền LED trực tiếp tăng độ sáng cho màn hình. Hơn thế nữa&nbsp;</span><span style=\"font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify; color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/tivi-sharp/\" style=\"color: rgb(0, 0, 255);\">Tivi Led Sharp</a></span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;LC-50LE275X Full HD còn tích hợp chức năng giảm nhiễu Analogue và tăng cường tín hiệu Ăng-ten giúp hình ảnh rõ nét hơn.</span></p>', 'd0096ec6c83575373e3a21d129ff8fef.jpg', '2020-12-05 14:39:47'),
('LC-50LE570X', 'Full HD Sharp LC-50LE570X', 18, 18700000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><a href=\"https://thegioidienmayonline.com/tivi/\" style=\"color: rgb(0, 0, 255);\">Smart Tivi</a></span>&nbsp;Full HD Sharp LC-50LE570X giúp bạn thưởng thức các chương trình tuyệt hảo, những bộ phim vượt thời gian, những video ” đình đám” và các ứng dụng yêu thích của bạn từ Google Play.</p><div><br></div>', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2020-12-05 14:38:51'),
('LC-50LE580X', 'Sharp LC-50LE580X', 18, 11200000, '<p><a href=\"https://thegioidienmayonline.com/smart-tivi-sharp-lc-50le580x%20/%20%E2%80%8E\" style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700;\">Smart tivi Sharp 50 inch 50LE580X</span></span></a><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;được trang bị tấm nền&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Full HD</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;với 1920 điểm ảnh ngang và 1080 điểm ảnh dọc mang đến cho người xem hình ảnh chi tiết và sắc nét. Góc nhìn rộng 176</span><span style=\"position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; text-align: justify;\">0</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;cả 4 phía giúp bạn có thể ngồi ở nhiều vị trí khác nhau mà vẫn tận hưởng được chọn vẹn chương trình. Độ sáng được tăng cường nhờ hệ thống đèn&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">LED</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;chiếu sáng trực tiếp. Kết hợp công nghệ giảm nhiễu Analogue cùng khả năng tăng khả năng nhận tín hiệu của Ăng-ten luôn mang đến những hình ảnh chất lượng.</span></p>', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', '2020-12-05 14:42:18'),
('LC-50UA440X', 'Sharp 50 inch LC-50UA440X', 18, 32000000, '<p><a href=\"https://thegioidienmayonline.com/tivi-led-sharp-50-inch-lc-50ua440x/\" style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700;\">Tivi LED Sharp 50 inch 50UA440X</span></span></a><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;Sở hữu màn hình&nbsp;</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">LCD 4K Ultra HD</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;có tới 8.29 triệu điểm ảnh với 3,840 điểm ảnh ngang và 2,160 điểm ảnh dọc, độ sắc nét gấp 4 lần full HD mang đến cho bạn những hình ảnh rực rỡ tự nhiên nhất.</span></p>', '8cda81fc7ad906927144235dda5fdf15.jpg', '2020-12-05 14:43:02'),
('LC-58UE630X', '4K Sharp LC-58UE630X', 18, 20700000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Màn hình LCD 4K Ultra HD có tới 8.29 triệu điểm ảnh (3,840 x 2,160) cùng độ phân giải cao gấp 4 lần Full HD*, người xem sẽ được chiêm ngưỡng những hình ảnh hoàn hảo tới từng chi tiết.</span><br style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">*So sánh với độ phân giải Full HD (1,920 x 1,080).</span></p>', 'f3ccdd27d2000e3f9255a7e3e2c48800.jpg', '2020-12-05 14:37:01'),
('LC-60UA6800', '4K 60 INCH LC-60UA6800', 18, 40000000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 600px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li class=\"pd-atv-col-l\" style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Hệ điều hành, giao diện: Android</li><li class=\"pd-atv-col-l\" style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Các ứng dụng sẵn có: Chromecast built-in</li><li class=\"pd-atv-col-l\" style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px; background: rgb(241, 241, 241);\">Tương tác thông minh: Điều khiển bằng giọng nói</li><li class=\"pd-atv-col-l\" style=\"width: 600px; float: left; margin: 0px; padding: 10px 0px 10px 10px;\">Bộ vi xử lý: 4K MASTER ENGINE PRO</li></ul>', 'ae566253288191ce5d879e51dae1d8c3.jpg', '2020-12-05 14:45:30'),
('LC-65UA330X', 'Sharp LC-65UA330X', 18, 13000000, '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Với thiết kế 65 inch,&nbsp;</span><a href=\"https://thegioidienmayonline.com/smart-tivi-4k-sharp-lc-65ua330x/\" style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; text-align: justify;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-weight: 700;\">Tivi 4K Sharp LC-65UA330X&nbsp;</span></span></a><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">có khả năng mang đến những hình ảnh hiển thị chất lượng, siêu nét. Thích hợp với mọi không gian trong phòng khách nhà bạn. Dù cho có ở bất kì vị trí nào thì sản phẩm của chúng tôi cũng đều cho ra những hình ảnh chân thực, sống động như những khoảnh khắc bạn bắt gặp ngoài đời thường.</span></p>', '156005c5baf40ff51a327f1c34f2975b.jpg', '2020-12-05 14:38:00'),
('QA49Q6FN', 'Samsung 4K 49 inch QA49Q6FN', 21, 15000000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 102, 255);\"><a href=\"https://thegioidienmayonline.com/smart-tivi-qled-samsung-4k-49-inch-qa49q6fn/\" style=\"color: rgb(51, 102, 255);\">Smart Tivi QLED Samsung 4K 49 inch QA49Q6FN</a></span> sở hữu thiết kế liền mạch, tinh xảo đi kèm viền màn hình nhựa siêu mỏng cho trải nghiệm xem tivi của bạn thêm phần hấp dẫn.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Chân đế hình chữ V bằng nhựa, kiểu dáng thanh mảnh nhưng vững chắc, giúp tivi đứng vững trên nhiều bề mặt.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/tu-khoa/tivi-samsung-49-inch/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(51, 102, 255);\">Tivi Samsung 49 inch</span></a> hài hòa với nhiều không gian vừa và lớn như phòng khách, phòng ăn,…</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"> </p>', 'ae566253288191ce5d879e51dae1d8c3.jpg', '2020-11-28 08:33:25'),
('QA55Q6FN', 'Samsung 4K 55 inch QA55Q6FN', 21, 20300000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; width: 500px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><li style=\"font-size: 13px; line-height: 22px; background: url(\"../../../../../../themes/dienmayonline/images/icon_dot.png\") left top 8px no-repeat; padding-left: 13px;\">Độ phân giải <i class=\"cate-yt\"></i>4K cực nét cùng công nghệ Q HDR Elite hiển thị hình ảnh cực kì chi tiết trong cả vùng sáng hoặc tối nhất.</li></ul>', 'fe5df232cafa4c4e0f1a0294418e5660.jpg', '2020-11-28 08:33:25'),
('QA55Q8C', 'Qled Samsung QA55Q', 21, 28300000, '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; width: 365px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 13px; list-style: none !important;\"><li style=\"padding: 0px; margin-bottom: 5px;\">Thùng tivi có: Sách hướng dẫn, Remote, Chân đế, Adapter</li><li style=\"padding: 0px; margin-bottom: 5px;\">Giao hàng miễn phí trong 4 tiếng (nếu đặt hàng sau 17h  sẽ giao hàng vào hôm sau)</li><li style=\"padding: 0px; margin-bottom: 5px;\">Áp dụng 100% chính sách bảo hành của nhà sản xuất.</li><li style=\"padding: 0px; margin-bottom: 5px;\">Bảo hành chính hãng tivi 2 năm, adapter 2 năm</li></ul>', '156005c5baf40ff51a327f1c34f2975b.jpg', '2020-11-28 08:33:25'),
('QA55Q8CAM', 'Samsung 55 inch QA55Q8CAM', 21, 43900000, '<p><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\">Smart Tivi Cong 55 inch QA55Q8CAM</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> sở hữu cho mình một thiết kế hiện đại, và mang vẻ đẹp đẳng cấp tạo điểm nhấn cho không gian cho căn nhà của bạn. Với thiết kế </span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\">màn hình cong</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> có kích thước lên đến</span><span style=\"font-weight: 700; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> 55 inch</span><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 20px; text-align: justify;\"> vậy nên rất phù hợp với phòng có diện tích lớn như phòng khách, phòng họp,…</span></p>', 'd0096ec6c83575373e3a21d129ff8fef.jpg', '2020-11-28 08:33:25'),
('UA43NU7800', 'Samsung 4K 43 inch UA43NU7800', 21, 8400000, '<p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><a href=\"https://thegioidienmayonline.com/smart-tivi-samsung-4k-43-inch-ua43nu7800/\" style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 255);\">Smart Tivi Samsung 4K 43 inch UA43NU7800</span></a> với thiết kế gọn nhưng không kém phần tinh tế với viền màn hình mỏng, tông đen hiện đại song song đó là thiết kế chân bằng nhựa đế cứng cáp giúp tivi dễ dàng trụ vững trên nhiều dạng mặt phẳng khác nhau.</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Kích thước màn hình<span style=\"font-weight: 700;\"> 43 inch</span> giúp bạn dễ dàng bố trí tivi ở nhiều nơi như: phòng khách, phòng họp, phòng ăn,…</p>', '30e62fddc14c05988b44e7c02788e187.jpg', '2020-11-28 08:33:25');
INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `manhanhieu`, `giatien`, `mota`, `avatar`, `ngaytao`) VALUES
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `manhanhieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
