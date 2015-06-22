-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 03:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nirwanaonlinestage`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `name` varchar(240) NOT NULL,
  `type` varchar(10) NOT NULL,
  `desc` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `pict` varchar(240) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cid`, `name`, `type`, `desc`, `price`, `stock`, `pict`) VALUES
(6, '0', 'Adidas Coklat Tangguh', 'Man', '0', 150000, 0, '"http://localhost/Nirwana3/data/item/s1.jpg"'),
(7, '0', 'Warlock Shoe Pink', 'Women', '0', 200000, 0, '"http://localhost/Nirwana3/data/item/s2.jpg"'),
(8, '0', 'DC Black Death', 'Man', '0', 250000, 0, '"http://localhost/Nirwana3/data/item/s3.jpg"'),
(9, '0', 'DC Flat Good', 'Man', '0', 150000, 0, '"http://localhost/Nirwana3/data/item/s4.jpg"'),
(10, '0', 'All Star*', '', '0', 150000, 0, '"http://localhost/Nirwana3/data/item/s5.jpg"'),
(11, '0', 'Gary Merah', '', '0', 200000, 0, '"http://localhost/Nirwana3/data/item/s6.jpg"');

-- --------------------------------------------------------

--
-- Table structure for table `listitemofransaction`
--

CREATE TABLE IF NOT EXISTS `listitemofransaction` (
  `id_trans` int(11) NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listitemofransaction`
--

INSERT INTO `listitemofransaction` (`id_trans`, `id_item`) VALUES
(1, 6),
(1, 6),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 11),
(3, 10),
(4, 6),
(4, 7),
(2, 7),
(2, 8),
(2, 8),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sale_item`
--

CREATE TABLE IF NOT EXISTS `sale_item` (
  `id_item` int(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_item`
--

INSERT INTO `sale_item` (`id_item`, `diskon`) VALUES
(6, 50),
(11, 50);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL,
  `useraccount_username` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `useraccount_username`, `status`) VALUES
(1, 'asdasd', 'done'),
(2, 'asdasd', 'idle'),
(3, 'cuppyzh', 'idle'),
(4, 'admin', 'idle');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `phonenumber` text NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`username`, `password`, `name`, `address`, `city`, `phonenumber`, `email`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
('asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd'),
('cuppyzh', 'asdasd', 'Yusuf Anugrah Putra Aditama', 'Jl. KPAD Sriwijaya VII no.56 RT.005/RW.008\r\n\r\nKec. Cimahi Tengah\r\nKel. Karang Mekar\r\n\r\n40524-Cimahi', 'Cimahi', '085624841995', 'iammephilesinthedark@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_item`
--
ALTER TABLE `sale_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
