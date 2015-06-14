-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2015 at 01:43 PM
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
('cuppyzh', 'asdasd', 'Yusuf Anugrah Putra Aditama', 'Jl. KPAD Sriwijaya VII no.56 RT.005/RW.008\r\n\r\nKec. Cimahi Tengah\r\nKel. Karang Mekar\r\n\r\n40524-Cimahi', 'Cimahi', '085624841995', 'iammephilesinthedark@gmail.com'),
('asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
