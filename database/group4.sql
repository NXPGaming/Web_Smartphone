-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2022 lúc 04:43 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `group4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customerID`, `customerName`, `email`, `password`, `phone`, `address`) VALUES
(1, 'a', 'quanghuy19239@gmail.com', 'dsaf', '134', 'Thi tran Cho'),
(2, 'q', 'a@v', 'qrew', 'rqew', '1234'),
(3, 'ư', 'quanghuy14219@gmail.com', 'a', 'f', 'Thi tran Cho'),
(4, 'q', 'c@c', 'a', 's', 'd'),
(5, 'f', 'd@a', 'd', 's', 's'),
(6, 'a', 'a@a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderCode` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `quantityOrdered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orderCode`, `customerID`, `productID`, `orderDate`, `quantityOrdered`) VALUES
(1, 1, 2, '2022-05-07', 1),
(1, 1, 5, '2022-05-07', 1),
(1, 1, 6, '2022-05-06', 6),
(1, 1, 7, '2022-05-07', 4),
(1, 1, 8, '2022-05-07', 2),
(2, 6, 1, '2022-05-07', 1),
(2, 6, 7, '2022-05-07', 2),
(3, 6, 1, '2022-05-07', 1),
(3, 6, 2, '2022-05-07', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImage` varchar(50) NOT NULL,
  `buyPrice` double NOT NULL,
  `productScreen` varchar(255) DEFAULT NULL,
  `productOperatingSystem` varchar(255) DEFAULT NULL,
  `productRearCamera` varchar(255) DEFAULT NULL,
  `productFrontCamera` varchar(255) DEFAULT NULL,
  `productCPU` varchar(255) DEFAULT NULL,
  `productRAM` varchar(255) DEFAULT NULL,
  `productMemory` varchar(255) DEFAULT NULL,
  `productSIM` varchar(255) DEFAULT NULL,
  `productBattery` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `productName`, `productImage`, `buyPrice`, `productScreen`, `productOperatingSystem`, `productRearCamera`, `productFrontCamera`, `productCPU`, `productRAM`, `productMemory`, `productSIM`, `productBattery`) VALUES
(1, 'Realme GT Neo 2', 'p1', 8550000, 'Full HD+ (1080 x 2400 pixels), 20:9 (~398 ppi)', 'Android 11, Realme UI 2.0', '64 MP, f/1.8, PDAF', '16 MP, f/2.5, 26mm', ' Qualcomm SM8250-AC Snapdragon 870 5G (7 nm)', '6-8GB', '128-256GB', '2 SIM', 'Li-Po 5000 mAh'),
(2, 'iPhone 13 Pro Max', 'p2', 28950000, '6.7 inches (1284 x 2778 pixels)', 'iOS 15', '12 MP, f/1.5, 26mm, dual pixel PDAF, sensor-shift OIS', '12 MP, f/2.2, 23mm', ' Apple A15 Bionic (5 nm)', '6GB', '128GB-1TB NVMe', ' 2 SIM (1 eSIM)', 'Li-Ion 4352 mAh'),
(3, 'Samsung Galaxy Note 10', 'p3', 8850000, 'Dynamic AMOLED, QHD (1440 x 3040 pixels), 6.8 inches, Corning Gorilla Glass 6, HDR10+', 'Android 9.0 (Pie); One UI', '4 Camera: 12 MP + 12 MP (telephoto) + 16 MP + TOF 3D VGA camera', '10 MP', ' Exynos 9825 (7 nm)', '12GB', '256GB - 512GB', ' 1 Sim', '4300 mAh, 45W'),
(4, 'Xiaomi Mi 11', 'p4', 12250000, 'AMOLED, 1 tỷ màu, 6.81 inches, 120Hz, HDR10+, (1440 x 3200 pixels)', 'Android 11, MIUI 12.5', '108 MP, f/1.9 , 26mm, 1/1.33\", 0.8µm', '20 MP, 27mm , 1/3.4\", 0.8µm', 'Qualcomm Snapdragon 888 (5 nm)', ' 8-12GB', '128-256GB UFS 3.1', '2 SIM, Nano SIM', 'Li-Po 4600 mAh'),
(5, 'OPPO Reno7', 'p5', 9450000, '6.43 inches - Full HD+', 'Android 11 - ColorOS 12', '64 MP', '32 MP', 'MediaTek MT6877 Dimensity 900 5G', '8GB', '256GB', '2 SIM', 'Li-Po 4500 mAh'),
(6, 'Samsung Galaxy S22 Ultra', 'p6', 28250000, '6.8 inches, QHD+ (1440 x 3088 pixels), tỷ lệ 19.5:9', 'Android 12, One UI 4.1', '108 MP, f/1.8, 24mm', '40 MP, f/2.2, 26mm', 'Qualcomm SM8450 Snapdragon 8 Gen1 (4 nm)', '8-12GB', '128-512GB-1TB', '2 SIM, Nano SIM', 'Li-Ion 5000 mAh'),
(7, 'iPhone 12 Pro Max', 'p7', 34090000, '1284 x 2778 Pixels', 'iOS 15', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic', '512 GB', '6 GB', '1 Nano SIM & 1 eSIM', 'Li-Ion 3687 mAh'),
(8, 'iPhone 11 Pro', 'p8', 11300000, '1125 x 2436 Pixels', 'iOS 14', '3 camera 12 MP', '12 MP', 'Apple A13 Bionic', '256 GB', '4 GB', '1 Nano SIM & 1 eSIM', 'Li-Ion 3046 mAh'),
(9, 'iPhone SE', 'p9', 13900000, 'HD (750 x 1334 Pixels)', 'iOS 15', '12 MP', '7 MP', 'Apple A15 Bionic', '128 GB', '3 GB', '1 Nano SIM & 1 eSIM', 'Li-Ion 2018 mAh'),
(10, 'Vsmart Aris', 'p10', 4090000, 'Full HD+ (1080 x 2340 Pixels)', 'Android 10', '64 MP', '20 MP', 'Snapdragon 730 8 nhân', '64 GB', '6 GB', '2 Nano SIM', 'Li-Po 4000 mAh'),
(11, 'Samsung Galaxy A52s', 'p11', 8990000, 'Full HD+ (1080 x 2400 Pixels)', 'Android 11', '64 MP', '32 MP', 'Snapdragon 778G 5G', '128 GB', '8 GB', '2 Nano SIM', 'Li-Po 4500 mAh'),
(12, 'Samsung Galaxy S22 Plus', 'p12', 25990000, 'Full HD+ (1080 x 2340 Pixels)', 'Android 12', '50 MP', '10 MP', 'Snapdragon 8 Gen 1', '128 GB', '8 GB', '2 Nano SIM', 'Li-Ion 4500 mAh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderCode`,`customerID`,`productID`),
  ADD KEY `fk_orders_customers` (`customerID`),
  ADD KEY `fk_orders_product` (`productID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orders_product` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
