-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juhosi-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL,
  `validation_code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `email`, `role`, `validation_code`, `active`) VALUES
(1, 'admin', '70ab2db635ec4eb9a66cace7c7e28edb', 'admin@gmail.com', 'admin', '0', 1),
(6, 'customer1', '70ab2db635ec4eb9a66cace7c7e28edb', 'customer1@gmail.com', 'customer', '0', 1),
(8, 'customer2', '70ab2db635ec4eb9a66cace7c7e28edb', 'customer2@gmail.com', 'customer', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `company` text NOT NULL,
  `owner` text NOT NULL,
  `item` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `weight` float NOT NULL,
  `request_shipment` varchar(1000) NOT NULL,
  `tracking_id` varchar(100) NOT NULL,
  `shipment_size` varchar(1000) NOT NULL,
  `box_count` int(10) NOT NULL,
  `specification` text NOT NULL,
  `checklist_quantity` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `userID`, `order_date`, `company`, `owner`, `item`, `quantity`, `weight`, `request_shipment`, `tracking_id`, `shipment_size`, `box_count`, `specification`, `checklist_quantity`) VALUES
(1, 6, '2023-06-26', 'Game operation', 'Romelu', 'Item 1', 5, 5, 'Yes', '5b3023b40cc7', '5 5 7', 5, 'lorem', '5'),
(4, 6, '2023-06-26', 'Game operation', 'Romelu', 'Item 1', 5, 5, 'Yes', '5b3023b40cc7', '5 5 7', 5, 'lorem', '5'),
(5, 6, '2023-06-26', 'Game operation', 'Romelu', 'Item 1', 5, 5, 'Yes', '5b3023b40cc7', '5 5 7', 5, 'lorem', '5'),
(6, 6, '2023-06-26', 'Game operation', 'Romelu', 'Item 1', 5, 5, 'Yes', '5b3023b40cc7', '5 5 7', 5, 'lorem', '5'),
(7, 8, '2023-06-30', 'New West Trade', 'Romelu', 'Item 1', 10, 1000, 'Yes', '5b3023b4982ss', '5 X 5 X 7', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '10'),
(8, 8, '2023-06-28', 'New West Trade', 'Romelu', 'Item 2', 100, 5000, 'Yes', '5b3023b227hag', '5 5 7', 50, 'lorem ipsum.', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `auth` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
