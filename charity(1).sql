-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 03:40 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `phno`) VALUES
(1, 'Albin Daniel', 'albindaniel03@gmail.', 'DAAF', '9526561086'),
(2, 'Albin Daniel', 'albindaniel03@gmail.', 'huiey', '9526561086'),
(3, 'Albin Daniel', 'albindaniel03@gmail.', 'huiey', '9526561086'),
(4, 'account', 'christeenadaniel03@g', 'gfh', '9812346578'),
(5, 'account', 'christeenadaniel03@g', 'gfh', '9812346578'),
(6, 'account', 'christeenadaniel03@g', 'fghjn', '9812346578'),
(7, 'account', 'christeenadaniel03@g', 'fghjn', '9812346578'),
(8, 'account', 'christeenadaniel03@g', 'fghjn', '9812346578'),
(9, 'account', 'christeenadaniel03@g', 'fghjn', '9812346578'),
(10, 'account', 'christeenadaniel03@g', 'jkj', '9812346578'),
(11, 'aaaa', 'aa@gmail.com', 'asd', ''),
(12, 'Christeena Daniel', 'christeenadaniel03@g', 'ghbh', '07561086071'),
(13, 'Christeena Daniel', 'christeenadaniel03@g', 'ghbh', '07561086071'),
(14, '', '', '', ''),
(15, 'ammu', 'ammu03@gmail.com', '', '78364286876'),
(16, 'ammu', 'ammu03@gmail.com', '', '78364286876');

-- --------------------------------------------------------

--
-- Table structure for table `cooperative`
--

CREATE TABLE IF NOT EXISTS `cooperative` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `document` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cooperative`
--

INSERT INTO `cooperative` (`id`, `name`, `email`, `password`, `phno`, `address`, `location`, `document`) VALUES
(1, 'anju', 'c@gmail.com', '1234', 2147483647, 'hwhswhu', 'KOTTAYOM', '');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` int(100) NOT NULL,
  `proof` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `email`, `password`, `phno`, `proof`, `bank`) VALUES
(3, 'amala', 'd@gmail.com', '1234', 2147483647, 'kjhwiu78787', 'SBI 876287689'),
(4, 'veena', 'veena@gmail.com', '3456', 2147483647, 'AF76874927', 'FB876487364826');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE IF NOT EXISTS `medical` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `cause` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `document` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `name`, `email`, `password`, `phno`, `purpose`, `cause`, `amount`, `document`) VALUES
(16, 'Anoop', 'f@gmail.com', '1234', '483748389', 'NGO', 'cancer', 60000, 'img2.jpg'),
(17, 'Merlin', 'merlin@gmail.com', '345', '6374587458', 'Medicaltreatment', 'cancer', 45000, 'img1.jpg'),
(18, 'Gopika', 'gopkia@gmail.com', '111', '32457452876', 'Medicaltreatment', 'kindey  cancer', 50000, 'img3.jpg'),
(19, 'Vinod kumar', 'vinod@gmail.com', '222', '7653625375', 'Medicaltreatment', 'Father-Kidney Transp', 70, 'img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `product` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `fid` int(50) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `product`, `category`, `fid`, `cid`, `status`) VALUES
(6, 'medicine', 'boys dress', 16, '1', 'approve'),
(7, 'food', 'Rice,vegitables', 16, '1', 'approve'),
(8, 'medicine', 'Carboplatin ,Doxil', 17, '7', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fid` int(100) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `did` int(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `deposit_amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `fid`, `cause`, `amount`, `did`, `bank`, `deposit_amount`, `date`) VALUES
(9, 17, 'cancer', '45000', 3, 'SBI 876287689', '30000', '2021-05-18'),
(10, 18, 'kindey  cancer', '50000', 3, 'SBI 876287689', '10000', '2021-05-08'),
(11, 16, 'cancer', '60000', 3, 'SBI 876287689', '30000', '2021-05-12'),
(12, 18, 'kindey  cancer', '50000', 4, 'FB876487364826', '40000', '2021-05-19'),
(13, 17, 'cancer', '45000', 4, 'FB876487364826', '30000', '2021-05-28'),
(14, 16, 'cancer', '60000', 3, 'SBI 876287689', '30000', '2021-05-30'),
(15, 19, 'Father-Kidney Transp', '70', 3, 'SBI 876287689', '10', '2021-05-31'),
(16, 19, 'Father-Kidney Transp', '70', 3, 'SBI 876287689', '20', '2021-05-25'),
(17, 19, 'Father-Kidney Transp', '70', 3, 'SBI 876287689', '2', '2021-05-31'),
(18, 19, 'Father-Kidney Transp', '70', 3, 'SBI 876287689', '5', '2021-05-30'),
(19, 19, 'Father-Kidney Transp', '70', 3, 'SBI 876287689', '2', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
