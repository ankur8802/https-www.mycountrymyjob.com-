-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycountrymyjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`) VALUES
(1, 'country', 'country@123');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `job_id` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` enum('pending','accept','reject') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`id`, `email`, `job_id`, `company_name`, `skill`, `category`, `state`, `city`, `date`, `status`) VALUES
(13, 'uttamsahu1998@gmail.com', '30', 'MAX3LOGIC IT SOLUTIONS PVT LTD', '', 'Software Developer', 'Uttar Pradesh', 'Noida', '17-10-2019', 'accept'),
(14, 'gufran.28@gmail.com', '31', 'ABA CORP', '', 'Trainee Mechanical Engineer', 'Uttar Pradesh', 'Noida', '04-06-2020', 'pending'),
(15, 'uttamsahu1998@gmail.com', '32', 'MAX3LOGIC IT SOLUTIONS PVT LTD', '', 'Software Developer', 'Uttar Pradesh', 'Noida', '15-06-2020', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_registration`
--

CREATE TABLE `candidate_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(250) NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `qualification` varchar(250) DEFAULT NULL,
  `skill` varchar(250) DEFAULT NULL,
  `college` varchar(250) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `resume` varchar(300) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `experience1` varchar(250) DEFAULT NULL,
  `experience2` varchar(250) NOT NULL,
  `extra_qualification` varchar(250) DEFAULT NULL,
  `current_salary1` varchar(200) DEFAULT NULL,
  `current_salary2` varchar(250) NOT NULL,
  `expected_salary1` varchar(250) DEFAULT NULL,
  `expected_salary2` varchar(250) NOT NULL,
  `job_status` varchar(250) DEFAULT NULL,
  `current_company` varchar(250) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_registration`
--

INSERT INTO `candidate_registration` (`id`, `name`, `email`, `password`, `phone`, `dob`, `gender`, `category`, `qualification`, `skill`, `college`, `description`, `resume`, `state`, `city`, `address`, `experience1`, `experience2`, `extra_qualification`, `current_salary1`, `current_salary2`, `expected_salary1`, `expected_salary2`, `job_status`, `current_company`, `photo`, `date`) VALUES
(133, 'Shantanu Sahu', 'uttamsahu1998@gmail.com', '1234', '8303203554', '', 'Male', 'IT Software - E-Commerce / Internet Technologies', 'BCA', 'HTML & CSS,Technical and non-technical communication', 'Awadh university', '', 'netbarter_Presentation.pdf', 'Uttar Pradesh', 'Lucknow', 'chowk', '0 Year', '10 Month', 'Intermediate', '1 Lakh', '80 Thousand', '3 Lakh', '0 Thousand', 'Working', '', '41290346_2139094566349232_6834231551434162176_n3.jpg', '17-10-2019'),
(134, 'SHANTANU', 'sahn@an', 'a', '9999999999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, '', NULL, NULL, NULL, ''),
(135, 'VICKY', 'vickyjaved@gmail.com', 'v@25522899', '9873852902', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, '', NULL, NULL, NULL, ''),
(136, 'ALAM', 'mycountrymyjob@gmail.com', 'alam@110', '8447751061', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', NULL, '', NULL, NULL, NULL, ''),
(137, 'UIA', 'a@gmail.com', 'a', '9888888888', '03-12-2006', 'Female', 'HR / Administration / IR', 'MCA', 'Web analytics', 'sasa', NULL, 'bindiya.jpg', 'Chhattisgarh', 'Bastar', 'B-80/A ,Ganeshpuri , shalimar garden ,Ghaziabad , U.P', '13 Year', '7 Month', 'sds', '1 Lakh', '45 Thousand', '2 Lakh', '65 Thousand', 'Not Working', '', NULL, '21-12-2019'),
(138, 'Krithik Krishnamoorthy', 'krithikk@gmail.com', 'kihtirk82', '9003195075', '04-04-1982', 'Male', 'Top Management - Non IT', 'B-Tech', 'Product knowledge', 'Sethu Institute of Technology', '<p>• A result oriented professional &nbsp;aspiring towards Assignments in Industrial Process Automation Control Systems and Instrumentation with a reputed organization targeting senior-level assignments to enhance my technical skills, knowledge and achieve recognition with a reputed organization and', 'Krithik_K_CV1.pdf', 'Tamil Nadu', 'Madurai', '7-3/2,Plot no 28,,Ganapathy nagar, Kumudam Street', '15 Year', '9 Month', 'Diploma in IT, 800XA DCS TRaining on T315. certified from ABB GISL,Hands on experience in drafting P&IDS using Aveva P&ID VPE Software SP3.11, 3.12 for Tender and Execution projects. Hands on experience in drafting using AutoCadd 2016,AutoCadd 2018 H', '10 Lakh', '90 Thousand', '10 Lakh', '95 Thousand', 'Not Working', '', NULL, '13-04-2020'),
(139, 'COLLEGE GYANI', 'collegegyani2020@gmail.com', 'alam@110', '8447751061', '', 'Male', 'Educational Sales', 'MBA', 'Brand management', 'UPTU', NULL, 'collegegyanilogo_2.png', 'Uttar Pradesh', 'Lucknow', 'Lucknow', '2 Year', '0 Month', 'Computer ', '5 Lakh', '0 Thousand', '7 Lakh', '0 Thousand', 'Working', '', NULL, '29-04-2020'),
(140, 'GUFRAN', 'gufran.28@gmail.com', '1', '9891713266', '01-12-1998', 'Male', 'IT Software - Application Programming / Maintenance', 'B-Tech', 'Data analysis,HTML & CSS', 'uptu', NULL, 'Digital_Services_Sleep_Innovations.pdf', 'Delhi', 'NOIDA', 'noida', '1 Year', '1 Month', 'java', '2 Lakh', '10 Thousand', '2 Lakh', '95 Thousand', 'Working', '', NULL, '04-06-2020');

-- --------------------------------------------------------

--
-- Table structure for table `city_name`
--

CREATE TABLE `city_name` (
  `id` int(11) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state_code` varchar(100) NOT NULL,
  `city_code` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_name`
--

INSERT INTO `city_name` (`id`, `city`, `state_code`, `city_code`) VALUES
(28, 'Alipur', '1', 101),
(29, 'Andaman Island', '1', 102),
(30, 'Anderson Island', '1', 103),
(31, 'Arainj-Laka-Punga', '1', 104),
(32, 'Austinabad', '1', 105),
(33, 'Bamboo Flat', '1', 106),
(34, 'Barren Island', '1', 107),
(35, 'Beadonabad', '1', 108),
(36, 'Betapur', '1', 109),
(37, 'Bindraban', '1', 110),
(38, 'Bonington', '1', 111),
(39, 'Brookesabad', '1', 112),
(40, 'Cadell Point', '1', 113),
(41, 'Calicut', '1', 114),
(42, 'Chetamale', '1', 115),
(43, 'Cinque Islands', '1', 116),
(44, 'Defence Island', '1', 117),
(45, 'Digilpur', '1', 118),
(46, 'Dolyganj', '1', 119),
(47, 'Flat Island', '1', 120),
(48, 'Geinyale', '1', 121),
(49, 'Great Coco Island', '1', 122),
(50, 'Haddo', '1', 123),
(51, 'Havelock Island', '1', 124),
(52, 'Henry Lawrence Island', '1', 125),
(53, 'Herbertabad', '1', 126),
(54, 'Hobdaypur', '1', 127),
(55, 'Ilichar', '1', 128),
(56, 'Ingoie', '1', 128),
(57, 'Inteview Island', '1', 130),
(58, 'Jangli Ghat', '1', 131),
(59, 'Jhon Lawrence Island', '1', 132),
(60, 'Karen', '1', 133),
(61, 'Kartara', '1', 134),
(62, 'KYD Islannd', '1', 135),
(63, 'Landfall Island', '1', 136),
(64, 'Little Andmand', '1', 137),
(65, 'Little Coco Island', '1', 138),
(66, 'Long Island', '1', 138),
(67, 'Maimyo', '1', 140),
(68, 'Malappuram', '1', 141),
(69, 'Manglutan', '1', 142),
(70, 'Manpur', '1', 143),
(71, 'Mitha Khari', '1', 144),
(72, 'Neill Island', '1', 145),
(73, 'Nicobar Island', '1', 146),
(74, 'North Brother Island', '1', 147),
(75, 'North Passage Island', '1', 148),
(76, 'North Sentinel Island', '1', 149),
(77, 'Nothen Reef Island', '1', 150),
(78, 'Outram Island', '1', 151),
(79, 'Pahlagaon', '1', 152),
(80, 'Palalankwe', '1', 153),
(81, 'Passage Island', '1', 154),
(82, 'Phaiapong', '1', 155),
(83, 'Phoenix Island', '1', 156),
(84, 'Port Blair', '1', 157),
(85, 'Preparis Island', '1', 158),
(86, 'Protheroepur', '1', 159),
(87, 'Rangachang', '1', 160),
(88, 'Rongat', '1', 161),
(89, 'Rutland Island', '1', 162),
(90, 'Sabari', '1', 163),
(91, 'Saddle Peak', '1', 164),
(92, 'Shadipur', '1', 165),
(93, 'Smith Island', '1', 166),
(94, 'Sound Island', '1', 167),
(95, 'South Sentinel Island', '1', 168),
(96, 'Spike Island', '1', 169),
(97, 'Tarmugli Island', '1', 170),
(98, 'Taylerabad', '1', 171),
(99, 'Titaije', '1', 172),
(100, 'Toibalawe', '1', 173),
(101, 'Tusonabad', '1', 174),
(102, 'West Island', '1', 175),
(103, 'Wimberleyganj', '1', 176),
(104, 'Yadita', '1', 177),
(105, 'Adilabad', '2', 201),
(106, 'Anantapur', '2', 201),
(107, 'Chittoor', '2', 203),
(108, 'Cuddapah', '2', 204),
(109, 'East Godavari', '2', 205),
(110, 'Guntur', '2', 206),
(111, 'Hyderabad', '2', 207),
(112, 'Karimnagar', '2', 208),
(113, 'Khammam', '2', 209),
(114, 'Krishna', '2', 210),
(115, 'Kurnool', '2', 211),
(116, 'Mahabubnagar', '2', 212),
(117, 'Medak', '2', 213),
(118, 'Nalgonda', '2', 214),
(119, 'Nellore', '2', 215),
(120, 'Nizamabad', '2', 216),
(121, 'Prakasam', '2', 217),
(122, 'Rangareddy', '2', 218),
(123, 'Srikakulam', '2', 219),
(124, 'Visakhapatnam', '2', 220),
(125, 'Vizianagaram', '2', 221),
(126, 'Warangal', '2', 222),
(127, 'West Godavari', '2', 223),
(128, 'Anjaw', '3', 301),
(129, 'Changlang', '3', 302),
(130, 'Dibang Valley', '3', 303),
(131, 'East Kameng', '3', 304),
(132, 'East Siang', '3', 305),
(133, 'Itanagar', '3', 306),
(134, 'Kurung Kumey', '3', 307),
(135, 'Lohit', '3', 308),
(136, 'Lower Dibang Valley', '3', 309),
(137, 'Lower Subansiri', '3', 310),
(138, 'Papum Pare', '3', 311),
(139, 'Tawang', '3', 312),
(140, 'Tirap', '3', 313),
(141, 'Upper Siang', '3', 314),
(142, 'Upper Subansiri', '3', 315),
(143, 'West Kameng', '3', 316),
(144, 'West Siang', '3', 317),
(145, 'Barpeta', '4', 401),
(146, 'Bongaigaon', '4', 402),
(147, 'Cachar', '4', 403),
(148, 'Darrang', '4', 404),
(149, 'Dhemaji', '4', 405),
(150, 'Dhubri', '4', 406),
(151, 'Dibrugarh', '4', 407),
(152, 'Goalpara', '4', 408),
(153, 'Golaghat', '4', 409),
(154, 'Guwahati', '4', 410),
(155, 'Hailakandi', '4', 411),
(156, 'Jorhat', '4', 412),
(157, 'Kamrup', '4', 413),
(158, 'Karbi Anglong', '4', 414),
(159, 'Karimganj', '4', 415),
(160, 'Kokrajhar', '4', 416),
(161, 'Lakhimpur', '4', 417),
(162, 'Marigaon', '4', 418),
(163, 'Nagaon', '4', 419),
(164, 'Nalbari', '4', 420),
(165, 'North Cachar Hills', '4', 421),
(166, 'Silchar', '4', 422),
(167, 'Sivasagar', '4', 423),
(168, 'Sonitpur', '4', 424),
(169, 'Tinsukia', '4', 425),
(170, 'Udalguri', '4', 426),
(171, 'Araria', '5', 501),
(172, 'Aurangabad', '5', 502),
(173, 'Banka', '5', 503),
(174, 'Begusarai', '5', 504),
(175, 'Bhagalpur', '5', 505),
(176, 'Bhojpur', '5', 506),
(177, 'Buxar', '5', 507),
(178, 'Darbhanga', '5', 508),
(179, 'East Champaran', '5', 509),
(180, 'Gaya', '5', 510),
(181, 'Gopalganj', '5', 511),
(182, 'Jamshedpur', '5', 512),
(183, 'Jamui', '5', 513),
(184, 'Jehanabad', '5', 514),
(185, 'Kaimur (Bhabua)', '5', 515),
(186, 'Katihar', '5', 516),
(187, 'Khagaria', '5', 517),
(188, 'Kishanganj', '5', 518),
(189, 'Lakhisarai', '5', 519),
(190, 'Madhepura', '5', 520),
(191, 'Madhubani', '5', 521),
(192, 'Munger', '5', 522),
(193, 'Muzaffarpur', '5', 523),
(194, 'Nalanda', '5', 524),
(195, 'Nawada', '5', 525),
(196, 'Patna', '5', 526),
(197, 'Purnia', '5', 527),
(198, 'Rohtas', '5', 528),
(199, 'Saharsa', '5', 529),
(200, 'Samastipur', '5', 530),
(201, 'Saran', '5', 531),
(202, 'Sheikhpura', '5', 532),
(203, 'Sheohar', '5', 533),
(204, 'Sitamarhi', '5', 534),
(205, 'Siwan', '5', 535),
(206, 'Supaul', '5', 536),
(207, 'Vaishali', '5', 537),
(208, 'West Champaran', '5', 538),
(209, 'Chandigarh', '6', 601),
(210, 'Mani Marja', '6', 602),
(211, 'Bastar', '7', 701),
(212, 'Bhilai', '7', 702),
(213, 'Bijapur', '7', 703),
(214, 'Bilaspur', '7', 704),
(215, 'Dhamtari', '7', 705),
(216, 'Durg', '7', 706),
(217, 'Janjgir-Champa', '7', 707),
(218, 'Jashpur', '7', 708),
(219, 'Kabirdham-Kawardha', '7', 709),
(220, 'Korba', '7', 710),
(221, 'Korea', '7', 711),
(222, 'Mahasamund', '7', 712),
(223, 'Narayanpur', '7', 713),
(224, 'Norh Bastar-Kanker', '7', 714),
(225, 'Raigarh', '7', 715),
(226, 'Raipur', '7', 716),
(227, 'Rajnandgaon', '7', 717),
(228, 'South Bastar-Dantewada', '7', 718),
(229, 'Surguja', '7', 719),
(230, 'Amal', '8', 801),
(231, 'Amli', '8', 802),
(232, 'Bedpa', '8', 803),
(233, 'Chikhli', '8', 804),
(234, 'Dadra & Nagar Haveli', '8', 805),
(235, 'Dahikhed', '8', 806),
(236, 'Dolara', '8', 807),
(237, 'Galonda', '8', 808),
(238, 'Kanadi', '8', 809),
(239, 'Karchond', '8', 810),
(240, 'Khadoli', '8', 811),
(241, 'Kharadpada', '8', 812),
(242, 'Kherabari', '8', 813),
(243, 'Kherdi', '8', 814),
(244, 'Kothar', '8', 815),
(245, 'Luari', '8', 816),
(246, 'Mashat', '8', 817),
(247, 'Rakholi', '8', 818),
(248, 'Rudana', '8', 819),
(249, 'Saili', '8', 820),
(250, 'Sili', '8', 821),
(251, 'Silvassa', '8', 822),
(252, 'Sindavni', '8', 823),
(253, 'Udva', '8', 824),
(254, 'Umbarkoi', '8', 825),
(255, 'Vansda', '8', 826),
(256, 'Vasona', '8', 827),
(257, 'Velugam', '8', 828),
(258, 'Brancavare', '9', 901),
(259, 'Dagasi', '9', 902),
(260, 'Daman', '9', 903),
(261, 'Diu', '9', 904),
(262, 'Magarvara', '9', 905),
(263, 'Nagwa', '9', 906),
(264, 'Pariali', '9', 907),
(265, 'Passo Covo', '9', 908),
(266, 'Central Delhi', '10', 1001),
(267, 'East Delhi', '10', 1002),
(268, 'New Delhi', '10', 1003),
(269, 'North Delhi', '10', 1004),
(270, 'North East Delhi', '10', 1005),
(271, 'North West Delhi', '10', 1006),
(272, 'Old Delhi', '10', 1007),
(273, 'South Delhi', '10', 1008),
(274, 'South West Delhi', '10', 1009),
(275, 'West Delhi', '10', 1010),
(276, 'Canacona', '11', 1101),
(277, 'Candolim', '11', 1102),
(278, 'Chinchinim', '11', 1103),
(279, 'Cortalim', '11', 1104),
(280, 'Goa', '11', 1105),
(281, 'Jua', '11', 1106),
(282, 'Madgaon', '11', 1107),
(283, 'Mahem', '11', 1108),
(284, 'Mapuca', '11', 1109),
(285, 'Marmagao', '11', 1110),
(286, 'Panji', '11', 1111),
(287, 'Ponda', '11', 1112),
(288, 'Sanvordem', '11', 1113),
(289, 'Terekhol', '11', 1114),
(290, 'Ahmedabad', '12', 1201),
(291, 'Amreli', '12', 1202),
(292, 'Anand', '12', 1203),
(293, 'Banaskantha', '12', 1204),
(294, 'Baroda', '12', 1205),
(295, 'Bharuch', '12', 1206),
(296, 'Bhavnagar', '12', 1207),
(297, 'Dahod', '12', 1208),
(298, 'Dang', '12', 1209),
(299, 'Dwarka', '12', 1210),
(300, 'Gandhinagar', '12', 1211),
(301, 'Jamnagar', '12', 1212),
(302, 'Junagadh', '12', 1213),
(303, 'Kheda', '12', 1214),
(304, 'Kutch', '12', 1215),
(305, 'Mehsana', '12', 1216),
(306, 'Nadiad', '12', 1217),
(307, 'Narmada', '12', 1218),
(308, 'Navsari', '12', 1219),
(309, 'Panchmahals', '12', 1220),
(310, 'Patan', '12', 1221),
(311, 'Porbandar', '12', 1222),
(312, 'Rajkot', '12', 1223),
(313, 'Sabarkantha', '12', 1224),
(314, 'Surat', '12', 1225),
(315, 'Surendranagar', '12', 1226),
(316, 'Vadodara', '12', 1227),
(317, 'Valsad', '12', 1228),
(318, 'Vapi', '12', 1229),
(319, 'Ambala', '13', 1301),
(320, 'Bhiwani', '13', 1302),
(321, 'Faridabad', '13', 1303),
(322, 'Fatehabad', '13', 1304),
(323, 'Gurugram', '13', 1305),
(324, 'Hisar', '13', 1306),
(325, 'Jhajjar', '13', 1307),
(326, 'Jind', '13', 1308),
(327, 'Kaithal', '13', 1309),
(328, 'Karnal', '13', 1310),
(329, 'Kurukshetra', '13', 1311),
(330, 'Mahendragarh', '13', 1312),
(331, 'Mewat', '13', 1313),
(332, 'Panchkula', '13', 1314),
(333, 'Panipat', '13', 1315),
(334, 'Rewari', '13', 1316),
(335, 'Rohtak', '13', 1317),
(336, 'Sirsa', '13', 1318),
(337, 'Sonipat', '13', 1319),
(338, 'Yamunanagar', '13', 1320),
(339, 'Bilaspur', '14', 1401),
(340, 'Chamba', '14', 1402),
(341, 'Dalhousie', '14', 1403),
(342, 'Hamirpur', '14', 1404),
(343, 'Kangra', '14', 1405),
(344, 'Kinnaur', '14', 1406),
(345, 'Kullu', '14', 1407),
(346, 'Lahaul & Spiti', '14', 1408),
(347, 'Mandi', '14', 1409),
(348, 'Shimla', '14', 1410),
(349, 'Sirmaur', '14', 1411),
(350, 'Solan', '14', 1412),
(351, 'Una', '14', 1413),
(352, 'Anantnag', '15', 1501),
(353, 'Baramulla', '15', 1502),
(354, 'Budgam', '15', 1503),
(355, 'Doda', '15', 1504),
(356, 'Jammu', '15', 1505),
(357, 'Kargil', '15', 1506),
(358, 'Kathua', '15', 1507),
(359, 'Kupwara', '15', 1508),
(360, 'Leh', '15', 1509),
(361, 'Poonch', '15', 1510),
(362, 'Pulwama', '15', 1511),
(363, 'Rajauri', '15', 1512),
(364, 'Srinagar', '15', 1513),
(365, 'Udhampur', '15', 1514),
(366, 'Bokaro', '16', 1601),
(367, 'Chatra', '16', 1602),
(368, 'Deoghar', '16', 1603),
(369, 'Dhanbad', '16', 1604),
(370, 'Dumka', '16', 1605),
(371, 'East Singhbhum', '16', 1606),
(372, 'Garhwa', '16', 1607),
(373, 'Giridih', '16', 1608),
(374, 'Godda', '16', 1609),
(375, 'Gumla', '16', 1610),
(376, 'Hazaribag', '16', 1611),
(377, 'Jamtara', '16', 1612),
(378, 'Koderma', '16', 1613),
(379, 'Latehar', '16', 1614),
(380, 'Lohardaga', '16', 1615),
(381, 'Pakur', '16', 1616),
(382, 'Palamu', '16', 1617),
(383, 'Ranchi', '16', 1618),
(384, 'Sahibganj', '16', 1619),
(385, 'Seraikela', '16', 1620),
(386, 'Simdega', '16', 1621),
(387, 'West Singhbhum', '16', 1622),
(388, 'Bagalkot', '17', 1701),
(389, 'Bangalore', '17', 1702),
(390, 'Bangalore Rural', '17', 1703),
(391, 'Belgaum', '17', 1704),
(392, 'Bellary', '17', 1705),
(393, 'Bhatkal', '17', 1706),
(394, 'Bidar', '17', 1707),
(395, 'Bijapur', '17', 1708),
(396, 'Chamrajnagar', '17', 1709),
(397, 'Chickmagalur', '17', 1710),
(398, 'Chikballapur', '17', 1711),
(399, 'Chitradurga', '17', 1712),
(400, 'Dakshina Kannada', '17', 1713),
(401, 'Davanagere', '17', 1714),
(402, 'Dharwad', '17', 1715),
(403, 'Gadag', '17', 1716),
(404, 'Gulbarga', '17', 1717),
(405, 'Hampi', '17', 1718),
(406, 'Hassan', '17', 1719),
(407, 'Haveri', '17', 1720),
(408, 'Hospet', '17', 1721),
(409, 'Karwar', '17', 1722),
(410, 'Kodagu', '17', 1723),
(411, 'Kolar', '17', 1724),
(412, 'Koppal', '17', 1725),
(413, 'Madikeri', '17', 1726),
(414, 'Mandya', '17', 1727),
(415, 'Mangalore', '17', 1728),
(416, 'Manipal', '17', 1729),
(417, 'Mysore', '17', 1730),
(418, 'Raichur', '17', 1731),
(419, 'Shimoga', '17', 1732),
(420, 'Sirsi', '17', 1733),
(421, 'Sringeri', '17', 1734),
(422, 'Srirangapatna', '17', 1735),
(423, 'Tumkur', '17', 1736),
(424, 'Udupi', '17', 1737),
(425, 'Uttara Kannada', '17', 1738),
(426, 'Alappuzha', '18', 1801),
(427, 'Alleppey', '18', 1802),
(428, 'Alwaye', '18', 1803),
(429, 'Ernakulam', '18', 1804),
(430, 'Idukki', '18', 1805),
(431, 'Kannur', '18', 1806),
(432, 'Kasargod', '18', 1807),
(433, 'Kochi', '18', 1808),
(434, 'Kollam', '18', 1809),
(435, 'Kottayam', '18', 1810),
(436, 'Kovalam', '18', 1811),
(437, 'Kozhikode', '18', 1812),
(438, 'Malappuram', '18', 1813),
(439, 'Palakkad', '18', 1814),
(440, 'Pathanamthitta', '18', 1815),
(441, 'Perumbavoor', '18', 1816),
(442, 'Thiruvananthapuram', '18', 1817),
(443, 'Thrissur', '18', 1818),
(444, 'Trichur', '18', 1819),
(445, 'Trivandrum', '18', 1820),
(446, 'Wayanad', '18', 1821),
(447, 'Agatti Island', '19', 1901),
(448, 'Bingaram Island', '19', 1902),
(449, 'Bitra Island', '19', 1903),
(450, 'Chetlat Island', '19', 1904),
(451, 'Kadmat Island', '19', 1905),
(452, 'Kalpeni Island', '19', 1906),
(453, 'Kavaratti Island', '19', 1907),
(454, 'Kiltan Island', '19', 1908),
(455, 'Lakshadweep Sea', '19', 1909),
(456, 'Minicoy Island', '19', 1910),
(457, 'North Island', '19', 1911),
(458, 'South Island', '19', 1912),
(459, 'Anuppur', '20', 2001),
(460, 'Ashoknagar', '20', 2002),
(461, 'Balaghat', '20', 2003),
(462, 'Barwani', '20', 2004),
(463, 'Betul', '20', 2005),
(464, 'Bhind', '20', 2006),
(465, 'Bhopal', '20', 2007),
(466, 'Burhanpur', '20', 2008),
(467, 'Chhatarpur', '20', 2009),
(468, 'Chhindwara', '20', 2010),
(469, 'Damoh', '20', 2011),
(470, 'Datia', '20', 2012),
(471, 'Dewas', '20', 2013),
(472, 'Dhar', '20', 2014),
(473, 'Dindori', '20', 2015),
(474, 'Guna', '20', 2016),
(475, 'Gwalior', '20', 2017),
(476, 'Harda', '20', 2018),
(477, 'Hoshangabad', '20', 2019),
(478, 'Indore', '20', 2020),
(479, 'Jabalpur', '20', 2021),
(480, 'Jagdalpur', '20', 2022),
(481, 'Jhabua', '20', 2023),
(482, 'Katni', '20', 2024),
(483, 'Khandwa', '20', 2025),
(484, 'Khargone', '20', 2026),
(485, 'Mandla', '20', 2027),
(486, 'Mandsaur', '20', 2028),
(487, 'Morena', '20', 2029),
(488, 'Narsinghpur', '20', 2030),
(489, 'Neemuch', '20', 2031),
(490, 'Panna', '20', 2032),
(491, 'Raisen', '20', 2033),
(492, 'Rajgarh', '20', 2034),
(493, 'Ratlam', '20', 2035),
(494, 'Rewa', '20', 2036),
(495, 'Sagar', '20', 2037),
(496, 'Satna', '20', 2038),
(497, 'Sehore', '20', 2039),
(498, 'Seoni', '20', 2040),
(499, 'Shahdol', '20', 2041),
(500, 'Shajapur', '20', 2042),
(501, 'Sheopur', '20', 2043),
(502, 'Shivpuri', '20', 2044),
(503, 'Sidhi', '20', 2045),
(504, 'Tikamgarh', '20', 2046),
(505, 'Ujjain', '20', 2047),
(506, 'Umaria', '20', 2048),
(507, 'Vidisha', '20', 2049),
(508, 'Ahmednagar', '21', 2101),
(509, 'Akola', '21', 2102),
(510, 'Amravati', '21', 2103),
(511, 'Aurangabad', '21', 2104),
(512, 'Beed', '21', 2105),
(513, 'Bhandara', '21', 2106),
(514, 'Buldhana', '21', 2107),
(515, 'Chandrapur', '21', 2108),
(516, 'Dhule', '21', 2109),
(517, 'Gadchiroli', '21', 2110),
(518, 'Gondia', '21', 2111),
(519, 'Hingoli', '21', 2112),
(520, 'Jalgaon', '21', 2113),
(521, 'Jalna', '21', 2114),
(522, 'Kolhapur', '21', 2115),
(523, 'Latur', '21', 2116),
(524, 'Mahabaleshwar', '21', 2117),
(525, 'Mumbai', '21', 2118),
(526, 'Mumbai City', '21', 2119),
(527, 'Mumbai Suburban', '21', 2120),
(528, 'Nagpur', '21', 2121),
(529, 'Nanded', '21', 2122),
(530, 'Nandurbar', '21', 2123),
(531, 'Nashik', '21', 2124),
(532, 'Osmanabad', '21', 2125),
(533, 'Parbhani', '21', 2126),
(534, 'Pune', '21', 2127),
(535, 'Raigad', '21', 2128),
(536, 'Ratnagiri', '21', 2129),
(537, 'Sangli', '21', 2130),
(538, 'Satara', '21', 2131),
(539, 'Sholapur', '21', 2132),
(540, 'Sindhudurg', '21', 2133),
(541, 'Thane', '21', 2134),
(542, 'Wardha', '21', 2135),
(543, 'Washim', '21', 2136),
(544, 'Yavatmal', '21', 2137),
(545, 'Bishnupur', '22', 2201),
(546, 'Chandel', '22', 2202),
(547, 'Churachandpur', '22', 2203),
(548, 'Imphal East', '22', 2204),
(549, 'Imphal West', '22', 2205),
(550, 'Senapati', '22', 2206),
(551, 'Tamenglong', '22', 2207),
(552, 'Thoubal', '22', 2208),
(553, 'Ukhrul', '22', 2209),
(554, 'East Garo Hills', '23', 2301),
(555, 'East Khasi Hills', '23', 2302),
(556, 'Jaintia Hills', '23', 2303),
(557, 'Ri Bhoi', '23', 2304),
(558, 'Shillong', '23', 2305),
(559, 'South Garo Hills', '23', 2306),
(560, 'West Garo Hills', '23', 2307),
(561, 'West Khasi Hills', '23', 2308),
(562, 'Aizawl', '24', 2401),
(563, 'Champhai', '24', 2402),
(564, 'Kolasib', '24', 2403),
(565, 'Lawngtlai', '24', 2404),
(566, 'Lunglei', '24', 2405),
(567, 'Mamit', '24', 2406),
(568, 'Saiha', '24', 2407),
(569, 'Serchhip', '24', 2408),
(570, 'Dimapur', '25', 2501),
(571, 'Kohima', '25', 2502),
(572, 'Mokokchung', '25', 2503),
(573, 'Mon', '25', 2504),
(574, 'Phek', '25', 2505),
(575, 'Tuensang', '25', 2506),
(576, 'Wokha', '25', 2507),
(577, 'Zunheboto', '25', 2508),
(578, 'Angul', '26', 2601),
(579, 'Balangir', '26', 2602),
(580, 'Balasore', '26', 2603),
(581, 'Baleswar', '26', 2604),
(582, 'Bargarh', '26', 2605),
(583, 'Berhampur', '26', 2606),
(584, 'Bhadrak', '26', 2607),
(585, 'Bhubaneswar', '26', 2608),
(586, 'Boudh', '26', 2609),
(587, 'Cuttack', '26', 2610),
(588, 'Deogarh', '26', 2611),
(589, 'Dhenkanal', '26', 2612),
(590, 'Gajapati', '26', 2613),
(591, 'Ganjam', '26', 2614),
(592, 'Jagatsinghapur', '26', 2615),
(593, 'Jajpur', '26', 2616),
(594, 'Jharsuguda', '26', 2617),
(595, 'Kalahandi', '26', 2618),
(596, 'Kandhamal', '26', 2619),
(597, 'Kendrapara', '26', 2620),
(598, 'Kendujhar', '26', 2621),
(599, 'Khordha', '26', 2622),
(600, 'Koraput', '26', 2623),
(601, 'Malkangiri', '26', 2624),
(602, 'Mayurbhanj', '26', 2625),
(603, 'Nabarangapur', '26', 2626),
(604, 'Nayagarh', '26', 2627),
(605, 'Nuapada', '26', 2628),
(606, 'Puri', '26', 2629),
(607, 'Rayagada', '26', 2630),
(608, 'Rourkela', '26', 2631),
(609, 'Sambalpur', '26', 2632),
(610, 'Subarnapur', '26', 2633),
(611, 'Sundergarh', '26', 2634),
(612, 'Bahur', '27', 2701),
(613, 'Karaikal', '27', 2701),
(614, 'Mahe', '27', 2701),
(615, 'Pondicherry', '27', 2701),
(616, 'Purnankuppam', '27', 2701),
(617, 'Valudavur', '27', 2701),
(618, 'Villianur', '27', 2701),
(619, 'Yanam', '27', 2701),
(620, 'Amritsar', '28', 2801),
(621, 'Barnala', '28', 2801),
(622, 'Bathinda', '28', 2801),
(623, 'Faridkot', '28', 2801),
(624, 'Fatehgarh Sahib', '28', 2801),
(625, 'Ferozepur', '28', 2801),
(626, 'Gurdaspur', '28', 2801),
(627, 'Hoshiarpur', '28', 2801),
(628, 'Jalandhar', '28', 2801),
(629, 'Kapurthala', '28', 2801),
(630, 'Ludhiana', '28', 2801),
(631, 'Mansa', '28', 2801),
(632, 'Moga', '28', 2801),
(633, 'Muktsar', '28', 2801),
(634, 'Nawanshahr', '28', 2801),
(635, 'Pathankot', '28', 2801),
(636, 'Patiala', '28', 2801),
(637, 'Rupnagar', '28', 2801),
(638, 'Sangrur', '28', 2801),
(639, 'SAS Nagar', '28', 2801),
(640, 'Tarn Taran', '28', 2801),
(641, 'Ajmer', '29', 2901),
(642, 'Alwar', '29', 2902),
(643, 'Banswara', '29', 2903),
(644, 'Baran', '29', 2904),
(645, 'Barmer', '29', 2905),
(646, 'Bharatpur', '29', 2906),
(647, 'Bhilwara', '29', 2907),
(648, 'Bikaner', '29', 2908),
(649, 'Bundi', '29', 2909),
(650, 'Chittorgarh', '29', 2910),
(651, 'Churu', '29', 2911),
(652, 'Dausa', '29', 2912),
(653, 'Dholpur', '29', 2913),
(654, 'Dungarpur', '29', 2914),
(655, 'Hanumangarh', '29', 2915),
(656, 'Jaipur', '29', 2916),
(657, 'Jaisalmer', '29', 2917),
(658, 'Jalore', '29', 2918),
(659, 'Jhalawar', '29', 2919),
(660, 'Jhunjhunu', '29', 2920),
(661, 'Jodhpur', '29', 2921),
(662, 'Karauli', '29', 2922),
(663, 'Kota', '29', 2923),
(664, 'Nagaur', '29', 2924),
(665, 'Pali', '29', 2925),
(666, 'Pilani', '29', 2926),
(667, 'Rajsamand', '29', 2927),
(668, 'Sawai Madhopur', '29', 2928),
(669, 'Sikar', '29', 2929),
(670, 'Sirohi', '29', 2930),
(671, 'Sri Ganganagar', '29', 2931),
(672, 'Tonk', '29', 2932),
(673, 'Udaipur', '29', 2933),
(674, 'Barmiak', '30', 3001),
(675, 'Be', '30', 3002),
(676, 'Bhurtuk', '30', 3003),
(677, 'Chhubakha', '30', 3004),
(678, 'Chidam', '30', 3005),
(679, 'Chubha', '30', 3006),
(680, 'Chumikteng', '30', 3007),
(681, 'Dentam', '30', 3008),
(682, 'Dikchu', '30', 3009),
(683, 'Dzongri', '30', 3010),
(684, 'Gangtok', '30', 3011),
(685, 'Gauzing', '30', 3012),
(686, 'Gyalshing', '30', 3013),
(687, 'Hema', '30', 3014),
(688, 'Kerung', '30', 3015),
(689, 'Lachen', '30', 3016),
(690, 'Lachung', '30', 3017),
(691, 'Lema', '30', 3018),
(692, 'Lingtam', '30', 3019),
(693, 'Lungthu', '30', 3020),
(694, 'Mangan', '30', 3021),
(695, 'Namchi', '30', 3022),
(696, 'Namthang', '30', 3023),
(697, 'Nanga', '30', 3024),
(698, 'Nantang', '30', 3025),
(699, 'Naya Bazar', '30', 3026),
(700, 'Padamachen', '30', 3027),
(701, 'Pakhyong', '30', 3028),
(702, 'Pemayangtse', '30', 3029),
(703, 'Phensang', '30', 3030),
(704, 'Rangli', '30', 3031),
(705, 'Rinchingpong', '30', 3032),
(706, 'Sakyong', '30', 3033),
(707, 'Samdong', '30', 3034),
(708, 'Singtam', '30', 3035),
(709, 'Siniolchu', '30', 3035),
(710, 'Sombari', '30', 3036),
(711, 'Soreng', '30', 3037),
(712, 'Sosing', '30', 3038),
(713, 'Tekhug', '30', 3039),
(714, 'Temi', '30', 3040),
(715, 'Tsetang', '30', 3041),
(716, 'Tsomgo', '30', 3042),
(717, 'Tumlong', '30', 3043),
(718, 'Yangang', '30', 3044),
(719, 'Yumtang', '30', 3045),
(720, 'Chennai', '31', 3101),
(721, 'Chidambaram', '31', 3102),
(722, 'Chingleput', '31', 3103),
(723, 'Coimbatore', '31', 3104),
(724, 'Courtallam', '31', 3105),
(725, 'Cuddalore', '31', 3106),
(726, 'Dharmapuri', '31', 3107),
(727, 'Dindigul', '31', 3108),
(728, 'Erode', '31', 3109),
(729, 'Hosur', '31', 3110),
(730, 'Kanchipuram', '31', 3111),
(731, 'Kanyakumari', '31', 3112),
(732, 'Karaikudi', '31', 3113),
(733, 'Karur', '31', 3114),
(734, 'Kodaikanal', '31', 3115),
(735, 'Kovilpatti', '31', 3116),
(736, 'Krishnagiri', '31', 3117),
(737, 'Kumbakonam', '31', 3118),
(738, 'Madurai', '31', 3119),
(739, 'Mayiladuthurai', '31', 3120),
(740, 'Nagapattinam', '31', 3121),
(741, 'Nagarcoil', '31', 3122),
(742, 'Namakkal', '31', 3123),
(743, 'Neyveli', '31', 3124),
(744, 'Nilgiris', '31', 3125),
(745, 'Ooty', '31', 3126),
(746, 'Palani', '31', 3127),
(747, 'Perambalur', '31', 3128),
(748, 'Pollachi', '31', 3129),
(749, 'Pudukkottai', '31', 3130),
(750, 'Rajapalayam', '31', 3131),
(751, 'Ramanathapuram', '31', 3132),
(752, 'Salem', '31', 3133),
(753, 'Sivaganga', '31', 3134),
(754, 'Sivakasi', '31', 3135),
(755, 'Thanjavur', '31', 3136),
(756, 'Theni', '31', 3137),
(757, 'Thoothukudi', '31', 3138),
(758, 'Tiruchirappalli', '31', 3139),
(759, 'Tirunelveli', '31', 3140),
(760, 'Tirupur', '31', 3141),
(761, 'Tiruvallur', '31', 3142),
(762, 'Tiruvannamalai', '31', 3143),
(763, 'Tiruvarur', '31', 3144),
(764, 'Trichy', '31', 3145),
(765, 'Tuticorin', '31', 3146),
(766, 'Vellore', '31', 3147),
(767, 'Villupuram', '31', 3148),
(768, 'Virudhunagar', '31', 3149),
(769, 'Yercaud', '31', 3150),
(770, 'Agartala', '32', 3201),
(771, 'Ambasa', '32', 3202),
(772, 'Bampurbari', '32', 3203),
(773, 'Belonia', '32', 3204),
(774, 'Dhalai', '32', 3205),
(775, 'Dharam Nagar', '32', 3206),
(776, 'Kailashahar', '32', 3207),
(777, 'Kamal Krishnabari', '32', 3208),
(778, 'Khopaiyapara', '32', 3209),
(779, 'Khowai', '32', 3210),
(780, 'Phuldungsei', '32', 3211),
(781, 'Radha Kishore Pur', '32', 3212),
(782, 'Tripura', '32', 3213),
(1166, 'Calcutta', '35', 0),
(1302, 'Achhnera', '33', 0),
(1303, 'Adari', '33', 0),
(1304, 'Agra', '33', 0),
(1305, 'Aligarh', '33', 0),
(1306, 'Allahabad', '33', 0),
(1307, 'Amroha', '33', 0),
(1308, 'Azamgarh', '33', 0),
(1309, 'Bahraich', '33', 0),
(1310, 'Ballia', '33', 0),
(1311, 'Balrampur', '33', 0),
(1312, 'Banda', '33', 0),
(1313, 'Bareilly', '33', 0),
(1314, 'Chandausi', '33', 0),
(1315, 'Dadri', '33', 0),
(1316, 'Deoria', '33', 0),
(1317, 'Etawah', '33', 0),
(1318, 'Fatehabad', '33', 0),
(1319, 'Fatehpur', '33', 0),
(1320, 'Fatehpur', '33', 0),
(1321, 'Greater Noida', '33', 0),
(1322, 'Hamirpur', '33', 0),
(1323, 'Hardoi', '33', 0),
(1324, 'Jajmau', '33', 0),
(1325, 'Jaunpur', '33', 0),
(1326, 'Jhansi', '33', 0),
(1327, 'Kalpi', '33', 0),
(1328, 'Kanpur', '33', 0),
(1329, 'Kota', '33', 0),
(1330, 'Laharpur', '33', 0),
(1331, 'Lakhimpur', '33', 0),
(1332, 'Lal Gopalganj Nindaura', '33', 0),
(1333, 'Lalganj', '33', 0),
(1334, 'Lalitpur', '33', 0),
(1335, 'Lar', '33', 0),
(1336, 'Loni', '33', 0),
(1337, 'Lucknow', '33', 0),
(1338, 'Mathura', '33', 0),
(1339, 'Meerut', '33', 0),
(1340, 'Modinagar', '33', 0),
(1341, 'Muradnagar', '33', 0),
(1342, 'Nagina', '33', 0),
(1343, 'Najibabad', '33', 0),
(1344, 'Nakur', '33', 0),
(1345, 'Nanpara', '33', 0),
(1346, 'Naraura', '33', 0),
(1347, 'Naugawan Sadat', '33', 0),
(1348, 'Nautanwa', '33', 0),
(1349, 'Nawabganj', '33', 0),
(1350, 'Nehtaur', '33', 0),
(1351, 'NOIDA', '33', 0),
(1352, 'Noorpur', '33', 0),
(1353, 'Obra', '33', 0),
(1354, 'Orai', '33', 0),
(1355, 'Padrauna', '33', 0),
(1356, 'Palia Kalan', '33', 0),
(1357, 'Parasi', '33', 0),
(1358, 'Phulpur', '33', 0),
(1359, 'Pihani', '33', 0),
(1360, 'Pilibhit', '33', 0),
(1361, 'Pilkhuwa', '33', 0),
(1362, 'Powayan', '33', 0),
(1363, 'Pukhrayan', '33', 0),
(1364, 'Puranpur', '33', 0),
(1365, 'Purquazi', '33', 0),
(1366, 'Purwa', '33', 0),
(1367, 'Rae Bareli', '33', 0),
(1368, 'Rampur', '33', 0),
(1369, 'Rampur Maniharan', '33', 0),
(1370, 'Rasra', '33', 0),
(1371, 'Rath', '33', 0),
(1372, 'Renukoot', '33', 0),
(1373, 'Reoti', '33', 0),
(1374, 'Robertsganj', '33', 0),
(1375, 'Rudauli', '33', 0),
(1376, 'Rudrapur', '33', 0),
(1377, 'Sadabad', '33', 0),
(1378, 'Safipur', '33', 0),
(1379, 'Saharanpur', '33', 0),
(1380, 'Sahaspur', '33', 0),
(1381, 'Sahaswan', '33', 0),
(1382, 'Sahawar', '33', 0),
(1383, 'Sahjanwa', '33', 0),
(1385, 'Sambhal', '33', 0),
(1386, 'Samdhan', '33', 0),
(1387, 'Samthar', '33', 0),
(1388, 'Sandi', '33', 0),
(1389, 'Sandila', '33', 0),
(1390, 'Sardhana', '33', 0),
(1391, 'Seohara', '33', 0),
(1394, 'Shahganj', '33', 0),
(1395, 'Shahjahanpur', '33', 0),
(1396, 'Shamli', '33', 0),
(1397, 'Shamsabad', ' Agra', 0),
(1399, 'Sherkot', '33', 0),
(1401, 'Shikohabad', '33', 0),
(1402, 'Shishgarh', '33', 0),
(1403, 'Siana', '33', 0),
(1404, 'Sikanderpur', '33', 0),
(1405, 'Sikandra Rao', '33', 0),
(1406, 'Sikandrabad', '33', 0),
(1407, 'Sirsaganj', '33', 0),
(1408, 'Sirsi', '33', 0),
(1409, 'Sitapur', '33', 0),
(1410, 'Soron', '33', 0),
(1411, 'Suar', '33', 0),
(1412, 'Sultanpur', '33', 0),
(1413, 'Sumerpur', '33', 0),
(1414, 'Tanda', '33', 0),
(1415, 'Tanda', '33', 0),
(1416, 'Tetri Bazar', '33', 0),
(1417, 'Thakurdwara', '33', 0),
(1418, 'Thana Bhawan', '33', 0),
(1419, 'Tilhar', '33', 0),
(1420, 'Tirwaganj', '33', 0),
(1421, 'Tulsipur', '33', 0),
(1422, 'Tundla', '33', 0),
(1423, 'Unnao', '33', 0),
(1424, 'Utraula', '33', 0),
(1425, 'Varanasi', '33', 0),
(1426, 'Vrindavan', '33', 0),
(1427, 'Warhapur', '33', 0),
(1428, 'Zaidpur', '33', 0),
(1429, 'Zamania', '33', 0),
(1430, 'Almora', '34', 0),
(1431, 'Bazpur', '34', 0),
(1432, 'Chamba', '34', 0),
(1433, 'Dehradun', '34', 0),
(1434, 'Haldwani', '34', 0),
(1435, 'Haridwar', '34', 0),
(1436, 'Jaspur', '34', 0),
(1437, 'Kashipur', '34', 0),
(1438, 'kichha', '34', 0),
(1439, 'Kotdwara', '34', 0),
(1440, 'Manglaur', '34', 0),
(1441, 'Mussoorie', '34', 0),
(1442, 'Nagla', '34', 0),
(1443, 'Nainital', '34', 0),
(1444, 'Pauri', '34', 0),
(1445, 'Pithoragarh', '34', 0),
(1446, 'Ramnagar', '34', 0),
(1447, 'Rishikesh', '34', 0),
(1448, 'Roorkee', '34', 0),
(1449, 'Rudrapur', '34', 0),
(1450, 'Sitarganj', '34', 0),
(1451, 'Tehri', '34', 0),
(1452, 'Muzaffarnagar', '33', 0),
(1454, 'Alipurduar', '35', 0),
(1455, 'Arambagh', '35', 0),
(1456, 'Asansol', '35', 0),
(1457, 'Baharampur', '35', 0),
(1458, 'Bally', '35', 0),
(1459, 'Balurghat', '35', 0),
(1460, 'Bankura', '35', 0),
(1461, 'Barakar', '35', 0),
(1462, 'Barasat', '35', 0),
(1463, 'Bardhaman', '35', 0),
(1464, 'Bidhan Nagar', '35', 0),
(1465, 'Chinsura', '35', 0),
(1466, 'Contai', '35', 0),
(1467, 'Cooch Behar', '35', 0),
(1468, 'Darjeeling', '35', 0),
(1469, 'Durgapur', '35', 0),
(1470, 'Haldia', '35', 0),
(1471, 'Howrah', '35', 0),
(1472, 'Islampur', '35', 0),
(1473, 'Jhargram', '35', 0),
(1474, 'Kharagpur', '35', 0),
(1475, 'Kolkata', '35', 0),
(1476, 'Mainaguri', '35', 0),
(1477, 'Mal', '35', 0),
(1478, 'Mathabhanga', '35', 0),
(1479, 'Medinipur', '35', 0),
(1480, 'Memari', '35', 0),
(1481, 'Monoharpur', '35', 0),
(1482, 'Murshidabad', '35', 0),
(1483, 'Nabadwip', '35', 0),
(1484, 'Naihati', '35', 0),
(1485, 'Panchla', '35', 0),
(1486, 'Pandua', '35', 0),
(1487, 'Paschim Punropara', '35', 0),
(1488, 'Purulia', '35', 0),
(1489, 'Raghunathpur', '35', 0),
(1490, 'Raiganj', '35', 0),
(1491, 'Rampurhat', '35', 0),
(1492, 'Ranaghat', '35', 0),
(1493, 'Sainthia', '35', 0),
(1494, 'Santipur', '35', 0),
(1495, 'Siliguri', '35', 0),
(1496, 'Sonamukhi', '35', 0),
(1497, 'Srirampore', '35', 0),
(1498, 'Suri', '35', 0),
(1499, 'Taki', '35', 0),
(1500, 'Tamluk', '35', 0),
(1501, 'Tarakeswar', '35', 0),
(1502, 'Faizabad', '33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_registration`
--

CREATE TABLE `company_registration` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `categories` varchar(250) NOT NULL,
  `website` varchar(150) NOT NULL,
  `founded_date` varchar(150) NOT NULL,
  `registration_no` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `google_plus` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` enum('accept','reject','block','unblock','pending') NOT NULL DEFAULT 'accept',
  `date` varchar(50) NOT NULL,
  `contact_person_info` varchar(999) NOT NULL,
  `employer_name` varchar(999) NOT NULL,
  `top_companies` enum('yes','no','','') NOT NULL DEFAULT 'no',
  `industry` varchar(8988) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_registration`
--

INSERT INTO `company_registration` (`id`, `company_name`, `emp_email`, `password`, `phone`, `categories`, `website`, `founded_date`, `registration_no`, `description`, `country`, `state`, `city`, `postcode`, `address`, `facebook`, `twitter`, `google_plus`, `youtube`, `linkedin`, `image`, `status`, `date`, `contact_person_info`, `employer_name`, `top_companies`, `industry`) VALUES
(37, 'MAX3LOGIC IT SOLUTIONS PVT LTD', 'info@max3logic.com', 'a', '9891713266', 'Export / Import / Merchandising', 'www.max3logic.com', '01-10-2010', '1234', '<p>We are well-experienced in creating all kinds of software’s from scratch to beta Furthermore from personal to proficient forms. We have spent a good number of years in IT Industry portraying those ', 'India', 'Uttar Pradesh', 'Noida', '', 'E 113 Sector 6 ', '', '', '', '', '', '', 'accept', '16-10-2019', '', 'RAHUL', 'no', ''),
(38, 'MYJOB', 'mycountrymyjob@gmail.com', 'alam@110', '8447751061', 'Export / Import / Merchandising', 'www.mycountrymyjob.com', '01-08-2019', '123123123', 'Mycountrymyjob is online job search portal ', 'India', 'Bihar', 'Patna', '123123', 'Delhi', 'https://facebook.com/', 'https://twiiter.com/', 'https://google-plus.com/', 'https://youtube.com/', 'https://linkedin.com/', 'pgdm_admi.jpg', 'accept', '01-11-2019', '', '', 'no', 'Manufacturing'),
(39, 'ABA CORP', 'pgdmdelhi@gmail.com', 'aa', '8447751061', 'IT Software - Mobile', '', '04-10-2002', '', '', 'India', 'Uttar Pradesh', 'Noida', '', 'C-213 Sector 63 Noida ', '', '', '', '', '', 'j-logo.png', 'accept', '21-10-2019', '', 'ALAM', 'yes', ''),
(40, 'MY JOB', 'sartaj110@gmail.com', 'alam@110', '8447751061', '', '', '  ', '', '', 'India', 'Delhi', 'New Delhi', '110092', 'Delhi', '', '', '', '', '', 'pgdm_admi1.jpg', 'accept', '12-11-2019', '', '', 'no', 'Manufacturing'),
(41, 'ITRONIX SOLUTION', 'info@itronixsolution.com', '123456', '9914077736', '', 'http://itronixsolution.com/careers/', ' ', '', 'Itronix Solution is one of the leading Advance Embedded Systems, Information Security,', 'India', 'Punjab', 'Jalandhar', '144001', 'ITRONIX SOLUTIONS - SCO-28, First Floor,  Chotti Baradari , Garha Road, Jalandhar, 144001', '', '', '', '', '', 'itronix-solution-logo.png', 'accept', '27-11-2019', '', '', 'yes', 'Technology'),
(42, 'MOZWEBMEDIA', 'ino@mozwebmedia.com', '123456', '9910466878', '', '', '', '', '', 'India', 'Uttar Pradesh', 'NOIDA', '', 'A40, Ithum Building, Tower B, Suit 1108, NOIDA, Uttar Pradesh - 201301,India', '', '', '', '', '', '', 'accept', '19-12-2019', 'NEHA SINGH', 'NEHA SINGH', 'no', ''),
(43, 'COLLEGE GYANI', 'collegegyani2020@gmail.com', 'alam@110', '8447751061', '', 'www.collegegyani.com', '10-08-2019', '12345', 'This is Education Portal to Search College detail for All courses and their fees detail .', 'India', 'Uttar Pradesh', 'Greater Noida', '746000', 'Delta 1 Greater Noida', 'https://www.facebook.com/College-Gyani-101475741453602/', 'https://twiiter.com/', '', 'https://www.youtube.com/channel/UCINm_Me6O2N2azKEy8sTu3Q/featured', 'https://in.linkedin.com/in/college-gyani-854345196', 'collegegyanilogo_2.png', 'accept', '04-06-2020', '', '', 'no', 'Education'),
(44, 'ALEXIS ', 'info@alexisinfo.com', '1', '9891713266', '', 'www.alexisinfo.com', '11-06-2011', '1', '', 'India', 'Uttar Pradesh', 'NOIDA', '', 'A-142 Sector 63 Noida', '', '', '', '', '', 'alexis.png', 'accept', '04-06-2020', '', '', 'no', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `CountryID` int(11) DEFAULT NULL,
  `CountryName` varchar(50) DEFAULT NULL,
  `TwoCharCountryCode` char(2) DEFAULT NULL,
  `ThreeCharCountryCode` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`CountryID`, `CountryName`, `TwoCharCountryCode`, `ThreeCharCountryCode`) VALUES
(1, 'Afghanistan', 'AF', 'AFG'),
(2, 'Aland Islands', 'AX', 'ALA'),
(3, 'Albania', 'AL', 'ALB'),
(4, 'Algeria', 'DZ', 'DZA'),
(5, 'American Samoa', 'AS', 'ASM'),
(6, 'Andorra', 'AD', 'AND'),
(7, 'Angola', 'AO', 'AGO'),
(8, 'Anguilla', 'AI', 'AIA'),
(9, 'Antarctica', 'AQ', 'ATA'),
(10, 'Antigua and Barbuda', 'AG', 'ATG'),
(11, 'Argentina', 'AR', 'ARG'),
(12, 'Armenia', 'AM', 'ARM'),
(13, 'Aruba', 'AW', 'ABW'),
(14, 'Australia', 'AU', 'AUS'),
(15, 'Austria', 'AT', 'AUT'),
(16, 'Azerbaijan', 'AZ', 'AZE'),
(17, 'Bahamas', 'BS', 'BHS'),
(18, 'Bahrain', 'BH', 'BHR'),
(19, 'Bangladesh', 'BD', 'BGD'),
(20, 'Barbados', 'BB', 'BRB'),
(21, 'Belarus', 'BY', 'BLR'),
(22, 'Belgium', 'BE', 'BEL'),
(23, 'Belize', 'BZ', 'BLZ'),
(24, 'Benin', 'BJ', 'BEN'),
(25, 'Bermuda', 'BM', 'BMU'),
(26, 'Bhutan', 'BT', 'BTN'),
(27, 'Bolivia', 'BO', 'BOL'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES'),
(29, 'Bosnia and Herzegovina', 'BA', 'BIH'),
(30, 'Botswana', 'BW', 'BWA'),
(31, 'Bouvet Island', 'BV', 'BVT'),
(32, 'Brazil', 'BR', 'BRA'),
(33, 'British Indian Ocean Territory', 'IO', 'IOT'),
(34, 'Brunei', 'BN', 'BRN'),
(35, 'Bulgaria', 'BG', 'BGR'),
(36, 'Burkina Faso', 'BF', 'BFA'),
(37, 'Burundi', 'BI', 'BDI'),
(38, 'Cambodia', 'KH', 'KHM'),
(39, 'Cameroon', 'CM', 'CMR'),
(40, 'Canada', 'CA', 'CAN'),
(41, 'Cape Verde', 'CV', 'CPV'),
(42, 'Cayman Islands', 'KY', 'CYM'),
(43, 'Central African Republic', 'CF', 'CAF'),
(44, 'Chad', 'TD', 'TCD'),
(45, 'Chile', 'CL', 'CHL'),
(46, 'China', 'CN', 'CHN'),
(47, 'Christmas Island', 'CX', 'CXR'),
(48, 'Cocos (Keeling) Islands', 'CC', 'CCK'),
(49, 'Colombia', 'CO', 'COL'),
(50, 'Comoros', 'KM', 'COM'),
(51, 'Congo', 'CG', 'COG'),
(52, 'Cook Islands', 'CK', 'COK'),
(53, 'Costa Rica', 'CR', 'CRI'),
(54, 'Ivory Coast', 'CI', 'CIV'),
(55, 'Croatia', 'HR', 'HRV'),
(56, 'Cuba', 'CU', 'CUB'),
(57, 'Curacao', 'CW', 'CUW'),
(58, 'Cyprus', 'CY', 'CYP'),
(59, 'Czech Republic', 'CZ', 'CZE'),
(60, 'Democratic Republic of the Congo', 'CD', 'COD'),
(61, 'Denmark', 'DK', 'DNK'),
(62, 'Djibouti', 'DJ', 'DJI'),
(63, 'Dominica', 'DM', 'DMA'),
(64, 'Dominican Republic', 'DO', 'DOM'),
(65, 'Ecuador', 'EC', 'ECU'),
(66, 'Egypt', 'EG', 'EGY'),
(67, 'El Salvador', 'SV', 'SLV'),
(68, 'Equatorial Guinea', 'GQ', 'GNQ'),
(69, 'Eritrea', 'ER', 'ERI'),
(70, 'Estonia', 'EE', 'EST'),
(71, 'Ethiopia', 'ET', 'ETH'),
(72, 'Falkland Islands (Malvinas)', 'FK', 'FLK'),
(73, 'Faroe Islands', 'FO', 'FRO'),
(74, 'Fiji', 'FJ', 'FJI'),
(75, 'Finland', 'FI', 'FIN'),
(76, 'France', 'FR', 'FRA'),
(77, 'French Guiana', 'GF', 'GUF'),
(78, 'French Polynesia', 'PF', 'PYF'),
(79, 'French Southern Territories', 'TF', 'ATF'),
(80, 'Gabon', 'GA', 'GAB'),
(81, 'Gambia', 'GM', 'GMB'),
(82, 'Georgia', 'GE', 'GEO'),
(83, 'Germany', 'DE', 'DEU'),
(84, 'Ghana', 'GH', 'GHA'),
(85, 'Gibraltar', 'GI', 'GIB'),
(86, 'Greece', 'GR', 'GRC'),
(87, 'Greenland', 'GL', 'GRL'),
(88, 'Grenada', 'GD', 'GRD'),
(89, 'Guadaloupe', 'GP', 'GLP'),
(90, 'Guam', 'GU', 'GUM'),
(91, 'Guatemala', 'GT', 'GTM'),
(92, 'Guernsey', 'GG', 'GGY'),
(93, 'Guinea', 'GN', 'GIN'),
(94, 'Guinea-Bissau', 'GW', 'GNB'),
(95, 'Guyana', 'GY', 'GUY'),
(96, 'Haiti', 'HT', 'HTI'),
(97, 'Heard Island and McDonald Islands', 'HM', 'HMD'),
(98, 'Honduras', 'HN', 'HND'),
(99, 'Hong Kong', 'HK', 'HKG'),
(100, 'Hungary', 'HU', 'HUN'),
(101, 'Iceland', 'IS', 'ISL'),
(102, 'India', 'IN', 'IND'),
(103, 'Indonesia', 'ID', 'IDN'),
(104, 'Iran', 'IR', 'IRN'),
(105, 'Iraq', 'IQ', 'IRQ'),
(106, 'Ireland', 'IE', 'IRL'),
(107, 'Isle of Man', 'IM', 'IMN'),
(108, 'Israel', 'IL', 'ISR'),
(109, 'Italy', 'IT', 'ITA'),
(110, 'Jamaica', 'JM', 'JAM'),
(111, 'Japan', 'JP', 'JPN'),
(112, 'Jersey', 'JE', 'JEY'),
(113, 'Jordan', 'JO', 'JOR'),
(114, 'Kazakhstan', 'KZ', 'KAZ'),
(115, 'Kenya', 'KE', 'KEN'),
(116, 'Kiribati', 'KI', 'KIR'),
(117, 'Kosovo', 'XK', '---'),
(118, 'Kuwait', 'KW', 'KWT'),
(119, 'Kyrgyzstan', 'KG', 'KGZ'),
(120, 'Laos', 'LA', 'LAO'),
(121, 'Latvia', 'LV', 'LVA'),
(122, 'Lebanon', 'LB', 'LBN'),
(123, 'Lesotho', 'LS', 'LSO'),
(124, 'Liberia', 'LR', 'LBR'),
(125, 'Libya', 'LY', 'LBY'),
(126, 'Liechtenstein', 'LI', 'LIE'),
(127, 'Lithuania', 'LT', 'LTU'),
(128, 'Luxembourg', 'LU', 'LUX'),
(129, 'Macao', 'MO', 'MAC'),
(130, 'Macedonia', 'MK', 'MKD'),
(131, 'Madagascar', 'MG', 'MDG'),
(132, 'Malawi', 'MW', 'MWI'),
(133, 'Malaysia', 'MY', 'MYS'),
(134, 'Maldives', 'MV', 'MDV'),
(135, 'Mali', 'ML', 'MLI'),
(136, 'Malta', 'MT', 'MLT'),
(137, 'Marshall Islands', 'MH', 'MHL'),
(138, 'Martinique', 'MQ', 'MTQ'),
(139, 'Mauritania', 'MR', 'MRT'),
(140, 'Mauritius', 'MU', 'MUS'),
(141, 'Mayotte', 'YT', 'MYT'),
(142, 'Mexico', 'MX', 'MEX'),
(143, 'Micronesia', 'FM', 'FSM'),
(144, 'Moldava', 'MD', 'MDA'),
(145, 'Monaco', 'MC', 'MCO'),
(146, 'Mongolia', 'MN', 'MNG'),
(147, 'Montenegro', 'ME', 'MNE'),
(148, 'Montserrat', 'MS', 'MSR'),
(149, 'Morocco', 'MA', 'MAR'),
(150, 'Mozambique', 'MZ', 'MOZ'),
(151, 'Myanmar (Burma)', 'MM', 'MMR'),
(152, 'Namibia', 'NA', 'NAM'),
(153, 'Nauru', 'NR', 'NRU'),
(154, 'Nepal', 'NP', 'NPL'),
(155, 'Netherlands', 'NL', 'NLD'),
(156, 'New Caledonia', 'NC', 'NCL'),
(157, 'New Zealand', 'NZ', 'NZL'),
(158, 'Nicaragua', 'NI', 'NIC'),
(159, 'Niger', 'NE', 'NER'),
(160, 'Nigeria', 'NG', 'NGA'),
(161, 'Niue', 'NU', 'NIU'),
(162, 'Norfolk Island', 'NF', 'NFK'),
(163, 'North Korea', 'KP', 'PRK'),
(164, 'Northern Mariana Islands', 'MP', 'MNP'),
(165, 'Norway', 'NO', 'NOR'),
(166, 'Oman', 'OM', 'OMN'),
(167, 'Pakistan', 'PK', 'PAK'),
(168, 'Palau', 'PW', 'PLW'),
(169, 'Palestine', 'PS', 'PSE'),
(170, 'Panama', 'PA', 'PAN'),
(171, 'Papua New Guinea', 'PG', 'PNG'),
(172, 'Paraguay', 'PY', 'PRY'),
(173, 'Peru', 'PE', 'PER'),
(174, 'Phillipines', 'PH', 'PHL'),
(175, 'Pitcairn', 'PN', 'PCN'),
(176, 'Poland', 'PL', 'POL'),
(177, 'Portugal', 'PT', 'PRT'),
(178, 'Puerto Rico', 'PR', 'PRI'),
(179, 'Qatar', 'QA', 'QAT'),
(180, 'Reunion', 'RE', 'REU'),
(181, 'Romania', 'RO', 'ROU'),
(182, 'Russia', 'RU', 'RUS'),
(183, 'Rwanda', 'RW', 'RWA'),
(184, 'Saint Barthelemy', 'BL', 'BLM'),
(185, 'Saint Helena', 'SH', 'SHN'),
(186, 'Saint Kitts and Nevis', 'KN', 'KNA'),
(187, 'Saint Lucia', 'LC', 'LCA'),
(188, 'Saint Martin', 'MF', 'MAF'),
(189, 'Saint Pierre and Miquelon', 'PM', 'SPM'),
(190, 'Saint Vincent and the Grenadines', 'VC', 'VCT'),
(191, 'Samoa', 'WS', 'WSM'),
(192, 'San Marino', 'SM', 'SMR'),
(193, 'Sao Tome and Principe', 'ST', 'STP'),
(194, 'Saudi Arabia', 'SA', 'SAU'),
(195, 'Senegal', 'SN', 'SEN'),
(196, 'Serbia', 'RS', 'SRB'),
(197, 'Seychelles', 'SC', 'SYC'),
(198, 'Sierra Leone', 'SL', 'SLE'),
(199, 'Singapore', 'SG', 'SGP'),
(200, 'Sint Maarten', 'SX', 'SXM'),
(201, 'Slovakia', 'SK', 'SVK'),
(202, 'Slovenia', 'SI', 'SVN'),
(203, 'Solomon Islands', 'SB', 'SLB'),
(204, 'Somalia', 'SO', 'SOM'),
(205, 'South Africa', 'ZA', 'ZAF'),
(206, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS'),
(207, 'South Korea', 'KR', 'KOR'),
(208, 'South Sudan', 'SS', 'SSD'),
(209, 'Spain', 'ES', 'ESP'),
(210, 'Sri Lanka', 'LK', 'LKA'),
(211, 'Sudan', 'SD', 'SDN'),
(212, 'Suriname', 'SR', 'SUR'),
(213, 'Svalbard and Jan Mayen', 'SJ', 'SJM'),
(214, 'Swaziland', 'SZ', 'SWZ'),
(215, 'Sweden', 'SE', 'SWE'),
(216, 'Switzerland', 'CH', 'CHE'),
(217, 'Syria', 'SY', 'SYR'),
(218, 'Taiwan', 'TW', 'TWN'),
(219, 'Tajikistan', 'TJ', 'TJK'),
(220, 'Tanzania', 'TZ', 'TZA'),
(221, 'Thailand', 'TH', 'THA'),
(222, 'Timor-Leste (East Timor)', 'TL', 'TLS'),
(223, 'Togo', 'TG', 'TGO'),
(224, 'Tokelau', 'TK', 'TKL'),
(225, 'Tonga', 'TO', 'TON'),
(226, 'Trinidad and Tobago', 'TT', 'TTO'),
(227, 'Tunisia', 'TN', 'TUN'),
(228, 'Turkey', 'TR', 'TUR'),
(229, 'Turkmenistan', 'TM', 'TKM'),
(230, 'Turks and Caicos Islands', 'TC', 'TCA'),
(231, 'Tuvalu', 'TV', 'TUV'),
(232, 'Uganda', 'UG', 'UGA'),
(233, 'Ukraine', 'UA', 'UKR'),
(234, 'United Arab Emirates', 'AE', 'ARE'),
(235, 'United Kingdom', 'GB', 'GBR'),
(236, 'United States', 'US', 'USA'),
(237, 'United States Minor Outlying Islands', 'UM', 'UMI'),
(238, 'Uruguay', 'UY', 'URY'),
(239, 'Uzbekistan', 'UZ', 'UZB'),
(240, 'Vanuatu', 'VU', 'VUT'),
(241, 'Vatican City', 'VA', 'VAT'),
(242, 'Venezuela', 'VE', 'VEN'),
(243, 'Vietnam', 'VN', 'VNM'),
(244, 'Virgin Islands, British', 'VG', 'VGB'),
(245, 'Virgin Islands, US', 'VI', 'VIR'),
(246, 'Wallis and Futuna', 'WF', 'WLF'),
(247, 'Western Sahara', 'EH', 'ESH'),
(248, 'Yemen', 'YE', 'YEM'),
(249, 'Zambia', 'ZM', 'ZMB'),
(250, 'Zimbabwe', 'ZW', 'ZWE');

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int(11) NOT NULL,
  `city` varchar(250) NOT NULL,
  `vacancy` varchar(250) NOT NULL,
  `industry` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `functional`
--

CREATE TABLE `functional` (
  `id` int(11) NOT NULL,
  `functional` varchar(250) NOT NULL,
  `status` enum('activate','deactivate') NOT NULL DEFAULT 'activate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `functional`
--

INSERT INTO `functional` (`id`, `functional`, `status`) VALUES
(1, 'Accounts / Finance / Tax', 'activate'),
(2, 'Agent', 'activate'),
(3, 'Banking', 'activate'),
(4, 'IT / Software', 'activate'),
(6, 'Teaching', 'activate'),
(7, 'Sales', 'activate'),
(8, 'Shipping', 'activate'),
(9, 'Marketing', 'activate'),
(10, 'Automobile', 'activate'),
(11, 'Construction / Facilities', 'activate'),
(12, 'Health Care', 'activate'),
(13, 'Telecommunication', 'activate'),
(14, 'Education Training', 'activate'),
(15, 'Restaurant / Food Services', 'activate'),
(16, 'Sales & Marketing', 'activate'),
(17, 'Hr Executive', 'activate');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `industry` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `industry`) VALUES
(1, 'Manufacturing'),
(2, 'Technology'),
(3, 'Investment'),
(4, 'Trade'),
(5, 'Retail'),
(6, 'Bank'),
(7, 'Infrastructure'),
(8, 'Factory'),
(9, 'Telecommunication'),
(10, 'Marketing'),
(11, 'Steel'),
(12, 'Production'),
(13, 'Goods'),
(14, 'Pharmaceuticals'),
(15, 'Production'),
(16, 'Automotive'),
(17, 'Textile'),
(18, 'Advertising'),
(19, 'Petrochemical'),
(20, 'Supermarket'),
(21, 'Food Processing'),
(22, 'Logistics'),
(23, 'Restaurant'),
(24, 'Newspaper'),
(25, 'Fashion'),
(26, 'Medical'),
(27, 'Electrical'),
(28, 'Aviation'),
(29, 'Electrnics'),
(30, 'NGO'),
(31, 'NGO'),
(32, 'Media'),
(33, 'Textile'),
(34, 'Texxtile'),
(35, 'Agriculture'),
(36, 'Education'),
(37, 'Engineering'),
(38, 'Pharma'),
(39, 'BPO'),
(40, 'NGO'),
(41, 'Ecommerce'),
(43, 'Power'),
(44, 'Manufacturing'),
(45, 'software');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_category`
--

CREATE TABLE `jobs_category` (
  `id` int(11) NOT NULL,
  `category` longtext NOT NULL,
  `parent_id` varchar(250) NOT NULL,
  `status` enum('activate','deactivate') NOT NULL DEFAULT 'activate'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_category`
--

INSERT INTO `jobs_category` (`id`, `category`, `parent_id`, `status`) VALUES
(8, 'Export / Import / Merchandising', '7', 'activate'),
(11, 'Hotels / Restaurants', '9', 'activate'),
(12, 'HR / Administration / IR', '9', 'activate'),
(13, 'IT Software - Application Programming / Maintenance', '4', 'activate'),
(14, 'IT Software - Client Server', '4', 'activate'),
(15, 'IT Software - DBA / Datawarehousing', '4', 'activate'),
(16, 'IT Software - E-Commerce / Internet Technologies', '4', 'activate'),
(17, 'IT Software - Embedded / EDA / VLSI / ASIC / Chip Des', '4', 'activate'),
(18, 'IT Software - ERP / CRM', '4', 'activate'),
(19, 'IT Software - Mainframe', '4', 'activate'),
(20, 'IT Software - Middleware', '4', 'activate'),
(21, 'IT Software - Mobile', '4', 'activate'),
(22, 'IT Software - Network Administration / Security', '4', 'activate'),
(23, 'IT Software - QA & Testing', '4', 'activate'),
(24, 'IT Software - System Programming', '4', 'activate'),
(25, 'IT Software - Systems / EDP / MIS', '4', 'activate'),
(26, 'IT Software - Telecom Software', '4', 'activate'),
(27, 'IT- Hardware / Telecom / Technical Staff / Support', '4', 'activate'),
(28, 'ITES / BPO / KPO / Customer Service / Operations	', '4', 'activate'),
(35, 'Production / Maintenance / Quality', '8', 'activate'),
(36, 'Sales / Retail / Business Development', '2', 'activate'),
(42, 'Supply Chain / logistics / Purchase / Materials', '8', 'activate'),
(43, 'Teaching / Education / Training / Councelling', '6', 'activate'),
(46, 'Top Management - Non IT', '8', 'activate'),
(50, 'Accounts / Finance / Tax / CS / Audit', '3', 'activate'),
(51, 'Web designer', '4', 'activate'),
(53, 'Cashier', '1', 'activate'),
(54, 'Cashier', '1', 'activate'),
(55, 'Software Tester', '4', 'activate'),
(56, 'Software Developer', '4', 'activate'),
(57, 'Clerk', '3', 'activate'),
(58, 'Mathematics Teacher', '6', 'activate'),
(59, 'Principal', '6', 'activate'),
(60, 'Sales Man', '7', 'activate'),
(61, 'Sales Woman', '7', 'activate'),
(62, 'B2B Marketing', '9', 'activate'),
(63, 'Autocad Design Engineer', '10', 'activate'),
(64, 'Mechanical Engineer', '10', 'activate'),
(65, 'Mechanical Maintenance Engineer', '10', 'activate'),
(66, 'Mechanical Supervisor', '10', 'activate'),
(67, 'Trainee Mechanical Engineer', '10', 'activate'),
(68, 'Disel Mechanic', '10', 'activate'),
(69, 'Construction Manager', '11', 'activate'),
(70, 'Construction Supervisor', '11', 'activate'),
(71, 'Project Manager Construction', '11', 'activate'),
(72, 'Building Construction', '11', 'activate'),
(73, 'Road Construction', '11', 'activate'),
(74, 'Civil Construction', '11', 'activate'),
(75, 'Health Care', '12', 'activate'),
(76, 'Medical Billing', '12', 'activate'),
(77, 'Health Care Sales', '12', 'activate'),
(78, 'Medical Sales', '12', 'activate'),
(79, 'Pharma Sales', '12', 'activate'),
(80, 'Healthcare Help Desk', '12', 'activate'),
(81, 'Health Insurance', '12', 'activate'),
(82, 'Healthcare Marketing', '12', 'activate'),
(83, 'Telecommunication', '13', 'activate'),
(84, 'Telecom Testing', '13', 'activate'),
(85, 'Customer Service', '13', 'activate'),
(86, 'Customer Support Executive', '13', 'activate'),
(87, 'Overseas Education', '14', 'activate'),
(88, 'Student Visa', '14', 'activate'),
(89, 'Study Abroad', '14', 'activate'),
(90, 'Educational Sales', '14', 'activate'),
(91, 'Academic Counsellor', '14', 'activate'),
(92, 'Teacher Trainer Head', '14', 'activate'),
(93, 'Soft Skill Trainer', '14', 'activate'),
(94, 'Software Sales', '16', 'activate'),
(95, 'B2C Sales', '16', 'activate'),
(96, 'Telesales', '16', 'activate'),
(97, 'Showroom Sales Executive', '16', 'activate'),
(98, 'Marketing Manager', '16', 'activate'),
(99, 'Field Sales', '16', 'activate'),
(100, 'Export Sales', '16', 'activate'),
(101, 'Industrial Sales', '16', 'activate'),
(102, 'Hr Executive', '17', 'activate');

-- --------------------------------------------------------

--
-- Table structure for table `job_search`
--

CREATE TABLE `job_search` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `function` varchar(999) NOT NULL,
  `skill` varchar(9999) NOT NULL,
  `company_name` varchar(1000) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `job_type` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `candidate_description` longtext NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` mediumtext NOT NULL,
  `industry` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `experience1` varchar(250) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `salary` varchar(500) DEFAULT NULL,
  `salary1` varchar(250) DEFAULT NULL,
  `not_disclosed` varchar(250) DEFAULT NULL,
  `deadline_date` varchar(250) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `pin_code` varchar(250) NOT NULL,
  `vacancy` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` enum('accept','reject','pending') NOT NULL DEFAULT 'accept',
  `phone_status` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_search`
--

INSERT INTO `job_search` (`id`, `title`, `function`, `skill`, `company_name`, `state`, `city`, `category`, `job_type`, `description`, `candidate_description`, `email`, `phone`, `address`, `industry`, `experience`, `experience1`, `qualification`, `salary`, `salary1`, `not_disclosed`, `deadline_date`, `contact_person`, `pin_code`, `vacancy`, `date`, `status`, `phone_status`) VALUES
(31, 'Web Designer', '1', 'HTML & CSS,Email marketing,Search Engine and Keyword Optimization', 'ABA CORP', 'Uttar Pradesh', 'Noida', 'Trainee Mechanical Engineer', 'Part Time', '<p>Test</p>', '<p>test</p>', 'pgdmdelhi@gmail.com', '8447751061', 'C-213 Sector 63 Noida ', 'Automotive', '2 Year', '2 Month', 'B-Tech', '2 Lakh', '1 Thousand', 'Not Disclosed', '01-11-2019', 'NEHA', '201301', '8', '21-10-2019', 'accept', ''),
(32, 'Software Developer', '4', 'PHP,Java,.Net', 'MAX3LOGIC IT SOLUTIONS PVT LTD', 'Uttar Pradesh', 'Noida', 'Software Developer', 'Full Time', '<p>oo</p>', '<p>oo</p>', 'info@max3logic.com', '9891713266', 'E 113 Sector 6 ', 'Technology', '1 Year', '5 Month', 'BCA', '1 Lakh', '10 Thousand', NULL, '30-06-2020', 'Ankurr', '', '10', '15-06-2020', 'accept', 'hide');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `id` int(11) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `parent_id` int(100) NOT NULL,
  `status` enum('activate','deactivate','','') NOT NULL DEFAULT 'activate'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `skill`, `parent_id`, `status`) VALUES
(1, 'Data analysis', 13, 'activate'),
(2, 'Web analytics ', 26, 'activate'),
(3, 'HTML & CSS', 25, 'activate'),
(4, 'Wordpress', 11, 'activate'),
(5, 'Email marketing', 13, 'activate'),
(6, 'Web scraping', 13, 'activate'),
(7, 'CRO and A/B Testing', 13, 'activate'),
(8, 'Data visualization & pattern-finding through critical thinking', 13, 'activate'),
(9, 'Search Engine and Keyword Optimization', 13, 'activate'),
(10, 'Project/campaign management', 13, 'activate'),
(11, 'Social media and mobile marketing ', 20, 'activate'),
(12, 'Paid social media advertisements', 13, 'activate'),
(13, 'B2B Marketing', 13, 'activate'),
(14, 'The 4 P-s of Marketing', 13, 'activate'),
(15, 'Consumer Behavior Drivers', 13, 'activate'),
(16, 'Brand management', 13, 'activate'),
(17, 'Creativity', 13, 'activate'),
(18, 'Copywriting', 13, 'activate'),
(19, 'Storytelling', 16, 'activate'),
(20, 'Sales', 13, 'activate'),
(21, 'CMS Tools', 13, 'activate'),
(22, 'Six Sigma techniques', 13, 'activate'),
(23, 'Emotional Intelligence', 13, 'activate'),
(24, 'Business Development', 17, 'activate'),
(25, 'Technological savviness', 13, 'activate'),
(26, 'Customer Relationship Management (CRM)', 13, 'activate'),
(27, 'Product knowledge', 18, 'activate'),
(28, 'Social media/digital communication', 13, 'activate'),
(29, 'Photo editing ', 13, 'activate'),
(30, 'Adobe Creative Suite: Illustrator, InDesign, Photoshop', 13, 'activate'),
(31, 'Integration of visual communication in social media platforms', 27, 'activate'),
(32, 'Interactive media design', 13, 'activate'),
(33, 'Research and data analysis', 13, 'activate'),
(34, 'Microsoft Office Pack: Word, Excel, Access, Publisher, Outlook, Powerpoint', 13, 'activate'),
(35, 'Data entry', 13, 'activate'),
(36, 'Cloud networking and file sharing ', 13, 'activate'),
(37, 'Big Data Analysis & SQL', 13, 'activate'),
(38, 'Revenue recognition', 13, 'activate'),
(39, 'Accounting Software', 13, 'activate'),
(40, 'Javascript', 13, 'activate'),
(41, 'Graphic User Interfaces (GUI)', 13, 'activate'),
(42, 'Application Programming Interface (API)', 13, 'activate'),
(43, 'Responsive design principles', 36, 'activate'),
(44, 'Data Mapping', 13, 'activate'),
(45, 'Machine learning ', 28, 'activate'),
(46, 'Technical and non-technical communication', 13, 'activate'),
(47, 'Advanced Cardiac Life Support (ACLS)', 13, 'activate'),
(48, 'Infection control', 13, 'activate'),
(49, 'Surgery preparation', 13, 'activate'),
(50, 'PHP', 16, 'activate'),
(51, 'PHP', 56, 'activate'),
(52, 'Java', 56, 'activate'),
(53, '.Net', 56, 'activate');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`id`, `name`, `email`, `phone`, `location`, `date`) VALUES
(1, 'SURENDER', 'SURENDER@GMAIL.COM', '9896989698', 'Indore', '26-09-2019'),
(2, 'GUFRAN SIDDIQUI', 'GUFRAN.28@GMAIL.COM', '9891713266', 'Noida', '28-09-2019'),
(3, 'GUFRAN SIDDIQUI', 'GUFRAN.28@GMAIL.COM', '9891713266', 'Noida', '28-09-2019'),
(4, 'SURENDER', 'SURENDER123@GMAIL.COM', '9899895626', 'Faridabad', '28-09-2019'),
(5, 'POOJA', 'POOJA@GMAIL.COM', '9895945545', 'Noida', '28-09-2019'),
(6, 'SARTAJ', 'PGDMDELHI1@GMAIL.COM', '9718621658', 'Noida', '01-10-2019'),
(7, 'SARTAJ', 'PGDMDELHI1@GMAIL.COM', '9718621658', 'Mumbai', '01-10-2019'),
(8, 'MD GUFRAN', 'GUFRAN.28@GMAIL.COM', '9891713266', 'Noida', '03-10-2019'),
(9, 'GUFRAN SIDDIQUI', 'GUFRAN.28@GMAIL.COM', '9891713266', 'Noida', '03-10-2019'),
(10, 'ALAM', 'PGDMDELHI1@GMAIL.COM', '8447751061', 'Mumbai', '03-10-2019'),
(11, 'MD Gufran', 'gufran.28@gmail.com', '9891713266', 'Noida', '08-10-2019'),
(12, 'Alam', 'sartaj110@gmail.com', '8447751061', 'Noida', '09-10-2019'),
(13, 'Alam', 'pgdmdelhi1@gmail.com', '8447751061', 'Noida', '10-10-2019'),
(14, 'Alam', 'pgdmdelhi1@gmail.com', '8447751061', 'Delhi', '16-10-2019'),
(15, 'ALAM', 'mycountrymyjob@gmail.com', '8447751061', 'Noida', '19-10-2019'),
(16, 'ALAM', 'pgdmdelhi1@gmail.com', '8447751061', 'Gaya', '31-10-2019'),
(17, 'ALAM', 'pgdmdelhi1@gmail.com', '8447751061', 'Siwan', '04-11-2019'),
(18, 'alam', 'alam@gmail.com', '9512345678', 'Arainj-Laka-Punga', '21-11-2019'),
(19, 'ALAM', 'pgdmdelhi1@gmail.com', '8447751061', 'Cadell Point', '01-12-2019'),
(20, 'ALAM', 'pgdmdelhi1@gmail.com', '8447751061', 'Lucknow', '29-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `id` int(11) NOT NULL,
  `about_company_limit` varchar(100) NOT NULL,
  `inner_limit` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`id`, `about_company_limit`, `inner_limit`) VALUES
(1, '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pagination_limit`
--

CREATE TABLE `pagination_limit` (
  `id` int(11) NOT NULL,
  `limit_p` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagination_limit`
--

INSERT INTO `pagination_limit` (`id`, `limit_p`) VALUES
(1, '10');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `qualification` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `qualification`) VALUES
(1, 'BCA'),
(2, 'B-Tech'),
(3, 'BA'),
(4, 'MBA'),
(5, 'MCA'),
(6, 'BBA'),
(7, 'B.SC'),
(8, 'M.SC'),
(9, 'B.Pharmacy'),
(10, '10th'),
(11, '12th'),
(12, 'B.Arch'),
(13, 'LLB'),
(14, 'BAMS'),
(15, 'B.Com'),
(16, 'BDS'),
(17, 'MBBS'),
(18, 'BVSc'),
(19, 'CA'),
(20, 'B.Design'),
(21, 'B.P.Ed'),
(22, 'BEd'),
(23, 'CS'),
(24, 'B.fashionTech'),
(25, 'B.F.Sc(fisheries)'),
(26, 'BHM'),
(27, 'ICWA'),
(28, 'BFA'),
(29, 'BSW'),
(30, 'LLM'),
(31, 'MA'),
(32, 'ME/M.Tech'),
(33, 'MSW'),
(34, 'M Phil / Ph.D '),
(35, 'PGDA'),
(36, 'MEd'),
(37, 'PG Diploma'),
(38, 'M.Arch'),
(39, 'MHM'),
(40, 'MVSc'),
(41, 'M.Com'),
(42, 'MD'),
(43, 'MS'),
(44, 'MPED'),
(45, 'M.Pharmacy'),
(46, 'MDS'),
(47, 'M.F.Sc(Fisheries)'),
(48, 'Certificate Course (ITI)'),
(49, 'Vocational Training'),
(50, 'Diploma'),
(51, 'No Education / Schooling');

-- --------------------------------------------------------

--
-- Table structure for table `save_employee`
--

CREATE TABLE `save_employee` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `employee_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save_employee`
--

INSERT INTO `save_employee` (`id`, `email`, `employee_id`, `employee_name`, `category`, `skill`, `state`, `city`, `date`) VALUES
(10, 'INFO@MAX3LOGIC.COM', '133', 'Shantanu Sahu', 'IT Software - E-Commerce / Internet Technologies', 'HTML & CSS,Technical and non-technical communication', 'Uttar Pradesh', 'Lucknow', '17-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `save_job`
--

CREATE TABLE `save_job` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `job_id` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save_job`
--

INSERT INTO `save_job` (`id`, `email`, `job_id`, `company_name`, `category`, `skill`, `state`, `city`, `date`) VALUES
(4, 'uttamsahu1998@gmail.com', '30', 'MAX3LOGIC IT SOLUTIONS PVT LTD', 'Software Developer', 'Web analytics,HTML & CSS,Wordpress', 'Uttar Pradesh', 'Noida', '17-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(500) NOT NULL,
  `url` text NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `status`, `url`) VALUES
(0, 'php_programmer_job.jpg', '', 'https://www.crb.co.in/jobs/php-developer-jobs-in-chennai.html'),
(0, 'banners-careers.png', '', 'http://www.laraibtechnology.com/careers/');

-- --------------------------------------------------------

--
-- Table structure for table `state_name`
--

CREATE TABLE `state_name` (
  `id` int(11) NOT NULL,
  `state` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_name`
--

INSERT INTO `state_name` (`id`, `state`) VALUES
(1, 'Andaman & Nicobar'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Orissa'),
(27, 'Pondicherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttaranchal'),
(35, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `title`) VALUES
(1, 'Manager'),
(2, 'Software Developer'),
(3, 'Web Designer'),
(4, 'Web Developer'),
(6, 'Account Manager'),
(7, 'Data Analyst'),
(8, 'Field Manager'),
(9, 'Supervisor'),
(10, 'Software Tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_registration`
--
ALTER TABLE `candidate_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_name`
--
ALTER TABLE `city_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_registration`
--
ALTER TABLE `company_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `functional`
--
ALTER TABLE `functional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_category`
--
ALTER TABLE `jobs_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_search`
--
ALTER TABLE `job_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagination_limit`
--
ALTER TABLE `pagination_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_employee`
--
ALTER TABLE `save_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_job`
--
ALTER TABLE `save_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_name`
--
ALTER TABLE `state_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `candidate_registration`
--
ALTER TABLE `candidate_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `city_name`
--
ALTER TABLE `city_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1503;

--
-- AUTO_INCREMENT for table `company_registration`
--
ALTER TABLE `company_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `functional`
--
ALTER TABLE `functional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jobs_category`
--
ALTER TABLE `jobs_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `job_search`
--
ALTER TABLE `job_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagination_limit`
--
ALTER TABLE `pagination_limit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `save_employee`
--
ALTER TABLE `save_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `save_job`
--
ALTER TABLE `save_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state_name`
--
ALTER TABLE `state_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
