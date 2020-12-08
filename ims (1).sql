-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 10:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dv_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `class_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `province` varchar(30) NOT NULL,
  `zipcode` varchar(12) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `dv_id` int(11) NOT NULL,
  `dv_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `start_event` datetime DEFAULT NULL,
  `end_event` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start_event`, `end_event`) VALUES
(268, 'TESTWOYYYYYYY', '', '#c20309', '2020-05-19 04:00:00', '2020-05-25 14:00:00'),
(279, 'Work', '', '#c70000', '2020-06-15 00:00:00', '2020-06-18 00:00:00'),
(280, '', '', '#c70000', '2020-06-22 00:00:00', '2020-06-25 00:00:00'),
(281, '', '', '#c70000', '2020-06-29 00:00:00', '2020-07-04 00:00:00'),
(282, '', '', '#c70000', '2020-07-07 00:00:00', '2020-07-11 00:00:00'),
(283, '', '', '#c70000', '2020-07-13 00:00:00', '2020-07-17 00:00:00'),
(284, '', '', '#c70000', '2020-07-20 00:00:00', '2020-07-24 00:00:00'),
(285, '', '', '#c70000', '2020-07-30 00:00:00', '2020-08-02 00:00:00'),
(286, '', '', '#c70000', '2020-08-03 00:00:00', '2020-08-08 00:00:00'),
(287, '', '', '#c70000', '2020-08-10 00:00:00', '2020-08-15 00:00:00'),
(288, '', '', '#c70000', '2020-08-17 00:00:00', '2020-08-22 00:00:00'),
(289, '', '', '#c70000', '2020-08-24 00:00:00', '2020-08-29 00:00:00'),
(290, '', '', '#c70000', '2020-08-31 00:00:00', '2020-09-05 00:00:00'),
(291, '', '', '#c70000', '2020-09-07 00:00:00', '2020-09-12 00:00:00'),
(292, '', '', '#c70000', '2020-09-14 00:00:00', '2020-09-19 00:00:00'),
(293, '', '', '#0071c5', '2020-12-09 00:00:00', '2020-12-18 00:00:00'),
(294, '', '', '#0071c5', '2020-09-24 00:00:00', '2020-09-25 00:00:00'),
(296, '', '31231', '#c70000', '2020-12-03 00:00:00', '2020-12-04 00:00:00'),
(297, '', 'asadadasd', '#c70000', '2020-12-23 00:00:00', '2020-12-26 00:00:00'),
(298, '', 'asadadasd', '#525252', '2020-12-30 00:00:00', '2020-12-31 00:00:00'),
(299, '', 'asadadasd', '#525252', '2020-12-30 00:00:00', '2020-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tel` varchar(10) NOT NULL COMMENT 'password\r\n',
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `std_code` varchar(20) NOT NULL COMMENT 'username',
  `birth_date` date NOT NULL,
  `class_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `title`, `fname`, `lname`, `gender`, `tel`, `email`, `status`, `std_code`, `birth_date`, `class_id`) VALUES
(2, 'นาย', 'siwat', 'yodsamang', 'ชาย', '0611567947', 'nongpavcd@hotmail.co.th', '0', '6239010018', '0000-00-00', '0'),
(3, 'นาย', 'siwat', 'yodsamang', 'ชาย', '0611567947', 'nongpavcd@hotmail.co.th', '1', '123123123', '2020-12-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL COMMENT 'password',
  `email` varchar(50) NOT NULL,
  `th_code` varchar(20) NOT NULL COMMENT 'username',
  `th_birth_date` date NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `title`, `fname`, `lname`, `tel`, `email`, `th_code`, `th_birth_date`, `class_id`) VALUES
(2, 'นาย', 'ศิวัช', 'yodsamangads', '611567947', 'poppavcdza@gmail.com', '6239010018', '2020-12-09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
