-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 07:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universityadmissionproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `authoritysignaturetable`
--

CREATE TABLE `authoritysignaturetable` (
  `id` int(11) NOT NULL,
  `authoritysignature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authoritysignaturetable`
--

INSERT INTO `authoritysignaturetable` (`id`, `authoritysignature`) VALUES
(17, './image/userImage/4723289125c95f3627b7c1.png'),
(18, './image/userImage/7085824505c95f41d03418.png'),
(19, './image/userImage/15897950425c95f46b74753.png');

-- --------------------------------------------------------

--
-- Table structure for table `departmenttable`
--

CREATE TABLE `departmenttable` (
  `id` int(6) UNSIGNED NOT NULL,
  `DEPname` varchar(30) DEFAULT NULL,
  `totalseat` int(30) DEFAULT NULL,
  `fillupseat` int(30) NOT NULL,
  `blankseat` int(30) NOT NULL,
  `startdate` varchar(50) DEFAULT NULL,
  `enddate` varchar(50) DEFAULT NULL,
  `admissionFee` varchar(50) DEFAULT NULL,
  `AdmissionExamDate` varchar(255) NOT NULL,
  `AdmissionResultDate` varchar(255) NOT NULL,
  `Admissionrexamtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmenttable`
--

INSERT INTO `departmenttable` (`id`, `DEPname`, `totalseat`, `fillupseat`, `blankseat`, `startdate`, `enddate`, `admissionFee`, `AdmissionExamDate`, `AdmissionResultDate`, `Admissionrexamtime`) VALUES
(30, 'CSE', 100, 1, 99, '2019-04-01', '2019-04-15', '350', '2019-05-20', '2019-05-25', 'BIST Campus , 10:00 am'),
(31, 'BBA', 180, 0, 180, '2019-04-15', '2019-04-25', '450', '2019-05-15', '2019-05-25', 'BIST Campus , 11:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `paymentTypeT` varchar(255) DEFAULT NULL,
  `AmountT` varchar(255) DEFAULT NULL,
  `statusT` varchar(255) DEFAULT NULL,
  `DateT` varchar(255) DEFAULT NULL,
  `CashReceptNumberT` varchar(255) DEFAULT NULL,
  `SenderNumberT` varchar(255) DEFAULT NULL,
  `MerchantNumberT` varchar(255) DEFAULT NULL,
  `ReferanceT` varchar(255) DEFAULT NULL,
  `CounterNumberT` varchar(255) DEFAULT NULL,
  `TrxidT` varchar(255) DEFAULT NULL,
  `varification` int(255) DEFAULT NULL,
  `user_match` int(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`id`, `name`, `paymentTypeT`, `AmountT`, `statusT`, `DateT`, `CashReceptNumberT`, `SenderNumberT`, `MerchantNumberT`, `ReferanceT`, `CounterNumberT`, `TrxidT`, `varification`, `user_match`, `department`) VALUES
(76, 'SMITH JOHNSON', 'Cash', '350', 'Already Paid', ' 2019/03/23 ', '56709845', '', '', '', '', '', 1, 86, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation`
--

CREATE TABLE `studentinformation` (
  `id` int(6) UNSIGNED NOT NULL,
  `hide_admisson_button_id` int(255) NOT NULL,
  `hiddennumber` int(255) NOT NULL,
  `Student_Account_Name` varchar(255) NOT NULL,
  `Student_Choice_department` varchar(255) NOT NULL,
  `NameI` varchar(255) DEFAULT NULL,
  `FatherNameI` varchar(255) DEFAULT NULL,
  `MotherNameI` varchar(255) DEFAULT NULL,
  `DateOfBirthI` varchar(255) DEFAULT NULL,
  `ReligionI` varchar(255) DEFAULT NULL,
  `NIDNoI` varchar(255) DEFAULT NULL,
  `BirthCertificateNumberI` varchar(255) DEFAULT NULL,
  `NationalityI` varchar(255) DEFAULT NULL,
  `GenderI` varchar(255) DEFAULT NULL,
  `EmailAddressI` varchar(255) DEFAULT NULL,
  `PhoneNumberI` varchar(255) DEFAULT NULL,
  `admit_match` int(255) NOT NULL,
  `admission_verification` int(255) NOT NULL,
  `PersonalImageI` varchar(255) DEFAULT NULL,
  `SSCexamNameSelectionI` varchar(255) DEFAULT NULL,
  `SSCExamBoardI` varchar(255) DEFAULT NULL,
  `SSCPassingYearI` varchar(255) DEFAULT NULL,
  `SSCInstituteNameI` varchar(255) DEFAULT NULL,
  `SSCboardRollI` varchar(255) DEFAULT NULL,
  `SSCRegistrationNumberI` varchar(255) DEFAULT NULL,
  `SSCExamGroupI` varchar(255) DEFAULT NULL,
  `SSCresultI` varchar(255) NOT NULL,
  `HSCexamNameSelectionI` varchar(255) DEFAULT NULL,
  `HSCExamBoardI` varchar(255) DEFAULT NULL,
  `HSCPassingYearI` varchar(255) DEFAULT NULL,
  `HSCInstituteNameI` varchar(255) DEFAULT NULL,
  `HSCboardRollI` varchar(255) DEFAULT NULL,
  `HSCRegistrationNumberI` varchar(255) DEFAULT NULL,
  `HSCExamGroupI` varchar(255) DEFAULT NULL,
  `HSCresultI` varchar(255) NOT NULL,
  `PresentAddressVillageHouseRoadI` varchar(255) DEFAULT NULL,
  `PresentAddressDistrictI` varchar(255) DEFAULT NULL,
  `PresentAddressUpozillaI` varchar(255) DEFAULT NULL,
  `PresentAddressPostOfficeI` varchar(255) DEFAULT NULL,
  `PresentAddressPostCodeI` varchar(255) DEFAULT NULL,
  `permanentAddressVillageHouseRoadI` varchar(255) DEFAULT NULL,
  `permanentAddressDistrictI` varchar(255) DEFAULT NULL,
  `permanentAddressUpozillaI` varchar(255) DEFAULT NULL,
  `permanentAddressPostOfficeI` varchar(255) DEFAULT NULL,
  `permanentAddressPostCodeI` varchar(255) DEFAULT NULL,
  `understand1stcheckboxI` varchar(255) DEFAULT NULL,
  `submition2ndcheckboxI` varchar(255) DEFAULT NULL,
  `StudentSignatureI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinformation`
--

INSERT INTO `studentinformation` (`id`, `hide_admisson_button_id`, `hiddennumber`, `Student_Account_Name`, `Student_Choice_department`, `NameI`, `FatherNameI`, `MotherNameI`, `DateOfBirthI`, `ReligionI`, `NIDNoI`, `BirthCertificateNumberI`, `NationalityI`, `GenderI`, `EmailAddressI`, `PhoneNumberI`, `admit_match`, `admission_verification`, `PersonalImageI`, `SSCexamNameSelectionI`, `SSCExamBoardI`, `SSCPassingYearI`, `SSCInstituteNameI`, `SSCboardRollI`, `SSCRegistrationNumberI`, `SSCExamGroupI`, `SSCresultI`, `HSCexamNameSelectionI`, `HSCExamBoardI`, `HSCPassingYearI`, `HSCInstituteNameI`, `HSCboardRollI`, `HSCRegistrationNumberI`, `HSCExamGroupI`, `HSCresultI`, `PresentAddressVillageHouseRoadI`, `PresentAddressDistrictI`, `PresentAddressUpozillaI`, `PresentAddressPostOfficeI`, `PresentAddressPostCodeI`, `permanentAddressVillageHouseRoadI`, `permanentAddressDistrictI`, `permanentAddressUpozillaI`, `permanentAddressPostOfficeI`, `permanentAddressPostCodeI`, `understand1stcheckboxI`, `submition2ndcheckboxI`, `StudentSignatureI`) VALUES
(113, 86, 86, 'SMITH JOHNSON', 'CSE', 'SMITH JOHNSON', 'SMITH KHAN', 'SMITHA BEGAM', '1994-09-25', 'Islam', '123456789012345', '123456789012345678', 'Bangladeshi', 'Male', 'SMITH@gmail.com', '01900000000', 86, 1, './image/StudentPersonalImageFolder/8170656515c95f81ebc6fd.jpg', 'SSC', 'Dhaka', '1234', 'Abc', '12345', '1234567890', 'Science', '5.00', 'HSC', 'Dhaka', '1234', 'Abc', '67890', '1098765432', 'Science', '5.00', 'abc def/123 , efgh , iopy-1234', 'qwer', 'tyui', 'qwegh', '1345', 'abc def/123 , efgh , iopy-1234', 'qwer', 'tyui', 'qwegh', '1345', 'I HAVE READ AND UNDERSTAND THIS FORM, AND I GIVE ALL OF MY TRUE INFORMATION.', 'I am fully determinded to SUBMIT This Admission Form.', './image/Student Signature/21157192385c95f81ebccd2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tableforcreateaccount`
--

CREATE TABLE `tableforcreateaccount` (
  `id` int(11) NOT NULL,
  `CusernameA` varchar(255) NOT NULL,
  `CemailA` varchar(255) NOT NULL,
  `CconfirmpasswordA` varchar(255) NOT NULL,
  `CimageurlA` varchar(255) NOT NULL,
  `UserFacebook` varchar(1000) NOT NULL,
  `Usertwitter` varchar(1000) NOT NULL,
  `UserGooglePlus` varchar(1000) NOT NULL,
  `UserType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableforcreateaccount`
--

INSERT INTO `tableforcreateaccount` (`id`, `CusernameA`, `CemailA`, `CconfirmpasswordA`, `CimageurlA`, `UserFacebook`, `Usertwitter`, `UserGooglePlus`, `UserType`) VALUES
(83, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', './image/userImage/20071671345c95efe36515e.png', '', '', '', 1),
(84, 'editor', 'editor@gmail.com', '5aee9dbd2a188839105073571bee1b1f', './image/userImage/13590655455c95f03dd3ca3.png', '', '', '', 2),
(85, 'contributor', 'contributor@gmail.com', 'bba2348631bbaef062b73dde6b38fdc1', './image/userImage/9290755125c95f0b8a286c.png', '', '', '', 3),
(86, 'student', 'student@gmail.com', 'cd73502828457d15655bbd7a63fb0bc8', './image/userImage/19543302435c95f18072b0b.png', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `updatelatestnews`
--

CREATE TABLE `updatelatestnews` (
  `id` int(6) UNSIGNED NOT NULL,
  `news` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatelatestnews`
--

INSERT INTO `updatelatestnews` (`id`, `news`) VALUES
(60, 'BIST à¦¤à§‡ à¦­à¦°à§à¦¤à¦¿ à¦¸à¦‚à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¯à§‡à¦•à§‹à¦¨à§‹ à¦ªà§à¦°à¦•à¦¾à¦° à¦¸à¦¹à¦¯à§‹à¦—à§€à¦¤à¦¾à¦° à¦œà¦¨à§à¦¯à§‡ à¦†à¦®à¦¾à¦•à§‡ à¦«à§‹à¦¨ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¦ƒ  019-XXXXXXXX');

-- --------------------------------------------------------

--
-- Table structure for table `updatesiteintroduction`
--

CREATE TABLE `updatesiteintroduction` (
  `id` int(6) UNSIGNED NOT NULL,
  `SiteIntroductionUPDATE` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatesiteintroduction`
--

INSERT INTO `updatesiteintroduction` (`id`, `SiteIntroductionUPDATE`) VALUES
(31, '-----Welcome to Our University -----');

-- --------------------------------------------------------

--
-- Table structure for table `updatesitename`
--

CREATE TABLE `updatesitename` (
  `id` int(6) UNSIGNED NOT NULL,
  `SiteNameUpdate` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatesitename`
--

INSERT INTO `updatesitename` (`id`, `SiteNameUpdate`) VALUES
(31, 'BIST');

-- --------------------------------------------------------

--
-- Table structure for table `updatesitetitle`
--

CREATE TABLE `updatesitetitle` (
  `id` int(6) UNSIGNED NOT NULL,
  `SiteTitle` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updatesitetitle`
--

INSERT INTO `updatesitetitle` (`id`, `SiteTitle`) VALUES
(16, 'BIST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authoritysignaturetable`
--
ALTER TABLE `authoritysignaturetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmenttable`
--
ALTER TABLE `departmenttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableforcreateaccount`
--
ALTER TABLE `tableforcreateaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatelatestnews`
--
ALTER TABLE `updatelatestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatesiteintroduction`
--
ALTER TABLE `updatesiteintroduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatesitename`
--
ALTER TABLE `updatesitename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatesitetitle`
--
ALTER TABLE `updatesitetitle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authoritysignaturetable`
--
ALTER TABLE `authoritysignaturetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `departmenttable`
--
ALTER TABLE `departmenttable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `studentinformation`
--
ALTER TABLE `studentinformation`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tableforcreateaccount`
--
ALTER TABLE `tableforcreateaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `updatelatestnews`
--
ALTER TABLE `updatelatestnews`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `updatesiteintroduction`
--
ALTER TABLE `updatesiteintroduction`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `updatesitename`
--
ALTER TABLE `updatesitename`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `updatesitetitle`
--
ALTER TABLE `updatesitetitle`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
