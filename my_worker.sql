-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 08:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_worker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Sunny Patel', 'sunny@gmail.com', '1234'),
(2, 'Dhruv Patel', 'dv@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_address` text NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_email`, `user_password`, `user_address`, `user_mobile`) VALUES
(7, 'Sunny Patel', 'male', 'Sunny@gmail.com', '1234', 'Dhansura', 2147483647),
(9, 'Dhruv Patel', 'male', 'dhruv@gmail.com', '1234', 'Maganpura', 2147483647),
(10, 'Meet Patel', 'male', 'meet@gmail.com', '1235', 'Maganpura', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `worker_master`
--

CREATE TABLE `worker_master` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(20) NOT NULL,
  `worker_details` text NOT NULL,
  `worker_startdate` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `worker_email` text NOT NULL,
  `worker_phone` int(11) NOT NULL,
  `worker_password` int(11) NOT NULL,
  `worker_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_master`
--

INSERT INTO `worker_master` (`worker_id`, `worker_name`, `worker_details`, `worker_startdate`, `type_id`, `area_id`, `worker_email`, `worker_phone`, `worker_password`, `worker_address`) VALUES
(5, 'shani', 'worker', '12-08-2021', 0, 0, 'sp@gmail.com', 2147483647, 14662, 'dhansura'),
(6, 'Sunny Patel', 'Plumber', '12-08-2020', 0, 0, 'splimbani@gmail.com', 2147483647, 4561, 'modasa'),
(7, 'Sunny Patel', 'Plumber', '12-08-2020', 0, 0, 'splimbani@gmail.com', 2147483647, 4561, 'modasa'),
(8, 'Sunny Patel', 'Plumber', '12-08-2020', 0, 0, 'splimbani@gmail.com', 2147483647, 4561, 'modasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `worker_master`
--
ALTER TABLE `worker_master`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `worker_master`
--
ALTER TABLE `worker_master`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
