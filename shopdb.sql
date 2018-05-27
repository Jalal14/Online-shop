-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 01:03 AM
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
  `role` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `uname`, `email`, `password`, `phone1`, `phone2`, `gender`, `dob`, `address`, `join_date`, `photo`, `role`, `status`) VALUES
(1, 'jalal uddin', 'admin', 'jalaluddin_csse14@yahoo.com', 'eyJpdiI6IjVKd3NmY05WOTg5UGxBXC80WkNUUnh3PT0iLCJ2YWx1ZSI6ImJWZ3dBdkdKUDd0SGdIK3NqS0c5WVE9PSIsIm1hYyI6IjkzNzQyMDE1ZWQ1YjhjMTdmZjY2ZmUwZWI2NDg1M2ZhYzk2MWRiOTdkN2I2N2NlNzRmMjUyZDNmNGVlZTE5YWEifQ==', '+8801924241969', NULL, 1, '1994-04-17', 'Nikunja-2, Khilkhet, Dhaka', '2018-05-21', 'admin/admin.png', 'Admin', '1'),
(2, 'Moderator', 'moderator', 'moderator@mail.com', 'eyJpdiI6IlhnVWt4M3liRDZGbURpNFBWUTlXVEE9PSIsInZhbHVlIjoiZVhNWFFxYVUydktZbnpYemF5WFdDZz09IiwibWFjIjoiYmExYzdkOWIxNGFhN2FlYTY0YjkzZWQwNjIxYzQ0MmEwODRmMzFkZjY5NjUyODEzNTU2MjhkMDU2NzA1ZjJhMyJ9', '01795155900', NULL, 1, '2000-05-01', 'Khilkhet', '2018-05-22', 'admin/moderator.jpg', 'Moderator', '1');

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
(4, 3, 10, 700000, 76000, '2018-05-26', 1, NULL, NULL),
(6, 3, 10, 700000, 76000, '2018-05-28', 1, NULL, NULL);

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
(5, 'Huawei', 'company/5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_details`
--

CREATE TABLE `tbl_details` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_details`
--

INSERT INTO `tbl_details` (`id`, `product`, `details`) VALUES
(48, 3, 'High sensitive display'),
(49, 3, 'Wide angel camera'),
(50, 3, '1080p HD video recording at 30 fps or 60 fps'),
(51, 3, 'Fingerprint sensor built into the Home button');

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
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `price` float NOT NULL,
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
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category`, `company`, `buy_price`, `sell_price`, `available`, `sold`, `status`, `image`, `discount`) VALUES
(3, 'iPhone 7', 3, 1, 70000, 76000, 20, 0, 3, 'products/3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specification`
--

CREATE TABLE `tbl_specification` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `title` text NOT NULL,
  `specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_specification`
--

INSERT INTO `tbl_specification` (`id`, `product`, `title`, `specification`) VALUES
(39, 3, 'Processor', 'A10 Fusion chip with 64-bit architecture, Embedded M10 motion coprocessor'),
(40, 3, 'iSight Camera', '12MP camera, ƒ/1.8 aperture, Digital zoom up to 5x'),
(41, 3, 'Ram', '32GB');

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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text,
  `join_date` date NOT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
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
,`role` varchar(20)
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
,`name` varchar(100)
,`image` varchar(50)
,`category_name` varchar(100)
,`company_name` varchar(100)
,`status_name` varchar(100)
,`username` varchar(50)
,`employee_name` varchar(50)
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
,`discount` float
,`category_name` varchar(100)
,`company_name` varchar(100)
,`status_name` varchar(100)
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
-- Structure for view `view_admin`
--
DROP TABLE IF EXISTS `view_admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin`  AS  select `tbl_admin`.`id` AS `id`,`tbl_admin`.`name` AS `name`,`tbl_admin`.`uname` AS `uname`,`tbl_admin`.`email` AS `email`,`tbl_admin`.`password` AS `password`,`tbl_admin`.`phone1` AS `phone1`,`tbl_admin`.`phone2` AS `phone2`,`tbl_admin`.`gender` AS `gender`,`tbl_admin`.`dob` AS `dob`,`tbl_admin`.`address` AS `address`,`tbl_admin`.`join_date` AS `join_date`,`tbl_admin`.`photo` AS `photo`,`tbl_admin`.`role` AS `role`,`tbl_admin`.`status` AS `status`,`tbl_gender`.`name` AS `gender_name`,`tbl_status`.`name` AS `status_name` from ((`tbl_admin` join `tbl_gender`) join `tbl_status`) where ((`tbl_admin`.`gender` = `tbl_gender`.`id`) and (`tbl_admin`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_buy_history`
--
DROP TABLE IF EXISTS `view_buy_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_buy_history`  AS  select `tbl_buy_history`.`id` AS `id`,`tbl_buy_history`.`product` AS `product`,`tbl_buy_history`.`quantity` AS `quantity`,`tbl_buy_history`.`total_price` AS `total_price`,`tbl_buy_history`.`sell_price` AS `sell_price`,`tbl_buy_history`.`buy_date` AS `buy_date`,`tbl_buy_history`.`employee` AS `employee`,`tbl_buy_history`.`updated` AS `updated`,`tbl_product`.`name` AS `name`,`tbl_product`.`image` AS `image`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name`,`tbl_admin`.`uname` AS `username`,`tbl_admin`.`name` AS `employee_name` from (((((`tbl_buy_history` join `tbl_product`) join `tbl_category`) join `tbl_company`) join `tbl_status`) join `tbl_admin`) where ((`tbl_buy_history`.`product` = `tbl_product`.`id`) and (`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`) and (`tbl_buy_history`.`employee` = `tbl_admin`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS  select `tbl_product`.`id` AS `id`,`tbl_product`.`name` AS `name`,`tbl_product`.`category` AS `category`,`tbl_product`.`company` AS `company`,`tbl_product`.`buy_price` AS `buy_price`,`tbl_product`.`sell_price` AS `sell_price`,`tbl_product`.`available` AS `available`,`tbl_product`.`sold` AS `sold`,`tbl_product`.`status` AS `status`,`tbl_product`.`image` AS `image`,`tbl_product`.`discount` AS `discount`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name` from (((`tbl_product` join `tbl_category`) join `tbl_company`) join `tbl_status`) where ((`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_updated_buy_history`
--
DROP TABLE IF EXISTS `view_updated_buy_history`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_updated_buy_history`  AS  select `tbl_buy_history`.`id` AS `id`,`tbl_buy_history`.`product` AS `product`,`tbl_buy_history`.`quantity` AS `quantity`,`tbl_buy_history`.`total_price` AS `total_price`,`tbl_buy_history`.`sell_price` AS `sell_price`,`tbl_buy_history`.`buy_date` AS `buy_date`,`tbl_buy_history`.`employee` AS `employee`,`tbl_buy_history`.`updated` AS `updated`,`tbl_buy_history`.`update_emp` AS `update_emp`,`tbl_product`.`name` AS `name`,`tbl_product`.`image` AS `image`,`tbl_category`.`name` AS `category_name`,`tbl_company`.`name` AS `company_name`,`tbl_status`.`name` AS `status_name`,`tbl_admin`.`uname` AS `username` from (((((`tbl_buy_history` join `tbl_product`) join `tbl_category`) join `tbl_company`) join `tbl_status`) join `tbl_admin`) where ((`tbl_buy_history`.`product` = `tbl_product`.`id`) and (`tbl_product`.`category` = `tbl_category`.`id`) and (`tbl_product`.`company` = `tbl_company`.`id`) and (`tbl_product`.`status` = `tbl_status`.`id`) and (`tbl_buy_history`.`update_emp` = `tbl_admin`.`id`)) ;

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_buy_history`
--
ALTER TABLE `tbl_buy_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_details`
--
ALTER TABLE `tbl_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_specification`
--
ALTER TABLE `tbl_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
