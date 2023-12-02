-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 09:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maricakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `cname`) VALUES
(354, 'Karen D Riya'),
(384, 'Bryan Padilla'),
(507, 'Mash');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_ids` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `pro_total` int(11) NOT NULL,
  `price` float NOT NULL,
  `ornum` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `proname` varchar(255) NOT NULL,
  `tax` float NOT NULL,
  `discount` float NOT NULL,
  `total` float NOT NULL,
  `customer_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `cashier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `order_id`, `product_ids`, `qty`, `pro_total`, `price`, `ornum`, `subtotal`, `proname`, `tax`, `discount`, `total`, `customer_id`, `date`, `time`, `cashier`) VALUES
(60, 485670, 18, 1, 1000, 1000, 485670, 7250, 'Shady Cake', 217.5, 725, 6742.5, 384, '03/12/2023', '4:03 AM', 'admins'),
(61, 485670, 21, 1, 5000, 5000, 485670, 7250, 'Nathaniel', 217.5, 725, 6742.5, 384, '03/12/2023', '4:03 AM', 'admins'),
(62, 485670, 24, 1, 200, 200, 485670, 7250, 'Bento Cakes', 217.5, 725, 6742.5, 384, '03/12/2023', '4:03 AM', 'admins'),
(63, 485670, 25, 1, 450, 450, 485670, 7250, 'Yummy Cake', 217.5, 725, 6742.5, 384, '03/12/2023', '4:03 AM', 'admins'),
(64, 485670, 26, 1, 600, 600, 485670, 7250, 'Minimal Bento Cake', 217.5, 725, 6742.5, 384, '03/12/2023', '4:03 AM', 'admins'),
(65, 196653, 21, 1, 5000, 5000, 196653, 5200, 'Nathaniel', 156, 1040, 4316, 354, '03/12/2023', '4:04 AM', 'admins'),
(66, 196653, 24, 1, 200, 200, 196653, 5200, 'Bento Cakes', 156, 1040, 4316, 354, '03/12/2023', '4:04 AM', 'admins'),
(67, 252840, 26, 1, 600, 600, 252840, 1050, 'Minimal Bento Cake', 31.5, 105, 976.5, 507, '03/12/2023', '4:20 AM', 'masashutes'),
(68, 252840, 25, 1, 450, 450, 252840, 1050, 'Yummy Cake', 31.5, 105, 976.5, 507, '03/12/2023', '4:20 AM', 'masashutes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(50) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_img`, `availability`) VALUES
(18, 'Shady Cake', '1000', 'default.png', 'Available'),
(21, 'Nathaniel', '5000', 'log.png', 'Available'),
(24, 'Bento Cakes', '200', 'Plain Bento Cake.jpeg', 'Available'),
(25, 'Yummy Cake', '450', 'Yummy Cake.jpeg', 'Available'),
(26, 'Minimal Bento Cake', '600', 'Minimal Bento Cake.jpeg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `recent_orders`
--

CREATE TABLE `recent_orders` (
  `r_id` int(11) NOT NULL,
  `order_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_orders`
--

INSERT INTO `recent_orders` (`r_id`, `order_id`, `customer_id`, `date_created`, `total`) VALUES
(132, 196653, 354, '03/12/2023', 4316),
(237, 252840, 507, '03/12/2023', 976.5),
(828, 485670, 384, '03/12/2023', 6742.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admins', '$2y$10$tLP.jQh9AGQdytimMD/2W.N.bIA3yXZ28HNCeLId.QeXX6U4CTDwC', 'cashier'),
(2, 'Admin', '$2y$10$aKAnuGRz64TkUp7Jp/s1oewPTORCc9x1TVF9dkXt3qsfL0oGUF3N.', 'Cashier'),
(3, 'masashutes', '$2y$10$bTJZaOBetCfcWjVB19CUouUN7Djt/fk31tGRuGExn6CvW6A2KuTVy', 'Cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_history_ibfk_2` (`product_ids`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `recent_orders`
--
ALTER TABLE `recent_orders`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `dsad` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_history_ibfk_2` FOREIGN KEY (`product_ids`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recent_orders`
--
ALTER TABLE `recent_orders`
  ADD CONSTRAINT `dsad` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
