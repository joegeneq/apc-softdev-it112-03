-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2015 at 04:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`ev_id` int(11) NOT NULL,
  `ev_name` varchar(45) DEFAULT NULL,
  `ev_description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_list`
--

CREATE TABLE IF NOT EXISTS `event_list` (
`el_ctrlno` int(11) NOT NULL,
  `el_date` date DEFAULT NULL,
  `el_event` varchar(45) DEFAULT NULL,
  `el_venue` varchar(45) DEFAULT NULL,
  `mr_id` int(11) NOT NULL,
  `ev_id` int(11) NOT NULL
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
  `mr_dependent` varchar(45) NOT NULL,
  `mr_type` varchar(45) NOT NULL,
  `mr_house_no` varchar(45) NOT NULL,
  `mr_street` varchar(45) DEFAULT NULL,
  `mr_brarangay` varchar(45) NOT NULL DEFAULT 'Barangay Bangkal',
  `mr_city` varchar(45) NOT NULL DEFAULT 'Makati City',
  `mr_zipcode` varchar(45) NOT NULL DEFAULT '1233',
  `mr_status` varchar(45) NOT NULL,
  `mr_mobile` varchar(45) NOT NULL,
  `mr_tel_no` varchar(45) DEFAULT NULL,
  `mr_office_no` varchar(45) DEFAULT NULL,
  `mr_email_ad` varchar(45) DEFAULT NULL,
  `mr_alter_emal_ad` varchar(45) DEFAULT NULL,
  `mr_reg_date` date NOT NULL,
  `mr_exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_records`
--

INSERT INTO `member_records` (`mr_id`, `mr_lname`, `mr_fname`, `mr_mname`, `mr_bdate`, `mr_civ_stat`, `mr_gender`, `mr_dependent`, `mr_type`, `mr_house_no`, `mr_street`, `mr_brarangay`, `mr_city`, `mr_zipcode`, `mr_status`, `mr_mobile`, `mr_tel_no`, `mr_office_no`, `mr_email_ad`, `mr_alter_emal_ad`, `mr_reg_date`, `mr_exp_date`) VALUES
(123, 'Alegre', 'Ryan', 'Globio', '1994-12-14', 'Single', 'Male', 'Ricardo Alegre', 'Member', '12334', 'Street1', 'Bangkal', 'Makati City', '1233', 'test', '09123456789', '', '', '', '', '2015-03-20', '2016-03-20'),
(124, 'Cortez', 'Julie Anne', 'Neri', '1995-07-16', 'Single', 'Female', 'Elizabeth Cortez', 'Member', '456', 'Street', 'Bangkal', 'Makati City', '1233', 'test', '09213456789', '', '', '', '', '2015-03-20', '2016-03-20'),
(1234, 'Atok', 'Mariz', 'Bautista', '2015-03-20', 'Single', 'Female', 'Margie Atok', 'test', '123', 'test', 'Bangkal', 'Makati City', '1233', 'test', '09123456789', '', '', '', '', '2015-03-20', '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `member_status`
--

CREATE TABLE IF NOT EXISTS `member_status` (
  `ms_id` int(11) NOT NULL,
  `ms_description` varchar(450) NOT NULL,
  `ms_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `member_records_mr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `event_list`
--
ALTER TABLE `event_list`
 ADD PRIMARY KEY (`el_ctrlno`,`mr_id`,`ev_id`), ADD KEY `fk_event_list_member_records1_idx` (`mr_id`), ADD KEY `fk_event_list_event1_idx` (`ev_id`);

--
-- Indexes for table `member_records`
--
ALTER TABLE `member_records`
 ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `member_status`
--
ALTER TABLE `member_status`
 ADD PRIMARY KEY (`ms_id`,`member_records_mr_id`), ADD KEY `fk_member_status_member_records_idx` (`member_records_mr_id`);

--
-- Indexes for table `renew_list`
--
ALTER TABLE `renew_list`
 ADD PRIMARY KEY (`rl_control_no`), ADD KEY `fk_renew_list_member_records1_idx` (`member_records_mr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `event_list`
--
ALTER TABLE `event_list`
MODIFY `el_ctrlno` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangay_personnel`
--
ALTER TABLE `barangay_personnel`
ADD CONSTRAINT `fk_barangay_personnel_member_records1` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event_list`
--
ALTER TABLE `event_list`
ADD CONSTRAINT `fk_event_list_event1` FOREIGN KEY (`ev_id`) REFERENCES `mydb`.`event` (`ev_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_event_list_member_records1` FOREIGN KEY (`mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member_status`
--
ALTER TABLE `member_status`
ADD CONSTRAINT `fk_member_status_member_records` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `renew_list`
--
ALTER TABLE `renew_list`
ADD CONSTRAINT `fk_renew_list_member_records1` FOREIGN KEY (`member_records_mr_id`) REFERENCES `mydb`.`member_records` (`mr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
