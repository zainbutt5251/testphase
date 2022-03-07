-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 06:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_phase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contactno` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contactno`) VALUES
(1, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '03054311034');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contact_no` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `gender`, `contact_no`, `address`, `image`) VALUES
(1, 'zain', 'zainbutt5251@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', '03054311034', 'FSD', '../customer/assets/img/download.jfif4479809081'),
(2, 'mc200404480', 'mc200404480@edu.vu.pk', '25d55ad283aa400af464c76d713c07ad', 'Male', '03054311034', 'FSD', '../customer/assets/img/download.jfif6481504191');

-- --------------------------------------------------------

--
-- Table structure for table `profile_info`
--

CREATE TABLE `profile_info` (
  `id` int(11) NOT NULL,
  `u_id` int(250) NOT NULL,
  `task` varchar(250) DEFAULT NULL,
  `s_detail` varchar(250) DEFAULT NULL,
  `c_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_info`
--

INSERT INTO `profile_info` (`id`, `u_id`, `task`, `s_detail`, `c_date`) VALUES
(1, 1, ' Test Phase', 'Submit code of test phase', '2022-02-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_info`
--
ALTER TABLE `profile_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_info`
--
ALTER TABLE `profile_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
