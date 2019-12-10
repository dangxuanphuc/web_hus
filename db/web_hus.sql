-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 11:28 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_hus`
--

-- --------------------------------------------------------

--
-- Table structure for table `ablity_dictionary`
--

CREATE TABLE `ablity_dictionary` (
  `id` int(6) NOT NULL,
  `ablity_name` varchar(250) NOT NULL,
  `ablity_type` varchar(250) NOT NULL,
  `ablity_note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ablity_dictionary`
--

INSERT INTO `ablity_dictionary` (`id`, `ablity_name`, `ablity_type`, `ablity_note`) VALUES
(1, 'RUBY', 'Ngôn ngữ lập trình', '10'),
(2, 'JAVA', 'Ngôn ngữ lập trình', '10'),
(3, 'C#', 'Ngôn ngữ lập trình', '10'),
(4, 'C/C++', 'Ngôn ngữ lập trình', '10'),
(5, 'JavaScript', 'Ngôn ngữ lập trình', '10'),
(6, 'PYTHON', 'Ngôn ngữ lập trình', '10'),
(7, 'PHP', 'Ngôn ngữ lập trình', '10'),
(8, 'SWIFT', 'Ngôn ngữ lập trình', '10'),
(9, 'GOLANG', 'Ngôn ngữ lập trình', '10'),
(10, 'MYSQL', 'Hệ quản trị cơ sở dữ liệu', '10'),
(11, 'SQL', 'Hệ quản trị cơ sở dữ liệu', '10'),
(12, 'NodeJS', 'Ngôn ngữ lập trình', '10'),
(13, 'Cấu trúc dữ liệu', 'Môn hoc CNTT', '10'),
(14, 'Trí tuệ nhân tạo', 'Môn hoc CNTT', '10'),
(15, 'Mạng máy tính', 'Môn hoc CNTT', '10'),
(16, 'Lập trình hướng đối tượng', 'Môn hoc CNTT', '10'),
(17, 'Thiết kế đánh giá thuật toán', 'Môn hoc CNTT', '10'),
(18, 'TOEIC', 'Chứng chỉ ngoại ngữ', '990'),
(19, 'IELTS', 'Chứng chỉ ngoại ngữ', '9.0'),
(20, 'JLPT', 'Chứng chỉ ngoại ngữ', '180');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_table`
--

CREATE TABLE `assigned_table` (
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `status` int(40) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_table`
--

INSERT INTO `assigned_table` (`organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(5, 0, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(5, 1, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(0, 2, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(5, 4, '2019-11-12', '2102-02-18', 2, '2019-11-05'),
(5, 6, '0000-00-00', '0000-00-00', 1, '0000-00-00'),
(1, 7, '2019-11-12', '2019-11-13', 0, '2019-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `enterprise_profile`
--

CREATE TABLE `enterprise_profile` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(20) NOT NULL,
  `employee_count` int(11) NOT NULL,
  `gross_revenue` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `home_page` varchar(200) NOT NULL,
  `tax_number` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `avatar` varchar(15) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterprise_profile`
--

INSERT INTO `enterprise_profile` (`id`, `organization_name`, `employee_count`, `gross_revenue`, `address`, `home_page`, `tax_number`, `description`, `avatar`, `password`) VALUES
(1, 'Sun*', 1500, 1000, 'Keangnam, Hanoi', 'https://sun-asterisk.com', 10021, 'Make awesome things that matter.', 'sun*.png', '123456'),
(2, 'RikkeiSoft', 700, 550, 'SongDa Tower, Hanoi', 'https://rikkeisoft.com', 10034, 'Lorem ipsum dolor sit amet.', 'rikkei.png', '123456'),
(3, 'FPT Software', 1870, 720, 'Hoa Lac, Hanoi', 'https://www.fpt-software.com/', 10127, 'Lorem ipsum dolor sit amet.', 'fsoft.png', '123456'),
(4, 'FPT Telecom', 550, 420, 'My Dinh, Hanoi', 'https://www.fpt.vn/', 10236, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(5, '2NF', 320, 350, 'My Dinh, Hanoi', 'http://2nf.com.vn/', 10145, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(6, 'Beetsoft', 500, 620, 'My Dinh, Hanoi', 'https://beetsoft.com.vn', 10117, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(7, 'FSS', 440, 540, 'My Dinh, Hanoi', 'https://fss.com.vn/', 10206, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(8, 'Nashtech', 700, 500, 'My Dinh, Hanoi', 'https://www.nashtechglobal.com/', 10256, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(9, 'SmartOSC', 660, 470, 'Handico, Hanoi', 'http://www.smartosc.com/', 10068, 'Lorem ipsum dolor sit amet.', 'fpttele.png', '123456'),
(10, 'FPT Information System', 870, 620, 'Keangnam, Hanoi', 'https://www.fis.vn/', 10115, 'Lorem ipsum dolor sit amet.', 'fis.png', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `enterprise_recruitment_request_form`
--

CREATE TABLE `enterprise_recruitment_request_form` (
  `id` int(5) NOT NULL,
  `request_name` varchar(250) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `short_description` text DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterprise_recruitment_request_form`
--

INSERT INTO `enterprise_recruitment_request_form` (`id`, `request_name`, `organization_id`, `short_description`, `amount`, `date_submitted`, `statuss`) VALUES
(1, 'Ruby Developer', 1, 'Lorem ipsum', 1, '2019-11-12', 4000),
(2, 'Senior Android Developer', 1, 'Lorem ipsum', 1, '2019-11-12', 4000),
(3, 'QC Leader', 1, 'Lorem ipsum', 1, '2019-11-15', 4000),
(4, 'Java Developer', 1, 'Lorem ipsum', 5, '2019-11-19', 1000),
(5, 'Frontend ReactJS, VueJS', 2, 'Lorem ipsum', 12, '2019-11-19', 2000),
(6, 'Java Internship', 4, 'Lorem ipsum', 7, '2019-11-19', 3000),
(7, 'Swift Developer', 7, 'Lorem ipsum', 8, '2019-11-20', 4000),
(8, 'Senior iOS Developer', 3, 'Lorem ipsum', 4, '2019-11-23', 3000),
(9, 'Tester', 3, 'Lorem ipsum', 9, '2019-11-25', 2000),
(10, 'Senior Business Analyst', 4, 'Lorem ipsum', 4, '2019-11-25', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_required_capacity_of_each_request_coupon`
--

CREATE TABLE `list_of_required_capacity_of_each_request_coupon` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(5) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` int(11) NOT NULL,
  `note` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_of_required_capacity_of_each_request_coupon`
--

INSERT INTO `list_of_required_capacity_of_each_request_coupon` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(1, 3, 3, 7, '1 năm kinh nghiệm'),
(2, 5, 4, 8, 'Sinh viên mới tốt nghiệp'),
(3, 4, 4, 2, '2 năm kinh nghiệm'),
(4, 7, 3, 3, '1 năm kinh nghiệm'),
(5, 4, 7, 1, 'Sinh viên mới tốt nghiệp'),
(6, 6, 5, 4, 'Không cần kinh nghiệm'),
(7, 6, 2, 4, '1 năm kinh nghiệm'),
(8, 4, 6, 1, 'Không cần kinh nghiệm'),
(9, 3, 4, 1, 'Sinh viên mới tốt nghiệp'),
(10, 3, 4, 1, 'Sinh viên mới tốt nghiệp');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `id` int(11) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `join_date` date NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `avatar` varchar(15) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`id`, `student_code`, `name`, `date_of_birth`, `join_date`, `class_name`, `avatar`, `password`) VALUES
(1, 's001', 'XuanPhuc', '1999-12-11', '2019-11-15', 'k61a3', 'index.png', '123456'),
(2, 's002', 'user2', '2001-02-02', '2019-12-03', 'k63a2', 'index.png', '123456'),
(3, 's003', 'user3', '1998-11-28', '2019-12-01', 'k61a2', 'index.png', '123456'),
(4, 's004', 'user4', '1996-07-09', '2019-12-02', 'k62a3', 'index.png', '123456'),
(5, 's005', 'user5', '1995-02-05', '2019-12-02', 'k59a5', 'index.png', '123456'),
(6, 's006', 'user6', '1996-04-07', '2019-12-02', 'k61a3', 'index.png', '123456'),
(7, 's007', 'user7', '1999-11-19', '2019-12-02', 'k63a3', 'index.png', '123456'),
(8, 's008', 'user8', '2000-13-06', '2019-12-02', 'k62a3', 'index.png', '123456'),
(9, 's009', 'user9', '1999-01-09', '2019-12-02', 'k62a1', 'index.png', '123456'),
(10, 's0010', 'user10', '1997-05-12', '2019-12-02', 'k62a3', 'index.png', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `submit_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `student_id`, `request_id`, `submit_date`) VALUES
(NULL, 4, 8, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_skill_profile`
--

CREATE TABLE `student_skill_profile` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_skill_profile`
--

INSERT INTO `student_skill_profile` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(0, 1, 6, 5),
(0, 1, 9, 5),
(0, 2, 3, 5),
(0, 2, 4, 6),
(0, 2, 8, 5),
(0, 6, 7, 5),
(0, 6, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `teacher_code` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`id`, `full_name`, `teacher_code`, `sex`, `avatar`, `password`) VALUES
(1, 'Vũ Trịnh Hà Minh', 't001', '1', 'index.png', '123456'),
(2, 'Hoàng Thị Hiền', 't002', '1', 'index.png', '123456'),
(3, 'Nguyễn Thị Phương', 't003', '1', 'index.png', '123456'),
(4, 'Đoàn Thanh Vân', 't004', '1', 'index.png', '123456'),
(5, 'Nguyễn Văn Toản', 't005', '2', 'index.png', '123456'),
(6, 'Đoàn Thanh Vân', 't006', '1', 'index.png', '123456'),
(7, 'Vũ Quang Tùng', 't007', '2', 'index.png', '123456'),
(8, 'Nguyễn Tá Tuấn', 't008', '2', 'index.png', '123456'),
(9, 'Đoàn Thanh Vân', 't009', '1', 'index.png', '123456'),
(10, 'Đỗ Minh Duyên', 't0010', '1', 'index.png', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ablity_dictionary`
--
ALTER TABLE `ablity_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD PRIMARY KEY (`student_id`,`organization_request_id`);

--
-- Indexes for table `enterprise_profile`
--
ALTER TABLE `enterprise_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`ability_id`),
  ADD KEY `FK_assigned_list` (`organization_request_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`,`request_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD PRIMARY KEY (`student_id`,`ability_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Indexes for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ablity_dictionary`
--
ALTER TABLE `ablity_dictionary`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `enterprise_profile`
--
ALTER TABLE `enterprise_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enterprise_recruitment_request_form`
--
ALTER TABLE `enterprise_recruitment_request_form`
  ADD CONSTRAINT `enterprise_organization_FK` FOREIGN KEY (`organization_id`) REFERENCES `enterprise_profile` (`id`);

--
-- Constraints for table `list_of_required_capacity_of_each_request_coupon`
--
ALTER TABLE `list_of_required_capacity_of_each_request_coupon`
  ADD CONSTRAINT `list_of_required_capacity_of_each_request_coupon_ibfk_1` FOREIGN KEY (`ability_id`) REFERENCES `ablity_dictionary` (`id`),
  ADD CONSTRAINT `list_of_required_capacity_of_each_request_coupon_ibfk_2` FOREIGN KEY (`organization_request_id`) REFERENCES `enterprise_recruitment_request_form` (`id`);

--
-- Constraints for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `student_registration_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `enterprise_recruitment_request_form` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student_profile` (`id`);

--
-- Constraints for table `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD CONSTRAINT `FK_student_skill_capacity` FOREIGN KEY (`ability_id`) REFERENCES `ablity_dictionary` (`id`),
  ADD CONSTRAINT `FK_student_skill_profile` FOREIGN KEY (`student_id`) REFERENCES `student_profile` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
