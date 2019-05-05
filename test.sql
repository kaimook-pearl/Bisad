-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 01:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` char(5) CHARACTER SET utf8 NOT NULL,
  `actnum` int(10) DEFAULT NULL,
  `bank` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `actnum`, `bank`) VALUES
('AD001', 2147483647, 'กสิกรไทย');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` char(4) CHARACTER SET utf8 NOT NULL,
  `room` char(5) CHARACTER SET utf8 DEFAULT NULL,
  `cost` int(4) DEFAULT NULL,
  `state` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `room`, `cost`, `state`, `day`) VALUES
('b001', 'A1101', 5500, 'ชำระแล้ว', '2019-03-25'),
('b002', 'A1101', 5500, 'ชำระแล้ว', '2019-04-25'),
('b003', 'A1101', 5500, 'ชำระแล้ว', '2019-05-25'),
('b004', 'A1102', 5500, 'ชำระแล้ว-รอตรวจสอบ', '2019-05-25'),
('b005', 'A1201', 6000, 'แจ้งชำระ', '2019-05-25'),
('b006', 'A1202', 6000, 'แจ้งชำระ', '2019-05-25'),
('b007', 'A2101', 5500, 'แจ้งชำระ', '2019-05-25'),
('b008', 'A2102', 6000, 'ชำระแล้ว-รอตรวจสอบ', '2019-05-25'),
('b009', 'A2103', 6000, 'แจ้งชำระ', '2019-05-25'),
('b010', 'A2201', 5500, 'แจ้งชำระ', '2019-05-25'),
('b011', 'A2202', 5500, 'ชำระแล้ว-รอตรวจสอบ', '2019-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `bill_id` char(4) CHARACTER SET utf8 NOT NULL,
  `room` char(5) CHARACTER SET utf8 DEFAULT NULL,
  `frombank` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `tobank` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `day` date DEFAULT NULL,
  `when` float(2,2) DEFAULT NULL,
  `cost` int(4) DEFAULT NULL,
  `pictureurl` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`bill_id`, `room`, `frombank`, `tobank`, `day`, `when`, `cost`, `pictureurl`) VALUES
('b001', 'A1101', 'กสิกรไทย', 'กสิกรไทย', '2019-03-27', 15.12, 5500, NULL),
('b002', 'A1101', 'กสิกรไทย', 'กสิกรไทย', '2019-04-29', 14.07, 5500, NULL),
('b003', 'A1101', 'กสิกรไทย', 'กสิกรไทย', '2019-05-30', 13.55, 5500, NULL),
('b004', 'A1102', 'ไทยพาณิชย์', 'กสิกรไทย', '2019-06-01', 12.00, 5500, NULL),
('b008', 'A2102', 'ทหารไทย', 'กสิกรไทย', '2019-05-26', 16.00, 6000, NULL),
('b011', 'A2202', 'กสิกรไทย', 'กสิกรไทย', '2019-05-26', 20.00, 5500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repair_id` char(6) CHARACTER SET utf8 NOT NULL,
  `comments` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `state` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repair_id`, , `comments`, `state`) VALUES
('RE0001', NULL, 'รอดำเนินการ'),
('RE0002', NULL, 'สำเร็จ'),
('RE0003', NULL, 'รอดำเนินการ'),
('RE0004', NULL, 'รอดำเนินการ'),
('RE0005', NULL, 'สำเร็จ'),
('RE0006', NULL, 'สำเร็จ'),
('RE0007', NULL, 'สำเร็จ'),
('RE0008', NULL, 'สำเร็จ'),
('RE0009', NULL, 'รอดำเนินการ'),
('RE0010', NULL, 'รอดำเนินการ'),
('RE0011', NULL, 'รอดำเนินการ');

-- --------------------------------------------------------

--
-- Table structure for table `repairdetails`
--

CREATE TABLE `repairdetails` (
  `repair_id` char(6) CHARACTER SET utf8 NOT NULL,
  `subtype` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `allowstatus` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `room` char(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairdetails`
--

INSERT INTO `repairdetails` (`repair_id`, `subtype`, `description`, `phone`, `allowstatus`, `room`) VALUES
('RE0001', 'สายชำระ', 'ฟ็อกกี้เสีย', '081-641-3340', 'อนุญาต', 'A1102'),
('RE0002', 'ประตูห้องน้ำ', 'ประตูห้องน้ำปิดไม่ได้', '087-991-7940', 'อนุญาต', 'A1201'),
('RE0003', 'สวิทช์เปิด-ปิดไฟห้องน้ำ', 'ไฟห้องน้ำเปิดไม่ติด', '089-991-7941', 'ไม่อนุญาต', 'A1202'),
('RE0004', 'อื่นๆ', 'น้ำแอร์หยด', '083-991-7942', 'ไม่อนุญาต', 'A2101'),
('RE0005', 'อื่นๆ', 'ประตูบานเลื่อนล็อกไม่ได้', '084-987-5641', 'อนุญาต', 'A2102'),
('RE0006', 'ก๊อกน้ำ', 'ก๊อกน้ำไม่ไหล', '098-654-985', 'ไม่อนุญาต', 'A2103'),
('RE0007', 'มุ้งลวด', 'มุ้งลวดขาด', '096-636-8746', 'อนุญาต', 'A2201'),
('RE0008', 'ทีวี', 'ทีวีเสีย', '099-548-9856', 'อนุญาต', 'A2202'),
('RE0009', 'ฝ้าเพดาน', 'ฝ้าน้ำซึม', '085-574-6524', 'อนุญาต', 'A1101'),
('RE0010', 'อื่นๆ', 'ช่องเสียบสายแลนใช้ไม่ได้', '087-985-9685', 'อนุญาต', 'A1101'),
('RE0011', 'สายชำระ', 'ฟ็อกกี้เสีย', '091-698-5459', 'ไม่อนุญาต', 'A1101');

-- --------------------------------------------------------

--
-- Table structure for table `repairman`
--

CREATE TABLE `repairman` (
  `id` char(5) CHARACTER SET utf8 NOT NULL,
  `type` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairman`
--

INSERT INTO `repairman` (`id`, `type`) VALUES
('R0001', 'อุปกรณ์ครุภัณฑ์'),
('R0002', 'อุปกรณ์ประปา'),
('R0003', 'อุปกรณ์ไฟฟ้า'),
('R0004', 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `room_id` char(5) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `roomdetail` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `furniture` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `waterunit` int(2) DEFAULT NULL,
  `electunit` int(2) DEFAULT NULL,
  `building` int(1) DEFAULT NULL,
  `room` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`room_id`, `email`, `roomdetail`, `furniture`, `price`, `waterunit`, `electunit`, `building`, `room`) VALUES
('A1101', 'mookmik55@gmail.com', '1 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-1', 5500, 18, 8, 1, 101),
('A1102', 'jkllko@gmail.com', '1 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-2', 5500, 18, 8, 1, 102),
('A1201', 'dbshfge@gmail.com', '2 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-3', 6000, 18, 8, 1, 201),
('A1202', 'sfsvs@gmail.com', '2 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-4', 6000, 18, 8, 1, 202),
('A2101', 'vfdvdcz@gmail.com', '1 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-5', 5500, 18, 8, 2, 101),
('A2102', 'efdscz@gmail.com', '2 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-6', 6000, 18, 8, 2, 102),
('A2103', 'bfgre@gmail.com', '2 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-7', 6000, 18, 8, 2, 103),
('A2201', 'rrrcce@gmail.com', '1 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-8', 5500, 18, 8, 2, 201),
('A2202', 'bkjfkj@gmail.com', '1 bed 1 toilet', 'air-1 bed-1 fridge-1 fan-1 cupboard-9', 5500, 18, 8, 2, 202);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(5) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `phone` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `role` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `phone`, `name`, `role`, `id`) VALUES
('A1101', 'abc123', '081-641-3340', 'นายนพรัตน์ บุญรอด', 'resident', 1),
('A1102', 'abc123', '087-991-7940', 'นางสาววรรณวิมล บุญดี', 'resident', 2),
('A1201', 'abc123', '089-991-7941', 'นางสาวลลิดา บุญเลิศ', 'resident', 3),
('A1202', 'abc123', '083-991-7942', 'นางสาวน้้าทิพย์ ประเสริฐ', 'resident', 4),
('A2101', 'abc123', '087-991-7943', 'นายพิสิฐพงศ์ ไพบูรณ์', 'resident', 5),
('A2102', 'abc123', '081-991-7944', 'นายปิยะชาติ คำใส', 'resident', 6),
('A2103', 'abc123', '083-569-8745', 'นางสาวกมลชนก จิตใจ', 'resident', 7),
('A2201', 'abc123', '084-991-7945', 'นางสาวหทัยชนก ทรงกลด', 'resident', 8),
('A2202', 'abc123', '089-991-7946', 'นางสาวแก้วกนก บริสุทธิ์', 'resident', 9),
('AD001', 'abc123', '085-991-7951', 'นางสาวอัมภานุช บุพการี', 'admin', 10),
('R0001', 'abc123', '088-991-7947', 'นายก้องภพ ปิตุรงค์', 'repairman', 11),
('R0002', 'abc123', '085-991-7948', 'นายธีรเดช อินทรีย์', 'repairman', 12),
('R0003', 'abc123', '086-991-7949', 'นายเทอดศักดิ์ นวฤทัย', 'repairman', 13),
('R0004', 'abc123', '083-991-7950', 'นายธเนศ อยู่ดี', 'repairman', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repair_id`);

--
-- Indexes for table `repairdetails`
--
ALTER TABLE `repairdetails`
  ADD PRIMARY KEY (`repair_id`);

--
-- Indexes for table `repairman`
--
ALTER TABLE `repairman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
