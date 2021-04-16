-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 04:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodstation`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_name` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `sub_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_item_id`, `order_id`, `dish_name`, `quantity`, `price`, `sub_total`) VALUES
(1, 99999, 'test', 99999, 99999, 0),
(2, 27, 'Sausage and Egg Biscuit', 1, 3.59, 3.59),
(3, 27, 'Chicken and Egg Sandwich', 1, 3.59, 3.59),
(4, 27, 'Crossaint Cheese', 1, 3.59, 3.59),
(5, 28, 'Sausage and Egg Biscuit', 1, 3.59, 3.59),
(6, 28, 'Chicken and Egg Sandwich', 1, 3.59, 3.59),
(7, 28, 'Crossaint Cheese', 1, 3.59, 3.59),
(8, 33, 'Sausage and Egg Biscuit', 1, 3.59, 3.59),
(9, 33, 'Chicken and Egg Sandwich', 2, 3.59, 7.18),
(10, 33, 'Crossaint Cheese', 3, 3.59, 10.77),
(11, 33, 'Soda', 1, 0.99, 0.99),
(12, 34, 'Sausage and Egg Biscuit', 1, 3.59, 3.59),
(13, 34, 'Chicken and Egg Sandwich', 2, 3.59, 7.18),
(14, 34, 'Crossaint Cheese', 3, 3.59, 10.77),
(15, 34, 'Soda', 2, 0.99, 1.98),
(16, 35, 'Sausage and Egg Biscuit', 1, 3.59, 3.59),
(17, 35, 'Chicken and Egg Sandwich', 2, 3.59, 7.18),
(18, 35, 'Crossaint Cheese', 3, 3.59, 10.77),
(19, 35, 'Soda', 2, 0.99, 1.98),
(20, 37, 'Hummus', 2, 2.59, 5.18),
(21, 37, 'Falafel', 1, 3.59, 3.59),
(22, 37, 'Soda', 1, 0.99, 0.99),
(23, 38, 'Sausage and Egg Biscuit', 2, 1.99, 3.98),
(24, 38, 'ButterCrispy Chicken Sandwich', 2, 3.59, 7.18),
(25, 38, 'Milk Shake', 2, 2.59, 5.18),
(26, 39, 'Foul Meddamas', 2, 3.59, 7.18),
(27, 39, 'Shish Tawook', 1, 3.59, 3.59),
(28, 39, 'Soda', 1, 0.99, 0.99),
(29, 40, 'Tea and Cookies', 1, 2.59, 2.59),
(30, 40, 'Omlete and Bread', 1, 3.59, 3.59),
(31, 40, 'Gundruk Rice', 1, 3.59, 3.59),
(32, 40, 'Jhol Momo', 1, 3.99, 3.99),
(33, 41, 'Tea and Cookies', 1, 2.59, 2.59),
(34, 41, 'Omlete and Bread', 1, 3.59, 3.59),
(35, 41, 'Gundruk Rice', 1, 3.59, 3.59),
(36, 42, 'Tea and Cookies', 2, 2.59, 5.18),
(37, 42, 'Gundruk Rice', 1, 3.59, 3.59),
(38, 42, 'Soda', 1, 0.99, 0.99),
(39, 42, 'Rice, Mutton and Lentils', 1, 3.59, 3.59),
(40, 43, 'Sausage and Egg Biscuit', 2, 1.99, 3.98),
(41, 43, 'ButterCrispy Chicken Sandwich', 1, 3.59, 3.59),
(42, 43, 'Soda', 1, 0.99, 0.99),
(43, 43, 'Hot Coffee', 1, 1.99, 1.99),
(44, 44, 'Hummus', 2, 2.59, 5.18),
(45, 44, 'Fattoush', 1, 3.59, 3.59),
(46, 44, 'Dolma', 2, 1.99, 3.98);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_info`
--

CREATE TABLE `delivery_info` (
  `order_id` int(11) NOT NULL,
  `state` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `apt_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_info`
--

INSERT INTO `delivery_info` (`order_id`, `state`, `city`, `street`, `zip_code`, `apt_number`) VALUES
(15, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '22A'),
(21, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '22A'),
(22, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '12'),
(27, 'TX', 'North Canton', '2020 E Maple St', 123, '123'),
(33, 'GA', 'Gainesville', '123 Broadway St', 23421, '22A'),
(34, 'VI', 'TEST', '123 Broadway St', 44592, '2A'),
(35, 'test st', 'test city', 'test st', 123, 'test1'),
(37, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '22A'),
(38, 'test st', 'test city', 'test st', 123, '123'),
(39, 'OH', 'Akron', '20 North St', 44720, '32B'),
(40, 'OH', 'Akron', '20 North St', 44720, '3A'),
(41, 'OH', 'Akron', '20 North St', 44720, '12'),
(42, 'test st', 'test city', 'test st', 123, '22A'),
(43, 'OH', 'Akron', '20 North St', 44720, '123'),
(44, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '22A');

-- --------------------------------------------------------

--
-- Table structure for table `dish_info`
--

CREATE TABLE `dish_info` (
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(45) NOT NULL,
  `dish_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_info`
--

INSERT INTO `dish_info` (`dish_id`, `dish_name`, `dish_price`) VALUES
(1, 'Sausage and Egg Biscuit', 1.99),
(2, 'Chicken and Egg Sandwich', 1.99),
(3, 'Crossaint Cheese', 1.99),
(4, '3 McChicken with 1 Small Fries', 3.59),
(5, 'ButterCrispy Chicken Sandwich', 3.59),
(6, 'Spicy Chicken Sandwich', 3.59),
(7, 'Fish O\' Fillet', 3.59),
(8, '10 pc McNuggets', 3.59),
(9, 'McDouble', 3.59),
(10, 'Soda', 0.99),
(11, 'Hot Coffee', 1.99),
(12, 'Milk Shake', 2.59),
(13, 'Quarter Pounder', 3.99),
(101, 'Tea and Cookies', 2.59),
(102, 'Omlete and Bread', 3.59),
(103, 'Gundruk Rice', 3.59),
(104, 'Rice, Lentils and Spinach', 3.59),
(105, 'Rice, Chicken and Lentils', 3.59),
(106, 'Rice, Chicken and Veggies', 3.59),
(107, 'Rice, Mutton and Lentils', 3.59),
(108, 'Rice, Mutton and Veggies', 3.59),
(109, 'Rice, Fish and Lentils', 3.59),
(110, 'Soda', 0.99),
(111, 'Chicken Momo', 1.99),
(112, 'Chicken Chowmein', 2.59),
(113, 'Jhol Momo', 3.99),
(114, 'Sekuwa', 3.99),
(201, 'Hummus', 2.59),
(202, 'Manakeesh', 3.59),
(203, 'Grilled Halloumi', 3.59),
(204, 'Foul Meddamas', 3.59),
(205, 'Falafel', 3.59),
(206, 'Fattoush', 3.59),
(207, 'Umm ali', 3.59),
(208, 'Chicken Shawarma', 3.59),
(209, 'Shish Tawook', 3.59),
(210, 'Soda', 0.99),
(211, 'Dolma', 1.99),
(212, 'Kofta', 2.59),
(213, 'test', 2.99);

-- --------------------------------------------------------

--
-- Table structure for table `drivers_info`
--

CREATE TABLE `drivers_info` (
  `driver_id` int(11) NOT NULL,
  `driver_license_plate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers_info`
--

INSERT INTO `drivers_info` (`driver_id`, `driver_license_plate`) VALUES
(101, 'WST231'),
(102, 'ABC123'),
(103, 'TEST12'),
(104, 'QJF123'),
(105, 'UTH645');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `driver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `total`, `driver_id`, `user_id`) VALUES
(1, 100, 1, 9999),
(2, 15.95, 102, 2),
(20, 13.36, 105, 3),
(21, 9.17, 101, 3),
(22, 14.36, 104, 4),
(33, 22.53, 104, 3),
(34, 23.52, 104, 4),
(35, 21.54, 102, 4),
(37, 9.76, 103, 3),
(38, 16.34, 103, 3),
(39, 11.76, 102, 4),
(40, 13.76, 104, 4),
(41, 9.77, 101, 4),
(42, 13.35, 102, 2),
(43, 10.55, 105, 2),
(44, 12.75, 101, 6);

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `promo_id` varchar(45) NOT NULL,
  `discount_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`promo_id`, `discount_percentage`) VALUES
('SUMMER20', 20);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `rewards_point` float NOT NULL,
  `state` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `apt_number` varchar(45) NOT NULL,
  `security_quest` longtext NOT NULL,
  `security_answer` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `rewards_point`, `state`, `city`, `street`, `zip_code`, `apt_number`, `security_quest`, `security_answer`) VALUES
(1, 'Admin', 'admin', 'admin@foodstation.com', 'c3284d0f94606de1fd2af172aba15bf3', '00', 0, 'OO', 'OO', 'OO', 0, '00', 'favorite game?', 'pubg'),
(2, 'John', 'Doe', 'johndoe@gmail.com', 'a5e3094ce553e08de5ba237525b106d5', '1234567890', 1.06, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '24 A', 'Favorite pet?', 'dog'),
(3, 'Yousef', 'Almugla', 'yousef@gmail.com', 'e185879a7f486d0578191addc5d68900', '1234567890', 2.5, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '24 A', 'favorite car?', 'tesla'),
(4, 'Saud', 'Alotaibi', 'saud@gmail.com', 'a5e3094ce553e08de5ba237525b106d5', '1231234234', 0.98, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '24 A', 'favorite color?', 'red'),
(5, 'Mohammed', 'Alsultan', 'mohammed@gmail.com', 'f23fe48e334b29e87b99ea49660292ae', '1231231232', 3.9, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '24 A', 'favorite game?', 'soccer'),
(6, 'Brian', 'Greenwell', 'brian@gmail.com', '9f27410725ab8cc8854a2769c7a516b8', '1234567890', 1.28, 'Ohio', 'North Canton', '2020 E Maple St', 44720, '22C', 'favorite course?', 'ethicalhacking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`);

--
-- Indexes for table `delivery_info`
--
ALTER TABLE `delivery_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `dish_info`
--
ALTER TABLE `dish_info`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `drivers_info`
--
ALTER TABLE `drivers_info`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
