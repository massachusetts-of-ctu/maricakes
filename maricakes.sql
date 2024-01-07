-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 09:16 PM
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
(148, 'Pre Order Test'),
(189, 'fddf'),
(190, 'Ken O\'Bryan'),
(398, '231'),
(445, 'Bryan Mancao BSIT 3A'),
(573, 'Mayne'),
(580, 'vbbbbbbb'),
(585, 'Bryan Pre Order'),
(602, 'dsdas'),
(654, 'Bryan'),
(680, 'asd'),
(684, 'Maek'),
(730, '123'),
(734, 'cccccc'),
(788, 'csa'),
(797, 'GAGAGA'),
(840, 'tetetetette'),
(871, 'Pre-order Test'),
(892, 'Pre order test');

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
(7, 660433, 21, 1, 450, 450, 660433, 1050, 'Check Cake', 31.5, 0, 1081.5, 148, '08/1/2024', '3:23 AM', 'PRE-ORDER'),
(8, 660433, 18, 1, 300, 300, 660433, 1050, 'Shady Cake', 31.5, 0, 1081.5, 148, '08/1/2024', '3:23 AM', 'PRE-ORDER'),
(9, 660433, 26, 1, 300, 300, 660433, 1050, 'Minimal Bento Cake', 31.5, 0, 1081.5, 148, '08/1/2024', '3:23 AM', 'PRE-ORDER'),
(10, 562919, 26, 5, 1500, 300, 562919, 1500, 'Minimal Bento Cake', 45, 0, 1545, 840, '08/1/2024', '3:27 AM', 'PRE-ORDER'),
(11, 666063, 21, 1, 450, 450, 666063, 450, 'Check Cake', 13.5, 0, 463.5, 797, '08/1/2024', '3:32 AM', 'PRE-ORDER'),
(12, 197995, 21, 4, 1800, 450, 197995, 1800, 'Check Cake', 54, 0, 1854, 730, '08/1/2024', '3:37 AM', 'PRE-ORDER'),
(13, 712231, 18, 1, 300, 300, 712231, 2100, 'Shady Cake', 63, 0, 2163, 445, '08/1/2024', '4:09 AM', 'PRE-ORDER'),
(14, 712231, 21, 2, 900, 450, 712231, 2100, 'Check Cake', 63, 0, 2163, 445, '08/1/2024', '4:09 AM', 'PRE-ORDER'),
(15, 712231, 26, 3, 900, 300, 712231, 2100, 'Minimal Bento Cake', 63, 0, 2163, 445, '08/1/2024', '4:09 AM', 'PRE-ORDER'),
(109, 738692, 25, 1, 25, 25, 738692, 25, 'Yummy Cake', 0.75, 5807.75, -5782, 398, '02/1/2024', '6:18 PM', 'admins'),
(125, 149842, 18, 1, 0, 300, 149842, 300, 'Shady Cake', 9, 0, 309, 734, '03/1/2024', '12:47 AM', 'admins'),
(126, 658389, 24, 1, 0, 200, 658389, 200, 'Bento Cakes', 6, 0, 206, 788, '03/1/2024', '12:49 AM', 'admins'),
(127, 437148, 25, 1, 450, 450, 437148, 450, 'Yummy Cake', 13.5, 0, 463.5, 680, '03/1/2024', '12:51 AM', 'admins'),
(128, 499262, 18, 1, 300, 300, 499262, 5100, 'Shady Cake', 153, 510, 4743, 190, '03/1/2024', '12:52 AM', 'admins'),
(129, 499262, 21, 2, 900, 450, 499262, 5100, 'Check Cake', 153, 510, 4743, 190, '03/1/2024', '12:52 AM', 'admins'),
(130, 499262, 24, 3, 600, 200, 499262, 5100, 'Bento Cakes', 153, 510, 4743, 190, '03/1/2024', '12:52 AM', 'admins'),
(131, 499262, 25, 4, 1800, 450, 499262, 5100, 'Yummy Cake', 153, 510, 4743, 190, '03/1/2024', '12:52 AM', 'admins'),
(132, 499262, 26, 5, 1500, 300, 499262, 5100, 'Minimal Bento Cake', 153, 510, 4743, 190, '03/1/2024', '12:52 AM', 'admins'),
(133, 766541, 25, 1, 450, 450, 766541, 450, 'Yummy Cake', 13.5, 463.5, 0, 573, '03/1/2024', '1:12 PM', 'admins'),
(134, 605555, 18, 2, 600, 300, 605555, 4100, 'Shady Cake', 123, 410, 3813, 684, '03/1/2024', '1:14 PM', 'admins'),
(135, 605555, 21, 1, 450, 450, 605555, 4100, 'Check Cake', 123, 410, 3813, 684, '03/1/2024', '1:14 PM', 'admins'),
(136, 605555, 24, 1, 200, 200, 605555, 4100, 'Bento Cakes', 123, 410, 3813, 684, '03/1/2024', '1:14 PM', 'admins'),
(137, 605555, 25, 1, 450, 450, 605555, 4100, 'Yummy Cake', 123, 410, 3813, 684, '03/1/2024', '1:14 PM', 'admins'),
(138, 605555, 26, 8, 2400, 300, 605555, 4100, 'Minimal Bento Cake', 123, 410, 3813, 684, '03/1/2024', '1:14 PM', 'admins'),
(141, 697909, 26, 3, 900, 300, 697909, 900, 'Minimal Bento Cake', 27, 0, 927, 580, '03/1/2024', '3:38 PM', 'admins'),
(142, 537333, 26, 1, 300, 300, 537333, 300, 'Minimal Bento Cake', 9, 0, 309, 189, '03/1/2024', '3:40 PM', 'admins'),
(143, 301148, 18, 1, 300, 300, 301148, 300, 'Shady Cake', 9, 30, 279, 654, '05/1/2024', '3:45 PM', 'admins'),
(144, 315167, 26, 3, 900, 300, 315167, 900, 'Minimal Bento Cake', 27, 0, 927, 602, '05/1/2024', '6:35 PM', 'Pre-order');

-- --------------------------------------------------------

--
-- Table structure for table `pre_order`
--

CREATE TABLE `pre_order` (
  `r_id` int(11) NOT NULL,
  `order_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre_order_history`
--

CREATE TABLE `pre_order_history` (
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
-- Dumping data for table `pre_order_history`
--

INSERT INTO `pre_order_history` (`id`, `order_id`, `product_ids`, `qty`, `pro_total`, `price`, `ornum`, `subtotal`, `proname`, `tax`, `discount`, `total`, `customer_id`, `date`, `time`, `cashier`) VALUES
(1, 390763, 18, 1, 300, 300, 390763, 1050, 'Shady Cake', 31.5, 0, 1081.5, 892, '05/1/2024', '6:54 PM', 'PRE-ORDER'),
(2, 390763, 21, 1, 450, 450, 390763, 1050, 'Check Cake', 31.5, 0, 1081.5, 892, '05/1/2024', '6:54 PM', 'PRE-ORDER'),
(3, 390763, 26, 1, 300, 300, 390763, 1050, 'Minimal Bento Cake', 31.5, 0, 1081.5, 892, '05/1/2024', '6:54 PM', 'PRE-ORDER'),
(6, 288424, 26, 3, 900, 300, 288424, 900, 'Minimal Bento Cake', 27, 0, 927, 585, '05/1/2024', '7:31 PM', 'PRE-ORDER');

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
(18, 'Shady Cake', '300', 'default.png', 'Available'),
(21, 'Check Cake', '450', 'log.png', 'Available'),
(24, 'Bento Cakes', '200', 'Plain Bento Cake.jpeg', 'Available'),
(25, 'Yummy Cake', '450', 'Yummy Cake.jpeg', 'Available'),
(26, 'Minimal Bento Cake', '300', 'Minimal Bento Cake.jpeg', 'Available');

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
(106, 537333, 189, '03/1/2024', 309),
(113, 499262, 190, '03/1/2024', 4743),
(179, 315167, 602, '05/1/2024', 927),
(308, 605555, 684, '03/1/2024', 3813),
(590, 437148, 680, '03/1/2024', 463.5),
(611, 712231, 445, '08/1/2024', 2163),
(897, 301148, 654, '05/1/2024', 279);

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
-- Indexes for table `pre_order`
--
ALTER TABLE `pre_order`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `dsad` (`customer_id`);

--
-- Indexes for table `pre_order_history`
--
ALTER TABLE `pre_order_history`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `pre_order_history`
--
ALTER TABLE `pre_order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  ADD CONSTRAINT `order_history_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recent_orders`
--
ALTER TABLE `recent_orders`
  ADD CONSTRAINT `dsad` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
