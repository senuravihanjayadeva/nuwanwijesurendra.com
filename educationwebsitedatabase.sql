-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 07:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationwebsitedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccess`
--

CREATE TABLE `adminaccess` (
  `rowID` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `teacherID` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccess`
--

INSERT INTO `adminaccess` (`rowID`, `email`, `teacherID`, `Password`) VALUES
(7, 'alsciencepapers@gmail.com', 'nuwan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `commentsection`
--

CREATE TABLE `commentsection` (
  `commentID` int(11) NOT NULL,
  `LessonID` int(11) NOT NULL,
  `LessonTopic` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `StudentName` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `comment` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsection`
--

INSERT INTO `commentsection` (`commentID`, `LessonID`, `LessonTopic`, `StudentName`, `comment`, `Time`) VALUES
(11, 24, 'à·ƒà·à¶»à·Šà·€ à¶¯à·Šâ€à¶»à·€à·Šâ€à¶º à¶…à¶±à·Šà¶­à¶»à·Šà¶¢à·à¶½à¶º - à¶‹à·ƒà·ƒà·Š à¶´à·™à·… (Internet of things - Advanced level) - Part 1', 'Yusan', 'Arduino eke mac Os walata wada nadda nattnm ekata wenama software ekk thiyanawada??', '2020-04-21 04:04:01'),
(12, 24, 'à·ƒà·à¶»à·Šà·€ à¶¯à·Šâ€à¶»à·€à·Šâ€à¶º à¶…à¶±à·Šà¶­à¶»à·Šà¶¢à·à¶½à¶º - à¶‹à·ƒà·ƒà·Š à¶´à·™à·… (Internet of things - Advanced level) - Part 1', 'Yusan', 'Arduino eke mac Os walata wada nadda nattnm ekata wenama software ekk thiyanawada??', '2020-04-21 04:04:03'),
(13, 25, 'à¶´à¶»à·’à¶œà¶«à¶š à·€à·’à¶¯à·Šâ€à¶ºà·à¶œà·à¶»à¶º à¶†à¶»à¶šà·Šà·‚à·’à¶­à·€ à¶·à·à·€à·’à¶­à¶º ( 1 à¶šà·œà¶§à·ƒ ) /  Use the computer laboratory safely ( part 1)', 'Rithesha', '', '2020-04-21 10:40:36'),
(16, 25, 'à¶´à¶»à·’à¶œà¶«à¶š à·€à·’à¶¯à·Šâ€à¶ºà·à¶œà·à¶»à¶º à¶†à¶»à¶šà·Šà·‚à·’à¶­à·€ à¶·à·à·€à·’à¶­à¶º ( 1 à¶šà·œà¶§à·ƒ ) /  Use the computer laboratory safely ( part 1)', 'Wijesurendra123', '', '2020-04-21 13:58:26'),
(34, 24, 'à·ƒà·à¶»à·Šà·€ à¶¯à·Šâ€à¶»à·€à·Šâ€à¶º à¶…à¶±à·Šà¶­à¶»à·Šà¶¢à·à¶½à¶º - à¶‹à·ƒà·ƒà·Š à¶´à·™à·… (Internet of things - Advanced level) - Part 1', 'senura', 'this is a test comment', '2020-04-24 05:27:55'),
(35, 31, 'à¶šà·Šâ€à¶»à¶¸à¶½à·šà¶› à¶½à·’à·€à·“à¶¸ / Programming (à·ƒà·’à¶‚à·„à¶½ à¶¸à·à¶°à·Šâ€à¶º/English medium) - Part 1', 'senura', 'this is a test', '2020-04-24 07:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `messagesection`
--

CREATE TABLE `messagesection` (
  `messageID` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagesection`
--

INSERT INTO `messagesection` (`messageID`, `name`, `email`, `message`) VALUES
(5, 'Thilini Mayurawansha', 'Thilinimayurawansha@gmail.com', 'Sir mama tenura.mona password ekada one.\r\n'),
(6, 'Hashnitha', 'Wishmithafire@gmail.com', 'Sir mekata log wenne kohomada'),
(7, 'Amila Lanka ', 'Amila1234@email.com', 'Hey! i,m join web sites.'),
(8, 'Amila Lanka ', 'Amila1234@email.com', 'Hey! i,m join we sites.\r\n\r\n'),
(9, 'Amila Lanka ', 'Amila1234@email.com', 'Hey! i,m join web sites\r\n\r\n\r\n'),
(10, 'Amila Lanka ', 'Amila1234@email.com', 'Hi\r\nHi\r\n'),
(11, 'Amila ', 'Amila1234@email.com', 'Hi\r\nHi\r\n'),
(12, 'Amila Lanka ', 'Amila1234@email.com', 'Hi\r\nHi\r\n'),
(13, 'amila lanka', 'amila1234@email.com', 'hi\r\nhi\r\n'),
(14, 'amila lanka', 'amila1234@email.com', 'hi'),
(15, 'amila lanka', 'amila1234@email.com', 'hi'),
(16, 'senura', 'senurajayadeva@gmail.com', 'this is a test');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `NoticeID` int(11) NOT NULL,
  `Grade` varchar(1000) NOT NULL,
  `Notice` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `otpCode` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `email`, `otpCode`) VALUES
(14, 'alsciencepapers@gmail.com', '5467'),
(15, 'alsciencepapers@gmail.com', '3029'),
(16, 'alsciencepapers@gmail.com', '9123'),
(19, 'alsciencepapers@gmail.com', '9987'),
(20, 'alsciencepapers@gmail.com', '2541'),
(21, 'alsciencepapers@gmail.com', '5009'),
(23, 'alsciencepapers@gmail.com', '8599');

-- --------------------------------------------------------

--
-- Table structure for table `studentaccessdatabase`
--

CREATE TABLE `studentaccessdatabase` (
  `rowID` int(11) NOT NULL,
  `StudentID` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentaccessdatabase`
--

INSERT INTO `studentaccessdatabase` (`rowID`, `StudentID`, `Password`) VALUES
(3, 'student2020', 'student#ict2020nuwan'),
(5, 'student@2020', 'wijesurendra123'),
(6, 'student@janesha', 'janesha'),
(7, 'student@nethmi', 'nethmi'),
(8, 'student', '123');

-- --------------------------------------------------------

--
-- Table structure for table `videolessons`
--

CREATE TABLE `videolessons` (
  `lessonID` int(11) NOT NULL,
  `Grade` varchar(2000) NOT NULL,
  `Topic` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `Description` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci NOT NULL,
  `URL` varchar(4000) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videolessons`
--

INSERT INTO `videolessons` (`lessonID`, `Grade`, `Topic`, `Description`, `URL`, `Time`) VALUES
(23, '10', 'à¶´à¶»à·’à¶œà¶«à¶š à¶¢à·à¶½à¶šà¶»à¶«à¶º - à·ƒà·’à¶‚à·„à¶½ à¶¸à·à¶°à·Šâ€à¶º ( 1 à¶šà·œà¶§à·ƒ  )', 'Unit 2', 'https://drive.google.com/file/d/1V_H5pKwiC09_O0R8oazHtRNjhwDNkajC/preview', '2020-04-20 04:15:41'),
(24, '12', 'à·ƒà·à¶»à·Šà·€ à¶¯à·Šâ€à¶»à·€à·Šâ€à¶º à¶…à¶±à·Šà¶­à¶»à·Šà¶¢à·à¶½à¶º - à¶‹à·ƒà·ƒà·Š à¶´à·™à·… (Internet of things - Advanced level) - Part 1', 'Unit 11', 'https://drive.google.com/file/d/1gJq5NJq-zLeJ43Bbx704YO5vttE1wvWZ/preview', '2020-04-20 12:20:13'),
(25, '6', 'à¶´à¶»à·’à¶œà¶«à¶š à·€à·’à¶¯à·Šâ€à¶ºà·à¶œà·à¶»à¶º à¶†à¶»à¶šà·Šà·‚à·’à¶­à·€ à¶·à·à·€à·’à¶­à¶º ( 1 à¶šà·œà¶§à·ƒ ) /  Use the computer laboratory safely ( part 1)', 'Unit 2', 'https://drive.google.com/file/d/1J0QzFgNh5e7IBGEcQUR5wusc_jKZ7m6j/preview', '2020-04-21 09:27:21'),
(27, '10', 'Computer Networking - English Medium (part 1)', 'Unit 2', 'https://drive.google.com/file/d/1jU_5Rn5guGXldwijCblPtVPmIWgBuh0r/preview', '2020-04-22 04:19:23'),
(28, '6', 'à¶´à¶»à·’à¶œà¶«à¶š à·€à·’à¶¯à·Šâ€à¶ºà·à¶œà·à¶»à¶º à¶†à¶»à¶šà·Šà·‚à·’à¶­à·€ à¶·à·à·€à·’à¶­à¶º ( 2 à¶šà·œà¶§à·ƒ ) /  Use the computer laboratory safely ( part 2)', 'Unit 2', 'https://drive.google.com/file/d/1ibCL1G1AoMducvWmpe6xgnzc5dpu5wcj/preview', '2020-04-23 03:56:59'),
(29, '10', 'Computer Networking - English Medium (part 2)', 'Unit 2', 'https://drive.google.com/file/d/1lzy61cMtfVdSCMP4K4PL-mFN7wzbel-s/preview', '2020-04-23 04:00:16'),
(30, '12', 'à·ƒà·à¶»à·Šà·€ à¶¯à·Šâ€à¶»à·€à·Šâ€à¶º à¶…à¶±à·Šà¶­à¶»à·Šà¶¢à·à¶½à¶º - à¶‹à·ƒà·ƒà·Š à¶´à·™à·… (Internet of things - Advanced level) - Part 2', 'Unit 11', 'https://drive.google.com/file/d/1FRGiFKkQ5Xjlrch-V-zmghggWDQlXTYm/preview', '2020-04-23 04:03:51'),
(31, '11', 'à¶šà·Šâ€à¶»à¶¸à¶½à·šà¶› à¶½à·’à·€à·“à¶¸ / Programming (à·ƒà·’à¶‚à·„à¶½ à¶¸à·à¶°à·Šâ€à¶º/English medium) - Part 1', 'Unit 1', 'https://drive.google.com/file/d/1NCd-2IBGs9PB8_o5WtsIbUwZKEx6BT5K/preview', '2020-04-23 12:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `lessonID` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`lessonID`, `views`) VALUES
(31, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccess`
--
ALTER TABLE `adminaccess`
  ADD PRIMARY KEY (`rowID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `commentsection`
--
ALTER TABLE `commentsection`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `messagesection`
--
ALTER TABLE `messagesection`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`NoticeID`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentaccessdatabase`
--
ALTER TABLE `studentaccessdatabase`
  ADD PRIMARY KEY (`rowID`);

--
-- Indexes for table `videolessons`
--
ALTER TABLE `videolessons`
  ADD PRIMARY KEY (`lessonID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccess`
--
ALTER TABLE `adminaccess`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `commentsection`
--
ALTER TABLE `commentsection`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messagesection`
--
ALTER TABLE `messagesection`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `NoticeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `studentaccessdatabase`
--
ALTER TABLE `studentaccessdatabase`
  MODIFY `rowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videolessons`
--
ALTER TABLE `videolessons`
  MODIFY `lessonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
