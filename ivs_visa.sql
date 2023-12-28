-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 07:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivs_visa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456'),
(2, 'setu kumar', 'setukumar@jingleinfo.com', 'Jingle');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passport_number` varchar(100) NOT NULL,
  `docket_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `passport_number`, `docket_number`) VALUES
(1, 'Setu kumar', 'setukumar@jingleinfo.com', '9504454903', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `createdate` varchar(100) NOT NULL,
  `modifydate` varchar(100) NOT NULL,
  `metatitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metades` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `createdate`, `modifydate`, `metatitle`, `metakeywords`, `metades`, `slug`, `status`) VALUES
(18, 'Where can I get some. Where can I get some.', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p>\r\n\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p>\r\n\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p>\r\n\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).&nbsp;</p>\r\n\r\n<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '3.jpg', '07-03-2019 06:51:47', '30-05-2023 13:48:24', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, rete', 'Lorem ipsum dolor ,Lorem ipsum dolor w,qLorem ipsum dolor ,Lorem ipsum dolor q', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'where-can-i-get-some-where-can-i-get-some', '1'),
(19, 'With Category', '<p>Lorem ipsum dolor Lorem ipsum dolor&nbsp;</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&nbsp;</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&nbsp;</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&nbsp;</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>', '4.jpg', '07-03-2019 06:52:56', '07-03-2019 06:52:56', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, rete', 'asfw,wadfa,try,wawf,aegcefRFZAG,AZEWDAF', 'onsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipis onsectetur adipis onsectetur adipis onsectetur adipis', 'with-category', '0'),
(23, 'White Water Rafting', '<p><span style=\"color:rgb(119, 119, 119); font-family:poppins,sans-serif; font-size:15px\">Rope courses basically involve crossing between two points primarily using ropes. These activities act as the stepping stone for most participants...</span></p>\r\n', 'sbg5_(2).jpg', '07-03-2019 06:57:03', '27-07-2023 09:12:31', 'Rope courses basically involve crossing between two points primarily using ropes. These activities act as the stepping stone for most participants...', 'White Water Rafting,River Rafting', 'White Water Rafting Altutude adventure', 'white-water-rafting', '1'),
(24, 'Black Packing', '<p><span style=\"color:rgb(119, 119, 119); font-family:poppins,sans-serif; font-size:15px\">A high adrenaline activity that is popular with people of all ages. The excitement begins as the participants learn about the climbing principles...</span></p>\r\n', 'sbg4_(1).jpg', '07-03-2019 06:57:50', '27-07-2023 09:11:01', 'Black Packing Adventure', 'Black Packing,Adventure', 'Black Packing Altitude Adventure', 'black-packing', '1'),
(29, 'Camp Craft', '<p><span style=\"color:rgb(119, 119, 119); font-family:poppins,sans-serif; font-size:15px\">These are some of the most essential skills that all adventurers need. From putting up a tent to an improvised shelter, building a camp fire...,</span></p>\r\n', 'sbg1.jpg', '05-06-2023 11:57:25', '27-07-2023 09:18:36', 'Camp Craft', 'Camp Craft,Altitude', 'Camp Craft Altitude Adventure', 'camp-craft', '1'),
(31, 'Rope Courses', '<p><span style=\"color:rgb(119, 119, 119); font-family:poppins,sans-serif; font-size:15px\">Rope courses basically involve crossing between two points primarily using ropes. These activities act as the stepping stone for most participants...</span></p>\r\n', 'blog12.jpg', '14-06-2023 13:03:59', '27-07-2023 09:06:59', 'Rope Courses', 'Rope Courses,Altitute', 'Rope Courses Altitude adventure', 'rope-courses', '1'),
(34, 'Ivs_Vusa Service', '<p><span style=\"font-size:14px\">international Visa Services Provice all type of visa in any country</span></p>\r\n', 'business-600x800.jpg', '28-07-2023 15:36:08', '28-07-2023 15:36:08', 'Ivs Visa Service', 'ivsvisa services', 'Visa services in Delhi,Visa processing service IVS', 'ivsvusa-service', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `blog_id` int(20) NOT NULL,
  `comments` text NOT NULL,
  `replay` int(20) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `name`, `email`, `blog_id`, `comments`, `replay`, `date`, `status`) VALUES
(15, 'mukhram', 'nadaankumar@gmail.com', 23, 'hiii', 0, '08-03-2019 11:52:55', '1'),
(17, 'sadfddsaa', 'nadaaxnkumar@gmail.com', 22, 'test', 16, '08-03-2019 12:03:41', '0'),
(19, 'mukhramaa', 'mukhram@crispdigital.in', 23, 'asdsadsadasd\n', 0, '08-03-2019 13:17:03', '0'),
(28, 'Gaurav', 'mukhram1@gmail.com', 24, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', 26, '26-03-2019 05:59:18', '1'),
(29, 'Mukhram', 'mukhram1@gmail.com', 24, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. ', 26, '26-03-2019 05:59:29', '1'),
(32, 'Gaurav', 'mrsw@gmail.com', 24, 'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 27, '26-03-2019 08:50:28', '0'),
(33, 'Mukhram', 'prince.kd10@gmail.com', 25, ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure t', 10, '26-03-2019 12:02:57', '1'),
(35, 'Raj Kumar', 'prince.kd10@gmail.com', 25, ' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure t', 10, '26-03-2019 12:03:13', '1'),
(40, 'Mukhram', 'prince.kd10@gmail.com', 24, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.\n\n', 26, '30-03-2019 13:38:15', '1'),
(44, 'Hena rao', 'admin@gmail.com', 18, 'HI henna i have appluy to tehe process of the hj  ', 0, '28-08-2023 14:47:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Argentina'),
(5, 'Australia'),
(6, 'Bangladesh'),
(7, 'Belgium'),
(8, 'Canada'),
(9, 'Denmark'),
(11, 'Malaysia'),
(12, 'New Zealand'),
(13, 'Oman'),
(14, 'Russia'),
(15, 'South Africa'),
(16, 'United Kingdom'),
(17, 'United States of America'),
(18, 'Pakistan'),
(19, 'England'),
(20, 'Iceland'),
(23, 'Noida'),
(24, 'Russia');

-- --------------------------------------------------------

--
-- Table structure for table `countries_pages`
--

CREATE TABLE `countries_pages` (
  `id` int(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `visa_type` varchar(255) NOT NULL,
  `images` varchar(200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `short_description` varchar(2000) NOT NULL,
  `long_description` varchar(4000) NOT NULL,
  `title2` varchar(500) NOT NULL,
  `Notes` varchar(2000) NOT NULL,
  `metatitle` varchar(200) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries_pages`
--

INSERT INTO `countries_pages` (`id`, `country`, `visa_type`, `images`, `title`, `short_description`, `long_description`, `title2`, `Notes`, `metatitle`, `keyword`, `status`) VALUES
(1, '', '', '', 'International services', '<p>ghtrjhtrujhtr</p>\r\n', ' ghtruhtrhut ', 'gtrhtrhjtr', 'International visa services', 'gtrhrt', 'ghtrjhytk', 0),
(2, '', '', '', 'South aferica', '<p>service visa</p>\r\n', 'service visa', 'nbgbmnhgm', 'service visa', 'grfgrtf', 'gnghn', 0),
(3, '', 'Student visa', '', 'United state of America', ' Fill out United States of America tourist visa application form online', ' This new order applies to all air passengers - including U.S. citizens and legal permanent residents - aged 2 years and older. Acceptable documentation of recovery from COVID-19 includes both a positive viral test result within 3 months of travel AND a letter from a healthcare provider or public health official stating that the passenger is cleared to end isolation.', 'visa services', '  After completing the online application, most applicants will be required to have an appointment at an Offsite Facilitation Center (OFC) prior to their appointment at the Consular Sections. Biometric information including fingerprints and digital photographs will be collected at the OFC.\r\nApplicants for U.S. visas are required to appear in person twice.\r\n1.For an appointment at the OFC\r\n2.For the visa interview at the U.S. Embassy or Consulate.', 'Ivs Visa Service', 'services', 0),
(4, '', 'Tourist visa', '', 'Fill out United Kingdom tourist visa application form online', ' Note: Embassy will take 10-15 business days in process post submission of the documents.\r\n\r\nEmbassy fee is paid after taking appointment. Applicant needs to pay through his/her credit card.\r\n\r\n\r\nIn the next 5 business hours your Visa caseworker will contact you to discuss your visa application.\r\n', ' Having to get a visa to United Kingdom takes all the fun out of traveling.\r\nWe are here to get it back. Just apply online below and let us do the rest', 'ivs servicces', ' United Kingdom tourist visa fees for citizens of India', 'Ivs Visa Service', 'services', 0),
(5, '', 'Business visa', '', 'United Kingdom Business visa', ' Having to get a visa to United Kingdom takes all the fun out of traveling.\r\nWe are here to get it back. Just apply online below and let us do the rest', ' All passport photos must be size 45x35mm\r\n\r\nNote: Embassy will take 10-15 business days in process post submission of the documents.\r\n\r\nEmbassy fee is paid after taking appointment. Applicant needs to pay through his/her credit card.\r\n\r\n\r\nIn the next 5 business hours your Visa caseworker will contact you to discuss your visa application.', 'visa services', ' United Kingdom business visa fees for citizens of India', 'Ivs Visa Service', 'business visa', 0),
(6, '', 'United Kingdom business visa', '', 'United Kingdom business visa fees for citizens of India', ' United Kingdom business visa fees for citizens of India', ' United Kingdom business visa fees for citizens of India', 'United Kingdom business visa fees for citizens of India', ' United Kingdom business visa fees for citizens of India', 'United Kingdom business visa fees for citizens of India', 'United Kingdom business visa fees for citizens of India', 0),
(7, '', 'United Kingdom business visa', '', 'dsddsddsdsfsagqh uywgdui uygewuy', ' fvgehtruj y tujy6i', ' hyjytkyt yut55y        y5t ry54t', 'dcdvjkfln edfihreui ', ' hyyjkl rieotjrio rojitrj ', 'Ivs Visa Service', 'services', 0),
(8, '5', 'Student Visa', '', 'Australia tourist visa fees for citizens of India', ' Please note! All pax above 70 years must have Health Insurance\r\n\r\nPlease mind: The Embassy Fee stated below includes the VFS Fee.', ' Other documents\r\n\r\n• Conference/event registration details\r\n\r\n• Detailed itinerary, with contact details of the business parties involved\r\n\r\n• Your employment contract and previous Experience letter(NEW JOINEE CASE )\r\n\r\n• Details of your educational and professional qualifications\r\n\r\n• Family Id proof copy\r\n\r\n• Marriage certificate, Birth certificate\r\n\r\n• Current Address proof (Rent Agreement or Ownership proof)', 'United Kingdom business visa fees for citizens of India', ' Please mind: The Embassy Fee stated below includes the VFS Fee.', 'Ivs Visa Service', 'services', 0),
(9, '', '', '52.png', 'Denmark\'s Tourist Visa Requirements.', '<p>Having to get a visa to Denmark takes all the fun out of traveling. We are here to get it back. Just apply online below and let us do the rest</p>\r\n', 'When applying for a Schengen visa please select the destination you will be staying in for the lengthiest time as you will be required to submit an application to the consulate of the country you will be staying in for the longest duration.\r\n\r\nIvs Visa provides consultancy and administrative service. All first time visitors must visit the embassy/consulate to submit their biometrics.\r\nApplicants who traveled to Schengen countries after November 2015 will not be required to visit the embassy/consulate and VisaHQ can submit the applications on their behalf. ', 'visa services', ' Fill out Denmark tourist visa application form online\r\nDenmark tourist visa fees for citizens of India ', 'Ivs Visa Service', 'Visa servics', 0),
(10, '', '', 'Online_Visa_Tracking_Tool.jpg', 'Setu', '<p>Kumar</p>\r\n', 'identity of the visa is applicable of the  ', 'rregrege', 'ggghhhhhh ', 'gregregre', 'rfgregr', 0),
(11, '17', 'Student Visa', '64S.png', 'USA STUDENT VISA', ' USA STUDENT VIS REQUIREMENTS IS AVILABE FOR INDIAN IS DETAILS BELOW', ' CHECK ALL REQUIREMENTS AND DETAILS INFORMATION OF USA', 'visa services', ' ALL DODUMENTS IS ABILABLE', 'Ivs Visa Service', 'USA VISA', 0),
(12, 'United Kingdom', 'Student', 'login.png', 'cdgvfgb', ' fgverge', ' fbgrtfhb', 'bgtrh', ' bfbfrgbh', 'fbtrgfhnt', 'bgrftgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `countryfact`
--

CREATE TABLE `countryfact` (
  `id` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `area` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `population` varchar(200) NOT NULL,
  `time` varchar(150) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `capital` varchar(200) NOT NULL,
  `climate` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `airline` varchar(250) NOT NULL,
  `holiday` longtext NOT NULL,
  `airport` varchar(150) NOT NULL,
  `Status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countryfact`
--

INSERT INTO `countryfact` (`id`, `country`, `name`, `area`, `location`, `population`, `time`, `currency`, `capital`, `climate`, `language`, `airline`, `holiday`, `airport`, `Status`) VALUES
(5, 'United States of America', 'High Commision USA', '540000 sq km', 'India', '5 billion', '5 hr', 'Doller', 'Delhi', 'Northern', 'english', 'airbus', '<p>all gov holiday applicable</p>\r\n', 'Airbus', 'active'),
(6, 'England', 'High Commision UK', '78000 Sq Km2', 'Europian Country', '98 Cr', '+2.3 IST', 'Doller', 'Botentcal City', 'Colid', 'english, British english', 'Indigo', '<p>All Gov Holiday is applicable...</p>\r\n', '5 international airport', 'active'),
(7, 'Canada', 'Canada', '9,958,319 sq kms', 'North America', '34,834,841 (July 2014 est.)', 'Spans six time zones varying from IST (-) 9 hrs', 'Canadian Dollar (CAD) 1 = INR 52.08.', 'Ottawa', 'Climate graphs for the various provinces and territories may be found in the relevant entries below.', 'English (official) 58.8%, French (official) 21.6%, other 19.6%', 'Air Canada (AC), Canadian Airlines Int’l (CP),', '<p>Year 2023: 1 Jan New Years Day, 3 Apr Good Friday, 5 Apr Easter Sunday, 25 May Victoria Day, 1 Jul Canada Day, 7 Sep Labour Day, 12 Oct Thanksgiving Day, 11 Nov Remembrance Day, 25 Dec Christmas Day, 26 Dec Boxing Day.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Calgary (YYC), Edmonton (YEG), Halifax (YHZ), Montreal (YMX), Ottawa (YOW), Toronto (YYZ), Vancouver (YVR), Winnipeg (YWG),', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `diplomatic`
--

CREATE TABLE `diplomatic` (
  `id` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `pin_code` varchar(250) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `Fax` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Office` varchar(200) NOT NULL,
  `Visa` varchar(200) NOT NULL,
  `Collection` varchar(200) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Notes` longtext NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diplomatic`
--

INSERT INTO `diplomatic` (`id`, `country`, `city`, `Name`, `Address`, `pin_code`, `Telephone`, `Fax`, `Email`, `Office`, `Visa`, `Collection`, `Website`, `Notes`, `status`) VALUES
(1, '16', '', 'High Commission of Britain', 'Shantipath, Chanakyapuri, New Delhi', '110021', '2687 2161 / 2410 0017 (Help-Line), 24100020/ 21/ 2', '2687 0060 / 2611 6094', 'conqry.newdelhi@fco.gov.uk', 'Mon to Fri: 0800 to 1700 hrs', 'Mon to Fri: 0800 to 1700 hrs', 'Mon to Fri: 0800 to 1700 hrs', '', ' This is a British Overseas Territory. Visa is Handled by British High Commission', 'active'),
(3, '7', '', 'Goverment of belgium', 'Belgium city sector34', 'belgium 3201410', '+98 65475421', '654874/6547', 'belgiumhighcom.bk', 'Mon to Fri 9:00 am to 6:00pm', 'all day', 'Except Sunday', 'www.belgiumhighcomition.com', '<p>we all have been decide to apply visa online process for further details have been, posted ad belgium high commmition and all the process of</p>\r\n\r\n<p>apply and details habe been&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; further provided by the hifh commition</p>\r\n\r\n<p>the high court of indiya is applyed for the process of criminal court against of crimaibnal and alll the victum of the nothing procced as per.</p>\r\n', 'active'),
(4, '14', '3', ' Consulate General of the Russian Federation', 'No.33 (old No.14), Santhome High Road, Mylapore, 600 004', 'Mylapore, 600 004', '044- 2498 2330 / 2320', '044- 2498 2336', 'ruschennai@ya.ru', 'Office Timings: Mon to Fri, 0800 to 1400 hrs and 1530 to 1830 hrs (Mon, Thurs) and 0800 to 1400 hrs', 'Visa Timings: 0930 to 1230 hrs (Mon, Wed and Fri); For Visa Application (1230 to 1400 hrs)', 'Collection Timings: 0930 to 1230 hrs', 'ruschenna.uk', '<p>Territory Jurisdiction: Visa is handled for Tamil Nadu, Andhra Pradesh, Karnataka, Kerala, Puducherry.</p>\r\n', 'active'),
(5, 'Australia', 'Chennai', 'High Commision USA', 'New Delhi india', 'ss2222222', '654847584', '', 'admin@gmail.com', '222222222', '22222222222', '', '22222222', '<p>22222222222</p>\r\n', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `egencia_application`
--

CREATE TABLE `egencia_application` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `passport_number` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `visa_type` varchar(100) NOT NULL,
  `exp_date` date NOT NULL,
  `billing` varchar(100) NOT NULL,
  `chkAgreeTerm` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `egencia_application`
--

INSERT INTO `egencia_application` (`id`, `full_name`, `passport_number`, `nationality`, `Contact`, `email`, `DOB`, `Place`, `Region`, `country`, `visa_type`, `exp_date`, `billing`, `chkAgreeTerm`) VALUES
(1, 'Setu kumar', '6547895', 'india', '95044549203', 'setukumar@jingleinfo.com', '0000-00-00', '2023-07-29', 'West', 'Bangladesh', '', '2023-07-21', 'jingle', b'1'),
(2, 'Shasi kumar', 'IVS098S', 'Indian', '9504454903', 'admin@gmail.com', '0000-00-00', '2023-07-22', 'West', 'Austria', 'Business Visa', '2023-08-05', 'jingle', b'1'),
(3, 'SCDV', 'dddddddddddd', 'india', '95044549203', 'rahulkr@jingleinfo.com', '0000-00-00', '2023-07-06', 'West', 'Turkey', 'Working Visa', '2023-08-05', 'jingle', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email_address`, `group_id`) VALUES
(1, 'setukumar@jingleinfo.com', 1),
(2, 'admin@gmail.com', 1),
(3, 'setukumar@jingleinfo.com', 2),
(4, 'setukumar@jingleinfo.com', 2),
(5, 'support@hr.com', 3),
(6, 'setukumar@jingleinfo.com', 1),
(7, 'setukumar@jingleinfo.com', 1),
(8, 'support@hr.com,setukumar@jingleinfo.com,setukumar@jingleinfo.com', 3),
(9, 'sasikumar95044@gmail.com', 5),
(10, 'support@hr.com', 3),
(11, 'setukumarbihta@gmail.com', 6),
(12, 'support@hr.com', 2),
(13, 'setukumar@jingleinfo.com', 7),
(14, 'setukumar@jingleinfo.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `evisa`
--

CREATE TABLE `evisa` (
  `id` int(10) NOT NULL,
  `Surname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `visatype` varchar(200) NOT NULL,
  `visacountry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evisa`
--

INSERT INTO `evisa` (`id`, `Surname`, `name`, `passport`, `email`, `phone`, `visatype`, `visacountry`) VALUES
(1, 'setu', 'kumar', 'GHRT63409', 'setukumar@gmail.com', '2147483647', 'Business visa', 'Bangaladesh'),
(2, 'Mr.', 'setu kumar', 'RFD454309', 'vikas@jingleinfo.com', '2147483647', 'Travel Visa', 'Bangladesh'),
(3, 'Mr.', 'setu kumar', 'RFD454309', 'vikas@jingleinfo.com', '2147483647', 'Travel Visa', 'Bangladesh'),
(4, 'Dr', 'Triloki Gupta', 'RFD454309', 'trilokikumar159@gmail.com', '2147483647', 'Business Visa', 'Australia'),
(5, 'Dr', 'Triloki Gupta', 'RFD454309', 'trilokikumar159@gmail.com', '2147483647', 'Business Visa', 'Australia'),
(6, 'Er', 'setu kumar', 'GFRDE45098', 'admin@gmail.com', '2147483647', 'Working Visa', 'Bahamas'),
(7, 'Sri', 'Triloki Prashad', 'HGYTR432109', 'rahulkr@jingleinfo.com', '2147483647', 'Business Visa', 'Azerbaijan'),
(8, 'Dr.', 'Vinod Gupta', 'GGG021Jh', 'rahulkr@jingleinfo.com', '9504454903', 'Business Visa', 'Belarus'),
(9, 'Sri', 'setu kumar', 'RFD454309', 'setukumar@jingleinfo.com', '9999666321', 'Working Visa', 'Bahrain'),
(10, 'setu kumar', 'rahul kumar', 'RFD454309', 'admin@gmail.com', '0987654321', 'Working Visa', 'Bangladesh'),
(11, 'Er', 'setu kumar', 'GFRDE45098', 'rahulkr@jingleinfo.com', '9504454782', 'Working Visa', 'Bahamas'),
(12, 'Er', 'setu kumar', 'GFRDE45098', 'rahulkr@jingleinfo.com', '9504454782', 'Business Visa', 'Bahrain'),
(13, 'Er', 'rahul kumar', 'RFD454309', 'rahulkr@jingleinfo.com', '9504454782', 'Business Visa', 'Australia'),
(14, 'Er', 'rahul kumar', 'GFRDE45098', 'admin@gmail.com', '9504454782', 'Working Visa', 'Bahrain'),
(15, 'Er', 'rahul kumar', 'GFRDE45098', 'admin@gmail.com', '9504454782', 'Working Visa', 'Bahrain'),
(16, 'Dr', 'rahul kumar', 'GFRDE45098', 'rahulkr@jingleinfo.com', '0987654321', 'Business Visa', 'Bahrain');

-- --------------------------------------------------------

--
-- Table structure for table `fee_notes`
--

CREATE TABLE `fee_notes` (
  `id` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `allvisa` varchar(150) NOT NULL,
  `city` varchar(200) NOT NULL,
  `Document` varchar(200) NOT NULL,
  `Processing` varchar(250) NOT NULL,
  `Fees` varchar(250) NOT NULL,
  `Fees1` varchar(200) NOT NULL,
  `Fees2` varchar(200) NOT NULL,
  `Fees3` varchar(200) NOT NULL,
  `Fees4` varchar(200) NOT NULL,
  `value` varchar(200) NOT NULL,
  `value1` varchar(200) NOT NULL,
  `value2` varchar(200) NOT NULL,
  `value3` varchar(200) NOT NULL,
  `value4` varchar(200) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_notes`
--

INSERT INTO `fee_notes` (`id`, `country`, `allvisa`, `city`, `Document`, `Processing`, `Fees`, `Fees1`, `Fees2`, `Fees3`, `Fees4`, `value`, `value1`, `value2`, `value3`, `value4`, `myfile`, `status`) VALUES
(2, '5', '36', '5', '<p>dsv rthtr ytjh ttgaebhw razw2,w3u ywayh5q4ayh5q tg43qa3trcf4</p>\r\n', '20 workind day', 'Processing charge', '', '', '', '', '2500.00', '', '', '', '', 'menu option v4.pdf', 'active'),
(3, '8', '35', '9', '<p>Pan card</p>\r\n\r\n<p>Adhar Card, Driving Licence</p>\r\n\r\n<p>Provisinoal Noc From Foregin departement</p>\r\n', '7 Working Day', 'Processing charge', 'Service Fee', 'Embassy Charge', 'Visa Fee', 'Total', '650.00', '800.00', '6500.00', '2000.00', '8000.00', 'menu option v3.pdf', 'active'),
(4, '16', '46', '4', '<p>Visa Application Form</p>\r\n', '30 Days', 'Processing charge', 'Service Fee', 'Embassy Charge', '', '', '2500.00', '800.00', '6500.00', '', '', '', 'active'),
(5, '8', '35', '1', '<p>Pan card</p>\r\n\r\n<p>Adhar Card, Driving Licence</p>\r\n\r\n<p>Provisinoal Noc From Foregin departement</p>\r\n', '', 'Processing charge', 'Service Fee', 'Embassy Charge', 'Visa Fee', '', '650.00', '800.00', '6500.00', '2000.00', '', 'belize visa application.pdf', 'active'),
(6, '11', '20', '16', '<p>g gr rthgazt5r h</p>\r\n', '20 workind day', 'Processing charge', 'Service Fee', 'Embassy Charge', '', '', '2500.00', '800.00', '6500.00', '', '', '', 'active'),
(7, 'United Kingdom', 'Business Visa', 'Mumbai', '<p>aaaaaa</p>\r\n', 'aaaaaaa', 'aaaa', '22222', '', '', '', '2222', 'qqqqq', '', '', '', 'new.html', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Kailash Singh', 'ks623039@gmail.com', '8376786284'),
(2, 'Amit Singh', 'amit@gmail.com', '8767327272'),
(3, 'Kailash Sharma', 'kailashsharma@gmail.com', '8376868378'),
(4, 'Siddarth Singh', 'sid@gmail.com', '9278297928'),
(5, 'Fari Singh', 'fari@gmail.com', '9287973287'),
(6, 'Avdhesh Singh', 'avdheshsingh@gmail.com', '8926836988'),
(7, 'Lokesh Singh', 'lokesh@gmail.com', '9328797389'),
(8, 'Lakhan Verma', 'lakhan@gmail.com', '9289728939'),
(9, 'Manish Singh', 'manish@gmail.com', '8973298793'),
(10, 'Lovely Singh', 'lovelysingh@gmail.com', '9328987393'),
(11, 'Vikram Rana', 'rana@gmail.com', '9821797983'),
(12, 'Siddarth Verma', 'siddarthverma@gmail.com', '8732683233');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`) VALUES
(1, 'jingle'),
(2, 'setu'),
(3, 'jingle'),
(5, 'information'),
(6, 'Ivs user'),
(7, 'vip customer');

-- --------------------------------------------------------

--
-- Table structure for table `group_email`
--

CREATE TABLE `group_email` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_email`
--

INSERT INTO `group_email` (`id`, `student_id`, `group`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, ''),
(4, 4, ''),
(5, 5, ''),
(6, 6, ''),
(7, 7, ''),
(8, 9, ''),
(9, 10, ''),
(10, 17, ''),
(11, 20, ''),
(12, 21, ''),
(13, 8, ''),
(14, 11, ''),
(15, 12, ''),
(16, 15, ''),
(17, 16, ''),
(18, 18, ''),
(19, 14, ''),
(20, 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `ivs_branch`
--

CREATE TABLE `ivs_branch` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `inactive` bit(10) NOT NULL,
  `status` bit(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ivs_branch`
--

INSERT INTO `ivs_branch` (`id`, `name`, `code`, `address`, `city`, `inactive`, `status`) VALUES
(2, 'IVS-MUMBAI ', 'maaa', 'Mumbay', 'NMumbai', b'1111111111', b'0000000000'),
(3, 'IVS Visa Services', 'IVS_0987', 'DElhi sector 35', 'New delhi', b'1111111111', b'0000000000'),
(9, 'IVS-DELHI ', 'DEL ', '84C, BHARAT NAGAR, NEW FRIENDS COLONY NEW DELHI-110025 Office: +91-11-46578585/ 46573887 – 3888|, Delhi, India', 'NEW DELHI', b'1111111111', b'0000000000'),
(10, 'High Commision USA', 'USA20', 'New Delhi india', 'Delhi', b'1111111111', b'0000000000'),
(11, 'ssss', 'sssss', 'sssss', 'ssss', b'1111111111', b'0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `ivs_client`
--

CREATE TABLE `ivs_client` (
  `id` int(10) NOT NULL,
  `Organisation` varchar(100) NOT NULL,
  `Implant` varchar(100) NOT NULL,
  `Person` varchar(100) NOT NULL,
  `Person2` varchar(100) NOT NULL,
  `Person3` varchar(100) NOT NULL,
  `Role` varchar(155) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `city` varchar(110) NOT NULL,
  `country` varchar(100) NOT NULL,
  `Pincode` mediumint(100) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `Telephone` varchar(100) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `otheremail` varchar(200) NOT NULL,
  `Access` bit(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `IsActive` bit(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ivs_client`
--

INSERT INTO `ivs_client` (`id`, `Organisation`, `Implant`, `Person`, `Person2`, `Person3`, `Role`, `branch`, `Address`, `city`, `country`, `Pincode`, `Mobile`, `Telephone`, `fax`, `website`, `email`, `otheremail`, `Access`, `from_date`, `to_date`, `IsActive`, `username`, `Password`, `Confirm_Password`) VALUES
(5, 'Jingleinfo Solution', 'Jingleinfo Solution', 'setu kumar ', 'setu', 'singh', 'Maersk', '', 'setor 35 ', 'Noida', 'ind', 301201, '8388607', '8388607', '8388607', 'www.jingleinfo.com', 'setukumar@jingleinfo.com', 'setukumar@gmail.com', b'1111111111', '2023-07-13', '2023-07-20', b'1111111111', 'setu', 'password', 'password'),
(8, 'Ivs Visa Services', 'Jingleinfo Solution', 'Shasi kumar', 'setu', 'singh', 'Maersk', '', 'Noida', 'null', 'ind', 301201, '9504454903', '9504454903', '9504454903', 'www.jingleinfo.com', 'admin@gmail.com', 'setukumar@gmail.com', b'1111111111', '2023-07-13', '2023-07-12', b'1111111111', 'admin', '123456', ''),
(10, 'Hindustan', 'Petrolium', 'Hondustan', 'bbbbbbbbbbbbbbbbbbbbbb', 'bbbbccccccccccccccccccccccc', 'Maersk', '', 'India', 'noidagggggggggggg', '3', 0, '8989898', 'ccccccccccccccccccccccccc', 'cccccccccccccc', 'qqqqqqqqqqqqqqqqqqq', 'asdfr@gmail.com', 'asddff@gmail.com', b'1111111111', '2023-09-29', '2023-09-26', b'1111111111', 'setu12', '123456', 'ffffffffffffffffff'),
(13, 'Monu Singh', 'Haridwar', 'Jingle', 'Jingle InfoSolutiongggggggggggggg', 'Jingle InfoSolutiongggggggggggggg', 'Zone', '', 'Noida Sector 6', 'noidagggggggggggg', '', 0, '95044745487', '', '', '', '', '', b'0000000000', '0000-00-00', '0000-00-00', b'0000000000', 'Jingle', '', ''),
(15, 'IVS_Mumbaii', 'only one', 'High Commision USA ', 'High Commision USA', 'High Commision USA', 'Admin', '3', 'New Delhi india ', 'Delhi', '', 111065, '654847584', '', '', '', 'admin@gmail.com', 'admin@gmail.com', b'0000000000', '0000-00-00', '0000-00-00', b'0000000000', 'admin@', 'asdfgh', 'asdfgh'),
(16, 'IVS_Mumbaii', 'SSSetu kumar', 'High Commision USA', 'High Commision USA', 'High Commision USA', 'Admin', 'IVS Visa Services', 'New Delhi india', 'Delhi', 'New Zealand', 36210, '654847584', '', '', '', 'admin@gmail.com', 'admin@gmail.com', b'0000000000', '0000-00-00', '0000-00-00', b'0000000000', 'rht@112', 'asdfgh', 'rht@112');

-- --------------------------------------------------------

--
-- Table structure for table `ivs_wallet`
--

CREATE TABLE `ivs_wallet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ivs_wallet`
--

INSERT INTO `ivs_wallet` (`id`, `name`, `email`, `amount`, `branch`, `date`) VALUES
(1, 'Setu kumar Singh', 'setukumar@jingleinfo.com', '50000', 'Ivs_Delhi', '2023-09-30 14:31:48.959082'),
(3, 'Setu kumar', 'setukumar@gmail.com', '45000', 'IVS-MUMBAI ', '2023-09-30 14:31:48.959082'),
(4, 'Shasi kumar', 'sasikumar95044@gmail.com', '$6000', 'IVS-MUMBAI ', '2023-09-30 14:31:48.959082'),
(5, 'Information technology', 'setukumar@jingleinfo.com', '60000', 'IVS-MUMBAI ', '2023-09-30 00:00:00.000000'),
(6, 'Jingle', 'setukumar@jingleinfo.com', '98500', 'IVS Visa Services', '2023-11-27 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'vijai@123', 0, 0, 0, NULL, '2018-10-11 13:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `menus1`
--

CREATE TABLE `menus1` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus1`
--

INSERT INTO `menus1` (`menu_id`, `menu_name`, `menu_url`, `parent_id`) VALUES
(1, 'Application', 'http://[::1]/Altitudes/Admin/dashboard', 1),
(2, 'add User', 'http://[::1]/Altitudes/Admin/groups', 1),
(3, 'Visa Information', 'http://[::1]/Altitudes/Admin/groups', 2),
(4, 'Client', 'http://[::1]/Altitudes/Admin/groups', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `country` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `pin_code` varchar(250) NOT NULL,
  `Telephone` varchar(250) NOT NULL,
  `Fax` varchar(200) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `Notes` longtext NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `country`, `Name`, `Address`, `pin_code`, `Telephone`, `Fax`, `Email`, `website`, `Notes`, `status`) VALUES
(1, '7', 'Embassy of India, Brussels ', ' Chausee de Vleurgat, 217 1050 Brussels ', ' Brussels  65044', ' 32 (0)2 6409140, & 32 (0)2 6451850 ', '32 (0)2 6489638(Chancery), 32 (0)2 ', ' ambassador@indembassy.be, dcm@indembassy.be, hoc@indembassy.be, consular@indembassy.be, adviser1@in ', ' http://www.mea.gov.in/indian-mission.htm?21/Belgium ', '<p>All the above details is provived by high commision of belgiun,</p>\r\n\r\n<p>if any quwry/enquiry you vam vonnect him/her.</p>\r\n', 'active'),
(2, '9', 'Denmark Embassy of India ', '	Embassy of India Vangehusvej 15, 2100 Copenhagen', ' Brussels  65044', 'Telephone: +45-39 182888', 'Fax: +45-39 27 0218', 'amb.copenhagen@mea.gov.in (Ambassador), cons1.cope', 'www.indian-embassy.dk ,www.indian-embassy.dk', '<p>Denmark Embassy of India is Provoided all&nbsp; the Necassary Documents related to the visa service factlity.</p>\r\n\r\n<p>In which all the detals form is mention on the particular dtata, For more details you can visit the danmark</p>\r\n\r\n<p>official website and you can also contact over mail or Fex.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thank&#39;s &amp; Regard</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'active'),
(3, 'England', 'High Commision USA', 'New Delhi india', 'ss2222222', '654847584', '', 'admin@gmail.com', '22222222', '<p>fgverh</p>\r\n', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `news_latter`
--

CREATE TABLE `news_latter` (
  `id` int(10) NOT NULL,
  `name` varchar(215) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_latter`
--

INSERT INTO `news_latter` (`id`, `name`, `image`, `description`) VALUES
(1, 'News Latter', 'about.jpg', 'A newsletter is a printed or electronic report containing news concerning the activities of a business or an organization that is sent to its members, customers, employees or other subscribers. Newsletters generally contain one main topic of interest to i');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL,
  `page` varchar(112) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modifydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `orderno` int(50) NOT NULL,
  `metatitle` text NOT NULL,
  `metakeywords` text NOT NULL,
  `metades` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page`, `name`, `image`, `description`, `createdate`, `modifydate`, `orderno`, `metatitle`, `metakeywords`, `metades`, `status`) VALUES
(1, 'service', 'mukhramaa', '14.jpg', '<p>tets</p>', '2019-03-09 11:54:09', '0000-00-00 00:00:00', 4, '', '', '', '0'),
(2, 'service', 'mukhramaa 4', '15.jpg', '<p>asdddddddddddd</p><p>sad</p><p>asd</p><p>asa</p><p><br></p>', '2019-03-09 11:54:13', '0000-00-00 00:00:00', 4, '', '', '', '0'),
(6, 'service', 'Last Mile Delivery Solutions', 'dd.png', '<p>Cargodeals provides end to end delivery solutions also known as the last mile delivery solutions. This gives us more control over operations, leading to increased efficiency and more happy customers. We tie up with local delivery depots and chose the most optimised routes for deliveries. Status updates keeps the managers in loop about operations and we also provide map based live tracking for live status of each package. Once client fills in the necessary job requirements, information gets captured like&ndash; Geo-coordinates, electronic Proof of Delivery, Image, Digital Signature, customer rating and choice of payments etc. </p>', '2020-09-03 04:34:48', '0000-00-00 00:00:00', 0, '', '', '', '0'),
(7, 'service', 'Same day delivery option check', 'fd.png', '<p>Same day delivery option Forgot to send your brother a Rakhi? Or it&rsquo;s your mother&rsquo;s birthday and you need to send something special for her today itself! Easy courier brings you same day delivery option without charging you through the roof. Our charges are reasonable and if you can place your order before 12 noon then we will be able to deliver it on the same day itself with our dedicated fleet. We understand the importance of time and to get your parcel delivered safely. For mission-critical shipments that need an immediate pickup and door-to-door delivery within the shortest possible timeframe, you can choose Easy courier&rsquo;s flexible same Day services &ndash; ideal for customised delivery of emergency shipments.</p>\r\n', '2020-09-03 04:32:36', '0000-00-00 00:00:00', 1, '', '', '', '0'),
(8, 'service', 'mukhramaa', '41.jpg', '<p>sdd</p>', '2019-03-09 11:54:54', '0000-00-00 00:00:00', 2, '', '', '', '0'),
(9, 'about', 'About Ivs_Visa', 'about-side-1.jpg', '<p><span style=\"font-size:16px\">We are a Visa &amp; Immigration management company. We are ranked among the top visa service providers, serving the leading companies. Quality services are delivered with the experienced teammates, advanced systems and innovations you would expect from a leader.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"background-color:rgba(255, 255, 255, 0.39); font-family:futura,helvetica neue,helvetica,arial,sans-serif\">IVS has been a Pioneer in Visa Processing &amp; in fact were the first to start the concept of Visa Services in India.</span></span></p>\r\n\r\n<p><span style=\"background-color:rgba(255, 255, 255, 0.39); color:rgb(29, 29, 31); font-family:futura,helvetica neue,helvetica,arial,sans-serif; font-size:16.8px\">We focus on your requirements and co-ordinates with your staff to provide you total satisfaction. We offer every Visa and Immigration related assistance be it a Business or Tourist Visa Application to FRRO Registrations or Extensions. We understand the business from ground up and that enables us to serve you better.</span></p>\r\n\r\n<p><span style=\"background-color:rgba(255, 255, 255, 0.39); color:rgb(29, 29, 31); font-family:futura,helvetica neue,helvetica,arial,sans-serif; font-size:16.8px\">We understand that each country has different requirements, fees, and processing times for Indian residents traveling abroad and provides up-to-date information on visa norms and specifications for each country.</span></p>\r\n\r\n<p><span style=\"background-color:rgba(255, 255, 255, 0.39); color:rgb(29, 29, 31); font-family:futura,helvetica neue,helvetica,arial,sans-serif; font-size:16.8px\">Our organization consist our office in New Delhi and affiliates Network offices throughout India. We have a solid and efficient feedback system that has been helping us to render unimaginable services &amp; new products to our customers and also help us in achieving customer delight.</span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>OUR MISSION</strong></span></p>\r\n\r\n<p><span style=\"color:rgb(29, 29, 31); font-family:verdana,sans-serif; font-size:15px\">To Make the most crucial part of International Travel, i.e Visa processing an extremely easy, hassle free and smooth process with our Competent, Reliable, Ethical &amp; expert customer services.</span></p>\r\n\r\n<p><span style=\"color:rgb(29, 29, 31); font-family:verdana,sans-serif; font-size:15px\">IVS also offers complete document expediting services in India. Why take a trip to an Embassy or a Consulate when IVS can appear on your behalf, wherever permitted by the embassy. With professionals nationwide, and a state-of-the-art tracking system, IVS always knows exactly where your documents are in the process.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2023-08-30 10:07:52', '0000-00-00 00:00:00', 0, 'Ivs About us', 'Ivs News latter,About us', 'Ivs About us Services', '1'),
(10, 'privacypolicy', '', '', '<p>The company does not take any responsibility for leakage, breakage, shortage by the sun, rain, water or weather. The sender is responsible for proper packing and breakable goods are carried at absolute owners&#39; risk.</p>\r\n\r\n<p>Fresh fruits are taken at the full risk of the owner. The company will not be responsible for this.</p>\r\n\r\n<p>The company will send the goods at the earliest possible opportunity.</p>\r\n\r\n<p>The goods will be delivered against payment of all charges to the consignee</p>\r\n\r\n<p>The goods will be delivered at the destination in the company godown only unless settled otherwise in writing.</p>\r\n\r\n<p>The delivery of goods has to be taken within 7 days after its arrival at the destination feeling which the same will be liable to charge the demurrage rupee 10 per quintals per day or package whichever is greater.</p>\r\n\r\n<p>Will not transfer Prohibited items, means any goods or materials the carriage of which is prohibited by any law, rule or regulation of India.</p>\r\n\r\n<p>The customer should be paid the fare(as agreed) parking charges and additional night surcharges including UP tax and toll tax.</p>\r\n\r\n<p>The customer agrees and accepts that the use of the services provided by the company is at the sole risk of the customer.</p>\r\n\r\n<p>The customer shall ensure that He/ She will not do any activities while taking our services.</p>\r\n\r\n<p>Do not misuse any of the devices or damaging any product (Technical or Non-technical)</p>\r\n\r\n<p>Asking the drivers to break any traffic/Police/government rules. The driver has complete right to deny such request by the customer</p>\r\n\r\n<p>Do not ask the driver to overload vehicle</p>\r\n\r\n<p>In case of lost items inside the vehicle or the company during the journey the company will try to locate the item as soon as possible but is not responsible for the same in case of loss or damage.</p>\r\n\r\n<p>Any complaint in respect of the service&#39;s customer has to inform the company within 24 hours.</p>\r\n\r\n<p>All the calls made to the company&rsquo;s call center are recorded by the company for quality and training purposes.</p>\r\n\r\n<p>Cancellation made 10 minutes after driver allocation has to charge a cancellation fee of rupees 100/- or if it will be repeated again so will temporarily suspend your account for 24 hours.</p>\r\n\r\n<p>After reaching the location(Pick-up) if our driver waits for more then one hour so waiting charges will be applied after one hour of rupees 2 for per minute.</p>\r\n\r\n<p>All the vehicles registered with the company are continuously tracked using mobile technology for the security purpose only.</p>\r\n\r\n<p>Circumstances beyond our control such as including earthquakes,cyclones,fire, storms, flooding, snow or fog or other natural calamities or disasters. We are not liable.</p>\r\n\r\n<p>Circumstances beyond our control such as including war, accidents, acts of public, enemies, strike air disaster and local disputes. We are not liable.</p>\r\n\r\n<p>When once the delivery is created against the receipt no claim will be entertained after that</p>\r\n\r\n<p>If any differences are found in consignment weight as compared with the sender weight noted on the GR and goods itself the company will recover full charges at the destination for actual weights plus 25% extra.</p>\r\n\r\n<p>If transportation payment not made within 30 days after delivering the 24% P.A interest will be charged as a transportation bill.</p>\r\n\r\n<p>If the consignees do not take delivery of goods within one month the company reserves the right of putting the same to public auction without any notice for recovery of the dues under the receipt of the goods and for any shortage will proceed against the sender.</p>\r\n\r\n<p>Safety of the theft and any other disaster insurance will be done by the customers our company will surely help you to claim that insurance in such a case we will provide you all the required receipt.</p>\r\n', '2020-03-13 06:50:11', '0000-00-00 00:00:00', 0, 'sadasda sadasd', 'asdad,sad,  sdfsdf', 'asdasd asda4 dfsdf', '1'),
(11, 'termsconditions', 's', '', '<p>&nbsp;</p>\r\n\r\n<p>&bull; The facility of applying visa through IVS, hereinafter referred as IVS is open only to BOTH Indian &amp; Foreign passport holders visiting countries as per the list on our website and fulfilling the eligibility conditions announced from time to time by the respective Immigration Department</p>\r\n\r\n<p style=\"text-align:justify\">&bull; Issuance and approval of a visa is regulated by the respective immigration authority, a governed by their rules and regulations, subject to the applicant fulfilling the eligibility conditions. These rules are amended / updated from time to time by the respective Immigrations department. Please note that visa issued by the immigration department is valid for entry and exit at each of the countries.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&bull; IVS role is limited to accepting the visa application and required documentation, forwarding the application to the respective Embassy/Immigrations for consideration of visa issuance and communicating the decision on the application to the applicant.<br />\r\n&bull; Visa fees &amp; Service charges are non-refundable / transferable under any circumstances whatsoever.<br />\r\n&bull; IVS will not be responsible and liable to the applicant, if the applicant if unable to travel due to denied boarding, offloading, cancellation of flight, delays or force majeure situations, breakdown of machinery and / or internet connectivity or any other cause or circumstances beyond their control.</p>\r\n\r\n<p style=\"text-align:justify\">&bull; IVS does not accept any responsibility for late, lost or misplaced applications and / or the veracity of the contents of the application. Incomplete and double applications will be disregarded. The Applicant accepts and acknowledges that the courier acceptance and delivery service is operated by a third party and IVS does not assume any responsibility or liability for the service of the courier company.<br />\r\n&bull; The decision to grant or refuse a visa is the sole prerogative of the Embassy/Immigration department IVS is a facilitator and merely forwards the application and the issuance or pendency or refusal of the visa is the prerogative of Embassy/Immigration department. The decision of the Immigration department is final. In case of rejection of visa application, no correspondence will be entertained and no visa fees or Service charges will be refunded and no reasons will be required to be given. It is clarified that processing of the visa application is prevented, delayed or restricted or interfered with for any reasons whatsoever resulting in delay by Immigration dept. to process the applicants visa application, then IVS shall not be liable to the applicant for any loss or damage which may be suffered as result of such causes and IVS shall be discharged of all its obligations hereunder.</p>\r\n\r\n<p style=\"text-align:justify\">&bull; Issuance of a visa or approval of visa application does not in any way give the applicant a right to the country. The entry is at the sole discretion of the Immigration officer at the Airport who is a representative of immigration of the country. In case of denial of visa or entry by the immigration of the respective country, IVS shall in no way be liable to the applicant in any manner whatsoever<br />\r\n&bull; The visa must be accepted as offered and is non &ndash; transferable and non-extendable.<br />\r\n&bull; IVS shall not be liable for any losses or damages, which the applicant may suffer arising from delay in processing or receiving of visa.<br />\r\n&bull; IVS shall not be liable for any losses or damages, which the applicant may suffer arising from delay in processing or receiving of visa.<br />\r\n&bull; The visa is valid as per the immigrations rules and regulations as amended from time to time. The visa must be availed within its period of validity</p>\r\n\r\n<p style=\"text-align:justify\">&bull; All Indian and the visiting countries regulations apply and in case this facility is deemed invalid or cancelled due to any Indian / or the entry immigration department regulation or order, IVS shall not be liable in any manner whatsoever to the applicant.<br />\r\n&bull; Applicants will be solely responsible to ensure they fulfil Indian and the entry country&rsquo;s requirements for travel which may include Police clearances etc.<br />\r\n&bull; IVS shall take all reasonable measures to ensure that information provided by the Applicants to IVS will remain confidential. However, IVS shall not be liable for any unauthorized access by any means to that information.<br />\r\n&bull; The applicant agrees to indemnify and hold VISA LOUNGE, its officers, directors, agents, subsidiaries, clients, joint venture partners and employees, harmless from any claim, expense, loss, damages or demand, including reasonable attorney&rsquo;s fees, incurred or sustained by IVS and / or its officers, directors, agents, subsidiaries, clients, joint venture partners and employees arising out of the breach of these terms &amp; conditions by the Applicant and / or any act of omission or commission attributable to the Applicant (or) violation by the Applicant of any law of any country or the rights of the third party.<br />\r\n&bull; In no event and under no circumstances shall IVS and / or its representatives be liable for any direct, indirect, punitive, incidental, special, consequential damages or any damages whatsoever to anyone.</p>\r\n\r\n<p style=\"text-align:justify\">&bull; Any overstay beyond duration of Visa invites fines and penalty by the respective immigration. Payment of overstay penalties is to borne solely by the applicant/passengers and the applicant/passenger is fully liable/responsible for the same. Any penalty raised by immigration towards VISALOUNGE will be payable by the passenger in full within the stipulated period. If passenger has documentary evidence (Entry / Exit stamps / Airline Ticket Copy / Boarding Pass) to prove that passenger has exited before expiry of VISA, then IVS will provide adequate support to clear overstay case from DNRD. However, final decision on the same will be of DNRD. IVS shall not be liable for any penalties including for overstay levied by DNRD on the applicant/passenger under no circumstances whatsoever.<br />\r\n&bull; If you have not opted out of receiving marketing materials, we may also use your personal information to identify other products and services that might be of interest to you and to market additional goods, services and special offers from us, our affiliates or our third party business associates. You can choose not to allow IVS to use or disclose your personal information for marketing purposes by indicating your preference on the visa application form.<br />\r\n&bull; These terms and conditions shall be governed and construed in accordance with the law of India. Any claims of disputes arising in relation to the services provided by IVS to the applicant shall be subject to the exclusive jurisdiction of the court in India.</p>\r\n\r\n<h3 style=\"text-align:justify\">&nbsp;</h3>\r\n', '2023-07-14 10:55:43', '0000-00-00 00:00:00', 0, 'Ivs Visa services', 'Visa_Services,Term\'s & Condition', 'Visa services Term\'s & condition,.', ''),
(12, 'shippingpolicy', 's', '', '<p><strong>Delivery Policies And Shipping Policy</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A shipping charge applies on every order. Our shipping charges are as follows:</p>\r\n\r\n<p>Our delivery policies are very transparent. The delivery service is available from 10 am until 8 pm during weekdays only, and no deliveries will be made on Sunday or public holidays. We recommend that you use your office address as your physical delivery address if you are not at home during the week. &nbsp;You may be required to sign for delivery and provide a valid form of identification when your order is delivered. An OTP will be provided when the courier is picked from your doorstep. This will show the location of your courier on the tracking system as well as let you know when the courier has been delivered.</p>\r\n\r\n<p>If you are not available to take delivery of your order, we will attempt either one or two more deliveries to the physical address that you provided during the online ordering process and, if still unsuccessful, the courier company, acting on Easycourier&rsquo;s behalf, &nbsp;will call you to arrange, in its sole and absolute discretion, for either a further delivery attempt to be made or for you to collect your order from the courier company.</p>\r\n\r\n<p>In the event that Easycourier and/or its duly appointed courier company is unable to contact you, despite all reasonable attempts to do so, using the contact details and/or physical delivery address that you provided during the ordering process, we reserve the right to cancel your order and refund to you the money already paid to Easycourier, less Easycourier&rsquo;s reasonable administration charges including the cost incurred by us for repeatedly attempting to deliver your order and for arranging for the return of your order.</p>\r\n\r\n<p><strong>Viewing your order &nbsp;delivery status</strong></p>\r\n\r\n<p>To ascertain the status of your order, you can check the live tracking options.You will be provided with an OTP on your mobile which when entered into the tracking system will help you in tracking your courier and let you know when it&rsquo;s been delivered.</p>\r\n\r\n<p><strong>Delivery Times</strong></p>\r\n\r\n<p>Our delivery times will vary between 6 to 7 hours depending on the location and serviceability. While Easycourier is firmly committed to delivering your order within the estimated delivery times, we are unable to guarantee that all orders will be delivered within the stipulated time frame due to unforeseen reasons.</p>\r\n\r\n<p><strong>Costs</strong></p>\r\n\r\n<p>There is a delivery fee which depends on the products weight ordered. &nbsp;Easycourier, in its sole discretion, may determine that your delivery address is located in a remote area and may, upon you placing your online order, request payment of an additional delivery fee. Should you object to an additional delivery fee being payable, you will still have the choice to withdraw your order.</p>\r\n\r\n<p><strong>Calculating Delivery Cost</strong></p>\r\n\r\n<p>Find your delivery fees simply by entering your delivery address in the Easycourier website or in the mobile application, and it will calculate the delivery fees for you on the basis of weight and distance.</p>\r\n\r\n<p><strong>Our Liability</strong></p>\r\n\r\n<p>Easycourier is not liable for any incorrect order or delivery where you make an error in the information that you provide to Easycourier e.g. if you provide the incorrect delivery address or submit an incorrect order. If you do not provide a valid physical address for delivery, Easycourier may cancel your order and refund the purchase price. It may also not be possible for us to deliver to some locations. If this is the case, we will inform you using the contact details that you provide to us when you make your order, and will arrange for cancellation of the order or delivery to a different delivery address.</p>\r\n\r\n<p>We take all reasonable steps to ensure that your ordered products are delivered within 2-10 business days. While Easycourier will try to ensure a smooth delivery process, in the event that we are unable to meet the estimated delivery timeframes, you accept and agree that Easycourier will not be liable for any losses, liabilities, costs, damages, charges or expenses arising out of the late delivery of your order. You further acknowledge that the delivery of your order may be impacted by events beyond the control of Easycourier, such as adverse weather conditions, industrial action, or an inability to secure labour, power, internet services, GSM network connectivity, materials or supplies.</p>\r\n\r\n<p>Easycourier delivers the products in standard packaging. All risk in the products will pass to you upon delivery; from the time when the risk passes to you, Easycourier will not be liable for any loss or destruction of the products.</p>\r\n', '2019-09-06 09:48:22', '0000-00-00 00:00:00', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ', 'asd,asddafs', 'onsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipisonsectetur adipis onsectetur adipis onsectetur adipis onsectetur adipis', ''),
(13, 'refundcancellation', '', '', '<h3><span style=\"font-size:24px\"><strong>REFUND AND CANCELLATION POLICIES:</strong></span></h3>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:24px\">Notice for all Customers:</span></h3>\r\n\r\n<p style=\"text-align:justify\">This Refund Policy only applies to fees collected by Us for services provided by IVS. And this Policy does not apply to the Consular Fees which are paid towards your Consular Application to the country&#39;s Consular service(s) you are applying for. All Refunds will be governed by laws of the local country where the services are being rendered. The Consular fee and legalisation fee will be subject to the refund policy of the respective country You are applying for.</p>\r\n\r\n<p style=\"text-align:justify\">It is important that You read this Refund Policy carefully. You should familiarise yourself with the terms of this Refund Policy, prior to purchasing any goods or services from IVS.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:24px\">Interpretation:</span></h3>\r\n\r\n<p style=\"text-align:justify\">Unless otherwise defined, defined terms in this Refund Policy shall have the meaning given to them earlier in these Terms and Conditions.<br />\r\n&quot;Application&quot;:&nbsp;means a form to be completed by a Visa/OCI/GEP/Passport/Renunciation customer or You (as applicable) requesting the provision of Services.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Service Fees&quot;:&nbsp;mean the fees payable by You for the Services purchased in accordance with the Services Terms and Conditions. Service fee will not be refundbale even if you decide not to submit application due to any reasons.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Issuing Bank&quot;:&nbsp;means the bank who has issued card to You as card holder.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Refund Eligibility Criteria&quot;:&nbsp;means the criteria set out in the below Section.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Optional Services&quot;:&nbsp;has the meaning include all value-added services/additional services/Premium Services which are described and offered by us on our Website. Courier fee once paid won&rsquo;t be refundable.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Services Terms and Conditions&quot;:&nbsp;means the terms and conditions for the use of the payment portal and provision of the Services offered by IVS to their customers.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Chargeback&quot;:&nbsp;means where a customer or You (as applicable) using the online payment portal makes a complaint to his/her card issuer bank that a transaction is disputed and/or fraudulent.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Transaction Charges or convenience fee&quot;:&nbsp;means any fees levied by a bank or financial institution upon processing a valid refund request to You or a customer (as applicable) which may vary from case to case. This will not be refundable at any circumstances.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Us&quot;:&nbsp;means IVS or any party acting on Our implicit instructions (with &quot;Our&quot; being construed accordingly). &quot;You&quot; includes the person requesting and/or purchasing the Services or any party acting on such person&#39;s instructions (and &quot;Your&quot; shall be construed accordingly).<br />\r\n&quot;Website&quot;:&nbsp;means the IVS website &quot;Website Terms and Conditions&quot;: means the terms and conditions applicable to use of the Website set out</p>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">General Refund Conditions:</span></h3>\r\n\r\n<p>1. This Refund Policy is subject to change by Us and in the event of any amendments, We shall make a suitable announcement on the Website. The changes will apply after We have given notice. If You do not wish to accept the revised policy, You should not continue to use the Services. If You continue to use the Services after the date on which the change comes into effect, your use of the Services indicates your agreement to be bound by the new Refund Policy.</p>\r\n&nbsp;\r\n\r\n<p>2. The Consular Fee, Legalisation Fee, Consular service Fee and optional service fees shall be refundable only if You have paid for a Service. You may request a refund in accordance with the Refund Eligibility Criteria.</p>\r\n&nbsp;\r\n\r\n<p>3. All excess payments for Consular fee, legalisation fee, Counsular service fee and optional services will be refunded in full to the customers and there will be no exception to such refunds.</p>\r\n&nbsp;\r\n\r\n<p>4. In case IVS have overcharged You for the Consular fee/legalisation fee, then any such excess amount will be duly refunded.<br />\r\n5. All the above will form part of the terms of use of the service and will be available to You to confirm at the time of making payment for these services.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Consular Fees and Legalisation Fees:</span></h3>\r\n\r\n<p>1. As a general rule the Consular Fee and Legalisation Fee shall not be refunded and will be subject to the refund policy of the respective country You are applying for. And applicable local laws governing such fees in the local country where the service is being provided to You.</p>\r\n&nbsp;\r\n\r\n<p>2. In case You have paid the incorrect Consular fee or legalisation fee, then customer will be provided the ability to cancel and seek refund of the wrong fee paid and pay the correct fee.</p>\r\n&nbsp;\r\n\r\n<p>3. The processing times for Consular applications are estimates only. As the processing of your application is subject to the procedures and timescales of the respective Embassy /Consulate/High Commission, over which we have no control, and hence is not a criteria for refund.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Service Fees and Optional Service Fee:</span></h3>\r\n\r\n<p>1. Refunds of Service Fees will only be considered where You satisfy the Refund Eligibility Criteria in full. If You (or the relevant Consular customer as applicable) fail to meet any of the Refund Eligibility Criteria, we shall have the right in our sole discretion to decline the request for a refund.</p>\r\n&nbsp;\r\n\r\n<p>2. To apply for a refund, you must properly and fully complete and submit a Refund Request. All refund requests should be submitted to IVS by You either through an email or in person in the IVS office or though the online request.</p>\r\n&nbsp;\r\n\r\n<p>3. We shall process your Refund Request following receipt as soon as it is reasonably practicable. Response times will vary depending on the mode of payment and stated reasons for request a refund of the Service Fees. In any event, we shall notify You of the outcome of the request in accordance with the timescales set out in the Refund Processing Timelines.</p>\r\n&nbsp;\r\n\r\n<p>4. By filling in and submitting the Refund Request, the payment of a refund of a Service Fee is not guaranteed. The refund will only be approved or rejected by us after verification basis the Refund Eligibility Criteria.</p>\r\n&nbsp;\r\n\r\n<p>5. Any Transaction Charges or loss due to exchange rate fluctuation which arise upon processing a refund of Service Fees shall be borne solely by You. Transaction Charges will be deducted from the final amount to be refunded. Loss due to bank charges and difference in exchange rate will be borne by you and IVS is not liable to pay any interest on this amount.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Refund Eligibility Criteria &ndash; Applies only to Consular and ICWF Fees:</span></h3>\r\n\r\n<p>1. All requests for refunds or cancellation of a Service(s) will only be accepted where:<br />\r\n&bull; The refund request is raised within 30 days from the date of completing online registration on IVS Portal</p>\r\n&nbsp;\r\n\r\n<p>&bull; The refund request is received by us before 2 working days prior to the date of appointment or visa submission, provided that You have cancelled your appointment on the system.</p>\r\n&nbsp;\r\n\r\n<p>&bull; Where it is clear a customer has been charged more than once for the same service.<br />\r\n&bull; This includes the circumstances where You have purchased a Service but been notified by Us that it has been cancelled or withdrawn.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">2. Requests for refunds or cancellation of a Service(s) will not be accepted where:</span></h3>\r\n\r\n<p>&bull; In case you have applied online and decide not to send your application due to any reasons whether you made mistakes while completing online forms. You must ensure correct information is filled before making the online payment.</p>\r\n&nbsp;\r\n\r\n<p>&bull; In the case of any services which are partially used, no Refund request will be approved in such cases<br />\r\n&bull; If You miss your appointment on the scheduled date<br />\r\n&bull; If You are delayed for your appointment and You cannot be accommodated on the same day by VFS/Embassy<br />\r\n&bull; If your application is incomplete as per the guidelines and the application cannot be accepted on the appointment day at VFS.<br />\r\n&bull; If You decide not to proceed with the application due to any reasons such as made mistakes while completing online application.<br />\r\n&bull; If You cancel your appointment<br />\r\n&bull; If You are unable to proceed with your appointment as You have selected the Application Centre location incorrectly.</p>\r\n&nbsp;\r\n\r\n<p>&bull; Granting of Visa / OCI / Renunciation / Passport and GEP is a sovereign right of the nation and IVS is a mere facilitator in coordinating between the VFS/Mission and the Applicant as per requirements. It has NO Decision-making rights or control in grant / denial / delay of Visa / OCI / Renunciation / Passport and GEP. Hence, NO Refunds will be granted by IVS under the following circumstances:</p>\r\n&nbsp;\r\n\r\n<p>&bull; Rejection of Visa / OCI / Renunciation / Passport and GEP application by the Indian Mission.<br />\r\n&bull; Request for Reapplication of Visa / OCI / Renunciation / Passport and GEP by Indian Mission.<br />\r\n&bull; Delay in processing Visa / OCI / Renunciation / Passport and GEP application by Mission.<br />\r\n&bull; Non-receipt of Emergency Visa or Tatkal passport services on or before the travel date.<br />\r\n&bull; Non-receipt of Medical / Medical dependent visa leading to further complication and additional medical expenses.<br />\r\n&bull; Loss to Employer / Self due to delay in receipt of Business / Work / Conference / Employment Visa due to nonattendance.<br />\r\n&bull; Loss due to Deportation and repatriation for any reason at the Port of Entry in India.<br />\r\n&bull; Delay in shipping of Visa / OCI / Renunciation / Passport and GEP by shipping company.<br />\r\n&bull; Loss or Damage of Visa / OCI / Renunciation / Passport and GEP in transit by shipping company.<br />\r\n&bull; Lesser duration or no of entries visa granted by the Mission as compared to the requested entry / duration.<br />\r\n&bull; Change in Consular fee by the Mission.<br />\r\n&bull; Liberalization of Consular policies like No Visa Required.<br />\r\n&bull; Loss to Self / Family / Companion, in case dependent visa gets delayed / rejected by the Indian Mission.<br />\r\n&bull; Air tickets, Hotel booking and other related cancellation due to delay or rejection of Visa / OCI / Renunciation / Passport and GEP application.<br />\r\n&bull; All expenses related to travel to IVS to collect Visa / OCI / Renunciation including but not limited to local / Interstate travel expenses, purchase of Food / Beverages, hotel accommodation, boarding/ lodging expenses.<br />\r\n&bull; Opportunity loss for time spent on Visa / OCI / Renunciation / Passport and GEP application.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Refund Processing Timeline:</span></h3>\r\n\r\n<p>1. Submit your request. Post submission of request, you will get an acknowledgement email.</p>\r\n&nbsp;\r\n\r\n<p>2. Your refund request will be initiated, and eligible refund will be processed within 10 &ndash; 15 business days.</p>\r\n&nbsp;\r\n\r\n<p>3. You will have no recourse to a refund of the Service Fees if we suspect You have, or are, engaged in, or have in any way been involved in, fraudulent or illegal activity on the Website.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Receiving Your Refund:</span></h3>\r\n\r\n<p>Refunds will be processed by the same method as payment was made for these Services or by NEFT. For example, if payment was made via use of credit or debit card, refund will be done by NEFT. If IVS is unable to process refund by the same mode in which payment has been made, in such case refund will be processed by issuing check. In case of payments by debit/credit card, the exact date by which refund amount will be credited in the account of the customer&rsquo;s bank card shall depend on the bank card issuer but not more than Thirty (30) calendar days.</p>\r\n</div>\r\n\r\n<div class=\"about-12-img mb-40\" style=\"box-sizing: border-box; margin-bottom: 40px; font-family: Futura, \">\r\n<h3><span style=\"font-size:24px\">Chargebacks:</span></h3>\r\n\r\n<p>Should you cancel your application after completing it online but before it is submitted to us for processing for any reasons; only your Consular Fees, ICWF will be refunded and not the service charge of IVS or courier labels. Please allow 10-15 working days after cancellation of your application for your refund to be processed. Should you change your mind about travel after your application has been processed in the Embassy/Consulates, no fees will be refunded. We expect You to contact Us to resolve any problem or issue related to your application and payment, before You make any Chargeback request to your bank.</p>\r\n</div>\r\n', '2023-07-14 10:54:01', '0000-00-00 00:00:00', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, ', 'visa Services,CANCELLATION,Refund', 'Ivs Visa Services Trfund And cancelation policy', ''),
(15, 'Country_master', 'Country', '', 'Country master & Visa Type Relation', '2023-06-02 11:17:30', '0000-00-00 00:00:00', 0, 'Visa Services', 'Visa Services', 'IVS_Visa', '1'),
(32, 'latter', 'Ivs international Commence operations for the french embassy in India', 'newsletter_february_th.jpg', '<p><span style=\"font-size:16px\"><span style=\"color:rgb(32, 33, 36); font-family:google sans,arial,sans-serif\">Setu Kumar, A newsletter is&nbsp;</span><span style=\"color:rgb(4, 12, 40); font-family:google sans,arial,sans-serif\">a printed or electronic report containing news concerning the activities of a business or an organization that is sent to its members, customers, employees or other subscribers</span><span style=\"color:rgb(32, 33, 36); font-family:google sans,arial,sans-serif\">. Newsletters generally contain one main topic of interest to its recipients.</span></span></p>\r\n', '2023-09-13 09:17:27', '0000-00-00 00:00:00', 0, 'IVs News latter', 'Ivs News latter', 'Get offer news latter', '1');

-- --------------------------------------------------------

--
-- Table structure for table `permissions1`
--

CREATE TABLE `permissions1` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions1`
--

INSERT INTO `permissions1` (`permission_id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3),
(4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles1`
--

CREATE TABLE `roles1` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles1`
--

INSERT INTO `roles1` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Super admin');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'Abcd', 'Pqrsd@gmail.com', '9504454903', '2023-09-23 10:29:24', '2023-09-23 10:36:53', ''),
(2, 'qwert', 'pqmnb@gmail.com', '9504454906', '2023-09-23 10:29:24', '2023-09-23 10:36:53', ''),
(3, 'lmnopq', 'ghgfsdr@gmail.com', '9504454870', '2023-09-23 10:29:24', '2023-09-23 10:36:53', ''),
(4, 'Setu kumar', 'setukumar@gmail.com', '9504454903', '2023-09-23 10:49:56', '2023-09-23 12:15:49', 'Active'),
(5, 'Rahul kumar', 'setukumar@jingleinfo.com', '9.50E+12', '2023-09-23 10:49:56', '2023-09-23 12:15:49', 'Active'),
(6, 'Rohit singh', 'Sasikumar95044@gmail.com', '6.58E+11', '2023-09-23 10:49:56', '2023-09-23 12:15:49', 'Active'),
(7, 'Monu Kumar', 'ankit987@gmail.com', '6548789654', '2023-09-23 10:49:56', '2023-09-23 12:15:49', ''),
(8, 'Gaurav Singh', 'ghuvdae453@gmail.com', '65455487484', '2023-09-23 10:49:56', '2023-09-23 12:15:49', 'Active'),
(9, 'Dipeneder Jha', 'setukumaresc@.in', '54987546521', '2023-09-23 10:49:56', '2023-09-23 11:32:01', 'Active'),
(10, 'Alok Kumar', 'vikasJingle@.com', '9965874584', '2023-09-23 10:49:56', '2023-09-23 11:32:01', 'Active'),
(11, 'Jitendra kumar', 'jitendera987@gmail.com', '8757601277', '2023-09-23 10:49:56', '2023-09-23 12:15:49', ''),
(12, 'Manoj Jha', 'manojjha@gmail.com', '99988855541', '2023-09-23 10:49:56', '2023-09-23 11:32:01', ''),
(13, 'Tinku kumar', 'admin@gmail.com', '7775558474', '2023-09-23 10:49:56', '2023-09-23 12:15:50', ''),
(14, 'Mamta Singh', 'mamta98@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active'),
(15, 'Manish', 'manishdj@gmail.com', '9504454903', '2023-09-23 12:03:06', '2023-09-23 12:03:06', 'Active'),
(16, 'Anshu Aman', 'amanpaj@gmail.com', '950454906', '2023-09-23 12:03:07', '2023-09-23 12:03:07', 'Active'),
(17, 'Raj Kumar', 'rajkumarsindhya@gmail.com', '92585454870', '2023-09-23 12:03:07', '2023-09-23 12:03:07', ''),
(18, 'hindustan', 'hindustan.in', '9985654784', '2023-09-23 12:08:12', '2023-09-23 12:15:49', 'Active'),
(19, 'Abpn Nes', 'abp.news@gmail.com', '5487487458', '2023-09-23 12:08:12', '2023-09-23 12:15:49', 'Active'),
(20, 'Himanshu Singh', 'himasnfdhu987@gmail.com', '9874587414', '2023-09-23 12:08:13', '2023-09-23 12:15:49', 'Active'),
(21, 'Arvimnd', 'arvind98@gmail.com', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id_city` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `id_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id_city`, `city_name`, `id_state`) VALUES
(1, 'Delhi', 1),
(2, 'Banglore', 1),
(3, 'Chennai', 2),
(4, 'Pune', 2),
(5, 'Hydrabaad', 2),
(6, 'Mumbai', 2),
(7, 'Noida', 3),
(8, 'Patna', 3),
(9, 'Kolkata', 4),
(10, 'Nepal', 5),
(11, 'Haryana', 5),
(12, 'Punjab', 6),
(13, 'Amhabaad', 7),
(14, 'Chandigadh', 7),
(15, 'Kota', 8),
(16, 'Jaipur', 8),
(17, 'Amur', 8),
(18, 'Anakapalle', 5),
(19, 'Anantapur', 4),
(20, 'Andole', 10),
(21, 'Atmakur', 14),
(22, 'Attili', 11),
(23, 'Avanigadda', 12),
(24, 'Badepalli', 12),
(25, 'Badvel', 12),
(26, 'Balapur', 20),
(27, 'Bandarulanka', 3),
(28, 'Banganapalle', 5),
(29, 'Bapatla', 2),
(30, 'Kanpur', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id_country` int(11) UNSIGNED NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `country_name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id_country`, `sortname`, `country_name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `node_name` varchar(50) NOT NULL,
  `node_Url` varchar(100) NOT NULL,
  `is_parent_node` char(3) NOT NULL,
  `parent_id` char(3) NOT NULL,
  `activation` char(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `p_menu_order` int(11) NOT NULL,
  `c_menu_order` int(11) NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id_payment` int(11) UNSIGNED NOT NULL,
  `id_booking` int(11) UNSIGNED NOT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `coupon_code` varchar(15) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `tax` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total_fare` float DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_radius`
--

CREATE TABLE `tbl_radius` (
  `id` int(150) NOT NULL,
  `distance_from` int(150) NOT NULL,
  `distance_to` int(150) NOT NULL,
  `radius` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_radius`
--

INSERT INTO `tbl_radius` (`id`, `distance_from`, `distance_to`, `radius`) VALUES
(1, 11, 50, 5),
(2, 51, 100, 10),
(3, 101, 1000, 30),
(4, 0, 5, 1),
(5, 6, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id_state` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `id_country` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id_state`, `state_name`, `id_country`) VALUES
(1, 'Andaman and Nicobar Islands', 101),
(2, 'Andhra Pradesh', 101),
(3, 'Arunachal Pradesh', 101),
(4, 'Assam', 101),
(5, 'Bihar', 101),
(6, 'Chandigarh', 101),
(7, 'Chhattisgarh', 101),
(8, 'Dadra and Nagar Haveli', 101),
(9, 'Daman and Diu', 101),
(10, 'Delhi', 101),
(11, 'Goa', 101),
(12, 'Gujarat', 101),
(13, 'Haryana', 101),
(14, 'Himachal Pradesh', 101),
(15, 'Jammu and Kashmir', 101),
(16, 'Jharkhand', 101),
(17, 'Karnataka', 101),
(18, 'Kenmore', 101),
(19, 'Kerala', 101),
(20, 'Lakshadweep', 101),
(21, 'Madhya Pradesh', 101),
(22, 'Maharashtra', 101),
(23, 'Manipur', 101),
(24, 'Meghalaya', 101),
(25, 'Mizoram', 101),
(26, 'Nagaland', 101),
(27, 'Narora', 101),
(28, 'Natwar', 101),
(29, 'Odisha', 101),
(30, 'Paschim Medinipur', 101),
(31, 'Pondicherry', 101),
(32, 'Punjab', 101),
(33, 'Rajasthan', 101),
(34, 'Sikkim', 101),
(35, 'Tamil Nadu', 101),
(36, 'Telangana', 101),
(37, 'Tripura', 101),
(38, 'Uttar Pradesh', 101),
(39, 'Uttarakhand', 101),
(40, 'Vaishali', 101),
(41, 'West Bengal', 101),
(42, 'Badakhshan', 1),
(43, 'Badgis', 1),
(44, 'Baglan', 1),
(45, 'Balkh', 1),
(46, 'Bamiyan', 1),
(47, 'Farah', 1),
(48, 'Faryab', 1),
(49, 'Gawr', 1),
(50, 'Gazni', 1),
(51, 'Herat', 1),
(52, 'Hilmand', 1),
(53, 'Jawzjan', 1),
(54, 'Kabul', 1),
(55, 'Kapisa', 1),
(56, 'Khawst', 1),
(57, 'Kunar', 1),
(58, 'Lagman', 1),
(59, 'Lawghar', 1),
(60, 'Nangarhar', 1),
(61, 'Nimruz', 1),
(62, 'Nuristan', 1),
(63, 'Paktika', 1),
(64, 'Paktiya', 1),
(65, 'Parwan', 1),
(66, 'Qandahar', 1),
(67, 'Qunduz', 1),
(68, 'Samangan', 1),
(69, 'Sar-e Pul', 1),
(70, 'Takhar', 1),
(71, 'Uruzgan', 1),
(72, 'Wardag', 1),
(73, 'Zabul', 1),
(74, 'Berat', 2),
(75, 'Bulqize', 2),
(76, 'Delvine', 2),
(77, 'Devoll', 2),
(78, 'Dibre', 2),
(79, 'Durres', 2),
(80, 'Elbasan', 2),
(81, 'Fier', 2),
(82, 'Gjirokaster', 2),
(83, 'Gramsh', 2),
(84, 'Has', 2),
(85, 'Kavaje', 2),
(86, 'Kolonje', 2),
(87, 'Korce', 2),
(88, 'Kruje', 2),
(89, 'Kucove', 2),
(90, 'Kukes', 2),
(91, 'Kurbin', 2),
(92, 'Lezhe', 2),
(93, 'Librazhd', 2),
(94, 'Lushnje', 2),
(95, 'Mallakaster', 2),
(96, 'Malsi e Madhe', 2),
(97, 'Mat', 2),
(98, 'Mirdite', 2),
(99, 'Peqin', 2),
(100, 'Permet', 2),
(1062, 'al-Bahr-al-Ahmar', 64),
(1063, 'al-Buhayrah', 64),
(1064, 'al-Fayyum', 64),
(1065, 'al-Gharbiyah', 64),
(1066, 'al-Iskandariyah', 64),
(1067, 'al-Ismailiyah', 64),
(1068, 'al-Jizah', 64),
(1069, 'al-Minufiyah', 64),
(1070, 'al-Minya', 64),
(1071, 'al-Qahira', 64),
(1072, 'al-Qalyubiyah', 64),
(1073, 'al-Uqsur', 64),
(1074, 'al-Wadi al-Jadid', 64),
(1075, 'as-Suways', 64),
(1076, 'ash-Sharqiyah', 64),
(1077, 'Ahuachapan', 65),
(1078, 'Cabanas', 65),
(1079, 'Chalatenango', 65),
(1080, 'Cuscatlan', 65),
(1081, 'La Libertad', 65),
(1082, 'La Paz', 65),
(1083, 'La Union', 65),
(1084, 'Morazan', 65),
(1085, 'San Miguel', 65),
(1086, 'San Salvador', 65),
(1087, 'San Vicente', 65),
(1088, 'Santa Ana', 65),
(1089, 'Sonsonate', 65),
(1090, 'Usulutan', 65),
(1091, 'Annobon', 66),
(1092, 'Bioko Norte', 66),
(1093, 'Bioko Sur', 66),
(1094, 'Centro Sur', 66),
(1095, 'Kie-Ntem', 66),
(1096, 'Litoral', 66),
(1097, 'Wele-Nzas', 66),
(1098, 'Anseba', 67),
(1099, 'Debub', 67),
(1100, 'Debub-Keih-Bahri', 67),
(1101, 'Gash-Barka', 67),
(1102, 'Maekel', 67),
(1103, 'Semien-Keih-Bahri', 67),
(1104, 'Harju', 68),
(1105, 'Hiiu', 68),
(1106, 'Ida-Viru', 68),
(1107, 'Jarva', 68),
(1108, 'Jogeva', 68),
(1109, 'Laane', 68),
(1110, 'Laane-Viru', 68),
(1111, 'Parnu', 68),
(1112, 'Polva', 68),
(1113, 'Rapla', 68),
(1114, 'Saare', 68),
(1115, 'Tartu', 68),
(1116, 'Valga', 68),
(1117, 'Viljandi', 68),
(1118, 'Voru', 68),
(1119, 'Addis Abeba', 69),
(1120, 'Afar', 69),
(1121, 'Amhara', 69),
(1122, 'Benishangul', 69),
(1123, 'Diredawa', 69),
(1124, 'Gambella', 69),
(1125, 'Harar', 69),
(1126, 'Jigjiga', 69),
(1127, 'Mekele', 69),
(1128, 'Oromia', 69),
(1129, 'Somali', 69),
(1130, 'Southern', 69),
(1131, 'Tigray', 69),
(1132, 'Christmas Island', 70),
(1133, 'Cocos Islands', 70),
(1134, 'Coral Sea Islands', 70),
(1135, 'Falkland Islands', 71),
(1136, 'South Georgia', 71),
(1137, 'Klaksvik', 72),
(1138, 'Nor ara Eysturoy', 72),
(1139, 'Nor oy', 72),
(1140, 'Sandoy', 72),
(1141, 'Streymoy', 72),
(1142, 'Su uroy', 72),
(1143, 'Sy ra Eysturoy', 72),
(1144, 'Torshavn', 72),
(1145, 'Vaga', 72),
(1146, 'Central', 73),
(1147, 'Eastern', 73),
(1148, 'Northern', 73),
(1149, 'South Pacific', 73),
(1150, 'Western', 73),
(1151, 'Ahvenanmaa', 74),
(1152, 'Etela-Karjala', 74),
(1153, 'Etela-Pohjanmaa', 74),
(1154, 'Etela-Savo', 74),
(1155, 'Etela-Suomen Laani', 74),
(1156, 'Ita-Suomen Laani', 74),
(1157, 'Ita-Uusimaa', 74),
(1158, 'Kainuu', 74),
(1159, 'Kanta-Hame', 74),
(1160, 'Keski-Pohjanmaa', 74),
(1161, 'Keski-Suomi', 74),
(1162, 'Kymenlaakso', 74),
(1163, 'Lansi-Suomen Laani', 74),
(1164, 'Lappi', 74),
(1165, 'Northern Savonia', 74),
(1166, 'Ostrobothnia', 74),
(1167, 'Oulun Laani', 74),
(1168, 'Paijat-Hame', 74),
(1169, 'Pirkanmaa', 74),
(1170, 'Pohjanmaa', 74),
(1171, 'Pohjois-Karjala', 74),
(1172, 'Pohjois-Pohjanmaa', 74),
(1173, 'Pohjois-Savo', 74),
(1174, 'Saarijarvi', 74),
(1175, 'Satakunta', 74),
(1176, 'Southern Savonia', 74),
(1177, 'Tavastia Proper', 74),
(1178, 'Uleaborgs Lan', 74),
(1179, 'Uusimaa', 74),
(1180, 'Varsinais-Suomi', 74),
(1181, 'Ain', 75),
(1182, 'Aisne', 75),
(1183, 'Albi Le Sequestre', 75),
(1184, 'Allier', 75),
(1185, 'Alpes-Cote dAzur', 75),
(1186, 'Alpes-Maritimes', 75),
(1187, 'Alpes-de-Haute-Provence', 75),
(1188, 'Alsace', 75),
(1189, 'Aquitaine', 75),
(1190, 'Ardeche', 75),
(1191, 'Ardennes', 75),
(1192, 'Ariege', 75),
(1193, 'Aube', 75),
(1194, 'Aude', 75),
(1195, 'Auvergne', 75),
(1196, 'Aveyron', 75),
(1197, 'Bas-Rhin', 75),
(1198, 'Basse-Normandie', 75),
(1199, 'Bouches-du-Rhone', 75),
(1200, 'Bourgogne', 75),
(1201, 'Bretagne', 75),
(1202, 'Brittany', 75),
(1203, 'Burgundy', 75),
(1204, 'Calvados', 75),
(1205, 'Cantal', 75),
(1206, 'Cedex', 75),
(1207, 'Centre', 75),
(1208, 'Charente', 75),
(1209, 'Charente-Maritime', 75),
(1210, 'Cher', 75),
(1211, 'Correze', 75),
(1212, 'Corse-du-Sud', 75),
(1213, 'Cote-d\'Or', 75),
(1214, 'Cotes-d\'Armor', 75),
(1215, 'Creuse', 75),
(1216, 'Crolles', 75),
(1217, 'Deux-Sevres', 75),
(1218, 'Dordogne', 75),
(1219, 'Doubs', 75),
(1220, 'Drome', 75),
(1221, 'Essonne', 75),
(1222, 'Eure', 75),
(1223, 'Eure-et-Loir', 75),
(1224, 'Feucherolles', 75),
(1225, 'Finistere', 75),
(1226, 'Franche-Comte', 75),
(1227, 'Gard', 75),
(1228, 'Gers', 75),
(1229, 'Gironde', 75),
(1230, 'Haut-Rhin', 75),
(1231, 'Haute-Corse', 75),
(1232, 'Haute-Garonne', 75),
(1233, 'Haute-Loire', 75),
(1234, 'Haute-Marne', 75),
(1235, 'Haute-Saone', 75),
(1236, 'Haute-Savoie', 75),
(1237, 'Haute-Vienne', 75),
(1238, 'Hautes-Alpes', 75),
(1239, 'Hautes-Pyrenees', 75),
(1240, 'Hauts-de-Seine', 75),
(1241, 'Herault', 75),
(1242, 'Ile-de-France', 75),
(1243, 'Ille-et-Vilaine', 75),
(1244, 'Indre', 75),
(1245, 'Indre-et-Loire', 75),
(1246, 'Isere', 75),
(1247, 'Jura', 75),
(1248, 'Klagenfurt', 75),
(1249, 'Landes', 75),
(1250, 'Languedoc-Roussillon', 75),
(1251, 'Larcay', 75),
(1252, 'Le Castellet', 75),
(1253, 'Le Creusot', 75),
(1254, 'Limousin', 75),
(1255, 'Loir-et-Cher', 75),
(1256, 'Loire', 75),
(1257, 'Loire-Atlantique', 75),
(1258, 'Loiret', 75),
(1259, 'Lorraine', 75),
(1260, 'Lot', 75),
(1261, 'Lot-et-Garonne', 75),
(1262, 'Lower Normandy', 75),
(1263, 'Lozere', 75),
(1264, 'Maine-et-Loire', 75),
(1265, 'Manche', 75),
(1266, 'Marne', 75),
(1267, 'Mayenne', 75),
(1268, 'Meurthe-et-Moselle', 75),
(1269, 'Meuse', 75),
(1270, 'Midi-Pyrenees', 75),
(1271, 'Morbihan', 75),
(1272, 'Moselle', 75),
(1273, 'Nievre', 75),
(1274, 'Nord', 75),
(1275, 'Nord-Pas-de-Calais', 75),
(1276, 'Oise', 75),
(1277, 'Orne', 75),
(1278, 'Paris', 75),
(1279, 'Pas-de-Calais', 75),
(1280, 'Pays de la Loire', 75),
(1281, 'Pays-de-la-Loire', 75),
(1282, 'Picardy', 75),
(1283, 'Puy-de-Dome', 75),
(1284, 'Pyrenees-Atlantiques', 75),
(1285, 'Pyrenees-Orientales', 75),
(1286, 'Quelmes', 75),
(1287, 'Rhone', 75),
(1288, 'Rhone-Alpes', 75),
(1289, 'Saint Ouen', 75),
(1290, 'Saint Viatre', 75),
(1291, 'Saone-et-Loire', 75),
(1292, 'Sarthe', 75),
(1293, 'Savoie', 75),
(1294, 'Seine-Maritime', 75),
(1295, 'Seine-Saint-Denis', 75),
(1296, 'Seine-et-Marne', 75),
(1297, 'Somme', 75),
(1298, 'Sophia Antipolis', 75),
(1299, 'Souvans', 75),
(1300, 'Tarn', 75),
(1301, 'Tarn-et-Garonne', 75),
(1302, 'Territoire de Belfort', 75),
(1303, 'Treignac', 75),
(1304, 'Upper Normandy', 75),
(1305, 'Val-d\'Oise', 75),
(1306, 'Val-de-Marne', 75),
(1307, 'Var', 75),
(1308, 'Vaucluse', 75),
(1309, 'Vellise', 75),
(1310, 'Vendee', 75),
(1311, 'Vienne', 75),
(1312, 'Vosges', 75),
(1313, 'Yonne', 75),
(1314, 'Yvelines', 75),
(1315, 'Cayenne', 76),
(1316, 'Saint-Laurent-du-Maroni', 76),
(1317, 'Iles du Vent', 77),
(1318, 'Iles sous le Vent', 77),
(1319, 'Marquesas', 77),
(1320, 'Tuamotu', 77),
(1321, 'Tubuai', 77),
(1322, 'Amsterdam', 78),
(1323, 'Crozet Islands', 78),
(1324, 'Kerguelen', 78),
(1325, 'Estuaire', 79),
(1326, 'Haut-Ogooue', 79),
(1327, 'Moyen-Ogooue', 79),
(1328, 'Ngounie', 79),
(1329, 'Nyanga', 79),
(1330, 'Ogooue-Ivindo', 79),
(1331, 'Ogooue-Lolo', 79),
(1332, 'Ogooue-Maritime', 79),
(1333, 'Woleu-Ntem', 79),
(1334, 'Banjul', 80),
(1335, 'Basse', 80),
(1336, 'Brikama', 80),
(1337, 'Janjanbureh', 80),
(1338, 'Kanifing', 80),
(1339, 'Kerewan', 80),
(1340, 'Kuntaur', 80),
(1341, 'Mansakonko', 80),
(1342, 'Abhasia', 81),
(1343, 'Ajaria', 81),
(1344, 'Guria', 81),
(1345, 'Imereti', 81),
(1346, 'Kaheti', 81),
(1347, 'Kvemo Kartli', 81),
(1348, 'Mcheta-Mtianeti', 81),
(1349, 'Racha', 81),
(1350, 'Samagrelo-Zemo Svaneti', 81),
(1351, 'Samche-Zhavaheti', 81),
(1352, 'Shida Kartli', 81),
(1353, 'Tbilisi', 81),
(1354, 'Auvergne', 82),
(1355, 'Baden-Wurttemberg', 82),
(1356, 'Bavaria', 82),
(1357, 'Bayern', 82),
(1358, 'Beilstein Wurtt', 82),
(1359, 'Berlin', 82),
(1360, 'Brandenburg', 82),
(1361, 'Bremen', 82),
(1362, 'Dreisbach', 82),
(1363, 'Freistaat Bayern', 82),
(1364, 'Hamburg', 82),
(1365, 'Hannover', 82),
(1366, 'Heroldstatt', 82),
(1367, 'Hessen', 82),
(1368, 'Kortenberg', 82),
(1369, 'Laasdorf', 82),
(1370, 'Land Baden-Wurttemberg', 82),
(1371, 'Land Bayern', 82),
(1372, 'Land Brandenburg', 82),
(1373, 'Land Hessen', 82),
(1374, 'Land Mecklenburg-Vorpommern', 82),
(1375, 'Land Nordrhein-Westfalen', 82),
(1376, 'Land Rheinland-Pfalz', 82),
(1377, 'Land Sachsen', 82),
(1378, 'Land Sachsen-Anhalt', 82),
(1379, 'Land Thuringen', 82),
(1380, 'Lower Saxony', 82),
(1381, 'Mecklenburg-Vorpommern', 82),
(1382, 'Mulfingen', 82),
(1383, 'Munich', 82),
(1384, 'Neubeuern', 82),
(1385, 'Niedersachsen', 82),
(1386, 'Noord-Holland', 82),
(1387, 'Nordrhein-Westfalen', 82),
(1388, 'North Rhine-Westphalia', 82),
(1389, 'Osterode', 82),
(1390, 'Rheinland-Pfalz', 82),
(1391, 'Rhineland-Palatinate', 82),
(1392, 'Saarland', 82),
(1393, 'Sachsen', 82),
(1394, 'Sachsen-Anhalt', 82),
(1395, 'Saxony', 82),
(1396, 'Schleswig-Holstein', 82),
(1397, 'Thuringia', 82),
(1398, 'Webling', 82),
(1399, 'Weinstrabe', 82),
(1400, 'schlobborn', 82),
(1401, 'Ashanti', 83),
(1402, 'Brong-Ahafo', 83),
(1403, 'Central', 83),
(1404, 'Eastern', 83),
(1405, 'Greater Accra', 83),
(1406, 'Northern', 83),
(1407, 'Upper East', 83),
(1408, 'Upper West', 83),
(1409, 'Volta', 83),
(1410, 'Western', 83),
(1411, 'Gibraltar', 84),
(1412, 'Acharnes', 85),
(1413, 'Ahaia', 85),
(1414, 'Aitolia kai Akarnania', 85),
(1415, 'Argolis', 85),
(1416, 'Arkadia', 85),
(1417, 'Arta', 85),
(1418, 'Attica', 85),
(1419, 'Attiki', 85),
(1420, 'Ayion Oros', 85),
(1421, 'Crete', 85),
(1422, 'Dodekanisos', 85),
(1423, 'Drama', 85),
(1424, 'Evia', 85),
(1425, 'Evritania', 85),
(1426, 'Evros', 85),
(1427, 'Evvoia', 85),
(1428, 'Florina', 85),
(1429, 'Fokis', 85),
(1430, 'Fthiotis', 85),
(1431, 'Grevena', 85),
(1432, 'Halandri', 85),
(1433, 'Halkidiki', 85),
(1434, 'Hania', 85),
(1435, 'Heraklion', 85),
(1436, 'Hios', 85),
(1437, 'Ilia', 85),
(1438, 'Imathia', 85),
(1439, 'Ioannina', 85),
(1440, 'Iraklion', 85),
(1441, 'Karditsa', 85),
(1442, 'Kastoria', 85),
(1443, 'Kavala', 85),
(1444, 'Kefallinia', 85),
(1445, 'Kerkira', 85),
(1446, 'Kiklades', 85),
(1447, 'Kilkis', 85),
(1448, 'Korinthia', 85),
(1449, 'Kozani', 85),
(1450, 'Lakonia', 85),
(1451, 'Larisa', 85),
(1452, 'Lasithi', 85),
(1453, 'Lesvos', 85),
(1454, 'Levkas', 85),
(1455, 'Magnisia', 85),
(1456, 'Messinia', 85),
(1457, 'Nomos Attikis', 85),
(1458, 'Nomos Zakynthou', 85),
(1459, 'Pella', 85),
(1460, 'Pieria', 85),
(1461, 'Piraios', 85),
(1462, 'Preveza', 85),
(1463, 'Rethimni', 85),
(1464, 'Rodopi', 85),
(1465, 'Samos', 85),
(1466, 'Serrai', 85),
(1467, 'Thesprotia', 85),
(1468, 'Thessaloniki', 85),
(1469, 'Trikala', 85),
(1470, 'Voiotia', 85),
(1471, 'West Greece', 85),
(1472, 'Xanthi', 85),
(1473, 'Zakinthos', 85),
(1474, 'Aasiaat', 86),
(1475, 'Ammassalik', 86),
(1476, 'Illoqqortoormiut', 86),
(1477, 'Ilulissat', 86),
(1478, 'Ivittuut', 86),
(1479, 'Kangaatsiaq', 86),
(1480, 'Maniitsoq', 86),
(1481, 'Nanortalik', 86),
(1482, 'Narsaq', 86),
(1483, 'Nuuk', 86),
(1484, 'Paamiut', 86),
(1485, 'Qaanaaq', 86),
(1486, 'Qaqortoq', 86),
(1487, 'Qasigiannguit', 86),
(1488, 'Qeqertarsuaq', 86),
(1489, 'Sisimiut', 86),
(1490, 'Udenfor kommunal inddeling', 86),
(1491, 'Upernavik', 86),
(1492, 'Uummannaq', 86),
(1493, 'Carriacou-Petite Martinique', 87),
(1494, 'Saint Andrew', 87),
(1495, 'Saint Davids', 87),
(1496, 'Saint George\'s', 87),
(1497, 'Saint John', 87),
(1498, 'Saint Mark', 87),
(1499, 'Saint Patrick', 87),
(1500, 'Basse-Terre', 88),
(1501, 'Grande-Terre', 88),
(1502, 'Iles des Saintes', 88),
(1503, 'La Desirade', 88),
(1504, 'Marie-Galante', 88),
(1505, 'Saint Barthelemy', 88),
(1506, 'Saint Martin', 88),
(1507, 'Agana Heights', 89),
(1508, 'Agat', 89),
(1509, 'Barrigada', 89),
(1510, 'Chalan-Pago-Ordot', 89),
(1511, 'Dededo', 89),
(1512, 'Hagatna', 89),
(1513, 'Inarajan', 89),
(1514, 'Mangilao', 89),
(1515, 'Merizo', 89),
(1516, 'Mongmong-Toto-Maite', 89),
(1517, 'Santa Rita', 89),
(1518, 'Sinajana', 89),
(1519, 'Talofofo', 89),
(1520, 'Tamuning', 89),
(1521, 'Yigo', 89),
(1522, 'Yona', 89),
(1523, 'Alta Verapaz', 90),
(1524, 'Baja Verapaz', 90),
(1525, 'Chimaltenango', 90),
(1526, 'Chiquimula', 90),
(1527, 'El Progreso', 90),
(1528, 'Escuintla', 90),
(1529, 'Guatemala', 90),
(1530, 'Huehuetenango', 90),
(1531, 'Izabal', 90),
(1532, 'Jalapa', 90),
(1533, 'Jutiapa', 90),
(1534, 'Peten', 90),
(1535, 'Quezaltenango', 90),
(1536, 'Quiche', 90),
(1537, 'Retalhuleu', 90),
(1538, 'Sacatepequez', 90),
(1539, 'San Marcos', 90),
(1540, 'Santa Rosa', 90),
(1541, 'Solola', 90),
(1542, 'Suchitepequez', 90),
(1543, 'Totonicapan', 90),
(1544, 'Zacapa', 90),
(1545, 'Alderney', 91),
(1546, 'Castel', 91),
(1547, 'Forest', 91),
(1548, 'Saint Andrew', 91),
(1549, 'Saint Martin', 91),
(1550, 'Saint Peter Port', 91),
(1551, 'Saint Pierre du Bois', 91),
(1552, 'Saint Sampson', 91),
(1553, 'Saint Saviour', 91),
(1554, 'Sark', 91),
(1555, 'Torteval', 91),
(1556, 'Vale', 91),
(1557, 'Beyla', 92),
(1558, 'Boffa', 92),
(1559, 'Boke', 92),
(1560, 'Conakry', 92),
(1561, 'Coyah', 92),
(1562, 'Dabola', 92),
(1563, 'Dalaba', 92),
(1564, 'Dinguiraye', 92),
(1565, 'Faranah', 92),
(1566, 'Forecariah', 92),
(1567, 'Fria', 92),
(1568, 'Gaoual', 92),
(1569, 'Gueckedou', 92),
(1570, 'Kankan', 92),
(1571, 'Kerouane', 92),
(1572, 'Kindia', 92),
(1573, 'Kissidougou', 92),
(1574, 'Koubia', 92),
(1575, 'Koundara', 92),
(1576, 'Kouroussa', 92),
(1577, 'Labe', 92),
(1578, 'Lola', 92),
(1579, 'Macenta', 92),
(1580, 'Mali', 92),
(1581, 'Mamou', 92),
(1582, 'Mandiana', 92),
(1583, 'Nzerekore', 92),
(1584, 'Pita', 92),
(1585, 'Siguiri', 92),
(1586, 'Telimele', 92),
(1587, 'Tougue', 92),
(1588, 'Yomou', 92),
(1589, 'Bafata', 93),
(1590, 'Bissau', 93),
(1591, 'Bolama', 93),
(1592, 'Cacheu', 93),
(1593, 'Gabu', 93),
(1594, 'Oio', 93),
(1595, 'Quinara', 93),
(1596, 'Tombali', 93),
(1597, 'Barima-Waini', 94),
(1598, 'Cuyuni-Mazaruni', 94),
(1599, 'Demerara-Mahaica', 94),
(1600, 'East Berbice-Corentyne', 94),
(1601, 'Essequibo Islands-West Demerar', 94),
(1602, 'Mahaica-Berbice', 94),
(1603, 'Pomeroon-Supenaam', 94),
(1604, 'Potaro-Siparuni', 94),
(1605, 'Upper Demerara-Berbice', 94),
(1606, 'Upper Takutu-Upper Essequibo', 94),
(1607, 'Artibonite', 95),
(1608, 'Centre', 95),
(1609, 'Grand\'Anse', 95),
(1610, 'Nord', 95),
(1611, 'Nord-Est', 95),
(1612, 'Nord-Ouest', 95),
(1613, 'Ouest', 95),
(1614, 'Sud', 95),
(1615, 'Sud-Est', 95),
(1616, 'Heard and McDonald Islands', 96),
(1617, 'Atlantida', 97),
(1618, 'Choluteca', 97),
(1619, 'Colon', 97),
(1620, 'Comayagua', 97),
(1621, 'Copan', 97),
(1622, 'Cortes', 97),
(1623, 'Distrito Central', 97),
(1624, 'El Paraiso', 97),
(1625, 'Francisco Morazan', 97),
(1626, 'Gracias a Dios', 97),
(1627, 'Intibuca', 97),
(1628, 'Islas de la Bahia', 97),
(1629, 'La Paz', 97),
(1630, 'Lempira', 97),
(1631, 'Ocotepeque', 97),
(1632, 'Olancho', 97),
(1633, 'Santa Barbara', 97),
(1634, 'Valle', 97),
(1635, 'Yoro', 97),
(1636, 'Hong Kong', 98),
(1637, 'Bacs-Kiskun', 99),
(1638, 'Baranya', 99),
(1639, 'Bekes', 99),
(1640, 'Borsod-Abauj-Zemplen', 99),
(1641, 'Budapest', 99),
(1642, 'Csongrad', 99),
(1643, 'Fejer', 99),
(1644, 'Gyor-Moson-Sopron', 99),
(1645, 'Hajdu-Bihar', 99),
(1646, 'Heves', 99),
(1647, 'Jasz-Nagykun-Szolnok', 99),
(1648, 'Komarom-Esztergom', 99),
(1649, 'Nograd', 99),
(1650, 'Pest', 99),
(1651, 'Somogy', 99),
(1652, 'Szabolcs-Szatmar-Bereg', 99),
(1653, 'Tolna', 99),
(1654, 'Vas', 99),
(1655, 'Veszprem', 99),
(1656, 'Zala', 99),
(1657, 'Austurland', 100),
(1658, 'Gullbringusysla', 100),
(1659, 'Hofu borgarsva i', 100),
(1660, 'Nor urland eystra', 100),
(1661, 'Nor urland vestra', 100),
(1662, 'Su urland', 100),
(1663, 'Su urnes', 100),
(1664, 'Vestfir ir', 100),
(1665, 'Vesturland', 100),
(1666, 'Aceh', 102),
(1667, 'Bali', 102),
(1668, 'Bangka-Belitung', 102),
(1669, 'Banten', 102),
(1670, 'Bengkulu', 102),
(1671, 'Gandaria', 102),
(1672, 'Gorontalo', 102),
(1673, 'Jakarta', 102),
(1674, 'Jambi', 102),
(1675, 'Jawa Barat', 102),
(1676, 'Jawa Tengah', 102),
(1677, 'Jawa Timur', 102),
(1678, 'Kalimantan Barat', 102),
(1679, 'Kalimantan Selatan', 102),
(1680, 'Kalimantan Tengah', 102),
(1681, 'Kalimantan Timur', 102),
(1682, 'Kendal', 102),
(1683, 'Lampung', 102),
(1684, 'Maluku', 102),
(1685, 'Maluku Utara', 102),
(1686, 'Nusa Tenggara Barat', 102),
(1687, 'Nusa Tenggara Timur', 102),
(1688, 'Papua', 102),
(1689, 'Riau', 102),
(1690, 'Riau Kepulauan', 102),
(1691, 'Solo', 102),
(1692, 'Sulawesi Selatan', 102),
(1693, 'Sulawesi Tengah', 102),
(1694, 'Sulawesi Tenggara', 102),
(1695, 'Sulawesi Utara', 102),
(1696, 'Sumatera Barat', 102),
(1697, 'Sumatera Selatan', 102),
(1698, 'Sumatera Utara', 102),
(1699, 'Yogyakarta', 102),
(1700, 'Ardabil', 103),
(1701, 'Azarbayjan-e Bakhtari', 103),
(1702, 'Azarbayjan-e Khavari', 103),
(1703, 'Bushehr', 103),
(1704, 'Chahar Mahal-e Bakhtiari', 103),
(1705, 'Esfahan', 103),
(1706, 'Fars', 103),
(1707, 'Gilan', 103),
(1708, 'Golestan', 103),
(1709, 'Hamadan', 103),
(1710, 'Hormozgan', 103),
(1711, 'Ilam', 103),
(1712, 'Kerman', 103),
(1713, 'Kermanshah', 103),
(1714, 'Khorasan', 103),
(1715, 'Khuzestan', 103),
(1716, 'Kohgiluyeh-e Boyerahmad', 103),
(1717, 'Kordestan', 103),
(1718, 'Lorestan', 103),
(1719, 'Markazi', 103),
(1720, 'Mazandaran', 103),
(1721, 'Ostan-e Esfahan', 103),
(1722, 'Qazvin', 103),
(1723, 'Qom', 103),
(1724, 'Semnan', 103),
(1725, 'Sistan-e Baluchestan', 103),
(1726, 'Tehran', 103),
(1727, 'Yazd', 103),
(1728, 'Zanjan', 103),
(1729, 'Babil', 104),
(1730, 'Baghdad', 104),
(1731, 'Dahuk', 104),
(1732, 'Dhi Qar', 104),
(1733, 'Diyala', 104),
(1734, 'Erbil', 104),
(1735, 'Irbil', 104),
(1736, 'Karbala', 104),
(1737, 'Kurdistan', 104),
(1738, 'Maysan', 104),
(1739, 'Ninawa', 104),
(1740, 'Salah-ad-Din', 104),
(1741, 'Wasit', 104),
(1742, 'al-Anbar', 104),
(1743, 'al-Basrah', 104),
(1744, 'al-Muthanna', 104),
(1745, 'al-Qadisiyah', 104),
(1746, 'an-Najaf', 104),
(1747, 'as-Sulaymaniyah', 104),
(1748, 'at-Ta\'mim', 104),
(1749, 'Armagh', 105),
(1750, 'Carlow', 105),
(1751, 'Cavan', 105),
(1752, 'Clare', 105),
(1753, 'Cork', 105),
(1754, 'Donegal', 105),
(1755, 'Dublin', 105),
(1756, 'Galway', 105),
(1757, 'Kerry', 105),
(1758, 'Kildare', 105),
(1759, 'Kilkenny', 105),
(1760, 'Laois', 105),
(1761, 'Leinster', 105),
(1762, 'Leitrim', 105),
(1763, 'Limerick', 105),
(1764, 'Loch Garman', 105),
(1765, 'Longford', 105),
(1766, 'Louth', 105),
(1767, 'Mayo', 105),
(1768, 'Meath', 105),
(1769, 'Monaghan', 105),
(1770, 'Offaly', 105),
(1771, 'Roscommon', 105),
(1772, 'Sligo', 105),
(1773, 'Tipperary North Riding', 105),
(1774, 'Tipperary South Riding', 105),
(1775, 'Ulster', 105),
(1776, 'Waterford', 105),
(1777, 'Westmeath', 105),
(1778, 'Wexford', 105),
(1779, 'Wicklow', 105),
(1780, 'Beit Hanania', 106),
(1781, 'Ben Gurion Airport', 106),
(1782, 'Bethlehem', 106),
(1783, 'Caesarea', 106),
(1784, 'Centre', 106),
(1785, 'Gaza', 106),
(1786, 'Hadaron', 106),
(1787, 'Haifa District', 106),
(1788, 'Hamerkaz', 106),
(1789, 'Hazafon', 106),
(1790, 'Hebron', 106),
(1791, 'Jaffa', 106),
(1792, 'Jerusalem', 106),
(1793, 'Khefa', 106),
(1794, 'Kiryat Yam', 106),
(1795, 'Lower Galilee', 106),
(1796, 'Qalqilya', 106),
(1797, 'Talme Elazar', 106),
(1798, 'Tel Aviv', 106),
(1799, 'Tsafon', 106),
(1800, 'Umm El Fahem', 106),
(1801, 'Yerushalayim', 106),
(1802, 'Abruzzi', 107),
(1803, 'Abruzzo', 107),
(1804, 'Agrigento', 107),
(1805, 'Alessandria', 107),
(1806, 'Ancona', 107),
(1807, 'Arezzo', 107),
(1808, 'Ascoli Piceno', 107),
(1809, 'Asti', 107),
(1810, 'Avellino', 107),
(1811, 'Bari', 107),
(1812, 'Basilicata', 107),
(1813, 'Belluno', 107),
(1814, 'Benevento', 107),
(1815, 'Bergamo', 107),
(1816, 'Biella', 107),
(1817, 'Bologna', 107),
(1818, 'Bolzano', 107),
(1819, 'Brescia', 107),
(1820, 'Brindisi', 107),
(1821, 'Calabria', 107),
(1822, 'Campania', 107),
(1823, 'Cartoceto', 107),
(1824, 'Caserta', 107),
(1825, 'Catania', 107),
(1826, 'Chieti', 107),
(1827, 'Como', 107),
(1828, 'Cosenza', 107),
(1829, 'Cremona', 107),
(1830, 'Cuneo', 107),
(1831, 'Emilia-Romagna', 107),
(1832, 'Ferrara', 107),
(1833, 'Firenze', 107),
(1834, 'Florence', 107),
(1835, 'Forli-Cesena ', 107),
(1836, 'Friuli-Venezia Giulia', 107),
(1837, 'Frosinone', 107),
(1838, 'Genoa', 107),
(1839, 'Gorizia', 107),
(1840, 'L\'Aquila', 107),
(1841, 'Lazio', 107),
(1842, 'Lecce', 107),
(1843, 'Lecco', 107),
(1845, 'Liguria', 107),
(1846, 'Lodi', 107),
(1847, 'Lombardia', 107),
(1848, 'Lombardy', 107),
(1849, 'Macerata', 107),
(1850, 'Mantova', 107),
(1851, 'Marche', 107),
(1852, 'Messina', 107),
(1853, 'Milan', 107),
(1854, 'Modena', 107),
(1855, 'Molise', 107),
(1856, 'Molteno', 107),
(1857, 'Montenegro', 107),
(1858, 'Monza and Brianza', 107),
(1859, 'Naples', 107),
(1860, 'Novara', 107),
(1861, 'Padova', 107),
(1862, 'Parma', 107),
(1863, 'Pavia', 107),
(1864, 'Perugia', 107),
(1865, 'Pesaro-Urbino', 107),
(1866, 'Piacenza', 107),
(1867, 'Piedmont', 107),
(1868, 'Piemonte', 107),
(1869, 'Pisa', 107),
(1870, 'Pordenone', 107),
(1871, 'Potenza', 107),
(1872, 'Puglia', 107),
(1873, 'Reggio Emilia', 107),
(1874, 'Rimini', 107),
(1875, 'Roma', 107),
(1876, 'Salerno', 107),
(1877, 'Sardegna', 107),
(1878, 'Sassari', 107),
(1879, 'Savona', 107),
(1880, 'Sicilia', 107),
(1881, 'Siena', 107),
(1882, 'Sondrio', 107),
(1883, 'South Tyrol', 107),
(1884, 'Taranto', 107),
(1885, 'Teramo', 107),
(1886, 'Torino', 107),
(1887, 'Toscana', 107),
(1888, 'Trapani', 107),
(1889, 'Trentino-Alto Adige', 107),
(1890, 'Trento', 107),
(1891, 'Treviso', 107),
(1892, 'Udine', 107),
(1893, 'Umbria', 107),
(1894, 'Valle d\'Aosta', 107),
(1895, 'Varese', 107),
(1896, 'Veneto', 107),
(1897, 'Venezia', 107),
(1898, 'Verbano-Cusio-Ossola', 107),
(1899, 'Vercelli', 107),
(1900, 'Verona', 107),
(1901, 'Vicenza', 107),
(1902, 'Viterbo', 107),
(1903, 'Buxoro Viloyati', 108),
(1904, 'Clarendon', 108),
(1905, 'Hanover', 108),
(1906, 'Kingston', 108),
(1907, 'Manchester', 108),
(1908, 'Portland', 108),
(1909, 'Saint Andrews', 108),
(1910, 'Saint Ann', 108),
(1911, 'Saint Catherine', 108),
(1912, 'Saint Elizabeth', 108),
(1913, 'Saint James', 108),
(1914, 'Saint Mary', 108),
(1915, 'Saint Thomas', 108),
(1916, 'Trelawney', 108),
(1917, 'Westmoreland', 108),
(1918, 'Aichi', 109),
(1919, 'Akita', 109),
(1920, 'Aomori', 109),
(1921, 'Chiba', 109),
(1922, 'Ehime', 109),
(1923, 'Fukui', 109),
(1924, 'Fukuoka', 109),
(1925, 'Fukushima', 109),
(1926, 'Gifu', 109),
(1927, 'Gumma', 109),
(1928, 'Hiroshima', 109),
(1929, 'Hokkaido', 109),
(1930, 'Hyogo', 109),
(1931, 'Ibaraki', 109),
(1932, 'Ishikawa', 109),
(1933, 'Iwate', 109),
(1934, 'Kagawa', 109),
(1935, 'Kagoshima', 109),
(1936, 'Kanagawa', 109),
(1937, 'Kanto', 109),
(1938, 'Kochi', 109),
(1939, 'Kumamoto', 109),
(1940, 'Kyoto', 109),
(1941, 'Mie', 109),
(1942, 'Miyagi', 109),
(1943, 'Miyazaki', 109),
(1944, 'Nagano', 109),
(1945, 'Nagasaki', 109),
(1946, 'Nara', 109),
(1947, 'Niigata', 109),
(1948, 'Oita', 109),
(1949, 'Okayama', 109),
(1950, 'Okinawa', 109),
(1951, 'Osaka', 109),
(1952, 'Saga', 109),
(1953, 'Saitama', 109),
(1954, 'Shiga', 109),
(1955, 'Shimane', 109),
(1956, 'Shizuoka', 109),
(1957, 'Tochigi', 109),
(1958, 'Tokushima', 109),
(1959, 'Tokyo', 109),
(1960, 'Tottori', 109),
(1961, 'Toyama', 109),
(1962, 'Wakayama', 109),
(1963, 'Yamagata', 109),
(1964, 'Yamaguchi', 109),
(1965, 'Yamanashi', 109),
(1966, 'Grouville', 110),
(1967, 'Saint Brelade', 110),
(1968, 'Saint Clement', 110),
(1969, 'Saint Helier', 110),
(1970, 'Saint John', 110),
(1971, 'Saint Lawrence', 110),
(1972, 'Saint Martin', 110),
(1973, 'Saint Mary', 110),
(1974, 'Saint Peter', 110),
(1975, 'Saint Saviour', 110),
(1976, 'Trinity', 110),
(1977, '\'Ajlun', 111),
(1978, 'Amman', 111),
(1979, 'Irbid', 111),
(1980, 'Jarash', 111),
(1981, 'Ma\'an', 111),
(1982, 'Madaba', 111),
(1983, 'al-\'Aqabah', 111),
(1984, 'al-Balqa\'', 111),
(1985, 'al-Karak', 111),
(1986, 'al-Mafraq', 111),
(1987, 'at-Tafilah', 111),
(1988, 'az-Zarqa\'', 111),
(1989, 'Akmecet', 112),
(1990, 'Akmola', 112),
(1991, 'Aktobe', 112),
(1992, 'Almati', 112),
(1993, 'Atirau', 112),
(1994, 'Batis Kazakstan', 112),
(1995, 'Burlinsky Region', 112),
(1996, 'Karagandi', 112),
(1997, 'Kostanay', 112),
(1998, 'Mankistau', 112),
(1999, 'Ontustik Kazakstan', 112),
(2000, 'Pavlodar', 112),
(2001, 'Sigis Kazakstan', 112),
(2002, 'Soltustik Kazakstan', 112),
(2003, 'Taraz', 112),
(2004, 'Central', 113),
(2005, 'Coast', 113),
(2006, 'Eastern', 113),
(2007, 'Nairobi', 113),
(2008, 'North Eastern', 113),
(2009, 'Nyanza', 113),
(2010, 'Rift Valley', 113),
(2011, 'Western', 113),
(2012, 'Abaiang', 114),
(2013, 'Abemana', 114),
(2014, 'Aranuka', 114),
(2015, 'Arorae', 114),
(2016, 'Banaba', 114),
(2017, 'Beru', 114),
(2018, 'Butaritari', 114),
(2019, 'Kiritimati', 114),
(2020, 'Kuria', 114),
(2021, 'Maiana', 114),
(2022, 'Makin', 114),
(2023, 'Marakei', 114),
(2024, 'Nikunau', 114),
(2025, 'Nonouti', 114),
(2026, 'Onotoa', 114),
(2027, 'Phoenix Islands', 114),
(2028, 'Tabiteuea North', 114),
(2029, 'Tabiteuea South', 114),
(2030, 'Tabuaeran', 114),
(2031, 'Tamana', 114),
(2032, 'Tarawa North', 114),
(2033, 'Tarawa South', 114),
(2034, 'Teraina', 114),
(2035, 'Chagangdo', 115),
(2036, 'Hamgyeongbukto', 115),
(2037, 'Hamgyeongnamdo', 115),
(2038, 'Hwanghaebukto', 115),
(2039, 'Hwanghaenamdo', 115),
(2040, 'Kaeseong', 115),
(2041, 'Kangweon', 115),
(2042, 'Nampo', 115),
(2043, 'Pyeonganbukto', 115),
(2044, 'Pyeongannamdo', 115),
(2045, 'Pyeongyang', 115),
(2046, 'Yanggang', 115),
(2047, 'Busan', 116),
(2048, 'Cheju', 116),
(2049, 'Chollabuk', 116),
(2050, 'Chollanam', 116),
(2051, 'Chungbuk', 116),
(2052, 'Chungcheongbuk', 116),
(2053, 'Chungcheongnam', 116),
(2054, 'Chungnam', 116),
(2055, 'Daegu', 116),
(2056, 'Gangwon-do', 116),
(2057, 'Goyang-si', 116),
(2058, 'Gyeonggi-do', 116),
(2059, 'Gyeongsang ', 116),
(2060, 'Gyeongsangnam-do', 116),
(2061, 'Incheon', 116),
(2062, 'Jeju-Si', 116),
(2063, 'Jeonbuk', 116),
(2064, 'Kangweon', 116),
(2065, 'Kwangju', 116),
(2066, 'Kyeonggi', 116),
(2067, 'Kyeongsangbuk', 116),
(2068, 'Kyeongsangnam', 116),
(2069, 'Kyonggi-do', 116),
(2070, 'Kyungbuk-Do', 116),
(2071, 'Kyunggi-Do', 116),
(2072, 'Kyunggi-do', 116),
(2073, 'Pusan', 116),
(2074, 'Seoul', 116),
(2075, 'Sudogwon', 116),
(2076, 'Taegu', 116),
(2077, 'Taejeon', 116),
(2078, 'Taejon-gwangyoksi', 116),
(2079, 'Ulsan', 116),
(2080, 'Wonju', 116),
(2081, 'gwangyoksi', 116),
(2082, 'Al Asimah', 117),
(2083, 'Hawalli', 117),
(2084, 'Mishref', 117),
(2085, 'Qadesiya', 117),
(2086, 'Safat', 117),
(2087, 'Salmiya', 117),
(2088, 'al-Ahmadi', 117),
(2089, 'al-Farwaniyah', 117),
(2090, 'al-Jahra', 117),
(2091, 'al-Kuwayt', 117),
(2092, 'Batken', 118),
(2093, 'Bishkek', 118),
(2094, 'Chui', 118),
(2095, 'Issyk-Kul', 118),
(2096, 'Jalal-Abad', 118),
(2097, 'Naryn', 118),
(2098, 'Osh', 118),
(2099, 'Talas', 118),
(2100, 'Attopu', 119),
(2101, 'Bokeo', 119),
(2102, 'Bolikhamsay', 119),
(2103, 'Champasak', 119),
(2104, 'Houaphanh', 119),
(2105, 'Khammouane', 119),
(2106, 'Luang Nam Tha', 119),
(2107, 'Luang Prabang', 119),
(2108, 'Oudomxay', 119),
(2109, 'Phongsaly', 119),
(2110, 'Saravan', 119),
(2111, 'Savannakhet', 119),
(2112, 'Sekong', 119),
(2113, 'Viangchan Prefecture', 119),
(2114, 'Viangchan Province', 119),
(2115, 'Xaignabury', 119),
(2116, 'Xiang Khuang', 119),
(2117, 'Aizkraukles', 120),
(2118, 'Aluksnes', 120),
(2119, 'Balvu', 120),
(2120, 'Bauskas', 120),
(2121, 'Cesu', 120),
(2122, 'Daugavpils', 120),
(2123, 'Daugavpils City', 120),
(2124, 'Dobeles', 120),
(2125, 'Gulbenes', 120),
(2126, 'Jekabspils', 120),
(2127, 'Jelgava', 120),
(2128, 'Jelgavas', 120),
(2129, 'Jurmala City', 120),
(2130, 'Kraslavas', 120),
(2131, 'Kuldigas', 120),
(2132, 'Liepaja', 120),
(2133, 'Liepajas', 120),
(2134, 'Limbazhu', 120),
(2135, 'Ludzas', 120),
(2136, 'Madonas', 120),
(2137, 'Ogres', 120),
(2138, 'Preilu', 120),
(2139, 'Rezekne', 120),
(2140, 'Rezeknes', 120),
(2141, 'Riga', 120),
(2142, 'Rigas', 120),
(2143, 'Saldus', 120),
(2144, 'Talsu', 120),
(2145, 'Tukuma', 120),
(2146, 'Valkas', 120),
(2147, 'Valmieras', 120),
(2148, 'Ventspils', 120),
(2149, 'Ventspils City', 120),
(2150, 'Beirut', 121),
(2151, 'Jabal Lubnan', 121),
(2152, 'Mohafazat Liban-Nord', 121),
(2153, 'Mohafazat Mont-Liban', 121),
(2154, 'Sidon', 121),
(2155, 'al-Biqa', 121),
(2156, 'al-Janub', 121),
(2157, 'an-Nabatiyah', 121),
(2158, 'ash-Shamal', 121),
(2159, 'Berea', 122),
(2160, 'Butha-Buthe', 122),
(2161, 'Leribe', 122),
(2162, 'Mafeteng', 122),
(2163, 'Maseru', 122),
(2164, 'Mohale\'s Hoek', 122),
(2165, 'Mokhotlong', 122),
(2166, 'Qacha\'s Nek', 122),
(2167, 'Quthing', 122),
(2168, 'Thaba-Tseka', 122),
(2169, 'Bomi', 123),
(2170, 'Bong', 123),
(2171, 'Grand Bassa', 123),
(2172, 'Grand Cape Mount', 123),
(2173, 'Grand Gedeh', 123),
(2174, 'Loffa', 123),
(2175, 'Margibi', 123),
(2176, 'Maryland and Grand Kru', 123),
(2177, 'Montserrado', 123),
(2178, 'Nimba', 123),
(2179, 'Rivercess', 123),
(2180, 'Sinoe', 123),
(2181, 'Ajdabiya', 124),
(2182, 'Fezzan', 124),
(2183, 'Banghazi', 124),
(2184, 'Darnah', 124),
(2185, 'Ghadamis', 124),
(2186, 'Gharyan', 124),
(2187, 'Misratah', 124),
(2188, 'Murzuq', 124),
(2189, 'Sabha', 124),
(2190, 'Sawfajjin', 124),
(2191, 'Surt', 124),
(2192, 'Tarabulus', 124),
(2193, 'Tarhunah', 124),
(2194, 'Tripolitania', 124),
(2195, 'Tubruq', 124),
(2196, 'Yafran', 124),
(2197, 'Zlitan', 124),
(2198, 'al-\'Aziziyah', 124),
(2199, 'al-Fatih', 124),
(2200, 'al-Jabal al Akhdar', 124),
(2201, 'al-Jufrah', 124),
(2202, 'al-Khums', 124),
(2203, 'al-Kufrah', 124),
(2204, 'an-Nuqat al-Khams', 124),
(2205, 'ash-Shati\'', 124),
(2206, 'az-Zawiyah', 124),
(2207, 'Balzers', 125),
(2208, 'Eschen', 125),
(2209, 'Gamprin', 125),
(2210, 'Mauren', 125),
(2211, 'Planken', 125),
(2212, 'Ruggell', 125),
(2213, 'Schaan', 125),
(2214, 'Schellenberg', 125),
(2215, 'Triesen', 125),
(2216, 'Triesenberg', 125),
(2217, 'Vaduz', 125),
(2218, 'Alytaus', 126),
(2219, 'Anyksciai', 126),
(2220, 'Kauno', 126),
(2221, 'Klaipedos', 126),
(2222, 'Marijampoles', 126),
(2223, 'Panevezhio', 126),
(2224, 'Panevezys', 126),
(2225, 'Shiauliu', 126),
(2226, 'Taurages', 126),
(2227, 'Telshiu', 126),
(2228, 'Telsiai', 126),
(2229, 'Utenos', 126),
(2230, 'Vilniaus', 126),
(2231, 'Capellen', 127),
(2232, 'Clervaux', 127),
(2233, 'Diekirch', 127),
(2234, 'Echternach', 127),
(2235, 'Esch-sur-Alzette', 127),
(2236, 'Grevenmacher', 127),
(2237, 'Luxembourg', 127),
(2238, 'Mersch', 127),
(2239, 'Redange', 127),
(2240, 'Remich', 127),
(2241, 'Vianden', 127),
(2242, 'Wiltz', 127),
(2243, 'Macau', 128),
(2244, 'Berovo', 129),
(2245, 'Bitola', 129),
(2246, 'Brod', 129),
(2247, 'Debar', 129),
(2248, 'Delchevo', 129),
(2249, 'Demir Hisar', 129),
(2250, 'Gevgelija', 129),
(2251, 'Gostivar', 129),
(2252, 'Kavadarci', 129),
(2253, 'Kichevo', 129),
(2254, 'Kochani', 129),
(2255, 'Kratovo', 129),
(2256, 'Kriva Palanka', 129),
(2257, 'Krushevo', 129),
(2258, 'Kumanovo', 129),
(2259, 'Negotino', 129),
(2260, 'Ohrid', 129),
(2261, 'Prilep', 129),
(2262, 'Probishtip', 129),
(2263, 'Radovish', 129),
(2264, 'Resen', 129),
(2265, 'Shtip', 129),
(2266, 'Skopje', 129),
(2267, 'Struga', 129),
(2268, 'Strumica', 129),
(2269, 'Sveti Nikole', 129),
(2270, 'Tetovo', 129),
(2271, 'Valandovo', 129),
(2272, 'Veles', 129),
(2273, 'Vinica', 129),
(2274, 'Antananarivo', 130),
(2275, 'Antsiranana', 130),
(2276, 'Fianarantsoa', 130),
(2277, 'Mahajanga', 130),
(2278, 'Toamasina', 130),
(2279, 'Toliary', 130),
(2280, 'Balaka', 131),
(2281, 'Blantyre City', 131),
(2282, 'Chikwawa', 131),
(2283, 'Chiradzulu', 131),
(2284, 'Chitipa', 131),
(2285, 'Dedza', 131),
(2286, 'Dowa', 131),
(2287, 'Karonga', 131),
(2288, 'Kasungu', 131),
(2289, 'Lilongwe City', 131),
(2290, 'Machinga', 131),
(2291, 'Mangochi', 131),
(2292, 'Mchinji', 131),
(2293, 'Mulanje', 131),
(2294, 'Mwanza', 131),
(2295, 'Mzimba', 131),
(2296, 'Mzuzu City', 131),
(2297, 'Nkhata Bay', 131),
(2298, 'Nkhotakota', 131),
(2299, 'Nsanje', 131),
(2300, 'Ntcheu', 131),
(2301, 'Ntchisi', 131),
(2302, 'Phalombe', 131),
(2303, 'Rumphi', 131),
(2304, 'Salima', 131),
(2305, 'Thyolo', 131),
(2306, 'Zomba Municipality', 131),
(2307, 'Johor', 132),
(2308, 'Kedah', 132),
(2309, 'Kelantan', 132),
(2310, 'Kuala Lumpur', 132),
(2311, 'Labuan', 132),
(2312, 'Melaka', 132),
(2313, 'Negeri Johor', 132),
(2314, 'Negeri Sembilan', 132),
(2315, 'Pahang', 132),
(2316, 'Penang', 132),
(2317, 'Perak', 132),
(2318, 'Perlis', 132),
(2319, 'Pulau Pinang', 132),
(2320, 'Sabah', 132),
(2321, 'Sarawak', 132),
(2322, 'Selangor', 132),
(2323, 'Sembilan', 132),
(2324, 'Terengganu', 132),
(2325, 'Alif Alif', 133),
(2326, 'Alif Dhaal', 133),
(2327, 'Baa', 133),
(2328, 'Dhaal', 133),
(2329, 'Faaf', 133),
(2330, 'Gaaf Alif', 133),
(2331, 'Gaaf Dhaal', 133),
(2332, 'Ghaviyani', 133),
(2333, 'Haa Alif', 133),
(2334, 'Haa Dhaal', 133),
(2335, 'Kaaf', 133),
(2336, 'Laam', 133),
(2337, 'Lhaviyani', 133),
(2338, 'Male', 133),
(2339, 'Miim', 133),
(2340, 'Nuun', 133),
(2341, 'Raa', 133),
(2342, 'Shaviyani', 133),
(2343, 'Siin', 133),
(2344, 'Thaa', 133),
(2345, 'Vaav', 133),
(2346, 'Bamako', 134),
(2347, 'Gao', 134),
(2348, 'Kayes', 134),
(2349, 'Kidal', 134),
(2350, 'Koulikoro', 134),
(2351, 'Mopti', 134),
(2352, 'Segou', 134),
(2353, 'Sikasso', 134),
(2354, 'Tombouctou', 134),
(2355, 'Gozo and Comino', 135),
(2356, 'Inner Harbour', 135),
(2357, 'Northern', 135),
(2358, 'Outer Harbour', 135),
(2359, 'South Eastern', 135),
(2360, 'Valletta', 135),
(2361, 'Western', 135),
(2362, 'Castletown', 136),
(2363, 'Douglas', 136),
(2364, 'Laxey', 136),
(2365, 'Onchan', 136),
(2366, 'Peel', 136),
(2367, 'Port Erin', 136),
(2368, 'Port Saint Mary', 136),
(2369, 'Ramsey', 136),
(2370, 'Ailinlaplap', 137),
(2371, 'Ailuk', 137),
(2372, 'Arno', 137),
(2373, 'Aur', 137),
(2374, 'Bikini', 137),
(2375, 'Ebon', 137),
(2376, 'Enewetak', 137),
(2377, 'Jabat', 137),
(2378, 'Jaluit', 137),
(2379, 'Kili', 137),
(2380, 'Kwajalein', 137),
(2381, 'Lae', 137),
(2382, 'Lib', 137),
(2383, 'Likiep', 137),
(2384, 'Majuro', 137),
(2385, 'Maloelap', 137),
(2386, 'Mejit', 137),
(2387, 'Mili', 137),
(2388, 'Namorik', 137),
(2389, 'Namu', 137),
(2390, 'Rongelap', 137),
(2391, 'Ujae', 137),
(2392, 'Utrik', 137),
(2393, 'Wotho', 137),
(2394, 'Wotje', 137),
(2395, 'Fort-de-France', 138),
(2396, 'La Trinite', 138),
(2397, 'Le Marin', 138),
(2398, 'Saint-Pierre', 138),
(2399, 'Adrar', 139),
(2400, 'Assaba', 139),
(2401, 'Brakna', 139),
(2402, 'Dhakhlat Nawadibu', 139),
(2403, 'Hudh-al-Gharbi', 139),
(2404, 'Hudh-ash-Sharqi', 139),
(2405, 'Inshiri', 139),
(2406, 'Nawakshut', 139),
(2407, 'Qidimagha', 139),
(2408, 'Qurqul', 139),
(2409, 'Taqant', 139),
(2410, 'Tiris Zammur', 139),
(2411, 'Trarza', 139),
(2412, 'Black River', 140),
(2413, 'Eau Coulee', 140),
(2414, 'Flacq', 140),
(2415, 'Floreal', 140),
(2416, 'Grand Port', 140),
(2417, 'Moka', 140),
(2418, 'Pamplempousses', 140),
(2419, 'Plaines Wilhelm', 140),
(2420, 'Port Louis', 140),
(2421, 'Riviere du Rempart', 140),
(2422, 'Rodrigues', 140),
(2423, 'Rose Hill', 140),
(2424, 'Savanne', 140),
(2425, 'Mayotte', 141),
(2426, 'Pamanzi', 141),
(2427, 'Aguascalientes', 142),
(2428, 'Baja California', 142),
(2429, 'Baja California Sur', 142),
(2430, 'Campeche', 142),
(2431, 'Chiapas', 142),
(2432, 'Chihuahua', 142),
(2433, 'Coahuila', 142),
(2434, 'Colima', 142),
(2435, 'Distrito Federal', 142),
(2436, 'Durango', 142),
(2437, 'Estado de Mexico', 142),
(2438, 'Guanajuato', 142),
(2439, 'Guerrero', 142),
(2440, 'Hidalgo', 142),
(2441, 'Jalisco', 142),
(2442, 'Mexico', 142),
(2443, 'Michoacan', 142),
(2444, 'Morelos', 142),
(2445, 'Nayarit', 142),
(2446, 'Nuevo Leon', 142),
(2447, 'Oaxaca', 142),
(2448, 'Puebla', 142),
(2449, 'Queretaro', 142),
(2450, 'Quintana Roo', 142),
(2451, 'San Luis Potosi', 142),
(2452, 'Sinaloa', 142),
(2453, 'Sonora', 142),
(2454, 'Tabasco', 142),
(2455, 'Tamaulipas', 142),
(2456, 'Tlaxcala', 142),
(2457, 'Veracruz', 142),
(2458, 'Yucatan', 142),
(2459, 'Zacatecas', 142),
(2460, 'Chuuk', 143),
(2461, 'Kusaie', 143),
(2462, 'Pohnpei', 143),
(2463, 'Yap', 143),
(2464, 'Balti', 144),
(2465, 'Cahul', 144),
(2466, 'Chisinau', 144),
(2467, 'Chisinau Oras', 144),
(2468, 'Edinet', 144),
(2469, 'Gagauzia', 144),
(2470, 'Lapusna', 144),
(2471, 'Orhei', 144),
(2472, 'Soroca', 144),
(2473, 'Taraclia', 144),
(2474, 'Tighina', 144),
(2475, 'Transnistria', 144),
(2476, 'Ungheni', 144),
(2477, 'Fontvieille', 145),
(2478, 'La Condamine', 145),
(2479, 'Monaco-Ville', 145),
(2480, 'Monte Carlo', 145),
(2481, 'Arhangaj', 146),
(2482, 'Bajan-Olgij', 146),
(2483, 'Bajanhongor', 146),
(2484, 'Bulgan', 146),
(2485, 'Darhan-Uul', 146),
(2486, 'Dornod', 146),
(2487, 'Dornogovi', 146),
(2488, 'Dundgovi', 146),
(2489, 'Govi-Altaj', 146),
(2490, 'Govisumber', 146),
(2491, 'Hentij', 146),
(2492, 'Hovd', 146),
(2493, 'Hovsgol', 146),
(2494, 'Omnogovi', 146),
(2495, 'Orhon', 146),
(2496, 'Ovorhangaj', 146),
(2497, 'Selenge', 146),
(2498, 'Suhbaatar', 146),
(2499, 'Tov', 146),
(2500, 'Ulaanbaatar', 146),
(2501, 'Uvs', 146),
(2502, 'Zavhan', 146),
(2503, 'Montserrat', 147),
(2504, 'Agadir', 148),
(2505, 'Casablanca', 148),
(2506, 'Chaouia-Ouardigha', 148),
(2507, 'Doukkala-Abda', 148),
(2508, 'Fes-Boulemane', 148),
(2509, 'Gharb-Chrarda-Beni Hssen', 148),
(2510, 'Guelmim', 148),
(2511, 'Kenitra', 148),
(2512, 'Marrakech-Tensift-Al Haouz', 148),
(2513, 'Meknes-Tafilalet', 148),
(2514, 'Oriental', 148),
(2515, 'Oujda', 148),
(2516, 'Province de Tanger', 148),
(2517, 'Rabat-Sale-Zammour-Zaer', 148),
(2518, 'Sala Al Jadida', 148),
(2519, 'Settat', 148),
(2520, 'Souss Massa-Draa', 148),
(2521, 'Tadla-Azilal', 148),
(2522, 'Tangier-Tetouan', 148),
(2523, 'Taza-Al Hoceima-Taounate', 148),
(2524, 'Wilaya de Casablanca', 148),
(2525, 'Wilaya de Rabat-Sale', 148),
(2526, 'Cabo Delgado', 149),
(2527, 'Gaza', 149),
(2528, 'Inhambane', 149),
(2529, 'Manica', 149),
(2530, 'Maputo', 149),
(2531, 'Maputo Provincia', 149),
(2532, 'Nampula', 149),
(2533, 'Niassa', 149),
(2534, 'Sofala', 149),
(2535, 'Tete', 149),
(2536, 'Zambezia', 149),
(2537, 'Ayeyarwady', 150),
(2538, 'Bago', 150),
(2539, 'Chin', 150),
(2540, 'Kachin', 150),
(2541, 'Kayah', 150),
(2542, 'Kayin', 150),
(2543, 'Magway', 150),
(2544, 'Mandalay', 150),
(2545, 'Mon', 150),
(2546, 'Nay Pyi Taw', 150),
(2547, 'Rakhine', 150),
(2548, 'Sagaing', 150),
(2549, 'Shan', 150),
(2550, 'Tanintharyi', 150),
(2551, 'Yangon', 150),
(2552, 'Caprivi', 151),
(2553, 'Erongo', 151),
(2554, 'Hardap', 151),
(2555, 'Karas', 151),
(2556, 'Kavango', 151),
(2557, 'Khomas', 151),
(2558, 'Kunene', 151),
(2559, 'Ohangwena', 151),
(2560, 'Omaheke', 151),
(2561, 'Omusati', 151),
(2562, 'Oshana', 151),
(2563, 'Oshikoto', 151),
(2564, 'Otjozondjupa', 151),
(2565, 'Yaren', 152),
(2566, 'Bagmati', 153),
(2567, 'Bheri', 153),
(2568, 'Dhawalagiri', 153),
(2569, 'Gandaki', 153),
(2570, 'Janakpur', 153),
(2571, 'Karnali', 153),
(2572, 'Koshi', 153),
(2573, 'Lumbini', 153),
(2574, 'Mahakali', 153),
(2575, 'Mechi', 153),
(2576, 'Narayani', 153),
(2577, 'Rapti', 153),
(2578, 'Sagarmatha', 153),
(2579, 'Seti', 153),
(2580, 'Bonaire', 154),
(2581, 'Curacao', 154),
(2582, 'Saba', 154),
(2583, 'Sint Eustatius', 154),
(2584, 'Sint Maarten', 154),
(2585, 'Amsterdam', 155),
(2586, 'Benelux', 155),
(2587, 'Drenthe', 155),
(2588, 'Flevoland', 155),
(2589, 'Friesland', 155),
(2590, 'Gelderland', 155),
(2591, 'Groningen', 155),
(2592, 'Limburg', 155),
(2593, 'Noord-Brabant', 155),
(2594, 'Noord-Holland', 155),
(2595, 'Overijssel', 155),
(2596, 'South Holland', 155),
(2597, 'Utrecht', 155),
(2598, 'Zeeland', 155),
(2599, 'Zuid-Holland', 155),
(2600, 'Iles', 156),
(2601, 'Nord', 156),
(2602, 'Sud', 156),
(2603, 'Area Outside Region', 157),
(2604, 'Auckland', 157),
(2605, 'Bay of Plenty', 157),
(2606, 'Canterbury', 157),
(2607, 'Christchurch', 157),
(2608, 'Gisborne', 157),
(2609, 'Hawke\'s Bay', 157),
(2610, 'Manawatu-Wanganui', 157),
(2611, 'Marlborough', 157),
(2612, 'Nelson', 157),
(2613, 'Northland', 157),
(2614, 'Otago', 157),
(2615, 'Rodney', 157),
(2616, 'Southland', 157),
(2617, 'Taranaki', 157),
(2618, 'Tasman', 157),
(2619, 'Waikato', 157),
(2620, 'Wellington', 157),
(2621, 'West Coast', 157),
(2622, 'Atlantico Norte', 158),
(2623, 'Atlantico Sur', 158),
(2624, 'Boaco', 158),
(2625, 'Carazo', 158),
(2626, 'Chinandega', 158),
(2627, 'Chontales', 158),
(2628, 'Esteli', 158),
(2629, 'Granada', 158),
(2630, 'Jinotega', 158),
(2631, 'Leon', 158),
(2632, 'Madriz', 158),
(2633, 'Managua', 158),
(2634, 'Masaya', 158),
(2635, 'Matagalpa', 158),
(2636, 'Nueva Segovia', 158),
(2637, 'Rio San Juan', 158),
(2638, 'Rivas', 158),
(2639, 'Agadez', 159),
(2640, 'Diffa', 159),
(2641, 'Dosso', 159),
(2642, 'Maradi', 159),
(2643, 'Niamey', 159),
(2644, 'Tahoua', 159),
(2645, 'Tillabery', 159),
(2646, 'Zinder', 159),
(2647, 'Abia', 160),
(2648, 'Abuja Federal Capital Territor', 160),
(2649, 'Adamawa', 160),
(2650, 'Akwa Ibom', 160),
(2651, 'Anambra', 160),
(2652, 'Bauchi', 160),
(2653, 'Bayelsa', 160),
(2654, 'Benue', 160),
(2655, 'Borno', 160),
(2656, 'Cross River', 160),
(2657, 'Delta', 160),
(2658, 'Ebonyi', 160),
(2659, 'Edo', 160),
(2660, 'Ekiti', 160),
(2661, 'Enugu', 160),
(2662, 'Gombe', 160),
(2663, 'Imo', 160),
(2664, 'Jigawa', 160),
(2665, 'Kaduna', 160),
(2666, 'Kano', 160),
(2667, 'Katsina', 160),
(2668, 'Kebbi', 160),
(2669, 'Kogi', 160),
(2670, 'Kwara', 160),
(2671, 'Lagos', 160),
(2672, 'Nassarawa', 160),
(2673, 'Niger', 160),
(2674, 'Ogun', 160),
(2675, 'Ondo', 160),
(2676, 'Osun', 160),
(2677, 'Oyo', 160),
(2678, 'Plateau', 160),
(2679, 'Rivers', 160),
(2680, 'Sokoto', 160),
(2681, 'Taraba', 160),
(2682, 'Yobe', 160),
(2683, 'Zamfara', 160),
(2684, 'Niue', 161),
(2685, 'Norfolk Island', 162),
(2686, 'Northern Islands', 163),
(2687, 'Rota', 163),
(2688, 'Saipan', 163),
(2689, 'Tinian', 163),
(2690, 'Akershus', 164),
(2691, 'Aust Agder', 164),
(2692, 'Bergen', 164),
(2693, 'Buskerud', 164),
(2694, 'Finnmark', 164),
(2695, 'Hedmark', 164),
(2696, 'Hordaland', 164),
(2697, 'Moere og Romsdal', 164),
(2698, 'Nord Trondelag', 164),
(2699, 'Nordland', 164),
(2700, 'Oestfold', 164),
(2701, 'Oppland', 164),
(2702, 'Oslo', 164),
(2703, 'Rogaland', 164),
(2704, 'Soer Troendelag', 164),
(2705, 'Sogn og Fjordane', 164),
(2706, 'Stavern', 164),
(2707, 'Sykkylven', 164),
(2708, 'Telemark', 164),
(2709, 'Troms', 164),
(2710, 'Vest Agder', 164),
(2711, 'Vestfold', 164),
(2712, 'ÃƒÂ˜stfold', 164),
(2713, 'Al Buraimi', 165),
(2714, 'Dhufar', 165),
(2715, 'Masqat', 165),
(2716, 'Musandam', 165),
(2717, 'Rusayl', 165),
(2718, 'Wadi Kabir', 165),
(2719, 'ad-Dakhiliyah', 165),
(2720, 'adh-Dhahirah', 165),
(2721, 'al-Batinah', 165),
(2722, 'ash-Sharqiyah', 165),
(2723, 'Baluchistan', 166),
(2724, 'Federal Capital Area', 166),
(2725, 'Federally administered Tribal ', 166),
(2726, 'North-West Frontier', 166),
(2727, 'Northern Areas', 166),
(2728, 'Punjab', 166),
(2729, 'Sind', 166),
(2730, 'Aimeliik', 167),
(2731, 'Airai', 167),
(2732, 'Angaur', 167),
(2733, 'Hatobohei', 167),
(2734, 'Kayangel', 167),
(2735, 'Koror', 167),
(2736, 'Melekeok', 167),
(2737, 'Ngaraard', 167),
(2738, 'Ngardmau', 167),
(2739, 'Ngaremlengui', 167),
(2740, 'Ngatpang', 167),
(2741, 'Ngchesar', 167),
(2742, 'Ngerchelong', 167),
(2743, 'Ngiwal', 167),
(2744, 'Peleliu', 167),
(2745, 'Sonsorol', 167),
(2746, 'Ariha', 168),
(2747, 'Bayt Lahm', 168),
(2748, 'Bethlehem', 168),
(2749, 'Dayr-al-Balah', 168),
(2750, 'Ghazzah', 168),
(2751, 'Ghazzah ash-Shamaliyah', 168),
(2752, 'Janin', 168),
(2753, 'Khan Yunis', 168),
(2754, 'Nabulus', 168),
(2755, 'Qalqilyah', 168),
(2756, 'Rafah', 168),
(2757, 'Ram Allah wal-Birah', 168),
(2758, 'Salfit', 168),
(2759, 'Tubas', 168),
(2760, 'Tulkarm', 168),
(2761, 'al-Khalil', 168),
(2762, 'al-Quds', 168),
(2763, 'Bocas del Toro', 169),
(2764, 'Chiriqui', 169),
(2765, 'Cocle', 169),
(2766, 'Colon', 169),
(2767, 'Darien', 169),
(2768, 'Embera', 169),
(2769, 'Herrera', 169),
(2770, 'Kuna Yala', 169),
(2771, 'Los Santos', 169),
(2772, 'Ngobe Bugle', 169),
(2773, 'Panama', 169),
(2774, 'Veraguas', 169),
(2775, 'East New Britain', 170),
(2776, 'East Sepik', 170),
(2777, 'Eastern Highlands', 170),
(2778, 'Enga', 170),
(2779, 'Fly River', 170),
(2780, 'Gulf', 170),
(2781, 'Madang', 170),
(2782, 'Manus', 170),
(2783, 'Milne Bay', 170),
(2784, 'Morobe', 170),
(2785, 'National Capital District', 170),
(2786, 'New Ireland', 170),
(2787, 'North Solomons', 170),
(2788, 'Oro', 170),
(2789, 'Sandaun', 170),
(2790, 'Simbu', 170),
(2791, 'Southern Highlands', 170),
(2792, 'West New Britain', 170),
(2793, 'Western Highlands', 170),
(2794, 'Alto Paraguay', 171),
(2795, 'Alto Parana', 171),
(2796, 'Amambay', 171),
(2797, 'Asuncion', 171),
(2798, 'Boqueron', 171),
(2799, 'Caaguazu', 171),
(2800, 'Caazapa', 171),
(2801, 'Canendiyu', 171),
(2802, 'Central', 171),
(2803, 'Concepcion', 171),
(2804, 'Cordillera', 171),
(2805, 'Guaira', 171),
(2806, 'Itapua', 171),
(2807, 'Misiones', 171),
(2808, 'Neembucu', 171),
(2809, 'Paraguari', 171),
(2810, 'Presidente Hayes', 171),
(2811, 'San Pedro', 171),
(2812, 'Amazonas', 172),
(2813, 'Ancash', 172),
(2814, 'Apurimac', 172),
(2815, 'Arequipa', 172),
(2816, 'Ayacucho', 172),
(2817, 'Cajamarca', 172),
(2818, 'Cusco', 172),
(2819, 'Huancavelica', 172),
(2820, 'Huanuco', 172),
(2821, 'Ica', 172),
(2822, 'Junin', 172),
(2823, 'La Libertad', 172),
(2824, 'Lambayeque', 172),
(2825, 'Lima y Callao', 172),
(2826, 'Loreto', 172),
(2827, 'Madre de Dios', 172),
(2828, 'Moquegua', 172),
(2829, 'Pasco', 172),
(2830, 'Piura', 172),
(2831, 'Puno', 172),
(2832, 'San Martin', 172),
(2833, 'Tacna', 172),
(2834, 'Tumbes', 172),
(2835, 'Ucayali', 172),
(2836, 'Batangas', 173),
(2837, 'Bicol', 173),
(2838, 'Bulacan', 173),
(2839, 'Cagayan', 173),
(2840, 'Caraga', 173),
(2841, 'Central Luzon', 173),
(2842, 'Central Mindanao', 173),
(2843, 'Central Visayas', 173),
(2844, 'Cordillera', 173),
(2845, 'Davao', 173),
(2846, 'Eastern Visayas', 173),
(2847, 'Greater Metropolitan Area', 173),
(2848, 'Ilocos', 173),
(2849, 'Laguna', 173),
(2850, 'Luzon', 173),
(2851, 'Mactan', 173),
(2852, 'Metropolitan Manila Area', 173),
(2853, 'Muslim Mindanao', 173),
(2854, 'Northern Mindanao', 173),
(2855, 'Southern Mindanao', 173),
(2856, 'Southern Tagalog', 173),
(2857, 'Western Mindanao', 173),
(2858, 'Western Visayas', 173),
(2859, 'Pitcairn Island', 174),
(2860, 'Biale Blota', 175),
(2861, 'Dobroszyce', 175),
(2862, 'Dolnoslaskie', 175),
(2863, 'Dziekanow Lesny', 175),
(2864, 'Hopowo', 175),
(2865, 'Kartuzy', 175),
(2866, 'Koscian', 175),
(2867, 'Krakow', 175),
(2868, 'Kujawsko-Pomorskie', 175),
(2869, 'Lodzkie', 175),
(2870, 'Lubelskie', 175),
(2871, 'Lubuskie', 175),
(2872, 'Malomice', 175),
(2873, 'Malopolskie', 175),
(2874, 'Mazowieckie', 175),
(2875, 'Mirkow', 175),
(2876, 'Opolskie', 175),
(2877, 'Ostrowiec', 175),
(2878, 'Podkarpackie', 175),
(2879, 'Podlaskie', 175),
(2880, 'Polska', 175),
(2881, 'Pomorskie', 175),
(2882, 'Poznan', 175),
(2883, 'Pruszkow', 175),
(2884, 'Rymanowska', 175),
(2885, 'Rzeszow', 175),
(2886, 'Slaskie', 175),
(2887, 'Stare Pole', 175),
(2888, 'Swietokrzyskie', 175),
(2889, 'Warminsko-Mazurskie', 175),
(2890, 'Warsaw', 175),
(2891, 'Wejherowo', 175),
(2892, 'Wielkopolskie', 175),
(2893, 'Wroclaw', 175),
(2894, 'Zachodnio-Pomorskie', 175),
(2895, 'Zukowo', 175),
(2896, 'Abrantes', 176),
(2897, 'Acores', 176),
(2898, 'Alentejo', 176),
(2899, 'Algarve', 176),
(2900, 'Braga', 176),
(2901, 'Centro', 176),
(2902, 'Distrito de Leiria', 176),
(2903, 'Distrito de Viana do Castelo', 176),
(2904, 'Distrito de Vila Real', 176),
(2905, 'Distrito do Porto', 176),
(2906, 'Lisboa e Vale do Tejo', 176),
(2907, 'Madeira', 176),
(2908, 'Norte', 176),
(2909, 'Paivas', 176),
(2910, 'Arecibo', 177),
(2911, 'Bayamon', 177),
(2912, 'Carolina', 177),
(2913, 'Florida', 177),
(2914, 'Guayama', 177),
(2915, 'Humacao', 177),
(2916, 'Mayaguez-Aguadilla', 177),
(2917, 'Ponce', 177),
(2918, 'Salinas', 177),
(2919, 'San Juan', 177),
(2920, 'Doha', 178),
(2921, 'Jarian-al-Batnah', 178),
(2922, 'Umm Salal', 178),
(2923, 'ad-Dawhah', 178),
(2924, 'al-Ghuwayriyah', 178),
(2925, 'al-Jumayliyah', 178),
(2926, 'al-Khawr', 178),
(2927, 'al-Wakrah', 178),
(2928, 'ar-Rayyan', 178),
(2929, 'ash-Shamal', 178),
(2930, 'Saint-Benoit', 179),
(2931, 'Saint-Denis', 179),
(2932, 'Saint-Paul', 179),
(2933, 'Saint-Pierre', 179),
(2934, 'Alba', 180),
(2935, 'Arad', 180),
(2936, 'Arges', 180),
(2937, 'Bacau', 180),
(2938, 'Bihor', 180),
(2939, 'Bistrita-Nasaud', 180),
(2940, 'Botosani', 180),
(2941, 'Braila', 180),
(2942, 'Brasov', 180),
(2943, 'Bucuresti', 180),
(2944, 'Buzau', 180),
(2945, 'Calarasi', 180),
(2946, 'Caras-Severin', 180),
(2947, 'Cluj', 180),
(2948, 'Constanta', 180),
(2949, 'Covasna', 180),
(2950, 'Dambovita', 180),
(2951, 'Dolj', 180),
(2952, 'Galati', 180),
(2953, 'Giurgiu', 180),
(2954, 'Gorj', 180),
(2955, 'Harghita', 180),
(2956, 'Hunedoara', 180),
(2957, 'Ialomita', 180),
(2958, 'Iasi', 180),
(2959, 'Ilfov', 180),
(2960, 'Maramures', 180),
(2961, 'Mehedinti', 180),
(2962, 'Mures', 180),
(2963, 'Neamt', 180),
(2964, 'Olt', 180),
(2965, 'Prahova', 180),
(2966, 'Salaj', 180),
(2967, 'Satu Mare', 180),
(2968, 'Sibiu', 180),
(2969, 'Sondelor', 180),
(2970, 'Suceava', 180),
(2971, 'Teleorman', 180),
(2972, 'Timis', 180),
(2973, 'Tulcea', 180),
(2974, 'Valcea', 180),
(2975, 'Vaslui', 180),
(2976, 'Vrancea', 180),
(2977, 'Adygeja', 181),
(2978, 'Aga', 181),
(2979, 'Alanija', 181),
(2980, 'Altaj', 181),
(2981, 'Amur', 181),
(2982, 'Arhangelsk', 181),
(2983, 'Astrahan', 181),
(2984, 'Bashkortostan', 181),
(2985, 'Belgorod', 181),
(2986, 'Brjansk', 181),
(2987, 'Burjatija', 181),
(2988, 'Chechenija', 181),
(2989, 'Cheljabinsk', 181),
(2990, 'Chita', 181),
(2991, 'Chukotka', 181),
(2992, 'Chuvashija', 181),
(2993, 'Dagestan', 181),
(2994, 'Evenkija', 181),
(2995, 'Gorno-Altaj', 181),
(2996, 'Habarovsk', 181),
(2997, 'Hakasija', 181),
(2998, 'Hanty-Mansija', 181),
(2999, 'Ingusetija', 181),
(3000, 'Irkutsk', 181),
(3001, 'Ivanovo', 181),
(3002, 'Jamalo-Nenets', 181),
(3003, 'Jaroslavl', 181),
(3004, 'Jevrej', 181),
(3005, 'Kabardino-Balkarija', 181),
(3006, 'Kaliningrad', 181),
(3007, 'Kalmykija', 181),
(3008, 'Kaluga', 181),
(3009, 'Kamchatka', 181),
(3010, 'Karachaj-Cherkessija', 181),
(3011, 'Karelija', 181),
(3012, 'Kemerovo', 181),
(3013, 'Khabarovskiy Kray', 181),
(3014, 'Kirov', 181),
(3015, 'Komi', 181),
(3016, 'Komi-Permjakija', 181),
(3017, 'Korjakija', 181),
(3018, 'Kostroma', 181),
(3019, 'Krasnodar', 181),
(3020, 'Krasnojarsk', 181),
(3021, 'Krasnoyarskiy Kray', 181),
(3022, 'Kurgan', 181),
(3023, 'Kursk', 181),
(3024, 'Leningrad', 181),
(3025, 'Lipeck', 181),
(3026, 'Magadan', 181),
(3027, 'Marij El', 181),
(3028, 'Mordovija', 181),
(3029, 'Moscow', 181),
(3030, 'Moskovskaja Oblast', 181),
(3031, 'Moskovskaya Oblast', 181),
(3032, 'Moskva', 181),
(3033, 'Murmansk', 181),
(3034, 'Nenets', 181),
(3035, 'Nizhnij Novgorod', 181),
(3036, 'Novgorod', 181),
(3037, 'Novokusnezk', 181),
(3038, 'Novosibirsk', 181),
(3039, 'Omsk', 181),
(3040, 'Orenburg', 181),
(3041, 'Orjol', 181),
(3042, 'Penza', 181),
(3043, 'Perm', 181),
(3044, 'Primorje', 181),
(3045, 'Pskov', 181),
(3046, 'Pskovskaya Oblast', 181),
(3047, 'Rjazan', 181),
(3048, 'Rostov', 181),
(3049, 'Saha', 181),
(3050, 'Sahalin', 181),
(3051, 'Samara', 181),
(3052, 'Samarskaya', 181),
(3053, 'Sankt-Peterburg', 181),
(3054, 'Saratov', 181),
(3055, 'Smolensk', 181),
(3056, 'Stavropol', 181),
(3057, 'Sverdlovsk', 181),
(3058, 'Tajmyrija', 181),
(3059, 'Tambov', 181),
(3060, 'Tatarstan', 181),
(3061, 'Tjumen', 181),
(3062, 'Tomsk', 181),
(3063, 'Tula', 181),
(3064, 'Tver', 181),
(3065, 'Tyva', 181),
(3066, 'Udmurtija', 181),
(3067, 'Uljanovsk', 181),
(3068, 'Ulyanovskaya Oblast', 181),
(3069, 'Ust-Orda', 181),
(3070, 'Vladimir', 181),
(3071, 'Volgograd', 181),
(3072, 'Vologda', 181),
(3073, 'Voronezh', 181),
(3074, 'Butare', 182),
(3075, 'Byumba', 182),
(3076, 'Cyangugu', 182),
(3077, 'Gikongoro', 182),
(3078, 'Gisenyi', 182),
(3079, 'Gitarama', 182),
(3080, 'Kibungo', 182),
(3081, 'Kibuye', 182),
(3082, 'Kigali-ngali', 182),
(3083, 'Ruhengeri', 182),
(3084, 'Ascension', 183),
(3085, 'Gough Island', 183),
(3086, 'Saint Helena', 183),
(3087, 'Tristan da Cunha', 183),
(3088, 'Christ Church Nichola Town', 184),
(3089, 'Saint Anne Sandy Point', 184),
(3090, 'Saint George Basseterre', 184),
(3091, 'Saint George Gingerland', 184),
(3092, 'Saint James Windward', 184);
INSERT INTO `tbl_states` (`id_state`, `state_name`, `id_country`) VALUES
(3093, 'Saint John Capesterre', 184),
(3094, 'Saint John Figtree', 184),
(3095, 'Saint Mary Cayon', 184),
(3096, 'Saint Paul Capesterre', 184),
(3097, 'Saint Paul Charlestown', 184),
(3098, 'Saint Peter Basseterre', 184),
(3099, 'Saint Thomas Lowland', 184),
(3100, 'Saint Thomas Middle Island', 184),
(3101, 'Trinity Palmetto Point', 184),
(3102, 'Anse-la-Raye', 185),
(3103, 'Canaries', 185),
(3104, 'Castries', 185),
(3105, 'Choiseul', 185),
(3106, 'Dennery', 185),
(3107, 'Gros Inlet', 185),
(3108, 'Laborie', 185),
(3109, 'Micoud', 185),
(3110, 'Soufriere', 185),
(3111, 'Vieux Fort', 185),
(3112, 'Miquelon-Langlade', 186),
(3113, 'Saint-Pierre', 186),
(3114, 'Charlotte', 187),
(3115, 'Grenadines', 187),
(3116, 'Saint Andrew', 187),
(3117, 'Saint David', 187),
(3118, 'Saint George', 187),
(3119, 'Saint Patrick', 187),
(3120, 'A\'ana', 188),
(3121, 'Aiga-i-le-Tai', 188),
(3122, 'Atua', 188),
(3123, 'Fa\'asaleleaga', 188),
(3124, 'Gaga\'emauga', 188),
(3125, 'Gagaifomauga', 188),
(3126, 'Palauli', 188),
(3127, 'Satupa\'itea', 188),
(3128, 'Tuamasaga', 188),
(3129, 'Va\'a-o-Fonoti', 188),
(3130, 'Vaisigano', 188),
(3131, 'Acquaviva', 189),
(3132, 'Borgo Maggiore', 189),
(3133, 'Chiesanuova', 189),
(3134, 'Domagnano', 189),
(3135, 'Faetano', 189),
(3136, 'Fiorentino', 189),
(3137, 'Montegiardino', 189),
(3138, 'San Marino', 189),
(3139, 'Serravalle', 189),
(3140, 'Agua Grande', 190),
(3141, 'Cantagalo', 190),
(3142, 'Lemba', 190),
(3143, 'Lobata', 190),
(3144, 'Me-Zochi', 190),
(3145, 'Pague', 190),
(3146, 'Al Khobar', 191),
(3147, 'Aseer', 191),
(3148, 'Ash Sharqiyah', 191),
(3149, 'Asir', 191),
(3150, 'Central Province', 191),
(3151, 'Eastern Province', 191),
(3152, 'Ha\'il', 191),
(3153, 'Jawf', 191),
(3154, 'Jizan', 191),
(3155, 'Makkah', 191),
(3156, 'Najran', 191),
(3157, 'Qasim', 191),
(3158, 'Tabuk', 191),
(3159, 'Western Province', 191),
(3160, 'al-Bahah', 191),
(3161, 'al-Hudud-ash-Shamaliyah', 191),
(3162, 'al-Madinah', 191),
(3163, 'ar-Riyad', 191),
(3164, 'Dakar', 192),
(3165, 'Diourbel', 192),
(3166, 'Fatick', 192),
(3167, 'Kaolack', 192),
(3168, 'Kolda', 192),
(3169, 'Louga', 192),
(3170, 'Saint-Louis', 192),
(3171, 'Tambacounda', 192),
(3172, 'Thies', 192),
(3173, 'Ziguinchor', 192),
(3174, 'Central Serbia', 193),
(3175, 'Kosovo and Metohija', 193),
(3176, 'Vojvodina', 193),
(3177, 'Anse Boileau', 194),
(3178, 'Anse Royale', 194),
(3179, 'Cascade', 194),
(3180, 'Takamaka', 194),
(3181, 'Victoria', 194),
(3182, 'Eastern', 195),
(3183, 'Northern', 195),
(3184, 'Southern', 195),
(3185, 'Western', 195),
(3186, 'Singapore', 196),
(3187, 'Banskobystricky', 197),
(3188, 'Bratislavsky', 197),
(3189, 'Kosicky', 197),
(3190, 'Nitriansky', 197),
(3191, 'Presovsky', 197),
(3192, 'Trenciansky', 197),
(3193, 'Trnavsky', 197),
(3194, 'Zilinsky', 197),
(3195, 'Benedikt', 198),
(3196, 'Gorenjska', 198),
(3197, 'Gorishka', 198),
(3198, 'Jugovzhodna Slovenija', 198),
(3199, 'Koroshka', 198),
(3200, 'Notranjsko-krashka', 198),
(3201, 'Obalno-krashka', 198),
(3202, 'Obcina Domzale', 198),
(3203, 'Obcina Vitanje', 198),
(3204, 'Osrednjeslovenska', 198),
(3205, 'Podravska', 198),
(3206, 'Pomurska', 198),
(3207, 'Savinjska', 198),
(3208, 'Slovenian Littoral', 198),
(3209, 'Spodnjeposavska', 198),
(3210, 'Zasavska', 198),
(3211, 'Pitcairn', 199),
(3212, 'Central', 200),
(3213, 'Choiseul', 200),
(3214, 'Guadalcanal', 200),
(3215, 'Isabel', 200),
(3216, 'Makira and Ulawa', 200),
(3217, 'Malaita', 200),
(3218, 'Rennell and Bellona', 200),
(3219, 'Temotu', 200),
(3220, 'Western', 200),
(3221, 'Awdal', 201),
(3222, 'Bakol', 201),
(3223, 'Banadir', 201),
(3224, 'Bari', 201),
(3225, 'Bay', 201),
(3226, 'Galgudug', 201),
(3227, 'Gedo', 201),
(3228, 'Hiran', 201),
(3229, 'Jubbada Hose', 201),
(3230, 'Jubbadha Dexe', 201),
(3231, 'Mudug', 201),
(3232, 'Nugal', 201),
(3233, 'Sanag', 201),
(3234, 'Shabellaha Dhexe', 201),
(3235, 'Shabellaha Hose', 201),
(3236, 'Togdher', 201),
(3237, 'Woqoyi Galbed', 201),
(3238, 'Eastern Cape', 202),
(3239, 'Free State', 202),
(3240, 'Gauteng', 202),
(3241, 'Kempton Park', 202),
(3242, 'Kramerville', 202),
(3243, 'KwaZulu Natal', 202),
(3244, 'Limpopo', 202),
(3245, 'Mpumalanga', 202),
(3246, 'North West', 202),
(3247, 'Northern Cape', 202),
(3248, 'Parow', 202),
(3249, 'Table View', 202),
(3250, 'Umtentweni', 202),
(3251, 'Western Cape', 202),
(3252, 'South Georgia', 203),
(3253, 'Central Equatoria', 204),
(3254, 'A Coruna', 205),
(3255, 'Alacant', 205),
(3256, 'Alava', 205),
(3257, 'Albacete', 205),
(3258, 'Almeria', 205),
(3260, 'Asturias', 205),
(3261, 'Avila', 205),
(3262, 'Badajoz', 205),
(3263, 'Balears', 205),
(3264, 'Barcelona', 205),
(3267, 'Burgos', 205),
(3268, 'Caceres', 205),
(3269, 'Cadiz', 205),
(3270, 'Cantabria', 205),
(3271, 'Castello', 205),
(3273, 'Ceuta', 205),
(3274, 'Ciudad Real', 205),
(3281, 'Cordoba', 205),
(3282, 'Cuenca', 205),
(3284, 'Girona', 205),
(3285, 'Granada', 205),
(3286, 'Guadalajara', 205),
(3287, 'Guipuzcoa', 205),
(3288, 'Huelva', 205),
(3289, 'Huesca', 205),
(3290, 'Jaen', 205),
(3291, 'La Rioja', 205),
(3292, 'Las Palmas', 205),
(3293, 'Leon', 205),
(3295, 'Lleida', 205),
(3296, 'Lugo', 205),
(3297, 'Madrid', 205),
(3298, 'Malaga', 205),
(3299, 'Melilla', 205),
(3300, 'Murcia', 205),
(3301, 'Navarra', 205),
(3302, 'Ourense', 205),
(3303, 'Pais Vasco', 205),
(3304, 'Palencia', 205),
(3305, 'Pontevedra', 205),
(3306, 'Salamanca', 205),
(3308, 'Segovia', 205),
(3309, 'Sevilla', 205),
(3310, 'Soria', 205),
(3311, 'Tarragona', 205),
(3312, 'Santa Cruz de Tenerife', 205),
(3313, 'Teruel', 205),
(3314, 'Toledo', 205),
(3315, 'Valencia', 205),
(3316, 'Valladolid', 205),
(3317, 'Vizcaya', 205),
(3318, 'Zamora', 205),
(3319, 'Zaragoza', 205),
(3320, 'Amparai', 206),
(3321, 'Anuradhapuraya', 206),
(3322, 'Badulla', 206),
(3323, 'Boralesgamuwa', 206),
(3324, 'Colombo', 206),
(3325, 'Galla', 206),
(3326, 'Gampaha', 206),
(3327, 'Hambantota', 206),
(3328, 'Kalatura', 206),
(3329, 'Kegalla', 206),
(3330, 'Kilinochchi', 206),
(3331, 'Kurunegala', 206),
(3332, 'Madakalpuwa', 206),
(3333, 'Maha Nuwara', 206),
(3334, 'Malwana', 206),
(3335, 'Mannarama', 206),
(3336, 'Matale', 206),
(3337, 'Matara', 206),
(3338, 'Monaragala', 206),
(3339, 'Mullaitivu', 206),
(3340, 'North Eastern Province', 206),
(3341, 'North Western Province', 206),
(3342, 'Nuwara Eliya', 206),
(3343, 'Polonnaruwa', 206),
(3344, 'Puttalama', 206),
(3345, 'Ratnapuraya', 206),
(3346, 'Southern Province', 206),
(3347, 'Tirikunamalaya', 206),
(3348, 'Tuscany', 206),
(3349, 'Vavuniyawa', 206),
(3350, 'Western Province', 206),
(3351, 'Yapanaya', 206),
(3352, 'kadawatha', 206),
(3353, 'A\'ali-an-Nil', 207),
(3354, 'Bahr-al-Jabal', 207),
(3355, 'Central Equatoria', 207),
(3356, 'Gharb Bahr-al-Ghazal', 207),
(3357, 'Gharb Darfur', 207),
(3358, 'Gharb Kurdufan', 207),
(3359, 'Gharb-al-Istiwa\'iyah', 207),
(3360, 'Janub Darfur', 207),
(3361, 'Janub Kurdufan', 207),
(3362, 'Junqali', 207),
(3363, 'Kassala', 207),
(3364, 'Nahr-an-Nil', 207),
(3365, 'Shamal Bahr-al-Ghazal', 207),
(3366, 'Shamal Darfur', 207),
(3367, 'Shamal Kurdufan', 207),
(3368, 'Sharq-al-Istiwa\'iyah', 207),
(3369, 'Sinnar', 207),
(3370, 'Warab', 207),
(3371, 'Wilayat al Khartum', 207),
(3372, 'al-Bahr-al-Ahmar', 207),
(3373, 'al-Buhayrat', 207),
(3374, 'al-Jazirah', 207),
(3375, 'al-Khartum', 207),
(3376, 'al-Qadarif', 207),
(3377, 'al-Wahdah', 207),
(3378, 'an-Nil-al-Abyad', 207),
(3379, 'an-Nil-al-Azraq', 207),
(3380, 'ash-Shamaliyah', 207),
(3381, 'Brokopondo', 208),
(3382, 'Commewijne', 208),
(3383, 'Coronie', 208),
(3384, 'Marowijne', 208),
(3385, 'Nickerie', 208),
(3386, 'Para', 208),
(3387, 'Paramaribo', 208),
(3388, 'Saramacca', 208),
(3389, 'Wanica', 208),
(3390, 'Svalbard', 209),
(3391, 'Hhohho', 210),
(3392, 'Lubombo', 210),
(3393, 'Manzini', 210),
(3394, 'Shiselweni', 210),
(3395, 'Alvsborgs Lan', 211),
(3396, 'Angermanland', 211),
(3397, 'Blekinge', 211),
(3398, 'Bohuslan', 211),
(3399, 'Dalarna', 211),
(3400, 'Gavleborg', 211),
(3401, 'Gaza', 211),
(3402, 'Gotland', 211),
(3403, 'Halland', 211),
(3404, 'Jamtland', 211),
(3405, 'Jonkoping', 211),
(3406, 'Kalmar', 211),
(3407, 'Kristianstads', 211),
(3408, 'Kronoberg', 211),
(3409, 'Norrbotten', 211),
(3410, 'Orebro', 211),
(3411, 'Ostergotland', 211),
(3412, 'Saltsjo-Boo', 211),
(3413, 'Skane', 211),
(3414, 'Smaland', 211),
(3415, 'Sodermanland', 211),
(3416, 'Stockholm', 211),
(3417, 'Uppsala', 211),
(3418, 'Varmland', 211),
(3419, 'Vasterbotten', 211),
(3420, 'Vastergotland', 211),
(3421, 'Vasternorrland', 211),
(3422, 'Vastmanland', 211),
(3423, 'Vastra Gotaland', 211),
(3424, 'Aargau', 212),
(3425, 'Appenzell Inner-Rhoden', 212),
(3426, 'Appenzell-Ausser Rhoden', 212),
(3427, 'Basel-Landschaft', 212),
(3428, 'Basel-Stadt', 212),
(3429, 'Bern', 212),
(3430, 'Canton Ticino', 212),
(3431, 'Fribourg', 212),
(3432, 'Geneve', 212),
(3433, 'Glarus', 212),
(3434, 'Graubunden', 212),
(3435, 'Heerbrugg', 212),
(3436, 'Jura', 212),
(3437, 'Kanton Aargau', 212),
(3438, 'Luzern', 212),
(3439, 'Morbio Inferiore', 212),
(3440, 'Muhen', 212),
(3441, 'Neuchatel', 212),
(3442, 'Nidwalden', 212),
(3443, 'Obwalden', 212),
(3444, 'Sankt Gallen', 212),
(3445, 'Schaffhausen', 212),
(3446, 'Schwyz', 212),
(3447, 'Solothurn', 212),
(3448, 'Thurgau', 212),
(3449, 'Ticino', 212),
(3450, 'Uri', 212),
(3451, 'Valais', 212),
(3452, 'Vaud', 212),
(3453, 'Vauffelin', 212),
(3454, 'Zug', 212),
(3455, 'Zurich', 212),
(3456, 'Aleppo', 213),
(3457, 'Dar\'a', 213),
(3458, 'Dayr-az-Zawr', 213),
(3459, 'Dimashq', 213),
(3460, 'Halab', 213),
(3461, 'Hamah', 213),
(3462, 'Hims', 213),
(3463, 'Idlib', 213),
(3464, 'Madinat Dimashq', 213),
(3465, 'Tartus', 213),
(3466, 'al-Hasakah', 213),
(3467, 'al-Ladhiqiyah', 213),
(3468, 'al-Qunaytirah', 213),
(3469, 'ar-Raqqah', 213),
(3470, 'as-Suwayda', 213),
(3471, 'Changhua County', 214),
(3472, 'Chiayi County', 214),
(3473, 'Chiayi City', 214),
(3474, 'Taipei City', 214),
(3475, 'Hsinchu County', 214),
(3476, 'Hsinchu City', 214),
(3477, 'Hualien County', 214),
(3480, 'Kaohsiung City', 214),
(3481, 'Keelung City', 214),
(3482, 'Kinmen County', 214),
(3483, 'Miaoli County', 214),
(3484, 'Nantou County', 214),
(3486, 'Penghu County', 214),
(3487, 'Pingtung County', 214),
(3488, 'Taichung City', 214),
(3492, 'Tainan City', 214),
(3493, 'New Taipei City', 214),
(3495, 'Taitung County', 214),
(3496, 'Taoyuan City', 214),
(3497, 'Yilan County', 214),
(3498, 'YunLin County', 214),
(3500, 'Dushanbe', 215),
(3501, 'Gorno-Badakhshan', 215),
(3502, 'Karotegin', 215),
(3503, 'Khatlon', 215),
(3504, 'Sughd', 215),
(3505, 'Arusha', 216),
(3506, 'Dar es Salaam', 216),
(3507, 'Dodoma', 216),
(3508, 'Iringa', 216),
(3509, 'Kagera', 216),
(3510, 'Kigoma', 216),
(3511, 'Kilimanjaro', 216),
(3512, 'Lindi', 216),
(3513, 'Mara', 216),
(3514, 'Mbeya', 216),
(3515, 'Morogoro', 216),
(3516, 'Mtwara', 216),
(3517, 'Mwanza', 216),
(3518, 'Pwani', 216),
(3519, 'Rukwa', 216),
(3520, 'Ruvuma', 216),
(3521, 'Shinyanga', 216),
(3522, 'Singida', 216),
(3523, 'Tabora', 216),
(3524, 'Tanga', 216),
(3525, 'Zanzibar and Pemba', 216),
(3526, 'Amnat Charoen', 217),
(3527, 'Ang Thong', 217),
(3528, 'Bangkok', 217),
(3529, 'Buri Ram', 217),
(3530, 'Chachoengsao', 217),
(3531, 'Chai Nat', 217),
(3532, 'Chaiyaphum', 217),
(3533, 'Changwat Chaiyaphum', 217),
(3534, 'Chanthaburi', 217),
(3535, 'Chiang Mai', 217),
(3536, 'Chiang Rai', 217),
(3537, 'Chon Buri', 217),
(3538, 'Chumphon', 217),
(3539, 'Kalasin', 217),
(3540, 'Kamphaeng Phet', 217),
(3541, 'Kanchanaburi', 217),
(3542, 'Khon Kaen', 217),
(3543, 'Krabi', 217),
(3544, 'Krung Thep', 217),
(3545, 'Lampang', 217),
(3546, 'Lamphun', 217),
(3547, 'Loei', 217),
(3548, 'Lop Buri', 217),
(3549, 'Mae Hong Son', 217),
(3550, 'Maha Sarakham', 217),
(3551, 'Mukdahan', 217),
(3552, 'Nakhon Nayok', 217),
(3553, 'Nakhon Pathom', 217),
(3554, 'Nakhon Phanom', 217),
(3555, 'Nakhon Ratchasima', 217),
(3556, 'Nakhon Sawan', 217),
(3557, 'Nakhon Si Thammarat', 217),
(3558, 'Nan', 217),
(3559, 'Narathiwat', 217),
(3560, 'Nong Bua Lam Phu', 217),
(3561, 'Nong Khai', 217),
(3562, 'Nonthaburi', 217),
(3563, 'Pathum Thani', 217),
(3564, 'Pattani', 217),
(3565, 'Phangnga', 217),
(3566, 'Phatthalung', 217),
(3567, 'Phayao', 217),
(3568, 'Phetchabun', 217),
(3569, 'Phetchaburi', 217),
(3570, 'Phichit', 217),
(3571, 'Phitsanulok', 217),
(3572, 'Phra Nakhon Si Ayutthaya', 217),
(3573, 'Phrae', 217),
(3574, 'Phuket', 217),
(3575, 'Prachin Buri', 217),
(3576, 'Prachuap Khiri Khan', 217),
(3577, 'Ranong', 217),
(3578, 'Ratchaburi', 217),
(3579, 'Rayong', 217),
(3580, 'Roi Et', 217),
(3581, 'Sa Kaeo', 217),
(3582, 'Sakon Nakhon', 217),
(3583, 'Samut Prakan', 217),
(3584, 'Samut Sakhon', 217),
(3585, 'Samut Songkhran', 217),
(3586, 'Saraburi', 217),
(3587, 'Satun', 217),
(3588, 'Si Sa Ket', 217),
(3589, 'Sing Buri', 217),
(3590, 'Songkhla', 217),
(3591, 'Sukhothai', 217),
(3592, 'Suphan Buri', 217),
(3593, 'Surat Thani', 217),
(3594, 'Surin', 217),
(3595, 'Tak', 217),
(3596, 'Trang', 217),
(3597, 'Trat', 217),
(3598, 'Ubon Ratchathani', 217),
(3599, 'Udon Thani', 217),
(3600, 'Uthai Thani', 217),
(3601, 'Uttaradit', 217),
(3602, 'Yala', 217),
(3603, 'Yasothon', 217),
(3604, 'Centre', 218),
(3605, 'Kara', 218),
(3606, 'Maritime', 218),
(3607, 'Plateaux', 218),
(3608, 'Savanes', 218),
(3609, 'Atafu', 219),
(3610, 'Fakaofo', 219),
(3611, 'Nukunonu', 219),
(3612, 'Eua', 220),
(3613, 'Ha\'apai', 220),
(3614, 'Niuas', 220),
(3615, 'Tongatapu', 220),
(3616, 'Vava\'u', 220),
(3617, 'Arima-Tunapuna-Piarco', 221),
(3618, 'Caroni', 221),
(3619, 'Chaguanas', 221),
(3620, 'Couva-Tabaquite-Talparo', 221),
(3621, 'Diego Martin', 221),
(3622, 'Glencoe', 221),
(3623, 'Penal Debe', 221),
(3624, 'Point Fortin', 221),
(3625, 'Port of Spain', 221),
(3626, 'Princes Town', 221),
(3627, 'Saint George', 221),
(3628, 'San Fernando', 221),
(3629, 'San Juan', 221),
(3630, 'Sangre Grande', 221),
(3631, 'Siparia', 221),
(3632, 'Tobago', 221),
(3633, 'Aryanah', 222),
(3634, 'Bajah', 222),
(3635, 'Bin \'Arus', 222),
(3636, 'Binzart', 222),
(3637, 'Gouvernorat de Ariana', 222),
(3638, 'Gouvernorat de Nabeul', 222),
(3639, 'Gouvernorat de Sousse', 222),
(3640, 'Hammamet Yasmine', 222),
(3641, 'Jundubah', 222),
(3642, 'Madaniyin', 222),
(3643, 'Manubah', 222),
(3644, 'Monastir', 222),
(3645, 'Nabul', 222),
(3646, 'Qabis', 222),
(3647, 'Qafsah', 222),
(3648, 'Qibili', 222),
(3649, 'Safaqis', 222),
(3650, 'Sfax', 222),
(3651, 'Sidi Bu Zayd', 222),
(3652, 'Silyanah', 222),
(3653, 'Susah', 222),
(3654, 'Tatawin', 222),
(3655, 'Tawzar', 222),
(3656, 'Tunis', 222),
(3657, 'Zaghwan', 222),
(3658, 'al-Kaf', 222),
(3659, 'al-Mahdiyah', 222),
(3660, 'al-Munastir', 222),
(3661, 'al-Qasrayn', 222),
(3662, 'al-Qayrawan', 222),
(3663, 'Adana', 223),
(3664, 'Adiyaman', 223),
(3665, 'Afyon', 223),
(3666, 'Agri', 223),
(3667, 'Aksaray', 223),
(3668, 'Amasya', 223),
(3669, 'Ankara', 223),
(3670, 'Antalya', 223),
(3671, 'Ardahan', 223),
(3672, 'Artvin', 223),
(3673, 'Aydin', 223),
(3674, 'Balikesir', 223),
(3675, 'Bartin', 223),
(3676, 'Batman', 223),
(3677, 'Bayburt', 223),
(3678, 'Bilecik', 223),
(3679, 'Bingol', 223),
(3680, 'Bitlis', 223),
(3681, 'Bolu', 223),
(3682, 'Burdur', 223),
(3683, 'Bursa', 223),
(3684, 'Canakkale', 223),
(3685, 'Cankiri', 223),
(3686, 'Corum', 223),
(3687, 'Denizli', 223),
(3688, 'Diyarbakir', 223),
(3689, 'Duzce', 223),
(3690, 'Edirne', 223),
(3691, 'Elazig', 223),
(3692, 'Erzincan', 223),
(3693, 'Erzurum', 223),
(3694, 'Eskisehir', 223),
(3695, 'Gaziantep', 223),
(3696, 'Giresun', 223),
(3697, 'Gumushane', 223),
(3698, 'Hakkari', 223),
(3699, 'Hatay', 223),
(3700, 'Icel', 223),
(3701, 'Igdir', 223),
(3702, 'Isparta', 223),
(3703, 'Istanbul', 223),
(3704, 'Izmir', 223),
(3705, 'Kahramanmaras', 223),
(3706, 'Karabuk', 223),
(3707, 'Karaman', 223),
(3708, 'Kars', 223),
(3709, 'Karsiyaka', 223),
(3710, 'Kastamonu', 223),
(3711, 'Kayseri', 223),
(3712, 'Kilis', 223),
(3713, 'Kirikkale', 223),
(3714, 'Kirklareli', 223),
(3715, 'Kirsehir', 223),
(3716, 'Kocaeli', 223),
(3717, 'Konya', 223),
(3718, 'Kutahya', 223),
(3719, 'Lefkosa', 223),
(3720, 'Malatya', 223),
(3721, 'Manisa', 223),
(3722, 'Mardin', 223),
(3723, 'Mugla', 223),
(3724, 'Mus', 223),
(3725, 'Nevsehir', 223),
(3726, 'Nigde', 223),
(3727, 'Ordu', 223),
(3728, 'Osmaniye', 223),
(3729, 'Rize', 223),
(3730, 'Sakarya', 223),
(3731, 'Samsun', 223),
(3732, 'Sanliurfa', 223),
(3733, 'Siirt', 223),
(3734, 'Sinop', 223),
(3735, 'Sirnak', 223),
(3736, 'Sivas', 223),
(3737, 'Tekirdag', 223),
(3738, 'Tokat', 223),
(3739, 'Trabzon', 223),
(3740, 'Tunceli', 223),
(3741, 'Usak', 223),
(3742, 'Van', 223),
(3743, 'Yalova', 223),
(3744, 'Yozgat', 223),
(3745, 'Zonguldak', 223),
(3746, 'Ahal', 224),
(3747, 'Asgabat', 224),
(3748, 'Balkan', 224),
(3749, 'Dasoguz', 224),
(3750, 'Lebap', 224),
(3751, 'Mari', 224),
(3752, 'Grand Turk', 225),
(3753, 'South Caicos and East Caicos', 225),
(3754, 'Funafuti', 226),
(3755, 'Nanumanga', 226),
(3756, 'Nanumea', 226),
(3757, 'Niutao', 226),
(3758, 'Nui', 226),
(3759, 'Nukufetau', 226),
(3760, 'Nukulaelae', 226),
(3761, 'Vaitupu', 226),
(3762, 'Central', 227),
(3763, 'Eastern', 227),
(3764, 'Northern', 227),
(3765, 'Western', 227),
(3766, 'Cherkas\'ka', 228),
(3767, 'Chernihivs\'ka', 228),
(3768, 'Chernivets\'ka', 228),
(3769, 'Crimea', 228),
(3770, 'Dnipropetrovska', 228),
(3771, 'Donets\'ka', 228),
(3772, 'Ivano-Frankivs\'ka', 228),
(3773, 'Kharkiv', 228),
(3774, 'Kharkov', 228),
(3775, 'Khersonska', 228),
(3776, 'Khmel\'nyts\'ka', 228),
(3777, 'Kirovohrad', 228),
(3778, 'Krym', 228),
(3779, 'Kyyiv', 228),
(3780, 'Kyyivs\'ka', 228),
(3781, 'L\'vivs\'ka', 228),
(3782, 'Luhans\'ka', 228),
(3783, 'Mykolayivs\'ka', 228),
(3784, 'Odes\'ka', 228),
(3785, 'Odessa', 228),
(3786, 'Poltavs\'ka', 228),
(3787, 'Rivnens\'ka', 228),
(3788, 'Sevastopol\'', 228),
(3789, 'Sums\'ka', 228),
(3790, 'Ternopil\'s\'ka', 228),
(3791, 'Volyns\'ka', 228),
(3792, 'Vynnyts\'ka', 228),
(3793, 'Zakarpats\'ka', 228),
(3794, 'Zaporizhia', 228),
(3795, 'Zhytomyrs\'ka', 228),
(3796, 'Abu Zabi', 229),
(3797, 'Ajman', 229),
(3798, 'Dubai', 229),
(3799, 'Ras al-Khaymah', 229),
(3800, 'Sharjah', 229),
(3801, 'Sharjha', 229),
(3802, 'Umm al Qaywayn', 229),
(3803, 'al-Fujayrah', 229),
(3804, 'ash-Shariqah', 229),
(3805, 'Aberdeen', 230),
(3806, 'Aberdeenshire', 230),
(3807, 'Argyll', 230),
(3808, 'Armagh', 230),
(3809, 'Bedfordshire', 230),
(3810, 'Belfast', 230),
(3811, 'Berkshire', 230),
(3812, 'Birmingham', 230),
(3813, 'Brechin', 230),
(3814, 'Bridgnorth', 230),
(3815, 'Bristol', 230),
(3816, 'Buckinghamshire', 230),
(3817, 'Cambridge', 230),
(3818, 'Cambridgeshire', 230),
(3819, 'Channel Islands', 230),
(3820, 'Cheshire', 230),
(3821, 'Cleveland', 230),
(3822, 'Co Fermanagh', 230),
(3823, 'Conwy', 230),
(3824, 'Cornwall', 230),
(3825, 'Coventry', 230),
(3826, 'Craven Arms', 230),
(3827, 'Cumbria', 230),
(3828, 'Denbighshire', 230),
(3829, 'Derby', 230),
(3830, 'Derbyshire', 230),
(3831, 'Devon', 230),
(3832, 'Dial Code Dungannon', 230),
(3833, 'Didcot', 230),
(3834, 'Dorset', 230),
(3835, 'Dunbartonshire', 230),
(3836, 'Durham', 230),
(3837, 'East Dunbartonshire', 230),
(3838, 'East Lothian', 230),
(3839, 'East Midlands', 230),
(3840, 'East Sussex', 230),
(3841, 'East Yorkshire', 230),
(3842, 'England', 230),
(3843, 'Essex', 230),
(3844, 'Fermanagh', 230),
(3845, 'Fife', 230),
(3846, 'Flintshire', 230),
(3847, 'Fulham', 230),
(3848, 'Gainsborough', 230),
(3849, 'Glocestershire', 230),
(3850, 'Gwent', 230),
(3851, 'Hampshire', 230),
(3852, 'Hants', 230),
(3853, 'Herefordshire', 230),
(3854, 'Hertfordshire', 230),
(3855, 'Ireland', 230),
(3856, 'Isle Of Man', 230),
(3857, 'Isle of Wight', 230),
(3858, 'Kenford', 230),
(3859, 'Kent', 230),
(3860, 'Kilmarnock', 230),
(3861, 'Lanarkshire', 230),
(3862, 'Lancashire', 230),
(3863, 'Leicestershire', 230),
(3864, 'Lincolnshire', 230),
(3865, 'Llanymynech', 230),
(3866, 'London', 230),
(3867, 'Ludlow', 230),
(3868, 'Manchester', 230),
(3869, 'Mayfair', 230),
(3870, 'Merseyside', 230),
(3871, 'Mid Glamorgan', 230),
(3872, 'Middlesex', 230),
(3873, 'Mildenhall', 230),
(3874, 'Monmouthshire', 230),
(3875, 'Newton Stewart', 230),
(3876, 'Norfolk', 230),
(3877, 'North Humberside', 230),
(3878, 'North Yorkshire', 230),
(3879, 'Northamptonshire', 230),
(3880, 'Northants', 230),
(3881, 'Northern Ireland', 230),
(3882, 'Northumberland', 230),
(3883, 'Nottinghamshire', 230),
(3884, 'Oxford', 230),
(3885, 'Powys', 230),
(3886, 'Roos-shire', 230),
(3887, 'SUSSEX', 230),
(3888, 'Sark', 230),
(3889, 'Scotland', 230),
(3890, 'Scottish Borders', 230),
(3891, 'Shropshire', 230),
(3892, 'Somerset', 230),
(3893, 'South Glamorgan', 230),
(3894, 'South Wales', 230),
(3895, 'South Yorkshire', 230),
(3896, 'Southwell', 230),
(3897, 'Staffordshire', 230),
(3898, 'Strabane', 230),
(3899, 'Suffolk', 230),
(3900, 'Surrey', 230),
(3901, 'Sussex', 230),
(3902, 'Twickenham', 230),
(3903, 'Tyne and Wear', 230),
(3904, 'Tyrone', 230),
(3905, 'Utah', 230),
(3906, 'Wales', 230),
(3907, 'Warwickshire', 230),
(3908, 'West Lothian', 230),
(3909, 'West Midlands', 230),
(3910, 'West Sussex', 230),
(3911, 'West Yorkshire', 230),
(3912, 'Whissendine', 230),
(3913, 'Wiltshire', 230),
(3914, 'Wokingham', 230),
(3915, 'Worcestershire', 230),
(3916, 'Wrexham', 230),
(3917, 'Wurttemberg', 230),
(3918, 'Yorkshire', 230),
(3919, 'Alabama', 231),
(3920, 'Alaska', 231),
(3921, 'Arizona', 231),
(3922, 'Arkansas', 231),
(3923, 'Byram', 231),
(3924, 'California', 231),
(3925, 'Cokato', 231),
(3926, 'Colorado', 231),
(3927, 'Connecticut', 231),
(3928, 'Delaware', 231),
(3929, 'District of Columbia', 231),
(3930, 'Florida', 231),
(3931, 'Georgia', 231),
(3932, 'Hawaii', 231),
(3933, 'Idaho', 231),
(3934, 'Illinois', 231),
(3935, 'Indiana', 231),
(3936, 'Iowa', 231),
(3937, 'Kansas', 231),
(3938, 'Kentucky', 231),
(3939, 'Louisiana', 231),
(3940, 'Lowa', 231),
(3941, 'Maine', 231),
(3942, 'Maryland', 231),
(3943, 'Massachusetts', 231),
(3944, 'Medfield', 231),
(3945, 'Michigan', 231),
(3946, 'Minnesota', 231),
(3947, 'Mississippi', 231),
(3948, 'Missouri', 231),
(3949, 'Montana', 231),
(3950, 'Nebraska', 231),
(3951, 'Nevada', 231),
(3952, 'New Hampshire', 231),
(3953, 'New Jersey', 231),
(3954, 'New Jersy', 231),
(3955, 'New Mexico', 231),
(3956, 'New York', 231),
(3957, 'North Carolina', 231),
(3958, 'North Dakota', 231),
(3959, 'Ohio', 231),
(3960, 'Oklahoma', 231),
(3961, 'Ontario', 231),
(3962, 'Oregon', 231),
(3963, 'Pennsylvania', 231),
(3964, 'Ramey', 231),
(3965, 'Rhode Island', 231),
(3966, 'South Carolina', 231),
(3967, 'South Dakota', 231),
(3968, 'Sublimity', 231),
(3969, 'Tennessee', 231),
(3970, 'Texas', 231),
(3971, 'Trimble', 231),
(3972, 'Utah', 231),
(3973, 'Vermont', 231),
(3974, 'Virginia', 231),
(3975, 'Washington', 231),
(3976, 'West Virginia', 231),
(3977, 'Wisconsin', 231),
(3978, 'Wyoming', 231),
(3979, 'United States Minor Outlying I', 232),
(3980, 'Artigas', 233),
(3981, 'Canelones', 233),
(3982, 'Cerro Largo', 233),
(3983, 'Colonia', 233),
(3984, 'Durazno', 233),
(3985, 'FLorida', 233),
(3986, 'Flores', 233),
(3987, 'Lavalleja', 233),
(3988, 'Maldonado', 233),
(3989, 'Montevideo', 233),
(3990, 'Paysandu', 233),
(3991, 'Rio Negro', 233),
(3992, 'Rivera', 233),
(3993, 'Rocha', 233),
(3994, 'Salto', 233),
(3995, 'San Jose', 233),
(3996, 'Soriano', 233),
(3997, 'Tacuarembo', 233),
(3998, 'Treinta y Tres', 233),
(3999, 'Andijon', 234),
(4000, 'Buhoro', 234),
(4001, 'Buxoro Viloyati', 234),
(4002, 'Cizah', 234),
(4003, 'Fargona', 234),
(4004, 'Horazm', 234),
(4005, 'Kaskadar', 234),
(4006, 'Korakalpogiston', 234),
(4007, 'Namangan', 234),
(4008, 'Navoi', 234),
(4009, 'Samarkand', 234),
(4010, 'Sirdare', 234),
(4011, 'Surhondar', 234),
(4012, 'Toskent', 234),
(4013, 'Malampa', 235),
(4014, 'Penama', 235),
(4015, 'Sanma', 235),
(4016, 'Shefa', 235),
(4017, 'Tafea', 235),
(4018, 'Torba', 235),
(4019, 'Vatican City State (Holy See)', 236),
(4020, 'Amazonas', 237),
(4021, 'Anzoategui', 237),
(4022, 'Apure', 237),
(4023, 'Aragua', 237),
(4024, 'Barinas', 237),
(4025, 'Bolivar', 237),
(4026, 'Carabobo', 237),
(4027, 'Cojedes', 237),
(4028, 'Delta Amacuro', 237),
(4029, 'Distrito Federal', 237),
(4030, 'Falcon', 237),
(4031, 'Guarico', 237),
(4032, 'Lara', 237),
(4033, 'Merida', 237),
(4034, 'Miranda', 237),
(4035, 'Monagas', 237),
(4036, 'Nueva Esparta', 237),
(4037, 'Portuguesa', 237),
(4038, 'Sucre', 237),
(4039, 'Tachira', 237),
(4040, 'Trujillo', 237),
(4041, 'Vargas', 237),
(4042, 'Yaracuy', 237),
(4043, 'Zulia', 237),
(4044, 'Bac Giang', 238),
(4045, 'Binh Dinh', 238),
(4046, 'Binh Duong', 238),
(4047, 'Da Nang', 238),
(4048, 'Dong Bang Song Cuu Long', 238),
(4049, 'Dong Bang Song Hong', 238),
(4050, 'Dong Nai', 238),
(4051, 'Dong Nam Bo', 238),
(4052, 'Duyen Hai Mien Trung', 238),
(4053, 'Hanoi', 238),
(4054, 'Hung Yen', 238),
(4055, 'Khu Bon Cu', 238),
(4056, 'Long An', 238),
(4057, 'Mien Nui Va Trung Du', 238),
(4058, 'Thai Nguyen', 238),
(4059, 'Thanh Pho Ho Chi Minh', 238),
(4060, 'Thu Do Ha Noi', 238),
(4061, 'Tinh Can Tho', 238),
(4062, 'Tinh Da Nang', 238),
(4063, 'Tinh Gia Lai', 238),
(4064, 'Anegada', 239),
(4065, 'Jost van Dyke', 239),
(4066, 'Tortola', 239),
(4067, 'Saint Croix', 240),
(4068, 'Saint John', 240),
(4069, 'Saint Thomas', 240),
(4070, 'Alo', 241),
(4071, 'Singave', 241),
(4072, 'Wallis', 241),
(4073, 'Bu Jaydur', 242),
(4074, 'Wad-adh-Dhahab', 242),
(4075, 'al-\'Ayun', 242),
(4076, 'as-Samarah', 242),
(4077, '\'Adan', 243),
(4078, 'Abyan', 243),
(4079, 'Dhamar', 243),
(4080, 'Hadramaut', 243),
(4081, 'Hajjah', 243),
(4082, 'Hudaydah', 243),
(4083, 'Ibb', 243),
(4084, 'Lahij', 243),
(4085, 'Ma\'rib', 243),
(4086, 'Madinat San\'a', 243),
(4087, 'Sa\'dah', 243),
(4088, 'Sana', 243),
(4089, 'Shabwah', 243),
(4090, 'Ta\'izz', 243),
(4091, 'al-Bayda', 243),
(4092, 'al-Hudaydah', 243),
(4093, 'al-Jawf', 243),
(4094, 'al-Mahrah', 243),
(4095, 'al-Mahwit', 243),
(4096, 'Central Serbia', 244),
(4097, 'Kosovo and Metohija', 244),
(4098, 'Montenegro', 244),
(4099, 'Republic of Serbia', 244),
(4100, 'Serbia', 244),
(4101, 'Vojvodina', 244),
(4102, 'Central', 245),
(4103, 'Copperbelt', 245),
(4104, 'Eastern', 245),
(4105, 'Luapala', 245),
(4106, 'Lusaka', 245),
(4107, 'North-Western', 245),
(4108, 'Northern', 245),
(4109, 'Southern', 245),
(4110, 'Western', 245),
(4111, 'Bulawayo', 246),
(4112, 'Harare', 246),
(4113, 'Manicaland', 246),
(4114, 'Mashonaland Central', 246),
(4115, 'Mashonaland East', 246),
(4116, 'Mashonaland West', 246),
(4117, 'Masvingo', 246),
(4118, 'Matabeleland North', 246),
(4119, 'Matabeleland South', 246),
(4120, 'Midlands', 246),
(4121, 'Lienchiang County', 214);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_role_id`, `name`, `email`, `contact`, `user_name`, `password`, `branch`, `user_type`, `verification_key`, `is_email_verified`) VALUES
(1, NULL, 'setu kumar', 'sasikumar95044@gmail.com', '9504454903', 'Jingle', 'Jingle123', 'IVS-DELHI (DEL), Delhi', 'Ivs Clients', '4d9361fe6edb3cadd84c4fac48bd1b36', 'no'),
(2, NULL, 'setu kumar', 'setukumar@jingleinfo.com', '9504454903', 'jingle', 'jingle@8899', 'IVS-MAA (MAA), Bangalore', 'Staff', '17ecff070f2d61ddf39a6fbf6ebec5d5', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `id` int(11) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL,
  `permissions` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`id`, `user_role`, `permissions`, `status`) VALUES
(1, 'admin', 'yes', 1),
(2, 'user', '', 0),
(3, 'client', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `orderno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `position`, `description`, `orderno`) VALUES
(3, 'All Around', 'Head Instructor (Round Position)', '<p><span style=\"background-color:rgb(246, 246, 246); color:rgb(84, 84, 84); font-family:fontawesome; font-size:15px\">An accomplished pro-mountaineer and sports climber, Tusi holds multiple mountaineering honors. She is the first woman to climb Thelay Sagar, a notoriously difficult peak to climb in the Garhwal Himalayas. She is also the first Indian woman to climb Kanchenjunga in 2014. Besides this she also summited Everest in 2013 and was facilitated by the WB CM for the same</span>.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n', 1),
(4, 'Rohit Singh', 'Bussiness Management (Advance)', '<p><span style=\"background-color:rgb(246, 246, 246); color:rgb(84, 84, 84); font-family:fontawesome; font-size:15px\">The perfect combination of an adventurer and an educator. At the age of 17, still in school, Anit became the youngest person in the world to be part of an Everest Expedition. He started his work as an educator at the Nehru Institute of Mountaineering (Uttarkashi) and has climbed over 25 prominent Himalayan Peaks. His expertise goes also to the deepest seas as he is also a certified SCUBA instructor.</span></p>\r\n', 1),
(5, 'Setu Kumar', 'Software Developer(Jingleinfo Solution)', '<p><span style=\"background-color:rgb(246, 246, 246); color:rgb(84, 84, 84); font-family:fontawesome; font-size:15px\">An Arjun award winner, Col was a part of the first successful Indian Expedition to Mt Everest in 1965. During his tenure in the Indian Army he served as the commandant of the High Altitude Warfare School and also as the Principal of the Nehru Institute of Mountaineering. Both these instilled in him a great love of teaching besides his eternal love of the mountains. This love for teaching coupled with his love for the mountains gave birth to Altitudes in 1996.</span><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(11) NOT NULL,
  `visa_fee` varchar(150) NOT NULL,
  `service_fee` varchar(150) NOT NULL,
  `embassy_fee` varchar(150) NOT NULL,
  `miscellaneous` varchar(200) NOT NULL,
  `bill_no` varchar(150) NOT NULL,
  `total_amount` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `visa_fee`, `service_fee`, `embassy_fee`, `miscellaneous`, `bill_no`, `total_amount`) VALUES
(1, '3200.00', '500.00', '250.00', '500', 'AWB098210', '4450.00'),
(2, '2500.00', '600.00', '3000.00', '500.00', 'ASCi0023', '6600.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_depart`
--

CREATE TABLE `user_depart` (
  `id` int(11) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `user_type` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_depart`
--

INSERT INTO `user_depart` (`id`, `branch`, `user_type`, `name`, `username`, `password`, `contact`, `email`, `status`) VALUES
(1, 'IVS-MAA (MAA), Bangalore', 'Ivs Clients', 'setu kumar', 'admin', 'admin', '9504454903', 'setukumar@jingleinfo.com', 0),
(5, 'IVS-Pune (Pun), Mumbai', 'Ivs Clients', 'setu kumar', 'ivs_setu', 'ivsdelhi', '9504454903', 'sasikumar95044@gmail.com', 1),
(6, 'IVS-HYD (HYD), Bangalore', 'Staff', 'Jingle', 'ivs_visa', 'ivsvisa', '9504454903', 'sasikumar95044@gmail.com', 1),
(7, 'IVS-HYD (HYD), Bangalore', 'Staff', 'Information technology', 'qaaqaqq', '123456', '9504454903', 'ssetu@gmail.com', 1),
(15, 'IVS-DELHI ', 'Distribution', 'Setu kumar', 'rht@112', 'asdfgh', '9504454906', 'setukumar@gmail.com', 1),
(16, 'IVS-DELHI ', 'Ivs Clients', 'setuk', 'rht@112', 'asdfgh', '9504454906', 'setukumar@jingleinfo.com', 0),
(17, 'High Commision USA', 'Ivs Clients', 'setuk', 'setu', 'asdfgh', '9504454906', 'setukumar@jingleinfo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visatype`
--

CREATE TABLE `visatype` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visatype`
--

INSERT INTO `visatype` (`id`, `country_id`, `country_name`, `name`) VALUES
(1, 1, '', 'Tourist Visa'),
(2, 1, '', 'Business Visa'),
(3, 1, '', 'Visit Visa'),
(4, 17, '', 'Student Visa'),
(5, 17, '', 'Work Visa'),
(6, 17, '', 'E tourist Visa'),
(7, 17, '', 'Research Visa'),
(8, 17, '', 'Business Visa'),
(9, 17, '', 'Employment Visa'),
(10, 17, '', 'Travel Visa'),
(11, 17, '', 'M1 Student Visa'),
(12, 6, '', 'Tourist visas'),
(13, 6, '', 'Business visas'),
(14, 6, '', 'Student visas'),
(15, 6, '', 'Transit visas'),
(17, 5, '', 'Transit Visa'),
(18, 5, '', 'Student visa subclass'),
(19, 5, '', 'Business visa'),
(20, 5, '', 'Tourist Visa'),
(21, 14, '', 'Russian Business Visa'),
(22, 14, '', 'Russian Private Visa'),
(23, 14, '', 'Russian Tourist Visa'),
(24, 14, '', 'Russian Student visa'),
(25, 14, '', 'Work Visa'),
(26, 14, '', 'Humanitarian Visa'),
(27, 16, '', 'Work Visas'),
(28, 16, '', 'Business Visas'),
(29, 16, '', 'Study Visas'),
(30, 16, '', 'Visitor Visas'),
(31, 16, '', 'Family Visas'),
(32, 16, '', 'Settlement Visas'),
(33, 16, '', 'Transit Visas'),
(34, 15, '', 'Tourist Visa'),
(35, 15, '', 'Visit Visa'),
(36, 15, '', 'Business Visa'),
(37, 15, '', 'Work Visa'),
(38, 15, '', 'Medical Visa'),
(39, 15, '', 'Relatives\' Visa'),
(40, 15, '', 'Exchange Visa'),
(41, 9, '', 'Business Visa'),
(42, 19, '', 'Travel Visa'),
(43, 10, '', 'Business Visa'),
(45, 3, '', 'Travel Visa'),
(46, 8, '', 'Business Visa'),
(47, 8, '', 'Business Visa'),
(49, 2, '', 'Travel Visa'),
(51, 9, '', 'student'),
(52, 6, '', 'Student'),
(61, 14, '', 'Business visa'),
(62, 24, '', 'Travel Visa'),
(69, 11, '', 'Travel visa');

-- --------------------------------------------------------

--
-- Table structure for table `visa_application`
--

CREATE TABLE `visa_application` (
  `id` int(10) NOT NULL,
  `Docket_No` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sender_Staff` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `corporate_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pasport_no` varchar(100) NOT NULL,
  `old_passport` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_travel` date NOT NULL,
  `Country` varchar(200) NOT NULL,
  `PNR` varchar(100) NOT NULL,
  `Ref` varchar(200) NOT NULL,
  `Staff` varchar(200) NOT NULL,
  `Fee` varchar(100) NOT NULL,
  `departure` date NOT NULL,
  `enquiry` date NOT NULL,
  `Facilitation` varchar(200) NOT NULL,
  `Charges` varchar(200) NOT NULL,
  `FeesRemarks` varchar(200) NOT NULL,
  `coldate` date NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `myfile` blob NOT NULL,
  `checklist` varchar(200) NOT NULL,
  `checklist1` varchar(100) NOT NULL,
  `checklist2` varchar(100) NOT NULL,
  `checklist3` varchar(100) NOT NULL,
  `checklist4` varchar(100) NOT NULL,
  `checklist5` varchar(100) NOT NULL,
  `checklist6` varchar(100) NOT NULL,
  `checklist7` varchar(100) NOT NULL,
  `checklist8` varchar(100) NOT NULL,
  `Bill` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `AWBN` varchar(200) NOT NULL,
  `Dispatch` date NOT NULL,
  `detailremark` varchar(300) NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visa_application`
--

INSERT INTO `visa_application` (`id`, `Docket_No`, `branch`, `sender_Staff`, `client`, `corporate_name`, `name`, `pasport_no`, `old_passport`, `email`, `phone`, `date_of_birth`, `date_of_travel`, `Country`, `PNR`, `Ref`, `Staff`, `Fee`, `departure`, `enquiry`, `Facilitation`, `Charges`, `FeesRemarks`, `coldate`, `Remark`, `myfile`, `checklist`, `checklist1`, `checklist2`, `checklist3`, `checklist4`, `checklist5`, `checklist6`, `checklist7`, `checklist8`, `Bill`, `Amount`, `AWBN`, `Dispatch`, `detailremark`, `status`) VALUES
(3, 'DOC_169467655027893074', '3', 'Shasi kumar', 'asdfg', 'Ivs visa', 'Shasi kumar', 'W980654', '1', 'sasikumar95044@gmail.com', '9504454903', '1999-03-11', '2023-09-30', '16', '6548712', 'Wab0021', '7', '$ 300', '2023-09-27', '2023-09-27', 'Service Provider', '320', 'Paid Online', '2023-09-28', 'Apply for processing', 0x62656c697a652076697361206170706c69636174696f6e2e706466, 'Visa Form Duly Filled', '', 'Photos', ' Attestation', 'Covering Letter', '', '', 'Income Tax Return', 'Medical Health Insurance', 'AWBT0981', '$350', 'AWBT0981', '2023-09-22', 'Applyed for Embassy....', 0),
(4, 'DOC_169502383425541676', '9', 'Rampahl', '10', 'Egencia', 'High Commision USA', 'HG09831', '1', 'setukumar@gmail.com', '9504454903', '2023-09-19', '2023-09-21', '3', 'KJO09821', 'Wedb0921', '5', '2309', '2023-10-03', '2023-09-05', 'sdertu', '123', 'pasid', '2023-09-28', 'I have process the visa', 0x62656c697a652076697361206170706c69636174696f6e2e706466, 'Visa Form Duly Filled', '', 'Photos', ' Attestation', '', 'Bank Statement', 'Salary Slip', '', '', 'AWS0921', '349022', '212222', '2023-09-30', 'I have peocess the visa request', 0),
(5, 'DOC_169503087078818648', '10', 'Jingle', '5', 'Our Client', 'Setu kumar', 'HG09821', '4', 'setukumar@gmail.com', '9504454903', '2013-06-18', '2023-10-07', '14', 'KJO09821', 'Wedb0921', '7', '', '2023-09-27', '2023-10-06', 'Service Provider', '$320.00', 'Paid', '2023-09-21', 'Apply for visa', '', '', '', '', '', 'Covering Letter', 'Bank Statement', 'Salary Slip', 'Income Tax Return', '', 'AWS0921', '349022', '212222', '2023-09-29', 'applyes', 0),
(6, 'DOC_169518928225615295', 'IVS-DELHI ', 'Setu kumar singh', '\r\n<div style=\"border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;\">\r\n\r\n<h4>A PHP Error was encountered</h4>\r\n\r\n<p>Severity: Warning</p>\r\n<p>Message:  Undefined array key \"name\"</p>\r\n<p>Filen', 'Jingle Infosolution', 'setuk', 'W980654', '4', 'setukumar@jingleinfo.com', '09898989898', '2023-08-29', '2023-09-09', 'Bangladesh', 'KJO09821', 'Wedb0921', 'setu kumar', '2309', '2023-10-05', '2023-10-05', 'sdertu', '123', 'pasid', '2023-09-29', 'sasasasasasasasasasasasasasasasa', 0x73616d706c655f657863656c5f66696c652e786c7378, '', 'Old Passport If any', '', '', 'Covering Letter', '', 'Salary Slip', '', 'Medical Health Insurance', 'sa', '349022', '212222', '2023-10-05', 'aaaaaaaaaaaaaaaaaaaaa', 0),
(7, 'DOC_169518942639120903', 'IVS Visa Services', 'Setu kumar singh', 'Ivs Visa Services', 'Jingle Infosolution', 'High Commision USA', 'HGF0098gfghrtg', '0', 'admin@gmail.com', '654847584', '0000-00-00', '0000-00-00', 'Australia', '', '', 'setu kumar', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visa_fee`
--

CREATE TABLE `visa_fee` (
  `id` int(20) NOT NULL,
  `country` varchar(200) NOT NULL,
  `visa_type` varchar(200) NOT NULL,
  `validity` varchar(255) NOT NULL,
  `processing` varchar(255) NOT NULL,
  `embassyfee` varchar(200) NOT NULL,
  `servicefee` varchar(200) NOT NULL,
  `GST` varchar(100) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visa_fee`
--

INSERT INTO `visa_fee` (`id`, `country`, `visa_type`, `validity`, `processing`, `embassyfee`, `servicefee`, `GST`, `totalcost`, `status`) VALUES
(1, '', 'Student Visa', 'Up to 1 yaer', ' 49 working  day', ' 8000', ' 5000', 'Rs 400', '13000', 0),
(2, '', 'Working Visa', 'Up to 1 yaer(initially)', ' 35 Working Day\'s', ' Rs 5000.00', ' Rs 2000.00', 'Rs 400', 'Rs 70400.00', 0),
(3, '5', 'Student Visa', 'Up to 1 yaer', ' 60 working day', ' Rs 4000', ' Rs 900', 'Rs 400', 'Rs 5300', 0),
(4, '12', 'Student Visa', 'Up to 1 yaer(initially)', ' gregreh', ' rtfhtrh', ' bhghntgr', 'gbhtr', 'ghrthgtrh', 0),
(5, '18', 'Business visa', 'Up to 1 yaer(initially)', ' 20 Working Day\'s', ' Rs6000.00', ' Rs 2000.00', 'Rs 400', 'Rs 8400', 0),
(6, '17', 'Student Visa', 'Up to 1 yaer(initially)', ' 65 Working Day\'s', ' Rs 6500.00', ' Rs 2000.00', 'Rs 400', 'Rs 8900.00', 0),
(7, '13', 'Business visa', 'Up to 1 yaer', '50 WORKING DAY', ' RS 5000.00', ' RS 2400.00', 'Rs 400', 'RS 74800.00', 0),
(8, '6', 'Student Visa', 'Up to 1 yaer(initially)', ' 80 days', ' 5600.00', ' 200.0', '200', '2540100', 0),
(9, 'United States of America', 'student', 'ssss', ' ssss', ' ssss', ' ssss', 'ssss', 'ssss', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `countries_pages`
--
ALTER TABLE `countries_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countryfact`
--
ALTER TABLE `countryfact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diplomatic`
--
ALTER TABLE `diplomatic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `egencia_application`
--
ALTER TABLE `egencia_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `evisa`
--
ALTER TABLE `evisa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_notes`
--
ALTER TABLE `fee_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_email`
--
ALTER TABLE `group_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivs_branch`
--
ALTER TABLE `ivs_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivs_client`
--
ALTER TABLE `ivs_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ivs_wallet`
--
ALTER TABLE `ivs_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus1`
--
ALTER TABLE `menus1`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_latter`
--
ALTER TABLE `news_latter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions1`
--
ALTER TABLE `permissions1`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `roles1`
--
ALTER TABLE `roles1`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `tbl_radius`
--
ALTER TABLE `tbl_radius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id_state`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_depart`
--
ALTER TABLE `user_depart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visatype`
--
ALTER TABLE `visatype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_application`
--
ALTER TABLE `visa_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_fee`
--
ALTER TABLE `visa_fee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `countries_pages`
--
ALTER TABLE `countries_pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countryfact`
--
ALTER TABLE `countryfact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diplomatic`
--
ALTER TABLE `diplomatic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `egencia_application`
--
ALTER TABLE `egencia_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `evisa`
--
ALTER TABLE `evisa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fee_notes`
--
ALTER TABLE `fee_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `group_email`
--
ALTER TABLE `group_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ivs_branch`
--
ALTER TABLE `ivs_branch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ivs_client`
--
ALTER TABLE `ivs_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ivs_wallet`
--
ALTER TABLE `ivs_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_latter`
--
ALTER TABLE `news_latter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id_country` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id_payment` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_radius`
--
ALTER TABLE `tbl_radius`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id_state` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4122;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_depart`
--
ALTER TABLE `user_depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `visatype`
--
ALTER TABLE `visatype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `visa_application`
--
ALTER TABLE `visa_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visa_fee`
--
ALTER TABLE `visa_fee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

--
-- Constraints for table `menus1`
--
ALTER TABLE `menus1`
  ADD CONSTRAINT `menus1_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus1` (`menu_id`);

--
-- Constraints for table `permissions1`
--
ALTER TABLE `permissions1`
  ADD CONSTRAINT `permissions1_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles1` (`role_id`),
  ADD CONSTRAINT `permissions1_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menus1` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
