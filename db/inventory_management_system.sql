-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 07:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `amount` text NOT NULL,
  `remarks` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `title`, `amount`, `remarks`, `date`) VALUES
(1, 'coffe', '20.50', 'cofee with karan', '2018-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_color` text NOT NULL,
  `product_gsm` float NOT NULL,
  `unit_price` float NOT NULL,
  `product_width` float NOT NULL,
  `product_height` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_color`, `product_gsm`, `unit_price`, `product_width`, `product_height`) VALUES
(1, 'A4', 'white', 12.3, 24, 34.4, 40.5),
(2, 'A5', 'white', 21, 22, 20, 27);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `dc_no` text NOT NULL,
  `dc_date` date NOT NULL,
  `order_no` text NOT NULL,
  `order_date` date NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `mt` int(11) NOT NULL,
  `ream` text NOT NULL,
  `unit_price` text NOT NULL,
  `d_price` text NOT NULL,
  `td_price` text NOT NULL,
  `vat` text NOT NULL,
  `t_vat` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `company_name`, `dc_no`, `dc_date`, `order_no`, `order_date`, `product_name`, `mt`, `ream`, `unit_price`, `d_price`, `td_price`, `vat`, `t_vat`, `total`) VALUES
(1, 'utshab training institute', '111', '2018-12-02', '111', '2018-12-02', 'A4', 0, '10', '23', '', '', '', '', '230'),
(2, 'utshab', '111', '2018-12-02', '111', '2018-12-02', 'A5', 0, '10', '22', '', '', '', '', '220'),
(3, '', '', '0000-00-00', '', '0000-00-00', 'A5', 0, '12', '23', '', '', '', '', '276'),
(4, '', '', '0000-00-00', '', '0000-00-00', 'A4', 0, '10', '10', '', '', '', '', '100'),
(5, '', '', '0000-00-00', '', '0000-00-00', 'A4', 0, '10', '10', '', '', '', '', '276'),
(6, 'hasnath', '10', '2018-12-11', '10', '2018-12-12', 'A5', 0, '12', '10', '', '', '', '', '120'),
(7, '', '', '0000-00-00', '', '0000-00-00', 'A4', 0, '100.50', '10.504', '', '', '', '', '1050.3999999999999'),
(8, '', '', '2018-12-25', '', '0000-00-00', 'A5', 0, '100', '12', '', '', '', '', '1200');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'sudipto', 'dip123'),
(2, 'hasnath', 'has123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
