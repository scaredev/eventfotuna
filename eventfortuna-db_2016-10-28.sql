-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2016 at 12:34 AM
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
  `order_id` bigint(20) NOT NULL,
  `barista_id` bigint(20) NOT NULL,
  `prize` float NOT NULL,
  `bid_completed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `order_id`, `barista_id`, `prize`, `bid_completed`) VALUES
(1, 1, 1, 200, '2'),
(2, 2, 1, 500, '3'),
(3, 3, 1, 1000, '0'),
(4, 4, 1, 454, '0'),
(5, 1, 2, 500, '2'),
(6, 2, 2, 400, '3'),
(7, 4, 2, 600, '0'),
(8, 3, 0, 700, '0'),
(9, 7, 0, 0, '');

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
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `eventdate` datetime NOT NULL,
  `timeinterval` varchar(20) NOT NULL,
  `participants` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` varchar(10) NOT NULL,
  `winner_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `transaction_id`, `party`, `partytype`, `zipcode`, `name`, `email`, `tel`, `eventdate`, `timeinterval`, `participants`, `address`, `orderdate`, `completed`, `winner_id`) VALUES
(1, '3f35020cd12d1780ad69b81c88540a54', 'company', 'Barnedab', 6340, 'Richard', 'cacuyado@gmail.com', '4122509', '2016-10-22 14:16:00', '', 100, '5', '2016-10-22 06:16:40', '2', 0),
(2, 'd64d897b856575e02ffbd61039a4bd46', 'company', 'Barnedab', 6340, 'Paul', 'cacuyado@gmail.com', '4122509', '2016-10-22 14:27:00', '', 0, 's', '2016-10-22 06:27:18', '3', 0),
(3, '580B09CDF1C74', 'private', 'Messe', 6340, 'Cande', 'cacuyado@gmail.com', '4122509', '2016-10-22 14:40:00', '', 200, 'tagbilaran', '2016-10-22 06:40:13', '0', 0),
(4, '3f35020cd12d1780ad69b81c88540a54', 'company', 'Barnedab', 6340, 'Richard', 'cacuyado@gmail.com', '4122509', '2016-10-22 14:16:00', '', 100, '5', '2016-10-22 06:16:40', '0', 0),
(5, '58122E5AA351C', 'private', 'Promovering', 6300, 'Riza', 'riza@gmail.com', '4228050', '2016-10-28 00:41:00', '', 90, 'Tawala', '2016-10-27 16:42:02', '0', 0),
(6, '58122EA652260', 'private', 'Promovering', 6300, 'Riza', 'riza@gmail.com', '4228050', '2016-10-28 00:41:00', '', 90, 'Tawala', '2016-10-27 16:43:18', '0', 0),
(7, '58122ED756B93', 'private', 'Promovering', 6300, 'Riza', 'riza@gmail.com', '4228050', '2016-10-28 00:41:00', '', 90, 'Tawala', '2016-10-27 16:44:07', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `company` text NOT NULL,
  `logo` text NOT NULL,
  `company_address` text NOT NULL,
  `about_company` text NOT NULL,
  `about_person` text NOT NULL,
  `profile_pic` text NOT NULL,
  `cart_type` text NOT NULL,
  `services` text NOT NULL,
  `cart_pictures` text NOT NULL,
  `completed` int(11) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `company`, `logo`, `company_address`, `about_company`, `about_person`, `profile_pic`, `cart_type`, `services`, `cart_pictures`, `completed`, `mobile`) VALUES
(1, 'Crisnil', 'Acuyado', 'ca@design4web.ph', 'e10c68790a06d578073cc7ee8f979ccd', 'Lorem Ipsum', '', '3472 Florida st. Makati City', 'Lorem ipsum dolor sit amet, exerci euismod ponderum no vix. Ex omnium erroribus consectetuer duo, graece omittam eleifend in sea, mea at quidam omnium conclusionemque. Sit cu agam case pertinacia, te sale facilis mediocritatem vel. Amet signiferumque id est, nam dicit voluptatum te, mundi everti ut usu.', 'Lorem ipsum dolor sit amet, exerci euismod ponderum no vix. Ex omnium erroribus consectetuer duo, graece omittam eleifend in sea, mea at quidam omnium conclusionemque. Sit cu agam case pertinacia, te sale facilis mediocritatem vel. Amet signiferumque id est, nam dicit voluptatum te, mundi everti ut usu.', '', 'Roller', 'on ice,', '', 0, 0),
(2, '', '', 'cacuyado@gmail.com', 'e10c68790a06d578073cc7ee8f979ccd', 'Scaredev', '', '', '', '', '', 'car', '', '', 0, 2147483647),
(3, '', '', 'cacuyado@cec.edu.ph', 'e10c68790a06d578073cc7ee8f979ccd', 'Scaredev', '', '', '', '', '', 'cart', '', '', 0, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bid_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
