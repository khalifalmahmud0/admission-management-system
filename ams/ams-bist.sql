-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2021 at 03:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams-bist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_name` varchar(255) NOT NULL,
  `_email` varchar(255) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `_type` int(255) NOT NULL,
  `_valid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `_email` (`_email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `_name`, `_email`, `_password`, `_type`, `_valid`) VALUES
(6, 'sabuj', 'sabuj@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 'NO'),
(5, 'Khalif AL Mahmud', 'khalifalmahmud.bitbytetech@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

DROP TABLE IF EXISTS `class_list`;
CREATE TABLE IF NOT EXISTS `class_list` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `class` int(255) DEFAULT NULL,
  `available_seat` int(255) DEFAULT NULL,
  `admission_fee` int(255) DEFAULT NULL,
  `subject_group` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class` (`class`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `class`, `available_seat`, `admission_fee`, `subject_group`) VALUES
(42, 12, 3, 3, ''),
(37, 9, 900, 900, ''),
(33, 8, 800, 800, ''),
(32, 7, 700, 700, ''),
(31, 6, 600, 600, ''),
(30, 5, 500, 500, ''),
(29, 4, 400, 400, ''),
(28, 3, 300, 300, ''),
(27, 2, 200, 200, ''),
(26, 1, 100, 100, ''),
(43, 11, 11, 11, ''),
(44, 10, 10, 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `_name` text,
  `_email` text,
  `_father` text,
  `_mother` text,
  `_phone` text,
  `_pass` text,
  `_class` text,
  `_group` text,
  `_image` text,
  `_type` text,
  `_status` text,
  `_date` text,
  `_tran_id` text,
  `_val_id` text,
  `_amount` text,
  `_store_amount` text,
  `_bank_tran_id` text,
  `_card_type` text,
  `_emi_instalment` text,
  `_emi_amount` text,
  `_emi_description` text,
  `_emi_issuer` text,
  `_card_no` text,
  `_card_issuer` text,
  `_card_brand` text,
  `_card_issuer_country` text,
  `_card_issuer_country_code` text,
  `_APIConnect` text,
  `_validated_on` text,
  `_gw_version` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `_name`, `_email`, `_father`, `_mother`, `_phone`, `_pass`, `_class`, `_group`, `_image`, `_type`, `_status`, `_date`, `_tran_id`, `_val_id`, `_amount`, `_store_amount`, `_bank_tran_id`, `_card_type`, `_emi_instalment`, `_emi_amount`, `_emi_description`, `_emi_issuer`, `_card_no`, `_card_issuer`, `_card_brand`, `_card_issuer_country`, `_card_issuer_country_code`, `_APIConnect`, `_validated_on`, `_gw_version`) VALUES
(54, 'Amatul Moula Sakib', 'amatulsakib@gmail.com', 'Abdullah Al Mahmud', 'Lutfur Naher', '01829996330', '202cb962ac59075b964b07152d234b70', '4', '', NULL, '1', 'VALID', '2020-12-26 13:39:55', 'SSLCZ_TEST_5fe6e8100e194', '201226134011FYfBJTKrCo7LI17', '400.00', '390', '2012261340110LWkxUzD8pGVKHc', 'BKASH-BKash', '0', '0.00', '', 'BKash Mobile Banking', '', 'BKash Mobile Banking', 'MOBILEBANKING', 'Bangladesh', 'BD', 'DONE', '2020-12-26 13:40:11', ''),
(52, 'Noman', 'noman@toman.com', 'Nur', 'Ruma', '01829996330', '827ccb0eea8a706c4c34a16891f84e7b', '9', 'SCIENCE', NULL, '1', 'VALID', '2020-12-24 01:06:01', 'SSLCZ_TEST_5fe39463c31a5', '20122410608JFovUcE8OI2yOXs', '900.00', '877.5', '20122410608IKVaqAWt8uakqsb', 'QCASH-ITCL', '0', '0.00', '', 'QCASH', '', 'QCASH', 'QCASH', 'Bangladesh', 'BD', 'DONE', '2020-12-24 01:06:09', ''),
(53, 'Khalif Shuva Sakib', 'khalifmahmud9625@gmail.comm', 'Abdullah Al Mahmud', 'Lutfur Naher', '01829996330', '202cb962ac59075b964b07152d234b70', '1', '', NULL, '1', 'VALIDATED', '2020-12-26 11:13:05', 'SSLCZ_TEST_5fe6c5a70b7a8', '2012261119130KoKEbCJzgtWS4i', '100.00', '89.74', '201226111912129PHYi3D2bAMWt', 'VISA-City Bank', '9', '7.76', '9 Months - 7.5% FlexiBuy Commission', 'STANDARD CHARTERED BANK', '421481XXXXXX4177', 'STANDARD CHARTERED BANK', 'VISA', 'Bangladesh', 'BD', 'DONE', '2020-12-26 11:20:01', ''),
(50, 'Amatul moula Shuva', 'amatulmoula98@gmail.com', 'Abdullah Al Mahmud', 'Lutfur Naher', '01829996398', 'f0db72640aa9f492ddbd46305dd10748', '7', '', NULL, '1', 'VALID', '2020-12-22 23:28:08', 'SSLCZ_TEST_5fe22bf2b5fe4', '2012222328430R5Ng1h5KURvEDQ', '1000.00', '975', '201222232843XMaSsdIyb2pOmGL', 'BKASH-BKash', '0', '0.00', '', 'BKash Mobile Banking', '', 'BKash Mobile Banking', 'MOBILEBANKING', 'Bangladesh', 'BD', 'DONE', '2020-12-22 23:28:44', ''),
(51, 'Ama', 'ama@tma.com', 'nur', 'ruma', '01829996330', 'e292b1d68c8b480c49074ff1b6e266b8', '1', '', NULL, '1', 'VALID', '2020-12-24 00:12:12', 'SSLCZ_TEST_5fe387c654fcc', '20122401226EisYrRQP4rgxOWZ', '100.00', '97.5', '20122401226Sj2BMo9skVPLW9G', 'AMEX-City Bank', '0', '0.00', '', '', '', '', '', '', '', 'DONE', '2020-12-24 00:12:26', ''),
(49, 'Khalif AL Mahmud', 'khalifmahmud9625@gmail.com', 'Abdullah Al Mahmud', 'Lutfur Naher', '01936085430', '21232f297a57a5a743894a0e4a801fc3', '6', 'Commerce', NULL, '1', 'VALID', '2020-12-22 18:58:09', 'SSLCZ_TEST_5fe1ecace5adf', '2012221858180ES8CptaWb8kOSE', '1000.00', '897.37', '201222185818Ea8RSxn2fPKknLI', 'MASTER-City Bank', '9', '77.63', '9 Months - 7.5% FlexiBuy Commission', 'TRUST BANK, LTD.', '418117XXXXXX7814', 'TRUST BANK, LTD.', 'VISA', 'Bangladesh', 'BD', 'DONE', '2020-12-22 18:58:20', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
