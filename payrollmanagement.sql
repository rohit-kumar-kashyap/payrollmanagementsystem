-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2025 at 09:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `working_status` int(5) NOT NULL DEFAULT 0,
  `generated_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_verify`
--

CREATE TABLE `otp_verify` (
  `id` int(11) NOT NULL,
  `otp_number` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_designation`
--
ALTER TABLE `emp_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_joining_letter`
--
ALTER TABLE `emp_joining_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_media_data`
--
ALTER TABLE `emp_media_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_salary`
--
ALTER TABLE `emp_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_salary_deduction`
--
ALTER TABLE `emp_salary_deduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_verify`
--
ALTER TABLE `otp_verify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
