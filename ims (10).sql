-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 06:54 AM
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
(3, 'TK Taro', '0964584545'),
(11, 'ปภัสรา ธนารัตสกุล', '0649488464');

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
(5, 'เทคโนโลยีสารสนเทศ'),
(6, 'ช่างกลโรงงาน'),
(7, 'เทคนิคคอมพิวเตอร์'),
(8, 'ช่างไฟฟ้ากำลัง'),
(9, 'ช่างเชื่อมโลหะ'),
(10, 'ระบบขนส่งทางราง'),
(11, 'ช่างยนต์'),
(12, 'สถาปัตยกรรม'),
(13, 'ช่างก่อสร้าง');

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
(421, 'wqqwe', 'qweq', '', '2021-03-02 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1),
(422, 'dasdas', 'sadas', '', '2021-03-03 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1),
(423, 'Dja', 'tum r rai', '', '2021-03-02 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1),
(424, '', 'sdqwwe', '', '2021-03-02 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1),
(425, '123123', '123123', '', '2021-03-02 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1),
(426, '', '', '', '2021-03-03 00:00:00', '0000-00-00 00:00:00', 15, 22, 0, 1),
(427, '', '', '', '2021-03-04 00:00:00', '0000-00-00 00:00:00', 15, 22, 1, 1);

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
(39, 422, 'IMG_0083.JPG'),
(40, 422, 'IMG_0084.JPG'),
(41, 422, 'IMG_0085.JPG');

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
  `glist_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_list`
--

INSERT INTO `group_list` (`glist_id`, `glist_name`) VALUES
(45, 'การแต่งกาย'),
(46, 'การแต่งกายรัดกุมเหมาะสม'),
(47, 'การตรงต่อเวลาและสม่ำเสมอในการฝึกงาน'),
(48, 'ปฏิบัติตามกฎระเบียบข้อบังคับที่กำหนดไว้อย่างเคร่งครัด'),
(50, 'เชื่อฟังและปฏิบัติตามคำแนะนำของหัวหน้างาน'),
(51, 'การแก้ปัญหาเฉพาะหน้าในการทำงาน'),
(52, 'ขยันหมั่นเพียรกระตือรือร้นในการปฏิบัติงาน'),
(53, 'ทำงานได้ดีโดยไม่ต้องควบคุมหรือตรวจตรา'),
(54, 'สามารถปฎิบัติงานได้ปริมาณในเวลาที่กำหนด'),
(55, 'สามารถปฎิบัติงานที่ได้รับมอบหมายได้อย่างดี'),
(56, 'ความละเอียดถูกต้องของงาน'),
(57, 'ผลงานเป็นที่ยอมรับของหน่วยงาน'),
(58, 'ปฎิบัติงานด้วยความรอบคอบและปลอดภัย'),
(59, 'เข้าใจขั้นตอนและขอบเขตการปฎิบัติงาน'),
(60, 'ระมัดระวังและรักษาทรัพย์สินของหน่วยงาน'),
(61, 'ตรวจตราดูแลรักษาเครื่องมือและวัสดุให้พร้อมอยู่เสมอ'),
(62, 'ความมีน้ำใจให้ความร่วมมือและประสานงานร่วมกับผู้อื่น'),
(63, 'ความสามารถในการปฎิบัติให้เข้ากับสภาพแวดล้อม'),
(64, 'ความสุภาพอ่อนน้อมรู้จักกาลเทศะ'),
(65, 'ความสามารถในการแสดงความคิดเห็นและรับฟังผู้อื่น'),
(66, 'ความสามารถในการนำเสนอผลงาน'),
(67, 'การแต่งกายรัดกุมเหมาะสม'),
(68, 'การตรงต่อเวลาและสม่ำเสมอในการฝึกงาน'),
(69, 'ปฏิบัติตามกฎระเบียบข้อบังคับที่กำหนดไว้อย่างเคร่งครัด'),
(70, 'เชื่อฟังและปฏิบัติตามคำแนะนำของหัวหน้างาน'),
(71, 'การแต่งกาย'),
(72, 'มารยาท');

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
(2, 'course', '123456789', 'นางสาว', 'asdasdas', 'ADSASDS', '1234123456', 'markkoko01@gmail.com', '1111111', '2021-03-13'),
(3, 'bilateral', '12555563365', 'นาย', 'ทวิ', 'ภาคี', '0649488464', 'davidlane@mail.com', '56632552', '2021-03-05'),
(4, 'course', '12345678', 'นาย', 'asdasd', 'asdas', '0649488464', 'davidlane@mail.com', '12312', '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `std_work_time`
--

CREATE TABLE `std_work_time` (
  `swt_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `arrive_time` varchar(20) NOT NULL,
  `depart_time` varchar(20) NOT NULL,
  `note` varchar(50) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_work_time`
--

INSERT INTO `std_work_time` (`swt_id`, `t_id`, `date`, `arrive_time`, `depart_time`, `note`, `confirm`) VALUES
(404, 22, '2021-03-01', '11:18', '', '', 1),
(405, 22, '2021-03-02', '11:18', '', '', 1),
(406, 22, '2021-03-03', '11:18', '', '', 1),
(407, 22, '2021-03-04', '10:19', '', '', 1),
(408, 22, '2021-03-05', '12:18', '', '', 1),
(409, 22, '2021-03-06', '11:18', '', '', 1),
(410, 22, '2021-03-07', '11:18', '', '', 1),
(411, 22, '2021-03-08', '11:18', '', '', 1),
(412, 22, '2021-03-09', '11:18', '', '', 1),
(413, 22, '2021-03-10', '11:18', '', '', 1),
(414, 22, '2021-03-11', '', '', '', 0),
(415, 22, '2021-03-12', '', '', '', 0),
(416, 22, '2021-03-13', '', '', '', 0),
(417, 22, '2021-03-14', '', '', '', 0),
(418, 22, '2021-03-15', '', '', '', 0),
(419, 22, '2021-03-16', '', '', '', 0),
(420, 22, '2021-03-17', '', '', '', 0),
(421, 22, '2021-03-18', '', '', '', 0),
(422, 22, '2021-03-19', '', '', '', 0),
(423, 22, '2021-03-20', '', '', '', 0),
(424, 22, '2021-03-21', '', '', '', 0),
(425, 22, '2021-03-22', '', '', '', 0),
(426, 22, '2021-03-23', '', '', '', 0),
(427, 22, '2021-03-24', '', '', '', 0),
(428, 22, '2021-03-25', '', '', '', 0),
(429, 22, '2021-03-26', '', '', '', 0),
(430, 22, '2021-03-27', '', '', '', 0),
(431, 22, '2021-03-28', '', '', '', 0),
(432, 22, '2021-03-29', '', '', '', 0),
(433, 22, '2021-03-30', '', '', '', 0),
(434, 22, '2021-03-31', '', '', '', 0);

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
(27, '', 'นาย', 'da', '', 'หญิง', '0964584545', '', '1', '6239045678', '2021-03-17 ', '4');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_train_detail`
-- (See below for the actual view)
--
CREATE TABLE `student_train_detail` (
`t_id` int(11)
,`company_id` int(11)
,`company_name` varchar(200)
,`std_id` int(11)
,`std_code` varchar(20)
,`gender` varchar(10)
,`title` varchar(20)
,`fname` varchar(50)
,`lname` varchar(50)
,`tel` varchar(10)
,`email` varchar(50)
,`dv_id` int(11)
,`dv_name` varchar(50)
,`class_id` int(11)
,`class_name` varchar(50)
,`class_group` varchar(10)
,`contact_id` int(11)
,`name` varchar(50)
,`term` varchar(20)
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
  `subject_name` varchar(255) NOT NULL,
  `subject_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_type`) VALUES
(12, 'แบบประเมินความพึงพอใจ', 'ผู้ควบคุมการฝึกงาน'),
(16, 'แบบประเมินผลการฝึกงานครั้งที่ 1', 'อาจารย์นิเทศ');

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
(46, 12, 46),
(47, 12, 47),
(48, 12, 48),
(50, 12, 50),
(51, 12, 51),
(52, 12, 52),
(53, 12, 53),
(54, 12, 54),
(55, 12, 55),
(56, 12, 56),
(57, 12, 57),
(58, 12, 58),
(59, 12, 59),
(60, 12, 60),
(61, 12, 61),
(62, 12, 62),
(63, 12, 63),
(64, 12, 64),
(65, 12, 65),
(66, 12, 66),
(71, 16, 71),
(72, 16, 72);

-- --------------------------------------------------------

--
-- Table structure for table `subject_score`
--

CREATE TABLE `subject_score` (
  `ss_id` int(11) NOT NULL,
  `spv_contact_id` int(11) NOT NULL,
  `glist_id` int(11) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_score`
--

INSERT INTO `subject_score` (`ss_id`, `spv_contact_id`, `glist_id`, `score`) VALUES
(177, 31, 46, 4),
(178, 31, 47, 4),
(179, 31, 48, 3),
(180, 31, 50, 3),
(181, 31, 51, 4),
(182, 31, 52, 4),
(183, 31, 53, 4),
(184, 31, 54, 3),
(185, 31, 55, 4),
(186, 31, 56, 3),
(187, 31, 57, 4),
(188, 31, 58, 3),
(189, 31, 59, 4),
(190, 31, 60, 3),
(191, 31, 61, 4),
(192, 31, 62, 3),
(193, 31, 63, 4),
(194, 31, 64, 3),
(195, 31, 65, 4),
(196, 31, 66, 4),
(197, 32, 71, 4),
(198, 32, 72, 4),
(199, 34, 46, 4),
(200, 34, 47, 1),
(201, 34, 48, 4),
(202, 34, 50, 4),
(203, 34, 51, 4),
(204, 34, 52, 4),
(205, 34, 53, 4),
(206, 34, 54, 4),
(207, 34, 55, 4),
(208, 34, 56, 4),
(209, 34, 57, 4),
(210, 34, 58, 4),
(211, 34, 59, 4),
(212, 34, 60, 4),
(213, 34, 61, 4),
(214, 34, 62, 4),
(215, 34, 63, 4),
(216, 34, 64, 3),
(217, 34, 65, 3),
(218, 34, 66, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject_score_th`
--

CREATE TABLE `subject_score_th` (
  `ssth_ih` int(11) NOT NULL,
  `spv_teacher_id` int(11) NOT NULL,
  `glist_id` int(11) NOT NULL,
  `score` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_score_th`
--

INSERT INTO `subject_score_th` (`ssth_ih`, `spv_teacher_id`, `glist_id`, `score`) VALUES
(1, 0, 71, '4'),
(2, 0, 72, '4'),
(3, 2, 71, '4'),
(4, 2, 72, '4');

-- --------------------------------------------------------

--
-- Table structure for table `supervision_contact`
--

CREATE TABLE `supervision_contact` (
  `spv_contact_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `approve_date` date NOT NULL,
  `suggestion` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervision_contact`
--

INSERT INTO `supervision_contact` (`spv_contact_id`, `t_id`, `subject_id`, `approve_date`, `suggestion`, `position`) VALUES
(28, 22, 14, '2021-03-16', '', ''),
(29, 22, 14, '2021-03-16', '', ''),
(30, 22, 14, '2021-03-16', '', ''),
(31, 22, 12, '2021-03-17', '', 'CEO'),
(32, 22, 16, '2021-03-17', '', ''),
(33, 22, 12, '2021-03-17', 'ad', 'เจ้าหน้าที่สำนักงาน'),
(34, 22, 12, '2021-03-17', 'ad', 'เจ้าหน้าที่สำนักงาน');

-- --------------------------------------------------------

--
-- Table structure for table `supervision_teacher`
--

CREATE TABLE `supervision_teacher` (
  `spv_teacher_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `approve_date` datetime NOT NULL,
  `suggestion` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervision_teacher`
--

INSERT INTO `supervision_teacher` (`spv_teacher_id`, `t_id`, `subject_id`, `approve_date`, `suggestion`, `position`) VALUES
(2, 22, 16, '2021-03-17 00:00:00', '', '');

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
  `term` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`t_id`, `company_id`, `std_id`, `teacher_id`, `contact_id`, `term`, `start_date`, `end_date`, `status`, `note`) VALUES
(22, 15, 15, 9, 3, '1/2562', '2021-03-01', '2021-03-31', '', '55');

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
(50, 1, 'admin', 'admin', 'admin', '1'),
(51, 15, 'student', '6239010019', '08/12/2543', '1'),
(52, 9, 'teacher', '1200101964578', '2021-02-24', '1'),
(53, 3, 'contact', 'tk01', '1234', '1'),
(54, 27, 'student', '6239045678', '2021-03-17 ', '1'),
(55, 11, 'contact', 'test', '1234', '1'),
(56, 11, 'teacher', '1200152354245', '2021-02-24', '1'),
(57, 3, 'bilateral', '12555563365', '1234', '1'),
(58, 4, 'course', '12345678', '2021-03-07', '0');

-- --------------------------------------------------------

--
-- Structure for view `student_train_detail`
--
DROP TABLE IF EXISTS `student_train_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_train_detail`  AS SELECT `tn`.`t_id` AS `t_id`, `cp`.`company_id` AS `company_id`, `cp`.`company_name` AS `company_name`, `std`.`std_id` AS `std_id`, `std`.`std_code` AS `std_code`, `std`.`gender` AS `gender`, `std`.`title` AS `title`, `std`.`fname` AS `fname`, `std`.`lname` AS `lname`, `std`.`tel` AS `tel`, `std`.`email` AS `email`, `dv`.`dv_id` AS `dv_id`, `dv`.`dv_name` AS `dv_name`, `c`.`class_id` AS `class_id`, `c`.`class_name` AS `class_name`, `c`.`class_group` AS `class_group`, `ct`.`contact_id` AS `contact_id`, `ct`.`name` AS `name`, `tn`.`term` AS `term`, `tn`.`start_date` AS `start_date`, `tn`.`end_date` AS `end_date`, `tn`.`status` AS `status`, `th`.`teacher_id` AS `spv_id`, `th`.`title` AS `spv_title`, `th`.`fname` AS `spv_fname`, `th`.`lname` AS `spv_lname`, `c_th`.`teacher_id` AS `cth_id`, `c_th`.`title` AS `cth_title`, `c_th`.`fname` AS `cth_fname`, `c_th`.`lname` AS `cth_lname`, `tn`.`note` AS `note` FROM (((((((`train` `tn` join `company` `cp` on(`cp`.`company_id` = `tn`.`company_id`)) join `teacher` `th` on(`th`.`teacher_id` = `tn`.`teacher_id`)) join `student` `std` on(`std`.`std_id` = `tn`.`std_id`)) join `class` `c` on(`c`.`class_id` = `std`.`class_id`)) join `division` `dv` on(`dv`.`dv_id` = `c`.`dv_id`)) join `teacher` `c_th` on(`c_th`.`teacher_id` = `c`.`teacher_id`)) join `contact` `ct` on(`ct`.`contact_id` = `tn`.`contact_id`)) ;

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
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `std_work_time`
--
ALTER TABLE `std_work_time`
  ADD PRIMARY KEY (`swt_id`);

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
-- Indexes for table `subject_score`
--
ALTER TABLE `subject_score`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `subject_score_th`
--
ALTER TABLE `subject_score_th`
  ADD PRIMARY KEY (`ssth_ih`);

--
-- Indexes for table `supervision_contact`
--
ALTER TABLE `supervision_contact`
  ADD PRIMARY KEY (`spv_contact_id`);

--
-- Indexes for table `supervision_teacher`
--
ALTER TABLE `supervision_teacher`
  ADD PRIMARY KEY (`spv_teacher_id`);

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
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `dv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `event_img`
--
ALTER TABLE `event_img`
  MODIFY `ei_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `grouplist_list`
--
ALTER TABLE `grouplist_list`
  MODIFY `gll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_list`
--
ALTER TABLE `group_list`
  MODIFY `glist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_work_time`
--
ALTER TABLE `std_work_time`
  MODIFY `swt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject_grouplist`
--
ALTER TABLE `subject_grouplist`
  MODIFY `sgl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `subject_score`
--
ALTER TABLE `subject_score`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `subject_score_th`
--
ALTER TABLE `subject_score_th`
  MODIFY `ssth_ih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervision_contact`
--
ALTER TABLE `supervision_contact`
  MODIFY `spv_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `supervision_teacher`
--
ALTER TABLE `supervision_teacher`
  MODIFY `spv_teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
