-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 06:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_info`
--

CREATE TABLE `dept_info` (
  `id` int(50) NOT NULL,
  `Dept_no` int(50) NOT NULL,
  `Dept_name` varchar(15) NOT NULL,
  `Group_officer` varchar(50) NOT NULL,
  `Divisiion_officer` varchar(50) NOT NULL,
  `Technical_officer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `IC_no` int(50) NOT NULL,
  `PIS_no` varchar(50) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Date_of_joining_DRDO` date NOT NULL,
  `Date_of_joining_SSPL` date NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Dept_officer_incharge` varchar(15) NOT NULL,
  `Dept_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `Application_no` int(50) NOT NULL,
  `Serial_no` int(50) NOT NULL,
  `APL_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_qualification`
--

CREATE TABLE `emp_qualification` (
  `id` int(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Institute` varchar(50) NOT NULL,
  `Discipline` varchar(50) NOT NULL,
  `Grade` int(50) NOT NULL,
  `Passing_Year` int(50) NOT NULL,
  `CGPA` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE `leave_apply` (
  `id` int(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `leave_taken` int(50) NOT NULL,
  `leave_remain` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address`
--

CREATE TABLE `permanent_address` (
  `IC_no` int(50) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin_code` int(50) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Father_name` varchar(15) NOT NULL,
  `Mother_name` varchar(15) NOT NULL,
  `Adhar_no` varchar(15) NOT NULL,
  `Address` varchar(15) NOT NULL,
  `Mobile_no` int(15) NOT NULL,
  `Blood_grp` varchar(15) NOT NULL,
  `Date_of_joining_DRDO` date NOT NULL,
  `Date_of_joining_SSPL` date NOT NULL,
  `IC_no` int(50) NOT NULL,
  `Marital_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `present_address`
--

CREATE TABLE `present_address` (
  `PIC_no` int(50) NOT NULL,
  `present_address` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin_code` int(50) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_info`
--
ALTER TABLE `dept_info`
  ADD PRIMARY KEY (`Dept_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`IC_no`),
  ADD KEY `Dept_no` (`Dept_no`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`APL_no`),
  ADD KEY `IC_no` (`Serial_no`);

--
-- Indexes for table `emp_qualification`
--
ALTER TABLE `emp_qualification`
  ADD KEY `id` (`id`);

--
-- Indexes for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD KEY `apl_no` (`id`);

--
-- Indexes for table `permanent_address`
--
ALTER TABLE `permanent_address`
  ADD PRIMARY KEY (`IC_no`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PIS_no` (`IC_no`);

--
-- Indexes for table `present_address`
--
ALTER TABLE `present_address`
  ADD PRIMARY KEY (`PIC_no`),
  ADD KEY `pis_no` (`PIC_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dept_info`
--
ALTER TABLE `dept_info`
  ADD CONSTRAINT `dept_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `emp_info` (`IC_no`),
  ADD CONSTRAINT `dept_info_ibfk_2` FOREIGN KEY (`Dept_no`) REFERENCES `emp_info` (`Dept_no`);

--
-- Constraints for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD CONSTRAINT `emp_info_ibfk_1` FOREIGN KEY (`IC_no`) REFERENCES `present_address` (`PIC_no`);

--
-- Constraints for table `emp_qualification`
--
ALTER TABLE `emp_qualification`
  ADD CONSTRAINT `emp_qualification_ibfk_1` FOREIGN KEY (`id`) REFERENCES `emp_info` (`IC_no`);

--
-- Constraints for table `leave_apply`
--
ALTER TABLE `leave_apply`
  ADD CONSTRAINT `leave_apply_ibfk_1` FOREIGN KEY (`id`) REFERENCES `emp_leave` (`APL_no`);

--
-- Constraints for table `permanent_address`
--
ALTER TABLE `permanent_address`
  ADD CONSTRAINT `permanent_address_ibfk_1` FOREIGN KEY (`IC_no`) REFERENCES `personal_info` (`id`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `dept_info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
