-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 05:13 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indianhelps`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `eamil` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `email_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `addhar` varchar(200) NOT NULL,
  `faddphoto` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `alt_mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `re_pass` varchar(30) NOT NULL,
  `flatno` varchar(100) NOT NULL,
  `subloc` varchar(200) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `landmark` varchar(500) NOT NULL,
  `city` varchar(150) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `intr_of_work` varchar(25) NOT NULL,
  `ser_u_pro` varchar(200) NOT NULL,
  `approval` varchar(50) DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `helper_id` int(11) NOT NULL,
  `report_count` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `description1` varchar(1000) DEFAULT NULL,
  `description2` varchar(1000) DEFAULT NULL,
  `report_status` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `service_id` int(11) NOT NULL,
  `help_seeker_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `help_provider_id` int(11) NOT NULL,
  `stats` varchar(200) DEFAULT 'Not Complete',
  `Report` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_create`
--

CREATE TABLE `task_create` (
  `tid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `task_code` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `money` int(11) NOT NULL,
  `work_dsc` varchar(500) NOT NULL,
  `stats` varchar(200) NOT NULL DEFAULT 'Accept',
  `plc_of_work` varchar(500) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `helper_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_email`
--

CREATE TABLE `unregistered_email` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `addhar` (`addhar`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helper_id` (`helper_id`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `task_create`
--
ALTER TABLE `task_create`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `unregistered_email`
--
ALTER TABLE `unregistered_email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_create`
--
ALTER TABLE `task_create`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unregistered_email`
--
ALTER TABLE `unregistered_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`helper_id`) REFERENCES `register` (`rid`);

--
-- Constraints for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD CONSTRAINT `service_detail_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `task_create` (`tid`);

--
-- Constraints for table `task_create`
--
ALTER TABLE `task_create`
  ADD CONSTRAINT `task_create_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `register` (`rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
