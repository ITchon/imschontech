-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 05:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `officer_id` int(11) NOT NULL,
  `officer_type` varchar(20) NOT NULL,
  `citizen_id` varchar(13) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `of_code` varchar(20) NOT NULL,
  `of_birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officer_id`, `officer_type`, `citizen_id`, `title`, `fname`, `lname`, `tel`, `email`, `of_code`, `of_birth_date`) VALUES
(1, 'bilateral', '1232132132131', 'นาง', 'test', 'test', '1111111111', 'test@test', '1111111111', '1111-11-11'),
(2, 'course', '123456789', 'นางสาว', 'asdasdas', 'ADSASDS', '1234123456', 'markkoko01@gmail.com', '1111111', '2021-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
