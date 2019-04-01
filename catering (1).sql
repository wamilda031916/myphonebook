-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 12:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'wamildajeanbangcal@gmail.com', '8fd08afb4a928fb9c4a0ee33d4ea1e0e'),
(2, 'jean', 'jean@gmail.com', '8fd08afb4a928fb9c4a0ee33d4ea1e0e'),
(3, 'eva', 'eva@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `customer_street` varchar(50) NOT NULL,
  `customer_barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_num` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `mi`, `lastname`, `customer_street`, `customer_barangay`, `city`, `contact_num`) VALUES
(2, 'jean', 'B', 'wamilda', 'aloran', 'caputol', 'Oroquieta City', '09771045021'),
(3, 'jessabel', 'B', 'wamilda', 'aloran', 'caputol', 'Oroquieta City', '09994514865');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `description`, `price`, `unit`) VALUES
(1, 'Fried Chicken', '15.00', '1pc'),
(2, 'bulad', '100.00', '1kl'),
(3, 'maja blanca', '300.00', '35 slices');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `sales_number` int(11) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `terms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoice`
--

INSERT INTO `sales_invoice` (`sales_number`, `customer_id`, `date`, `terms`) VALUES
(7, 2, '2019-03-15', 'cod'),
(8, 2, '2019-03-15', 'cod'),
(9, 2, '2019-03-15', 'cod'),
(10, 2, '2019-03-20', 'anniversary'),
(11, 2, '2019-03-05', 'FGH'),
(12, 2, '', ''),
(13, 2, '', ''),
(14, 2, '', ''),
(15, 2, '', ''),
(16, 2, '', ''),
(17, 2, '', ''),
(18, 2, '', ''),
(19, 2, '', ''),
(20, 2, '', ''),
(21, 3, '2019-03-06', 'wedding'),
(22, 2, '2019-03-06', 'wedding');

-- --------------------------------------------------------

--
-- Table structure for table `sales_item`
--

CREATE TABLE `sales_item` (
  `sales_number` int(11) NOT NULL,
  `product_code` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `unit_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_item`
--

INSERT INTO `sales_item` (`sales_number`, `product_code`, `quantity`, `unit`, `unit_price`) VALUES
(7, 1, 23, '1pc', '15.00'),
(8, 1, 23, '1pc', '15.00'),
(8, 2, 20, 'unit', '100.00'),
(9, 1, 23, '1pc', '15.00'),
(10, 1, 25, '1pc', '15.00'),
(11, 2, 32, '1kl', '100.00'),
(21, 3, 21, '35 slices', '300.00'),
(22, 1, 12, '1pc', '15.00'),
(22, 2, 10, '1kl', '100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`sales_number`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sales_item`
--
ALTER TABLE `sales_item`
  ADD KEY `sales_number` (`sales_number`),
  ADD KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_code` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `sales_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD CONSTRAINT `sales_invoice_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `sales_item`
--
ALTER TABLE `sales_item`
  ADD CONSTRAINT `sales_item_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`),
  ADD CONSTRAINT `sales_item_ibfk_2` FOREIGN KEY (`sales_number`) REFERENCES `sales_invoice` (`sales_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
