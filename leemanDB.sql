-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2023 at 11:38 AM
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
-- Database: `leemanDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `report_tbl`
--

CREATE TABLE `report_tbl` (
  `report_id` int(12) NOT NULL,
  `student_id` int(11) NOT NULL,
  `user_id` int(12) NOT NULL,
  `title` mediumtext NOT NULL,
  `report` varchar(16000) DEFAULT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_tbl`
--

INSERT INTO `report_tbl` (`report_id`, `student_id`, `user_id`, `title`, `report`, `time`) VALUES
(4, 0, 7, '0', 'This is the report', '2023-09-13'),
(5, 7, 2, 'coincidence is that the MD5 hash algorithm accepts a set of bytes', 'n the EncryptString function, we apply the TripleDES algorithm with a 128 bit key. But first we need to turn the above passphrase (‘Pa5sw0rd’) into a 128 bit key. One useful coincidence is that the MD5 hash algorithm accepts a set of bytes of any length and turns them into a 128 bit hash. So by running the password through the MD5 hashing algorithm we create our key', '2023-09-24'),
(6, 7, 3, 'algorithm accepts a set of bytes', 'coincidence is that the MD5 hash algorithm accepts a set of bytescoincidence is that the MD5 hash algorithm accepts a set of bytescoincidence is that the MD5 hash algorithm accepts a set of bytescoincidence is that the MD5 hash algorithm accepts a set of bytesvcoincidence is that the MD5 hash algorithm accepts a set of bytes', '0000-00-00'),
(7, 7, 2, 'All we do is win', 'The key is used to initialize the TripleDES algorithm. In addition we need to specify that we will only encode something once (CipherMode.ECB) and because its unlikely that our source string fits into a single TripleDES block we need to specify how we wan', '0000-00-00'),
(8, 7, 3, 'The key is used to initialize the T', 'ripleDES algorithm. In addition we need to specify that we will only encode something once (CipherMode.ECB) and because its unlikely that our source string fits into a single TripleDES block we need to specify how we wan', '2023-09-11'),
(9, 8, 2, 'All we do is win , No matter what', 'More The DESC command is used to sort the data returned in descending order.\r\n\r\nThe following SQL statement selects all the columns from the \"Customers\" table, sorted descending by the \"CustomerName\" column:', '2023-09-08'),
(10, 8, 3, 'James Me', 'The DESC command is used to sort the data returned in descending order.\r\n\r\nThe following SQL statement selects all the columns from the \"Customers\" table, sorted descending by the \"CustomerName\" column:The DESC command is used to sort the data returned in descending order.\r\n\r\nThe following SQL statement selects all the columns from the \"Customers\" table, sorted descending by the \"CustomerName\" column:', '2015-12-02'),
(11, 1, 2, 'Title enter', 'peterparker@mail.com', '2023-09-09'),
(19, 2, 0, 'Your best needs some improvement', 'The best you can be is to make a difference ok. Keep it up', '2023-09-09'),
(20, 2, 0, 'You can do better', 'Academic reports are used to present and discuss the results of an experiment, survey, or other research method. These reports often require a specific layout and the inclusion of a certain set of sections.', '2023-09-09'),
(21, 2, 0, 'You can do better', 'Academic reports are used to present and discuss the results of an experiment, survey, or other research method. These reports often require a specific layout and the inclusion of a certain set of sections.', '2023-09-09'),
(22, 5, 0, 'The best report about you', 'This is some report about the guy guy', '2023-09-10'),
(23, 1, 0, 'The results section should always be written in the past tense. A section describing results [a.k.a., \"findings\"] is particularly necessary if your paper includes data generated from your own research.', 'The results section of the research paper is where you report the findings of your study based upon the information gathered as a result of the methodology [or methodologies] you applied. The results section should simply state the findings, without bias or interpretation, and arranged in a logical sequence. The results section should always be written in the past tense. A section describing results [a.k.a., \"findings\"] is particularly necessary if your paper includes data generated from your own research.', '2023-09-10'),
(25, 1, 0, 'All ido is win win nommater what', 'You could do this.You could do this.You could do this.You could do this.You could do this.You could do this.You could do this.vYou could do this.You could do this.vvvvvYou could do this.You could do this.You could do this.You could do this.vvvvvYou could do this.You could do this.vvvvvYou could do this.You could do this.You could do this.You could do this.You could do this.You could do this.You could do this.You could do this.vYou could do this.You could do this.', '2023-09-10'),
(26, 19, 0, 'A report', 'A session creates a file in a temporary directory on the server where registered session variables and their values are stored.', '2023-09-11'),
(27, 19, 0, 'A report', 'A session creates a file in a temporary directory on the server where registered session variables and their values are stored.', '2023-09-11'),
(28, 17, 0, 'Records Here', '<p>this……………</p>', '2023-09-11'),
(30, 17, 0, 'The next record', '<figure class=\"table\"><table><tbody><tr><td>Item</td><td>Cost</td><td>Day</td></tr><tr><td>Bag</td><td>200</td><td>thurday</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(31, 17, 0, '1st semester Score Card', '<figure class=\"table\"><table><tbody><tr><td>Courses</td><td>Score</td><td>Grade</td></tr><tr><td>Data Science</td><td>70</td><td>B</td></tr><tr><td>Algorithm and Programming</td><td>90</td><td>A</td></tr><tr><td>Maths</td><td>90</td><td>A</td></tr><tr><td><strong>Total Score</strong></td><td>250/300</td><td><p>&nbsp;</p><p>Overal Grade : A</p></td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(32, 17, 0, '2nd Semester 2023', '<figure class=\"table\"><table><tbody><tr><td>Courses</td><td>Score</td><td>Grade</td></tr><tr><td>Math</td><td>50</td><td>80</td></tr><tr><td>Economics</td><td>70</td><td>B</td></tr><tr><td>Statistics</td><td>80</td><td>A</td></tr><tr><td>&nbsp;</td><td><strong>Remark : Satisfactory</strong></td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(33, 17, 0, 'Testing record', '<p>testing record………………………………………</p>', '2023-09-11'),
(34, 16, 0, 'Ist Semester 2021', '<figure class=\"table\"><table><tbody><tr><td>Courses</td><td>NA</td><td>Score</td><td>Grade</td><td>Remark</td><td>Postion</td></tr><tr><td>Math</td><td>1</td><td>23</td><td>F</td><td>Fail</td><td>12th/13</td></tr><tr><td>Computer Science</td><td>0</td><td>70</td><td>A</td><td>Credit</td><td>4th/13</td></tr><tr><td>Tourism</td><td>1</td><td>90</td><td>A</td><td>Excellent</td><td>1st/13</td></tr></tbody></table></figure>', '2023-09-11'),
(35, 16, 0, 'Extra Curricula Activity 2021', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(36, 16, 0, 'Extra Curricula Activity 2020', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>80</td><td>A</td></tr><tr><td>Basketball</td><td>50</td><td>P{</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(37, 19, 0, 'Extra curricula Activity 2021', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>20</td><td>F</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(38, 19, 0, 'Records', '<p>Some record</p>', '2023-09-11'),
(39, 19, 0, 'Activity 2021', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(40, 18, 0, 'Some Acitvity Report', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(41, 18, 0, '2022 Report', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(42, 22, 0, 'Activity Records', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11'),
(43, 22, 0, '2002 Activity Records', '<figure class=\"table\"><table><tbody><tr><td>Activity</td><td>Score</td><td>Grade</td></tr><tr><td>Music</td><td>70</td><td>B</td></tr><tr><td>Basketball</td><td>20</td><td>F</td></tr><tr><td>Soccer</td><td>90</td><td>A</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure>', '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(12) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `forename` varchar(55) NOT NULL,
  `DOB` date NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `tutor` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `pdf_file` varchar(200) NOT NULL,
  `time` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `surname`, `forename`, `DOB`, `address`, `phone`, `gender`, `tutor`, `email`, `pdf_file`, `time`) VALUES
(1, 'Rose ', 'Rosely', '2013-09-19', 'James Park', 9035436545, 'female', 'GreatMinds', 'rose@yaoo.com', '', '2023-09-12 22:47:38.0000'),
(3, 'Mark', 'Mary', '2023-09-13', '444 Ikoriodu Road ', 908765, 'Male', 'CreamJex', 'jex@gmail.com', 'dsfsdf', '2023-09-28 17:06:40.0000'),
(5, 'Benson', 'Johnson', '2023-09-14', '4456 James Road', 1222889, 'Male', 'spark', 'Kills', 'All records', '2023-09-14 17:12:53.0000'),
(6, 'Jack', 'Perl', '2013-09-19', 'New Castle', 2203234, 'female', 'GreatMinds', 'perl@yahoo.com', '', '2023-09-12 23:08:06.0000'),
(7, 'Patrick', 'Henry', '2023-09-14', 'Vi Lagos Nigeria', 923245, 'male', 'GreatMinds', 'samme@gmail.com', '', '2023-09-12 23:10:10.0000'),
(8, 'Minnew', 'Rushink', '2015-10-21', '45 jaba Abuja ', 90946546, 'male', 'GreatMinds', 'franl@red.com', '', '2023-09-05 14:34:32.0000'),
(16, 'James', 'James', '2014-05-25', 'James Park Road Luton', 8708789687, 'female', 'Belly Cool', 'Frank@gmail.com', '', '2023-09-10 01:38:49.0000'),
(17, 'Brown', 'Kelly', '2023-09-22', '234 Ikeja Lagos', 134400454, 'male', 'WhoWE', 'Kellyray@yahoo.com', '', '2023-09-10 01:41:19.0000'),
(18, 'James', 'James ', '2023-10-07', 'Redman shape Road', 9088877, 'male', '', 'Joe@gmail.com', '', '2023-09-10 01:45:04.0000'),
(19, 'Musey', 'Brown', '2023-09-03', 'ewrr343', 54534635465, 'female', 'KellyRexs', 'Hank@gmauil.com', '', '2023-09-10 02:07:31.0000'),
(20, 'Mike', 'Sandra', '2023-09-08', '34 Leads way', 8089789786, 'I prefer not to say', 'Sparkers', 'sandra@nfo.com', '', '2023-09-11 02:23:54.0000'),
(21, 'Jackson', 'Henry', '2004-03-03', '', 9987965, 'female', '', 'fally@gmail.com', '', '2023-09-11 02:25:36.0000'),
(22, 'Fan', 'Can', '1997-09-11', '22 billings way', 12223243, 'male', 'Sparkers', 'Jammy@gmail.com', '', '2023-09-11 02:27:05.0000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `username`, `name`) VALUES
(1, 'sylvic88', 'sylvoee', 'James Muller'),
(3, 'james1234', 'james@doe', 'James Doe'),
(5, 'leeman1234', 'leemanpro', 'Leeman Doe'),
(7, 'leeman1234', 'leemnapro', 'Leeman Doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report_tbl`
--
ALTER TABLE `report_tbl`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report_tbl`
--
ALTER TABLE `report_tbl`
  MODIFY `report_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
