-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 05:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_color` text NOT NULL,
  `product_gsm` float NOT NULL,
  `product_thickness` float NOT NULL,
  `product_width` float NOT NULL,
  `product_height` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_color`, `product_gsm`, `product_thickness`, `product_width`, `product_height`) VALUES
(1, 'hasnath', 'yellow', 12, 12, 12, 12),
(2, 'nitol paper', 'yellow', 1, 3, 12, 43),
(3, 'nitol paper', 'green', 12.3, 1.2, 22.3, 33.2),
(4, 'nitol paper', 'green', 12.3, 1.2, 22.3, 33.2),
(5, 'nitol paper', 'green', 12.3, 1.2, 22.3, 33.2),
(6, 'ww', '', 0, 0, 33, 33),
(7, 'ww', '', 0, 0, 33, 33),
(8, 'nitol newspaper', 'green', 12.3, 12.3, 123.3, 123.3);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `company_name` tinytext NOT NULL,
  `dc_date` date NOT NULL,
  `dc_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_no` int(11) NOT NULL,
  `product_name` tinytext NOT NULL,
  `product_unit(MT)` float NOT NULL,
  `product_unit(ream)` float NOT NULL,
  `unit_price` float NOT NULL,
  `discount_MT` float NOT NULL,
  `total_discount` float NOT NULL,
  `vat` float NOT NULL,
  `total_vat` float NOT NULL,
  `total_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `phone_no` tinytext NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `product_name` tinytext NOT NULL,
  `product_MT` float NOT NULL,
  `product_ream` float NOT NULL,
  `unit_price` float NOT NULL,
  `discount_MT` float NOT NULL,
  `total_discount` float NOT NULL,
  `vat` float NOT NULL,
  `total_vat` float NOT NULL,
  `total_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_name` tinytext NOT NULL,
  `product_width` int(11) NOT NULL,
  `product_height` int(11) NOT NULL,
  `product_MT` float NOT NULL,
  `product_ream` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
