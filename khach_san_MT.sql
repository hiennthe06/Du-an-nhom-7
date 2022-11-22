-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2022 lúc 09:36 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_nhom7`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `client_id` int(10) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_password` varchar(50) NOT NULL,
  `client_image` varchar(50) NOT NULL,
  `client_phone` varchar(10) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_card` varchar(50) NOT NULL,
  `client_role` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `room_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_product`
--

CREATE TABLE `room_product` (
  `room_id` int(10) NOT NULL,
  `room_price` double(10,0) NOT NULL,
  `room_discount` double(10,0) NOT NULL,
  `room_image` varchar(50) NOT NULL,
  `room_describe` varchar(255) NOT NULL,
  `room_view` int(11) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room_product`
--

INSERT INTO `room_product` (`room_id`, `room_price`, `room_discount`, `room_image`, `room_describe`, `room_view`, `type_id`) VALUES
(14, 4500000, 40000, 'product-2.jpg', '', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room_type`
--

CREATE TABLE `room_type` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `room_type`
--

INSERT INTO `room_type` (`type_id`, `type_name`) VALUES
(3, 'Phòng ngủ'),
(4, 'Thịt kho hột dịch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Chỉ mục cho bảng `room_product`
--
ALTER TABLE `room_product`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `room_product`
--
ALTER TABLE `room_product`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `room_type`
--
ALTER TABLE `room_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_product` (`room_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Các ràng buộc cho bảng `room_product`
--
ALTER TABLE `room_product`
  ADD CONSTRAINT `room_product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `room_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
