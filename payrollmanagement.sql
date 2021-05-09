-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 08:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrollmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marital_status` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `state` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `aadhar_number` varchar(20) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `emp_id`, `fullname`, `fathername`, `email`, `dob`, `contact`, `nationality`, `marital_status`, `address`, `city`, `pincode`, `state`, `joining_date`, `aadhar_number`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', 'Rohit Kashyap', 'Suraj Kashyap', 'rohitkumar.28aug@gmail.com', '1996-08-28', '8756251752', 'Indian', 'Unmarried', 'Lal Bangla', 'Kanpur', '208007', 'Uttar Pradesh', '2020-10-25', '875445208595', '2020-10-18', '2020-10-26'),
(2, 'EMP670004', 'Sumit Kashyap', 'Suraj Bhan Kashyap', 'sumitkashyap@gmail.com', '2002-09-27', '9956981728', 'Indian', 'Unmarried', 'Lal Bangla', 'Kanpur', '208007', 'Uttar Pradesh', '2020-10-30', '000000000000', '2020-10-19', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `fullname`, `photo`, `email`, `password`) VALUES
(1, 'Preet Kashyap', '2007452116002_opt.jpg', 'payroll@gmail.com', '208007');

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `absent` varchar(30) NOT NULL,
  `present_no` varchar(225) NOT NULL,
  `month_working_days` varchar(255) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`id`, `emp_id`, `month`, `year`, `absent`, `present_no`, `month_working_days`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', 'August', '2020', '6', '20', '26', '2020-10-07', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `emp_bank_details`
--

CREATE TABLE `emp_bank_details` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_branch_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `uan_number` varchar(255) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_bank_details`
--

INSERT INTO `emp_bank_details` (`id`, `emp_id`, `bank_name`, `bank_branch_name`, `account_number`, `ifsc_code`, `uan_number`, `generated_at`, `updated_at`) VALUES
(2, 'EMP523955', 'Bank of Baroda', 'Lal Bangla', '235689745215', 'BARB08575', '2541256325', '2020-10-07', '2020-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `emp_designation`
--

CREATE TABLE `emp_designation` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `increment_amount` varchar(255) NOT NULL,
  `increment_date` date NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_designation`
--

INSERT INTO `emp_designation` (`id`, `emp_id`, `department`, `designation`, `basic_salary`, `increment_amount`, `increment_date`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', 'it', 'ceo', '12000', '2000', '2020-10-31', '2020-10-18', '2020-10-25'),
(2, 'EMP670004', 'Management', 'Manager', '12000', '', '0000-00-00', '2020-10-19', '0000-00-00'),
(3, 'EMP130799', 'Management', 'Manager', '15000', '', '0000-00-00', '2020-10-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_joining_letter`
--

CREATE TABLE `emp_joining_letter` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `posting_location` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `offer_number` varchar(255) NOT NULL,
  `join_letter_date` date NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `reporting_manager` varchar(255) NOT NULL,
  `annual_ctc` varchar(255) NOT NULL,
  `expect_join_date` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_joining_letter`
--

INSERT INTO `emp_joining_letter` (`id`, `emp_id`, `company_name`, `department`, `posting_location`, `month`, `year`, `offer_number`, `join_letter_date`, `firstname`, `lastname`, `address`, `designation`, `reporting_manager`, `annual_ctc`, `expect_join_date`, `city`, `location`, `generated_at`, `updated_at`) VALUES
(1, '', 'Cubersindia', 'it', 'Lucknow', 'March', '2020', '1256325', '2020-10-01', 'Rohit', 'Kashyap', 'Lal Bangla ', 'ceo', 'Preet', '1250000000', '2020-10-04', 'Kanpur', 'Lucknow', '2020-10-03', '0000-00-00'),
(7, '', 'Allies interactive', 'Management', 'Lucknow', 'March', '2020', '321654', '2020-10-14', 'Rohit', 'Chaudhary', 'Lal Bangla ', 'Manager', '', '1500000000000', '2020-10-30', 'Kanpur', 'Lucknow', '2020-10-03', '2020-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `working_status` int(5) NOT NULL DEFAULT '0',
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`id`, `emp_id`, `email`, `password`, `working_status`, `generated_at`, `updated_at`) VALUES
(1, 'EMP743610', 'kashyap.8p@gmail.com', '9793683000', 0, '2020-10-04', '2020-10-06'),
(2, 'EMP523955', 'rohitkumar.28aug@gmail.com', '8756251752', 0, '2020-10-18', '2020-10-25'),
(3, 'EMP670004', 'sumitkashyap@gmail.com', '9956981728', 0, '2020-10-19', '0000-00-00'),
(4, 'EMP130799', 'sumitkashyap@gmail.com', '5263147890', 0, '2020-10-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_media_data`
--

CREATE TABLE `emp_media_data` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `emp_resume` varchar(255) NOT NULL,
  `emp_photo` varchar(255) NOT NULL,
  `emp_aadhar` varchar(255) NOT NULL,
  `emp_joining_letter` varchar(255) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_media_data`
--

INSERT INTO `emp_media_data` (`id`, `emp_id`, `emp_resume`, `emp_photo`, `emp_aadhar`, `emp_joining_letter`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', '1950528501drone.txt', '1825370774IMG-20200828-WA0003.jpg', '1172691958cubersindia-experience-letter-format.pdf', '1322365429API+JSON+JavaScript+Connections+(1).pdf', '2020-10-18', '2020-10-25'),
(2, 'EMP670004', '', '', '', '', '2020-10-19', '0000-00-00'),
(3, 'EMP130799', '107278480cubersindia-offerletter-format.pdf', '790294008drone.txt', '1172691958cubersindia-experience-letter-format.pdf', '1322365429API+JSON+JavaScript+Connections+(1).pdf', '2020-10-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary`
--

CREATE TABLE `emp_salary` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `absent_no` varchar(255) NOT NULL,
  `present_no` varchar(255) NOT NULL,
  `working_days` varchar(30) NOT NULL,
  `travel_allowance` varchar(255) NOT NULL,
  `dearness_allowance` varchar(255) NOT NULL,
  `hra` varchar(255) NOT NULL,
  `total_salary` varchar(255) NOT NULL,
  `pf` varchar(255) NOT NULL,
  `esi` varchar(255) NOT NULL,
  `netpay` varchar(255) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `increment` varchar(255) NOT NULL,
  `advance_money` varchar(255) NOT NULL,
  `daily_pay` varchar(255) NOT NULL,
  `paid_leave` varchar(255) NOT NULL,
  `salary_generation_date` date NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_salary`
--

INSERT INTO `emp_salary` (`id`, `emp_id`, `fullname`, `month`, `year`, `absent_no`, `present_no`, `working_days`, `travel_allowance`, `dearness_allowance`, `hra`, `total_salary`, `pf`, `esi`, `netpay`, `basic_salary`, `increment`, `advance_money`, `daily_pay`, `paid_leave`, `salary_generation_date`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', 'Rohit Kashyap', 'December', '2020', '6', '20', '26', '5000', '2000', '1000', '28000', '1000', '1000', '15280', '10000', '10000', '10000', '180', '2', '2020-10-21', '2020-10-21', '2020-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_salary_deduction`
--

CREATE TABLE `emp_salary_deduction` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `advance_money` varchar(255) NOT NULL,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_salary_deduction`
--

INSERT INTO `emp_salary_deduction` (`id`, `emp_id`, `month`, `year`, `advance_money`, `generated_at`, `updated_at`) VALUES
(1, 'EMP523955', 'October', '2020', '10000', '2020-10-19', '2020-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `otp_verify`
--

CREATE TABLE `otp_verify` (
  `id` int(11) NOT NULL,
  `otp_number` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_designation`
--
ALTER TABLE `emp_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_joining_letter`
--
ALTER TABLE `emp_joining_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_media_data`
--
ALTER TABLE `emp_media_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salary`
--
ALTER TABLE `emp_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_salary_deduction`
--
ALTER TABLE `emp_salary_deduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_verify`
--
ALTER TABLE `otp_verify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_designation`
--
ALTER TABLE `emp_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_joining_letter`
--
ALTER TABLE `emp_joining_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_media_data`
--
ALTER TABLE `emp_media_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_salary_deduction`
--
ALTER TABLE `emp_salary_deduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otp_verify`
--
ALTER TABLE `otp_verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
