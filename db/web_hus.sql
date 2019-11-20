-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 03:50 PM
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
-- Table structure for table `intern_ability_dictionary`
--

CREATE TABLE `intern_ability_dictionary` (
  `id` int(11) UNSIGNED NOT NULL,
  `ability_name` varchar(255) NOT NULL,
  `ability_type` varchar(255) NOT NULL,
  `ability_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_ability_dictionary`
--

INSERT INTO `intern_ability_dictionary` (`id`, `ability_name`, `ability_type`, `ability_note`) VALUES
(1, 'PHP', 'Ngôn ngữ lập trình', '1...10'),
(2, 'Java', 'Ngôn ngữ lập trình', '1...10'),
(3, 'HTML', 'Ngôn ngữ lập trình', '1...10'),
(4, 'CSS', 'Ngôn ngữ lập trình', '1...10'),
(5, 'JavaScript', 'Ngôn ngữ lập trình', '1...10'),
(6, 'C/C++', 'Ngôn ngữ lập trình', '1...10'),
(7, 'Python', 'Ngôn ngữ lập trình', '1...10'),
(8, 'MySQL', 'Ngôn ngữ lập trình', '1...10'),
(9, 'NodeJS', 'Ngôn ngữ lập trình', '1...10'),
(10, 'Trí tuệ nhân tạo', 'Môn học CNTT', '1...10'),
(11, 'Thiết kế đánh giá thuật toán', 'Môn học CNTT', '1...10'),
(12, 'Giải tích', 'Môn học CNTT', '1...10'),
(13, 'Mạng máy tính', 'Môn học CNTT', '1...10'),
(14, 'TOEIC', 'Chứng chỉ ngoại ngữ', '0...990'),
(15, 'IELTS', 'Chứng chỉ ngoại ngữ', '0,0...9,0');

-- --------------------------------------------------------

--
-- Table structure for table `intern_ability_students`
--

CREATE TABLE `intern_ability_students` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) UNSIGNED NOT NULL,
  `ability_id` int(11) UNSIGNED NOT NULL,
  `ability_rate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_ability_students`
--

INSERT INTO `intern_ability_students` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(1, 2, 4, 1),
(2, 1, 2, 1),
(3, 5, 1, 2),
(4, 3, 8, 3),
(5, 2, 5, 2),
(6, 3, 10, 3),
(7, 6, 6, 2),
(8, 8, 5, 1),
(9, 10, 9, 2),
(10, 7, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_profile`
--

CREATE TABLE `intern_organization_profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `employee_count` int(11) NOT NULL,
  `gross_revenue` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `home_page` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `tax_number` varchar(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_profile`
--

INSERT INTO `intern_organization_profile` (`id`, `organization_name`, `employee_count`, `gross_revenue`, `address`, `home_page`, `logo`, `tax_number`, `description`) VALUES
(1, 'Công ty cổ phần abc', 40, 200000, 'Nguyễn Trãi', 'www.abc.com', NULL, 'st8u82nfs', 'Công ty chuyên về thương mại điện tử'),
(2, 'Công ty 4D', 45, 3000000, 'Nguyễn Tuân', 'www.4d.com', NULL, '42rjs9111', 'IT-Phần cứng/Mạng, Điện/Điện tử, In ấn/Xuất bản'),
(3, 'Công nghệ giải pháp Simax', 30, 1500000, 'Dương Đình Nghệ', 'www.simax.com', NULL, 's1235322', 'IT-Phần mềm'),
(4, 'FSOFT', 200, 5000000, 'Cầu Giấy', 'www.fsoft.com', NULL, '43511fsw', NULL),
(5, 'FPTS', 250, 4500000, 'Hà Nội', 'www.fpts.com', NULL, '31djqt9p', 'IT-Phần mềm, IT-Phần cứng/Mạng'),
(6, 'Công ty FSS', 50, 100000, 'Hà Đông', 'www.fss.com', NULL, 'tu832021', NULL),
(7, 'Công ty Linix', 50, 500000, 'Duy Tân', 'www.linix.com', NULL, '56tt12jhp', 'IT-Phần mềm'),
(8, 'Beetfoft', 100, 600000, 'Dương Đình Nghệ', 'www.beetsoft.com', NULL, '589hk19q', NULL),
(9, 'Công ty 2nf', 70, 195000, 'Cầu Giấy', 'www.2nf.com', NULL, '990urwo1', NULL),
(10, 'Công ty Green', 90, 8000000, 'Nguyễn Trãi', 'www.green.com', NULL, '8402jfsq5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_requests`
--

CREATE TABLE `intern_organization_requests` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_id` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `amount` int(255) UNSIGNED NOT NULL,
  `salary` int(11) NOT NULL,
  `date_submitted` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_requests`
--

INSERT INTO `intern_organization_requests` (`id`, `organization_id`, `position`, `amount`, `salary`, `date_submitted`, `status`) VALUES
(1, 1, 'Thực tập Java', 3, 2000000, '2019-10-23', 1000),
(3, 2, 'Thực tập PHP', 2, 5000000, '2019-10-18', 3000),
(4, 6, 'Dev PHP', 2, 10000000, '2019-10-20', 2000),
(5, 5, 'Tester', 5, 1500000, '2019-10-20', 4000),
(6, 9, 'Dev Java', 10, 450000, '2019-10-19', 5000),
(7, 10, 'Dev Mobile', 1, 8000000, '2019-10-16', 1000),
(8, 8, 'Thực tập Mobile', 2, 3000000, '2019-10-21', 3000),
(9, 4, 'Tester', 1, 7000000, '2019-10-13', 3000),
(10, 1, 'Thực tập IOS', 2, 4000000, '2019-11-05', 4000),
(11, 2, 'Dev .Net', 3, 15000000, '2019-10-17', 2000),
(12, 1, 'Tester', 4, 7500000, '2019-11-11', 3000),
(13, 6, 'Tester', 2, 5000000, '2019-10-30', 1000),
(14, 6, 'Thực tập Java', 2, 2500000, '2019-09-25', 5000),
(15, 5, 'Thực tập PHP', 1, 15000000, '2019-11-09', 4000),
(16, 2, 'Thực tập .Net', 2, 3500000, '2019-10-27', 2000),
(17, 5, 'Thực tập mobile', 1, 2000000, '2019-11-01', 3000),
(18, 8, 'Dev Java', 1, 12000000, '2019-10-21', 5000),
(19, 4, 'Thực tập C/C++', 3, 27000000, '2019-11-05', 4000),
(20, 4, 'Thực tập front-end', 2, 2300000, '2019-11-03', 2000),
(21, 10, 'Tester', 1, 9000000, '2019-10-27', 3000),
(22, 9, 'Thực tập front-end', 3, 3000000, '2019-09-25', 5000),
(23, 9, 'Dev C#', 1, 14000000, '2019-11-11', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_request_abilities`
--

CREATE TABLE `intern_organization_request_abilities` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_request_id` int(11) UNSIGNED NOT NULL,
  `ability_id` int(11) UNSIGNED NOT NULL,
  `ability_required` int(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_request_abilities`
--

INSERT INTO `intern_organization_request_abilities` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(1, 3, 2, 2, '2 năm kinh nghiệm'),
(2, 1, 3, 1, NULL),
(3, 5, 8, 3, 'Đã từng đi thực tập'),
(4, 4, 5, 1, NULL),
(5, 6, 7, 3, NULL),
(6, 9, 6, 2, '1 năm kinh nghiệm'),
(7, 8, 10, 2, NULL),
(8, 7, 9, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_request_assignment`
--

CREATE TABLE `intern_organization_request_assignment` (
  `id` int(11) UNSIGNED NOT NULL,
  `organization_request_id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_request_assignment`
--

INSERT INTO `intern_organization_request_assignment` (`id`, `organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(1, 3, 2, '2019-07-01', '2019-10-01', 2, '0000-00-00 00:00:00'),
(2, 1, 3, '2019-10-01', '2019-12-01', 0, '0000-00-00 00:00:00'),
(3, 4, 1, '2019-09-01', '2019-12-01', 1, '0000-00-00 00:00:00'),
(4, 5, 4, '2019-11-01', '2020-01-15', 1, '0000-00-00 00:00:00'),
(5, 7, 10, '2019-08-01', '2019-10-01', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `intern_students`
--

CREATE TABLE `intern_students` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `join_date` date NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_students`
--

INSERT INTO `intern_students` (`id`, `student_code`, `full_name`, `gender`, `date_of_birth`, `join_date`, `class_name`) VALUES
(1, 's001', 'Nguyễn Văn An', '', '1998-07-16', '2016-09-01', 'k61a3'),
(2, 's002', 'Trần Trung Thắng', '', '1998-09-10', '2016-09-02', 'k61a3'),
(3, 's003', 'Nguyễn Thu Hường', '', '1998-10-15', '2016-09-02', 'k61a2'),
(4, 's004', 'Hà Anh Tuấn', '', '1997-03-19', '2016-09-02', 'k61a4'),
(5, 's005', 'Vũ Quang Đạo', '', '1999-12-14', '2017-09-01', 'k61a2'),
(6, 's006', 'Hoàng Thị Hiền', '', '1997-01-25', '2015-09-05', 'k61a3'),
(7, 's007', 'Đoàn Thanh Vân', '', '1999-06-10', '2017-09-02', 'k61a1'),
(8, 's008', 'Lê Thạch Thảo', '', '1998-05-20', '2016-09-05', 'k61a1'),
(9, 's009', 'Hoàng Trung Hiếu', '', '1997-05-02', '2015-09-19', 'k613'),
(10, 's010', 'Phạm Thị Linh', '', '1997-03-28', '2015-09-20', 'k61a4');

-- --------------------------------------------------------

--
-- Table structure for table `intern_student_register`
--

CREATE TABLE `intern_student_register` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) UNSIGNED NOT NULL,
  `request_id` int(11) UNSIGNED NOT NULL,
  `submit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_student_register`
--

INSERT INTO `intern_student_register` (`id`, `student_id`, `request_id`, `submit_date`) VALUES
(1, 1, 4, '2019-10-01'),
(2, 3, 5, '2019-10-21'),
(3, 7, 1, '2019-10-17'),
(4, 6, 4, '2019-10-15'),
(5, 3, 7, '2019-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `intern_teachers`
--

CREATE TABLE `intern_teachers` (
  `id` int(11) UNSIGNED NOT NULL,
  `teacher_code` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_teachers`
--

INSERT INTO `intern_teachers` (`id`, `teacher_code`, `full_name`, `gender`) VALUES
(1, 'T0001', 'Hà Minh Tuấn', 1),
(2, 'T0002', 'Trần Quốc Cường', 1),
(3, 'T0003', 'Bùi Hồng Vân', 2),
(4, 'T0004', 'Hoàng Văn Thông', 1),
(5, 'T0005', 'Cao Bá Quát', 2),
(6, 'T0006', 'Trần Ngọc Linh', 2),
(7, 'T0007', 'Nguyễn Chi Phương', 1),
(8, 'T0008', 'Vũ Văn Lâm', 1),
(9, 'T0009', 'Lê Thanh Hiền', 2),
(10, 'T0010', 'Đoàn Hồng Khánh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern_ability_dictionary`
--
ALTER TABLE `intern_ability_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern_ability_students`
--
ALTER TABLE `intern_ability_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ability_id_fk` (`ability_id`),
  ADD KEY `student_id_fk1` (`student_id`);

--
-- Indexes for table `intern_organization_profile`
--
ALTER TABLE `intern_organization_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern_organization_requests`
--
ALTER TABLE `intern_organization_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_id_fk` (`organization_id`);

--
-- Indexes for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_request_id_fk` (`organization_request_id`),
  ADD KEY `ability_id_fk2` (`ability_id`);

--
-- Indexes for table `intern_organization_request_assignment`
--
ALTER TABLE `intern_organization_request_assignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_request_id_fk1` (`organization_request_id`),
  ADD KEY `student_id_fk3` (`student_id`);

--
-- Indexes for table `intern_students`
--
ALTER TABLE `intern_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_code` (`student_code`);

--
-- Indexes for table `intern_student_register`
--
ALTER TABLE `intern_student_register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_fk2` (`student_id`),
  ADD KEY `request_id_fk` (`request_id`);

--
-- Indexes for table `intern_teachers`
--
ALTER TABLE `intern_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern_ability_dictionary`
--
ALTER TABLE `intern_ability_dictionary`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `intern_ability_students`
--
ALTER TABLE `intern_ability_students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `intern_organization_profile`
--
ALTER TABLE `intern_organization_profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `intern_organization_requests`
--
ALTER TABLE `intern_organization_requests`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `intern_organization_request_assignment`
--
ALTER TABLE `intern_organization_request_assignment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intern_students`
--
ALTER TABLE `intern_students`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `intern_student_register`
--
ALTER TABLE `intern_student_register`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intern_teachers`
--
ALTER TABLE `intern_teachers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `intern_ability_students`
--
ALTER TABLE `intern_ability_students`
  ADD CONSTRAINT `ability_id_fk` FOREIGN KEY (`ability_id`) REFERENCES `intern_ability_dictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id_fk1` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intern_organization_requests`
--
ALTER TABLE `intern_organization_requests`
  ADD CONSTRAINT `organization_id_fk` FOREIGN KEY (`organization_id`) REFERENCES `intern_organization_profile` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  ADD CONSTRAINT `ability_id_fk2` FOREIGN KEY (`ability_id`) REFERENCES `intern_ability_dictionary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organization_request_id_fk` FOREIGN KEY (`organization_request_id`) REFERENCES `intern_organization_requests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intern_organization_request_assignment`
--
ALTER TABLE `intern_organization_request_assignment`
  ADD CONSTRAINT `organization_request_id_fk1` FOREIGN KEY (`organization_request_id`) REFERENCES `intern_organization_requests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id_fk3` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `intern_student_register`
--
ALTER TABLE `intern_student_register`
  ADD CONSTRAINT `request_id_fk` FOREIGN KEY (`request_id`) REFERENCES `intern_organization_requests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id_fk2` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
