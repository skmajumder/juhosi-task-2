-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 11:32 AM
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
-- Database: `sql12629011`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `order_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `item` varchar(255) NOT NULL,
  `count` varchar(10) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `requests` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`order_id`, `user_id`, `order_date`, `item`, `count`, `weight`, `requests`) VALUES
(1, 1122335, '2023-06-28', 'RMG', '1000', '3000', 'Urgent'),
(2, 1122335, '2023-06-28', 'RMG', '1000', '3000', 'Urgent'),
(3, 1122335, '2023-06-29', 'Laptop', '100', '150000', 'Urgent Shipment');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `isBusiness` tinyint(4) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `create_time` datetime NOT NULL,
  `business_reg_number` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address_id`, `isBusiness`, `phone_number`, `password`, `create_time`, `business_reg_number`) VALUES
(7, 'Hardik', 11, 17, '8307471017', 'abc', '2023-06-28 02:50:00', 'ABCD_123'),
(13, 'Anshika', 1321, 21, '9999999999', 'anshika', '2023-06-27 17:59:58', 'AG123'),
(29, 'Rohit', 29, 114, '9868637166', 'Assignment', '2023-06-28 03:06:05', 'ABC_29114'),
(313, 'Sarim', 12345, 123, '9876543210', 'developer313', '2023-06-28 01:45:00', 'SARIM313'),
(7892, 'Vishnu Vardhan Reddy', 9640, 62, '9640897011', '20191COM0062', '2023-06-28 04:55:02', 'COM0062'),
(123456, 'manav', 123456, 123, '8369456359', 'manav', '2023-06-27 15:30:00', 'BRN12311'),
(123458, 'Pratik', 123456, 101, '7507484008', 'pratik', '2023-06-27 10:56:21', 'BRN_191001'),
(1122334, 'Parag', 1111, 26, '9673783846', 'Juhosi', '0000-00-00 00:00:00', 'ABC123'),
(1122335, 'Shuvo', 9640, 1, '8801634699871', 'ae97a3f96cdd94f60d48065d77c26602', '2023-06-28 14:47:29', 'COM0062');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `mobile`, `name`) VALUES
('1234', 'password', '7777777777', 'Ram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122336;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
