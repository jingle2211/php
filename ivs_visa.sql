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
(6, 'service', 'Last Mile Delivery Solutions', 'dd.png', '<p>delivery solutions also known as the last mile delivery solutions. This gives us more control over operations, leading to increased efficiency and more happy customers. We tie up with local delivery depots and chose the most optimised routes for deliveries. Status updates keeps the managers in loop about operations and we also provide map based live tracking for live status of each package. Once client fills in the necessary job requirements, information gets captured like&ndash; Geo-coordinates, electronic Proof of Delivery, Image, Digital Signature, customer rating and choice of payments etc. </p>', '2020-09-03 04:34:48', '0000-00-00 00:00:00', 0, '', '', '', '0'),
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