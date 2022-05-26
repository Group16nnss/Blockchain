-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 10:49 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cooperative`
--

INSERT INTO `cooperative` (`id`, `name`, `email`, `password`, `phno`, `address`, `location`, `document`) VALUES
(1, 'anju', 'c@gmail.com', '1234', 2147483647, 'hwhswhu', 'KOTTAYOM', ''),
(3, 'manu', 'co@gmail.com', '3456', 2147483647, 'trivandrum', 'trivandrum', ''),
(4, 'sanju', 'sanju@gmail.com', 'oho', 2147483647, 'koduganloor,thrissur', 'koduganloor', ''),
(5, 'saha', 'saha@gmail.com', 'saha', 2147483647, 'kadavantra,kochi', 'kadavantra', ''),
(6, 'sne', 'c@123.com', 'ens', 2147483647, 'hi', 'hello', ''),
(7, 'hillo', 'hi@gmail.com', '1234', 2147483647, 'hello world', 'india', '');

-- --------------------------------------------------------

--
-- Table structure for table `cooperative_request`
--

CREATE TABLE IF NOT EXISTS `cooperative_request` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `cause` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `cooperative_request`
--

INSERT INTO `cooperative_request` (`id`, `cid`, `purpose`, `cause`, `amount`) VALUES
(16, 1, 'NGO', 'cancer', 60000),
(17, 0, 'Medicaltreatment', 'cancer', 45000),
(18, 0, 'Medicaltreatment', 'kindey  cancer', 50000),
(21, 0, 'Medicaltreatment', 'sugar', 5000),
(22, 0, 'Medicaltreatment', 'cancer', 30000),
(23, 0, 'Medicaltreatment', 'kidney transplantati', 50000),
(24, 0, 'other', 'education', 10000),
(25, 0, 'Medicaltreatment', 'tumor', 30000),
(26, 7, 'education', 'education', 1000),
(27, 6, 'medical', 'medical', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `proof` varchar(225) NOT NULL,
  `bank` varchar(15) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `ifsc` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `email`, `password`, `phone_no`, `proof`, `bank`, `account_no`, `ifsc`) VALUES
(1, 'abi', 'abi@gmail.com', '567', '67897654', 'img11.jpg', '0087645', '', ''),
(2, 'Gokul', 'gokul.vishnu202', '123456', '9856986598', 'img12.png', 'sbi', '98569865985698', '0078654'),
(3, 'ram', 'ram@gmal.com', '1234', '9865985698', 'img4.jpg', 'axis', 'Ax9865982678545', '0078657'),
(4, 'Aami', 'aami@gmail.com', '3456', '9876543210', 'img12.png', 'axis', 'Ax1345678904321', '009876'),
(5, 'rijo', 'rijo@gmail.com', 'bbbb', '9876543210', 'img12.png', 'icici', 'Ax3412567890123', '00896745'),
(6, 'sreya', 'sreya@gmail.com', 'abc', '8976124518', 'img12.png', 'canara', 'Ax1234678761456', '00467651'),
(7, 'joe', 'joe@gmail.com', 'hmm', '8966787651', 'img11.jpg', 'baroda', 'Ax1245656790', '00123456'),
(8, 'dona', 'dona@gmail', 'dona', '9876657464', 'img11.jpg', 'axis', 'Ax35643575', '00567545'),
(9, 'sri', 'd@abc.com', '4321', '9876543210', 'Screenshot 2021-12-07 120727.png', 'axis', '90219', 'axis0183');

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE IF NOT EXISTS `fundraiser` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phno` varchar(100) NOT NULL,
  `document` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`id`, `name`, `email`, `password`, `phno`, `document`, `status`) VALUES
(16, 'Anoop', 'f@gmail.com', '1234', '483748389', 'img2.jpg', ''),
(17, 'Merlin', 'merlin@gmail.com', '345', '6374587458', 'img1.jpg', ''),
(18, 'Gopika', 'gopkia@gmail.com', '111', '32457452876', 'img3.jpg', 'Active'),
(21, 'henna', 'henna@gmail.com', 'aaha', '7896541234', 'img3.jpg', ''),
(22, 'john', 'john@gmail.com', '102', '7890876512', 'img16.jpg', ''),
(23, 'vinodkumar', 'vinod@gmail.com', 'vinu', '7876567865', 'img16.jpg', ''),
(24, 'mohan', 'mohan@gmail.com', 'kaka', '9876543219', 'img9.webp', ''),
(25, 'sanu', 'sanu@gmail.com', 'sanu', '9087655541', 'img2.jpg', ''),
(26, 'anjana', 'anjana@gmail.com', 'anjana', '9876543567', 'img13.jpg', 'Active'),
(27, 'sri', 's@abc.com', '1234', '9876543210', 'diff.png', 'Active'),
(28, 'gjgj', 'jay@gmail.com', '1234', '9876543210', '2021-05-04 (17).png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `fund_request`
--

CREATE TABLE IF NOT EXISTS `fund_request` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `cause` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `fund_request`
--

INSERT INTO `fund_request` (`id`, `fid`, `purpose`, `cause`, `amount`) VALUES
(16, 16, 'NGO', 'cancer', 60000),
(17, 17, 'Medicaltreatment', 'cancer', 45000),
(18, 18, 'Medicaltreatment', 'kindey  cancer', 50000),
(21, 21, 'Medicaltreatment', 'sugar', 5000),
(22, 22, 'Medicaltreatment', 'cancer', 30000),
(23, 23, 'Medicaltreatment', 'kidney transplantati', 50000),
(24, 24, 'other', 'education', 10000),
(25, 16, 'Medicaltreatment', 'tumor', 30000),
(28, 27, 'education', 'education', 40000);

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
  `blkkey` text NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `fid`, `cause`, `amount`, `did`, `bank`, `deposit_amount`, `date`, `blkkey`, `type`) VALUES
(1, 16, 'cancer', '60000', 3, 'SBI 876287689', '1000', '2022-04-26', '0000cc93465d1013bc4f4f441052fe73b7e9e69c5923c72dadd5f59d9c7fa6c2', 'Fundriser'),
(2, 17, 'cancer', '45000', 3, 'SBI 876287689', '1000', '2022-04-26', '0000bdbe3d4db4d0ff0e9fb48d74ccb9c8a0247f16beaf01b5780804c1e63865', 'Fundriser'),
(3, 20, 'charity', '30', 4, 'FB876487364826', '10', '2022-04-26', '000036338f814dbf96b92e0ace044fa346cdd6fba6654b8d06b1719ca5ee5a00', 'Fundriser'),
(4, 18, 'kindey  cancer', '50000', 3, 'SBI 876287689', '1000', '2022-04-26', '000029ec65b42bd85c7d0baa34907e926c0aa38f581697c93aac37afaf942ef0', 'Fundriser'),
(8, 19, 'Father-Kidney Transp', '70', 3, 'axis', 'Ax9865982678545', '0000-00-00', '00009f972dacf14c8d159e767a45b4bf5761f55063c5f281c3698c93f43dfa65', 'Fundriser'),
(9, 19, 'Father-Kidney Transp', '70', 3, 'axis', '', '0000-00-00', '000059730ed9aae722a5704be36de366ee69038a7e17a9d264e6822885daf571', 'Fundriser'),
(10, 19, 'Father-Kidney Transp', '70', 6, 'canara', '60', '2022-04-28', '000089c6a19fd7d49c87524298b70609a4abf2386ce49f3aff031f29bae75fd6', 'Fundriser'),
(11, 22, 'cancer', '30000', 7, 'baroda', '1000', '2022-04-28', '00003cb46f1025d5db61c68dfb33fe7b4bc40cd9a9c296686a30958a9657e239', 'Fundriser'),
(12, 21, 'sugar', '5000', 6, 'canara', '400', '2022-04-28', '0000a62a12cd7f72b3a9bad0db231afabdcf8a7d863a7f39387e77f132aa6a09', 'Fundriser'),
(13, 23, 'kidney transplantati', '50000', 7, 'baroda', '2000', '2022-05-02', '00002e38af91948e15316396e69a72dec40ccc0a42bc6dacdb4ce8018c66e054', 'Fundriser'),
(14, 18, 'kindey  cancer', '50000', 1, '0087645', '300', '2022-05-03', '0000057a9f4ef49b335c28891267041799d72b0db26809f3821c4bb0c22f1e13', 'Fundriser'),
(15, 24, 'education', '10000', 3, 'axis', '100', '2022-05-03', '000005c4b0c1b9b8e43ec5c121e2bc54e0cc52f143bc91a580d78b1aaf2764d2', 'Fundriser'),
(16, 21, 'sugar', '5000', 7, 'baroda', '300', '2022-05-04', '0000b93af07297d666ac0a2616ef50acbeefba616a9a61ab91649027f884ab31', 'Fundriser'),
(17, 21, 'sugar', '5000', 7, 'baroda', '300', '2022-05-04', '0000174a89ce1a0ba40737fabfd150053a6d6322d377c618201ac6c47414522e', 'Fundriser'),
(18, 25, 'tumor', '30000', 8, 'axis', '100', '2022-05-04', '00004c7d6c78d07f7e08ba2c2d352d3aa8b1bec7844904e50d345de2c7a35a1f', 'Fundriser'),
(19, 22, 'cancer', '30000', 8, 'axis', '20', '2022-05-06', '0000dc06fa8423fae98c699e80d5617039b86e23ad7c92b9acdd48ec2b0b61da', 'Fundriser'),
(20, 0, '', '', 0, 'axis', '6000', '2022-05-25', '', 'Fundriser'),
(21, 0, '', '', 0, 'jhjkghgefh', '1200', '2022-05-25', '', 'Fundriser'),
(22, 0, '', '', 0, 'kgjhfhd', '300', '2022-05-25', '', 'Cooperativ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
