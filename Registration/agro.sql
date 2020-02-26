-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 03:50 AM
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
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Chreone', 'password'),
(3, 'student001', 'password001'),
(4, 'student002', 'password002'),
(5, 'student003', 'password003'),
(6, 'student004', 'password004'),
(7, 'student005', 'password005'),
(8, 'student006', 'password006'),
(9, 'student007', 'password007'),
(10, 'student008', 'password008'),
(11, 'student009', 'password009'),
(12, 'student010', 'password010'),
(13, 'student011', 'password011'),
(14, 'student012', 'password012'),
(15, 'student013', 'password013'),
(16, 'student014', 'password014'),
(17, 'student015', 'password015'),
(18, 'student016', 'password016'),
(19, 'student017', 'password017'),
(20, 'student018', 'password018'),
(21, 'student019', 'password019'),
(22, 'student020', 'password020');

-- --------------------------------------------------------

--
-- Table structure for table `balikaral_form`
--

CREATE TABLE `balikaral_form` (
  `lrn` int(15) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` int(250) NOT NULL,
  `fathersname` varchar(250) NOT NULL,
  `mothersname` varchar(250) NOT NULL,
  `focc` varchar(250) NOT NULL,
  `mocc` varchar(250) NOT NULL,
  `contactn` int(250) NOT NULL,
  `grlvl` varchar(250) NOT NULL,
  `lstschool` varchar(250) NOT NULL,
  `schooladd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balikaral_form`
--

INSERT INTO `balikaral_form` (`lrn`, `lname`, `fname`, `mname`, `gender`, `address`, `zipcode`, `fathersname`, `mothersname`, `focc`, `mocc`, `contactn`, `grlvl`, `lstschool`, `schooladd`) VALUES
(20200202, '', '', '', '', '0', 0, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jhs_form`
--

CREATE TABLE `jhs_form` (
  `lrn` int(100) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `father` varchar(250) NOT NULL,
  `mother` varchar(250) NOT NULL,
  `focc` varchar(250) NOT NULL,
  `mocc` varchar(250) NOT NULL,
  `contactn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jhs_form`
--

INSERT INTO `jhs_form` (`lrn`, `lastname`, `firstname`, `middlename`, `gender`, `address`, `zipcode`, `father`, `mother`, `focc`, `mocc`, `contactn`) VALUES
(20200202, '', '', '', '', '', 0, '', '', '', '', 0),
(20200216, 'Sevilla', 'John Christopher', 'Garay', 'Male', 'San Juan St. Brgy. Zone - 3 Libon, Albay', 4507, 'Rudy Sevilla', 'Ma. Lourdes G. Sevilla', 'Barangay Kagawad', 'Housewife', 912009019),
(20200217, 'Benavente', 'Diane', 'sadasdas', 'Female', 'qadasd', 4507, 'ads', 'asd', 'asda', 'asda', 21312313),
(20200218, 'yfdd', 'dfg', 'gfcgfd', 'gfhgf', 'hfdhgf', 35253, 'gvnbvb', 'dchcv', 'ffghjgh', 'ghghjg', 5435425);

-- --------------------------------------------------------

--
-- Table structure for table `shs_form`
--

CREATE TABLE `shs_form` (
  `lrn` int(15) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `zipcode` int(250) NOT NULL,
  `fathersname` varchar(250) NOT NULL,
  `mothersname` varchar(250) NOT NULL,
  `focc` varchar(250) NOT NULL,
  `mocc` varchar(250) NOT NULL,
  `contactn` int(250) NOT NULL,
  `yearlvl` varchar(250) NOT NULL,
  `semester` varchar(250) NOT NULL,
  `track/strand` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shs_form`
--

INSERT INTO `shs_form` (`lrn`, `lname`, `fname`, `mname`, `gender`, `address`, `zipcode`, `fathersname`, `mothersname`, `focc`, `mocc`, `contactn`, `yearlvl`, `semester`, `track/strand`) VALUES
(20200202, '', '', '', '', '', 0, '', '', '', '', 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balikaral_form`
--
ALTER TABLE `balikaral_form`
  ADD PRIMARY KEY (`lrn`);

--
-- Indexes for table `jhs_form`
--
ALTER TABLE `jhs_form`
  ADD PRIMARY KEY (`lrn`);

--
-- Indexes for table `shs_form`
--
ALTER TABLE `shs_form`
  ADD PRIMARY KEY (`lrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `balikaral_form`
--
ALTER TABLE `balikaral_form`
  MODIFY `lrn` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200204;

--
-- AUTO_INCREMENT for table `jhs_form`
--
ALTER TABLE `jhs_form`
  MODIFY `lrn` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200219;

--
-- AUTO_INCREMENT for table `shs_form`
--
ALTER TABLE `shs_form`
  MODIFY `lrn` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
