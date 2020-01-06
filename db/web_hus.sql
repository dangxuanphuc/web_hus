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
(1, 'Ruby', 'Ngôn ngữ lập trình', '10'),
(2, 'Java', 'Ngôn ngữ lập trình', '10'),
(3, 'C#', 'Ngôn ngữ lập trình', '10'),
(4, 'C/C++', 'Ngôn ngữ lập trình', '10'),
(5, 'JavaScript', 'Ngôn ngữ lập trình', '10'),
(6, 'Python', 'Ngôn ngữ lập trình', '10'),
(7, 'PHP', 'Ngôn ngữ lập trình', '10'),
(8, 'Swift', 'Ngôn ngữ lập trình', '10'),
(9, 'Golang', 'Ngôn ngữ lập trình', '10'),
(10, 'MySQL', 'Hệ quản trị cơ sở dữ liệu', '10'),
(11, 'SQL Server', 'Hệ quản trị cơ sở dữ liệu', '10'),
(12, 'NodeJS', 'Ngôn ngữ lập trình', '10'),
(13, 'TypeScript', 'Ngôn ngữ lập trình', '10'),
(14, 'Scala', 'Ngôn ngữ lập trình', '10'),
(15, 'Objective-C', 'Ngôn ngữ lập trình', '10'),
(16, 'Prolog', 'Ngôn ngữ lập trình', '10'),
(17, 'Shell', 'Ngôn ngữ lập trình', '10'),
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
(1, 1, '2019-07-12', '2019-12-10', 2, '2019-07-06'),
(2, 2, '2019-12-25', '2020-04-20', 0, '2019-12-18'),
(3, 3, '2019-07-08', '2019-12-15', 2, '2019-07-07'),
(4, 4, '2019-07-15', '2019-04-20', 2, '2019-07-10'),
(5, 5, '2019-07-12', '2019-12-10', 2, '2019-08-06'),
(6, 6, '2019-12-15', '2019-04-20', 1, '2019-12-10'),
(7, 7, '2019-07-08', '2019-12-15', 2, '2019-07-06'),
(8, 8, '2019-07-12', '2019-12-10', 1, '2019-07-09'),
(9, 9, '2019-08-18', '2019-12-26', 2, '2019-08-12'),
(10, 10, '2019-12-28', '2020-04-20', 0, '2019-12-11'),
(11, 11, '2018-07-28', '2019-05-20', 2, '2018-07-11'),
(12, 12, '2019-05-28', '2020-07-15', 1, '2019-05-11'),
(13, 13, '2019-07-28', '2020-03-10', 1, '2019-07-11'),
(14, 14, '2018-12-12', '2019-05-20', 0, '2018-12-11'),
(15, 15, '2019-12-28', '2020-05-20', 2, '2019-12-11');

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
(1, 'FPT Software', 1870, 720, 'Hòa Lạc, Hà Nội', 'https://www.fpt-software.com/', 10011, 'Lorem ipsum dolor sit amet', 'fsoft.png', 'A@123456'),
(2, 'RikkeiSoft', 700, 550, 'Nam Từ Liêm, Hà Nội', 'https://rikkeisoft.com', 10012, 'Lorem ipsum dolor sit amet', 'rikkeisoft.png', 'A@123456'),
(3, 'Sun*', 1500, 1000, 'Nam Từ Liêm, Hà Nội', 'https://sun-asterisk.com', 10013, 'Lorem ipsum dolor sit amet', 'sun.jpg', 'A@123456'),
(4, 'FPT Telecom', 550, 420, 'Cầu Giấy, Hà Nội', 'https://www.fpt.vn/', 10014, 'Lorem ipsum dolor sit amet', 'ftel.jpg', 'A@123456'),
(5, '2NF', 320, 350, 'Cầu Giấy, Hà Nội', 'http://2nf.com.vn/', 10015, 'Lorem ipsum dolor sit amet.', '2nf.png', 'A@123456'),
(6, 'Beetsoft', 500, 620, 'Nam Từ Liêm, Hà Nội', 'https://beetsoft.com.vn', 10016, 'Lorem ipsum dolor sit amet', 'beetsoft.png', 'A@123456'),
(7, 'FSS', 440, 540, 'Cầu Giấy, Hà Nội', 'https://fss.com.vn/', 10017, 'Lorem ipsum dolor sit amet', 'fss.jpg', 'A@123456'),
(8, 'Nashtech', 700, 500, 'Cầu Giấy, Hà Nội', 'https://www.nashtechglobal.com/', 10018, 'Lorem ipsum dolor sit amet', 'nashtech.png', 'A@123456'),
(9, 'SmartOSC', 660, 470, 'Nam Từ Liêm, Hà Nội', 'http://www.smartosc.com/', 10019, 'Lorem ipsum dolor sit amet', 'smartosc.png', 'A@123456'),
(10, 'FPT Information System', 870, 620, 'Nam Từ Liêm, Hà Nội', 'https://www.fis.vn/', 10020, 'Lorem ipsum dolor sit amet', 'fis.jpg', 'A@123456');

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
  `date_submit` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_organization_requests`
--

INSERT INTO `intern_organization_requests` (`id`, `request_name`, `organization_id`, `description`, `amount`, `date_submit`, `status`) VALUES
(1, 'Ruby Developer', 1, 'Lập trình chính trong các dự án gia công phần mềm sử dụng ngôn ngữ Ruby cho khách hàng Nhật Bản. Thực hiện details design, unit test, coding cho các dự án sử dụng ngôn ngữ Ruby. Tham gia vào tất cả các khâu trong quá trình phát triển phần mềm, bao gồm: tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ mới. Phối hợp với các thành viên nhóm dự án khác dưới sự điều phối của Project Manager và tiếp xúc trực tiếp với khách hàng Nhật Bản.', 10, '2019-11-12', 4000),
(2, 'Android Developer', 2, 'Phát triển các dự án nghiên cứu thiết kế phần mềm (firmware) của sản phẩm SmartTV. Thực hiện tích hợp và phát triển FW Android cho các dòng sản phẩm SmartTV. Lập trình phát triển các dự án ứng dụng phần mềm công ty trên nền tảng Android. Lập trình ứng dụng, điều khiển cho các thiết bị SmartTV.', 15, '2019-11-12', 4000),
(3, 'QA Leader', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque.', 10, '2019-11-15', 4000),
(4, 'Java Developer', 4, 'Tùy theo năng lực và nguyện vọng bạn được tham gia vào dự án phù hợp với vai trò developer. Các dự án rất đa dạng: web application, desktop application, batch job, background service,... Bạn sẽ được hướng dẫn để thực hiện các task trong dự án và thể hiện được năng lực phát triển cá nhân.', 5, '2019-11-19', 1000),
(5, 'Frontend ReactJS, VueJS', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius iaculis nulla, at congue felis sollicitudin vel. Nullam dictum cursus dolor a commodo. Quisque quis fermentum dolor. Ut sed metus neque.', 12, '2019-11-19', 2000),
(6, 'Java Internship', 6, 'Lập trình và phát triển ứng dụng web, web service hoặc mobile app. Tham gia nghiên cứu, phát triển và ứng dụng các công nghệ mã nguồn mở vào trong dự án. Kết hợp với các bộ phận liên quan (Sản phẩm, UI/UX, thiết kế, kiểm thử, hệ thống…) để triển khai hoàn thành dự án trên các môi trường. Báo cáo tiến độ và tình trạng công việc cho quản lý dự án.', 7, '2019-11-19', 3000),
(7, 'Swift Developer', 7, 'Tham gia các dự án outsource, khách hàng Nhật Bản, dự án phát triển dịch vụ trên nền tảng iOS. Tham gia các dự án phát triển sản phẩm nội bộ, dự án R&D. Xây dựng các component có khả năng tái sử dụng.', 8, '2019-11-20', 4000),
(8, 'Senior iOS Developer', 8, 'Tham gia các dự án outsource, khách hàng Nhật Bản, dự án phát triển dịch vụ trên nền tảng iOS. Tham gia các dự án phát triển sản phẩm nội bộ, dự án R&D. Xây dựng các component có khả năng tái sử dụng.', 12, '2019-11-23', 3000),
(9, 'Tester', 9, 'Nghiên cứu yêu cầu của khách hàng, nghiên cứu chi tiết yêu cầu về sản phẩm, các tài liệu thiết kế tổng thể, thiết kế database và API... để xác định yêu cầu và đánh giá rủi ro. Lập kế hoạch kiểm thử phần mềm (Test plan). Viết kịch bản kiểm thử phần mềm (Test case). Thực hiện kiểm thử phần mềm trên WEB, APP. Thực hiện báo cáo lỗi của phần mềm lên các công cụ quản lý lỗi (Backlog).', 9, '2019-11-25', 2000),
(10, 'AI', 1, 'Tham gia dự án phát triển Camera thông minh dựa trên phân tích hình ảnh sử dụng các kỹ thuật truyền thống và học máy/học sâu. Tham gia phát triển các Engine nhận dạng.', 10, '2019-11-26', 3000),
(11, 'Blockchain', 10, 'Xây dựng, phát triển Core và các sản phẩm Blockchain trên nền tảng Hyperledger/Etherium. Liên tục cập nhật, update sản phẩm đảm bảo tính ổn định, an toàn của hệ thống.', 10, '2019-11-27', 4000),
(12, 'Ruby on Rails', 9, 'Lập trình chính trong các dự án gia công phần mềm sử dụng ngôn ngữ Ruby cho khách hàng Nhật Bản. Thực hiện details design, unit test, coding cho các dự án sử dụng ngôn ngữ Ruby. Tham gia vào tất cả các khâu trong quá trình phát triển phần mềm, bao gồm: tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ mới. Phối hợp với các thành viên nhóm dự án khác dưới sự điều phối của Project Manager và tiếp xúc trực tiếp với khách hàng Nhật Bản.', 15, '2019-11-27', 3000),
(13, 'Java Developer', 8, 'Tùy theo năng lực và nguyện vọng bạn được tham gia vào dự án phù hợp với vai trò developer. Các dự án rất đa dạng: web application, desktop application, batch job, background service,... Bạn sẽ được hướng dẫn để thực hiện các task trong dự án và thể hiện được năng lực phát triển cá nhân.', 7, '2019-11-28', 4000),
(14, 'Tester', 7, 'Nghiên cứu yêu cầu của khách hàng, nghiên cứu chi tiết yêu cầu về sản phẩm, các tài liệu thiết kế tổng thể, thiết kế database và API... để xác định yêu cầu và đánh giá rủi ro. Lập kế hoạch kiểm thử phần mềm (Test plan). Viết kịch bản kiểm thử phần mềm (Test case). Thực hiện kiểm thử phần mềm trên WEB, APP. Thực hiện báo cáo lỗi của phần mềm lên các công cụ quản lý lỗi (Backlog).', 12, '2019-11-30', 3000),
(15, 'PHP Developer', 6, 'Chịu trách nhiệm nghiên cứu & phát triển các sản phẩm Web sử dụng ngôn ngữ/công nghệ: PHP, JavaScript, MySQL, Redis, Memcached, RabbitMQ, Socket.io, WebRTC, Solr,... Xây dựng bộ JavaScript SDK voice/video call dựa trên WebRTC. Xây dựng các plugin cho: Zendesk, Hubspot, Salesforce, Slack, Zoho,... Nghiên cứu, phát triển Web App với các công nghệ: Vue.js/AngularJS/...', 10, '2019-11-30', 2000),
(16, 'QA Leader', 5, 'Tùy theo năng lực và nguyện vọng bạn được tham gia vào dự án phù hợp với vai trò developer. Các dự án rất đa dạng: web application, desktop application, batch job, background service,... Bạn sẽ được hướng dẫn để thực hiện các task trong dự án và thể hiện được năng lực phát triển cá nhân.', 5, '2019-11-31', 3000),
(17, 'Java Developer', 4, 'Lập trình và phát triển ứng dụng web, web service hoặc mobile app. Tham gia nghiên cứu, phát triển và ứng dụng các công nghệ mã nguồn mở vào trong dự án. Kết hợp với các bộ phận liên quan (Sản phẩm, UI/UX, thiết kế, kiểm thử, hệ thống…) để triển khai hoàn thành dự án trên các môi trường. Báo cáo tiến độ và tình trạng công việc cho quản lý dự án.', 15, '2019-12-03', 1000),
(18, 'Android Developer', 3, 'Phát triển các dự án nghiên cứu thiết kế phần mềm (firmware) của sản phẩm SmartTV. Thực hiện tích hợp và phát triển FW Android cho các dòng sản phẩm SmartTV. Lập trình phát triển các dự án ứng dụng phần mềm công ty trên nền tảng Android. Lập trình ứng dụng, điều khiển cho các thiết bị SmartTV.', 15, '2019-12-05', 3000),
(19, 'PHP Developer', 2, 'Chịu trách nhiệm nghiên cứu & phát triển các sản phẩm Web sử dụng ngôn ngữ/công nghệ: PHP, JavaScript, MySQL, Redis, Memcached, RabbitMQ, Socket.io, WebRTC, Solr,... Xây dựng bộ JavaScript SDK voice/video call dựa trên WebRTC. Xây dựng các plugin cho: Zendesk, Hubspot, Salesforce, Slack, Zoho,... Nghiên cứu, phát triển Web App với các công nghệ: Vue.js/AngularJS/...', 5, '2019-12-05', 1000),
(20, 'Ruby Developer', 1, 'Tùy theo năng lực và nguyện vọng bạn được tham gia vào dự án phù hợp với vai trò developer. Các dự án rất đa dạng: web application, desktop application, batch job, background service,... Bạn sẽ được hướng dẫn để thực hiện các task trong dự án và thể hiện được năng lực phát triển cá nhân.', 15, '2019-12-07', 3000);

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
(1, 1, 2, 6, '1 năm kinh nghiệm'),
(2, 1, 5, 8, 'Sinh viên mới tốt nghiệp'),
(3, 2, 1, 6, '2 năm kinh nghiệm'),
(4, 2, 5, 3, '1 năm kinh nghiệm'),
(5, 2, 16, 6, 'Sinh viên mới tốt nghiệp'),
(6, 6, 6, 4, 'Không cần kinh nghiệm'),
(7, 7, 7, 4, '1 năm kinh nghiệm'),
(8, 8, 8, 5, 'Không cần kinh nghiệm'),
(9, 9, 9, 6, 'Sinh viên mới tốt nghiệp'),
(10, 10, 10, 6, 'Không cần kinh nghiệm'),
(11, 9, 11, 6, 'Sinh viên mới tốt nghiệp'),
(12, 8, 12, 4, '1 năm kinh nghiệm'),
(13, 7, 13, 5, '1 năm kinh nghiệm'),
(14, 6, 14, 4, 'Không cần kinh nghiệm'),
(15, 5, 15, 7, 'Sinh viên mới tốt nghiệp'),
(16, 4, 16, 5, '1 năm kinh nghiệm'),
(17, 3, 17, 7, 'Sinh viên mới tốt nghiệp'),
(18, 2, 18, 4, 'Không cần kinh nghiệm'),
(19, 1, 19, 5, 'Không cần kinh nghiệm'),
(20, 10, 20, 7, '1 năm kinh nghiệm'),
(21, 1, 15, 6, 'Sinh viên mới tốt nghiệp'),
(22, 2, 7, 4, '1 năm kinh nghiệm'),
(23, 3, 9, 6, 'Sinh viên mới tốt nghiệp'),
(24, 4, 6, 6, 'Sinh viên mới tốt nghiệp'),
(25, 5, 2, 5, 'Sinh viên mới tốt nghiệp'),
(26, 6, 1, 6, '1 năm kinh nghiệm'),
(27, 7, 5, 4, '1 năm kinh nghiệm'),
(28, 8, 17, 7, 'Sinh viên mới tốt nghiệp'),
(29, 9, 13, 4, '1 năm kinh nghiệm'),
(30, 10, 19, 6, 'Sinh viên mới tốt nghiệp'),
(31, 1, 10, 8, 'Sinh viên mới tốt nghiệp'),
(32, 2, 20, 6, 'Sinh viên mới tốt nghiệp');

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
(1, 's001', 'Lê Hạ Quân', '1999-12-11', '2019-11-15', 'k61a3', 'blank_avatar.jpg', 'A@123456'),
(2, 's002', 'Kha Thiều Anh', '2001-02-02', '2019-12-03', 'k63a2', 'blank_avatar.jpg', 'A@123456'),
(3, 's003', 'Phạm Lam Yên', '1998-11-28', '2019-12-01', 'k61a2', 'blank_avatar.jpg', 'A@123456'),
(4, 's004', 'Hoàng Vi Nguyên', '1996-07-09', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(5, 's005', 'Nguyễn Thành Long', '1995-02-05', '2019-12-02', 'k59a5', 'blank_avatar.jpg', 'A@123456'),
(6, 's006', 'Vương Mộng Thoa', '1996-04-07', '2019-12-02', 'k61a3', 'blank_avatar.jpg', 'A@123456'),
(7, 's007', 'Lý Giang Khuê', '1999-11-19', '2019-12-02', 'k63a3', 'blank_avatar.jpg', 'A@123456'),
(8, 's008', 'Đoàn Chính Thuần', '2000-13-06', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(9, 's009', 'Hoàng Dung', '1999-01-09', '2019-12-02', 'k62a1', 'blank_avatar.jpg', 'A@123456'),
(10, 's0010', 'Dương Khang', '1996-03-27', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(11, 's0011', 'Trịnh Ðình Quảng', '1999-10-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(12, 's0012', 'Dương Thanh Quang', '1996-05-15', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(13, 's0013', 'Nghiêm Sỹ Ðan', '1997-03-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(14, 's0014', 'Trần Tuấn Khanh', '1995-01-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(15, 's0015', 'Phó Hoài Nam', '1997-10-27', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(16, 's0016', 'Nguyễn Quang Dương', '1999-03-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(17, 's0017', 'Bạch Thùy Như', '1997-10-22', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(18, 's0018', 'Phan Thái Vân', '1996-05-15', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(19, 's0019', 'Nguyễn Kim Yến', '1999-01-12', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456'),
(20, 's0020', 'Kiều Bảo Ðịnh', '1999-01-22', '2019-12-02', 'k62a3', 'blank_avatar.jpg', 'A@123456');

-- --------------------------------------------------------

--
-- Table structure for table `intern_student_register`
--

CREATE TABLE `intern_student_register` (
  `id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `date_submit` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `request_id` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_student_register`
--

INSERT INTO `intern_student_register` (`id`, `student_id`, `request_id`, `date_submit`) VALUES
(1, 1, 15, '2019-12-12'),
(2, 2, 14, '2019-12-14'),
(3, 3, 13, '2019-12-17'),
(4, 4, 12, '2019-12-20'),
(5, 5, 11, '2019-12-22'),
(6, 6, 10, '2019-12-22'),
(7, 7, 9, '2019-12-24'),
(8, 8, 8, '2019-12-24'),
(9, 9, 7, '2019-12-27'),
(10, 10, 6, '2019-12-27'),
(11, 11, 5, '2019-12-27'),
(12, 12, 4, '2019-12-27'),
(13, 13, 3, '2019-12-28'),
(14, 14, 2, '2019-12-28'),
(15, 15, 1, '2019-12-30'),
(16, 16, 20, '2019-12-30'),
(17, 17, 19, '2019-12-30'),
(18, 18, 18, '2019-12-30'),
(19, 19, 17, '2019-12-30'),
(20, 20, 16, '2019-12-30'),
(21, 11, 4, '2019-12-30'),
(22, 10, 9, '2019-12-30'),
(23, 7, 11, '2019-12-30'),
(24, 5, 20, '2019-12-30'),
(25, 6, 5, '2019-12-30'),
(26, 2, 8, '2019-12-30'),
(27, 4, 12, '2019-12-30'),
(28, 18, 3, '2019-12-30'),
(29, 19, 5, '2019-12-30'),
(30, 13, 7, '2019-12-30');

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
(1, 1, 1, 5),
(2, 2, 2, 7),
(3, 3, 3, 4),
(4, 4, 4, 6),
(5, 5, 5, 7),
(6, 6, 6, 4),
(7, 7, 7, 5),
(8, 8, 8, 7),
(9, 9, 9, 5),
(10, 10, 10, 7),
(11, 11, 9, 4),
(12, 12, 8, 4),
(13, 13, 7, 7),
(14, 14, 6, 8),
(15, 15, 5, 8),
(16, 16, 4, 4),
(17, 17, 3, 6),
(18, 18, 2, 8),
(19, 19, 1, 5),
(20, 20, 10, 8),
(21, 1, 5, 6),
(22, 2, 10, 6),
(23, 3, 1, 5),
(24, 4, 5, 4),
(25, 5, 9, 7),
(26, 6, 6, 8),
(27, 7, 10, 6),
(28, 8, 5, 4),
(29, 9, 8, 6),
(30, 10, 7, 7),
(31, 11, 3, 6),
(32, 12, 10, 4),
(33, 13, 3, 5),
(34, 14, 2, 6),
(35, 15, 3, 6),
(36, 16, 7, 7),
(37, 17, 9, 8),
(38, 18, 3, 6),
(39, 19, 4, 5),
(40, 20, 9, 8);

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
(1, 'Hồ Minh Duyên', 't001', 'Nữ', '1989-07-15', 'blank_avatar.jpg', 'A@123456'),
(2, 'Huỳnh Cẩm Nhung', 't002', 'Nữ', '1990-12-11', 'blank_avatar.jpg', 'A@123456'),
(3, 'Hà Thanh Hiền', 't003', 'Nữ', '1989-02-11', 'blank_avatar.jpg', 'A@123456'),
(4, 'Tạ Xuân Lan', 't004', 'Nữ', '1990-11-19', 'blank_avatar.jpg', 'A@12345'),
(5, 'Phạm Việt Thông', 't005', 'Nam', '1992-10-14', 'blank_avatar.jpg', 'A@12345'),
(6, 'Phùng Thanh Mai', 't006', 'Nữ', '1977-03-15', 'blank_avatar.jpg', 'A@12345'),
(7, 'Vũ Quang Tùng', 't007', 'Nam', '1984-06-24', 'blank_avatar.jpg', 'A@12345'),
(8, 'Hồ Tuấn Tài', 't008', 'Nam', '1975-07-15', 'blank_avatar.jpg', 'A@12345'),
(9, 'Nguyễn Bích Phượng', 't009', 'Nữ', '1981-10-17', 'blank_avatar.jpg', 'A@12345'),
(10, 'Nguyễn Lâm Dũng', 't0010', 'Nam', '1988-05-12', 'blank_avatar.jpg', 'A@12345'),
(11, 'Võ Mỹ Xuân', 't0011', 'Nữ', '1978-12-22', 'blank_avatar.jpg', 'A@12345'),
(12, 'Nguyễn Quốc Hưng', 't0012', 'Nam', '1986-04-15', 'blank_avatar.jpg', 'A@12345'),
(13, 'Đặng Duy Cẩn', 't0013', 'Nam', '1967-11-22', 'blank_avatar.jpg', 'A@12345'),
(14, 'Nguyễn Hạnh Vi', 't0014', 'Nữ', '1975-05-11', 'blank_avatar.jpg', 'A@12345'),
(15, 'Lê Phước Nguyên', 't0015', 'Nam', '1990-04-22', 'blank_avatar.jpg', 'A@12345'),
(16, 'Nguyễn Yến Thanh', 't0016', 'Nữ', '1987-04-12', 'blank_avatar.jpg', 'A@12345'),
(17, 'Lê Thảo Nhi', 't0017', 'Nữ', '1980-11-22', 'blank_avatar.jpg', 'A@12345'),
(18, 'Hoàng Quốc Thành', 't0018', 'Nam', '1987-01-25', 'blank_avatar.jpg', 'A@12345'),
(19, 'Dữu Quốc Huy', 't0019', 'Nam', '1986-04-12', 'blank_avatar.jpg', 'A@12345'),
(20, 'Dương Thanh Thư', 't0020', 'Nữ', '1989-08-22', 'blank_avatar.jpg', 'A@12345');

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
