-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirror`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(9, 8, 4),
(10, 4, 2),
(11, 4, 1),
(12, 4, 3),
(13, 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `add_service` varchar(255) NOT NULL,
  `fromm` varchar(255) NOT NULL,
  `too` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `kids` varchar(255) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `seniors` varchar(255) NOT NULL,
  `activation` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `admin_id`, `user_id`, `gender`, `paid`, `county`, `service`, `add_service`, `fromm`, `too`, `day`, `kids`, `adult`, `seniors`, `activation`) VALUES
(1, 5, 4, 'male', 'Yes', 'Kiambu', 'Manicure', 'nn', '10:00 AM', '5:00 PM', 'Tuesday', '1', '1', '2', 1),
(3, 5, 5, 'male', 'No', 'Kiambu', 'Hair dressing', 'haul', '1:00 PM', '6:00 PM', 'Saturday', 'none', '1', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallerly`
--

CREATE TABLE `gallerly` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `gal_img` varchar(255) NOT NULL,
  `gal_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerly`
--

INSERT INTO `gallerly` (`id`, `admin_id`, `gal_img`, `gal_description`) VALUES
(1, 5, '1656931794_1555068337533.jpg', 'Hair cut male');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `accept` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `fullname`, `phone`, `email`, `address`, `county`, `gender`, `message`, `cv`, `accept`) VALUES
(3, 'njuki', '723', 'njukia@gmail.com', 'kamene 234', 'kinoo', 'male', 'You wanker!', '1656360548_Boundaries-in-dating.pdf', 0),
(4, 'paul njihia', '768', 'ss@gmail.com', 'jkiu88', 'kadudu', 'male', 'shit', '1656360636_The Impact of Cloud Computing on Organizations.pdf', 0),
(5, 'gg', '0768-765-234', 'njukib@gmail.com', 'kibra, 98', 'kiambu', 'male', 'yes, am alright', '1656361711_Managing Your Emotions - Joyce Meyer (Naijasermons.com.ng).pdf', 0),
(6, 'ruth wangui', '0768-453-223', 'wangui@gmail.com', 'wangige, 44', 'Kiambu', 'male', ' up to snuff customer service', '1656450701_SAS .pdf', 0),
(7, 'cruz martin', '0780-403-605', 'martin@gmail.com', 'blessedvm, 90', 'murang\'a', 'male', 'i love you', '1656451220_The Impact of Cloud Computing on Organizations.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `admin_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 5, 'Wig', 1400, '1655583585_wigs1.jpg'),
(2, 5, 'Human hair', 5000, '1655583631_wigs2.jpg'),
(3, 5, 'Eye blow', 500, '1655583673_eyeblows3.jpg'),
(4, 5, 'Gel', 200, '1655583744_legnails.jpg'),
(5, 5, 'Massage oil', 800, '1655583793_massage2.jpg'),
(6, 5, 'Chemical', 300, '1655833373_hair2.jpg'),
(7, 8, 'Eye Pencil', 30, '1656449111_1655583585_wigs1.jpg'),
(8, 8, 'wig', 0, '1656448097_1655583631_wigs2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`) VALUES
(3, 0, 'paul', 'paulnjihia099@gmail.com', '$2y$10$/ATYf98k2YHzFsb5LZGcWuHAVQVawkWkLhA1u6F5pw3w342ga0bgW'),
(4, 0, 'njuki', 'njukia@gmail.com', '$2y$10$uoFJDVZudPZeaZBG3DwFkO8Ryn4xUNOdYyhfBsDJhs.ehILcsZnCK'),
(5, 1, 'ruth', 'ruth@gmail.com', '$2y$10$.3Dv.LDLJeQOEXzKwlzcBeQoe66HlKN3MZt.xhNsCSxh3Edxa/tLG'),
(6, 1, 'ngigi', 'ngigi@gmail.com', '$2y$10$4sixaYpsmON3.I4BQ1KdoOdEHV5kX4e.b84E4tjGPGmUJ4pT8OekG'),
(7, 1, 'peter', 'peter@gmail.com', '$2y$10$WXL/12hVqXEQwokidg6C6.MNAijUOi16RovWUc857/I5VmlVu7cYq'),
(8, 0, 'paul', 'paul@gmail.com', '$2y$10$DYWU86yUCD8kJHEvf8Qn8O2s3UxqTB1mTJcW/jlK4KYgA9CmBRi.i'),
(9, 0, 'kiptoo', 'kiptoo@gmail.com', '$2y$10$KOoVfY6EOFHyceKwSx/2guvdVynq1087lloxB2aCTig0EW4xJa3Za'),
(10, 1, 'kipkirui', 'kipkirui@gmail.com', '$2y$10$GjowR..10l0u2Y6ebyPmueWNh7El39y0yiRSnU7QWe8E3ByZ.Os2G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user` (`user_id`),
  ADD KEY `cart_product` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer` (`user_id`);

--
-- Indexes for table `gallerly`
--
ALTER TABLE `gallerly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallerly`
--
ALTER TABLE `gallerly`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customer` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
