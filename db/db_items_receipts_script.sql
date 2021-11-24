-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 08:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiftlaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `price`, `image_path`) VALUES
(1, 'Ariel', '12.00', 'img/items/619de185a6f8f5.49174332.jpg'),
(2, 'Breeze', '12.00', 'img/items/619de198dcc137.04330592.jpg'),
(3, 'Comfort Care', '14.00', 'img/items/619de1af01ccb1.75608971.jpg'),
(4, 'Downy', '8.00', 'img/items/619de1c10f43f6.11380021.jpg'),
(5, 'Dry Service', '60.00', 'img/items/619de1de580568.25375742.png'),
(6, 'Dryer Sheet', '3.00', 'img/items/619de1f8cf0317.35620976.jpg'),
(7, 'Fold Service', '25.00', 'img/items/619de214417ad8.15663850.jpg'),
(8, 'Tide', '12.00', 'img/items/619de250794d42.08125031.jpg'),
(9, 'Wash Service', '65.00', 'img/items/619de2646fb262.61862732.jpg'),
(10, 'Wash, Dry, Fold Service', '155.00', 'img/items/619de292b3fcf6.88824653.jpg'),
(11, 'Zonrox 225ML', '24.00', 'img/items/619de2a88d9796.48290915.jpg'),
(12, 'Zonrox 95ML', '13.00', 'img/items/619de2bb6bbb06.71724721.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(10) UNSIGNED NOT NULL,
  `receipts_id` int(10) UNSIGNED NOT NULL,
  `items_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `receipts_id`, `items_id`, `quantity`) VALUES
(1, 1, 9, 1),
(2, 1, 5, 1),
(3, 1, 1, 1),
(4, 1, 4, 1),
(5, 1, 6, 1),
(6, 1, 12, 1),
(7, 2, 10, 1),
(8, 2, 12, 1),
(9, 2, 4, 1),
(10, 3, 10, 2),
(11, 3, 12, 1),
(12, 3, 4, 1),
(13, 4, 9, 2),
(14, 4, 5, 1),
(15, 4, 6, 1),
(16, 4, 1, 2),
(17, 4, 4, 1),
(18, 4, 12, 1),
(19, 5, 9, 5),
(20, 5, 2, 5),
(21, 5, 4, 1),
(22, 5, 6, 1),
(23, 5, 11, 1),
(24, 6, 10, 5),
(25, 6, 11, 2),
(26, 6, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `receipt_id` int(10) UNSIGNED NOT NULL,
  `receipt_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`receipt_id`, `receipt_date`) VALUES
(1, '2021-11-24 07:01:07'),
(2, '2021-11-24 07:01:26'),
(3, '2021-11-24 07:01:39'),
(4, '2021-11-24 07:02:00'),
(5, '2021-11-24 07:02:25'),
(6, '2021-11-24 07:02:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `receipts_id` (`receipts_id`),
  ADD KEY `items_id` (`items_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`receipt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `receipt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`receipts_id`) REFERENCES `receipts` (`receipt_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
