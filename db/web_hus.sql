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
-- Table structure for table `intern_ability_dictionary`
--

CREATE TABLE `intern_ability_dictionary` (
  `id` int(6) NOT NULL,
  `ability_name` varchar(250) NOT NULL,
  `ability_type` varchar(250) NOT NULL,
  `ability_note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_ability_dictionary`
--

INSERT INTO `intern_ability_dictionary` (`id`, `ability_name`, `ability_type`, `ability_note`) VALUES
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
(13, 'Cấu trúc dữ liệu', 'Môn học CNTT', '10'),
(14, 'Trí tuệ nhân tạo', 'Môn học CNTT', '10'),
(15, 'Mạng máy tính', 'Môn học CNTT', '10'),
(16, 'Lập trình hướng đối tượng', 'Môn học CNTT', '10'),
(17, 'Thiết kế đánh giá thuật toán', 'Môn học CNTT', '10'),
(18, 'TOEIC', 'Chứng chỉ ngoại ngữ', '990'),
(19, 'IELTS', 'Chứng chỉ ngoại ngữ', '9.0'),
(20, 'JLPT', 'Chứng chỉ ngoại ngữ', '180');

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_request_assignment`
--

CREATE TABLE `intern_organization_request_assignment` (
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `status` int(40) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_request_assignment`
--

INSERT INTO `intern_organization_request_assignment` (`organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(2, 1, '2019-07-12', '2019-12-10', 2, '2019-07-06'),
(7, 2, '2019-12-25', '2020-04-20', 0, '2019-12-18'),
(5, 3, '2019-07-08', '2019-12-15', 2, '2019-07-07'),
(8, 4, '2019-07-15', '2019-04-20', 2, '2019-07-10'),
(2, 5, '2019-08-20', '2019-12-06', 2, '2019-08-06'),
(4, 6, '2019-12-15', '2019-04-20', 1, '2019-12-10'),
(5, 7, '2019-12-10', '2019-04-20', 1, '2019-12-06'),
(2, 8, '2019-12-14', '2019-04-20', 1, '2019-12-09'),
(1, 9, '2019-08-18', '2019-12-26', 2, '2019-08-12'),
(9, 10, '2019-12-28', '2020-04-20', 0, '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_profile`
--

CREATE TABLE `intern_organization_profile` (
  `id` int(11) NOT NULL,
  `organization_name` varchar(20) NOT NULL,
  `employee_count` int(11) NOT NULL,
  `gross_revenue` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `tax_number` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_profile`
--

INSERT INTO `intern_organization_profile` (`id`, `organization_name`, `employee_count`, `gross_revenue`, `address`, `url`, `tax_number`, `description`, `avatar`, `password`) VALUES
(1, 'Sun*', 1500, 1000, 'Nam Từ Liêm, Hà Nội', 'https://sun-asterisk.com', 10011, 'Make awesome things that matter.', 'sun.jpg', '123456'),
(2, 'RikkeiSoft', 700, 550, 'Nam Từ Liêm, Hà Nội', 'https://rikkeisoft.com', 10012, 'Lorem ipsum dolor sit amet.', 'rikkeisoft.png', '123456'),
(3, 'FPT Software', 1870, 720, 'Hòa Lạc, Hà Nội', 'https://www.fpt-software.com/', 10013, 'Lorem ipsum dolor sit amet.', 'fsoft.png', '123456'),
(4, 'FPT Telecom', 550, 420, 'Cầu Giấy, Hà Nội', 'https://www.fpt.vn/', 10014, 'Lorem ipsum dolor sit amet.', 'ftel.jpg', '123456'),
(5, '2NF', 320, 350, 'Cầu Giấy, Hà Nội', 'http://2nf.com.vn/', 10015, 'Lorem ipsum dolor sit amet.', '2nf.png', '123456'),
(6, 'Beetsoft', 500, 620, 'Nam Từ Liêm, Hà Nội', 'https://beetsoft.com.vn', 10016, 'Lorem ipsum dolor sit amet.', 'beetsoft.png', '123456'),
(7, 'FSS', 440, 540, 'Cầu Giấy, Hà Nội', 'https://fss.com.vn/', 10017, 'Lorem ipsum dolor sit amet.', 'fss.jpg', '123456'),
(8, 'Nashtech', 700, 500, 'Cầu Giấy, Hà Nội', 'https://www.nashtechglobal.com/', 10018, 'Lorem ipsum dolor sit amet.', 'nashtech.png', '123456'),
(9, 'SmartOSC', 660, 470, 'Nam Từ Liêm, Hà Nội', 'http://www.smartosc.com/', 10019, 'Lorem ipsum dolor sit amet.', 'smartosc.png', '123456'),
(10, 'FPT Information System', 870, 620, 'Nam Từ Liêm, Hà Nội', 'https://www.fis.vn/', 10020, 'Lorem ipsum dolor sit amet.', 'fis.jpg', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_requests`
--

CREATE TABLE `intern_organization_requests` (
  `id` int(5) NOT NULL,
  `request_name` varchar(250) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_requests`
--

INSERT INTO `intern_organization_requests` (`id`, `request_name`, `organization_id`, `description`, `amount`, `date_submitted`, `status`) VALUES
(1, 'Ruby Developer', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 1, '2019-11-12', 4000),
(2, 'Senior Android Developer', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 1, '2019-11-12', 4000),
(3, 'QC Leader', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 1, '2019-11-15', 4000),
(4, 'Java Developer', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 5, '2019-11-19', 1000),
(5, 'Frontend ReactJS, VueJS', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 12, '2019-11-19', 2000),
(6, 'Java Internship', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 7, '2019-11-19', 3000),
(7, 'Swift Developer', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 8, '2019-11-20', 4000),
(8, 'Senior iOS Developer', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 4, '2019-11-23', 3000),
(9, 'Tester', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 9, '2019-11-25', 2000),
(10, 'Senior Business Analyst', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque. Nullam placerat massa et lorem consectetur aliquam. Nulla quis tempor felis, eu gravida ipsum. Etiam varius, felis et dapibus scelerisque, mi odio accumsan ex, a tincidunt arcu leo a nisi.', 4, '2019-11-25', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `intern_organization_request_abilities`
--

CREATE TABLE `intern_organization_request_abilities` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(5) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` int(11) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_request_abilities`
--

INSERT INTO `intern_organization_request_abilities` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
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
-- Table structure for table `intern_students`
--

CREATE TABLE `intern_students` (
  `id` int(11) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `join_date` date NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_students`
--

INSERT INTO `intern_students` (`id`, `student_code`, `name`, `date_of_birth`, `join_date`, `class_name`, `avatar`, `password`) VALUES
(1, 's001', 'XuanPhuc', '1999-12-11', '2019-11-15', 'k61a3', 'blank_avatar.jpg', '123456'),
(2, 's002', 'user2', '2001-02-02', '2019-12-03', 'k63a2', 'blank_avatar.jpg', '123456'),
(3, 's003', 'user3', '1998-11-28', '2019-12-01', 'k61a2', 'blank_avatar.jpg', '123456'),
(4, 's004', 'user4', '1996-07-09', '2019-12-02', 'k62a3', 'blank_avatar.jpg', '123456'),
(5, 's005', 'user5', '1995-02-05', '2019-12-02', 'k59a5', 'blank_avatar.jpg', '123456'),
(6, 's006', 'user6', '1996-04-07', '2019-12-02', 'k61a3', 'blank_avatar.jpg', '123456'),
(7, 's007', 'user7', '1999-11-19', '2019-12-02', 'k63a3', 'blank_avatar.jpg', '123456'),
(8, 's008', 'user8', '2000-13-06', '2019-12-02', 'k62a3', 'blank_avatar.jpg', '123456'),
(9, 's009', 'user9', '1999-01-09', '2019-12-02', 'k62a1', 'blank_avatar.jpg', '123456'),
(10, 's0010', 'user10', '1997-05-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `intern_student_register`
--

CREATE TABLE `intern_student_register` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `submit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `request_id` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_student_register`
--

INSERT INTO `intern_student_register` (`id`, `student_id`, `request_id`, `submit_date`) VALUES
(1, 4, 8, '2019-12-12'),
(2, 2, 3, '2019-12-14'),
(3, 5, 2, '2019-12-17'),
(4, 3, 7, '2019-12-20'),
(5, 8, 5, '2019-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `intern_student_ability`
--

CREATE TABLE `intern_student_ability` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_student_ability`
--

INSERT INTO `intern_student_ability` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(1, 1, 6, 5),
(2, 1, 9, 5),
(3, 2, 3, 5),
(4, 2, 4, 6),
(5, 2, 8, 5),
(6, 6, 7, 5),
(7, 6, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `intern_teachers`
--

CREATE TABLE `intern_teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `teacher_code` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `date_of_birth` date NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_teachers`
--

INSERT INTO `intern_teachers` (`id`, `name`, `teacher_code`, `sex`, `date_of_birth`, `avatar`, `password`) VALUES
(1, 'Vũ Trịnh Hà Minh', 't001', 'Nữ', '1989-07-15', 'blank_avatar.jpg', '123456'),
(2, 'Hoàng Thị Hiền', 't002', 'Nữ', '1990-12-11', 'blank_avatar.jpg', '123456'),
(3, 'Nguyễn Thị Phương', 't003', 'Nữ', '1989-02-11', 'blank_avatar.jpg', '123456'),
(4, 'Đoàn Thanh Vân', 't004', 'Nữ', '1990-11-19', 'blank_avatar.jpg', '123456'),
(5, 'Nguyễn Văn Toản', 't005', 'Nam', '1992-10-14', 'blank_avatar.jpg', '123456'),
(6, 'Đoàn Thanh Vân', 't006', 'Nữ', '1977-03-15', 'blank_avatar.jpg', '123456'),
(7, 'Vũ Quang Tùng', 't007', 'Nam', '1984-06-24', 'blank_avatar.jpg', '123456'),
(8, 'Nguyễn Tá Tuấn', 't008', 'Nam', '1975-07-15', 'blank_avatar.jpg', '123456'),
(9, 'Đoàn Thanh Vân', 't009', 'Nữ', '1981-10-17', 'blank_avatar.jpg', '123456'),
(10, 'Đỗ Minh Duyên', 't0010', 'Nữ', '1967-04-22', 'blank_avatar.jpg', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern_ability_dictionary`
--
ALTER TABLE `intern_ability_dictionary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern_organization_request_assignment`
--
ALTER TABLE `intern_organization_request_assignment`
  ADD PRIMARY KEY (`student_id`,`organization_request_id`);

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
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`ability_id`),
  ADD KEY `FK_assigned_list` (`organization_request_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Indexes for table `intern_students`
--
ALTER TABLE `intern_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern_student_ability`
--
ALTER TABLE `intern_student_ability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `ability_id` (`ability_id`);

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `intern_organization_profile`
--
ALTER TABLE `intern_organization_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `intern_organization_requests`
--
ALTER TABLE `intern_organization_requests`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `intern_students`
--
ALTER TABLE `intern_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `intern_students`
--
ALTER TABLE `intern_student_ability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `intern_teachers`
--
ALTER TABLE `intern_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `intern_student_register`
--
ALTER TABLE `intern_student_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `intern_organization_requests`
--
ALTER TABLE `intern_organization_requests`
  ADD CONSTRAINT `company_organization_FK` FOREIGN KEY (`organization_id`) REFERENCES `intern_organization_profile` (`id`);

--
-- Constraints for table `intern_organization_request_abilities`
--
ALTER TABLE `intern_organization_request_abilities`
  ADD CONSTRAINT `intern_organization_request_abilities_ibfk_1` FOREIGN KEY (`ability_id`) REFERENCES `intern_ability_dictionary` (`id`),
  ADD CONSTRAINT `intern_organization_request_abilities_ibfk_2` FOREIGN KEY (`organization_request_id`) REFERENCES `intern_organization_requests` (`id`);

--
-- Constraints for table `intern_student_register`
--
ALTER TABLE `intern_student_register`
  ADD CONSTRAINT `intern_student_register_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `intern_organization_requests` (`id`),
  ADD CONSTRAINT `intern_student_register_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`id`);

--
-- Constraints for table `intern_student_ability`
--
ALTER TABLE `intern_student_ability`
  ADD CONSTRAINT `FK_student_skill_capacity` FOREIGN KEY (`ability_id`) REFERENCES `intern_ability_dictionary` (`id`),
  ADD CONSTRAINT `FK_intern_student_ability` FOREIGN KEY (`student_id`) REFERENCES `intern_students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
