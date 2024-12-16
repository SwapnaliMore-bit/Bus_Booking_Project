-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 03:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `busbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknw`
--

CREATE TABLE IF NOT EXISTS `booknw` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fnm` varchar(50) NOT NULL,
  `lnm` varchar(50) NOT NULL,
  `eml` varchar(100) NOT NULL,
  `adds` varchar(300) NOT NULL,
  `cty` varchar(100) NOT NULL,
  `adlt` varchar(10) NOT NULL,
  `seats` varchar(20) NOT NULL,
  `bsid` int(10) NOT NULL,
  `isdel` int(10) NOT NULL,
  `iscrt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `booknw`
--

INSERT INTO `booknw` (`id`, `fnm`, `lnm`, `eml`, `adds`, `cty`, `adlt`, `seats`, `bsid`, `isdel`, `iscrt`) VALUES
(1, 'vhinita ', 'jadhav', 'vj499@gmail.com', 'paramne plot', 'nipani', '5', '7', 12345, 0, '2020-02-20 13:25:43'),
(2, 'swapnali ', 'more', 'swap999@gmail.com', 'nagala park', 'kolhapur', '3', '5', 54321, 0, '2020-02-20 13:25:43'),
(3, 'neha ', 'chavan', 'nc6761@gmail.com', 'nagala park', 'kolhapur', '3', '7', 78945, 0, '2020-02-20 13:28:17'),
(4, 'trupti', 'kumbhar', 'tk23@gmail.com', 'shiroli', 'kolhapur', '7', '9', 45612, 0, '2020-02-20 13:28:17'),
(5, 'shivani', 'ghewari', 'shiv@gmail.com', 'tarabai park', 'kolhapur', '4', '5', 45698, 0, '2020-02-20 13:30:57'),
(6, 'amruta', 'darekar', 'amu@gmail.com', 'tarabai park', 'kolhapur', '6', '7', 10236, 0, '2020-02-20 13:30:57'),
(7, 'manish', 'morbale', 'manish@gmail.com', 'shiroli', 'kolhapur', '3', '5', 45032, 0, '2020-02-20 13:32:37'),
(8, 'vinay ', 'mithari', 'vinay@gmail.com', 'fulewadi', 'ko', '', '', 0, 0, '2020-02-20 13:32:37'),
(9, 'vinay', 'mithari', 'vinay@gmail.com', 'fulewadi', 'kolhapur', '4', '7', 45698, 0, '2020-02-20 13:35:18'),
(10, 'sohan', 'patil', 'sohan11@gmail.com', 'nagala park', 'kolhapur', '6', '9', 54321, 0, '2020-02-20 13:35:18'),
(11, 'pooja', 'chavan', 'pooja@gmail.com', 'fulewadi', 'nipani', '3', '7', 12345, 0, '2020-02-20 13:45:58'),
(12, 'shubhangi', 'patil', 'shubh@gmail.com', 'tarabai park', 'kolhapur', '3', '9', 10236, 0, '2020-02-20 13:45:58'),
(13, 'prajakta', 'mali', 'praju@gmail.com', 'fulewadi', 'kolhapur', '5', '7', 45698, 0, '2020-02-20 13:47:48'),
(14, 'priya', 'chavan', 'priya@gmail.com', 'nagala park', 'kolhapur', '6', '7', 10236, 0, '2020-02-20 13:47:48'),
(15, 'riya', 'patil', 'riya@gmail.com', 'shiroli', 'kolhapur', '3', '5', 45698, 0, '2020-02-20 13:49:29'),
(16, 'tina', 'khan', 'tina@gmail.com', 'tarabai park', 'kolhapur', '6', '9', 45612, 0, '2020-02-20 13:49:29'),
(17, 'heena', 'motlani', 'heena@gmail.com', 'nagala park', 'kolhapur', '5', '7', 78945, 0, '2020-02-20 13:50:48'),
(18, 'pallavi', 'patil', 'pallavi@gmail.com', 'ruikar colony', 'kolhapur', '6', '7', 10236, 0, '2020-02-20 13:50:48'),
(19, 'nisha', 'yadav', 'nisha@gmail.com', 'rankala', 'kolhapur', '5', '7', 45698, 0, '2020-02-20 13:53:05'),
(20, 'simran', 'kapoor', 'sim@gmail.com', 'ruikar colony', 'kolhapur', '6', '9', 54321, 0, '2020-02-20 13:53:05'),
(21, 'raj', 'kapoor', 'raj@gmail.com', 'nagala park', 'kolhapur', '3', '7', 1456, 0, '2020-02-20 13:54:27'),
(22, 'veer', 'kapoor', 'veer@gmail.com', 'tarabai park', 'kolhapur', '3', '9', 45612, 0, '2020-02-20 13:54:27'),
(23, 'onkar', 'gaikwad', 'onkar@gmail.com', 'ram nagar', 'nipani', '6', '8', 78903, 0, '2020-02-20 13:57:08'),
(24, 'krishna ', 'patil', 'krish@gmail.com', 'ram nagar', 'nipani', '3', '9', 10236, 0, '2020-02-20 13:57:08'),
(25, 'swapnali', 'patil', 'swapnalipatil@gmail.com', 'nagala park', 'kolhapur', '4', '5', 67890, 0, '2020-02-23 22:50:00'),
(26, 'mayuri', 'mane', 'may@gmail.com', 'nagala park', 'kolhapur', '2', '4', 12365, 0, '2020-02-17 21:34:00'),
(27, 'priyansh', 'more', 'priy@gmail.com', 'tarabai park', 'kolhapur', '1', '3', 12459, 0, '2020-02-15 21:39:15'),
(28, 'saloni ', 'mane', 'saloni@gmail.com', 'ruikar colony', 'kolhapur', '4', '6', 45789, 0, '2020-02-20 00:36:06'),
(29, 'harshada', 'mohite', 'harsh@gmail.com', 'shahupuri', 'kolhapur', '5', '6', 12458, 0, '2020-02-13 02:43:10'),
(30, 'trupti', 'patil', 'trupti12@gmail.com', 'ram nagar', 'pune', '3', '5', 12036, 0, '2020-02-25 21:38:17'),
(31, 'sonal ', 'patil', 'sonu@gmail.com', 'shaniwar peth', 'pune', '2', '5', 14526, 0, '2020-02-26 23:38:08'),
(32, 'sonam', 'chougule', 'sonam@gmail.com', 'shaniwar peth', 'pune', '1', '2', 12458, 0, '2020-02-16 01:36:08'),
(33, 'shubhangi', 'ambekar', 'shubhs@gmail.com', 'akansh colony', 'pune', '4', '6', 14785, 0, '2020-02-25 22:39:09'),
(34, 'sayali', 'satpute', 'sayali@gmail.com', 'rajarampuri', 'kolhapur', '6', '8', 14520, 0, '2020-02-12 21:38:07'),
(35, 'soham', 'mane', 'soham@gmail.com', 'rankala tower', 'kolhapur', '4', '9', 14298, 0, '2020-02-14 20:36:06'),
(36, 'raj', 'patil', 'raj68@gmail.com', 'nagala park', 'kolhapur', '3', '5', 12789, 0, '2020-02-03 22:38:06'),
(37, 'harsh', 'more', 'hrsh09@gmail.com', 'shaniwar peth', 'pune', '1', '6', 10203, 0, '2020-02-08 22:36:06'),
(38, 'sangram', 'more', 'sangram@gmail.com', 'nagala park', 'kolhapur', '3', '5', 10605, 0, '2020-02-26 20:38:05'),
(39, 'dhiraj', 'jadhav', 'dhiru@gmail.com', 'parmane plot', 'nipani', '8', '9', 14780, 0, '2020-02-05 22:39:09'),
(40, 'manisha', 'more', 'manisha@gmail.com', 'shahupuri', 'kolhapur', '5', '8', 60305, 0, '2020-02-19 22:41:07'),
(41, 'priyansh', 'kapoor', 'priy@gmail.com', 'tarabai park', 'kolhapur', '3', '5', 14750, 0, '2020-02-11 21:39:08'),
(42, 'yogesh', 'jadhav', 'yogesh@gmail.com', 'ram nagar', 'nipani', '2', '4', 47850, 0, '2020-02-14 21:38:08'),
(43, 'aniket', 'mane', 'aniket@gmail.com', 'tarabai park', 'kolhapur', '7', '8', 45980, 0, '2020-02-04 20:37:06'),
(44, 'rupali', 'mohite', 'rupali@gmail.com', 'rajarampuri', 'kolhapur', '4', '5', 14250, 0, '2020-02-28 02:41:00'),
(45, 'mayur', 'thakur', 'mayu@gmail.com', 'shaniwar peth', 'pune', '2', '2', 36985, 0, '2020-02-12 23:43:13'),
(46, 'manisha', 'chopade', 'man@gmail.com', 'ram nagar', 'pune', '3', '4', 78965, 0, '2020-02-26 23:39:09'),
(47, 'anuja', 'patil', 'anu@gmail.com', 'dadar', 'mumbai', '3', '7', 65478, 0, '2020-02-10 23:42:11'),
(48, 'mrudula', 'thakur', 'mrudula@gmail.com', 'dadar', 'munbai', '7', '7', 47856, 0, '2020-02-25 22:38:08'),
(49, 'pradnya', 'parab', 'pradnya@gmail.com', 'ram nagar', 'pune', '6', '7', 10236, 0, '2020-02-02 20:37:21'),
(50, 'shraddha', 'patil', 'shru@gmail.com', 'nagala park', 'kolhapur', '2', '3', 98745, 0, '2020-02-14 22:39:09'),
(51, 'apurva', 'shirke', 'apu@gmail.com', 'pachgaon', 'kolhapur', '3', '3', 69852, 0, '2020-02-27 23:43:13'),
(52, 'aishwarya', 'patil', 'aish@gmail.com', 'dadar', 'munbai', '6', '6', 36520, 0, '2020-02-03 21:39:09'),
(53, 'anuja', 'shirke', 'anu@gmail.com', 'dadar', 'mumbai', '5', '6', 10258, 0, '2020-02-07 22:42:12'),
(54, 'aditi', 'mane', 'adi@gmail.com', 'nagala park', 'kolhapur', '8', '8', 98746, 0, '2020-02-12 23:42:12'),
(55, 'shruti', 'kokate', 'shru@gmail.com', 'rankala tower', 'kolhapur', '5', '6', 36528, 0, '2020-02-05 00:41:10'),
(56, 'jyoti', 'jadhav', 'jyoti@gmail.com', 'kale', 'kolhapur', '4', '5', 10258, 0, '2020-02-05 23:43:11'),
(57, 'swati', 'jadhav', 'swati@gmail.com', 'kale', 'kolhapur', '6', '7', 14058, 0, '2020-01-31 23:38:08'),
(58, 'raviraj', 'jadhav', 'ravi@gmail.com', 'kale', 'kolhapur', '5', '6', 30698, 0, '2020-02-14 23:43:14'),
(59, 'rohit', 'powar', 'rohit@gmail.com', 'shaniwar peth', 'p', '8', '8', 30205, 0, '2020-02-06 23:41:12'),
(60, 'swaroop', 'more', 'swaroop@gmail.com', 'nagala park', 'kolhapur', '2', '5', 45960, 0, '2020-02-11 21:37:07'),
(61, 'swapnali one', 'more one', 'swapnali@gmail.co', 'new pales', 'kolhapur', '4', '4', 0, 0, '2020-02-24 09:48:14'),
(63, 'mona', 'monu', 'mona@moan.com', 'kop', 'kop', '2', '2', 3, 0, '2020-02-26 16:05:14'),
(64, 'abd', 'xyz', 'ax@gmail.com', 'ert', 'sdhsd', '8', '9', 8, 0, '2020-02-27 07:24:18'),
(65, 'ishada ', 'shinde', 'is@gmail.com', 'rankala', 'bealgav', '3', '4', 1, 0, '2020-02-27 10:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `bus booking table`
--

CREATE TABLE IF NOT EXISTS `bus booking table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(50) NOT NULL DEFAULT 'admin' COMMENT 'created by',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'UPDATE time',
  `is_delete` int(11) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT '0-remark',
  `from_destination` varchar(50) NOT NULL COMMENT 'destination',
  `to_destination` varchar(50) NOT NULL COMMENT 'destination',
  `route_id` int(10) NOT NULL COMMENT 'route id',
  `bus_id` int(10) NOT NULL COMMENT 'bus id',
  `ticket_id` int(10) NOT NULL COMMENT 'ticket id',
  `user_id` int(10) NOT NULL COMMENT 'user id',
  `seat number` int(10) NOT NULL COMMENT 'seat number',
  `number of seats` int(10) NOT NULL COMMENT 'no. of seats',
  `rate` int(10) NOT NULL COMMENT 'rate',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bus_table`
--

CREATE TABLE IF NOT EXISTS `bus_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `bus_number` varchar(10) NOT NULL COMMENT 'bus number',
  `bus_type` varchar(50) NOT NULL COMMENT 'bus type',
  `bus_manufacturing` varchar(50) NOT NULL COMMENT 'manufacturing of bus',
  `bis_description` varchar(150) NOT NULL COMMENT 'bus description',
  `seat_arrangement` int(10) NOT NULL COMMENT 'bus arrangement',
  `amenities` varchar(500) NOT NULL COMMENT 'amenities',
  `is_delete` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bus_table`
--

INSERT INTO `bus_table` (`id`, `bus_number`, `bus_type`, `bus_manufacturing`, `bis_description`, `seat_arrangement`, `amenities`, `is_delete`) VALUES
(1, 'MH 09 AB 4', 'AC', '2020-01-13', 'info', 1, 'wifi', 0),
(2, 'MH 09 AB 7', 'VOLVO', '2020-01-02', 'sleeper coach', 2, 'AC', 0),
(4, 'MH 09 AS 4', 'VOLVO', '2018-01-09', 'AC', 2, 'Sleeper coach', 0),
(5, 'MH 09 AB 4', 'AC', '2020-02-05', 'seater', 0, 'wifi', 0),
(6, 'MH 08 MA 4', 'VOLVO', '2019-04-01', 'sleeper', 1, 'NON AC', 0),
(8, 'RJ 03 HJ 4', 'volvo', '2019-06-04', 'sleeper', 3, 'WiFi', 0),
(9, 'AB 05 DF 7', 'Tata motors', '2019-02-06', 'sleeper coach', 0, 'NON AC', 0),
(10, 'GN 06 HJ 6', 'Mahindra ', '2019-02-21', 'seater', 3, 'WiFi', 0),
(11, 'MH 09 EJ 8', 'volvo', '2020-02-02', 'passing year 2000', 2, 'AC', 0),
(12, 'NH 03 HJ 4', 'volvo', '2019-09-10', 'sleeper', 1, 'WiFi', 0),
(13, 'MH 01 AB 1', 'Mahindra', '2019-09-10', 'seater', 0, 'NON AC', 0),
(14, 'MH 02 KL 8', 'volvo', '2019-12-03', 'sleeper', 1, 'AC', 0),
(15, 'MH 03 AS 1', 'Mahindra', '2019-09-03', 'sleeper coach', 3, 'AC', 0),
(16, 'MH 07 MK 8', 'Tata motors', '2019-10-24', 'seater', 1, 'AC', 0),
(18, 'HD 06 HJ 6', 'Mahindra ', '2020-02-13', 'seater', 2, 'WiFi', 0),
(19, 'MH 03 SM 8', 'Mahindra', '2019-03-13', 'red colour', 1, 'AC', 0),
(20, 'MH 09 AB 0', 'volvo', '2020-02-28', 'passing year 2000', 3, 'NON AC', 0),
(21, 'AB 04 DE 6', 'Mahindra', '2019-09-17', 'passing year 2000', 2, 'AC', 0),
(22, 'SM 09 NC 9', 'volvo', '2019-08-15', 'red colour', 1, 'NON AC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer name`
--

CREATE TABLE IF NOT EXISTS `customer name` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `created_by` varchar(50) NOT NULL DEFAULT 'admin' COMMENT 'created by',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'UPDATE time',
  `is_delete` varchar(10) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT '0-remark',
  `customer_name` varchar(100) NOT NULL COMMENT 'customer name',
  `customer_age` int(10) NOT NULL COMMENT 'agecustomer',
  `customer_mobile_number` bigint(10) NOT NULL COMMENT 'mob number',
  `customer_emailid` varchar(50) NOT NULL COMMENT 'email id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dailybus`
--

CREATE TABLE IF NOT EXISTS `dailybus` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `busno` int(10) NOT NULL COMMENT 'busno',
  `rotno` int(10) NOT NULL COMMENT 'routeno',
  `froms` varchar(100) NOT NULL COMMENT 'from',
  `tos` varchar(100) NOT NULL COMMENT 'todesr',
  `dy` int(10) NOT NULL COMMENT 'DAY',
  `mnt` int(10) NOT NULL COMMENT 'month',
  `sttym` varchar(50) NOT NULL COMMENT 'start time',
  `endtym` varchar(50) NOT NULL COMMENT 'end time',
  `aseat` int(10) NOT NULL COMMENT 'seat availbe',
  `bookid` int(10) NOT NULL,
  `dts` varchar(100) NOT NULL,
  `rate` int(20) NOT NULL,
  `dtnw` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `dailybus`
--

INSERT INTO `dailybus` (`id`, `busno`, `rotno`, `froms`, `tos`, `dy`, `mnt`, `sttym`, `endtym`, `aseat`, `bookid`, `dts`, `rate`, `dtnw`) VALUES
(1, 1, 1, 'Kolhapur', 'Pune', 1, 2, '6.00', '12.00', 41, 0, '2020-02-02', 500, '01/02/2020'),
(2, 2, 1, 'Kolhapur', 'Pune', 10, 2, '16.00', '22.00', 32, 0, '2020-02-10', 450, '10/02/2020'),
(3, 2, 2, 'Pune', 'Kolhapur', 11, 2, '14.00', '24.00', 40, 0, '26/02/2020', 350, '26/02/2020'),
(4, 0, 2312, 'pune', 'mumbai', 13, 2, '14.00', '24.00', 40, 0, '0000-00-00', 440, ''),
(5, 0, 0, 'goa', 'pune', 1, 1, '14.00', '24.00', 40, 0, '0000-00-00', 600, ''),
(6, 0, 0, 'kolhapur', 'satara', 25, 2, '14.00', '24.00', 40, 0, '25/02/2020', 0, ''),
(7, 0, 0, 'pune', 'kohapur', 5, 3, '14.00', '24.00', 30, 0, '', 0, ''),
(8, 0, 0, 'pune', 'kolhapur', 3, 3, '14.00', '24.00', 40, 0, '', 0, ''),
(9, 0, 0, 'satara', 'pune', 28, 2, '15.00', '22.00', 40, 0, '', 0, ''),
(10, 0, 0, 'pune', 'INFO', 1, 2, '14.00', '24.00', 40, 0, '', 0, ''),
(11, 0, 0, 'pune', 'kolhapur', 3, 3, '10.00', '16.00', 40, 0, '04/03/2020', 0, '04/03/2020'),
(12, 5, 5, 'kolhapur', 'pune', 4, 3, '14.00', '24.00', 40, 0, '', 0, ''),
(13, 0, 0, 'INFO', 'INFO', 1, 2, '14.00', '24.00', 40, 0, '04/03/2020', 0, '01/02/2020'),
(14, 0, 0, 'pune', 'satara', 1, 2, '14.00', '24.00', 40, 0, '04/03/2020', 0, ''),
(15, 0, 9, 'Pune', 'Nagpur', 4, 3, '14.00', '24.00', 40, 0, '04/03/2020', 900, ''),
(16, 0, 10, 'pune', 'kolhapur', 1, 6, '16.00', '27.00', 40, 0, '13/04/2020', 400, ''),
(17, 0, 21, 'nagpur', 'kolhapur', 1, 3, '12.00', '24.00', 40, 0, '20/03/2020', 600, ''),
(18, 0, 10, 'solapur', 'pune', 1, 5, '14.00', '30.00', 40, 0, '02/04/2020', 700, ''),
(19, 0, 9, 'aurangabad', 'mumbai', 1, 2, '15.00', '24.00', 40, 0, '10/06/2020', 800, ''),
(20, 0, 10, 'mumbai', 'pune', 1, 3, '16.00', '45.00', 40, 0, '15/09/2020', 500, ''),
(21, 0, 14, 'satara', 'kolhapur', 1, 2, '14.00', '20.00', 40, 0, '02/05/2020', 600, ''),
(22, 0, 13, 'satara', 'aurangabad', 1, 2, '16.00', '15.00', 40, 0, '07/07/2020', 800, ''),
(23, 0, 10, 'kolhapur', 'shiradi', 1, 5, '17.00', '14.00', 40, 0, '11/04/2020', 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `dnm` varchar(500) NOT NULL COMMENT 'drive name',
  `address` varchar(100) NOT NULL COMMENT 'address',
  `numbr` varchar(50) NOT NULL COMMENT 'number',
  `payment` varchar(50) NOT NULL COMMENT 'payment',
  `expr` varchar(50) NOT NULL COMMENT 'expr',
  `isdel` int(10) NOT NULL DEFAULT '0' COMMENT 'is deleted',
  `isupdt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'is updated',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `dnm`, `address`, `numbr`, `payment`, `expr`, `isdel`, `isupdt`) VALUES
(3, 'rajuu', 'kolhapur', '9078563421', '800', '2', 0, '2020-02-20 11:00:48'),
(4, 'Ravi patil', 'sangli', '8907654321', '1500', '3', 0, '2020-02-20 16:24:31'),
(5, 'sushil', 'kolhapur', '9078563421', '2000', '2', 0, '2020-02-20 16:27:23'),
(6, 'sagar ', 'kolhapur', '9078563421', '2000', '2', 0, '2020-02-20 16:29:15'),
(7, 'sangram', 'pune', '8967452310', '2000', '1', 0, '2020-02-20 16:30:53'),
(8, 'yuvraj', 'kolhapur', '9078563421', '1000', '1', 0, '2020-02-20 16:31:43'),
(9, 'akash', 'kolhapur', '9078563421', '2000', '1', 0, '2020-02-20 16:31:44'),
(10, 'omkar', 'kolhapur', '9078563421', '1500', '1', 0, '2020-02-20 16:31:44'),
(11, 'ajit', 'kolhapur', '9078563421', '1050', '1', 0, '2020-02-20 16:31:45'),
(12, 'swaroop', 'kolhapur', '9078563421', '2080', '1', 0, '2020-02-20 16:32:52'),
(13, 'tejas', 'kolhapur', '9078563421', '2000', '1', 0, '2020-02-20 16:32:53'),
(14, 'rajesh', 'kolhapur', '9154782637', '1500', '2 ', 0, '2015-07-07 22:38:10'),
(15, 'suresh', 'pune', '8956231475', '2000', '3 ', 0, '2018-07-20 22:41:11'),
(16, 'ramesh', 'kolhapur', '8547123698', '1600', '5 ', 0, '2020-01-06 22:40:10'),
(17, 'jayesh', 'sangali', '7589632145', '2500', '4 ', 0, '2020-01-14 22:41:11'),
(18, 'raju', 'sangali', '9856321475', '1500', '5 ', 0, '2020-01-08 00:43:12'),
(19, 'santosh', 'satara', '9856321478', '2500', '2 ', 0, '2020-01-12 22:40:11'),
(20, 'shyaam', 'mumbai', '9856471236', '1500', '3 ', 0, '2018-11-07 21:38:09'),
(21, 'raam', 'kolhapur', '8563214578', '1000', '2 ', 0, '2018-04-09 21:39:09'),
(22, 'dipesh', 'pune', '8956123478', '2000', '4 ', 0, '2020-01-12 21:40:18'),
(23, 'sagar', 'kolhapur', '9874747474', '5000', '1', 0, '2020-02-21 12:30:33'),
(24, 'Raj', 'baramati', '9078452310', '2000', '3', 0, '2020-02-22 17:08:27'),
(25, 'ram', 'pune', '1234567890', '1000', '2', 0, '2020-02-28 05:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(70) NOT NULL COMMENT 'identity',
  `u_name` varchar(70) NOT NULL COMMENT 'name of user',
  `pass` varchar(70) NOT NULL COMMENT 'password',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route_table`
--

CREATE TABLE IF NOT EXISTS `route_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `created_by` varchar(50) NOT NULL DEFAULT 'admin' COMMENT 'created by',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'UPDATE time',
  `is_delete` int(11) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT '0-remark',
  `route_name` varchar(150) NOT NULL COMMENT 'route name',
  `from_destination` varchar(50) NOT NULL COMMENT 'from',
  `to_destinstion` varchar(50) NOT NULL COMMENT 'to',
  `route_description` varchar(500) NOT NULL COMMENT 'description',
  `time_duration` varchar(30) NOT NULL COMMENT 'time duration',
  `stops` varchar(500) NOT NULL COMMENT 'stops of bus',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `route_table`
--

INSERT INTO `route_table` (`id`, `created_by`, `update_time`, `is_delete`, `flag`, `route_name`, `from_destination`, `to_destinstion`, `route_description`, `time_duration`, `stops`) VALUES
(1, 'admin', '2020-01-17 13:44:31', 0, '0', 'NH 04', 'kolhapur', 'satara', '200 km', '2 hrs', '3'),
(2, 'admin', '2020-01-17 13:44:50', 0, '0', 'NH 04', 'sangali', 'pune', '370', '4 yrs', '2'),
(3, 'admin', '2020-02-16 15:40:36', 0, '0', 'NH 04', 'satara', 'goa', '500 km', '5 hrs', '3'),
(4, 'admin', '2020-02-16 17:07:39', 0, '0', 'NH 04', 'pune', 'goa', '600 km', '7 hr', '3'),
(5, 'admin', '2020-02-20 10:12:18', 0, '0', 'NH 04', 'kolhapur', 'sangli', '80 km', '2 hr 30 min', '2'),
(6, 'admin', '2020-02-20 16:51:42', 0, '0', 'NH 04', 'kolhapur', 'baramati', '600 km', '5 hrs', '2'),
(7, 'admin', '2020-02-20 16:55:15', 0, '0', 'NH 04', 'pune', 'mumbai', '500 km', '2 hr', '2'),
(8, 'admin', '2020-02-20 16:57:44', 0, '0', 'NH 01', 'Solapur', 'pune', '400 Km', '3 hr 45 min', '3'),
(9, 'admin', '2020-02-21 12:54:22', 0, '0', 'NH 04', 'mahableshwar', 'pune', '180 km', '2 hrs 30 min', '2'),
(10, 'admin', '2020-02-21 12:54:22', 0, '0', 'NH O4', 'nashik', 'aurangabad', '250 km', '3 hrs', '1'),
(11, 'admin', '2020-02-21 12:57:22', 0, '0', 'NH 04', 'solapur', 'pune', '400 km', '5 hrs', '1'),
(12, 'admin', '2020-02-21 12:57:22', 0, '0', 'NH O4', 'akola', 'nanded', '180 km', '2 hrs', '4'),
(13, 'admin', '2020-02-21 12:59:27', 0, '0', 'NH 04', 'kolhapur', 'shirdi', '800 km', '9 hrs', '2'),
(14, 'admin', '2020-02-21 12:59:27', 0, '0', 'NH O4', 'pune', 'amravati', '450 km', '5 hrs', '3'),
(15, 'admin', '2020-02-21 13:01:00', 0, '0', 'NH 04', 'jalgaon', 'solapur', '380 km', '4 hrs', '1'),
(16, 'admin', '2020-02-21 13:01:00', 0, '0', 'NH O4', 'nanded', 'jalgaon', '400 km', '4 hrs 30 min', '3'),
(18, 'admin', '2020-02-22 16:49:00', 0, '0', 'NH 04', 'baramati ', 'kolhapur', '600 km', '6 hr 30 min', '3'),
(21, 'admin', '2020-02-22 17:32:05', 0, '0', 'NH 04', 'goa', 'pune', '600 km', '7 hr', '3'),
(23, 'admin', '2020-02-23 14:22:53', 0, '0', 'NH 04', 'pune', 'goa', '700 Km', '8 hr', '3'),
(24, 'admin', '2020-02-23 14:24:27', 0, '0', 'NH 04', ' shirdi', 'kolhapur', '800 Km', '8 hr', '3'),
(25, 'admin', '2020-02-26 14:28:00', 0, '0', 'NH 10', 'delhi', 'goa', '700', '10 hrs', '2'),
(26, 'admin', '2020-02-28 05:29:56', 0, '0', 'NH 04', 'pune', 'kolhapur', '600 km', '6 hr', '2');

-- --------------------------------------------------------

--
-- Table structure for table `seat_table`
--

CREATE TABLE IF NOT EXISTS `seat_table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created_by` int(10) NOT NULL COMMENT 'created by',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'UPDATE time',
  `is_delete` int(10) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT '0-remark',
  `bus_id` int(10) NOT NULL COMMENT 'bus id',
  `route_id` int(10) NOT NULL COMMENT 'route id',
  `seat_number` int(10) NOT NULL COMMENT 'seat number',
  `is_ladies` int(10) DEFAULT '0' COMMENT '0-general, 1-ladies',
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '0-available, 1-booked',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket table`
--

CREATE TABLE IF NOT EXISTS `ticket table` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `created_by` varchar(50) NOT NULL DEFAULT 'admin' COMMENT 'created by',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'UPDATE time',
  `is_delete` int(10) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT '0-remark',
  `booking_id` int(10) NOT NULL COMMENT 'booking id',
  `no_of_seats` int(10) NOT NULL COMMENT 'seats',
  `rate` int(10) NOT NULL COMMENT 'rate',
  `amount` int(10) NOT NULL COMMENT 'amount',
  `tax(GST)` double(10,2) NOT NULL COMMENT 'tax',
  `adjustment(discount)` int(10) NOT NULL COMMENT 'discount',
  `total_amount` double(10,2) NOT NULL COMMENT 'total amount of ticket',
  `payment_status` varchar(10) NOT NULL DEFAULT '0' COMMENT '0-unpaid, 1-fullypaid, 2-driver payment',
  `payment_mode` int(10) NOT NULL DEFAULT '0' COMMENT '0-cash, 1-card, 2-netbanking',
  `is_confirm` int(10) NOT NULL COMMENT 'confirmation',
  `is_cancle` int(10) NOT NULL DEFAULT '0' COMMENT '0-confirm, 1-cancle',
  `approved_by` varchar(50) NOT NULL COMMENT 'approval',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'identity',
  `user_name` varchar(50) NOT NULL COMMENT 'name of user',
  `password` varchar(30) NOT NULL COMMENT 'password',
  `mobile_no.` bigint(10) NOT NULL COMMENT 'mobile no',
  `emailid` varchar(50) NOT NULL COMMENT 'emailid',
  `created_by` varchar(50) NOT NULL DEFAULT 'admin' COMMENT 'created by',
  `role` int(10) NOT NULL DEFAULT '0' COMMENT '0-superadmin, 1-accountant, 2-operator,3-driver',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'update time',
  `is_delete` int(10) NOT NULL DEFAULT '0' COMMENT '0-live, 1-deleted',
  `flag` varchar(50) NOT NULL DEFAULT '0' COMMENT 'remark',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `mobile_no.`, `emailid`, `created_by`, `role`, `update_time`, `is_delete`, `flag`) VALUES
(1, 'admin', '123', 0, '', 'admin', 0, '2020-02-26 15:13:28', 0, '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
