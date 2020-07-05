-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 06:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_trader`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gross` double(11,2) NOT NULL DEFAULT 0.00,
  `discount` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `order_id` varchar(64) DEFAULT NULL,
  `payment_mode` int(2) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='(Temporary collection of items in the cart before checkout';

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `gross`, `discount`, `tax`, `total_amount`, `order_id`, `payment_mode`, `created_at`) VALUES
(5, 3, 3000000.00, NULL, NULL, 3000000, 'INV-3802', NULL, '2020-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `car_list_id` int(11) NOT NULL,
  `gross_amount` double(11,2) DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `delivery_charge` double(11,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='(Temporary collection of items in the cart before checkout)';

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `seller_id`, `cart_id`, `quantity`, `car_list_id`, `gross_amount`, `discount_amount`, `total_amount`, `delivery_charge`) VALUES
(6, 3, 5, 1, 5, 3000000.00, NULL, 3000000, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `car_lists`
--

CREATE TABLE `car_lists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` tinyint(1) NOT NULL,
  `price` double(11,2) NOT NULL,
  `car_price` double(11,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `model_no` varchar(200) NOT NULL,
  `milage` varchar(200) NOT NULL,
  `engine_size` varchar(200) NOT NULL,
  `power` varchar(200) NOT NULL,
  `gearbox` varchar(200) NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `color` varchar(200) NOT NULL,
  `is_sold` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_lists`
--

INSERT INTO `car_lists` (`id`, `name`, `user_id`, `category_id`, `price`, `car_price`, `image`, `description`, `model_no`, `milage`, `engine_size`, `power`, `gearbox`, `number_of_seats`, `color`, `is_sold`, `active`, `deleted`) VALUES
(4, 'BMW i8', 3, 1, 10000000.00, 9000000.00, 'cars_1593863761.jpg', 'Scissor doors are designed for more than a dramatic entrance. Cleverly constructed of aluminum and carbon fiber, these sportscar signatures keep vehicle weight down while still looking incredible.', 'S123BMW', '12km/hr', '800cc', '500hp', 'Auto', 2, 'Black', 1, 1, 0),
(5, 'Innova', 3, 1, 3500000.00, 3000000.00, 'cars_1593865350.jpg', 'ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights', 'INNOVA222', '35km/hr', '600 cc', '300hp', 'Manual', 8, 'White', 0, 1, 0),
(6, 'Swift', 3, 1, 600000.00, 500000.00, 'cars_1593865543.jpg', 'ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights', 'SW555K', '40km/hr', '400cc', '150hp', 'Manual', 4, 'White', 0, 1, 0),
(7, 'Honda i10', 3, 1, 500000.00, 350000.00, 'cars_1593865714.jpg', 'ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights', 'HONDA85693H', '40km/hr', '350cc', '150hp', 'Manual', 4, 'Red', 1, 1, 0),
(8, 'AudiQ7', 3, 1, 9000000.00, 8500000.00, 'cars_1593866069.jpg', 'ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights', 'Q7AUDI123', '25km/hr', '1200cc', '800hp', 'Auto', 5, 'Black', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `deleted`) VALUES
(1, 'BMW', 1, 0),
(2, 'Toyota', 1, 0),
(4, 'Sujuki', 1, 0),
(5, 'Honda', 1, 0),
(7, 'Audi', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `gross` double NOT NULL,
  `discount` double DEFAULT 0,
  `tax` double DEFAULT 0,
  `total_amount` double NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `order_id`, `gross`, `discount`, `tax`, `total_amount`, `created_at`) VALUES
(3, 3, 'INV-1372', 9000000, NULL, NULL, 9000000, '2020-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  `car_list_id` int(11) NOT NULL,
  `gross_amount` double NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `discount_amount` double DEFAULT 0,
  `total_amount` double NOT NULL,
  `delivery_charge` double(11,2) DEFAULT 0.00,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='(Temporary collection of items in the cart before checkout)';

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`id`, `seller_id`, `invoice_id`, `car_list_id`, `gross_amount`, `quantity`, `discount_amount`, `total_amount`, `delivery_charge`, `created_at`) VALUES
(4, 3, 3, 4, 9000000, 1, NULL, 9000000, 0.00, '2020-07-05 16:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`, `user_type`, `created_at`, `deleted`) VALUES
(3, 'Moli Senapati', 'mou@g.com', '9064956113', '$2y$10$pjD16TpqlWfgpOIXf6UZrutGCxWatkuoTf8Bfhr5v2odIqUgbStNS', 1, '2020-07-03 02:14:46', 0),
(4, 'Buyer2', 'b@g.com', '7602023904', '$2y$10$shHpJj.HEhMFi438ucFeC.6Y.aBfBYbbKQ8Qgl2mgprylCMWB3GGm', 2, '2020-07-04 13:12:39', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_lists`
--
ALTER TABLE `car_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `item_id` (`car_list_id`),
  ADD KEY `invoice_id_2` (`invoice_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
