-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 08:00 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
(4, 10, 5, 'ปวส', '2/1'),
(5, 10, 6, 'กง', '3/1');

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
  `latlong` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `province`, `zipcode`, `tel`, `latlong`) VALUES
(15, 'TBKK', '', 'พานทอง', '20145', '0964584545', '13.453897113409566, 101.1026093486377'),
(16, 'GG', '123', 'พานทอง', '123', '0649488464', '13.293138436413784, 101.16568806575013');

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
(3, 'TK Taro', '0964584545');

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
(5, 'แผนกเทคโนโลยีสารสนเทศ'),
(6, 'แผนกช่างกลโรงงาน'),
(7, 'แผนกเทคนิคคอมพิวเตอร์'),
(8, 'แผนกช่างไฟฟ้ากำลัง'),
(9, 'แผนกช่างเชื่อมโลหะ'),
(10, 'แผนกระบบขนส่งทางราง'),
(11, 'แผนกช่างยนต์'),
(12, 'แผนกสถาปัตยกรรม'),
(13, 'แผนกช่างก่อสร้าง');

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
  `teacher_confirm` int(11) NOT NULL,
  `contact_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `start_event`, `end_event`, `std_id`, `teacher_confirm`, `contact_confirm`) VALUES
(402, '', '', '', '2021-03-11 00:00:00', '0000-00-00 00:00:00', 15, 1, 0),
(403, '', '', '', '2021-03-10 00:00:00', '0000-00-00 00:00:00', 15, 1, 0);

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
(36, 383, 'IMG_0083.JPG'),
(37, 383, 'IMG_0084.JPG'),
(38, 384, 'QJMK7032.jpg');

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
(3, 14, 3),
(4, 45, 4);

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
(44, ''),
(45, 'การแต่งกาย');

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
(3, 'asdfghjh'),
(4, 'หมวก');

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
  `birth_date` text NOT NULL,
  `class_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `citizen_id`, `title`, `fname`, `lname`, `gender`, `tel`, `email`, `status`, `std_code`, `birth_date`, `class_id`) VALUES
(15, '', 'นาย', 'ศุภโชค', 'วาจาคำ', 'ชาย', '0649488464', 'adsisak@gmail.com', '1', '6239010019', '08/12/2543', '4'),
(27, '', 'นาย', 'a', '', 'หญิง', '', '', '1', '6239045678', '2021-03-17', '5');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_train_detail`
-- (See below for the actual view)
--
CREATE TABLE `student_train_detail` (
`t_id` int(11)
,`company_id` int(11)
,`company_name` varchar(200)
,`fname` varchar(50)
,`lname` varchar(50)
,`dv_id` int(11)
,`dv_name` varchar(50)
,`class_id` int(11)
,`class_name` varchar(50)
,`class_group` varchar(10)
,`contact_id` int(11)
,`name` varchar(50)
,`start_date` date
,`end_date` date
,`status` varchar(10)
,`spv_id` int(11)
,`spv_title` varchar(20)
,`spv_fname` varchar(50)
,`spv_lname` varchar(50)
,`cth_id` int(11)
,`cth_title` varchar(20)
,`cth_fname` varchar(50)
,`cth_lname` varchar(50)
,`note` varchar(50)
);

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
(12, 'แบบประเมิน');

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
(44, 0, 44),
(45, 12, 45);

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
(9, '1200101964578', 'นางสาว', 'พรรณี', 'ศรีสงคราม', '', 'davidlane@mail.com', '6239010015', '2021-02-24'),
(10, '1200101896545', 'นางสาว', 'รุ่งนภา', 'เผ่าปินตา', '', 'davidlane@mail.com', '0613257896', '2021-02-26'),
(11, '1200152354245', 'นาง', 'ปภาวรินท์', 'วิคี', '0649488464', 'davidlane@mail.com', '0963203565', '2021-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `t_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL COMMENT 'อาจารย์นิเทศ',
  `contact_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`t_id`, `company_id`, `std_id`, `teacher_id`, `contact_id`, `start_date`, `end_date`, `status`, `note`) VALUES
(11, 16, 15, 9, 3, '2021-04-01', '2021-04-30', '', ''),
(13, 16, 15, 9, 3, '2021-03-06', '2021-03-31', '', ''),
(14, 15, 27, 9, 3, '2021-03-06', '2021-03-31', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `training_student`
-- (See below for the actual view)
--
CREATE TABLE `training_student` (
`t_id` int(11)
,`title` varchar(20)
,`fname` varchar(50)
,`lname` varchar(50)
,`company_name` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `usergroup` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status_login` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `usergroup`, `username`, `password`, `status_login`) VALUES
(32, 1, 'admin', 'admin', '1234', '1'),
(33, 15, 'student', '6239010019', '08/12/2543', '1'),
(34, 10, 'teacher', '1200101896545', '2021-02-26', '1'),
(46, 1, 'admin', '', '', '1'),
(47, 11, 'teacher', '1200152354245', '2021-02-24', '1'),
(48, 9, 'teacher', '1200101964578', '2021-02-24', '1'),
(49, 27, 'student', '6239045678', '2021-03-17', '0');

-- --------------------------------------------------------

--
-- Structure for view `student_train_detail`
--
DROP TABLE IF EXISTS `student_train_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_train_detail`  AS SELECT `tn`.`t_id` AS `t_id`, `cp`.`company_id` AS `company_id`, `cp`.`company_name` AS `company_name`, `std`.`fname` AS `fname`, `std`.`lname` AS `lname`, `dv`.`dv_id` AS `dv_id`, `dv`.`dv_name` AS `dv_name`, `c`.`class_id` AS `class_id`, `c`.`class_name` AS `class_name`, `c`.`class_group` AS `class_group`, `ct`.`contact_id` AS `contact_id`, `ct`.`name` AS `name`, `tn`.`start_date` AS `start_date`, `tn`.`end_date` AS `end_date`, `tn`.`status` AS `status`, `th`.`teacher_id` AS `spv_id`, `th`.`title` AS `spv_title`, `th`.`fname` AS `spv_fname`, `th`.`lname` AS `spv_lname`, `c_th`.`teacher_id` AS `cth_id`, `c_th`.`title` AS `cth_title`, `c_th`.`fname` AS `cth_fname`, `c_th`.`lname` AS `cth_lname`, `tn`.`note` AS `note` FROM (((((((`train` `tn` join `company` `cp` on(`cp`.`company_id` = `tn`.`company_id`)) join `teacher` `th` on(`th`.`teacher_id` = `tn`.`teacher_id`)) join `student` `std` on(`std`.`std_id` = `tn`.`std_id`)) join `class` `c` on(`c`.`class_id` = `std`.`class_id`)) join `division` `dv` on(`dv`.`dv_id` = `c`.`dv_id`)) join `teacher` `c_th` on(`c_th`.`teacher_id` = `c`.`teacher_id`)) join `contact` `ct` on(`ct`.`contact_id` = `tn`.`contact_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `training_student`
--
DROP TABLE IF EXISTS `training_student`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `training_student`  AS SELECT `t`.`t_id` AS `t_id`, `s`.`title` AS `title`, `s`.`fname` AS `fname`, `s`.`lname` AS `lname`, `c`.`company_name` AS `company_name` FROM ((`train` `t` join `student` `s` on(`t`.`std_id` = `s`.`std_id`)) join `company` `c` on(`t`.`company_id` = `c`.`company_id`)) WHERE curdate() between `t`.`start_date` and `t`.`end_date` ;

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
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `event_img`
--
ALTER TABLE `event_img`
  MODIFY `ei_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `grouplist_list`
--
ALTER TABLE `grouplist_list`
  MODIFY `gll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_list`
--
ALTER TABLE `group_list`
  MODIFY `glist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subject_grouplist`
--
ALTER TABLE `subject_grouplist`
  MODIFY `sgl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
