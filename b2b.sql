-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 08:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_tbl`
--

CREATE TABLE IF NOT EXISTS `brand_tbl` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `brand_tbl`
--

INSERT INTO `brand_tbl` (`brand_id`, `bname`, `is_active`, `doi`, `dou`) VALUES
(1, 'CELLO', 1, '2018-02-07 17:59:38', '2018-02-07 19:02:54'),
(2, 'CAMLIN', 1, '2018-02-07 18:06:22', '2018-04-25 15:52:17'),
(3, 'APSRA', 1, '2018-02-09 06:21:38', '0000-00-00 00:00:00'),
(4, 'DOMS', 1, '2018-02-09 06:21:55', '0000-00-00 00:00:00'),
(5, 'NAVNEET', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(6, 'CLASSMEANT', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(7, 'SUNDARAM', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(8, 'VIJAY', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(9, 'PARKER', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(10, 'LUXER', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(11, 'UNIBOLL', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(12, 'FAIR', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(13, 'FABER-CASTELL', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(14, 'ADD', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(15, 'STAEDTLER', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(16, 'MAPED', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(17, 'ARTLINE', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(18, 'FILOFAX', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(19, 'AMPAD', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(20, 'SPARCO', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(21, 'TNPL', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(22, 'SPETRA', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(23, 'JK PAPER', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(24, 'PAPER ONE', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(25, 'GREEN CENTURY', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(26, 'BLUE STAR', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(27, 'JANAVI', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(28, 'KALPANA', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(29, 'RUTAVI', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(30, 'GOLDEX', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00'),
(31, 'SAINO', 1, '2018-02-09 06:22:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE IF NOT EXISTS `cart_tbl` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `main_qun` int(11) NOT NULL,
  `prod_price` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `user_id`, `prod_id`, `main_qun`, `prod_price`, `is_active`, `doi`, `dou`) VALUES
(1, 8, 11, 1, '85', 2, '2018-04-26 18:01:37', '0000-00-00 00:00:00'),
(2, 8, 12, 1, '500', 2, '2018-04-26 18:01:51', '0000-00-00 00:00:00'),
(3, 8, 7, 1, '550', 2, '2018-04-26 18:04:10', '0000-00-00 00:00:00'),
(4, 3, 2, 1, '450', 2, '2018-04-26 18:09:29', '0000-00-00 00:00:00'),
(5, 3, 5, 11, '3740', 2, '2018-04-26 18:12:35', '0000-00-00 00:00:00'),
(6, 4, 8, 6, '900', 2, '2018-04-26 18:19:20', '0000-00-00 00:00:00'),
(7, 3, 9, 1, '250', 1, '2018-04-26 18:22:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE IF NOT EXISTS `cat_tbl` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`cat_id`, `cname`, `is_active`, `doi`, `dou`) VALUES
(1, 'School Stationery', 1, '2018-02-07 12:34:57', '2018-02-22 14:20:30'),
(2, 'Office Stationery', 1, '2018-02-07 12:54:20', '2018-02-22 14:21:01'),
(3, 'Paper Stationery', 1, '2018-02-07 12:55:31', '2018-02-22 14:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE IF NOT EXISTS `city_tbl` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`city_id`, `state_id`, `city_name`, `is_active`, `doi`, `dou`) VALUES
(1, 1, 'Ahmedabad', 1, '2018-04-26 15:36:59', '0000-00-00 00:00:00'),
(2, 1, 'Himatnagar', 1, '2018-04-26 15:37:19', '0000-00-00 00:00:00'),
(3, 1, 'Patan', 1, '2018-04-26 15:37:38', '0000-00-00 00:00:00'),
(4, 1, 'Surat', 1, '2018-04-26 15:38:03', '0000-00-00 00:00:00'),
(5, 1, 'Mahesana', 1, '2018-04-26 15:38:25', '0000-00-00 00:00:00'),
(6, 1, 'Rajkot', 1, '2018-04-26 15:38:54', '0000-00-00 00:00:00'),
(7, 1, 'vadodara', 1, '2018-04-26 15:39:13', '0000-00-00 00:00:00'),
(8, 1, 'Gandhinagar', 1, '2018-04-26 15:39:43', '0000-00-00 00:00:00'),
(9, 1, 'Modasa', 1, '2018-04-26 15:51:51', '0000-00-00 00:00:00'),
(10, 1, 'palanpur', 1, '2018-04-26 15:52:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `color_tbl`
--

CREATE TABLE IF NOT EXISTS `color_tbl` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `color_tbl`
--

INSERT INTO `color_tbl` (`color_id`, `color_name`, `is_active`, `doi`, `dou`) VALUES
(1, 'red', 1, '2018-04-25 00:00:00', '2018-04-26 09:27:28'),
(2, 'BLUE', 1, '2018-04-25 00:00:00', '0000-00-00 00:00:00'),
(3, 'BLACK', 1, '2018-04-25 00:00:00', '0000-00-00 00:00:00'),
(4, 'YELLOW', 1, '2018-04-25 00:00:00', '0000-00-00 00:00:00'),
(5, 'GREEN', 1, '2018-04-25 00:00:00', '0000-00-00 00:00:00'),
(6, 'BROWN', 0, '2018-04-25 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE IF NOT EXISTS `coupon_code` (
  `code_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(10) NOT NULL,
  `discount` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`code_id`, `coupon_code`, `discount`, `is_active`, `doi`) VALUES
(1, 'hub123', 10, 1, '2018-04-11 09:49:58'),
(2, '5hub5', 10, 1, '2018-04-11 11:14:31'),
(3, 'parth', 50, 0, '2018-04-11 11:15:58'),
(4, 'h5u6b7', 30, 1, '2018-04-12 04:32:38'),
(5, 'DEMO', 20, 2, '2018-04-12 09:03:28'),
(6, 'P1A9R9T8H', 20, 1, '2018-04-26 16:22:50'),
(7, 'A20MA11L', 20, 1, '2018-04-26 16:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL,
  `doi` datetime NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `name`, `email`, `subject`, `message`, `doi`, `is_active`) VALUES
(1, 'Neel  kotadiya', 'neelkotadiya@gmail.com', 'for work', 'site is Awesome', '2018-04-26 18:16:32', 1),
(2, 'Amal  Shah', 'amalshah2011@gmail.com', 'work', 'super site for buying stationery product', '2018-04-26 18:18:55', 1),
(3, 'parth  Mali', 'parthmali3948@gmail.com', 'complain', 'product is very costly', '2018-04-26 18:22:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inq_tbl`
--

CREATE TABLE IF NOT EXISTS `inq_tbl` (
  `inq_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `inq_msg` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`inq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `inq_tbl`
--

INSERT INTO `inq_tbl` (`inq_id`, `prod_id`, `user_id`, `name`, `email`, `mobile_no`, `inq_msg`, `is_active`, `doi`, `dou`) VALUES
(1, 3, 8, 'amal    B2C', 'amal@gmail.com', '4789652310', 'product is complete', 1, '2018-04-26 18:07:46', '0000-00-00 00:00:00'),
(2, 2, 3, 'parth    Mali', 'parthmali3948@gmail.com', '4789653210', 'i am buy only 50 pis of this product', 1, '2018-04-26 18:10:24', '0000-00-00 00:00:00'),
(3, 1, 6, 'Neel    kotadiya', 'neelkotadiya@gmail.com', '7895641256', 'color is compelet', 1, '2018-04-26 18:15:21', '0000-00-00 00:00:00'),
(4, 10, 4, 'Amal    Shah', 'amalshah2011@gmail.com', '7896325410', 'as dnvhvvn  nvnvjv v', 1, '2018-04-26 18:19:47', '0000-00-00 00:00:00'),
(5, 9, 3, 'parth    Mali', 'parthmali3948@gmail.com', '7896541235', 's  xc cvvvvccv z', 1, '2018-04-26 18:21:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(20) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qun` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `decs` varchar(200) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id`, `order_id`, `user_id`, `cart_id`, `prod_id`, `qun`, `cart_price`, `total_price`, `fname`, `lname`, `add1`, `state_id`, `city_id`, `pincode`, `email`, `mobile`, `decs`, `payment`, `status`, `is_active`, `doi`, `dou`) VALUES
(42, 1, 3, 100, 1, 4, 800, '850', 'parth', 'Mali', 'mahavirnagar', 1, 1, 323220, 'parthmali3948@gmail.', 1222222, 'dcdfdddddd', 'cod', 75, 1, '2018-04-26 14:58:55', '0000-00-00 00:00:00'),
(43, 2, 5, 102, 2, 1, 496, '2366', 'parth', 'B2C', 'mahavirnagar', 1, 1, 383001, 'paethnali1998@gmail.', 2147483647, 'aa bbb aaabba a', 'cod', 100, 1, '2018-04-26 17:46:45', '0000-00-00 00:00:00'),
(44, 2, 5, 103, 7, 2, 1100, '2366', 'parth', 'B2C', 'mahavirnagar', 1, 1, 383001, 'paethnali1998@gmail.', 2147483647, 'aa bbb aaabba a', 'cod', 100, 1, '2018-04-26 17:46:45', '0000-00-00 00:00:00'),
(45, 2, 5, 104, 9, 3, 720, '2366', 'parth', 'B2C', 'mahavirnagar', 1, 1, 383001, 'paethnali1998@gmail.', 2147483647, 'aa bbb aaabba a', 'cod', 100, 1, '2018-04-26 17:46:45', '0000-00-00 00:00:00'),
(46, 3, 8, 1, 11, 1, 85, '635', 'amal', 'B2C', 'swastik society', 1, 1, 123456, 'amal@gmail.com', 2147483647, 'MY ORDER IS DELIVER D AS SOON POSSIABLE AS FAST', 'online-payment', 75, 1, '2018-04-26 18:03:41', '0000-00-00 00:00:00'),
(47, 3, 8, 2, 12, 1, 500, '635', 'amal', 'B2C', 'swastik society', 1, 1, 123456, 'amal@gmail.com', 2147483647, 'MY ORDER IS DELIVER D AS SOON POSSIABLE AS FAST', 'online-payment', 75, 1, '2018-04-26 18:03:41', '0000-00-00 00:00:00'),
(48, 4, 8, 3, 7, 1, 550, '600', 'amal', 'B2C', 'swastik society', 1, 1, 123644, 'amal@gmail.com', 1236547890, 'SSSSSS', 'online-payment', 200, 1, '2018-04-26 18:04:36', '2018-04-26 18:06:23'),
(49, 5, 3, 4, 2, 1, 450, '500', 'parth', 'Mali', 'mahavirnagar', 1, 1, 383001, 'parthmali3948@gmail.', 123654, 'cddd dddd', 'online-payment', 100, 1, '2018-04-26 18:10:56', '0000-00-00 00:00:00'),
(50, 6, 3, 5, 5, 11, 3740, '3790', 'parth', 'Mali', 'mahavirnagar', 1, 1, 383001, 'parthmali3948@gmail.', 123987, 'aa s sd d dd', 'cod', 200, 1, '2018-04-26 18:13:10', '2018-04-26 18:13:39'),
(51, 7, 4, 6, 8, 6, 900, '950', 'Amal', 'Shah', 'kalupur road', 1, 1, 123654, 'amalshah2011@gmail.c', 2147483647, ' thicvc  v v v  v v kglkmsd', 'online-payment', 25, 1, '2018-04-26 18:20:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE IF NOT EXISTS `product_tbl` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `b2b_price` varchar(10) NOT NULL,
  `b2b_qun` int(11) NOT NULL,
  `b2c_price` varchar(10) NOT NULL,
  `prod_img1` varchar(100) NOT NULL,
  `prod_img2` varchar(100) NOT NULL,
  `prod_img3` varchar(100) NOT NULL,
  `prod_dec` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`prod_id`, `prod_name`, `brand_id`, `color_id`, `cat_id`, `sub_cat_id`, `b2b_price`, `b2b_qun`, `b2c_price`, `prod_img1`, `prod_img2`, `prod_img3`, `prod_dec`, `is_active`, `doi`, `dou`) VALUES
(1, 'Camlin Kokuyo Student Poster Color - 10ml each, 14 Shades', 2, 0, 1, 1, '200', 100, '210', 'upload/product/81Fv7IR4H9L._SL1500_.jpg', 'upload/product/91PW6ij1TmL._SL1500_.jpg', 'upload/product/91RbBcKX+uL._SL1500_.jpg', '14 assorted shades of 10 ml each\r\nConfirms to safety standard EN 71 - 3', 1, '2018-04-25 15:53:09', '0000-00-00 00:00:00'),
(2, 'DERWENT Academy Oil Pad 15 Sheets  A4 Portrait', 7, 0, 1, 1, '450', 100, '496', 'upload/product/91x+kzrLDXL._SL1500_.jpg', 'upload/product/912oFiX-lqL._SL1500_.jpg', 'upload/product/81aOzBUtFDL._SL1500_.jpg', '15 Sheets of Acid Free oil colour paper preserves the pigmentation and quality of artwork for a longer period of time', 1, '2018-04-25 15:55:07', '0000-00-00 00:00:00'),
(3, 'Bianyo Artist Quality Sketch Pad Acid Free. 160 GSM. A4 Size. 35 Sheets', 7, 3, 1, 1, '370', 100, '400', 'upload/product/81YGbNJrbQL._SL1500_.jpg', 'upload/product/81EmXRU7dzL._SL1500_.jpg', 'upload/product/71yrxKQeJnL._SL1500_.jpg', 'Premium Quality Sketch Pad for professional, intermediate and novice artists or writers. Spiral bound notebook open flat when put on a surface, they a', 1, '2018-04-25 15:56:45', '0000-00-00 00:00:00'),
(4, 'DERWENT Academy Tracing Paper Pad 25 Sheets  A3 Portrait', 6, 1, 1, 1, '640', 100, '650', 'upload/product/91k3437RefL._SL1500_.jpg', 'upload/product/91KgGgxuF0L._SL1500_.jpg', 'upload/product/91tAmmqUvmL._SL1500_.jpg', '25 Sheets of Acid Free tracing paper preserves the pigmentation and quality of artwork for a longer period of time', 1, '2018-04-25 15:58:36', '0000-00-00 00:00:00'),
(5, 'Pidilite Fabric Glue (80 Ml) : Pack Of 10', 7, 0, 1, 1, '340', 100, '350', 'upload/product/81zdeTxqkLL._SL1500_.jpg', 'upload/product/81zdeTxqkLL._SL1500_.jpg', 'upload/product/81zdeTxqkLL._SL1500_.jpg', 'For sticking beads, sequins, lace, ribbon, applique, foil, mirror work, glitter dust, cords and seams to fabric.', 1, '2018-04-25 15:59:42', '0000-00-00 00:00:00'),
(6, 'Classmate Long Notebook - A4, Soft Cover, 140 Pages, Single Line Pack of 6', 6, 0, 1, 2, '340', 100, '350', 'upload/product/51mRp1mahrL.jpg', 'upload/product/51mRp1mahrL.jpg', 'upload/product/51mRp1mahrL.jpg', 'Classmate uses eco friendly and elemental chlorine free paper\r\nAvailable in attractive cover designs', 1, '2018-04-25 16:01:03', '0000-00-00 00:00:00'),
(7, 'Doodle Iron On Patch Bulls Eye Diary Notebook, PU Leather, Hard Bound, Ruled, 200 Pages', 5, 0, 1, 2, '510', 100, '550', 'upload/product/71+vwF52yOL._SL1000_.jpg', 'upload/product/71b6tJOwnPL._SL1000_.jpg', 'upload/product/71GMLmXREkL._SL1000_.jpg', 'Doodle Grey Colour Bulls Eye Denim diary makes an everlasting impact, quite literally! of course it is a conversation starter!', 1, '2018-04-25 16:02:52', '0000-00-00 00:00:00'),
(8, 'Luxor 5 Subject Single Ruled Notebook  B5, 70 GSM, 300 pages', 10, 3, 1, 2, '150', 100, '175', 'upload/product/91VmQPIjWlL._SL1500_.jpg', 'upload/product/91VmQPIjWlL._SL1500_.jpg', 'upload/product/91VmQPIjWlL._SL1500_.jpg', 'Twin wiro binding\r\nPaper color: White\r\nPaper density: 70 gsm\r\nNo of pages 300', 1, '2018-04-25 16:04:22', '0000-00-00 00:00:00'),
(9, 'Kokuyo Campus 160 Pages Notebook (Pack of 3)', 7, 0, 1, 2, '250', 100, '240', 'upload/product/41wooB-z+3L.jpg', 'upload/product/', 'upload/product/41rqe2xAd2L.jpg', 'Notebook\r\nCampus\r\nKokoyu\r\nCamlin', 1, '2018-04-25 16:05:46', '0000-00-00 00:00:00'),
(10, 'The Crazy Me Never Quit Spiral Notebook(A5)', 2, 0, 1, 2, '250', 100, '240', 'upload/product/71EpPppHBaL._SL1500_.jpg', 'upload/product/615OlZ8BifL._SL1500_.jpg', 'upload/product/710LqSq3k6L._SL1500_.jpg', 'Number of Pages - 160\r\n100 GSM Paper quality\r\nGo back a little , think of why you started at the first place , think of how beautiful can the journey ', 1, '2018-04-25 16:07:26', '0000-00-00 00:00:00'),
(11, 'Faber Castell Connector Pen Set  Pack of 15 (Assorted)', 13, 0, 1, 3, '75', 100, '85', 'upload/product/816CVvvZnvL._SL1392_.jpg', 'upload/product/816CVvvZnvL._SL1392_.jpg', 'upload/product/816CVvvZnvL._SL1392_.jpg', 'Simply draw and color or clip these pens together to construct interesting models\r\nContains 40% more ink and lasts longer\r\nChild safe-food-grade ink', 1, '2018-04-25 16:08:44', '0000-00-00 00:00:00'),
(12, 'Mungyo Calligraphy Pen Set Of 12 Assorted Colours', 18, 0, 1, 3, '472', 100, '500', 'upload/product/71ig2HLJ99L._SL1489_ (1).jpg', 'upload/product/71QApjJNErL._SL1500_.jpg', 'upload/product/71ig2HLJ99L._SL1489_.jpg', 'Set Of 12 Fine Calligraphy Pens Packed In A Transparent Reusable Plastic Case\r\nWater Based 12 Vivid\r\nAssorted Colours', 1, '2018-04-25 16:10:11', '0000-00-00 00:00:00'),
(13, 'Camlin Kokuyo 4192567 24 Shade Full Size Colour Pencil Set (Assorted)', 2, 0, 1, 3, '100', 100, '150', 'upload/product/A1M+gVt47OL._SL1500_.jpg', 'upload/product/A1ZHBAm43bL._SL1500_.jpg', 'upload/product/A1M+gVt47OL._SL1500_.jpg', 'Cross hatching\r\nScumbling\r\nHatching\r\nBurnishing', 1, '2018-04-25 16:11:20', '0000-00-00 00:00:00'),
(14, 'Camlin Kokuyo Jumbo Wax Crayon Set  24 Shades (Multicolor)', 13, 0, 1, 3, '160', 100, '170', 'upload/product/61SUBoSq6iL._SL1333_.jpg', 'upload/product/71swTAZL-tL._SL1200_.jpg', 'upload/product/61SUBoSq6iL._SL1333_.jpg', 'Specially designed thicker crayons for better grip and control and ideal for gifting\r\nComes with 2 special shades of dark yellow and fluorescent pink ', 1, '2018-04-25 16:12:47', '0000-00-00 00:00:00'),
(15, 'Camel Plastic Crayons  24 Shades', 2, 0, 1, 3, '99', 100, '150', 'upload/product/A1gQNBUg-2L._SL1500_.jpg', 'upload/product/91nm3oLQD4L._SL1500_.jpg', 'upload/product/A1gQNBUg-2L._SL1500_.jpg', '24 Assorted Shades + 1 eraser + 1 sharpener\r\nConfirms to safety standard EN 71 - 3\r\nCamel art contest entry coupon inside the pack\r\nBest result can be', 1, '2018-04-25 16:14:02', '0000-00-00 00:00:00'),
(16, '1570 BLACK BOARD SET', 8, 2, 1, 4, '500', 100, '600', 'upload/product/BLACK-BOARD-SET.jpg', 'upload/product/BLACK-BOARD-SET.jpg', 'upload/product/BLACK-BOARD-SET.jpg', 'Our Black board sets are made of durable high impact polystyrene .\r\nDetachable handles are push fitted on to the parts .', 1, '2018-04-25 16:16:01', '0000-00-00 00:00:00'),
(17, 'Camlin Kokuyo Cadet Engineering Instruments', 2, 0, 1, 4, '450', 100, '500', 'upload/product/919DoLcM64L._SL1500_.jpg', 'upload/product/91QFqCD1qeL._SL1500_.jpg', 'upload/product/919DoLcM64L._SL1500_.jpg', 'Comprehensive kit of 12 precision crafted instruments for engineering genius\r\nPerfect addition to any classroom', 1, '2018-04-25 16:17:11', '0000-00-00 00:00:00'),
(18, 'Arasler Mini Drafter', 13, 0, 1, 4, '576', 100, '600', 'upload/product/mini-drafter-500x500.jpg', 'upload/product/mini-drafter-500x500.jpg', 'upload/product/mini-drafter-500x500.jpg', 'Mini Drafter is a must-have for all the inspiring engineers to draw quickly and accurately. Attached with an unbreakable scale. this drafter helps in ', 1, '2018-04-25 16:18:52', '0000-00-00 00:00:00'),
(19, 'Omega roll n draw ruler 1935 30 cms -pack of 3', 13, 0, 1, 4, '152', 100, '200', 'upload/product/omega-roll-n-draw-ruler-1935-30-cms---pack-of-3-500x500.jpg', 'upload/product/omega-roll-n-draw-ruler-1935-30-cms---pack-of-3-500x500.jpg', 'upload/product/omega-roll-n-draw-ruler-1935-30-cms---pack-of-3-500x500.jpg', 'Omega roll-n-draw ruler is widely used for making charts and parallel lines.\r\n\r\nSpecifications:\r\n\r\n- Brand: omega\r\n- Model Number: 1935\r\n- Transparent', 1, '2018-04-25 16:20:10', '0000-00-00 00:00:00'),
(20, 'Set square D shape  Pack of 5', 4, 0, 1, 4, '120', 100, '200', 'upload/product/protector-500x500.jpg', 'upload/product/protector-500x500.jpg', 'upload/product/protector-500x500.jpg', 'Set square D shape is a mahtemetical instrument to be used for geometric use. It is of high quality and clearly label.\r\n\r\nSpecifications:\r\n\r\n- D shape', 1, '2018-04-25 16:21:18', '0000-00-00 00:00:00'),
(21, 'Cello Technotip Ball Pen Set  Pack of 10 (Blue)', 1, 2, 1, 5, '100', 100, '150', 'upload/product/51CDLKFD8HL._SL1500_.jpg', 'upload/product/51ukcW-FbBL._SL1500_.jpg', 'upload/product/91vddgaT9vL._SL1500_.jpg', 'Elasto grip for pressure free writing\r\nLightweight body makes it easy to write for long\r\nLubriflow ink system for smooth writing', 1, '2018-04-25 16:22:35', '0000-00-00 00:00:00'),
(22, 'Cello Fine Grip Ball Pen, Blue  Pack of 5', 1, 2, 1, 5, '25', 100, '20', 'upload/product/41aOm1YsGWL.jpg', 'upload/product/51hJw6FP0UL.jpg', 'upload/product/41aOm1YsGWL.jpg', 'Barrel & Cap: Transparent\r\nClip, Nozzle & Button: Solid Plastic Matching Ink Colour\r\nGrip: Elasto Grip for Pressure Free Writing\r\nTip: Swiss Metal 0.7', 1, '2018-04-25 16:23:38', '0000-00-00 00:00:00'),
(23, 'Parker 0.6mm One Business Roller Ball Pen Pack of 4 Blue 183003', 9, 2, 1, 5, '600', 100, '568', 'upload/product/41HRItL3ufL.jpg', 'upload/product/21m59eN5EoL.jpg', 'upload/product/41Dd8W4ma+L.jpg', '4 Roller Ball Pens Nib Grade : Medium Other\r\nMechanism : Cap On-Off\r\nFeatures : Can be used to Sign Documents Body Color : Blue Made of Resin Solid Bo', 1, '2018-04-25 16:25:06', '0000-00-00 00:00:00'),
(24, 'Pilot V7 Hi-tecpoint Roller ball pen with Cartridge System  2 Blue Pens, 4 cartridges', 10, 2, 1, 5, '135', 100, '200', 'upload/product/91nQn-KSGgL._SL1500_.jpg', 'upload/product/91PFOB2pUTL._SL1500_.jpg', 'upload/product/61r1045n7tL._SL1088_.jpg', 'For the first time! Pilot V7 Tecpoint Pen comes with rechargeable cartridge system\r\n4 V7 cartridges with this special pack\r\nIdeal for school and colle', 1, '2018-04-25 16:26:31', '0000-00-00 00:00:00'),
(25, 'Apsara Platinum Extra Dark Pencils  Pack of 10', 3, 3, 1, 5, '45', 100, '50', 'upload/product/21cQym0Ka8L.jpg', 'upload/product/31FUnAcI1wL.jpg', 'upload/product/91JN7Mxj3IL._SL1500_.jpg', 'Specially designed for executives, 2B Grade\r\nSuperior bonded lead is strong and resists breakage\r\nSuperior quality wood makes sharpening easy\r\nMeets i', 1, '2018-04-25 16:27:48', '0000-00-00 00:00:00'),
(26, 'Apsara Absolute Extra Dark Pencils  Pack of 10', 3, 2, 1, 5, '70', 100, '100', 'upload/product/41Tcx4bpkCL.jpg', 'upload/product/41Tcx4bpkCL.jpg', 'upload/product/41Tcx4bpkCL.jpg', '50 % stronger lead that resists breaking while writing and sharpening\r\nSpecial wood for easy sharpening\r\nExtra dark lead for good handwriting', 1, '2018-04-25 16:28:59', '0000-00-00 00:00:00'),
(27, 'FC Scales 12inch Plastic', 4, 0, 1, 6, '10', 100, '11', 'upload/product/FC_Scales.jpg', 'upload/product/FC_Scales.jpg', 'upload/product/FC_Scales.jpg', 'Product Features: 1) Rounded Edges that donot chip 2) Perfect calibration for accuracy 3) Smooth tapered edges that lie flat on surface 4) Bold markin', 1, '2018-04-25 16:30:43', '0000-00-00 00:00:00'),
(28, 'Maped Kidy Grip Scale  30 cms', 4, 0, 1, 6, '10', 100, '11', 'upload/product/Maped Kidy Grip Scale - 30 cms.jpg', 'upload/product/Maped Kidy Grip Scale - 30 cms.jpg', 'upload/product/Maped Kidy Grip Scale - 30 cms.jpg', 'Model: SB10241351\r\n41 Units in Stock\r\nManufactured by: Maped', 1, '2018-04-25 16:31:39', '0000-00-00 00:00:00'),
(29, 'Metal Scale 6inch (15 cm)', 3, 0, 1, 6, '4', 100, '5', 'upload/product/Ajanta_metalscale_6.jpg', 'upload/product/Ajanta_metalscale_6.jpg', 'upload/product/Ajanta_metalscale_6.jpg', 'Product Features: 1) Perfect calibration for accuracy 2) Flat surface 3) Bold markings that donot fade', 1, '2018-04-25 16:32:34', '0000-00-00 00:00:00'),
(30, 'Mathematical Drawing Set', 1, 0, 1, 6, '20', 100, '35', 'upload/product/mathematical-drawing-instrument-set.jpg', 'upload/product/mathematical-drawing-instrument-set.jpg', 'upload/product/mathematical-drawing-instrument-set.jpg', 'One Set includes: - 60 Set Square - 45 Set Square - 180 Protactor - 15 cm Ruler Made from transparent plastic.\r\nFEATURES', 1, '2018-04-25 16:33:22', '0000-00-00 00:00:00'),
(31, 'Camlin Kokuyo PB White Board Marker  Pack of 4 Assorted Colors (Black, Blue, Red, Green)', 2, 2, 2, 7, '100', 100, '150', 'upload/product/31naHhRzmdL.jpg', 'upload/product/71++301TC1L._SL1500_.jpg', 'upload/product/31naHhRzmdL.jpg', 'Features: Refillable, Bright Ink, Easy to erase with duster, tissue and cloth\r\nCE Certified\r\nBright Ink for better visibility', 1, '2018-04-25 16:35:17', '0000-00-00 00:00:00'),
(32, 'Pragati Systems Genius Melamine ', 13, 0, 2, 7, '1090', 100, '2000', 'upload/product/71gnYBt61GL._SL1500_.jpg', 'upload/product/81qgbh6MZUL._SL1500_.jpg', 'upload/product/71hDipFQqZL._SL1500_.jpg', 'Super White Writing Grade Hard Melamine Surface (Marker Sheet) as per IS 20461997. Cannot be Used For Sticking Magnets.', 1, '2018-04-25 16:37:17', '0000-00-00 00:00:00'),
(33, 'Flashing Illuminated LED Lighted Writing Board 8mm Fluorescent Marker Pens Included  Pack Of 6', 2, 1, 2, 7, '599', 100, '699', 'upload/product/51WqvUArA3L.jpg', 'upload/product/71m9exYJiaL._SL1500_.jpg', 'upload/product/5116UmEOmmL.jpg', 'LED Lighted Writing Board of 8mm\r\nFluorescent Marker Pens Included\r\nPack Of 6', 1, '2018-04-25 16:38:34', '0000-00-00 00:00:00'),
(34, 'Whitelily Magnetic Duster For Erasing Marker Or Chalk Writing No Marker Provided', 2, 2, 2, 7, '99', 100, '190', 'upload/product/41QgdMmGFWL.jpg', 'upload/product/61iq8Ff9DPL._SL1500_.jpg', 'upload/product/61fuzoAyXhL._SL1500_.jpg', 'Without marker Image to Show the Utility of Marker Slot\r\nBest suited for Office home and educational & Instituitional use\r\nMulti Color\r\nContents 1 dus', 1, '2018-04-25 16:39:30', '0000-00-00 00:00:00'),
(35, 'Textsurfer Classic 364 Highliter  4 Pcs', 1, 2, 2, 7, '140', 100, '150', 'upload/product/364_1.jpg', 'upload/product/364_1.jpg', 'upload/product/364_1.jpg', 'Brand	Staedtler\r\nPacking Details	Pack of 4\r\nPen/Pencil Type	Highlighter', 1, '2018-04-25 16:47:16', '0000-00-00 00:00:00'),
(36, 'Writing Pad 128x215mm 40 Sheets-Beautiful Black Cover Design  Pack of 6 Pcs', 8, 2, 2, 8, '150', 100, '160', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'Premiun Quality Writing Pads\r\n- Made of finest Quality Material \r\n- Superior & Smoother Paper \r\n- Excellent finish \r\n- Available in Ruled & Plain Vari', 1, '2018-04-25 16:48:47', '0000-00-00 00:00:00'),
(37, 'Writing Pad 128x215mm 40 Sheets-Beautiful Black Cover Design Pack of 6 Pcs', 8, 2, 2, 8, '150', 100, '160', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'Premiun Quality Writing Pads\r\n- Made of finest Quality Material \r\n- Superior & Smoother Paper \r\n- Excellent finish \r\n- Available in Ruled & Plain Vari', 1, '2018-04-25 16:49:33', '0000-00-00 00:00:00'),
(38, 'Writing Pad 128x215mm 40 Sheets-Beautiful Black Cover Design Pack of 6 Pcs', 8, 4, 2, 8, '150', 100, '160', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'Premiun Quality Writing Pads - Made of finest Quality Material - Superior & Smoother Paper - Excellent finish - Available in Ruled & Plain Vari', 1, '2018-04-25 16:51:10', '0000-00-00 00:00:00'),
(39, '	Writing Pad 128x215mm 40 Sheets-Beautiful Black Cover Design Pack of 6 Pcs', 8, 6, 2, 8, '150', 100, '160', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'upload/product/WP3340_2.jpg', 'Premiun Quality Writing Pads - Made of finest Quality Material - Superior & Smoother Paper - Excellent finish - Available in Ruled & Plain Vari', 1, '2018-04-25 16:52:26', '0000-00-00 00:00:00'),
(40, 'Colored Coated Paper Clip, 100 Pcs Dibbi Pack, 28 MM Size.', 7, 0, 2, 9, '24', 100, '25', 'upload/product/CPC-Plastic-Dibbi_2.jpg', 'upload/product/CPC-Plastic-Dibbi_2.jpg', 'upload/product/CPC-Plastic-Dibbi_2.jpg', 'Wide Range of Scissors to Choose from\r\n- High Quality Plastic Mould\r\n- Superior Grip & Finish, Rust Resistant & Durable\r\n- Various Shapes & Color comb', 1, '2018-04-25 16:54:17', '0000-00-00 00:00:00'),
(41, 'Cutter Knife, auto lock', 2, 0, 2, 9, '26', 100, '27', 'upload/product/CK18-11_2.jpg', 'upload/product/CK18-11_2.jpg', 'upload/product/CK18-11_2.jpg', 'Makes Cutting Convenient\r\n- High Quality Plastic Mould\r\n- Superior Grip & Finish, Rust Resistant & Durable\r\n- ideal for Home, Office & School', 1, '2018-04-25 16:55:32', '0000-00-00 00:00:00'),
(42, 'All Pins in Paper Dibbi Pack-70 Grams (NW)', 7, 0, 2, 9, '33', 100, '34', 'upload/product/AP-70G-Oddy_2.jpg', 'upload/product/AP-70G-Oddy_2.jpg', 'upload/product/AP-70G-Oddy_2.jpg', 'High Quality Material Used\r\n- Electro Nickle Plated, Rust Proof\r\n- Lower Weight, More Pcs. Per Gram\r\n- Special Self Locking Paper Box\r\n- Reusable Lock', 1, '2018-04-25 16:58:55', '0000-00-00 00:00:00'),
(43, 'All Pins in Paper Dibbi Pack-70 Grams (NW)', 7, 0, 2, 9, '33', 100, '34', 'upload/product/AP-70G-Oddy_2.jpg', 'upload/product/AP-70G-Oddy_2.jpg', 'upload/product/AP-70G-Oddy_2.jpg', 'High Quality Material Used\r\n- Electro Nickle Plated, Rust Proof\r\n- Lower Weight, More Pcs. Per Gram\r\n- Special Self Locking Paper Box\r\n- Reusable Lock', 0, '2018-04-25 16:59:40', '0000-00-00 00:00:00'),
(44, 'Push Pins Round Shape-50 Pcs Pack', 2, 0, 2, 9, '38', 100, '40', 'upload/product/PP50-1313_2.jpg', 'upload/product/PP50-1313_2.jpg', 'upload/product/PP50-1313_2.jpg', ' High Quality Material Used \r\n- Superior Grip & Finish \r\n- Available in Various colors \r\n- Available in four different shapes \r\n- For Home, Office, Sc', 1, '2018-04-25 17:00:55', '0000-00-00 00:00:00'),
(45, 'Staple Pin  Pack of 5 Pcs', 7, 0, 2, 9, '40', 100, '45', 'upload/product/SY-SP10_1.jpg', 'upload/product/SY-SP10_1.jpg', 'upload/product/SY-SP10_1.jpg', 'Heavy Duty Staples for use in standard stapler machines.\r\n5mm leg length.', 1, '2018-04-25 17:02:11', '0000-00-00 00:00:00'),
(46, 'Misaki Multi Color Strips Pouch', 16, 3, 2, 10, '130', 100, '140', 'upload/product/1.jpg', 'upload/product/1.jpg', 'upload/product/1.jpg', 'Elegant Pouch from Misaki for your daily needs.\r\nSize 21X6.5X3.5CM', 1, '2018-04-25 17:04:06', '0000-00-00 00:00:00'),
(47, 'high quality, see through sponge cup with cap.', 18, 0, 2, 10, '36', 100, '38', 'upload/product/DM-02_2.jpg', 'upload/product/DM-02_2.jpg', 'upload/product/DM-02_2.jpg', 'Sponge Cup see through with cap\r\n- Made of finest quality material \r\n- Ideal for home & office use', 1, '2018-04-25 17:06:42', '0000-00-00 00:00:00'),
(48, 'Solo Computer CD Wallet - Pouch  Pack of 20 Pcs', 17, 0, 2, 10, '60', 100, '65', 'upload/product/CD012.jpg', 'upload/product/CD012.jpg', 'upload/product/CD012.jpg', 'a) Durable Computer Cd wallet pouches. (b) Both side pocket to store 2 CD (c) Best suitable use in ring binders and for sending CD in post. (d) Super ', 1, '2018-04-25 17:07:56', '0000-00-00 00:00:00'),
(49, 'Glue stick (large) Pack of 5 Pcs', 15, 0, 2, 10, '75', 100, '85', 'upload/product/SY-GS21_1.jpg', 'upload/product/SY-GS21_1.jpg', 'upload/product/SY-GS21_1.jpg', 'Offers a better alternative to traditional glue.\r\nNon Toxic, safe and convenient/easy to use.\r\nSolvent free and Washable adhesive for better results.\r', 1, '2018-04-25 17:09:07', '0000-00-00 00:00:00'),
(50, 'Pen Holder', 16, 0, 2, 10, '86', 100, '89', 'upload/product/DS201.jpg', 'upload/product/DS201.jpg', 'upload/product/DS201.jpg', '(a) 3 sections to keep pen, scissors, glue sticks, scale etc on a office desk . (b)Transparent and elegant design (c) Keeps your desk neat and suave. ', 1, '2018-04-25 17:11:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `return_order_tbl`
--

CREATE TABLE IF NOT EXISTS `return_order_tbl` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qun` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `reasone` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `return_order_tbl`
--

INSERT INTO `return_order_tbl` (`return_id`, `user_id`, `order_id`, `order_no`, `product_id`, `qun`, `price`, `reasone`, `is_active`, `doi`) VALUES
(1, 8, 48, 4, 7, 1, 550, 'The Product Was Damaged Upon Arrival', 2, '2018-04-26 18:06:23'),
(2, 3, 50, 6, 5, 11, 3740, 'The Product Was Damaged Upon Arrival', 1, '2018-04-26 18:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `sec_que_tbl`
--

CREATE TABLE IF NOT EXISTS `sec_que_tbl` (
  `sec_que_id` int(11) NOT NULL AUTO_INCREMENT,
  `sec_que` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  PRIMARY KEY (`sec_que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sec_que_tbl`
--

INSERT INTO `sec_que_tbl` (`sec_que_id`, `sec_que`, `is_active`, `doi`) VALUES
(1, 'what is your blood group ?', 1, '2018-02-09 11:03:01'),
(2, 'what is your father name ?', 1, '2018-02-09 11:21:41'),
(3, 'What is the  last four number of your mobile Number ?', 1, '2018-04-26 16:20:37'),
(4, 'In what city were you born?', 1, '2018-04-26 16:20:58'),
(5, 'What is your mother maiden name?', 1, '2018-04-26 16:21:37'),
(6, 'what is your favorite website ?', 1, '2018-04-26 16:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE IF NOT EXISTS `state_tbl` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`state_id`, `state_name`, `is_active`, `doi`, `dou`) VALUES
(1, 'Gujarat', 1, '2018-04-26 15:33:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat_tbl`
--

CREATE TABLE IF NOT EXISTS `sub_cat_tbl` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sub_cat_tbl`
--

INSERT INTO `sub_cat_tbl` (`sub_cat_id`, `cat_id`, `sub_cat_name`, `is_active`, `doi`, `dou`) VALUES
(1, 1, 'Art And Craft', 1, '2018-04-25 10:48:37', '0000-00-00 00:00:00'),
(2, 1, 'Books', 1, '2018-04-25 10:48:50', '0000-00-00 00:00:00'),
(3, 1, 'Colors And Brushes', 1, '2018-04-25 10:49:12', '0000-00-00 00:00:00'),
(4, 1, 'Engg Instruments', 1, '2018-04-25 10:49:33', '0000-00-00 00:00:00'),
(5, 1, 'Ball Pens & Pencil & Eraser ', 1, '2018-04-25 10:52:27', '0000-00-00 00:00:00'),
(6, 1, 'Rulers', 1, '2018-04-25 10:53:03', '0000-00-00 00:00:00'),
(7, 2, 'Board & Marker', 1, '2018-04-25 10:53:43', '0000-00-00 00:00:00'),
(8, 2, 'Carbon Paper', 1, '2018-04-25 10:54:09', '0000-00-00 00:00:00'),
(9, 2, 'Desk Essentials', 1, '2018-04-25 10:54:33', '2018-04-25 10:55:06'),
(10, 2, 'Desk Organizer', 1, '2018-04-25 10:54:53', '0000-00-00 00:00:00'),
(11, 2, 'Diary & Planner', 1, '2018-04-25 10:55:29', '0000-00-00 00:00:00'),
(12, 2, 'File & Floder', 1, '2018-04-25 10:55:50', '0000-00-00 00:00:00'),
(13, 2, 'Stamp & Ink', 1, '2018-04-25 10:56:27', '0000-00-00 00:00:00'),
(14, 3, 'Art & Craft Paper', 1, '2018-04-25 10:57:11', '0000-00-00 00:00:00'),
(15, 3, 'Computer Labels', 1, '2018-04-25 10:57:28', '0000-00-00 00:00:00'),
(16, 3, 'Copier Paper', 1, '2018-04-25 10:57:40', '0000-00-00 00:00:00'),
(17, 3, 'Notebook & Register', 1, '2018-04-25 10:57:57', '0000-00-00 00:00:00'),
(18, 3, 'OHP/Tracing Sheet', 1, '2018-04-25 10:58:26', '0000-00-00 00:00:00'),
(19, 3, 'Paper Envelopes', 1, '2018-04-25 10:58:47', '0000-00-00 00:00:00'),
(20, 3, 'Rolls & Plotters', 1, '2018-04-25 10:59:08', '0000-00-00 00:00:00'),
(21, 1, 'Aaaa', 0, '2018-04-26 07:02:46', '2018-04-26 07:04:47'),
(22, 0, 'aaa', 0, '2018-04-26 07:14:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `sec_que` varchar(150) NOT NULL,
  `sec_ans` varchar(150) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `city_id` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `user_typ` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `fname`, `lname`, `email`, `pass`, `gender`, `profile_pic`, `sec_que`, `sec_ans`, `add1`, `city_id`, `state_id`, `is_active`, `doi`, `dou`, `user_typ`) VALUES
(1, 'Stationery', 'Hub', 'hub@gmail.com', 'MTIzNA==', 'Male', 'upload/profile/logoshop.png', '1', 'B+', 'Male', '23', '7', 1, '2018-04-24 21:27:00', '2018-04-26 10:53:07', 1),
(3, 'parth', 'Mali', 'parthmali3948@gmail.com', 'MTIzNA==', 'male', 'upload/profile/my6.jpg', '2', 'noratbhai', 'mahavirnagar', '1', '7', 1, '2018-04-26 12:39:30', '0000-00-00 00:00:00', 2),
(4, 'Amal', 'Shah', 'amalshah2011@gmail.com', 'YW1hbEAxMjM0', 'Male', 'upload/profile/amal.JPG', '1', 'b-', 'kalupur road', '1', '1', 1, '2018-04-26 16:30:29', '0000-00-00 00:00:00', 2),
(5, 'parth', 'B2C', 'paethnali1998@gmail.com', 'cGFydGhAMTIzNA==', 'male', 'upload/profile/my.jpg', '4', 'himatnagar', 'mahavirnagar', '2', '1', 1, '2018-04-26 16:34:35', '0000-00-00 00:00:00', 3),
(6, 'Neel', 'kotadiya', 'neelkotadiya@gmail.com', 'MTIzNA==', 'male', 'upload/profile/neel.JPG', '2', 'manishbhai', 'vishali society', '5', '1', 1, '2018-04-26 16:36:50', '0000-00-00 00:00:00', 3),
(7, 'neel', 'b2b', 'neel@gmail.com', 'MTIzNA==', 'Male', 'upload/profile/neel1.jpg', '2', 'manishbhai', 'valabhnagar', '4', '1', 1, '2018-04-26 17:31:20', '0000-00-00 00:00:00', 2),
(8, 'amal', 'B2C', 'amal@gmail.com', 'MTIzNA==', 'male', 'upload/profile/amal11.jpg', '4', 'amd', 'swastik society', '3', '1', 1, '2018-04-26 17:41:43', '0000-00-00 00:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_tbl`
--

CREATE TABLE IF NOT EXISTS `wishlist_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_price` varchar(10) NOT NULL,
  `is_active` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wishlist_tbl`
--

INSERT INTO `wishlist_tbl` (`id`, `user_id`, `prod_id`, `prod_price`, `is_active`, `doi`, `dou`) VALUES
(1, 6, 1, '210', 1, '2018-04-26 18:15:41', '0000-00-00 00:00:00'),
(2, 6, 3, '400', 1, '2018-04-26 18:15:47', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
