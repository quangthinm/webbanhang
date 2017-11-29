-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2017 lúc 10:53 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `optiongroups`
--

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Đang đổ dữ liệu cho bảng `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'color'),
(2, 'size');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`OptionID`, `OptionGroupID`, `OptionName`) VALUES
(1, 1, 'red'),
(2, 1, 'blue'),
(3, 1, 'green'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 2, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategories`
--

CREATE TABLE `productcategories` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(225) CHARACTER SET utf8 NOT NULL,
  `CategorySlug` varchar(225) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Đang đổ dữ liệu cho bảng `productcategories`
--

INSERT INTO `productcategories` (`id`, `CategoryName`, `CategorySlug`) VALUES
(1, 'Thực phẩm chức năng', 'thuc-pham-chuc-nang'),
(2, 'Mỹ phẩm', 'my-pham'),
(3, 'Dinh dưỡng quý', 'dinh-duong-quy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productoptions`
--

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Đang đổ dữ liệu cho bảng `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 2),
(5, 1, 5, 0, 2),
(6, 1, 6, 0, 2),
(7, 1, 7, 2, 2),
(8, 1, 8, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Product_name` varchar(225) NOT NULL,
  `Slug` varchar(225) NOT NULL,
  `Product_Price` float NOT NULL,
  `Product_Derc` longtext NOT NULL,
  `Product_Detail` longtext,
  `Product_Img` varchar(225) NOT NULL,
  `Product_Cate` int(11) NOT NULL,
  `Product_SubCate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `Product_name`, `Slug`, `Product_Price`, `Product_Derc`, `Product_Detail`, `Product_Img`, `Product_Cate`, `Product_SubCate`) VALUES
(1, 'Nước uống đẹp da Be-Max 2020', 'nuoc-uong-dep-da-be-max-2020', 3500000, 'Nước uống Be-Max 2020 bổ sung 125 dưỡng chất giúp tăng cường sức đề kháng, tái tạo năng lượng, chống lại gốc tự do gây lão hoá, thiết lập lại mạng lưới collagen bên trong cơ thể giúp tổ chức cấu tạo tế bào trở nên vững chắc và khoẻ mạnh.', NULL, 'timthumb.jpg', 2, 5),
(4, 'Viên uống trắng da Crystal Tomato', 'vien-uong-trang-da-crystal-tomato', 5000000, 'Crystal Tomato là sản phẩm đột phá trong công nghệ dưỡng trắng da, bổ sung những tinh chất giúp dưỡng trắng da từ sâu bên trong.', NULL, 'aMFRk5-vien-uong-trang-da.jpg', 2, 5),
(7, 'Viên uống chống nắng Be-Max The Sun', 'vien-uong-chong-nang-be-max-the-sun', 2000000, 'Viên uống chống nắng Be-Max The Sun mang đến giải pháp hoàn hảo giúp da bạn chống lại tác hại của ánh nắng mặt trời, đem đến cho bạn làn da trắng sáng, khỏe mạnh.', NULL, 'RxhUR8-vien-uong-chong-nang-be-max-the-sun.jpg', 2, 5),
(8, 'Viên uống trắng da Beauty Skin', 'vien-uong-trang-da-beauty-skin', 900000, 'Viên uống trắng da BEAUTY SKIN là sự kết hợp các công nghệ tiên tiến nhất có các thành phần hoạt tính làm ức chế enzyme tham gia vào quá trình sản xuất melanin từ đó giúp kiểm soát sự hình thành hắc sắc tố, gia tăng độ ẩm, độ đàn hồi của da cho bạn làn da trắng sáng mịn màng.', NULL, 'gMBJVj-vien-uong-trang-da-beauty-skin.jpg', 2, 5),
(9, 'Trà thải độc cơ thể', 'giam-can/tra-thai-doc-co-the', 47000, 'Trà thải độc cơ thể hay còn gọi là trà thải độc ruột nature\'s tea - loại bỏ những cặn bã thức ăn bám vào thành ruột, giúp hạn hạn chế được bệnh tật.', NULL, 'PsJ79n-tra-thai-doc-co-the.jpg', 1, 1),
(10, 'Viên giảm cân 30 Days Waistline', 'vien-giam-can-30-days-waistline', 1500000, 'Viên giảm cân 30 Days Waistline giúp bạn đánh tan mỡ vùng bụng hiệu quả, đem lại cho bạn eo thon gọn chỉ trong 30 ngày. Giải pháp đột phá trong việc giảm cân một cách lành mạnh và tự nhiên', NULL, 'MUoLF0-vien-giam-can-30-days-waistline.jpg', 1, 1),
(11, 'Giảm cân Slimming Aid Formula', 'giam-can-slimming-aid-formula', 1000000, 'Giảm cân Slimming Aid Formula giúp tăng cường chuyển hóa mỡ trong cơ thể, giúp giảm cholesterol và lipid máu, hỗ trợ giảm cân', NULL, 'pqydE6-giam-can-slimming-aid-formula.jpg', 1, 1),
(12, 'Nước uống giảm cân Be-Max Shaper', 'nuoc-uong-giam-can-be-max-shaper', 1800000, 'Be-Max Shaper bổ sung nhiều dưỡng chất quý giá giúp duy trì vóc dáng thon gọn cùng vòng eo săn chắc, ngăn ngừa tái tạo mỡ thừa, giúp cơ thể và làn da luôn căng tràn sức sống.', NULL, 'JLuMOW-nuoc-uong-giam-can-be-max-shaper.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productsubcategories`
--

CREATE TABLE `productsubcategories` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(225) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `sub_slug` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `productsubcategories`
--

INSERT INTO `productsubcategories` (`id`, `sub_name`, `CategoryId`, `sub_slug`) VALUES
(1, 'Thực phẩm giảm cân', 1, 'thuc-pham-giam-can'),
(3, 'Hỗ trợ tim mạch', 1, 'ho-tro-tim-mach'),
(4, 'Bổ xương khớp', 1, 'bo-xuong-khop'),
(5, 'Làm trắng da', 1, 'lam-trang-da'),
(6, 'Tăng cường sức đề kháng', 1, 'tang-cuong-suc-de-khang'),
(7, 'Chống lão hóa', 1, 'chong-lao-hoa'),
(8, 'Bổ mắt, bổ não', 1, 'bo-mat-bo-nao'),
(9, 'Bổ gan, giải độc gan', 1, 'bo-gan-giai-doc-gan'),
(10, 'Dưỡng da, làm trắng da', 2, 'duong-da-lam-trang-da'),
(11, 'Trị mụn,sẹo', 2, 'tri-mun-seo'),
(12, 'Tẩy tế bào chêt', 2, 'tay-te-bao-chet'),
(13, 'Kem dưỡng thể', 2, 'kem-duong-the'),
(14, 'Dưỡng ẩm', 2, 'duong-am'),
(15, 'Kem trị nám', 2, 'kem-tri-nam'),
(16, 'Sữa rửa mặt', 2, 'sua-rua-mat'),
(17, 'Nước hoa hồng', 2, 'nuoc-hoa-hong'),
(18, 'Son dưỡng môi', 2, 'son-duong-moi'),
(19, 'Tỏi đen', 3, 'toi-den'),
(20, 'Đông trùng hạ thảo', 3, 'dong-trung-ha-thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserState` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserIP` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFax` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `optiongroups`
--
ALTER TABLE `optiongroups`
  ADD PRIMARY KEY (`OptionGroupID`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptionID`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Chỉ mục cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`ProductOptionID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `productsubcategories`
--
ALTER TABLE `productsubcategories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `optiongroups`
--
ALTER TABLE `optiongroups`
  MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `productsubcategories`
--
ALTER TABLE `productsubcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
