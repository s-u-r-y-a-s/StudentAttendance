-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 05:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `att_percentage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_time`
--

CREATE TABLE `tbl_class_time` (
  `class_time_id` int(10) NOT NULL,
  `start_time` varchar(15) NOT NULL,
  `end_time` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class_time`
--

INSERT INTO `tbl_class_time` (`class_time_id`, `start_time`, `end_time`) VALUES
(1, '9.30 Am', '10.30 Am'),
(2, '10.30 Am', '11.30 Am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `no_of_semester` varchar(15) NOT NULL,
  `dept_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `no_of_semester`, `dept_id`) VALUES
(1, 'BCA', '6', 1),
(3, 'MCA', '6', 1),
(4, 'BTech', '6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`) VALUES
(1, 'Computer Science'),
(2, 'Electrical & Electronics ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(10) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `date_of_join` date NOT NULL,
  `dob` date NOT NULL,
  `adhaar` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `dept_id`, `name`, `address`, `qualification`, `mobile_no`, `date_of_join`, `dob`, `adhaar`, `email`) VALUES
(6, 1, 'Shalini', 'Shalom,Kollam', ' B.Tech', '8977889999', '2017-09-09', '1982-03-02', '236576878788', 'shalini@gmail.com'),
(8, 1, 'Achu', 'Aswathy bhavan,Kollam', ' M.Tech', '8767456565', '2020-03-02', '1987-01-02', '123443212345', 'achu@gmail.com'),
(9, 2, 'Reshmi', 'Aron villa,Kottiyam', ' M.Tech', '7767567678', '2016-05-05', '1986-05-05', '232345657678', 'reshmi@gmail.com'),
(10, 2, 'Amal', 'Amal nivas,Kottarakkara', ' M.Tech', '9898787678', '2009-03-12', '1983-02-01', '127868878898', 'amal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty_subject`
--

CREATE TABLE `tbl_faculty_subject` (
  `faculty_subject_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty_subject`
--

INSERT INTO `tbl_faculty_subject` (`faculty_subject_id`, `faculty_id`, `subject_id`) VALUES
(6, 6, 8),
(7, 8, 9),
(8, 9, 10),
(9, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hod`
--

CREATE TABLE `tbl_hod` (
  `hod_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `qualification` varchar(15) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `adhaar` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `date_of_join` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hod`
--

INSERT INTO `tbl_hod` (`hod_id`, `dept_id`, `name`, `address`, `qualification`, `mobile_no`, `adhaar`, `email`, `dob`, `date_of_join`) VALUES
(6, 1, 'Sujith', 'Sujith Nivas,TVM', ' M.Tech', '9988776533', '123456789876', 'sujith@gmail.com', '1980-03-12', '2012-05-13'),
(7, 2, 'Arun', 'Arunvilla,Kollam', ' M.Tech', '8790767676', '987654567898', 'arun@gmail.com', '1978-09-09', '2010-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hourly_attendance`
--

CREATE TABLE `tbl_hourly_attendance` (
  `h_attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `class_time_id` int(11) NOT NULL,
  `attendance` varchar(10) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hourly_attendance`
--

INSERT INTO `tbl_hourly_attendance` (`h_attendance_id`, `student_id`, `teacher_id`, `date`, `class_time_id`, `attendance`, `subject_id`) VALUES
(1, 7, 6, '2020-06-22', 1, 'true', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `reg_id`, `username`, `password`, `type`) VALUES
(1, 0, 'admin', 'admin', 'admin'),
(2, 6, 'sujith@gmail.com', 'Sujithbeq', 'hod'),
(3, 7, 'arun@gmail.com', 'Arunfyp', 'hod'),
(5, 6, 'shalini@gmail.com', 'Shalinispf', 'teacher'),
(7, 8, 'achu@gmail.com', 'Achu7ci', 'teacher'),
(8, 9, 'reshmi@gmail.com', 'Reshmigtz', 'teacher'),
(9, 10, 'amal@gmail.com', 'Amalhqv', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `not_id` int(10) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`not_id`, `notification`, `date`) VALUES
(1, 'all teachers are requested to submit the assessment report as soon as possible.', '2020-04-13'),
(2, 'Exam start soon', '2020-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `sem_id` int(10) NOT NULL,
  `sem_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`sem_id`, `sem_name`) VALUES
(1, 'semester 1'),
(2, 'semester 2'),
(4, 'semester3'),
(5, 'semester4'),
(6, 'semester5'),
(7, 'semester6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `course_id` int(10) NOT NULL,
  `sem_id` int(10) NOT NULL,
  `enrollment_no` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `admission_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_id`, `name`, `course_id`, `sem_id`, `enrollment_no`, `address`, `admission_date`) VALUES
(8, 'Sarath', 1, 2, '354544545', 'KK house,Kundara', '2019-12-03'),
(7, 'Jithu', 1, 1, '12345', 'Janam nagar,Kollam', '2020-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `sem_id` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `course_id`, `sem_id`, `subject_name`) VALUES
(8, 1, 1, 'C language'),
(9, 1, 2, 'Data Structure'),
(10, 4, 1, 'DBMS'),
(11, 4, 2, 'Networking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_class_time`
--
ALTER TABLE `tbl_class_time`
  ADD PRIMARY KEY (`class_time_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `tbl_faculty_subject`
--
ALTER TABLE `tbl_faculty_subject`
  ADD PRIMARY KEY (`faculty_subject_id`);

--
-- Indexes for table `tbl_hod`
--
ALTER TABLE `tbl_hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `tbl_hourly_attendance`
--
ALTER TABLE `tbl_hourly_attendance`
  ADD PRIMARY KEY (`h_attendance_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_class_time`
--
ALTER TABLE `tbl_class_time`
  MODIFY `class_time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `faculty_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_faculty_subject`
--
ALTER TABLE `tbl_faculty_subject`
  MODIFY `faculty_subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_hod`
--
ALTER TABLE `tbl_hod`
  MODIFY `hod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_hourly_attendance`
--
ALTER TABLE `tbl_hourly_attendance`
  MODIFY `h_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `not_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `sem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
