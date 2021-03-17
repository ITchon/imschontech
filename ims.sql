-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 02:17 PM
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
(418, 'เฟเ', 'กหฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟ', '', '2021-03-03 00:00:00', '0000-00-00 00:00:00', 27, 19, 0, 0),
(419, '', '', '', '2021-04-01 00:00:00', '0000-00-00 00:00:00', 27, 18, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_img`
--

CREATE TABLE `event_img` (
  `ei_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `img_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(70, 'เชื่อฟังและปฏิบัติตามคำแนะนำของหัวหน้างาน');

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
(45, 18, '2021-04-01', '', '23:24', 'ลาป่วย', 1),
(46, 18, '2021-04-02', '23:28', '00:29', '', 1),
(47, 18, '2021-04-03', '23:54', '21:55', '', 1),
(48, 18, '2021-04-04', '21:57', '23:54', '', 1),
(49, 18, '2021-04-05', '', '', 'ขาด', 1),
(50, 18, '2021-04-06', '', '', 'ลาป่วย', 1),
(51, 18, '2021-04-07', '23:16', '01:15', '', 1),
(52, 18, '2021-04-08', '23:26', '', '', 1),
(53, 18, '2021-04-09', '00:26', '', '', 1),
(54, 18, '2021-04-10', '23:26', '', '', 1),
(55, 18, '2021-04-11', '23:26', '', '', 1),
(56, 18, '2021-04-12', '23:26', '', '', 1),
(57, 18, '2021-04-13', '23:26', '', '', 1),
(58, 18, '2021-04-14', '', '', 'ลากิจ', 1),
(59, 18, '2021-04-15', '', '', '', 0),
(60, 18, '2021-04-16', '', '', 'ขาด', 0),
(61, 18, '2021-04-17', '', '', '', 0),
(62, 18, '2021-04-18', '', '', '', 0),
(63, 18, '2021-04-19', '', '', '', 0),
(64, 18, '2021-04-20', '', '', '', 0),
(65, 18, '2021-04-21', '', '', '', 0),
(66, 18, '2021-04-22', '', '', '', 0),
(67, 18, '2021-04-23', '', '', '', 0),
(68, 18, '2021-04-24', '', '', '', 0),
(69, 18, '2021-04-25', '', '', '', 0),
(70, 18, '2021-04-26', '', '', '', 0),
(71, 18, '2021-04-27', '', '', '', 0),
(72, 18, '2021-04-28', '', '', '', 0),
(73, 18, '2021-04-29', '', '', '', 0),
(74, 18, '2021-04-30', '', '', '', 0),
(75, 18, '2021-05-01', '', '', '', 0),
(76, 18, '2021-05-02', '', '', '', 0),
(77, 18, '2021-05-03', '', '', '', 0),
(78, 18, '2021-05-04', '', '', '', 0),
(79, 18, '2021-05-05', '', '', '', 0),
(80, 18, '2021-05-06', '', '', '', 0),
(81, 18, '2021-05-07', '', '', '', 0),
(82, 18, '2021-05-08', '', '', '', 0),
(83, 18, '2021-05-09', '', '', '', 0),
(84, 18, '2021-05-10', '', '', '', 0),
(85, 18, '2021-05-11', '', '', '', 0),
(86, 18, '2021-05-12', '', '', '', 0),
(87, 18, '2021-05-13', '', '', '', 0),
(88, 18, '2021-05-14', '', '', '', 0),
(89, 18, '2021-05-15', '', '', '', 0),
(90, 18, '2021-05-16', '', '', '', 0),
(91, 18, '2021-05-17', '', '', '', 0),
(92, 18, '2021-05-18', '', '', '', 0),
(93, 18, '2021-05-19', '', '', '', 0),
(94, 18, '2021-05-20', '', '', '', 0),
(95, 18, '2021-05-21', '', '', '', 0),
(96, 18, '2021-05-22', '', '', '', 0),
(97, 18, '2021-05-23', '', '', '', 0),
(98, 18, '2021-05-24', '', '', '', 0),
(99, 18, '2021-05-25', '', '', '', 0),
(100, 18, '2021-05-26', '', '', '', 0),
(101, 18, '2021-05-27', '', '', '', 0),
(102, 18, '2021-05-28', '', '', '', 0),
(103, 18, '2021-05-29', '', '', '', 0),
(104, 18, '2021-05-30', '', '', '', 0),
(105, 18, '2021-05-31', '', '', '', 0),
(106, 18, '2021-06-01', '', '', '', 0),
(107, 18, '2021-06-02', '', '', '', 0),
(108, 18, '2021-06-03', '', '', '', 0),
(109, 18, '2021-06-04', '', '', '', 0),
(110, 18, '2021-06-05', '', '', '', 0),
(111, 18, '2021-06-06', '', '', '', 0),
(112, 18, '2021-06-07', '', '', '', 0),
(113, 18, '2021-06-08', '', '', '', 0),
(114, 18, '2021-06-09', '', '', '', 0),
(115, 18, '2021-06-10', '', '', '', 0),
(116, 18, '2021-06-11', '', '', '', 0),
(117, 18, '2021-06-12', '', '', '', 0),
(118, 18, '2021-06-13', '', '', '', 0),
(119, 18, '2021-06-14', '', '', '', 0),
(120, 18, '2021-06-15', '', '', '', 0),
(121, 18, '2021-06-16', '', '', '', 0),
(122, 18, '2021-06-17', '', '', '', 0),
(123, 18, '2021-06-18', '', '', '', 0),
(124, 18, '2021-06-19', '', '', '', 0),
(125, 18, '2021-06-20', '', '', '', 0),
(126, 18, '2021-06-21', '', '', '', 0),
(127, 18, '2021-06-22', '', '', '', 0),
(128, 18, '2021-06-23', '', '', '', 0),
(129, 18, '2021-06-24', '', '', '', 0),
(130, 18, '2021-06-25', '', '', '', 0),
(131, 18, '2021-06-26', '', '', '', 0),
(132, 18, '2021-06-27', '', '', '', 0),
(133, 18, '2021-06-28', '', '', '', 0),
(134, 18, '2021-06-29', '', '', '', 0),
(135, 18, '2021-06-30', '', '', '', 0),
(136, 18, '2021-07-01', '', '', '', 0),
(137, 18, '2021-07-02', '', '', '', 0),
(138, 18, '2021-07-03', '', '', '', 0),
(139, 18, '2021-07-04', '', '', '', 0),
(140, 18, '2021-07-05', '', '', '', 0),
(141, 18, '2021-07-06', '', '', '', 0),
(142, 18, '2021-07-07', '', '', '', 0),
(143, 18, '2021-07-08', '', '', '', 0),
(144, 18, '2021-07-09', '', '', '', 0),
(145, 18, '2021-07-10', '', '', '', 0),
(146, 18, '2021-07-11', '', '', '', 0),
(147, 18, '2021-07-12', '', '', '', 0),
(148, 18, '2021-07-13', '', '', '', 0),
(149, 18, '2021-07-14', '', '', '', 0),
(150, 18, '2021-07-15', '', '', '', 0),
(151, 18, '2021-07-16', '', '', '', 0),
(152, 18, '2021-07-17', '', '', '', 0),
(153, 18, '2021-07-18', '', '', '', 0),
(154, 18, '2021-07-19', '', '', '', 0),
(155, 18, '2021-07-20', '', '', '', 0),
(156, 18, '2021-07-21', '', '', '', 0),
(157, 18, '2021-07-22', '', '', '', 0),
(158, 18, '2021-07-23', '', '', '', 0),
(159, 18, '2021-07-24', '', '', '', 0),
(160, 18, '2021-07-25', '', '', '', 0),
(161, 18, '2021-07-26', '', '', '', 0),
(162, 18, '2021-07-27', '', '', '', 0),
(163, 18, '2021-07-28', '', '', '', 0),
(164, 18, '2021-07-29', '', '', '', 0),
(165, 18, '2021-07-30', '', '', '', 0),
(166, 18, '2021-07-31', '', '', '', 0),
(167, 18, '2021-08-01', '', '', '', 0),
(168, 18, '2021-08-02', '', '', '', 0),
(169, 18, '2021-08-03', '', '', '', 0),
(170, 18, '2021-08-04', '', '', '', 0),
(171, 18, '2021-08-05', '', '', '', 0),
(172, 18, '2021-08-06', '', '', '', 0),
(173, 18, '2021-08-07', '', '', '', 0),
(174, 18, '2021-08-08', '', '', '', 0),
(175, 18, '2021-08-09', '', '', '', 0),
(176, 18, '2021-08-10', '', '', '', 0),
(177, 18, '2021-08-11', '', '', '', 0),
(178, 18, '2021-08-12', '', '', '', 0),
(179, 18, '2021-08-13', '', '', '', 0),
(180, 18, '2021-08-14', '', '', '', 0),
(181, 18, '2021-08-15', '', '', '', 0),
(182, 18, '2021-08-16', '', '', '', 0),
(183, 18, '2021-08-17', '', '', '', 0),
(184, 18, '2021-08-18', '', '', '', 0),
(185, 18, '2021-08-19', '', '', '', 0),
(186, 18, '2021-08-20', '', '', '', 0),
(187, 18, '2021-08-21', '', '', '', 0),
(188, 18, '2021-08-22', '', '', '', 0),
(189, 18, '2021-08-23', '', '', '', 0),
(190, 18, '2021-08-24', '', '', '', 0),
(191, 18, '2021-08-25', '', '', '', 0),
(192, 18, '2021-08-26', '', '', '', 0),
(193, 18, '2021-08-27', '', '', '', 0),
(194, 18, '2021-08-28', '', '', '', 0),
(195, 18, '2021-08-29', '', '', '', 0),
(196, 18, '2021-08-30', '', '', '', 0),
(197, 18, '2021-08-31', '', '', '', 0),
(198, 19, '2021-03-01', '02:19', '22:19', '', 1),
(199, 19, '2021-03-02', '21:21', '22:19', '', 1),
(200, 19, '2021-03-03', '', '', 'ลาป่วย', 0),
(201, 19, '2021-03-04', '', '', 'ขาด', 0),
(202, 19, '2021-03-05', '', '', '', 0),
(203, 19, '2021-03-06', '', '', '', 0),
(204, 19, '2021-03-07', '', '', '', 0),
(205, 19, '2021-03-08', '', '', '', 0),
(206, 19, '2021-03-09', '', '', '', 0),
(207, 19, '2021-03-10', '', '', '', 0),
(208, 19, '2021-03-11', '', '', '', 0),
(209, 19, '2021-03-12', '', '', '', 0),
(210, 19, '2021-03-13', '', '', '', 0),
(211, 19, '2021-03-14', '', '', '', 0),
(212, 19, '2021-03-15', '', '', '', 0),
(213, 19, '2021-03-16', '', '', '', 0),
(214, 19, '2021-03-17', '', '', '', 0),
(215, 19, '2021-03-18', '', '', '', 0),
(216, 19, '2021-03-19', '', '', '', 0),
(217, 19, '2021-03-20', '', '', '', 0),
(218, 19, '2021-03-21', '', '', '', 0),
(219, 19, '2021-03-22', '', '', '', 0),
(220, 19, '2021-03-23', '', '', '', 0),
(221, 19, '2021-03-24', '', '', '', 0),
(222, 19, '2021-03-25', '', '', '', 0),
(223, 19, '2021-03-26', '', '', '', 0),
(224, 19, '2021-03-27', '', '', '', 0),
(225, 19, '2021-03-28', '', '', '', 0),
(226, 19, '2021-03-29', '', '', '', 0),
(227, 19, '2021-03-30', '', '', '', 0),
(228, 19, '2021-03-31', '', '', '', 0),
(229, 19, '2021-04-01', '', '', '', 0),
(230, 19, '2021-04-02', '', '', '', 0),
(231, 19, '2021-04-03', '', '', '', 0),
(232, 19, '2021-04-04', '', '', '', 0),
(233, 19, '2021-04-05', '', '', '', 0),
(234, 19, '2021-04-06', '', '', '', 0),
(235, 19, '2021-04-07', '', '', '', 0),
(236, 19, '2021-04-08', '', '', '', 0),
(237, 19, '2021-04-09', '', '', '', 0),
(238, 19, '2021-04-10', '', '', '', 0),
(239, 19, '2021-04-11', '', '', '', 0),
(240, 19, '2021-04-12', '', '', '', 0),
(241, 19, '2021-04-13', '', '', '', 0),
(242, 19, '2021-04-14', '', '', '', 0),
(243, 19, '2021-04-15', '', '', '', 0),
(244, 19, '2021-04-16', '', '', '', 0),
(245, 19, '2021-04-17', '', '', '', 0),
(246, 19, '2021-04-18', '', '', '', 0),
(247, 19, '2021-04-19', '', '', '', 0),
(248, 19, '2021-04-20', '', '', '', 0),
(249, 19, '2021-04-21', '', '', '', 0),
(250, 19, '2021-04-22', '', '', '', 0),
(251, 19, '2021-04-23', '', '', '', 0),
(252, 19, '2021-04-24', '', '', '', 0),
(253, 19, '2021-04-25', '', '', '', 0),
(254, 19, '2021-04-26', '', '', '', 0),
(255, 19, '2021-04-27', '', '', '', 0),
(256, 19, '2021-04-28', '', '', '', 0),
(257, 19, '2021-04-29', '', '', '', 0),
(258, 19, '2021-04-30', '', '', '', 0),
(259, 19, '2021-05-01', '', '', '', 0),
(260, 19, '2021-05-02', '', '', '', 0),
(261, 19, '2021-05-03', '', '', '', 0),
(262, 19, '2021-05-04', '', '', '', 0),
(263, 19, '2021-05-05', '', '', '', 0),
(264, 19, '2021-05-06', '', '', '', 0),
(265, 19, '2021-05-07', '', '', '', 0),
(266, 19, '2021-05-08', '', '', '', 0),
(267, 19, '2021-05-09', '', '', '', 0),
(268, 19, '2021-05-10', '', '', '', 0),
(269, 19, '2021-05-11', '', '', '', 0),
(270, 19, '2021-05-12', '', '', '', 0),
(271, 19, '2021-05-13', '', '', '', 0),
(272, 19, '2021-05-14', '', '', '', 0),
(273, 19, '2021-05-15', '', '', '', 0),
(274, 19, '2021-05-16', '', '', '', 0),
(275, 19, '2021-05-17', '', '', '', 0),
(276, 19, '2021-05-18', '', '', '', 0),
(277, 19, '2021-05-19', '', '', '', 0),
(278, 19, '2021-05-20', '', '', '', 0),
(279, 19, '2021-05-21', '', '', '', 0),
(280, 19, '2021-05-22', '', '', '', 0),
(281, 19, '2021-05-23', '', '', '', 0),
(282, 19, '2021-05-24', '', '', '', 0),
(283, 19, '2021-05-25', '', '', '', 0),
(284, 19, '2021-05-26', '', '', '', 0),
(285, 19, '2021-05-27', '', '', '', 0),
(286, 19, '2021-05-28', '', '', '', 0),
(287, 19, '2021-05-29', '', '', '', 0),
(288, 19, '2021-05-30', '', '', '', 0),
(289, 19, '2021-05-31', '', '', '', 0),
(290, 19, '2021-06-01', '', '', '', 0),
(291, 19, '2021-06-02', '', '', '', 0),
(292, 19, '2021-06-03', '', '', '', 0),
(293, 19, '2021-06-04', '', '', '', 0),
(294, 19, '2021-06-05', '', '', '', 0),
(295, 19, '2021-06-06', '', '', '', 0),
(296, 19, '2021-06-07', '', '', '', 0),
(297, 19, '2021-06-08', '', '', '', 0),
(298, 19, '2021-06-09', '', '', '', 0),
(299, 19, '2021-06-10', '', '', '', 0),
(300, 19, '2021-06-11', '', '', '', 0),
(301, 19, '2021-06-12', '', '', '', 0),
(302, 19, '2021-06-13', '', '', '', 0),
(303, 19, '2021-06-14', '', '', '', 0),
(304, 19, '2021-06-15', '', '', '', 0),
(305, 19, '2021-06-16', '', '', '', 0),
(306, 19, '2021-06-17', '', '', '', 0),
(307, 19, '2021-06-18', '', '', '', 0),
(308, 19, '2021-06-19', '', '', '', 0),
(309, 19, '2021-06-20', '', '', '', 0),
(310, 19, '2021-06-21', '', '', '', 0),
(311, 19, '2021-06-22', '', '', '', 0),
(312, 19, '2021-06-23', '', '', '', 0),
(313, 19, '2021-06-24', '', '', '', 0),
(314, 19, '2021-06-25', '', '', '', 0),
(315, 19, '2021-06-26', '', '', '', 0),
(316, 19, '2021-06-27', '', '', '', 0),
(317, 19, '2021-06-28', '', '', '', 0),
(318, 19, '2021-06-29', '', '', '', 0),
(319, 19, '2021-06-30', '', '', '', 0);

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
(12, 'แบบประเมินความพึงพอใจ'),
(14, 'แบบประเมินผลการฝึกงาน');

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
(67, 14, 67),
(68, 14, 68),
(69, 14, 69),
(70, 14, 70);

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
(81, 23, 46, 4),
(82, 23, 47, 2),
(83, 23, 48, 4),
(84, 23, 50, 4),
(85, 23, 51, 3),
(86, 23, 52, 2),
(87, 23, 53, 4),
(88, 23, 54, 4),
(89, 23, 55, 3),
(90, 23, 56, 3),
(91, 23, 57, 4),
(92, 23, 58, 4),
(93, 23, 59, 4),
(94, 23, 60, 4),
(95, 23, 61, 4),
(96, 23, 62, 4),
(97, 23, 63, 3),
(98, 23, 64, 4),
(99, 23, 65, 3),
(100, 23, 66, 3),
(101, 24, 46, 4),
(102, 24, 47, 4),
(103, 24, 48, 4),
(104, 24, 50, 4),
(105, 24, 51, 4),
(106, 24, 52, 4),
(107, 24, 53, 4),
(108, 24, 54, 4),
(109, 24, 55, 3),
(110, 24, 56, 3),
(111, 24, 57, 3),
(112, 24, 58, 3),
(113, 24, 59, 3),
(114, 24, 60, 4),
(115, 24, 61, 4),
(116, 24, 62, 3),
(117, 24, 63, 3),
(118, 24, 64, 2),
(119, 24, 65, 3),
(120, 24, 66, 4),
(121, 25, 67, 4),
(122, 25, 68, 4),
(123, 25, 69, 3),
(124, 25, 70, 2),
(125, 26, 46, 4),
(126, 26, 47, 4),
(127, 26, 48, 2),
(128, 26, 50, 3),
(129, 26, 51, 3),
(130, 26, 52, 4),
(131, 26, 53, 3),
(132, 26, 54, 4),
(133, 26, 55, 3),
(134, 26, 56, 4),
(135, 26, 57, 3),
(136, 26, 58, 2),
(137, 26, 59, 3),
(138, 26, 60, 3),
(139, 26, 61, 2),
(140, 26, 62, 2),
(141, 26, 63, 3),
(142, 26, 64, 4),
(143, 26, 65, 4),
(144, 26, 66, 4);

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
(23, 18, 12, '2021-03-12', 'โดยรวมแล้วดี', 'CEO'),
(24, 18, 12, '2021-03-12', 'GGG', 'CEO'),
(25, 19, 14, '2021-03-12', '', 'SA MANGER'),
(26, 19, 12, '2021-03-12', '', 'Account');

-- --------------------------------------------------------

--
-- Table structure for table `supervision_teacher`
--

CREATE TABLE `supervision_teacher` (
  `spv_teacher_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
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
(18, 15, 15, 9, 3, '2021-04-01', '2021-08-01', '', ''),
(19, 16, 27, 11, 11, '2021-03-01', '2021-06-30', '', '');

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
(56, 11, 'teacher', '1200152354245', '2021-02-24', '1');

-- --------------------------------------------------------

--
-- Structure for view `student_train_detail`
--
DROP TABLE IF EXISTS `student_train_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_train_detail`  AS SELECT `tn`.`t_id` AS `t_id`, `cp`.`company_id` AS `company_id`, `cp`.`company_name` AS `company_name`, `std`.`std_id` AS `std_id`, `std`.`std_code` AS `std_code`, `std`.`gender` AS `gender`, `std`.`title` AS `title`, `std`.`fname` AS `fname`, `std`.`lname` AS `lname`, `std`.`tel` AS `tel`, `std`.`email` AS `email`, `dv`.`dv_id` AS `dv_id`, `dv`.`dv_name` AS `dv_name`, `c`.`class_id` AS `class_id`, `c`.`class_name` AS `class_name`, `c`.`class_group` AS `class_group`, `ct`.`contact_id` AS `contact_id`, `ct`.`name` AS `name`, `tn`.`start_date` AS `start_date`, `tn`.`end_date` AS `end_date`, `tn`.`status` AS `status`, `th`.`teacher_id` AS `spv_id`, `th`.`title` AS `spv_title`, `th`.`fname` AS `spv_fname`, `th`.`lname` AS `spv_lname`, `c_th`.`teacher_id` AS `cth_id`, `c_th`.`title` AS `cth_title`, `c_th`.`fname` AS `cth_fname`, `c_th`.`lname` AS `cth_lname`, `tn`.`note` AS `note` FROM (((((((`train` `tn` join `company` `cp` on(`cp`.`company_id` = `tn`.`company_id`)) join `teacher` `th` on(`th`.`teacher_id` = `tn`.`teacher_id`)) join `student` `std` on(`std`.`std_id` = `tn`.`std_id`)) join `class` `c` on(`c`.`class_id` = `std`.`class_id`)) join `division` `dv` on(`dv`.`dv_id` = `c`.`dv_id`)) join `teacher` `c_th` on(`c_th`.`teacher_id` = `c`.`teacher_id`)) join `contact` `ct` on(`ct`.`contact_id` = `tn`.`contact_id`)) ;

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
-- Indexes for table `supervision_contact`
--
ALTER TABLE `supervision_contact`
  ADD PRIMARY KEY (`spv_contact_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

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
  MODIFY `glist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_work_time`
--
ALTER TABLE `std_work_time`
  MODIFY `swt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject_grouplist`
--
ALTER TABLE `subject_grouplist`
  MODIFY `sgl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `subject_score`
--
ALTER TABLE `subject_score`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `supervision_contact`
--
ALTER TABLE `supervision_contact`
  MODIFY `spv_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
