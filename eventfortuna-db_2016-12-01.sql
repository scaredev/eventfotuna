-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2016 at 01:42 PM
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
  `bid_completed` bigint(10) NOT NULL,
  `transaction_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `order_id`, `barista_id`, `prize`, `bid_completed`, `transaction_id`) VALUES
(1, 2, 19, 50, 0, '583E2E3A9B4A2'),
(2, 2, 3, 45, 0, '583E2E3A9B4A2'),
(3, 3, 19, 50, 0, '583E2EDD00FED');

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
  `fname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `eventdate` date NOT NULL,
  `timeinterval` varchar(20) NOT NULL,
  `participants` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` int(10) NOT NULL,
  `winner_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `transaction_id`, `party`, `partytype`, `zipcode`, `fname`, `email`, `tel`, `eventdate`, `timeinterval`, `participants`, `address`, `orderdate`, `completed`, `winner_id`) VALUES
(1, '583E1FE8D0071', 'company', 'Barnedab', 63656, 'cas', 'cacuyad@gmail.com', '45646546', '2016-11-30', '', 20, 'asdasd', '2016-11-30 00:40:08', 0, 0),
(2, '583E2E3A9B4A2', 'private', 'Reception', 66565, 'cacuyado', 'cacuyad@gmail.com', '1545', '2016-11-30', '', 562, 'asd', '2016-11-30 01:41:14', 2, 0),
(3, '583E2EDD00FED', 'company', 'Barnedab', 6565, 'christian', 'cacuyad@gmail.com', '5656', '2016-12-01', '', 1020, 'asd', '2016-11-30 01:43:57', 0, 0);

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
  `mobile` int(11) NOT NULL,
  `email_verification_code` varchar(45) NOT NULL,
  `active` int(1) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `company`, `logo`, `company_address`, `about_company`, `about_person`, `profile_pic`, `cart_type`, `services`, `cart_pictures`, `completed`, `mobile`, `email_verification_code`, `active`, `admin`) VALUES
(1, 'Crisnil', 'Acuyado', 'ca@design4web.ph', 'e10c68790a06d578073cc7ee8f979ccd', 'Lorem Ipsum', '', '3472 Florida st. Makati City', 'Lorem ipsum dolor sit amet, exerci euismod ponderum no vix. Ex omnium erroribus consectetuer duo, graece omittam eleifend in sea, mea at quidam omnium conclusionemque. Sit cu agam case pertinacia, te sale facilis mediocritatem vel. Amet signiferumque id est, nam dicit voluptatum te, mundi everti ut usu.', 'Lorem ipsum dolor sit amet, exerci euismod ponderum no vix. Ex omnium erroribus consectetuer duo, graece omittam eleifend in sea, mea at quidam omnium conclusionemque. Sit cu agam case pertinacia, te sale facilis mediocritatem vel. Amet signiferumque id est, nam dicit voluptatum te, mundi everti ut usu.', '', 'Roller', 'on ice,', '', 0, 0, '', 0, 0),
(3, 'james', '', 'cacuyado@domain1.com', 'e10c68790a06d578073cc7ee8f979ccd', 'Scaredev', '', '', '', '', '', 'cart', '', '', 0, 2147483647, '', 1, 0),
(19, 'christal', '', 'cacuyado@cec.edu.ph', 'e10c68790a06d578073cc7ee8f979ccd', 'scardev', '', '', '', '', '', 'cart', '', '', 0, 45654587, '0uW65BEFQJnUCHYc8mdx', 1, 0);

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
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
