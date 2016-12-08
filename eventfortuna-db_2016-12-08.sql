-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2016 at 05:18 AM
-- Server version: 5.6.33
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventfortuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bid_id` bigint(20) NOT NULL,
  `bid_order_id` bigint(20) NOT NULL,
  `bid_barista_id` bigint(20) NOT NULL,
  `bid_prize` float NOT NULL,
  `bid_completed` bigint(10) NOT NULL,
  `transaction_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` bigint(20) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `party` varchar(20) NOT NULL,
  `partytype` varchar(20) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `costumer_fname` varchar(20) NOT NULL,
  `costumer_email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `eventdate` date NOT NULL,
  `timeinterval` varchar(20) NOT NULL,
  `participants` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` int(10) NOT NULL,
  `winner_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `company` text NOT NULL,
  `logo` varchar(20) NOT NULL,
  `company_address` text NOT NULL,
  `about_company` text NOT NULL,
  `about_person` text NOT NULL,
  `profile_pic` text NOT NULL,
  `cart_type` text NOT NULL,
  `services` text NOT NULL,
  `cart_pictures` text NOT NULL,
  `completed` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email_verification_code` varchar(45) NOT NULL,
  `active` int(1) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`),
  ADD KEY `transaction_id_2` (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bid_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
