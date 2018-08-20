-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 04:04 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`br_id` int(11) NOT NULL,
  `br_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`br_id`, `br_name`) VALUES
(1, 'Nike'),
(2, 'Puma'),
(3, 'Adidas'),
(4, 'Killer Jeans');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`ca_id` int(11) NOT NULL,
  `ca_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ca_id`, `ca_name`) VALUES
(1, 'mens wear'),
(2, 'womens wear'),
(3, 'kids wear'),
(4, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_amount` decimal(8,2) NOT NULL,
  `p_discount` tinyint(4) NOT NULL,
  `p_caid` int(11) NOT NULL,
  `p_brid` int(11) NOT NULL,
  `p_desc` text NOT NULL,
  `p_imgpath` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_amount`, `p_discount`, `p_caid`, `p_brid`, `p_desc`, `p_imgpath`) VALUES
(1, 'Mens Tshrit', '2500.00', 20, 1, 1, 'Mens Tshirt For Mens Wear from Nike', 'uploads/product2.jpg'),
(2, 'Womens White Tshirt', '1450.00', 20, 2, 2, 'Womens tshirt from puma', 'uploads/product6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uemail`, `upass`) VALUES
(1, 'test@test.in', '011c945f30ce2cbafc452f39840f025693339c42'),
(3, 'test@kjsahkjdasasd.con', '011c945f30ce2cbafc452f39840f025693339c42'),
(4, 'test@test2.con', '011c945f30ce2cbafc452f39840f025693339c42'),
(5, 'tapas@gmail.com', '70c881d4a26984ddce795f6f71817c9cf4480e79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
