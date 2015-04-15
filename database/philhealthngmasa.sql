-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 10:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `philhealthngmasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay_personnel`
--

CREATE TABLE IF NOT EXISTS `barangay_personnel` (
  `per_datehired` date NOT NULL,
  `member_records_mr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE IF NOT EXISTS `dependents` (
`id` int(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `member_records_mr_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`id`, `name`, `relationship`, `member_records_mr_id`) VALUES
(2, 'Margie Atok', 'Mother', 201500001),
(3, 'Rosalino Atok', 'Father', 201500001),
(4, 'Ryan Ric Alegre', 'Children', 201500002),
(5, 'Vangie Alegre', 'Children', 201500002);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`ev_id` int(11) NOT NULL,
  `ev_name` varchar(45) DEFAULT NULL,
  `ev_description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE IF NOT EXISTS `event_list` (
`el_ctrlno` int(11) NOT NULL,
  `el_date` date DEFAULT NULL,
  `el_event` varchar(45) DEFAULT NULL,
  `el_venue` varchar(45) DEFAULT NULL,
  `member_records_mr_id` int(11) NOT NULL,
  `event_ev_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_records`
--

CREATE TABLE IF NOT EXISTS `member_records` (
`mr_id` int(11) NOT NULL,
  `mr_lname` varchar(45) NOT NULL,
  `mr_fname` varchar(45) NOT NULL,
  `mr_mname` varchar(45) NOT NULL,
  `mr_bdate` date NOT NULL,
  `mr_civ_stat` varchar(45) NOT NULL,
  `mr_gender` varchar(45) NOT NULL,
  `mr_status` varchar(255) NOT NULL,
  `mr_type` varchar(45) NOT NULL,
  `mr_house_no` varchar(45) NOT NULL,
  `mr_street` varchar(45) DEFAULT NULL,
  `mr_brarangay` varchar(45) NOT NULL DEFAULT 'Barangay Bangkal',
  `mr_city` varchar(45) NOT NULL DEFAULT 'Makati City',
  `mr_zipcode` varchar(45) NOT NULL DEFAULT '1233',
  `mr_mobile` varchar(45) NOT NULL,
  `mr_tel_no` varchar(45) NOT NULL,
  `mr_office_no` varchar(45) NOT NULL,
  `mr_email_ad` varchar(45) NOT NULL,
  `mr_alter_emal_ad` varchar(45) NOT NULL,
  `mr_reg_date` date NOT NULL,
  `mr_exp_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201500003 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_records`
--

INSERT INTO `member_records` (`mr_id`, `mr_lname`, `mr_fname`, `mr_mname`, `mr_bdate`, `mr_civ_stat`, `mr_gender`, `mr_status`, `mr_type`, `mr_house_no`, `mr_street`, `mr_brarangay`, `mr_city`, `mr_zipcode`, `mr_mobile`, `mr_tel_no`, `mr_office_no`, `mr_email_ad`, `mr_alter_emal_ad`, `mr_reg_date`, `mr_exp_date`) VALUES
(201500001, 'Atok', 'Mariz', 'Bautista', '1995-06-20', 'Single', 'Female', 'New Applicant', 'employed member (private)', '346', 'Estrella', 'Barangay Bangkal', 'Makati City', '1233', '09123456789', '', '', '', '', '2014-09-30', '2015-10-01'),
(201500002, 'Alegre', 'Ricardo', 'Globio', '1967-07-11', 'Married', 'Male', 'Renewing Member', 'employed member (private)', '234', 'Lacuña', 'Barangay Bangkal', 'Makati City', '1233', '09123456789', '', '7760506', 'ricardoa@gmail.com', '', '2015-10-01', '2016-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `renew_list`
--

CREATE TABLE IF NOT EXISTS `renew_list` (
`rl_control_no` int(11) NOT NULL,
  `rl_date_created` date NOT NULL,
  `member_records_mr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_personnel`
--
ALTER TABLE `barangay_personnel`
 ADD PRIMARY KEY (`member_records_mr_id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
 ADD PRIMARY KEY (`id`,`member_records_mr_id`), ADD KEY `fk_dependents_member_records1_idx` (`member_records_mr_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `event_list`
--
ALTER TABLE `event_list`
 ADD PRIMARY KEY (`el_ctrlno`,`member_records_mr_id`,`event_ev_id`), ADD KEY `fk_event_list_member_records1_idx` (`member_records_mr_id`), ADD KEY `fk_event_list_event1_idx` (`event_ev_id`);

--
-- Indexes for table `member_records`
--
ALTER TABLE `member_records`
 ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `renew_list`
--
ALTER TABLE `renew_list`
 ADD PRIMARY KEY (`rl_control_no`), ADD KEY `fk_renew_list_member_records1_idx` (`member_records_mr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dependents`
--
ALTER TABLE `dependents`
MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_list`
--
ALTER TABLE `event_list`
MODIFY `el_ctrlno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_records`
--
ALTER TABLE `member_records`
MODIFY `mr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201500003;
--
-- AUTO_INCREMENT for table `renew_list`
--
ALTER TABLE `renew_list`
MODIFY `rl_control_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay_personnel`
--
ALTER TABLE `barangay_personnel`
ADD CONSTRAINT `fk_barangay_personnel_member_records1` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dependents`
--
ALTER TABLE `dependents`
ADD CONSTRAINT `fk_dependents_member_records` FOREIGN KEY (`member_records_mr_id`) REFERENCES `member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_list`
--
ALTER TABLE `event_list`
ADD CONSTRAINT `fk_event_list_event1` FOREIGN KEY (`event_ev_id`) REFERENCES `mydb`.`event` (`ev_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_list_member_records1` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `renew_list`
--
ALTER TABLE `renew_list`
ADD CONSTRAINT `fk_renew_list_member_records1` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
