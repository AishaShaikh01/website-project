-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 08:18 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `name` varchar(30) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `height` float NOT NULL,
  `weight` int(35) NOT NULL,
  `age` int(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`name`, `lname`, `email`, `height`, `weight`, `age`, `address`, `mobile`, `date`, `password`) VALUES
('ummema', 'khan', 'Ummemakhan.101@yahoo.com', 5.9, 190, 18, 'c-41block A unit#10 latifabad hyderabad', 3018127187, '2020-09-26', '12345'),
('ambereen', 'waseem', 'amber123@gmail.com', 4.8, 58, 45, 'house no 44 street 17 latifabad no 10', 3333227288, '2020-09-24', '87654321'),
('Hamza', 'Ahmed', 'hamza@gmail.com', 5, 62, 17, 'north india hyderabad', 3214555647, '2020-05-09', '0943435'),
('ali', 'khan', 'ali@gmail.com', 5.3, 68, 22, 'latifabad 7 street 16 ,Hyderabad,Pakistan', 3214567891, '2020-09-23', 'member21');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `time` varchar(30) NOT NULL,
  `mon` varchar(40) NOT NULL,
  `tue` varchar(40) NOT NULL,
  `wed` varchar(40) NOT NULL,
  `thur` varchar(40) NOT NULL,
  `fri` varchar(40) NOT NULL,
  `sat` varchar(40) NOT NULL,
  `sun` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`time`, `mon`, `tue`, `wed`, `thur`, `fri`, `sat`, `sun`) VALUES
('10.00', 'GYM', '', 'YOGA', '', 'BODY', '', 'CARDIO'),
('14.00', '', 'RUNNING', '', 'BOX', '', 'GYM', ''),
('16.00', 'CARDIO', 'GYM', '', 'BOX', '', 'YOGA', ''),
('18.00', 'BOX', 'BODY', '', 'CARDIO', '', 'RUNNING', ''),
('20.00', '', 'YOGA', '', 'CARDIO', '', '', 'CROSSFIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`email`,`mobile`,`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
