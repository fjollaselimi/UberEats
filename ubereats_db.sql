-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 10:15 PM
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
-- Database: `ubereats_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `details`) VALUES
(2, 'Clubhouse Crispy Chicken', '5.89 euro', '        The Clubhouse Crispy Chicken is an updated version of the beloved  Crispy Chicken that contains chili cheese sauce, lettuce, tomatoes, pickles and cheese.\r\n\r\nIncludes Medium Fries and Drinks.\r\n'),
(4, 'Chicken Nuggets', '4.49 euro', 'You don’t have to think about choosing these, it’s a default decision! The Chicken Nuggets come in various sizes. Don’t forget to dip them in sauces.'),
(5, 'Mexican Royale Meal', '6.49 euro', 'We told you about the delicious taste of Mexican Royale. We added some spicy ingredients for the fanatics to that taste. Mexican Royale is a combination of chili cheese sauce, jalapeños, cheese and freshly cut lettuce to create an unique spicy taste for y'),
(6, 'Crispy Chicken Meal', '5.49 euro', '                If you want chicken and you want it crispy, the best choice that you will ever make is the Crispy Chicken. The taste of the crisp together with fresh lettuce, tomatoes and mayonnaise, make our Crispy Chicken a masterpiece that you can not '),
(7, 'Xtra Long Chili Cheese Meal', '6.99 euro', 'They say treat yourself with something you like, and that something is X-tra Long Chili Cheese. With three layers of freshly flame grilled beef, tenderly melting cheese, fiery chili cheese sauce and spicy jalapeños. In short: full long flavor.\r\n\r\nMedium D'),
(8, 'Big King Meal', '5.99 euro', 'In our family we have some big ones. The BIG KING is one of them. The delicious flame grilled beef topped with lettuce, onion, pickles, tasty cheese and of course king sauce to give you the ultimate taste of one of our big ones in the family.\r\n\r\nMedium Dr'),
(9, 'Chili Cheese Burger Meal', '3.29 euro', 'It’s hot, it’s irresistible, it’s the Chili Cheese Burger. Flame grilled beef toped with jalapeños and chili cheese sauce are combined for this delicious seduction.\r\n\r\nSmall Drink and Small Fries Included.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'Fjolla', 'fjollaselimi04@gmail.com', '75350ee4c6330732809822ec105a9fa1', 'admin'),
(4, 'Flaka', 'flakaselimi@gmail.com', 'd9133f2c651adb888646565f0a52f514', 'user'),
(5, 'Vione', 'vk64990@ubt-uni.net', 'eef71e5be712e45b51203305bf98106a', 'admin'),
(10, 'adea', 'adea.klaiqi@gmail.com', '2f8c1bfcbe6ebdadf549f0d48a8dd138', 'user'),
(12, 'Dea', 'dea.galica@gmail.com', 'e4c3f224a956d5a5877a58a7be32e2a6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
