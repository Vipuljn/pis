-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 09:10 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prms`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1, '2017-04-15 11:33:42', ' ', 'Login', 'User'),
(2, '2017-04-15 11:33:46', 'user user', 'Logout', 'User'),
(3, '2017-04-15 11:33:53', 'admin admin', 'Login', 'Admin'),
(4, '2017-04-15 11:33:58', 'admin admin', 'Logout', 'Admin'),
(5, '2017-04-15 11:34:03', ' ', 'Login', 'User'),
(6, '2017-04-15 11:34:09', 'user user', 'Logout', 'User'),
(7, '2017-04-15 11:34:15', ' ', 'Login', 'User'),
(8, '2017-04-15 11:34:32', 'admin admin', 'Login', 'Admin'),
(9, '2017-04-15 11:41:59', 'admin admin', 'Logout', 'Admin'),
(10, '2017-04-15 11:42:05', 'admin admin', 'Login', 'Admin'),
(11, '2017-04-15 11:53:31', 'admin admin', 'Logout', 'Admin'),
(12, '2017-04-15 11:53:45', 'admin admin', 'Login', 'Admin'),
(13, '2017-04-15 12:05:48', 'admin admin', 'Logout', 'Admin'),
(14, '2017-04-15 12:05:56', 'admin admin', 'Login', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `UserName`, `Password`, `FirstName`, `LastName`, `User_Type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Admin'),
(4, 'user', 'user', 'user', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
