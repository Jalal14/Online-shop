-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 03:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `join_date` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `uname`, `email`, `password`, `phone1`, `phone2`, `gender`, `dob`, `address`, `join_date`, `photo`, `role`, `status`) VALUES
(1, 'jalal uddin', 'admin', 'jalaluddin_csse14@yahoo.com', 'eyJpdiI6IjVKd3NmY05WOTg5UGxBXC80WkNUUnh3PT0iLCJ2YWx1ZSI6ImJWZ3dBdkdKUDd0SGdIK3NqS0c5WVE9PSIsIm1hYyI6IjkzNzQyMDE1ZWQ1YjhjMTdmZjY2ZmUwZWI2NDg1M2ZhYzk2MWRiOTdkN2I2N2NlNzRmMjUyZDNmNGVlZTE5YWEifQ==', '+8801924241969', NULL, 1, '1994-04-17', 'Nikunja-2, Khilkhet, Dhaka', '2018-05-21', 'admin/admin.jpg', 0, '1'),
(2, 'Moderator', 'moderator', 'moderator@mail.com', 'eyJpdiI6IlhnVWt4M3liRDZGbURpNFBWUTlXVEE9PSIsInZhbHVlIjoiZVhNWFFxYVUydktZbnpYemF5WFdDZz09IiwibWFjIjoiYmExYzdkOWIxNGFhN2FlYTY0YjkzZWQwNjIxYzQ0MmEwODRmMzFkZjY5NjUyODEzNTU2MjhkMDU2NzA1ZjJhMyJ9', '01795155900', NULL, 1, '2000-05-01', 'Khilkhet', '2018-05-22', 'admin/moderator.jpg', 1, '1'),
(4, 'admin 1', 'admin1', 'admin1@turingshop.com', 'eyJpdiI6IldDMVlKZHNCUFpLZEpGdXhhWjFneUE9PSIsInZhbHVlIjoiWXRIM2NhOFRhZFc2YnBhUjQ1bnluUT09IiwibWFjIjoiNGU4ZmRlYjlkMzM4MzY0ODE4ZGJkYmFhMjMzMmRmNDExYWVkZTkzZjgyM2IyYWM4OWJjYmY2NmYwNGI1MDhjMyJ9', '01795155900', NULL, 1, '2001-01-01', 'Dhaka', '2019-01-01', 'admin/admin1.png', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buy_history`
--

CREATE TABLE `tbl_buy_history` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `sell_price` float NOT NULL,
  `buy_date` date NOT NULL,
  `employee` int(11) NOT NULL,
  `updated` date DEFAULT NULL,
  `update_emp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buy_history`
--

INSERT INTO `tbl_buy_history` (`id`, `product`, `quantity`, `total_price`, `sell_price`, `buy_date`, `employee`, `updated`, `update_emp`) VALUES
(7, 20, 10, 1150000, 135000, '2018-06-05', 1, NULL, NULL),
(8, 21, 10, 1150000, 135000, '2018-06-05', 1, NULL, NULL),
(10, 5, 5, 1700000, 365000, '2018-06-06', 2, NULL, NULL),
(11, 6, 20, 480000, 27990, '2018-06-08', 1, NULL, NULL),
(12, 7, 15, 1125000, 82990, '2018-06-08', 1, NULL, NULL),
(13, 8, 20, 440000, 24990, '2018-06-08', 1, NULL, NULL),
(14, 9, 10, 400000, 50000, '2018-06-08', 1, NULL, NULL),
(15, 10, 20, 300000, 16990, '2018-06-08', 1, NULL, NULL),
(16, 11, 10, 200000, 24570, '2018-06-08', 1, NULL, NULL),
(17, 12, 10, 800000, 46500, '2018-06-08', 1, NULL, NULL),
(18, 13, 10, 220000, 23500, '2018-12-26', 1, NULL, NULL),
(19, 15, 10, 700000, 76000, '2018-12-30', 1, '2019-01-01', 4),
(20, 18, 20, 600000, 37000, '2018-12-31', 1, NULL, NULL),
(21, 19, 10, 1155000, 135000, '2018-12-31', 1, '2019-01-01', 1),
(22, 18, 10, 300000, 0, '2019-01-01', 1, '2019-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `customer`, `product`, `quantity`, `add_date`) VALUES
(1, 6, 15, 1, '2019-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(4, 'Camera'),
(1, 'Desktop'),
(2, 'Laptop'),
(3, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `name`, `logo`) VALUES
(1, 'Apple', 'company/1.png'),
(2, 'Dell', 'company/2.png'),
(3, 'HP', 'company/3.png'),
(5, 'Huawei', 'company/5.png'),
(6, 'Xiaomi', 'company/6.png'),
(7, 'Sony', 'company/7.png'),
(8, 'Samsung', 'company/8.png'),
(9, 'Canon', 'company/9.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

CREATE TABLE `tbl_details` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`id`, `product`, `details`) VALUES
(101, 5, 'Dual AMD FirePro D500 graphics processors with 3GB of GDDR5 VRAM each'),
(102, 5, 'Combined optical digital audio output/analog line out minijack'),
(103, 5, 'Operating temperature: 50° to 95° F (10° to 35° C)'),
(108, 6, '2280 x 1080 FHD+ screen with 96% NTSC super high-colour gamut.'),
(109, 6, '16 megapixels with a pixel size of 1.0 μm and a FOV wide angle of 78°'),
(110, 6, 'Dual-lens rear camera ticks all the boxes and then some.'),
(111, 6, '9V2A high-voltage fast charging technology.'),
(112, 7, 'New gradient colour finish.'),
(113, 7, 'HUAWEI P20 Pro can achieve 5X Hybrid Zoom.'),
(114, 7, '960 fps Super Slow Motion video mode.'),
(115, 7, 'AI-driven 3D facial modeling technology to follow the contours of your features.'),
(116, 8, 'FullView Display and Four Cameras'),
(117, 8, 'Phase detection autofocus, LED flash, auto face and smile recognition, HDR, panorama mode'),
(118, 8, 'Accelerometer, proximity, compass, ambient light, fingerprint'),
(119, 8, 'Android N OS 7.0'),
(120, 8, 'A 16nm 8-core Kirin 659 chipset clocks up to 2.36 GHz, and a 4GB RAM and 64GB ROM effortlessly runs multiple tasks efficiently'),
(124, 9, 'Android 8.1 (Oreo)'),
(125, 9, 'Super AMOLED capacitive touchscreen, 16M colors'),
(126, 9, 'Front glass, aluminum frame (7000 series)'),
(127, 10, 'Not only is it first in the world to feature Snapdragon 650'),
(128, 10, 'A massive 4050mAh battery'),
(129, 10, 'Capture stunning professional-quality images on a 16MP camera with Phase Detection Autofocus (PDAF).'),
(130, 10, 'Android 5.0.2 (Lollipop)'),
(131, 11, 'Processor Clock Speed - 1.60GHz'),
(132, 11, 'Display Type - LED Display'),
(133, 11, 'Optical Device - DVD RW'),
(134, 12, 'Bold color options boast a glossy, modern finish and make a head-turning statement'),
(135, 12, 'The plastic Inspiron 11 3000 2-in-1 comes in fun'),
(136, 12, 'Dual speakers (left and right) 2.0 Speakers with Waves MaxxAudio'),
(137, 13, 'DSLR Camera With 18-55mm Lens'),
(149, 15, 'details updated 1'),
(150, 15, 'details updated 3'),
(157, 18, 'Much improved stabilization'),
(158, 18, 'SuperPhoto adds better stills'),
(159, 18, 'Live streaming adds a new way to “share”'),
(168, 19, 'Two 3840-by-2160 (4K UHD) external displays at 60Hz with support for 1 billion colors'),
(169, 19, 'Support for HDMI, DVI, VGA, and dual-link DVI (adapters sold separately)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`id`, `name`) VALUES
(2, 'Female'),
(1, 'Male'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `acc_date` date DEFAULT NULL,
  `sell_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `sold_discount` double NOT NULL,
  `total` double NOT NULL,
  `invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `buy_price` double NOT NULL,
  `sell_price` double NOT NULL,
  `available` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `discount` float NOT NULL,
  `added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category`, `company`, `buy_price`, `sell_price`, `available`, `sold`, `status`, `image`, `discount`, `added`) VALUES
(5, 'Mac Pro', 1, 1, 340000, 365000, 5, 0, 3, 'products/5.jpg', 0, '2018-04-15'),
(6, 'Nova 3e', 3, 5, 24000, 27990, 20, 0, 3, 'products/6.jpg', 5, '2018-06-03'),
(7, 'P20 pro', 3, 5, 75000, 82990, 15, 0, 3, 'products/7.jpg', 0, '2018-06-03'),
(8, 'Nova 2i', 3, 5, 22000, 24990, 20, 0, 3, 'products/8.jpg', 3, '2018-06-01'),
(9, 'Xiaomi MI 8 explorer', 3, 6, 40000, 50000, 10, 0, 3, 'products/9.jpg', 0, '0000-00-00'),
(10, 'Redmi Note 3', 3, 6, 15000, 16990, 20, 0, 3, 'products/10.png', 0, '0000-00-00'),
(11, 'Inspiron 15-3552', 2, 2, 20000, 24570, 20, 0, 3, 'products/11.jpg', 10, '0000-00-00'),
(12, 'Dell Inspiron 11 3000', 2, 2, 80000, 46500, 10, 0, 3, 'products/12.jpg', 2, '0000-00-00'),
(13, 'Canon EOS 1100D', 4, 9, 22000, 23500, 10, 0, 3, 'products/13.jpg', 0, '2018-12-26'),
(15, 'iPhone 7', 4, 1, 70000, 76000, 10, 0, 3, 'products/15.jpg', 0, '2018-12-30'),
(18, 'GoPro Hero 7', 4, 7, 29000, 37000, 30, 0, 3, 'products/18.jpg', 3, '2018-12-31'),
(19, 'iMAC', 4, 1, 115000, 135000, 10, 0, 3, 'products/19.jpg', 0, '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration_request`
--

CREATE TABLE `tbl_registration_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration_token`
--

CREATE TABLE `tbl_registration_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_registration_token`
--

INSERT INTO `tbl_registration_token` (`id`, `email`, `token`, `verified`) VALUES
(12, 'fullname@mail.com', '6486d62c540cd0fde056c372c1eaaa6aa24e17ec', 1),
(13, 'fullname@mail.com', '8535ed3d1cc642789712b41450041eabdb108eb4', 1),
(14, 'example@mail.com', '254508682373c148ceb8e7c2aecc5b8a3f5bae80', 1),
(15, 'full@mail.com', 'bc267f316b6edb4923c3b0b14c1eefb2c4b81e82', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return`
--

CREATE TABLE `tbl_return` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `ret_date` date NOT NULL,
  `rec_by` int(11) NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_return`
--

INSERT INTO `tbl_return` (`id`, `invoice_id`, `ret_date`, `rec_by`, `note`) VALUES
(1, 3, '2018-12-30', 1, '"Customer cancelled the order."');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specification`
--

CREATE TABLE `tbl_specification` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `specification` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_specification`
--

INSERT INTO `tbl_specification` (`id`, `product`, `title`, `specification`) VALUES
(48, 5, 'Processor', '3.0GHz 8-Core Intel Xeon E5 with 25MB L3 cache and Turbo Boost up to 3.9GHz'),
(49, 5, 'Ram', '16GB (four 4GB) of 1866MHz DDR3 ECC memory'),
(50, 5, 'Storage', '256GB PCIe-based flash storage'),
(51, 5, 'Graphics', 'Dual AMD FirePro D700 graphics processors with 6GB of GDDR5 VRAM each'),
(56, 6, 'Processor', 'Octa-core (4x2.36 GHz & 4x1.7 GHz)'),
(57, 6, 'Camera', 'Dual 16+2 MP'),
(58, 6, 'Display', '5.84 inches, Full HD 1080 x 2244 pixels'),
(59, 6, 'Ram', '4 GB'),
(60, 7, 'Camera', '40MP + 20MP + 8MP'),
(61, 7, 'Display', '6.1 inches, Full HD 1080 x 2244 pixels (408 ppi)'),
(62, 7, 'Processor', 'Octa-core + Microcore i7 (4x2.4 GHz & 4x1.8 GHz)'),
(63, 7, 'Ram', '6GB'),
(64, 7, 'Storage', '128GB'),
(65, 8, 'Camera (back)', 'Dual 16+2 Megapixel'),
(66, 8, 'Camera (front)', 'Dual 13+2 Megapixel (f/2.0 aperture)'),
(67, 8, 'Display', '5.9 inches, Full HD+ 1080 x 2160 pixels (407 ppi)'),
(71, 9, 'Camera', '12 MP + 12 MP + 20MP'),
(72, 9, 'Processor', 'Qualcomm SDM845 Snapdragon 845'),
(73, 9, 'Ram', '8GB'),
(74, 10, 'Processor', 'Hexa-core, A72 1.8 GHz x 2 + A53 1.2 GHz x 4 (64-bit)'),
(75, 10, 'Ram', '3 GB'),
(76, 10, 'Memory', '32 GB'),
(77, 11, 'Processor', 'Intel CDC N3060'),
(78, 11, 'Display', '15.6"'),
(79, 11, 'Storage', '500GB'),
(80, 12, 'Processor', '6th Generation Intel Core i3-6100U'),
(81, 12, 'Ram', '4GB Single Channel DDR3L 1600MHz'),
(82, 12, 'Clock Speed', '2.3 GHz'),
(83, 13, 'Processor', 'DIGIC 4 Image Processor'),
(91, 15, 'Title 1', 'Description 1'),
(92, 15, 'TItle 2', 'Description 2'),
(97, 18, 'Waterproof', 'Waterproof  down to 33ft'),
(98, 18, 'Slo-mo speed', '8x'),
(107, 19, 'Processor', '3.0GHz quad‑core Intel Core i5 (Turbo Boost up to 3.5GHz), Processor)'),
(108, 19, 'Storage', '1TB (5400-rpm) hard drive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `name`) VALUES
(1, 'Active'),
(10, 'Cancelled'),
(2, 'Deactive'),
(8, 'Delivered'),
(3, 'In stock'),
(5, 'Not selling'),
(6, 'Ordered'),
(4, 'Out of stock'),
(7, 'Processing'),
(9, 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `tr_date` date NOT NULL,
  `type` int(1) NOT NULL,
  `acc_by` int(11) NOT NULL,
  `invoice` int(11) DEFAULT NULL,
  `buy_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `amount`, `tr_date`, `type`, `acc_by`, `invoice`, `buy_id`) VALUES
(1, 700000, '2019-01-01', 2, 4, NULL, 19),
(2, 600000, '2018-12-31', 2, 1, NULL, 20),
(3, 1150000, '2018-12-31', 2, 1, NULL, 21),
(4, 300000, '2019-01-01', 2, 1, NULL, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id`, `type`) VALUES
(1, 'Sell'),
(2, 'Buy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `address` mediumtext,
  `join_date` date NOT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `phone`, `phone2`, `address`, `join_date`, `point`) VALUES
(6, 'full name', 'fullname@email.com', 'eyJpdiI6Ik1HZWhxbXRFeEFXcVg4clNDTXRYcFE9PSIsInZhbHVlIjoiUHNnbWZGcXg5Wkh0ZjlyajcyYU9KZz09IiwibWFjIjoiNTE2MjM2ZWQ0YzEyYjkwMDg0ZTdjY2I4MzVmYTkyNmNhNmFkNjVkZGRiMzkyNTdlZWIxYWZjNTM1OWJlYjgxMyJ9', '01555758595', NULL, 'golir mor', '2018-06-10', 0),
(7, 'example', 'example@mail.com', 'eyJpdiI6InNWdUVBYjNGOE9wWjhxSTZYYW9ydUE9PSIsInZhbHVlIjoiYXc5b3hEWXJpXC81NVZ2cVRBeHljcEE9PSIsIm1hYyI6ImVjZjhkZDFkZTcwMWIyNDQ4M2M5YTk1MmY1OTYzNzliNTgwMzc0OTg5MzY3N2ZlMDljOGU0OTMzYWY3YTI0YTYifQ==', '054545465465465', NULL, 'golir mor', '2018-12-26', 0),
(8, 'full name', 'full@mail.com', 'eyJpdiI6IlRkTytOSmJKMm5tSVNCa1BGcVRuSlE9PSIsInZhbHVlIjoiakRwU29tZkFhUTZVTnBtME92VWU0Zz09IiwibWFjIjoiNjFhMjM0ODU3YWI3MmFhNjYyNjA0NjM5ZjdmZmVkYzJiNGYwODRkNzRhNzUyMGMyNDAzM2QzM2MyM2VjNzViOSJ9', '01578945612', NULL, 'Full adress', '2018-12-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_admin`
--
CREATE TABLE `view_admin` (
`id` int(11)
,`name` varchar(50)
,`uname` varchar(50)
,`email` varchar(50)
,`password` text
,`phone1` varchar(20)
,`phone2` varchar(20)
,`gender` int(11)
,`dob` date
,`address` text
,`join_date` date
,`photo` varchar(100)
,`role` tinyint(1)
,`status` varchar(20)
,`gender_name` varchar(20)
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_buy_history`
--
CREATE TABLE `view_buy_history` (
`id` int(11)
,`product` int(11)
,`quantity` int(11)
,`total_price` float
,`sell_price` float
,`buy_date` date
,`employee` int(11)
,`updated` date
,`update_emp` int(11)
,`name` varchar(100)
,`image` varchar(50)
,`category_name` varchar(100)
,`company_name` varchar(100)
,`status_name` varchar(100)
,`username` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_cart`
--
CREATE TABLE `view_cart` (
`cart_id` int(11)
,`customer` int(11)
,`quantity` int(11)
,`add_date` date
,`id` int(11)
,`name` varchar(100)
,`category` int(11)
,`company` int(11)
,`buy_price` double
,`sell_price` double
,`available` int(11)
,`sold` int(11)
,`status` int(11)
,`image` varchar(50)
,`discount` float
,`added` date
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_invoice`
--
CREATE TABLE `view_invoice` (
`id` int(11)
,`customer` int(11)
,`phone1` varchar(20)
,`phone2` varchar(20)
,`address` text
,`price` float
,`quantity` int(11)
,`status` int(11)
,`order_date` date
,`acc_date` date
,`sell_by` int(11)
,`name` varchar(50)
,`email` varchar(50)
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_order`
--
CREATE TABLE `view_order` (
`id` int(11)
,`name` varchar(100)
,`category` int(11)
,`company` int(11)
,`buy_price` double
,`sell_price` double
,`available` int(11)
,`sold` int(11)
,`status` int(11)
,`image` varchar(50)
,`discount` float
,`added` date
,`quantity` int(11)
,`unit_price` double
,`sold_discount` double
,`total` double
,`invoice_id` int(11)
,`customer` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_popular_categories`
--
CREATE TABLE `view_popular_categories` (
`category` int(11)
,`total_sold` decimal(32,0)
,`name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_popular_companies`
--
CREATE TABLE `view_popular_companies` (
`company` int(11)
,`total_sold` decimal(32,0)
,`name` varchar(100)
,`logo` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product`
--
CREATE TABLE `view_product` (
`id` int(11)
,`name` varchar(100)
,`category` int(11)
,`company` int(11)
,`buy_price` double
,`sell_price` double
,`available` int(11)
,`sold` int(11)
,`status` int(11)
,`image` varchar(50)
,`added` date
,`discount` float
,`category_name` varchar(100)
,`company_name` varchar(100)
,`status_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaction`
--
CREATE TABLE `view_transaction` (
`id` int(11)
,`amount` double
,`tr_date` date
,`type` int(1)
,`acc_by` int(11)
,`invoice` int(11)
,`buy_id` int(11)
,`type_name` varchar(20)
,`admin_name` varchar(50)
,`admin_email` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_updated_buy_history`
--
CREATE TABLE `view_updated_buy_history` (
`id` int(11)
,`product` int(11)
,`quantity` int(11)
,`total_price` float
,`sell_price` float
,`buy_date` date
,`employee` int(11)
,`updated` date
,`update_emp` int(11)
,`name` varchar(100)
,`image` varchar(50)
,`category_name` varchar(100)
,`company_name` varchar(100)
,`status_name` varchar(100)
,`username` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_wishlist`
--
CREATE TABLE `view_wishlist` (
`id` int(11)
,`customer` int(11)
,`status_name` varchar(100)
,`product_id` int(11)
,`name` varchar(100)
,`category` int(11)
,`company` int(11)
,`buy_price` double
,`sell_price` double
,`available` int(11)
,`sold` int(11)
,`status` int(11)
,`image` varchar(50)
,`discount` float
,`added` date
);

-- --------------------------------------------------------

--
-- Structure for view `view_admin`
--
DROP TABLE IF EXISTS `view_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin`  AS  select `tbl_admin`.`id` AS `id`,`tbl_admin`.`name` AS `name`,`tbl_admin`.`uname` AS `uname`,`tbl_admin`.`email` AS `email`,`tbl_admin`.`password` AS `password`,`tbl_admin`.`phone1` AS `phone1`,`tbl_admin`.`phone2` AS `phone2`,`tbl_admin`.`gender` AS `gender`,`tbl_admin`.`dob` AS `dob`,`tbl_admin`.`address` AS `address`,`tbl_admin`.`join_date` AS `join_date`,`tbl_admin`.`photo` AS `photo`,`tbl_admin`.`role` AS `role`,`tbl_admin`.`status` AS `status`,`tbl_gender`.`name` AS `gender_name`,`tbl_status`.`name` AS `status_name` from ((`tbl_admin` join `tbl_gender`) join `tbl_status`) where ((`tbl_admin`.`gender` = `tbl_gender`.`id`) and (`tbl_admin`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_buy_history`
--
DROP TABLE IF EXISTS `view_buy_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_buy_history`  AS  select `tbl_buy_history`.`id` AS `id`,`tbl_buy_history`.`product` AS `product`,`tbl_buy_history`.`quantity` AS `quantity`,`tbl_buy_history`.`total_price` AS `total_price`,`tbl_buy_history`.`sell_price` AS `sell_price`,`tbl_buy_history`.`buy_date` AS `buy_date`,`tbl_buy_history`.`employee` AS `employee`,`tbl_buy_history`.`updated` AS `updated`,`tbl_buy_history`.`update_emp` AS `update_emp`,`tbl_product`.`name` AS `name`,`tbl_product`.`image` AS `image`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name`,`tbl_admin`.`uname` AS `username`,`tbl_admin`.`email` AS `email` from (((((`tbl_buy_history` join `tbl_product`) join `tbl_category`) join `tbl_company`) join `tbl_status`) join `tbl_admin`) where ((`tbl_buy_history`.`product` = `tbl_product`.`id`) and (`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`) and (`tbl_buy_history`.`employee` = `tbl_admin`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_cart`
--
DROP TABLE IF EXISTS `view_cart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_cart`  AS  select `tbl_cart`.`id` AS `cart_id`,`tbl_cart`.`customer` AS `customer`,`tbl_cart`.`quantity` AS `quantity`,`tbl_cart`.`add_date` AS `add_date`,`tbl_product`.`id` AS `id`,`tbl_product`.`name` AS `name`,`tbl_product`.`category` AS `category`,`tbl_product`.`company` AS `company`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`sell_price` AS `sell_price`,`tbl_product`.`available` AS `available`,`tbl_product`.`sold` AS `sold`,`tbl_product`.`status` AS `status`,`tbl_product`.`image` AS `image`,`tbl_product`.`discount` AS `discount`,`tbl_product`.`added` AS `added`,`tbl_status`.`name` AS `status_name` from ((`tbl_cart` join `tbl_product`) join `tbl_status`) where ((`tbl_cart`.`product` = `tbl_product`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_invoice`
--
DROP TABLE IF EXISTS `view_invoice`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice`  AS  select `tbl_invoice`.`id` AS `id`,`tbl_invoice`.`customer` AS `customer`,`tbl_invoice`.`phone1` AS `phone1`,`tbl_invoice`.`phone2` AS `phone2`,`tbl_invoice`.`address` AS `address`,`tbl_invoice`.`price` AS `price`,`tbl_invoice`.`quantity` AS `quantity`,`tbl_invoice`.`status` AS `status`,`tbl_invoice`.`order_date` AS `order_date`,`tbl_invoice`.`acc_date` AS `acc_date`,`tbl_invoice`.`sell_by` AS `sell_by`,`tbl_user`.`name` AS `name`,`tbl_user`.`email` AS `email`,`tbl_status`.`name` AS `status_name` from ((`tbl_invoice` join `tbl_status`) join `tbl_user`) where ((`tbl_invoice`.`customer` = `tbl_user`.`id`) and (`tbl_invoice`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_order`
--
DROP TABLE IF EXISTS `view_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_order`  AS  select `tbl_product`.`id` AS `id`,`tbl_product`.`name` AS `name`,`tbl_product`.`category` AS `category`,`tbl_product`.`company` AS `company`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`sell_price` AS `sell_price`,`tbl_product`.`available` AS `available`,`tbl_product`.`sold` AS `sold`,`tbl_product`.`status` AS `status`,`tbl_product`.`image` AS `image`,`tbl_product`.`discount` AS `discount`,`tbl_product`.`added` AS `added`,`tbl_order`.`quantity` AS `quantity`,`tbl_order`.`unit_price` AS `unit_price`,`tbl_order`.`sold_discount` AS `sold_discount`,`tbl_order`.`total` AS `total`,`tbl_invoice`.`id` AS `invoice_id`,`tbl_invoice`.`customer` AS `customer` from ((`tbl_product` join `tbl_order`) join `tbl_invoice`) where ((`tbl_invoice`.`id` = `tbl_order`.`invoice`) and (`tbl_order`.`product` = `tbl_product`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_popular_categories`
--
DROP TABLE IF EXISTS `view_popular_categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_popular_categories`  AS  select `tbl_product`.`category` AS `category`,sum(`tbl_product`.`sold`) AS `total_sold`,`tbl_category`.`name` AS `name` from (`tbl_product` join `tbl_category`) where (`tbl_product`.`category` = `tbl_category`.`id`) group by `tbl_product`.`category` order by sum(`tbl_product`.`sold`) ;

-- --------------------------------------------------------

--
-- Structure for view `view_popular_companies`
--
DROP TABLE IF EXISTS `view_popular_companies`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_popular_companies`  AS  select `tbl_product`.`company` AS `company`,sum(`tbl_product`.`sold`) AS `total_sold`,`tbl_company`.`name` AS `name`,`tbl_company`.`logo` AS `logo` from (`tbl_product` join `tbl_company`) where (`tbl_product`.`company` = `tbl_company`.`id`) group by `tbl_product`.`company` order by sum(`tbl_product`.`sold`) desc ;

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS  select `tbl_product`.`id` AS `id`,`tbl_product`.`name` AS `name`,`tbl_product`.`category` AS `category`,`tbl_product`.`company` AS `company`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`sell_price` AS `sell_price`,`tbl_product`.`available` AS `available`,`tbl_product`.`sold` AS `sold`,`tbl_product`.`status` AS `status`,`tbl_product`.`image` AS `image`,`tbl_product`.`added` AS `added`,`tbl_product`.`discount` AS `discount`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name` from (((`tbl_product` join `tbl_category`) join `tbl_company`) join `tbl_status`) where ((`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_transaction`
--
DROP TABLE IF EXISTS `view_transaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaction`  AS  select `tbl_transaction`.`id` AS `id`,`tbl_transaction`.`amount` AS `amount`,`tbl_transaction`.`tr_date` AS `tr_date`,`tbl_transaction`.`type` AS `type`,`tbl_transaction`.`acc_by` AS `acc_by`,`tbl_transaction`.`invoice` AS `invoice`,`tbl_transaction`.`buy_id` AS `buy_id`,`tbl_type`.`type` AS `type_name`,`tbl_admin`.`name` AS `admin_name`,`tbl_admin`.`email` AS `admin_email` from ((`tbl_transaction` join `tbl_type`) join `tbl_admin`) where ((`tbl_transaction`.`type` = `tbl_type`.`id`) and (`tbl_transaction`.`acc_by` = `tbl_admin`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_updated_buy_history`
--
DROP TABLE IF EXISTS `view_updated_buy_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_updated_buy_history`  AS  select `tbl_buy_history`.`id` AS `id`,`tbl_buy_history`.`product` AS `product`,`tbl_buy_history`.`quantity` AS `quantity`,`tbl_buy_history`.`total_price` AS `total_price`,`tbl_buy_history`.`sell_price` AS `sell_price`,`tbl_buy_history`.`buy_date` AS `buy_date`,`tbl_buy_history`.`employee` AS `employee`,`tbl_buy_history`.`updated` AS `updated`,`tbl_buy_history`.`update_emp` AS `update_emp`,`tbl_product`.`name` AS `name`,`tbl_product`.`image` AS `image`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name`,`tbl_admin`.`uname` AS `username` from (((((`tbl_buy_history` join `tbl_product`) join `tbl_category`) join `tbl_company`) join `tbl_status`) join `tbl_admin`) where ((`tbl_buy_history`.`product` = `tbl_product`.`id`) and (`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`) and (`tbl_buy_history`.`update_emp` = `tbl_admin`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_wishlist`
--
DROP TABLE IF EXISTS `view_wishlist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_wishlist`  AS  select `tbl_wishlist`.`id` AS `id`,`tbl_wishlist`.`customer` AS `customer`,`tbl_status`.`name` AS `status_name`,`tbl_product`.`id` AS `product_id`,`tbl_product`.`name` AS `name`,`tbl_product`.`category` AS `category`,`tbl_product`.`company` AS `company`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`sell_price` AS `sell_price`,`tbl_product`.`available` AS `available`,`tbl_product`.`sold` AS `sold`,`tbl_product`.`status` AS `status`,`tbl_product`.`image` AS `image`,`tbl_product`.`discount` AS `discount`,`tbl_product`.`added` AS `added` from ((`tbl_wishlist` join `tbl_product`) join `tbl_status`) where ((`tbl_wishlist`.`product` = `tbl_product`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_buy_history`
--
ALTER TABLE `tbl_buy_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_details`
--
ALTER TABLE `tbl_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_registration_request`
--
ALTER TABLE `tbl_registration_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_registration_token`
--
ALTER TABLE `tbl_registration_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_return`
--
ALTER TABLE `tbl_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_specification`
--
ALTER TABLE `tbl_specification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_buy_history`
--
ALTER TABLE `tbl_buy_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_details`
--
ALTER TABLE `tbl_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_registration_request`
--
ALTER TABLE `tbl_registration_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_registration_token`
--
ALTER TABLE `tbl_registration_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_return`
--
ALTER TABLE `tbl_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_specification`
--
ALTER TABLE `tbl_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
