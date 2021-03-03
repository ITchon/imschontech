-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 02:57 AM
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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dv_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `class_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `teacher_id`, `dv_id`, `class_name`, `class_group`) VALUES
(2, 6, 1, 'สทส', '1/2'),
(3, 8, 3, 'สทส', '1/1');

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
  `contact_id` int(11) NOT NULL,
  `latlong` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `province`, `zipcode`, `tel`, `contact_id`, `latlong`) VALUES
(2, 'tbggg', '285/84\r\n1', 'chiracha', '20230', '0611567947', 0, ''),
(3, 'TBKK', '131', 'พานทอง', '20145', '0649488464', 0, ''),
(4, 'Jesus company', 'above the world ', 'milky way', '999', '55555', 0, ''),
(9, 'GG', '', '', '', '', 0, '13.643262727941883, 101.24870653001064');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `tel`) VALUES
(1, 'TK TARO', '094545454'),
(2, 'TK TARO', '0649488464');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `dv_id` int(11) NOT NULL,
  `dv_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`dv_id`, `dv_name`) VALUES
(3, 'เทคโนโลยีสารสนเทศ'),
(5, 'test');

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
  `end_event` datetime DEFAULT NULL,
  `std_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `teacher_confirm` int(11) NOT NULL,
  `contact_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start_event`, `end_event`, `std_id`, `t_id`, `teacher_confirm`, `contact_confirm`) VALUES
(330, 'Mona', '1312313', '#0071c5', '2020-12-22 13:58:36', '0000-00-00 00:00:00', 8, 0, 0, 0),
(331, 'Mona thicc', '- how thic and tight is mona ass\r\n- how old is she?\r\n', '#0071c5', '2020-12-01 00:00:00', '0000-00-00 00:00:00', 8, 0, 1, 0),
(333, '', '', '#0071c5', '2020-12-01 00:00:00', '0000-00-00 00:00:00', 8, 0, 1, 0),
(334, '', NULL, '#0071c5', '2020-12-22 13:58:28', '0000-00-00 00:00:00', 8, 0, 0, 0),
(335, '', '', '#0071c5', '2020-12-01 00:00:00', '0000-00-00 00:00:00', 8, 0, 1, 0),
(336, '', '213123123', '#0071c5', '2020-12-01 00:00:00', '0000-00-00 00:00:00', 8, 0, 1, 0),
(337, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 0, 0, 0),
(338, '', '', '#c7000d', '2020-12-17 00:00:00', '0000-00-00 00:00:00', 8, 0, 1, 0),
(339, '', '', '#0071c5', '2020-12-01 00:00:00', '0000-00-00 00:00:00', 2, 0, 0, 0),
(340, '', '', '#0071c5', '2020-12-29 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(343, 'ต่อสายแลน', '', '#0071c5', '2020-12-30 00:00:00', '0000-00-00 00:00:00', 8, 0, 0, 0),
(344, 'ซ่อมคอม', '', '#0071c5', '2020-12-30 00:00:00', '0000-00-00 00:00:00', 8, 0, 0, 0),
(345, 'ซ่อมคอม', '', '#0071c5', '2021-01-08 00:00:00', '0000-00-00 00:00:00', 8, 0, 0, 0),
(346, 'ซ่อมคอม', '', '#0071c5', '2021-01-01 00:00:00', '0000-00-00 00:00:00', 8, 0, 0, 0),
(347, 'sdfghjk', '', '#0071c5', '2020-12-29 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(348, 'gg', '555', '#000000', '2020-12-29 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(349, '', '', '#0071c5', '2020-12-29 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(350, '', '', '#0071c5', '2020-12-31 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(351, 'asdasd', 'asdd', '#0071c5', '2021-01-01 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(352, 'gg', 'asdd', '#0071c5', '2021-01-02 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(353, '', '', '#0071c5', '2020-12-31 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(354, 'dasda', '', '#0071c5', '2021-01-01 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(355, 'dasda', '', '#0071c5', '2021-01-07 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(356, 'gag', '', '#0071c5', '2021-01-08 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(357, 'gag', '', '#0071c5', '2021-01-09 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(358, 'adaaaa', '', '#0071c5', '2021-02-13 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(359, 'ada', 'dasd', '#0071c5', '2021-02-18 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(360, ' fa', 'asfaf', '#0071c5', '2021-02-18 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(361, ' asd', '', '#0071c5', '2021-02-19 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(362, ' ', 'sada', '#0071c5', '2021-02-19 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(363, ' dasd', 'asda', '#0071c5', '2021-02-19 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(364, 'dasda', 'sadasd', '#0071c5', '2021-02-09 00:00:00', '0000-00-00 00:00:00', 7, 0, 0, 0),
(365, '', '', '#0071c5', '2021-02-02 00:00:00', '0000-00-00 00:00:00', 2, 0, 0, 0),
(366, 'test', '', '#0071c5', '2021-02-02 00:00:00', '0000-00-00 00:00:00', 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_img`
--

CREATE TABLE `event_img` (
  `ei_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `img_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_img`
--

INSERT INTO `event_img` (`ei_id`, `id`, `img_code`) VALUES
(11, 330, '20201012144.png'),
(12, 330, '20201111446.png'),
(13, 330, '20201119117.png'),
(14, 331, '202011224480.png'),
(15, 331, '202011224508.png'),
(16, 331, '2020112144316.png'),
(17, 332, 'QJMK7032.jpg'),
(18, 333, 'IMG_0093.JPG'),
(19, 333, 'IMG_0098.JPG'),
(20, 333, 'IXZM3910.jpg'),
(21, 333, 'QJMK7032.jpg'),
(22, 348, '123715589_647556709247876_2144380714394078765_n.jpg'),
(23, 348, '131233504_295183948564060_1565473922349697799_n.jpg'),
(24, 365, 'tlauncher_chara dreemurr.png'),
(25, 365, 'SS_chara.png'),
(26, 365, 'สัส.jpg'),
(27, 366, 'tlauncher_chara dreemurr.png'),
(28, 366, 'SS_chara.png'),
(29, 366, 'สัส.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grouplist_list`
--

CREATE TABLE `grouplist_list` (
  `gll_id` int(11) NOT NULL,
  `glist_id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grouplist_list`
--

INSERT INTO `grouplist_list` (`gll_id`, `glist_id`, `list_id`) VALUES
(1, 14, 1),
(3, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `group_list`
--

CREATE TABLE `group_list` (
  `glist_id` int(11) NOT NULL,
  `glist_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_list`
--

INSERT INTO `group_list` (`glist_id`, `glist_name`) VALUES
(14, 'wow'),
(16, 'sdfghjkl.'),
(25, 'test'),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, 'yaya'),
(32, 'asdfghjk,'),
(33, 'asdad'),
(34, 'test10'),
(38, 'test'),
(43, ''),
(44, '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `list_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `list_name`) VALUES
(1, 'qwert'),
(3, 'asdfghjh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `citizen_id` varchar(13) NOT NULL,
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

INSERT INTO `student` (`std_id`, `citizen_id`, `title`, `fname`, `lname`, `gender`, `tel`, `email`, `status`, `std_code`, `birth_date`, `class_id`) VALUES
(2, '', 'นาย', 'siwat', 'yodsamang', 'ชาย', '0123', 'nongpavcd@hotmail.co.th', '1', '123', '0000-00-00', '2'),
(7, '', 'นาย', 'สมยศ', 'พุ่มพันม่วง', 'อื่นๆ', '0922787339', 'davidlane@mail.com', '1', '5929010013', '2020-12-14', '2'),
(8, '', 'นาย', 'อดิศักร์', 'พุ่มพันม่วง', 'ชาย', '6969', 'davidlane@mail.com', '0', '5929', '2020-12-10', '3'),
(10, '', 'นาย', 'อดิศักร์', 'พุ่มพันม่วง', 'ชาย', '0649488464', 'davidlane@mail.com', '1', '6239010019', '0000-00-00', '2'),
(11, '', 'นาย', 'ฮาย้าา', 'แอะ', 'ชาย', '0649488464', 'adsisak@gmail.com', '1', '561234578', '2000-12-08', '3'),
(12, '', 'นาย', 'อดิศักร์', 'พุ่มพันม่วง', 'ชาย', '0649488464', 'davidlane@mail.com', '1', '6239010025', '2021-03-02', '2'),
(13, '', 'นาย', '1312', 'asdad', 'ชาย', '0649488464', 'pond@gmail.com', '0', '5929010014', '2021-02-10', '2'),
(14, '', 'นาย', '1312', 'asdad', 'ชาย', '0649488464', 'pond@gmail.com', '0', '5929010014', '2021-02-10', '2');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(4, 'wow'),
(7, 'woohoossss'),
(8, 'ควยอั้ม'),
(10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `subject_grouplist`
--

CREATE TABLE `subject_grouplist` (
  `sgl_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `glist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_grouplist`
--

INSERT INTO `subject_grouplist` (`sgl_id`, `subject_id`, `glist_id`) VALUES
(1, 4, 1),
(14, 7, 14),
(16, 7, 16),
(25, 8, 25),
(26, 0, 26),
(27, 0, 27),
(28, 0, 28),
(29, 0, 29),
(30, 0, 30),
(31, 0, 31),
(32, 0, 32),
(33, 0, 33),
(34, 8, 34),
(38, 7, 38),
(43, 0, 43),
(44, 0, 44);

-- --------------------------------------------------------

--
-- Table structure for table `supervision_contact`
--

CREATE TABLE `supervision_contact` (
  `spv_contact_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `approve_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervision_teacher`
--

CREATE TABLE `supervision_teacher` (
  `spv_teacher_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `approve_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `citizen_id` varchar(13) NOT NULL,
  `title` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL COMMENT 'password',
  `email` varchar(50) NOT NULL,
  `th_code` varchar(20) NOT NULL COMMENT 'username',
  `th_birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `citizen_id`, `title`, `fname`, `lname`, `tel`, `email`, `th_code`, `th_birth_date`) VALUES
(2, '', 'นาย', 'ศิวัช', 'yodsamangads', '0611567948', 'poppavcdza@gmail.com', '6239010018', '2020-12-09'),
(6, '', 'นาย', 'อดิศักร์', 'ลายประดิ้ส', '0817232010', 'dad@hotmail.com', '123004', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `t_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`t_id`, `company_id`, `std_id`, `contact_id`, `start_date`, `end_date`, `status`, `note`) VALUES
(1, 3, 2, 1, '2020-12-01', '2020-12-30', '0', ''),
(4, 2, 2, 1, '2020-12-01', '2020-12-30', '0', ''),
(5, 3, 7, 1, '2020-12-16', '2021-01-31', '0', ''),
(7, 9, 8, 2, '2020-12-01', '2020-12-31', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usergroup` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status_login` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `usergroup`, `username`, `password`, `status_login`) VALUES
(1, 6, 'teacher', 'teach', 'teach', '1'),
(2, 2147483647, 'student', '6239010025', '2021-03-02', '0'),
(3, 14, 'student', '5929010014', '2021-02-10', '0'),
(4, 1, 'admin', 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`dv_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_img`
--
ALTER TABLE `event_img`
  ADD PRIMARY KEY (`ei_id`);

--
-- Indexes for table `grouplist_list`
--
ALTER TABLE `grouplist_list`
  ADD PRIMARY KEY (`gll_id`);

--
-- Indexes for table `group_list`
--
ALTER TABLE `group_list`
  ADD PRIMARY KEY (`glist_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_grouplist`
--
ALTER TABLE `subject_grouplist`
  ADD PRIMARY KEY (`sgl_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `event_img`
--
ALTER TABLE `event_img`
  MODIFY `ei_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `grouplist_list`
--
ALTER TABLE `grouplist_list`
  MODIFY `gll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `group_list`
--
ALTER TABLE `group_list`
  MODIFY `glist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject_grouplist`
--
ALTER TABLE `subject_grouplist`
  MODIFY `sgl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
