-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 06:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Images` varchar(120) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `AdminRegdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `Images`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Avik', 'Avik', 'C:\\Users\\User\\Documents\\SARBANI_PHOTOS\\AVISARU\\GalleryVault\\Unhide\\Avi Saru\\avik.jpg', 7407689662, 'avikbharati00@gmail.com', 'Test@123', '2021-04-25 18:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory_list`
--

CREATE TABLE `tblcategory_list` (
  `id` int(11) NOT NULL,
  `category` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory_list`
--

INSERT INTO `tblcategory_list` (`id`, `category`) VALUES
(1, 'PRIVATE'),
(2, 'GENERAL'),
(3, 'OUTDOOR'),
(4, 'EMERGENCY');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory_wise_fees`
--

CREATE TABLE `tblcategory_wise_fees` (
  `id` int(10) NOT NULL,
  `category` varchar(120) NOT NULL,
  `fees` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory_wise_fees`
--

INSERT INTO `tblcategory_wise_fees` (`id`, `category`, `fees`) VALUES
(1, 'PRIVATE', '1500.00'),
(2, 'GENERAL', '750.00'),
(3, 'OUTDOOR', '850.00'),
(4, 'EMERGENCY', '2200.00');

-- --------------------------------------------------------

--
-- Table structure for table `tblconsultation_list`
--

CREATE TABLE `tblconsultation_list` (
  `id` int(11) NOT NULL,
  `Consultation` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblconsultation_list`
--

INSERT INTO `tblconsultation_list` (`id`, `Consultation`) VALUES
(1, 'REGULAR OPD (CLEVELAND VISIT)'),
(2, 'TELE CONSULTATION (AUDIO - VISUAL)'),
(3, 'TELE CONSULTATION (TELE - PHONE)'),
(5, 'REGULAR INDOOR (CLEVELAND VISIT)');

-- --------------------------------------------------------

--
-- Table structure for table `tbldate`
--

CREATE TABLE `tbldate` (
  `ID` int(10) NOT NULL,
  `DoctorName` varchar(120) NOT NULL,
  `DepartmentName` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Day` varchar(3) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldate`
--

INSERT INTO `tbldate` (`ID`, `DoctorName`, `DepartmentName`, `Date`, `Day`, `PostingDate`) VALUES
(1, 'abc', 'abc', '2021-04-09', 'fri', '2021-04-23 16:42:14'),
(2, 'abc', 'bde', '2021-04-22', 'thu', '2021-04-24 14:48:32'),
(3, 'dr rahul singh', 'cardio', '2021-05-17', 'mon', '2021-05-03 16:11:19'),
(4, 'Bubi ', 'DENTAL', '2021-06-12', 'Wed', '2021-06-11 18:42:37'),
(5, 'Bubi ', 'HEAD & NECK SURGERY', '2021-06-13', 'Sun', '2021-06-11 18:46:01'),
(6, 'Bubi ', 'NEUROMEDICINE', '2021-06-25', 'Thu', '2021-06-11 18:46:21'),
(7, 'Rose', 'E.N.T', '2021-07-18', 'Fri', '2021-06-15 19:03:41'),
(8, 'Rose', 'E.N.T', '2021-06-24', 'Wed', '2021-06-15 19:04:12'),
(9, 'Jack', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', '2021-06-20', 'Mon', '2021-06-15 19:05:53'),
(10, 'Jack', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', '2021-06-27', 'Sun', '2021-06-15 19:06:02'),
(11, 'Mary', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', '2021-06-20', 'Wed', '2021-06-15 19:06:59'),
(12, 'Mary', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', '2021-06-22', 'Thu', '2021-06-15 19:07:05'),
(13, 'Sayoni', 'CARDIOLOGY', '2021-06-26', 'Wed', '2021-06-15 19:07:34'),
(14, 'Sayoni', 'CARDIOLOGY', '2021-07-11', 'Mon', '2021-06-15 19:07:42'),
(15, 'Sherlock Homes', 'CARDIOTHORACIC SURGERY', '2021-07-11', 'Fri', '2021-06-15 19:08:10'),
(16, 'Sherlock Homes', 'CARDIOTHORACIC SURGERY', '2021-07-23', 'Fri', '2021-06-15 19:08:25'),
(17, 'John Watson', 'DENTAL', '2021-07-02', 'Wed', '2021-06-15 19:08:56'),
(18, 'John Watson', 'DENTAL', '2021-06-19', 'Fri', '2021-06-15 19:09:04'),
(19, 'Bomkesh Bokshi', 'DERMATOLOGY', '2021-07-11', 'Thu', '2021-06-15 19:09:37'),
(20, 'Bomkesh Bokshi', 'DERMATOLOGY', '2021-07-04', 'Mon', '2021-06-15 19:09:47'),
(21, 'Ajit Bandhopadhya', 'DEVELOPMENTAL PAEDIATRICS', '2021-07-18', 'Sat', '2021-06-15 19:10:18'),
(22, 'Ajit Bandhopadhya', 'DEVELOPMENTAL PAEDIATRICS', '2021-07-20', 'Mon', '2021-06-15 19:10:29'),
(23, 'Ajit Bandhopadhya', 'DEVELOPMENTAL PAEDIATRICS', '2021-07-11', 'Thu', '2021-06-16 20:04:33'),
(24, 'Ajit Bandhopadhya', 'DEVELOPMENTAL PAEDIATRICS', '2021-07-28', 'Wed', '2021-06-16 20:06:21'),
(25, 'Ajit Bandhopadhya', 'DEVELOPMENTAL PAEDIATRICS', '2021-08-29', 'Sun', '2021-06-16 20:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbldept_list`
--

CREATE TABLE `tbldept_list` (
  `dept_id` int(10) NOT NULL,
  `department_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldept_list`
--

INSERT INTO `tbldept_list` (`dept_id`, `department_name`) VALUES
(1, 'CARDIAC ARRYHYTHMIAS AND PACEMAKER'),
(2, 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC'),
(3, 'CARDIOLOGY'),
(4, 'CARDIOTHORACIC SURGERY'),
(5, 'DENTAL'),
(6, 'DERMATOLOGY'),
(7, 'DEVELOPMENTAL PAEDIATRICS'),
(8, 'E.N.T'),
(9, 'ENDOCRINE SURGERY'),
(10, 'ENDOCRINOLOGY'),
(11, 'GASTROENTEROLOGY'),
(12, 'GERIATRICS'),
(13, 'GYNAECOLOGIC ONCOLOGY'),
(14, 'GYNAECOLOGY'),
(15, 'HAEMATOLOGY'),
(16, 'HAND SURGERY'),
(17, 'HEAD & NECK SURGERY'),
(18, 'HEPATOLOGY'),
(19, 'INFECTIOUS DISEASES'),
(20, 'INFERTILITY'),
(21, 'MEDICAL GENETICS'),
(22, 'MEDICAL ONCOLOGY'),
(23, 'MEDICINE'),
(24, 'NEPHROLOGY'),
(25, 'NEUROMEDICINE'),
(26, 'NEUROSURGERY'),
(27, 'OBSTETRICS (PREGNANCY)'),
(28, 'ORTHOPAEDICS'),
(29, 'PAEDIATRIC DERMATOLOGY'),
(30, 'PAEDIATRIC ENDOCRINOLOGY'),
(31, 'PAEDIATRIC NEPHROLOGY'),
(32, 'PAEDIATRIC NEUROLOGY'),
(33, 'PAEDIATRIC ONCOLOGY'),
(34, 'PAEDIATRIC ORTHOPAEDICS'),
(35, 'PAEDIATRIC SURGERY'),
(36, 'PAEDIATRICS'),
(37, 'PLASTIC SURGERY'),
(38, 'PMR'),
(39, 'PULMONARY MEDICINE'),
(40, 'RADIATION ONCOLOGY'),
(41, 'RESPIRATORY MEDICINE'),
(42, 'RHEUMATOLOGY'),
(43, 'SPINAL DISORDERS SURGERY'),
(44, 'SURGERY'),
(45, 'UROLOGY'),
(46, 'VASCULAR SURGERY');

-- --------------------------------------------------------

--
-- Table structure for table `tbldept_wise_clinic`
--

CREATE TABLE `tbldept_wise_clinic` (
  `clinic_id` int(10) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `clinic` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldept_wise_clinic`
--

INSERT INTO `tbldept_wise_clinic` (`clinic_id`, `department_name`, `clinic`) VALUES
(1, 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER CLINIC'),
(2, 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC', 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC'),
(3, 'CARDIOLOGY', 'CARDIOLOGY 1'),
(4, 'CARDIOLOGY', 'CARDIOLOGY 2'),
(5, 'CARDIOLOGY', 'CARDIOLOGY 3'),
(6, 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 1'),
(7, 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 2'),
(8, 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3'),
(9, 'DENTAL', 'DENTAL I'),
(10, 'DENTAL', 'DENTAL II'),
(11, 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES'),
(12, 'DERMATOLOGY', 'DERMATOLOGY 1'),
(13, 'DERMATOLOGY', 'DERMATOLOGY 2'),
(14, 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS'),
(15, 'E.N.T', 'AUDIO VESTIBULAR DISEASE & ENT'),
(16, 'E.N.T', 'EAR AND HEARING CLINIC'),
(17, 'E.N.T', 'E.N.T 1'),
(18, 'E.N.T', 'E.N.T 1 TUMOUR CLINIC'),
(19, 'E.N.T', 'E.N.T 2'),
(20, 'E.N.T', 'E.N.T 3'),
(21, 'E.N.T', 'E.N.T 4'),
(22, 'E.N.T', 'E.N.T 5'),
(23, 'E.N.T', 'E.N.T AIRWAY CLINIC'),
(24, 'E.N.T', 'NOSE AND SINUS CLINIC'),
(25, 'E.N.T', 'PAEDIATRICS E.N.T'),
(26, 'E.N.T', 'VOICE CLINIC'),
(27, 'ENDOCRINE SURGERY', 'ENDOCRINE SURGERYENDOCRINOLOGY'),
(28, 'ENDOCRINOLOGY', 'DIABETIC ENDO'),
(29, 'ENDOCRINOLOGY', 'ENDOCRINOLOGY'),
(30, 'GASTROENTEROLOGY ', 'GASTROENTEROLOGY CLINIC'),
(31, 'GERIATRICS', 'GERIATRIC CLINIC'),
(32, 'GYNAECOLOGIC ONCOLOGY', 'GYN ONCOLOGY'),
(33, 'GYNAECOLOGY', 'OBST & GYNE 2'),
(34, 'GYNAECOLOGY', 'OBSTETRIC AND GYNACOLOGY 1 NEW'),
(35, 'HAEMATOLOGY', 'HAEMATOLOGY'),
(36, 'HAEMATOLOGY', 'PAEDIATRIC LYMPHOMA AND LEUKEMIA CLINIC'),
(37, 'HAND SURGERY', 'HAND SURGERY'),
(38, 'HEAD & NECK SURGERY', 'HEAD AND NECK SURGERY 1'),
(39, 'HEAD & NECK SURGERY', 'HEAD AND NECK SURGERY II'),
(40, 'HEPATOLOGY', 'HEPATOLOGY'),
(41, 'INFECTIOUS DISEASES', 'INFECTIOUS DISEASES REFERRAL CLINIC'),
(42, 'INFERTILITY', 'REPRODUCTIVE MEDICINE'),
(43, 'MEDICAL GENETICS', 'MEDICAL GENETICS'),
(44, 'MEDICAL ONCOLOGY', 'MEDICAL ONCOLOGY'),
(45, 'MEDICINE', 'MEDICINE 1'),
(46, 'MEDICINE', 'MEDICINE 2'),
(47, 'MEDICINE', 'MEDICINE 3'),
(48, 'MEDICINE', 'MEDICINE 4'),
(49, 'MEDICINE', 'MEDICINE 5'),
(50, 'MEDICINE', 'EARLIEST AVAILABILITY IN MEDICINE'),
(51, 'NEPHROLOGY', 'CHILD KIDNEY CARE CLINIC'),
(52, 'NEPHROLOGY', 'NEPHROLOGY 1'),
(53, 'NEPHROLOGY', 'NEPHROLOGY 2'),
(54, 'NEUROMEDICINE', 'NEUROLOGY'),
(55, 'NEUROSURGERY', 'NEUROSURGERY 1'),
(56, 'NEUROSURGERY', 'NEUROSURGERY 2'),
(57, 'NEUROSURGERY', 'NEUROSURGERY 3'),
(58, 'NEUROSURGERY', 'EARLIEST AVAILABILITY IN NEUROSURGERY'),
(59, 'OBSTETRICS (PREGNANCY)', 'OBST & GYNE 3'),
(60, 'OBSTETRICS (PREGNANCY)', 'OBST & GYNE 4'),
(61, 'OBSTETRICS (PREGNANCY)', 'OBST & GYNE 5'),
(62, 'ORTHOPAEDICS', 'ORTHOPAEDICS 1'),
(63, 'ORTHOPAEDICS', 'ORTHOPAEDICS 2'),
(64, 'ORTHOPAEDICS', 'ORTHOPAEDICS 3'),
(65, 'PAEDIATRIC DERMATOLOGY', 'PAEDIATRIC DERMATOLOGY'),
(66, 'PAEDIATRIC ENDOCRINOLOGY', 'PAEDIATRIC ENDOCRINOLOGY AND METABOLISM'),
(67, 'PAEDIATRIC NEPHROLOGY', 'PAEDIATRIC NEPH'),
(68, 'PAEDIATRIC NEUROLOGY', 'PAEDIATRIC NEUROLOGY CLINIC'),
(69, 'PAEDIATRIC ONCOLOGY', 'PAEDIATRIC ONCOLOGY'),
(70, 'PAEDIATRIC ORTHOPAEDICS', 'PAEDIATRIC ORTHO'),
(71, 'PAEDIATRIC SURGERY', 'PAEDIATRIC SUR 1'),
(72, 'PAEDIATRIC ONCOLOGY', 'PAEDIATRIC SUR 2'),
(73, 'PAEDIATRIC SURGERY', 'PAEDIATRIC UROLOGY'),
(74, 'PAEDIATRICS', 'CHILD HEALTH 1'),
(75, 'PAEDIATRICS', 'CHILD HEALTH 2'),
(76, 'PAEDIATRICS', 'CHILD HEALTH 3'),
(77, 'PAEDIATRICS', 'PAEDIATRIC INFECTIOUS DISEASE REFERRAL CLINIC'),
(78, 'PAEDIATRICS', 'PAEDIATRIC RESPIRATORY CLINIC'),
(79, 'PAEDIATRICS', 'PAEDIATRIC RHEUMATOLOGY CLINIC'),
(80, 'PLASTIC SURGERY', 'PLASTIC SURGERY 1'),
(81, 'PLASTIC SURGERY', 'PLASTIC SURGERY 2'),
(82, 'PMR', 'PMR 1'),
(83, 'PMR', 'PMR 2'),
(84, 'PULMONARY MEDICINE', 'PULMONARY MEDICINE'),
(85, 'RADIATION ONCOLOGY', 'RT 1'),
(86, 'RADIATION ONCOLOGY', 'RT 2'),
(87, 'RADIATION ONCOLOGY', 'RT 3'),
(88, 'RESPIRATORY MEDICINE', 'RESPIRATORY MEDICINE'),
(89, 'RHEUMATOLOGY', 'RHEUMATOLOGY CLINIC'),
(90, 'SPINAL DISORDERS SURGERY', 'SPINAL DISORDERS SURGERY'),
(91, 'SURGERY', 'SURGERY 1'),
(92, 'SURGERY', 'SURGERY 2'),
(93, 'SURGERY', 'SURGERY 3'),
(94, 'SURGERY', 'SURGERY 4'),
(95, 'SURGERY', 'SURGERY II (COLORECTAL)'),
(96, 'UROLOGY', 'ADOLESCENT AND PEDIATRIC UROLOGY'),
(97, 'UROLOGY', 'STONE CLINIC'),
(98, 'UROLOGY', 'URO-ONCOLOGY CLINIC'),
(99, 'UROLOGY', 'UROLOGY 1'),
(100, 'UROLOGY', 'UROLOGY 2'),
(101, 'UROLOGY', 'UROLOGY 3'),
(102, 'UROLOGY', 'UROLOGY 4'),
(103, 'VASCULAR SURGERY', 'VASCULAR SURGERY'),
(104, 'E.N.T', 'E.N.T 3 EAR SURGERY');

-- --------------------------------------------------------

--
-- Table structure for table `tbldept_wise_dctr`
--

CREATE TABLE `tbldept_wise_dctr` (
  `id` int(10) NOT NULL,
  `Department_Name` varchar(255) NOT NULL,
  `Doctor_Name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldept_wise_dctr`
--

INSERT INTO `tbldept_wise_dctr` (`id`, `Department_Name`, `Doctor_Name`) VALUES
(1, 'DEVELOPMENTAL PAEDIATRICS', 'Bubi '),
(17, 'E.N.T', 'Rose'),
(18, 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', 'Jack'),
(19, 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC', 'Mary'),
(20, 'CARDIOLOGY', 'Sayoni'),
(21, 'CARDIOTHORACIC SURGERY', 'Sherlock Homes'),
(22, 'DENTAL', 'John Watson'),
(23, 'DERMATOLOGY', 'Bomkesh Bokshi'),
(24, 'DEVELOPMENTAL PAEDIATRICS', 'Ajit Bandhopadhya');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocapprove`
--

CREATE TABLE `tbldocapprove` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `DOB` date NOT NULL,
  `Department_name` varchar(255) NOT NULL,
  `Nationality` varchar(120) NOT NULL,
  `Religion` varchar(120) NOT NULL,
  `Mstatus` varchar(120) NOT NULL,
  `Gender` varchar(120) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `City` varchar(120) NOT NULL,
  `District` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `Mobilenumber` bigint(10) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Qualification_file` varchar(255) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Doctor_RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocapprove`
--

INSERT INTO `tbldocapprove` (`ID`, `FullName`, `Email`, `DOB`, `Department_name`, `Nationality`, `Religion`, `Mstatus`, `Gender`, `Address`, `Pincode`, `City`, `District`, `State`, `Mobilenumber`, `Images`, `Qualification_file`, `Password`, `Doctor_RegDate`) VALUES
(1, 'rahul@gmail.com', '', '2021-04-28', '', '', '', '', 'ghdh', 'Ghoshahatad', 713130, 'katwa', 'Bardhaman', 'West Bengal', 3456, '72acded3acd45e4c8b6ed680854b8ab11619971433.jpg', '', '698d51a19d8a121ce581499d7b701668', '2021-05-31 18:30:00'),
(2, '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', '2021-05-31 18:30:00'),
(3, 'Sarbani Chatterjee', '', '2021-06-23', '', 'Indian', 'Hindu', 'Single', 'Female', '20th Street Quater no 21', 713205, 'Durgapur', 'Burdwan', 'West Bengal', 917047719127, 'f3e3e8348ea00ea848b642bbc60aa59d1622563395.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-31 18:30:00'),
(4, 'Pintu', '', '2009-06-09', '', 'Indian', 'Hindu', 'Single', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', 1239874562, 'f3e3e8348ea00ea848b642bbc60aa59d1622563532.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-31 18:30:00'),
(5, 'Rita', 'rita@gmail.com', '2016-06-07', '', 'Indian', 'Hindu', 'Single', 'Female', 'City centre', 713216, 'Durgapur', 'Burdwan', 'West Bengal', 9988774455, 'ba6cd0de071e0abde1a3b95dba7316f51622566564.jpg', '', '81dc9bdb52d04dc20036dbd8313ed055', '2021-05-31 18:30:00'),
(6, 'Sunil', 'sunil@gmail.com', '2015-10-21', '', 'Indian', 'Hindu', 'Single', 'Male', 'Kalikapur', 70001, 'Kolkata', 'Burdwan', 'West Bengal', 9874569685, 'ba6cd0de071e0abde1a3b95dba7316f51622567010.jpg', '', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-01 17:03:30'),
(7, 'SK Saha', 'saha@gmail.com', '1996-06-04', '', 'Indian', 'Hindu', 'Single', 'Male', 'City centre', 713216, 'Durgapur', 'Burdwan', 'West Bengal', 9985447501, 'fad5dd135a0671a7d3f4596a15b496231622567534.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-01 17:12:14'),
(8, 'Bubi ', 'bubi@gmail.com', '1999-09-02', 'DEVELOPMENTAL PAEDIATRICS', 'Indian', 'Hindu', 'Single', 'Male', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', 9922014788, 'b8fa6b0293da044865021425d0d015791622576526.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-03 16:52:17'),
(9, 'Rose', 'rose@gmail.com', '1998-06-10', 'E.N.T', 'Indian', 'Hindu', 'Single', 'Female', '20/21 Newton', 713205, 'durgapur', 'Burdwan', 'West Bengal', 7744856974, '3ff262c7d4cb5483724a4ff16743e1e31623596828.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:07:08'),
(11, 'Jack', 'jack@gmail.com', '1974-05-14', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', 'Indian', 'Hindu', 'Married', 'Male', 'Barasaat', 700121, 'Kolkata', 'Burdwan', 'West Bengal', 7484478965, '0a3839c38ec01e212f4107ba35fce5431623597383.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:16:23'),
(12, 'Mary', 'mary@gmail.com', '2006-09-13', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', 'Indian', 'Hindu', 'Married', 'Female', 'MAMC', 713205, 'Durgapur', 'Burdwan', 'West Bengal', 1245789865, '4f401f219759fc590389e47e3598cc001623597519.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:18:39'),
(13, 'Sayoni', 'sayoni@gmail.com', '2006-05-24', 'CARDIOLOGY', 'Indian', 'Muslim', 'Married', 'Female', 'Bidhannagar', 713209, 'Durgapur', 'Burdwan', 'West Bengal', 2584613791, '2adb3519192bebf0dc75f06fd13eefb41623597595.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:19:55'),
(14, 'Sherlock Homes', 'homes@gmail.com', '1963-06-26', 'CARDIOTHORACIC SURGERY', 'American', 'Christian', 'Married', 'Male', '88 Station Road', 533580, 'Portsoken', 'London', 'England', 3322147014, 'f04eca437340f033b08a6620a15a6b051623598144.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:29:04'),
(15, 'John Watson', 'watson@gmail.com', '1988-10-20', 'DENTAL', 'American', 'Christian', 'Married', 'Male', 'Baker Street ', 221012, 'London', 'London', 'England', 9911234785, '08ccae127df6bf05ad7c3574701be16a1623598467.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:34:27'),
(16, 'Bomkesh Bokshi', 'bomkesh@gmail.com', '1960-06-15', 'DERMATOLOGY', 'Indian', 'Hindu', 'Married', 'Male', 'Mahatma Gandhi Road', 700001, 'Kolkata', 'Burdwan', 'West Bengal', 9988112247, '2016b4c26da07d5a0ffe73856881450a1623598776.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:39:36'),
(17, 'Ajit Bandhopadhya', 'ajit@gmail.com', '1964-05-27', 'DEVELOPMENTAL PAEDIATRICS', 'Indian', 'Hindu', 'Single', 'Male', 'Mahatma Gandhi Road', 700001, 'Kolkata', 'Burdwan', 'West Bengal', 9977458712, 'e3ef9eb6d3cb72052d75c91428aa43f91623599056.jpg', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-13 15:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicines`
--

CREATE TABLE `tblmedicines` (
  `ID` int(100) NOT NULL,
  `MedName` varchar(120) NOT NULL,
  `Medcompany` varchar(120) NOT NULL,
  `Medcomposition` varchar(120) NOT NULL,
  `Medtype` varchar(120) NOT NULL,
  `Tablet` int(100) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicines`
--

INSERT INTO `tblmedicines` (`ID`, `MedName`, `Medcompany`, `Medcomposition`, `Medtype`, `Tablet`, `Price`, `Image`) VALUES
(1, 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, '2000.00', ''),
(2, 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, '200.00', ''),
(3, 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, '100.00', ''),
(4, 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, '1000.00', ''),
(5, 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, '100.00', ''),
(6, 'zincovit', 'apex pharma', 'potol', 'multivitamin', 15, '100.00', ''),
(7, 'Pan 40', 'Pan', 'alu and piyaz', 'Acidity', 40, '120.00', ''),
(8, 'Paracetamol', 'Steroid', 'Protien', 'Pain killer', 20, '100.00', ''),
(9, 'Ivermectin', 'apex pharma', 'steroid', 'Pain killer', 50, '400.00', ''),
(10, 'Vitamin B', 'B Capsule', 'Protien & Vitamin', 'Vitamin', 30, '100.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `id` int(10) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `DOB` date NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Occupation` varchar(150) NOT NULL,
  `Gname` varchar(120) NOT NULL,
  `Gender` varchar(120) NOT NULL,
  `Mstatus` varchar(120) NOT NULL,
  `Religion` varchar(120) NOT NULL,
  `Address` mediumtext NOT NULL,
  `Pincode` int(10) NOT NULL,
  `City` varchar(120) NOT NULL,
  `District` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `Mobilenumber` bigint(10) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Password` varchar(120) NOT NULL,
  `Pregdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`id`, `FullName`, `Email`, `DOB`, `Nationality`, `Occupation`, `Gname`, `Gender`, `Mstatus`, `Religion`, `Address`, `Pincode`, `City`, `District`, `State`, `Mobilenumber`, `Images`, `Password`, `Pregdate`) VALUES
(1, '', '', '2021-04-01', '0', '0', '0', 'ghdh', 'fghd', 'avikbharati00@gmail.com', 'Ghoshahatad', 713130, 'katwa', 'gfhdg', 'West Bengal', 7407689662, '', '202cb962ac59075b964b07152d234b70', '2021-04-18 16:23:20'),
(2, '', '', '2021-04-09', 'f', 'BHARATI', 'cfhdf', 'ghdh', 'fghd', 'manoj@gmail.com', 'Ghoshahatad', 713130, 'katwa', 'Bardhaman', 'West Bengal', 789, '', '698d51a19d8a121ce581499d7b701668', '2021-04-18 17:37:56'),
(3, '', '', '2021-04-21', 'f', 'BHARATI', 'cfhdf', '', '', 'payel2@gmail.com', 'MAMC', 713205, 'Durgapur', 'Bardhaman', 'West Bengal', 110, '', '698d51a19d8a121ce581499d7b701668', '2021-04-22 16:39:47'),
(4, 'Sarbani', 'Single', '2002-02-05', 'Indian', 'Student', 'Pintu', 'Female', 'Hindu', 'saru@gmail.com', '20th Street Quater no 21', 713205, 'Durgapur', 'Burdwan', 'West Bengal', 9876541478, 'ea36668f5889734185f1b2f965630d6e1621351052.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-18 15:17:32'),
(5, 'Kiva Itarahb', 'kiva@gmail.com', '1985-05-01', 'Indian', 'Student', 'Asish ', 'Male', 'Single', 'Hindu', 'Rajarhat', 710010, 'Kolkata', 'Burdwan', 'West Bengal', 9874563214, '09a1c7354bcc9e18f31f8155365447251621351297.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-18 15:21:37'),
(6, 'Kaberi Chatterjee', 'kaberi@gmail.com', '1999-12-09', 'Indian', 'Student', 'Pintu', 'Female', 'Single', 'Hindu', '20/21 Newton Avenue', 713205, 'Durgapur', 'Burdwan', 'West Bengal', 7047719127, 'bc427326714664a9bd6acfe7fde2a0e01622486764.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-31 18:46:04'),
(7, 'Sabyasachi Chakraborty', 'mir@gmail.com', '1951-10-24', 'Indian', 'Private investigator', 'Tapesh Ranjan Bose', 'Male', 'Married', 'Hindu', 'Rajani Sen Road', 700029, 'Kolkata', 'Burdwan', 'West Bengal', 9874221470, '456f82fe914e2404708323a4df0594061623782916.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-15 18:48:36'),
(8, 'Prodosh Chandra Mitra', 'prodosh@gmail.com', '1948-10-14', 'Indian', 'Private investigator', 'Jaykrishna Mitra', 'Male', 'Married', 'Hindu', 'Mahatma Gandhi Road', 700001, 'Kolkata', 'Burdwan', 'West Bengal', 9974442574, '2ef1879509eb380f6b6f16774f5a271a1623958776.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-17 19:39:36'),
(9, 'Amartya Chakraborty', 'anu@gmail.com', '2010-06-10', 'Indian', 'Student', 'Anupam Chakraborty', 'Male', 'Single', 'Hindu', 'Sepco', 713205, 'Durgapur', 'Burdwan', 'West Bengal', 9914702587, '5d639f12d7561def39388865ce4d183b1624202242.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-20 15:17:22'),
(10, 'AVIK fhgjg BHARATI', 'avikbharati00@gmail.com', '2021-07-16', 'fhgjg', 'BHARATI', 'cfhdf', 'Male', 'ghd', 'fghd', 'Ghoshahatad', 713130, 'katwa', 'gfhdg', 'West Bengal', 740768966, '72acded3acd45e4c8b6ed680854b8ab11625509060.jpg', '698d51a19d8a121ce581499d7b701668', '2021-07-05 18:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient_payment`
--

CREATE TABLE `tblpatient_payment` (
  `Payment_id` int(10) NOT NULL,
  `Appointment_No` int(120) NOT NULL,
  `Invoice_No` int(120) NOT NULL,
  `Patient_id` int(10) NOT NULL,
  `Patient_Name` varchar(120) NOT NULL,
  `Guardian_Name` varchar(120) NOT NULL,
  `Consultation` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Department_name` varchar(200) NOT NULL,
  `Clinic` varchar(120) NOT NULL,
  `Doctor_name` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Mobile_no` varchar(120) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(120) NOT NULL,
  `State` varchar(120) NOT NULL,
  `Pincode` int(120) NOT NULL,
  `Appointment_Date` date DEFAULT NULL,
  `Appointment_Day` varchar(120) NOT NULL,
  `Cardname` varchar(120) NOT NULL,
  `Cardnumber` varchar(120) NOT NULL,
  `Expdate` varchar(120) NOT NULL,
  `Cvv` int(10) NOT NULL,
  `Payment_GenDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatient_payment`
--

INSERT INTO `tblpatient_payment` (`Payment_id`, `Appointment_No`, `Invoice_No`, `Patient_id`, `Patient_Name`, `Guardian_Name`, `Consultation`, `Category`, `Department_name`, `Clinic`, `Doctor_name`, `Email`, `Mobile_no`, `Address`, `City`, `State`, `Pincode`, `Appointment_Date`, `Appointment_Day`, `Cardname`, `Cardnumber`, `Expdate`, `Cvv`, `Payment_GenDate`) VALUES
(1, 676048969, 229341487, 5, 'Kiva Itarahb', '', '', '', '', '', '', 'kiva@gmail.com', '9874563214', 'Rajarhat', 'Kolkata', 'West Bengal', 710010, NULL, '', '?嬼?hP??2??r<', '3', '8?P?N??#r?R??]6', 0, '2021-06-14 19:18:46'),
(2, 676048969, 366594408, 5, 'Kiva Itarahb', '', '', '', '', '', '', 'kiva@gmail.com', '9874563214', 'Rajarhat', 'Kolkata', 'West Bengal', 710010, NULL, '', '_\nF.\n??2F}??L?V???B??j?v?+?X???', '0', 'h??|?]?*%???i', 0, '2021-06-14 19:22:41'),
(3, 896009985, 186017702, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'DERMATOLOGY', '', 'Bomkesh Bokshi', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', 'S???T??1???VF?n?', '??i\0i?&?\'?Kp{??&???B??j?v?+?X???', 'h??|?]?*%???i', 0, '2021-06-15 18:50:43'),
(4, 628444249, 119398309, 6, 'Kaberi Chatterjee', 'Pintu', '', '', 'CARDIOTHORACIC SURGERY', '', 'Sherlock Homes', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, NULL, '', '9r}[??~H?P?2??o?', 'l???^>??̧b(v?sR???B??j?v?+?X???', '??n???????\'???', 0, '2021-06-16 19:56:24'),
(5, 630358331, 793843171, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'DERMATOLOGY', '', 'Bomkesh Bokshi', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, NULL, '', 'h-&\0??<,??̢pD??', '???rF?$HNr?޷??B??j?v?+?X???', '[????s??a?]?4??', 0, '2021-06-17 20:37:18'),
(6, 630358331, 119395562, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'DERMATOLOGY', '', 'Bomkesh Bokshi', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, NULL, '', '9r}[??~H?P?2??o?', '7|???)??[?p{d??????B??j?v?+?X???', '??;uB?&??T?Ġ', 0, '2021-06-17 20:40:25'),
(7, 0, 387457806, 8, '', '', '', '', 'ENDOCRINE SURGERY', '', '', '', '', '', '', '', 0, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-18 18:07:50'),
(8, 0, 330929925, 8, '', '', '', '', 'ENDOCRINE SURGERY', '', '', '', '', '', '', '', 0, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-18 18:10:45'),
(9, 314518074, 0, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'CARDIOLOGY', '', '', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, NULL, '', '', '', '', 0, '2021-06-18 18:24:43'),
(10, 479929040, 692256622, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'DEVELOPMENTAL PAEDIATRICS', '', 'Dr. Ajit Bandhopadhya', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 18:39:09'),
(11, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-18 18:39:29'),
(12, 541674805, 198030938, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'DENTAL', '', 'Dr. John Watson', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-18 18:44:29'),
(13, 434639035, 838322605, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:03:56'),
(14, 434639035, 846216838, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:04:31'),
(15, 434639035, 380695637, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:05:06'),
(16, 434639035, 921512479, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:05:29'),
(17, 434639035, 575247810, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:05:42'),
(18, 434639035, 834957139, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:05:52'),
(19, 434639035, 709880352, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:06:02'),
(20, 434639035, 163120967, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:06:10'),
(21, 434639035, 622390934, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:06:44'),
(22, 434639035, 491144302, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:06:54'),
(23, 434639035, 180200157, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:07:10'),
(24, 434639035, 625376681, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:09:23'),
(25, 434639035, 233094742, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:10:06'),
(26, 434639035, 402743007, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:10:11'),
(27, 434639035, 734002905, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:10:38'),
(28, 434639035, 302228671, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:11:13'),
(29, 434639035, 900530136, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:11:25'),
(30, 434639035, 695508719, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:11:46'),
(31, 434639035, 497701859, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:12:22'),
(32, 434639035, 146411853, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:13:19'),
(33, 434639035, 817326131, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:13:51'),
(34, 434639035, 278434857, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:05'),
(35, 434639035, 539427920, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:15'),
(36, 434639035, 560301544, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:25'),
(37, 434639035, 295155813, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:36'),
(38, 434639035, 272413983, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:45'),
(39, 434639035, 575125393, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:14:53'),
(40, 434639035, 705675216, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:15:02'),
(41, 434639035, 679868589, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-18 19:15:12'),
(42, 434639035, 119111219, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'E.N.T', '', 'Dr. Rose', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-18 19:15:22'),
(43, 486014464, 574856984, 9, 'Amartya Chakraborty', 'Anupam Chakraborty', '', '', 'CARDIOLOGY', '', 'Dr. Sayoni', 'anu@gmail.com', '9914702587', 'Sepco', 'Durgapur', 'West Bengal', 713205, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 15:19:32'),
(44, 153214163, 567256993, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'CARDIOTHORACIC SURGERY', '', 'Dr. Sherlock Homes', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 15:26:48'),
(45, 563575006, 174696512, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'DERMATOLOGY', '', 'Dr. Bomkesh Bokshi', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 15:28:19'),
(46, 376392545, 725711852, 7, 'Sabyasachi Chakraborty', 'Tapesh Ranjan Bose', '', '', 'CARDIOLOGY', '', 'Dr. Sayoni', 'mir@gmail.com', '9874221470', 'Rajani Sen Road', 'Kolkata', 'West Bengal', 700029, NULL, '', '', '', '', 0, '2021-06-20 15:56:55'),
(47, 698763044, 188005049, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'DERMATOLOGY', '', 'Dr. Bomkesh Bokshi', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, '2021-07-11', 'Thu', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 16:27:11'),
(48, 337434651, 969308168, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'DEVELOPMENTAL PAEDIATRICS', '', 'Dr. Ajit Bandhopadhya', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, '2021-07-18', 'Sat', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 16:30:02'),
(49, 432271831, 869462773, 8, 'Prodosh Chandra Mitra', 'Jaykrishna Mitra', '', '', 'DEVELOPMENTAL PAEDIATRICS', '', 'Dr. Ajit Bandhopadhya', 'prodosh@gmail.com', '9974442574', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', 700001, '2021-07-18', 'Sat', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 16:36:52'),
(50, 858533561, 141556417, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'OUTDOOR', 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS', 'Dr. Ajit Bandhopadhya', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-18', 'Sat', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 16:42:47'),
(51, 876646759, 108006058, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:55:34'),
(52, 876646759, 707822111, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:56:27'),
(53, 876646759, 845933418, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:57:02'),
(54, 876646759, 546489765, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:57:59'),
(55, 876646759, 890837225, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:58:54'),
(56, 876646759, 431348572, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 16:59:31'),
(57, 876646759, 659540926, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '', '', '', 0, '2021-06-20 17:04:23'),
(58, 876646759, 208743400, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Dr. Bomkesh Bokshi', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Thu', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-20 17:05:25'),
(59, 404128304, 657131732, 6, 'Kaberi Chatterjee', 'Pintu', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3', 'Dr. Sherlock Homes', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Fri', '', '', '', 0, '2021-06-20 17:11:54'),
(60, 404128304, 507396474, 6, 'Kaberi Chatterjee', 'Pintu', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3', 'Dr. Sherlock Homes', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Fri', '', '', '', 0, '2021-06-20 17:14:11'),
(61, 404128304, 827359732, 6, 'Kaberi Chatterjee', 'Pintu', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3', 'Dr. Sherlock Homes', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Fri', '', '', '', 0, '2021-06-20 17:14:27'),
(62, 404128304, 826141060, 6, 'Kaberi Chatterjee', 'Pintu', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3', 'Dr. Sherlock Homes', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-11', 'Fri', '', '', '', 0, '2021-06-20 17:15:07'),
(63, 415676817, 412945563, 9, 'Amartya Chakraborty', 'Anupam Chakraborty', 'REGULAR INDOOR (CLEVELAND VISIT)', 'OUTDOOR', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'Dr. John Watson', 'anu@gmail.com', '9914702587', 'Sepco', 'Durgapur', 'West Bengal', 713205, '2021-07-02', 'Wed', '', '', '', 0, '2021-06-22 15:50:28'),
(64, 415676817, 328489253, 9, 'Amartya Chakraborty', 'Anupam Chakraborty', 'REGULAR INDOOR (CLEVELAND VISIT)', 'OUTDOOR', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'Dr. John Watson', 'anu@gmail.com', '9914702587', 'Sepco', 'Durgapur', 'West Bengal', 713205, '2021-07-02', 'Wed', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-22 15:50:53'),
(65, 350134157, 189477373, 6, 'Kaberi Chatterjee', 'Pintu', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'Dr. John Watson', 'kaberi@gmail.com', '7047719127', '20/21 Newton Avenue', 'Durgapur', 'West Bengal', 713205, '2021-07-02', 'Wed', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-06-22 17:21:25'),
(66, 690110870, 202535719, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:47:53'),
(67, 690110870, 279302474, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:50:01'),
(68, 690110870, 401769266, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:50:14'),
(69, 690110870, 132831456, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:50:28'),
(70, 690110870, 253603692, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:50:51'),
(71, 690110870, 864633691, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:51:10'),
(72, 690110870, 977022129, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:51:19'),
(73, 690110870, 862276893, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:51:58'),
(74, 690110870, 420044850, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:52:07'),
(75, 690110870, 861450158, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:52:14'),
(76, 690110870, 760341767, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:52:21'),
(77, 690110870, 442169635, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:52:57'),
(78, 690110870, 258124311, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:07'),
(79, 690110870, 483634411, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:17'),
(80, 690110870, 472027368, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:23'),
(81, 690110870, 277049871, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:29'),
(82, 690110870, 138379372, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:40'),
(83, 690110870, 255945299, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:47'),
(84, 690110870, 393096248, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:53:52'),
(85, 690110870, 493706664, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:54:52'),
(86, 690110870, 617844569, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:55:27'),
(87, 690110870, 171196903, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:55:35'),
(88, 690110870, 275981586, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:55:54'),
(89, 690110870, 128441869, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '', '', '', 0, '2021-07-06 08:56:01'),
(90, 690110870, 961394315, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-07-06 08:56:13'),
(91, 497780700, 733212157, 10, 'AVIK fhgjg BHARATI', 'cfhdf', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', 'CARDIOLOGY 1', 'Dr. Sayoni', 'avikbharati00@gmail.com', '740768966', 'Ghoshahatad', 'katwa', 'West Bengal', 713130, '2021-06-26', 'Wed', '???B??j?v?+?X???', '???B??j?v?+?X???', '???B??j?v?+?X???', 0, '2021-07-07 05:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `tblprescription`
--

CREATE TABLE `tblprescription` (
  `Prescription_id` int(10) NOT NULL,
  `Doctor_Name` varchar(120) NOT NULL,
  `Patient_Name` varchar(120) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Consultation` varchar(200) NOT NULL,
  `Category` varchar(120) NOT NULL,
  `Clinic` varchar(200) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Appointment_Day` varchar(120) NOT NULL,
  `Diseases` varchar(255) NOT NULL,
  `MedName` varchar(200) NOT NULL,
  `MedCompany` varchar(200) NOT NULL,
  `MedComposition` varchar(200) NOT NULL,
  `MedType` varchar(200) NOT NULL,
  `MedTablet` int(100) NOT NULL,
  `Periods` int(120) NOT NULL,
  `MedPrice` decimal(10,2) NOT NULL,
  `Prescription_GenDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprescription`
--

INSERT INTO `tblprescription` (`Prescription_id`, `Doctor_Name`, `Patient_Name`, `Department`, `Consultation`, `Category`, `Clinic`, `Appointment_Date`, `Appointment_Day`, `Diseases`, `MedName`, `MedCompany`, `MedComposition`, `MedType`, `MedTablet`, `Periods`, `MedPrice`, `Prescription_GenDate`) VALUES
(2, 'John Watson', 'Amartya Chakraborty', 'DENTAL', 'REGULAR INDOOR (CLEVELAND VISIT)', 'OUTDOOR', 'ORAL AND MAXILLOFACIAL SERVICES', '2021-07-02', 'Wed', 'Tooth Decay', 'Vitamin B', 'B Capsule', 'Protien & Vitamin', 'Vitamin', 30, 10, '100.00', '2021-06-25 17:05:28'),
(3, 'John Watson', 'Kaberi Chatterjee', 'DENTAL', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'ORAL AND MAXILLOFACIAL SERVICES', '2021-07-02', 'Wed', 'alu', 'zincovit', 'apex pharma', 'multivitamin', 'multivitamin', 15, 100000, '2000.00', '2021-06-26 12:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblslot_booking`
--

CREATE TABLE `tblslot_booking` (
  `ID` int(10) NOT NULL,
  `Appointment_no` int(120) NOT NULL,
  `Patient_Id` int(10) NOT NULL,
  `Patient_Name` varchar(120) NOT NULL,
  `consultation` varchar(120) NOT NULL,
  `category` varchar(120) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `clinic` varchar(120) NOT NULL,
  `Doctor_Name` varchar(120) NOT NULL,
  `Fees` decimal(10,2) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Appointment_Day` varchar(120) NOT NULL,
  `Appointment_GenDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblslot_booking`
--

INSERT INTO `tblslot_booking` (`ID`, `Appointment_no`, `Patient_Id`, `Patient_Name`, `consultation`, `category`, `department_name`, `clinic`, `Doctor_Name`, `Fees`, `Appointment_Date`, `Appointment_Day`, `Appointment_GenDate`) VALUES
(1, 0, 0, '', '', 'GENERAL', '', 'E.N.T 1 TUMOUR CLINIC', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(2, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'PRIVATE', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', 'EAR AND HEARING CLINIC', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(3, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'GENERAL', 'DENTAL', 'VASCULAR SURGERY', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(4, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'RESERVATION', 'DERMATOLOGY', 'E.N.T 3', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(5, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'GENERAL', 'DEVELOPMENTAL PAEDIATRICS', 'EAR AND HEARING CLINIC', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(6, 0, 0, 'Kiva Itarahb', '', '', '', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(7, 0, 0, 'Kiva Itarahb', '', '', '', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(8, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'RESERVATION', 'CARDIOLOGY', 'DENTAL II', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(9, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (ABC VISIT)', 'GENERAL', 'DENTAL', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(10, 0, 0, 'Kiva Itarahb', 'TELE CONSULTATION (TELE - PHONE)', 'RESERVATION', 'PLASTIC SURGERY', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(11, 0, 0, '', 'REGULAR OPD (ABC VISIT)', 'PRIVATE', 'ENDOCRINE SURGERY', 'THORACIC SUR 3', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(12, 0, 0, 'Kaberi Chatterjee', '', '', '', 'Select one', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(13, 0, 0, 'Kaberi Chatterjee', 'REGULAR OPD (CLEVELAND VISIT)', 'EMERGENCY', 'GYNAECOLOGY', 'CARDIOLOGY 2', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(14, 0, 0, 'Kaberi Chatterjee', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'E.N.T', 'E.N.T 2', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(578, 0, 0, 'Kaberi Chatterjee', 'TELE CONSULTATION (AUDIO - VISUAL)', 'PRIVATE', 'E.N.T', 'E.N.T 2', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(580, 0, 0, 'Kaberi Chatterjee', 'REGULAR INDOOR (CLEVELAND VISIT)', 'GENERAL', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(581, 0, 0, 'Kiva Itarahb', 'REGULAR INDOOR (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', 'CARDIOLOGY 1', 'Sayoni', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(582, 0, 0, 'Kiva Itarahb', 'TELE CONSULTATION (TELE - PHONE)', 'GENERAL', 'E.N.T', 'EAR AND HEARING CLINIC', 'Rose', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(583, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'E.N.T', 'E.N.T 1', 'Rose', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(584, 0, 0, 'Kiva Itarahb', 'REGULAR INDOOR (CLEVELAND VISIT)', 'RESERVATION', 'CARDIAC VALUE AND STRUCTURAL HEART DISEASE CLINIC', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(585, 259982504, 0, 'Kiva Itarahb', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'DENTAL', 'DENTAL I', 'John Watson', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(586, 676048969, 0, 'Kiva Itarahb', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER', 'CARDIAC ARRYHYTHMIAS AND PACEMAKER CLINIC', 'Select one', '0.00', '2021-06-27', '', '2021-06-15 20:10:51'),
(588, 896009985, 0, 'Sabyasachi Chakraborty', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'DERMATOLOGY', 'DERMATOLOGY 1', 'Bomkesh Bokshi', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(589, 102402183, 0, 'Sabyasachi Chakraborty', '', '', '', '', '', '0.00', '2021-06-16', '', '2021-06-15 18:30:00'),
(590, 940766490, 0, 'Sabyasachi Chakraborty', '', '', '', '', '', '0.00', '2021-06-19', 'Fri', '2021-06-15 20:00:34'),
(591, 0, 0, 'Kaberi Chatterjee', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'E.N.T', '', '', '0.00', '0000-00-00', '', '2021-06-16 18:22:29'),
(592, 769516652, 0, 'Kaberi Chatterjee', '', '', '', '', '', '0.00', '2021-07-18', 'Fri', '2021-06-16 18:24:11'),
(593, 856665480, 0, 'Kaberi Chatterjee', 'TELE CONSULTATION (TELE - PHONE)', 'GENERAL', 'DENTAL', '', '', '0.00', '2021-07-02', 'Wed', '2021-06-16 18:26:02'),
(594, 343044481, 0, 'Kaberi Chatterjee', 'REGULAR OPD (CLEVELAND VISIT)', 'RESERVATION', 'E.N.T', '', '', '0.00', '2021-07-18', 'Fri', '2021-06-16 18:35:38'),
(595, 165155234, 0, 'Kaberi Chatterjee', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'CARDIOTHORACIC SURGERY', '', '', '0.00', '0000-00-00', '', '2021-06-16 18:38:43'),
(596, 267308191, 0, 'Kaberi Chatterjee', '', '', '', '', '', '0.00', '0000-00-00', '', '2021-06-16 18:43:10'),
(597, 619464449, 0, 'Kaberi Chatterjee', 'REGULAR INDOOR (CLEVELAND VISIT)', 'EMERGENCY', 'DERMATOLOGY', '', '', '0.00', '0000-00-00', '', '2021-06-16 19:00:42'),
(598, 686686000, 0, 'Kaberi Chatterjee', 'TELE CONSULTATION (TELE - PHONE)', 'PRIVATE', 'CARDIOLOGY', '', '', '0.00', '0000-00-00', '', '2021-06-16 19:01:29'),
(599, 919449299, 0, 'Kaberi Chatterjee', 'TELE CONSULTATION (AUDIO - VISUAL)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', '', '', '0.00', '0000-00-00', '', '2021-06-16 19:36:30'),
(600, 628444249, 0, 'Kaberi Chatterjee', 'REGULAR OPD (CLEVELAND VISIT)', 'RESERVATION', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 1', 'Sherlock Homes', '0.00', '2021-07-11', 'Fri', '2021-06-16 19:55:00'),
(601, 630358331, 0, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'DERMATOLOGY', 'DERMATOLOGY 1', 'Bomkesh Bokshi', '750.00', '2021-07-11', 'Thu', '2021-06-17 19:58:54'),
(602, 0, 0, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (TELE - PHONE)', 'GENERAL', 'ENDOCRINE SURGERY', '', '', '0.00', '0000-00-00', '', '2021-06-18 14:12:23'),
(603, 544007950, 0, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (AUDIO - VISUAL)', 'PRIVATE', 'DERMATOLOGY', 'DERMATOLOGY 1', 'Bomkesh Bokshi', '1500.00', '2021-07-11', 'Thu', '2021-06-18 14:12:59'),
(604, 850363885, 0, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'E.N.T', 'VOICE CLINIC', 'Rose', '750.00', '2021-07-18', 'Fri', '2021-06-18 15:04:06'),
(605, 314518074, 0, 'Prodosh Chandra Mitra', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOLOGY', 'CARDIOLOGY 3', 'Sayoni', '1500.00', '2021-06-26', 'Wed', '2021-06-18 18:04:02'),
(606, 479929040, 0, 'Sabyasachi Chakraborty', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS', 'Ajit Bandhopadhya', '750.00', '2021-07-18', 'Sat', '2021-06-18 18:37:50'),
(607, 541674805, 0, 'Sabyasachi Chakraborty', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'John Watson', '750.00', '2021-07-02', 'Wed', '2021-06-18 18:44:07'),
(608, 434639035, 0, 'Sabyasachi Chakraborty', 'TELE CONSULTATION (TELE - PHONE)', 'GENERAL', 'E.N.T', 'E.N.T 2', 'Rose', '750.00', '2021-07-18', 'Fri', '2021-06-18 19:03:33'),
(609, 0, 0, 'Kiva Itarahb', 'REGULAR OPD (CLEVELAND VISIT)', 'PRIVATE', 'ENDOCRINOLOGY', '', '', '0.00', '0000-00-00', '', '2021-06-19 06:27:49'),
(610, 486014464, 9, 'Amartya Chakraborty', 'TELE CONSULTATION (AUDIO - VISUAL)', 'OUTDOOR', 'CARDIOLOGY', 'CARDIOLOGY 3', 'Sayoni', '850.00', '2021-06-26', 'Wed', '2021-06-20 15:18:30'),
(611, 153214163, 7, 'Sabyasachi Chakraborty', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 2', 'Sherlock Homes', '2200.00', '2021-07-11', 'Fri', '2021-06-20 15:26:15'),
(612, 563575006, 7, 'Sabyasachi Chakraborty', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Bomkesh Bokshi', '1500.00', '2021-07-11', 'Thu', '2021-06-20 15:27:59'),
(613, 376392545, 7, 'Sabyasachi Chakraborty', 'TELE CONSULTATION (AUDIO - VISUAL)', 'EMERGENCY', 'CARDIOLOGY', 'CARDIOLOGY 2', 'Sayoni', '2200.00', '2021-06-26', 'Wed', '2021-06-20 15:47:24'),
(614, 436111891, 7, 'Sabyasachi Chakraborty', 'TELE CONSULTATION (AUDIO - VISUAL)', 'OUTDOOR', 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC', 'CARDIAC VALVE AND STRUCTURAL HEART DISEASE CLINIC', 'Mary', '850.00', '2021-06-20', 'Wed', '2021-06-20 16:17:56'),
(615, 698763044, 8, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (TELE - PHONE)', 'GENERAL', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Bomkesh Bokshi', '750.00', '2021-07-11', 'Thu', '2021-06-20 16:26:53'),
(616, 337434651, 8, 'Prodosh Chandra Mitra', 'TELE CONSULTATION (TELE - PHONE)', 'OUTDOOR', 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS', 'Ajit Bandhopadhya', '850.00', '2021-07-18', 'Sat', '2021-06-20 16:29:45'),
(617, 432271831, 8, 'Prodosh Chandra Mitra', 'REGULAR INDOOR (CLEVELAND VISIT)', 'EMERGENCY', 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS', 'Ajit Bandhopadhya', '2200.00', '2021-07-18', 'Sat', '2021-06-20 16:34:04'),
(618, 858533561, 6, 'Kaberi Chatterjee', 'TELE CONSULTATION (TELE - PHONE)', 'OUTDOOR', 'DEVELOPMENTAL PAEDIATRICS', 'DEV PAEDIATRICS', 'Ajit Bandhopadhya', '850.00', '2021-07-18', 'Sat', '2021-06-20 16:41:54'),
(619, 876646759, 6, 'Kaberi Chatterjee', 'TELE CONSULTATION (TELE - PHONE)', 'EMERGENCY', 'DERMATOLOGY', 'DERMATOLOGY 2', 'Bomkesh Bokshi', '2200.00', '2021-07-11', 'Thu', '2021-06-20 16:55:14'),
(620, 404128304, 6, 'Kaberi Chatterjee', 'REGULAR INDOOR (CLEVELAND VISIT)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', 'THORACIC SUR 3', 'Sherlock Homes', '1500.00', '2021-07-11', 'Fri', '2021-06-20 17:11:08'),
(621, 415676817, 9, 'Amartya Chakraborty', 'REGULAR INDOOR (CLEVELAND VISIT)', 'OUTDOOR', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'John Watson', '850.00', '2021-07-02', 'Wed', '2021-06-22 15:49:39'),
(622, 350134157, 6, 'Kaberi Chatterjee', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'DENTAL', 'ORAL AND MAXILLOFACIAL SERVICES', 'John Watson', '750.00', '2021-07-02', 'Wed', '2021-06-22 17:20:59'),
(623, 847816172, 10, 'AVIK fhgjg BHARATI', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', 'CARDIOLOGY 2', 'Sayoni', '750.00', '2021-06-26', 'Wed', '2021-07-07 06:29:06'),
(624, 0, 10, 'AVIK fhgjg BHARATI', 'TELE CONSULTATION (AUDIO - VISUAL)', 'GENERAL', 'GYNAECOLOGY', 'OBSTETRIC AND GYNACOLOGY 1 NEW', '', '0.00', '0000-00-00', '', '2021-07-06 08:33:02'),
(625, 0, 10, 'AVIK fhgjg BHARATI', 'REGULAR OPD (CLEVELAND VISIT)', 'PRIVATE', 'E.N.T', '', '', '0.00', '0000-00-00', '', '2021-07-06 08:33:21'),
(626, 0, 10, 'AVIK fhgjg BHARATI', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'GYNAECOLOGY', '', '', '0.00', '0000-00-00', '', '2021-07-06 08:44:38'),
(627, 0, 10, 'AVIK fhgjg BHARATI', 'TELE CONSULTATION (AUDIO - VISUAL)', 'PRIVATE', 'CARDIOTHORACIC SURGERY', '', '', '0.00', '0000-00-00', '', '2021-07-07 05:23:52'),
(628, 0, 10, 'AVIK fhgjg BHARATI', 'REGULAR OPD (CLEVELAND VISIT)', 'GENERAL', 'CARDIOLOGY', '', '', '0.00', '0000-00-00', '', '2021-07-07 06:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory_list`
--
ALTER TABLE `tblcategory_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory_wise_fees`
--
ALTER TABLE `tblcategory_wise_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblconsultation_list`
--
ALTER TABLE `tblconsultation_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldate`
--
ALTER TABLE `tbldate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldept_list`
--
ALTER TABLE `tbldept_list`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbldept_wise_clinic`
--
ALTER TABLE `tbldept_wise_clinic`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `tbldept_wise_dctr`
--
ALTER TABLE `tbldept_wise_dctr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldocapprove`
--
ALTER TABLE `tbldocapprove`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmedicines`
--
ALTER TABLE `tblmedicines`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient_payment`
--
ALTER TABLE `tblpatient_payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `tblprescription`
--
ALTER TABLE `tblprescription`
  ADD PRIMARY KEY (`Prescription_id`);

--
-- Indexes for table `tblslot_booking`
--
ALTER TABLE `tblslot_booking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory_list`
--
ALTER TABLE `tblcategory_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcategory_wise_fees`
--
ALTER TABLE `tblcategory_wise_fees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblconsultation_list`
--
ALTER TABLE `tblconsultation_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldate`
--
ALTER TABLE `tbldate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbldept_list`
--
ALTER TABLE `tbldept_list`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbldept_wise_clinic`
--
ALTER TABLE `tbldept_wise_clinic`
  MODIFY `clinic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tbldept_wise_dctr`
--
ALTER TABLE `tbldept_wise_dctr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbldocapprove`
--
ALTER TABLE `tbldocapprove`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblmedicines`
--
ALTER TABLE `tblmedicines`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpatient_payment`
--
ALTER TABLE `tblpatient_payment`
  MODIFY `Payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tblprescription`
--
ALTER TABLE `tblprescription`
  MODIFY `Prescription_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblslot_booking`
--
ALTER TABLE `tblslot_booking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=629;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
