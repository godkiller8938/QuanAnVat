-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 03, 2019 lúc 01:14 PM
-- Phiên bản máy phục vụ: 10.3.14-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id6909757_kyquan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ads`
--

CREATE TABLE `tbl_ads` (
  `id_ads` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_ads`
--

INSERT INTO `tbl_ads` (`id_ads`, `title`, `img`) VALUES
(1, 'Hihi', '1536656356anh1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category`, `category_name`) VALUES
(1, 'Pizza'),
(2, 'Spaghetti'),
(3, 'FastFood'),
(4, 'Ốc'),
(5, 'Mẹt ăn vặt'),
(6, 'Khay ăn vặt'),
(7, 'Combo món ăn'),
(8, 'Sữa tươi'),
(9, 'Trà hoa quả'),
(10, 'Kem tươi'),
(11, 'Cream love mix'),
(12, 'Fruit ice'),
(13, 'Cake ice'),
(14, 'Kem mix'),
(15, 'Patbingsu'),
(16, 'Bingsu'),
(17, 'Trà sữa'),
(18, 'Macchiato Smoothies'),
(20, 'Soda'),
(21, 'Sinh tố'),
(22, 'Nước ép'),
(23, 'Coffee-Lattea'),
(24, 'Nước ngọt chai'),
(25, 'Bia rượu'),
(26, 'Bakery'),
(27, 'Combo đồ uống'),
(28, 'Pizza Passion');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `name` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`name`, `phone_number`, `address`, `id_contact`) VALUES
('Phan Thanh Thế', '01234567890', 'Nghệ An', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `classify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `name`, `address`, `phone_number`, `note`, `classify`) VALUES
(8, 'Phan Thanh Thế', 'Nghệ An', '0123456789', '', 0),
(9, 'Phan Thanh Thế', 'Nghệ An', '0123456789', '', 0),
(10, 'c', 'Nghệ An', '0123456789', '', 0),
(11, 'yi', 'Nghệ An', '012', '', 0),
(12, 'Phan Thanh Thế', 'Nghệ An', '0123456789', '455', 0),
(13, 'Phan Thanh Thế', 'Nghệ An', '0123456789', 'co', 0),
(14, 'Ạdjd', 'Sksjdk', '345', '', 0),
(15, 'Nguyễn phương', 'Hà nội', '01689299277', 'Ânb', 0),
(16, 'Phan Thanh Thế', 'Nghệ An', '0123456789', 'ui', 0),
(17, 'Phan Thanh Thế', 'Nghệ An', '0123456789', '455', 0),
(18, 'H', 'C', '6', 'Hk', 0),
(19, 'Phan Thanh Thế', 'Nghệ An', '0123456789', '455', 0),
(20, 'Nguyễn', 'Nguyên Xá, Minh Khai, Bắc Từ Liêm', '0987654321', 'abc', 0),
(21, 'Nguyễn Văn Cường', 'Đà Nẵng', '4243346702', 'ship 5h chiều gbyug', 0),
(22, 'jljl', 'jkjklj', '0', 'đá', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hot_customer`
--

CREATE TABLE `tbl_hot_customer` (
  `id_hot_customer` int(11) NOT NULL,
  `phone_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hot_customer`
--

INSERT INTO `tbl_hot_customer` (`id_hot_customer`, `phone_number`, `total_order`) VALUES
(1, '0123456789', 8),
(3, '345', 1),
(6, '0934634155', 1),
(7, '4243346702', 1),
(8, '0', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id_news` int(11) NOT NULL,
  `id_category` int(11) NOT NULL DEFAULT 1,
  `title` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`id_news`, `id_category`, `title`, `content`, `img`) VALUES
(1, 1, 'Tặng bánh piza miễn phí cho sinh nhật của bạn', '<p>Chưa c&oacute; nội dung</p>\r\n', '1533628299tomato.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `buy_day` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `buy_day`, `price`, `status`) VALUES
(11, 11, '2018-09-18 13:54:19', 82000, 0),
(12, 12, '2018-09-24 19:08:49', 692000, 0),
(13, 13, '2018-09-25 18:22:43', 480000, 1),
(14, 14, '2018-10-05 15:43:41', 200000, 0),
(15, 15, '2018-10-19 23:12:52', 40000, 1),
(16, 16, '2018-11-09 11:44:45', 145000, 1),
(17, 17, '2018-12-24 11:00:08', 315000, 1),
(18, 18, '2018-12-28 19:31:14', 42348000, 0),
(19, 19, '2019-01-07 15:01:20', 208000, 1),
(20, 20, '2019-01-07 16:13:29', 240000, 0),
(21, 21, '2019-03-18 13:25:42', 932000, 1),
(22, 22, '2019-04-11 13:49:27', 80000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `number`, `size`) VALUES
(34, 8, 215, 1, 'M'),
(35, 9, 61, 1, ''),
(36, 10, 204, 1, ''),
(37, 11, 204, 1, ''),
(38, 11, 81, 1, ''),
(39, 12, 223, 2, 'L'),
(40, 12, 202, 4, ''),
(41, 12, 218, 3, 'M'),
(42, 13, 215, 5, 'S'),
(43, 13, 221, 1, 'S'),
(44, 14, 75, 1, ''),
(45, 14, 222, 1, 'L'),
(46, 15, 36, 1, ''),
(47, 16, 223, 1, 'L'),
(48, 16, 198, 1, ''),
(49, 17, 206, 1, ''),
(50, 17, 204, 1, ''),
(51, 17, 215, 2, 'L'),
(52, 18, 200, 999, ''),
(53, 18, 224, 8, 'M'),
(54, 18, 223, 9, 'L'),
(55, 18, 222, 31, 'M'),
(56, 18, 215, 25, 'S'),
(57, 18, 16, 52, ''),
(58, 18, 2, 6, ''),
(59, 18, 1, 2, ''),
(60, 19, 204, 1, ''),
(61, 19, 84, 1, ''),
(62, 19, 216, 1, 'L'),
(63, 20, 216, 3, 'S'),
(64, 21, 216, 5, 'L'),
(65, 21, 81, 1, ''),
(66, 21, 68, 2, ''),
(67, 22, 216, 1, 'S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `price_1` int(11) NOT NULL,
  `price_2` int(11) NOT NULL,
  `price_3` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `classify` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `hot_product` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `product_name`, `description`, `price`, `price_1`, `price_2`, `price_3`, `img`, `classify`, `id_category`, `hot_product`) VALUES
(1, 'Combo 1', '1 Pizza Size S+2 Đùi gà BBQ+1 Hồng trà sữa&lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú&rpar;', 100000, 0, 0, 0, '1535267717sup.jpg', 0, 7, 0),
(2, 'Combo 2', '1 Pizza size S+1 Spaghetti+1 Hồng trà sữa&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 100000, 0, 0, 0, '1533590627piza.jpg', 0, 7, 0),
(3, 'Combo 3', '2 Pizza size S+1 Hồng trà sữa&lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú&rpar;', 120000, 0, 0, 0, '1533590639piza.jpg', 0, 7, 0),
(4, 'Combo 4', '2 Pizza size M+1 Hồng trà sữa&lpar;&lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú&rpar;', 150000, 0, 0, 0, '1533590655piza.jpg', 0, 7, 0),
(5, 'Combo 5', '2 Pizza size L+2 Sinh tố xoài&lpar;&lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú&rpar; ', 180000, 0, 0, 0, '1533590673salad.jpg', 0, 7, 0),
(6, 'Combo 6', '1 Pizza Size S+1 Chân gà ngâm xả tắc+1 Khoai lang chiên +1 Nộm sứa gà cay +1 Hồng trà sữa', 140000, 0, 0, 0, '1533590691seefood.jpg', 0, 7, 0),
(7, 'Combo 7', '1 Pizza size M +2 Đùi gà BBQ+1 Khoai Lang chiên +1 Salad+1 Sinh tố xoài &lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú&rpar;', 170000, 0, 0, 0, '1533590703piza.jpg', 0, 7, 0),
(8, 'Combo 8', '1 Pizza Size M+1 Spaghetti+1Khoai lang chiên +1 Salad +1 Sinh tố xoài&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 170000, 0, 0, 0, '1533590714salad.jpg', 0, 7, 0),
(9, 'Combo 9', '1 Pizza Size M+1 Đùi gà BBQ+1Spaghetti+2 Sữa tươi trân châu đường đen&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 180000, 0, 0, 0, '1533590723piza.jpg', 0, 7, 0),
(10, 'Combo 10', '1 Pizza Size L+1 Ốc gai+1 Ốc điếu+1 Nộm sứa+1 Ngao hấp+1 Sinh tố xoài&lpar;Khách hàng chọn vị pizza thêm vào mục ghi chú', 200000, 0, 0, 0, '1533590747piza.jpg', 0, 7, 0),
(11, 'Combo 11', '1Pizza Size L +2 Đùi gà BBQ+2 Spaghetti+1Salad+1 Khoai lang chiên+1 Nem chua+2 Hồng trà sữa&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 260000, 0, 0, 0, '1535552948salad.jpg', 0, 7, 0),
(12, 'Combo 12', '1 Pizza size L+2 Đùi gà BBQ+1Spaghetti+1 Khoai lang kén+1 Nem chua+1 Nộm sứa gà cay+2 Sữa tươi trà xanh&lpar;Socola&rpar; trân châu đường đen kem chesse&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 300000, 0, 0, 0, '1533591198salad.jpg', 0, 7, 0),
(13, 'Combo 13', '2 Pizza Size L+2 SPaghetti+2 Đùi gà BBQ+1 Khoai lang +1 Salad+1 Nem chua +1 Chân gà ngâm xả tắc+1 Ngao sốt thái+2 Sinh tố xoài&lpar;Khách hàng chọn vị pizza và Spaghetti thêm vào mục ghi chú&rpar;', 400000, 0, 0, 0, '1533591212tomato.jpg', 0, 7, 0),
(14, 'Plan caramel', 'Chưa', 7000, 0, 0, 0, '1535341867piza.jpg', 2, 26, 0),
(15, 'Carbonara', 'Chưa', 50000, 0, 0, 0, '1533591236piza.jpg', 0, 2, 0),
(16, 'Steak Mushroom', 'Nóng', 50000, 0, 0, 0, '1533616842thit.jpg', 0, 2, 0),
(28, 'Seafood', 'hihi', 60000, 0, 0, 0, '1533591302salad.jpg', 0, 2, 0),
(29, 'Chicken Mushroom', 'ko', 50000, 0, 0, 0, '1533702819piza.jpg', 0, 2, 0),
(30, 'Diavona', 'ko', 50000, 0, 0, 0, '1533703000piza.jpg', 0, 2, 1),
(31, 'Bông lan caramel', 'Chưa', 14000, 0, 0, 0, '1535341892salad.jpg', 2, 26, 0),
(32, 'Đùi gà chiên KFC', 'ko', 30000, 0, 0, 0, '1533703101piza.jpg', 0, 3, 0),
(33, 'Cánh gà BBQ', 'ko', 20000, 0, 0, 0, '1533703146piza.jpg', 0, 3, 0),
(34, 'Bánh su kem', 'Chưa', 12000, 0, 0, 0, '1535341919seefood.jpg', 2, 26, 0),
(35, 'Chân gà ngâm xả tắc', 'ko', 30000, 0, 0, 0, '1533703240piza.jpg', 0, 3, 1),
(36, 'Gà khô lá chanh', 'ko', 40000, 0, 0, 0, '1533703346piza.jpg', 0, 3, 1),
(37, 'Ngô chiên', 'ko', 30000, 0, 0, 0, '1533703391piza.jpg', 0, 3, 0),
(38, 'Nem chua rán', 'Chưa có s', 30000, 0, 0, 0, '1533703427piza.jpg', 0, 3, 0),
(39, 'Phomai que', 'ko', 40000, 0, 0, 0, '1533703460piza.jpg', 0, 3, 0),
(40, 'Xúc xích chiên', 'ko', 12000, 0, 0, 0, '1533703485piza.jpg', 0, 3, 0),
(41, 'Cá viên chiên', 'ko', 25000, 0, 0, 0, '1533703528piza.jpg', 0, 3, 0),
(42, 'Tôm viên chiên', 'ko', 30000, 0, 0, 0, '1533703558piza.jpg', 0, 3, 0),
(43, 'Khoai tây chiên', 'ko', 25000, 0, 0, 0, '1533703597piza.jpg', 0, 3, 0),
(44, 'Chiffon capuchino', 'Chưa', 12000, 0, 0, 0, '1535341957tomato.jpg', 2, 26, 0),
(45, 'Khoai lang chiên', 'ko', 25000, 0, 0, 0, '1533703675piza.jpg', 0, 3, 0),
(46, 'Khoai lang lắc', 'ko', 30000, 0, 0, 0, '1533703706piza.jpg', 0, 3, 0),
(47, 'Khoai lang kén', 'ko', 25000, 0, 0, 0, '1533703775piza.jpg', 0, 3, 0),
(48, 'Khoai môn lệ phố', 'ko', 30000, 0, 0, 0, '1533703804piza.jpg', 0, 3, 0),
(49, 'Salad Đà Lạt', 'ko', 25000, 0, 0, 0, '1533703853piza.jpg', 0, 3, 0),
(50, 'Chiffon Green tea', 'Chưa', 12000, 0, 0, 0, '1535341989tomato.jpg', 2, 26, 0),
(51, 'Nôm tai heo gà cay', 'ko', 40000, 0, 0, 0, '1533703917piza.jpg', 0, 3, 0),
(52, 'Hoa quả đĩa nhỏ', 'ko', 20000, 0, 0, 0, '1533703963piza.jpg', 0, 3, 0),
(53, 'Hoa quả đĩa đại', 'ko', 40000, 0, 0, 0, '1533703992piza.jpg', 0, 3, 0),
(54, 'Ốc điếu luộc', 'ko', 25000, 0, 0, 0, '1533704028piza.jpg', 0, 4, 0),
(55, 'Ốc điều xào dừa me', 'ko', 30000, 0, 0, 0, '1533704062piza.jpg', 0, 4, 0),
(56, 'Chiffon Chocolate', 'Chưa', 12000, 0, 0, 0, '1535342013thit.jpg', 2, 26, 0),
(57, 'Ốc gai luộc', 'ko', 35000, 0, 0, 0, '1533704128piza.jpg', 0, 4, 0),
(58, 'Ốc gai nướng', 'ko', 40000, 0, 0, 0, '1533704157piza.jpg', 0, 4, 0),
(59, 'Ngao hấp', 'ko', 30000, 0, 0, 0, '1533704189piza.jpg', 0, 4, 0),
(60, 'Chiffon Blueberry', 'Chưa', 15000, 0, 0, 0, '1535342045salad.jpg', 2, 26, 0),
(61, 'Mẹt 1', 'ko', 110000, 0, 0, 0, '1534849844thit.jpg', 0, 5, 1),
(63, 'Mẹt 2', 'Chưa', 120000, 0, 0, 0, '1535267990thit.jpg', 0, 5, 0),
(64, 'Mẹt 3', 'Chưa', 130000, 0, 0, 0, '1535268055tomato.jpg', 0, 5, 0),
(65, 'Mẹt 4', 'Chưa', 150000, 0, 0, 0, '1535268077salad.jpg', 0, 5, 0),
(66, 'Mẹt 5', 'Chưa', 160000, 0, 0, 0, '1535268123salad.jpg', 0, 5, 1),
(67, 'Mẹt 6', 'Chưa', 170000, 0, 0, 0, '1535268149piza.jpg', 0, 5, 0),
(68, 'Khay 1', 'Ốc mít luộc, ốc ao luộc, ốc gai nướng, ốc điếu xào, ngao hấp', 150000, 0, 0, 0, '1535268176seefood.jpg', 0, 6, 1),
(69, 'Khay 2', 'Ốc gai nướng, ốc sư tử nướng,ốc mít luộc,ốc điếu xào,ngao hấp', 180000, 0, 0, 0, '1535268204thit.jpg', 0, 6, 0),
(70, 'Khay 3', 'Ốc gai nướng,ốc sư tử nướng,Ốc mít luộc,ốc điếu xào,chân gà ngâm xả tắc', 180000, 0, 0, 0, '1535268227tomato.jpg', 0, 6, 0),
(71, 'Chiffon Fruit', 'Chưa', 18000, 0, 0, 0, '1535342074tomato.jpg', 2, 26, 0),
(72, 'Khay 5', 'Khoai môn lệ phố,nem chua rán,ốc mít luộc, tôm viên chiên, chân gà ngâm xả tắc,trứng cút lộn luộc, nộm sứa gà cay,gà khô lá chanh', 240000, 0, 0, 0, '1535268265piza.jpg', 0, 6, 0),
(73, 'Khay 6', 'Ốc sư tử nướng,ốc gai luộc ,ốc mít luộc,ốc điếu xào dừa me, chân gà xả tắc ,khoai môn lệ phố,cút lộn luộc, gà khô lá chanh', 270000, 0, 0, 0, '1535268287seefood.jpg', 0, 6, 0),
(74, 'Combo 1', '1 Trà đào cam sả +1 Trà quế Kim quất mật ong+1 chiffono việt quất+1 Chiffon Fruit', 75000, 0, 0, 0, '1536987377ep1.jpg', 1, 27, 0),
(75, 'Combo 2', '2 Ly STTC đường đen+2 bánh Chiffon Fruit', 80000, 0, 0, 0, '1536987397ep3.jpg', 1, 27, 1),
(76, 'Combo 3', '2 kem KQ Love Mix+1 Chiffon chocolate+1 Chiffon green tea', 80000, 0, 0, 0, '15369874151chanh.jpg', 1, 27, 0),
(77, 'Combo 4', '1 Coffee đá xay cookies+1 Coffee đá xay caramel+2 chiffon capuchino', 80000, 0, 0, 0, '1536987433k22.jpg', 1, 27, 0),
(78, 'Combo 5', '2 Ly STTC đường đen hoa đậu biếc kem cheese+2 Bánh chiffon fruit', 90000, 0, 0, 0, '1536987454ep2.jpg', 1, 27, 0),
(79, 'Combo 6', '1 Trà dâu tây thanh long đỏ cam vàng+1 STTC đường đen hoa đậu biếc kem cheese+1 Bông lan caramel+1 chiffon việt quất+1 chiffon fruit', 100000, 0, 0, 0, '15369874691mangcau.jpg', 1, 27, 0),
(80, 'Sữa tươi trân châu đường đen', 'Chưa', 27000, 0, 0, 0, '15369872860s.jpg', 1, 8, 0),
(81, 'Sữa tươi Chocolate TCĐĐ', 'Chưa', 32000, 0, 0, 0, '1536987718socodau.jpg', 1, 8, 1),
(82, 'Sữa tươi hoa đậu biếc TCĐĐ', 'Chưa', 32000, 0, 0, 0, '15369873160s3.jpg', 1, 8, 0),
(83, 'Sữa tươi trà xanh TCĐĐ', 'Chưa', 32000, 0, 0, 0, '15369872180s1.jpg', 1, 8, 0),
(84, 'Sữa tươi hoa đậu biếc TCĐĐ Kem cheese', ' ', 38000, 0, 0, 0, '15369871990s4.jpg', 1, 8, 1),
(85, 'Sữa tươi Chocolate TCĐĐ Kem cheese', 'Chưa', 38000, 0, 0, 0, '15369871830s.jpg', 1, 8, 0),
(86, 'Sữa tươi trà xanh TCĐĐ Kem cheese', 'Chưa', 38000, 0, 0, 0, '15369871691bo.jpg', 1, 8, 0),
(87, 'Trà đào', 'Chưa', 24000, 0, 0, 0, '1536985908ep3.jpg', 1, 9, 0),
(88, 'Trà đào cam sả', 'Chưa', 30000, 0, 0, 0, '1536985773tra-dau.jpg', 1, 9, 0),
(89, 'Trà vải', 'Chưa', 24000, 0, 0, 0, '1536985795ep3.jpg', 1, 9, 0),
(90, 'Lục trà xoài kem cheese', 'Chưa', 32000, 0, 0, 0, '15369858651xoai.jpg', 1, 9, 0),
(91, 'Lục trà thanh long đỏ kem cheese', 'Chưa', 32000, 0, 0, 0, '1536985849ep4.jpg', 1, 9, 0),
(92, 'Hồng trà kem cheese', 'Chưa', 24000, 0, 0, 0, '1536985969hong-tra-sua.png', 1, 9, 0),
(93, 'Trà quế kim quất mật ong', 'Chưa', 28000, 0, 0, 0, '1536986018ep5.jpg', 1, 9, 0),
(94, 'Trà chanh quất mật ong', 'Chưa', 24000, 0, 0, 0, '15369860461chanh.jpg', 1, 9, 0),
(95, 'Trà hoa cúc chanh leo mật ong', 'Chưa', 28000, 0, 0, 0, '1536986080ep1.jpg', 1, 9, 0),
(96, 'Lục trà nhiệt đới', 'Chưa', 28000, 0, 0, 0, '1536985830ep1.jpg', 1, 9, 0),
(97, 'Trà dâu tây thanh long đỏ cam vàng', 'Chưa', 34000, 0, 0, 0, '1536986116tra-dau.jpg', 1, 9, 0),
(98, 'Lipton chanh tươi', 'Chưa', 22000, 0, 0, 0, '1536986176ep3.jpg', 1, 9, 0),
(99, 'Lipton cam sữa 3 tầng', 'Chưa', 28000, 0, 0, 0, '15369861591cam.jpg', 1, 9, 0),
(100, 'Lipton sữa bạc hà 3 tầng', 'Chưa', 30000, 0, 0, 0, '15369861391chanh.jpg', 1, 9, 0),
(101, 'Kem tươi Vani', 'Chưa', 22000, 0, 0, 0, '1536984102k11.jpg', 1, 10, 0),
(102, 'Kem tươi Capuchhino', 'Chưa', 25000, 0, 0, 0, '1536984086k66.jpg', 1, 10, 0),
(103, 'Kem tươi Chocolate', 'Chưa', 22000, 0, 0, 0, '1536984066k55.jpg', 1, 10, 0),
(104, 'Kem tươi chanh leo', 'Chưa', 25000, 0, 0, 0, '1536984046k44.jpg', 1, 10, 0),
(105, 'Kem tươi sữa dừa', 'Chưa', 25000, 0, 0, 0, '1536984025k33.jpg', 1, 10, 0),
(106, 'Kem tươi dâu tây', 'Chưa', 25000, 0, 0, 0, '1536983998k22.jpg', 1, 10, 0),
(107, 'Kem tươi khoai môn', 'Chưa', 25000, 0, 0, 0, '1536983974k11.jpg', 1, 10, 0),
(108, 'Kem tươi trà xanh', 'Chưa', 25000, 0, 0, 0, '1536983951k66.jpg', 1, 10, 0),
(109, 'Kem tươi việt quất', 'Chưa', 30000, 0, 0, 0, '1536983928k55.jpg', 1, 10, 0),
(110, 'Kem tươi Hokaido', 'Chưa', 30000, 0, 0, 0, '1536983902k44.jpg', 1, 10, 0),
(111, 'Kem tươi Latea sầu riêng', 'Chưa', 28000, 0, 0, 0, '1536983873k33.jpg', 1, 10, 0),
(112, 'Kem tươi Rum nho', 'Chưa', 34000, 0, 0, 0, '1536983842k22.jpg', 1, 10, 0),
(114, 'Ice-Cream love Mix', 'Ice-cream Love Mix Bánh quế', 35000, 0, 0, 0, '1536986413k55.jpg', 1, 11, 0),
(115, 'Ice-Cream love matcha', 'Ice-cream Love Mix Matcha', 35000, 0, 0, 0, '1536986398k44.jpg', 1, 11, 0),
(116, 'Ice-Cream love mix Strawberry', 'Ice-cream Love Mix Dâu Tây', 35000, 0, 0, 0, '1536986379k33.jpg', 1, 11, 0),
(117, 'Ice-Cream love mix Blueberry', 'Ice-cream Love Mix Việt quất', 39000, 0, 0, 0, '1536986362k22.jpg', 1, 11, 0),
(118, 'Ice-Cream love mix Conous', 'Ice-Cream love mix dừa', 35000, 0, 0, 0, '1536986345k11.jpg', 1, 11, 0),
(119, 'Strawberry Ice-Cream Mix', 'Kem tươi Mix nước ép Dâu Tây', 33000, 0, 0, 0, '1536983820k11.jpg', 1, 12, 0),
(120, 'Passion Ice-Cream Mix', 'Kem tươi Mix nước ép Chanh leo', 33000, 0, 0, 0, '1536983799k66.jpg', 1, 12, 0),
(121, 'Watermelon Ice-Cream Mix', 'Kem tươi Mix nước ép Dưa hấu', 33000, 0, 0, 0, '1536983777k55.jpg', 1, 12, 0),
(122, 'Pineapple Ice-Cream Mix', 'Kem tươi Mix nước ép dứa tươi', 33000, 0, 0, 0, '1536983727k44.jpg', 1, 12, 0),
(123, 'Orange Ice-Cream Mix', 'Kem tươi Mix nước ép cam tươi', 33000, 0, 0, 0, '1536983690k22.jpg', 1, 12, 0),
(124, 'Waffle Oreo Cake Ice-Cream Mix', 'Kem tươi Mix bánh quế và oreo Chocolate&lpar;4 viên&rpar;', 35000, 0, 0, 0, '1536983706k33.jpg', 1, 13, 0),
(125, 'Chocolate Oreo Cake Ice-Cream Mix', 'Kem tươi Mix bánh kem oreo Chocolate&lpar;4 viên&rpar;', 35000, 0, 0, 0, '1536983673k11.jpg', 1, 13, 0),
(126, 'Strawberry Oreo Cake Ice-Cream Mix', 'Kem tươi Mix bánh kem oreo Dâu tây&lpar;4 viên&rpar;', 35000, 0, 0, 0, '1536983653k66.jpg', 1, 13, 0),
(127, 'Bò húc', 'Chưa', 15000, 0, 0, 0, '1535341765piza.jpg', 1, 24, 0),
(128, 'Kem dừa Thái', 'Chưa', 28000, 0, 0, 0, '1536986513k33.jpg', 1, 14, 0),
(129, 'Kem dừa xiêm nguyên quả', 'Chưa', 52000, 0, 0, 0, '1536986497k22.jpg', 1, 14, 0),
(130, 'Kem xôi dừa-Khoai môn', 'Chưa', 25000, 0, 0, 0, '1536986577k22.jpg', 1, 14, 0),
(131, 'Kem xôi dừa-Dâu tây', 'Chưa', 25000, 0, 0, 0, '1536986560k11.jpg', 1, 14, 0),
(132, 'Kem xôi dừa-Việt quất', 'Chưa', 27000, 0, 0, 0, '1536986541k55.jpg', 1, 14, 0),
(133, 'Bạc xỉu kem dừa', 'Chưa', 32000, 0, 0, 0, '1536986481k44.jpg', 1, 14, 0),
(134, 'Bạc xỉu kem Lattea sầu', 'Chưa', 34000, 0, 0, 0, '1536986644socodau.jpg', 1, 14, 0),
(135, 'Bạc xỉu kem Hokaido', 'Chưa', 35000, 0, 0, 0, '1536986625soco.jpg', 1, 14, 0),
(136, 'Patbingsu xoài kem tươi', 'Chưa', 48000, 0, 0, 0, '1536983627k55.jpg', 1, 15, 0),
(137, 'Patbingsu Chocolate kem tươi', 'Chưa', 48000, 0, 0, 0, '1536983606k44.jpg', 1, 15, 0),
(138, 'Patbingsu trà xanh kem tươi', 'Chưa', 48000, 0, 0, 0, '1536983584k33.jpg', 1, 15, 0),
(139, 'Patbingsu dâu tây kem tươi', 'Chưa', 50000, 0, 0, 0, '1536983562k22.jpg', 1, 15, 0),
(140, 'Patbingsu việt quất kem tươi', 'Chưa', 50000, 0, 0, 0, '1536983543k11.jpg', 1, 15, 0),
(141, 'Nutri', 'Chưa', 15000, 0, 0, 0, '1535341746thit.jpg', 1, 24, 0),
(142, 'Bingsu Chocolate kem tươi', 'Chưa', 38000, 0, 0, 0, '1536983523k66.jpg', 1, 16, 0),
(143, 'Bingsu trà xanh kem tươi', 'Chưa', 38000, 0, 0, 0, '1536983501k55.jpg', 1, 16, 0),
(144, 'Bingsu dâu tây kem tươi', 'Chưa', 38000, 0, 0, 0, '1536983478k44.jpg', 1, 16, 0),
(145, 'Bingsu việt quất kem tươi', 'Chưa', 38000, 0, 0, 0, '1536983454k33.jpg', 1, 16, 0),
(146, 'Hồng trà sữa', 'Chưa', 20000, 0, 0, 0, '1536982385soco.jpg', 1, 17, 0),
(147, 'Trà sữa dâu', 'Chưa', 24000, 0, 0, 0, '1536982364tra-dau.jpg', 1, 17, 0),
(148, 'Trà sữa bạc hà', 'Chưa', 25000, 0, 0, 0, '1536982345hong-tra-sua.png', 1, 17, 0),
(149, 'Trà sữa việt quất', 'Chưa', 25000, 0, 0, 0, '1536982319tra-sua-khoai.jpg', 1, 17, 0),
(150, 'Trà sữa Matcha', 'Chưa', 25000, 0, 0, 0, '1536982298hong-tra-sua.png', 1, 17, 0),
(151, 'Trà sữa Tiramisu', 'Chưa', 25000, 0, 0, 0, '1536982279sinh-to-dau-yogurt.png', 1, 17, 0),
(152, 'Trà sữa Socola', 'Chưa', 25000, 0, 0, 0, '1536982257socodau.jpg', 1, 17, 0),
(153, 'Samurai', 'Chưa', 12000, 0, 0, 0, '1535341665seefood.jpg', 1, 24, 0),
(154, 'Trà sữa dâu socola', 'Chưa', 30000, 0, 0, 0, '1536982239tra-dau.jpg', 1, 17, 0),
(155, 'Trà sữa socola bạc hà', 'Chưa', 30000, 0, 0, 0, '1536982214soco.jpg', 1, 17, 0),
(156, 'Macchiato trà xanh', 'Chưa', 35000, 0, 0, 0, '1536985730k22.jpg', 1, 18, 0),
(157, 'Cam ép lon', 'Chưa', 15000, 0, 0, 0, '1535341713thit.jpg', 1, 24, 0),
(158, 'Nước tinh khiết', 'Chưa', 5000, 0, 0, 0, '1535341691tomato.jpg', 1, 24, 0),
(159, 'Smoothies việt quất', 'Chưa', 32000, 0, 0, 0, '1536987568tra-sua-khoai.jpg', 1, 18, 0),
(160, 'Smoothies dâu tây', 'Chưa', 32000, 0, 0, 0, '1536987592sinh-to-dau-yogurt.png', 1, 18, 0),
(161, 'Smoothies trà xanh', 'Chưa', 32000, 0, 0, 0, '1536985703tao.jpg', 1, 18, 0),
(162, 'Soda Blue Mojito', 'Soda Mix vị blue & Mojito', 25000, 0, 0, 0, '1535340146piza.jpg', 1, 20, 0),
(163, 'Soda Passion Fruit', 'Soda Mix vị chanh leo & Mojito', 25000, 0, 0, 0, '1535340184salad.jpg', 1, 20, 0),
(164, 'Soda Mojito Menthe', 'Soda Mix vị bạc hà xanh & Mojito', 25000, 0, 0, 0, '1535340218seefood.jpg', 1, 20, 0),
(165, 'Soda Lemon Strawberry', 'Soda Mix vị chanh tươi & dâu tây', 25000, 0, 0, 0, '15369856691chanh.jpg', 1, 20, 0),
(166, 'Soda Menthe Wildberry', 'Soda Mix vị bạc hà xanh & Dâu rừng', 25000, 0, 0, 0, '1535340288thit.jpg', 1, 20, 0),
(167, 'Soda Mojito Blueberry', 'Soda Mix vị Mojto & việt quất', 25000, 0, 0, 0, '1535340326piza.jpg', 1, 20, 0),
(168, 'Soda Mango Mojito', 'Soda Xoài tươi mix mojto', 28000, 0, 0, 0, '1535340369salad.jpg', 1, 20, 0),
(169, 'Cocacola lon', 'Chưa', 15000, 0, 0, 0, '1535341543tomato.jpg', 1, 24, 0),
(170, 'Soda Apple Mojito', 'Soda Táo tươi mix mojito', 28000, 0, 0, 0, '1535340434tomato.jpg', 1, 20, 0),
(171, 'Soda Butterfly Pea Mojito Mango', 'Soda xoài tươi mix mojito & Hoa đậu biếc', 32000, 0, 0, 0, '1535340492thit.jpg', 1, 20, 0),
(172, 'Sinh tố xoài', 'Chưa', 28000, 0, 0, 0, '15369855111xoai.jpg', 1, 21, 0),
(173, 'Sinh tố bơ', 'Chưa', 32000, 0, 0, 0, '15369854981bo.jpg', 1, 21, 0),
(174, 'Fanta chai', 'Chưa', 12000, 0, 0, 0, '1535341591piza.jpg', 1, 24, 0),
(175, 'Sinh tố dưa hấu', 'Chưa', 28000, 0, 0, 0, '1536985481ep4.jpg', 1, 21, 0),
(176, 'Sinh tố sữa chua coffee', 'Chưa', 28000, 0, 0, 0, '1536985554soco.jpg', 1, 21, 0),
(177, 'Sinh tố mãng cầu', 'Chưa', 38000, 0, 0, 0, '15369854591mangcau.jpg', 1, 21, 0),
(178, 'Sinh tố cam tươi', 'Chưa', 32000, 0, 0, 0, '15369854461cam.jpg', 1, 21, 0),
(179, 'Spite lon', 'Chưa', 15000, 0, 0, 0, '1535341622salad.jpg', 1, 24, 0),
(180, 'Nước ép táo', 'Chưa', 25000, 0, 0, 0, '1536984838ep2.jpg', 1, 22, 0),
(181, 'Nước ép dưa hấu', 'Chưa', 25000, 0, 0, 0, '1536984820ep4.jpg', 1, 22, 0),
(182, 'Nước ép chanh leo', 'Chưa', 25000, 0, 0, 0, '1536984802ep3.jpg', 1, 22, 0),
(183, 'Nước ép ổi', 'Chưa', 25000, 0, 0, 0, '1536984787ep1.jpg', 1, 22, 0),
(184, 'Coffee đá xay cookies', 'Chưa', 36000, 0, 0, 0, '1535341159piza.jpg', 1, 23, 0),
(185, 'Coffee đá xay caramel', 'Chưa', 36000, 0, 0, 0, '1535341188salad.jpg', 1, 23, 0),
(186, 'Coffee cốt dừa đá xay', 'Chưa', 34000, 0, 0, 0, '1535341223seefood.jpg', 1, 23, 0),
(187, 'Coffee đen', 'Chưa', 18000, 0, 0, 0, '1535341267tomato.jpg', 1, 23, 0),
(188, 'Fanta lon', 'Chưa', 15000, 0, 0, 0, '1535341569thit.jpg', 1, 24, 0),
(189, 'Coffee Lattea sầu nóng', 'Chưa', 25000, 0, 0, 0, '1535341336piza.jpg', 1, 23, 0),
(190, 'Coffee Lattea sầu đá', 'Chưa', 28000, 0, 0, 0, '1535341371salad.jpg', 1, 23, 0),
(191, 'Bạc xỉu', 'Chưa', 25000, 0, 0, 0, '1535341403tomato.jpg', 1, 23, 0),
(192, 'Late sầu nóng', 'Chưa', 22000, 0, 0, 0, '1535341429thit.jpg', 1, 23, 0),
(193, 'Cocacola chai', 'Chưa', 12000, 0, 0, 0, '1535341512salad.jpg', 1, 24, 0),
(194, 'Late sầu đá', 'Chưa', 28000, 0, 0, 0, '1535341453piza.jpg', 1, 23, 0),
(195, 'Coffee nâu', 'Chưa', 20000, 0, 0, 0, '1535341287thit.jpg', 1, 23, 0),
(196, 'Soda Dragon fruit Mojito', 'Soda thanh long đỏ mix Mojito', 28000, 0, 0, 0, '1535340409seefood.jpg', 1, 20, 0),
(197, 'Sinh tố chanh leo', 'Chưa', 28000, 0, 0, 0, '15369854301chanh.jpg', 1, 21, 0),
(198, 'Nước ép dứa', 'Chưa', 25000, 0, 0, 0, '1536984758ep5.jpg', 1, 22, 0),
(199, 'Trà sữa Hokaidu', 'Chưa', 28000, 0, 0, 0, '1536982189tra-sua-khoai.jpg', 1, 17, 0),
(200, 'Smoothies Kiwi', 'Chưa', 32000, 0, 0, 0, '15369875451chanh.jpg', 1, 18, 0),
(201, 'Macchiato Chocolate', 'Chưa', 35000, 0, 0, 0, '1536986736socodau.jpg', 1, 18, 0),
(202, 'Bingsu xoài kem tươi', 'Chưa', 38000, 0, 0, 0, '1536983429k22.jpg', 1, 16, 0),
(203, 'Taro Oreo Cake Ice-Cream Mix', 'Kem tươi Mix bánh kem oreo Khoai môn&lpar;4 viên&rpar;', 35000, 0, 0, 0, '1536983369k11.jpg', 1, 13, 0),
(204, 'Bolognaise', 'Chưa có', 50000, 0, 0, 0, '1533591225piza.jpg', 0, 2, 1),
(205, 'Đùi gà BBQ', 'k', 25000, 0, 0, 0, '1533703043piza.jpg', 0, 3, 0),
(206, 'Cánh gà chiên KFC', 'ko', 25000, 0, 0, 0, '1533703181piza.jpg', 0, 3, 1),
(207, 'Khoai tây lắc', 'ko', 30000, 0, 0, 0, '1533703642piza.jpg', 0, 3, 0),
(208, 'Nộm sứa gà cay', 'ko', 30000, 0, 0, 0, '1533703886piza.jpg', 0, 3, 0),
(209, 'Ốc sư tử nướng', 'ko', 50000, 0, 0, 0, '1533704093piza.jpg', 0, 4, 0),
(210, 'Ngao sốt thái bát đại', 'ko', 50000, 0, 0, 0, '1533704223piza.jpg', 0, 4, 0),
(211, 'Khay 4', 'Ốc mít luộc, ốc ao luộc, chân gà ngâm xả tắc,nem chua rán, gà khô lá chanh,trứng cút lộn luộc, cá viên chiên', 200000, 0, 0, 0, '1535268249salad.jpg', 0, 6, 0),
(215, 'Pizza Margarita', 'Chưa', 80000, 100000, 120000, 0, '1536765431piza.jpg', 0, 1, 0),
(216, 'Pizza Rib BBQ', 'Chưa', 80000, 100000, 120000, 0, '1536765519salad.jpg', 0, 1, 1),
(217, 'Pizza Chilibeef', 'Chưa', 80000, 100000, 120000, 0, '1536765636seefood.jpg', 0, 1, 0),
(218, 'Pizza Beef BBQ', 'Chưa', 80000, 100000, 120000, 0, '1536765681tomato.jpg', 0, 1, 0),
(219, 'Pizza Hawaiian', 'Chưa', 80000, 100000, 120000, 0, '1536765738thit.jpg', 0, 1, 0),
(220, 'Pizza Procitto', 'Chưa', 80000, 100000, 120000, 0, '1536765794piza.jpg', 0, 1, 0),
(221, 'Pizza Salami', 'Chưa', 80000, 100000, 120000, 0, '1536765841salad.jpg', 0, 1, 0),
(222, 'Pizza Chicken Mushroom', 'Chưa', 80000, 100000, 120000, 0, '1536765888tomato.jpg', 0, 1, 0),
(223, 'Pizza Seafood', 'Chưa', 80000, 100000, 120000, 0, '1536765926seefood.jpg', 0, 1, 0),
(224, 'Pizza Special', 'Chưa', 80000, 100000, 120000, 0, '1536765973tomato.jpg', 0, 1, 0),
(225, 'Thuyền hoa tình yêu', 'Ice-cream Love Mix thập cẩm', 29000, 0, 0, 0, '1536986322k66.jpg', 1, 11, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `birthday` varchar(500) NOT NULL,
  `id_product` int(11) NOT NULL DEFAULT 1,
  `password` varchar(500) NOT NULL,
  `id_security` int(11) NOT NULL DEFAULT 0,
  `phone_number` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user`, `fullname`, `address`, `birthday`, `id_product`, `password`, `id_security`, `phone_number`) VALUES
(1, 'admin', 'Phan Thanh Thế', 'Nghệ An', '1998-03-08', 1, '202cb962ac59075b964b07152d234b70', 1, '0123456789'),
(5, 'cuong', 'Nguyễn Đức Cường', 'Hà Tĩnh', '1998-03-08', 1, '25d55ad283aa400af464c76d713c07ad', 0, '0123456789'),
(7, 'test', 'test', 'Đà Nẵng', '1998-03-08', 1, 'e10adc3949ba59abbe56e057f20f883e', 0, '0987654321');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_ads`
--
ALTER TABLE `tbl_ads`
  ADD PRIMARY KEY (`id_ads`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_hot_customer`
--
ALTER TABLE `tbl_hot_customer`
  ADD PRIMARY KEY (`id_hot_customer`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_ads`
--
ALTER TABLE `tbl_ads`
  MODIFY `id_ads` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_hot_customer`
--
ALTER TABLE `tbl_hot_customer`
  MODIFY `id_hot_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
