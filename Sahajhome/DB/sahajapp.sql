-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2017 at 12:08 AM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sahajapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_Id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `D_id` int(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `Dis_id` int(100) NOT NULL,
  PRIMARY KEY (`A_Id`),
  UNIQUE KEY `username` (`username`),
  KEY `D_id` (`D_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `username`, `password`, `D_id`, `email`, `Dis_id`) VALUES
(1, 'amradmin', 'adminamr', 1, 'xyz@abc.com', 0),
(2, 'nagadmin', 'adminnag', 2, '', 0),
(3, 'nasadmin', 'adminnas', 3, '', 0),
(4, 'auradmin', 'adminaur', 4, '', 0),
(5, 'konadmin', 'adminkon', 5, '', 0),
(6, 'punadmin', 'adminpun', 6, '', 0),
(28, 'jjjj', 'sasa', 7, 'ssudmale@vjti.org.in', 0),
(30, 'dad', 'sdsaa', 7, 'ssudm@gmai.com', 0),
(31, 'ssss', 'sssssss', 7, 'ssudm@gmai.com', 0),
(32, 'sdeshp14', 'ssss', 7, 'ssudm@gmai.com', 0),
(33, 'sasasasas', 'ssss', 7, 'ssudm@gmai.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `C_id` int(11) NOT NULL AUTO_INCREMENT,
  `details` varchar(1000) NOT NULL,
  `status` int(10) NOT NULL,
  `P_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `D_Id` int(10) NOT NULL,
  `Dis_id` int(100) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `pending` varchar(1000) NOT NULL,
  PRIMARY KEY (`C_id`),
  KEY `P_id` (`P_id`),
  KEY `D_Id` (`D_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`C_id`, `details`, `status`, `P_id`, `date`, `feedback`, `D_Id`, `Dis_id`, `reply`, `pending`) VALUES
(101, 'But this wasn''t just any trip.', 1, 11, '2017-02-01', 'Best service ', 1, 10, 'sss', 'I owe you'),
(102, 'Will we see any dolphins, Dad?', 0, 12, '2017-01-03', 'Good ', 1, 10, 'Hello', ''),
(103, 'At least he couldn''t blame her for any lack of attention this time.  Read more at http://sentence.yourdictionary.com/any#W8tH9PSRvEizLiDQ.99', 2, 13, '2017-01-24', 'Awesome', 2, 16, '', ''),
(104, 'The whistle did not please him any more.  Read more at http://sentence.yourdictionary.com/any#W8tH9PSRvEizLiDQ.99', 1, 14, '2017-02-07', 'asdasdad', 1, 10, 'Masala', 'Just Do it'),
(105, 'dfjksjkdfns adjasjkd asdajnaslkd', 1, 16, '2017-01-24', 'fab', 1, 10, 'sara jamana', ''),
(106, 'gfdgfdgdg', 1, 15, '2017-02-07', 'ghjgjgfhfg gfhghgf', 1, 11, 'zinga lala', ''),
(107, 'sjsahsajks', 2, 19, '2017-02-14', 'jdjsdksalsmasmnams,', 2, 16, 'asad', 'sdadasdsds');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `Dis_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`Dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Dis_id`, `name`) VALUES
(8, ' Mumbai'),
(9, ' Amravati'),
(10, '  Akola'),
(11, '  Buldana'),
(12, '  Washim'),
(13, 'Yavatmal'),
(14, ' Nagpur'),
(15, '  Wardha'),
(16, ' Bhandara'),
(17, 'Gadchiroli'),
(18, 'Chandrapur'),
(19, 'Gondiya'),
(20, ' Nashik'),
(21, '  Ahmednagar'),
(22, 'Dhule'),
(23, '  Jalgaon'),
(24, ' Nandurbar'),
(25, 'Aurangabad'),
(26, ' Jalna'),
(27, '  Nanded'),
(28, '  Beed'),
(29, '  Parbhani'),
(30, ' Osmanabad'),
(31, 'Latur'),
(32, ' Hingoli'),
(33, ' Kokan'),
(34, '  Thane'),
(35, ' Raigad'),
(36, '  Ratnagiri'),
(37, 'Sindhudurg'),
(38, '  Palghar'),
(39, ' Pune'),
(40, '  Satara'),
(41, '  Sangali'),
(42, 'Solapur'),
(43, 'Kolhapur');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `D_Id` int(10) NOT NULL,
  `D_name` varchar(50) NOT NULL,
  PRIMARY KEY (`D_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`D_Id`, `D_name`) VALUES
(1, 'Amravati'),
(2, 'Nagpur'),
(3, 'Nashik'),
(4, 'Aurangabad'),
(5, 'Kokan'),
(6, 'Pune'),
(7, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `N_id` int(100) NOT NULL AUTO_INCREMENT,
  `data` varchar(5000) NOT NULL,
  `D_id` int(10) NOT NULL,
  `Dis_id` int(100) NOT NULL,
  PRIMARY KEY (`N_id`),
  KEY `D_id` (`D_id`,`Dis_id`),
  KEY `Dis_id` (`Dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`N_id`, `data`, `D_id`, `Dis_id`) VALUES
(1, 'ascascsa', 1, 11),
(2, 'jjj', 2, 15),
(3, 'sdcczc', 1, 10),
(4, 'RDB', 1, 10),
(5, 'asasadadsadsadd', 1, 10),
(9, 'not empty', 1, 11),
(10, 'Hello', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pensioner`
--

CREATE TABLE IF NOT EXISTS `pensioner` (
  `P_Id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Acc_no` int(40) NOT NULL,
  `bankname` varchar(40) NOT NULL,
  `PFO_no` varchar(30) NOT NULL,
  `mob` int(50) NOT NULL,
  `D_id` int(10) NOT NULL,
  `Dis_id` int(11) NOT NULL,
  PRIMARY KEY (`P_Id`),
  KEY `D_id` (`D_id`),
  KEY `Dis_id` (`Dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pensioner`
--

INSERT INTO `pensioner` (`P_Id`, `name`, `Acc_no`, `bankname`, `PFO_no`, `mob`, `D_id`, `Dis_id`) VALUES
(11, 'Sumedh', 33000889, 'SBI', 'PF0041', 2147483647, 1, 0),
(12, 'Saurav', 2147483647, 'CITY', 'PF0045', 2147483647, 1, 0),
(13, 'wasim', 5050505, 'ICICI', 'PF9392', 2147483647, 2, 0),
(14, 'Prashant', 30201039, 'HDFC', 'PF00321', 2147483647, 2, 0),
(15, 'Satyam', 5039010, 'SBI', 'PF99201', 2147483647, 3, 0),
(16, 'Ramesh', 40023020, 'ICICI', 'PF00393', 2147483647, 3, 0),
(17, 'Suresh', 9482020, 'Credila', 'PF65378', 2147483647, 4, 0),
(18, 'Ritu', 2147483647, 'sdk', 'PF93930', 100000000, 5, 0),
(19, 'Sindhu', 9329032, 'dddd', 'PF748383', 2147483647, 6, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `division` (`D_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `pensioner` (`P_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `division` (`D_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `pensioner`
--
ALTER TABLE `pensioner`
  ADD CONSTRAINT `pensioner_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `division` (`D_Id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
