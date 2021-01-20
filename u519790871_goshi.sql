-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 10:37 AM
-- Server version: 10.4.15-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u519790871_goshi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `a_id` int(20) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin1` (`a_id`, `username`, `password`, `status`) VALUES
(1, 'Goshima', 'e10adc3949ba59abbe56e057f20f883e', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `img_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `img_path`, `title`, `date`, `detail`) VALUES
(3, 'gj.JPG', 'Swachh Bharat Mission Campaign', '2019-10-02', ' Goshima in association with MIDC has carried at plantation on complete main road.\r\nAll plants are maintained by drip irrigation system installed by Goshima water supply is provided by MIDC.\r\nThis year also we have conducted cleanliness drive on 2nd oct 2019 at GOSHIMA hall Gokul Shirgaon'),
(20, 'WhatsApp Image 2020-12-25 at 12.53.11 PM.jpeg', 'वीज व उर्जा वापरातील बचत\" या विषयावर सेमिनार संपन्न ', '2020-12-24', '        मा.श्री महावीर जैन,मुंबई (लेखापरिक्षक, संस्थापक व संचालक, एनर्जी इफिशियन्सी मॅनेजमेंट कन्सल्टन्सी प्रा. लि.)  यांनी आपल्या चालू वीज वापराच्या येणा-या वीज बिलामध्ये 5% ते 10% खात्रीने बचत करू शकतो या विषयावर सविस्तर मार्गदर्शन केले.\r\n       या कार्यक्रमासाठी वीज तज्ञ मा.श्री प्रताप होगाडे ,गोशिमा चे उपाध्यक्ष मा.श्री. मोहन पंडितराव, मानद सचिव मा.श्री.नितीनचंद्र दळवाई, संचालक मा.श्री. सचिन शिरगांवकर,मा.श्री. सुरजितसिंग पवार, मा.श्री.लक्ष्मीदास पटेल ,मा.श्री. जे.आर.मोटवाणी, मा.श्री.सुनिल शेळके,  सल्लागार संचालक मा.श्री. राजेंद्र माळी,निमंत्रित संचालक मा.श्री. विज्ञानंद मुंढे,मा.श्री. सतिश माने,मा.श्री. राजवर्धन जगदाळे व गोकुळ शिरगाव औद्योगिक वसाहतीमधील उद्योजक मोठ्या संख्येने उपस्थित होते.');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `name`, `date`, `category`) VALUES
(1, 'GOSHIMA VARTAPATRA FEB 2020.pdf', '2020-02-01', 'vartapatra'),
(2, 'NEW AHVAL 2019.pdf', '2019-01-01', 'annual report');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `title`) VALUES
(1, '3.jpeg', ''),
(2, 'Gandhi Jayantinew.jpg', ''),
(111, '10.jpg', ''),
(112, '21.jpeg', ''),
(114, '4.jpeg', ''),
(115, '15.jpeg', ''),
(116, '8.jpeg', ''),
(117, '11.jpg', ''),
(119, '6.jpeg', ''),
(120, '5.jpeg', ''),
(121, 'img3.jpeg', ''),
(122, '17.jpeg', ''),
(123, '9.jpeg', ''),
(124, 'Gandhi Jayanti2.jpg', ''),
(125, '23.jpeg', ''),
(127, '20.jpeg', ''),
(128, '26.jpg', ''),
(131, '16.jpg', ''),
(132, '25.jpeg', ''),
(133, '13.jpg', ''),
(134, '12.jpg', ''),
(137, 'img4.jpg', ''),
(140, 'new1.jpg', ''),
(141, 'img1.jpeg', ''),
(142, '3.jpeg', ''),
(143, '18.jpeg', ''),
(144, 'Gandhi Jayanti1.jpg', ''),
(145, '22.jpeg', ''),
(147, '27.jpg', ''),
(150, 'new2.jpg', ''),
(152, 'Gandhi Jayanti3.jpg', ''),
(153, '7.jpeg', ''),
(154, '28.jpg', ''),
(157, '19.jpeg', ''),
(158, '24.jpeg', ''),
(160, 'img2.jpeg', ''),
(161, 'Gandhi Jayantinew.jpg', ''),
(162, 'new3.jpg', ''),
(165, 'WhatsApp Image 2020-12-25 at 12.53.11 PM.jpeg', 'वीज व उर्जा वापरातील बचत\" या विषयावर सेमिनार संपन्न');

-- --------------------------------------------------------

--
-- Table structure for table `hallbook`
--

CREATE TABLE `hallbook` (
  `book_id` int(11) NOT NULL,
  `b_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_event` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_month` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_day` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_slot` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hallbook`
--

INSERT INTO `hallbook` (`book_id`, `b_name`, `b_event`, `b_email`, `b_mobile`, `b_year`, `b_month`, `b_day`, `b_slot`) VALUES
(44, 'Krishnat Bandu Sawant', 'Goshima Meeting', 'krishnat.sawant9@gmail.com', '+919834519', '2020', '12', '26', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hallbook`
--
ALTER TABLE `hallbook`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin1`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `hallbook`
--
ALTER TABLE `hallbook`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
