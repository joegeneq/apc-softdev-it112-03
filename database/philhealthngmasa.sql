-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 07:57 AM
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
-- Table structure for table `member_records`
--

CREATE TABLE IF NOT EXISTS `member_records` (
  `phid` varchar(15) NOT NULL,
  `zipcode` int(4) NOT NULL DEFAULT '1233',
  `house_no` varchar(50) DEFAULT NULL,
  `city` varchar(15) NOT NULL DEFAULT 'Makati City',
  `mobile` varchar(15) DEFAULT NULL,
  `home` varchar(15) DEFAULT NULL,
  `office` varchar(15) DEFAULT NULL,
  `alt_email` varchar(50) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `civilstat` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `dependent` varchar(255) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(15) NOT NULL DEFAULT 'Bangkal',
  `emailad` varchar(50) DEFAULT NULL,
  `regdate` date NOT NULL,
  `expdate` date NOT NULL,
  `type` varchar(25) DEFAULT 'None',
  `remarks` text,
  `image_url` varchar(250) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_records`
--

INSERT INTO `member_records` (`phid`, `zipcode`, `house_no`, `city`, `mobile`, `home`, `office`, `alt_email`, `status`, `lname`, `fname`, `mname`, `birthdate`, `civilstat`, `gender`, `dependent`, `street`, `barangay`, `emailad`, `regdate`, `expdate`, `type`, `remarks`, `image_url`) VALUES
('19-200512477-4', 1233, '2192', 'Makati City', NULL, NULL, NULL, NULL, 'Active', 'Legalig', 'Emma', 'C', NULL, NULL, 'Female', NULL, 'P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', 'None', NULL, NULL),
('19-200512537-1', 1233, '2241', 'Makati City', NULL, NULL, NULL, NULL, NULL, 'Mañalac', 'Antonio', 'C', NULL, NULL, NULL, NULL, 'P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', NULL, NULL, NULL),
('19-200512594-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Jabian, Sr.', 'Eduardo', 'M', NULL, NULL, NULL, '', '2146  P Binay', 'Bangkal', NULL, '2010-04-06', '2011-03-06', '', NULL, ''),
('19-200512644-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Maasin', 'Jean Jennifer', 'D', NULL, NULL, NULL, '', '2151 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200512732-3', 1233, NULL, 'Makati City', '', '', '', '', '', 'Longalong', 'Carmen', 'B', NULL, NULL, NULL, '', '2150-D P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200512742-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Densing', 'Juanita', 'C', NULL, NULL, NULL, '', '2242 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200512744-7', 1233, NULL, 'Makati City', '', '', '', '', '', 'Evangelista', 'Erlinda', 'L', NULL, NULL, NULL, '', '2146 P Binay', 'Bangkal', NULL, '2010-04-06', '2011-03-06', '', NULL, ''),
('19-200564514-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aseo', 'Dolores', 'Bonifacio', NULL, NULL, NULL, '', '1229 V Zamora St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200564562-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Araojo', 'Adelina', 'T', NULL, NULL, NULL, '', '1896 M Reyes St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200564603-7', 1233, NULL, 'Makati City', '', '', '', '', '', 'Amistoso', 'Silvestre', 'Mortera', NULL, NULL, NULL, '', '1664 Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200564681-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Agustin', 'Adelia', 'G', NULL, NULL, NULL, '', '2794 Gen Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565120-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Albania', 'Maricel', 'Parcon', NULL, NULL, NULL, '', '3856 Gen Macabulos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565186-3', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alluso', 'Elvira', 'Garillo', NULL, NULL, NULL, '', '2653 Bonifacio St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565212-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aguilar', 'Alfredo', 'C', NULL, NULL, NULL, '', '3480 Lucban St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565213-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alinsangan', 'Magdalena', 'P', NULL, NULL, NULL, '', '3911 Gen F Macabulos', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565229-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Baltazar', 'Marissa', 'M', NULL, NULL, NULL, '', '2240 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565252-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Artates', 'Emilda', 'D', NULL, NULL, NULL, '', '2562 Bonifacio St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565263-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alipio', 'Alberto', 'Y', NULL, NULL, NULL, '', '517 Gen Lacuña St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', 'P', NULL, ''),
('19-200565294-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Baccay', 'Hermigilda', 'D', NULL, NULL, NULL, '', '2675 Capinpin St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565302-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aquino', 'Cornelia', 'Jaranilla', NULL, NULL, NULL, '', '170 Rodriquez St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565307-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Andres', 'Rosalita', 'Monin', NULL, NULL, NULL, '', '4311 Gen Tinio St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565321-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Ajero', 'Alica', 'J', NULL, NULL, NULL, '', '2240 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200565339-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arines', 'Elena', 'M', NULL, NULL, NULL, '', '517 Lacuña St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200567175-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arcilla', 'Maricar', 'T', NULL, NULL, NULL, '', '2017 M Reyes Corner Mojica', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200567223-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alquiza', 'Teresita', 'F', NULL, NULL, NULL, '', '3017 A Del Pilar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200567225-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alquiza', 'Joana', 'F', NULL, NULL, NULL, '', '3017 A Del Pilar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200721733-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'De Leon', 'Alain', 'R', NULL, NULL, NULL, '', '2240 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721735-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Yandoc', 'Violenda', 'P', NULL, NULL, NULL, '', '2237 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721736-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Paule', 'Raquel', 'S', NULL, NULL, NULL, '', '2233 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721762-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Mariano', 'Emelyn', 'Y', NULL, NULL, NULL, '', '2190 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721766-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Yabut', 'Chester', 'R', NULL, NULL, NULL, '', '2240 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721784-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Opalia', 'Anna Lyn', 'O', NULL, NULL, NULL, '', '2218 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200721786-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Ramos', 'Rosalinda', 'A', NULL, NULL, NULL, '', '2224 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200732945-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Abogado', 'Thelma', 'Ansay', NULL, NULL, NULL, '', '3910 Gen Macabulos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732957-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Balboa', 'Loise', 'Benedicto', NULL, NULL, NULL, '', '32 Hizon St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732970-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arcadio', 'Macrina', 'Briones', NULL, NULL, NULL, '', '2759 Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732975-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aure', 'Zosimo', 'Montañez', NULL, NULL, NULL, '', '3026 Gen Del Piar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732979-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Balboa', 'Juanito', 'V', NULL, NULL, NULL, '', '32 Gen Hizon St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732982-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aguinaldo', 'Edwin ', 'Sanchez', NULL, NULL, NULL, '', '1539 P Santos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732983-7', 1233, NULL, 'Makati City', '', '', '', '', '', 'Asilum', 'Bernadeth', 'Anduy', NULL, NULL, NULL, '', '3489 Lucban St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732984-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arienda', 'Felicitas', 'Topacio', NULL, NULL, NULL, '', '3991 Malvar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732988-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Anonuevo', 'Priscilla', 'Barcenas', NULL, NULL, NULL, '', '2738 Hen Capinpin St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200732992-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aguilar', 'Rosalie', 'Ramos', NULL, NULL, NULL, '', '1154-D Gen Lacuña St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200735502-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Catalan', 'Cristina', 'C', NULL, NULL, NULL, '', '2240 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200802324-0', 1233, NULL, 'Makati City', '', '', '', '', '', 'Anonuevo', 'Salvacion', 'Adeva', NULL, NULL, NULL, '', '412 Gen Mascardo St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802387-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Bardos', 'Temotia', 'Tambeling', NULL, NULL, NULL, '', '2152 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802389-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Bardos', 'Sylvia', 'Tambeling', NULL, NULL, NULL, '', '2152 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802390-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Baculi', 'Ma. Theresa', 'Bayani', NULL, NULL, NULL, '', '1523 P Santos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802392-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Avenido', 'Belen', 'Valenzuela', NULL, NULL, NULL, '', '2285 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802394-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Asayas', 'Delia', 'Aton', NULL, NULL, NULL, '', '3014 Gen G Del Pilar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802395-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arcilla', 'Bonifacio', 'Morardate', NULL, NULL, NULL, '', '2464 Belarmino St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802397-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Andrada', 'Alejandro', 'Oribello', NULL, NULL, NULL, '', '2760 Gen Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802399-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Andico', 'Rene', 'Cortez', NULL, NULL, NULL, '', '2240 P Binay St. Corner Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802400-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Ancheta', 'Marivic', 'Jove', NULL, NULL, NULL, '', '2044 M Reyes St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802402-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alvarez', 'Emelita', 'Carpena', NULL, NULL, NULL, '', '1088E Rodriquez Sr.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802403-7', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alfonso', 'Leopardo', 'Panabang', NULL, NULL, NULL, '', '2692 Gen Capinpin St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200802405-3', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aquino', 'Cecilia', 'Aquino', NULL, NULL, NULL, '', '1653 Evangelista St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200880608-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Bacerdo', 'Roslyn', 'C', NULL, NULL, NULL, '', '2241 P Binay ', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200880625-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'De Vera', 'Elmer', 'M', NULL, NULL, NULL, '', '2156 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200880641-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Martinez', 'Menjie', 'A', NULL, NULL, NULL, '', '2148 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200880643-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Obias', 'Lolita', 'B', NULL, NULL, NULL, '', '2240 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200884357-7', 1233, NULL, 'Makati City', '', '', '', '', '', 'Fletchero', 'Esperanza', 'B', NULL, NULL, NULL, '', '2242 P Binay', 'Bangkal', NULL, '2009-06-16', '2010-06-15', '', NULL, ''),
('19-200895473-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Barrientos', 'Emilia', 'Pelimiano', NULL, NULL, NULL, '', '3110 Garcia St. Corner', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200952891-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arban', 'Joan', 'Rocha', NULL, NULL, NULL, '', '2047 M Reyes St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953844-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Abella', 'Verna', 'Larasan', NULL, NULL, NULL, '', '1099 Rodriquez Ave.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953850-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Abinguna', 'Joan', 'Tenasas', NULL, NULL, NULL, '', '2240 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953856-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Acusar', 'Procerfina', 'Duljao', NULL, NULL, NULL, '', '2747 Gen Capinpin St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953858-1', 1233, NULL, 'Makati City', '', '', '', '', '', 'Adote', 'Mary Grace', 'Claudio', NULL, NULL, NULL, '', '2461 Belarmino St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953873-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aguila', 'Ana Lisa', 'Dianco', NULL, NULL, NULL, '', '2737 D Gen Cailles St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953881-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alcantara', 'Roberto', 'Monsalve', NULL, NULL, NULL, '', '2653 A Bonifacio St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953885-9', 1233, NULL, 'Makati City', '', '', '', '', '', 'Alvero', 'Jessica', 'Garzota', NULL, NULL, NULL, '', '533 C Gen Hizon St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953887-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Angco', 'Teofilo', 'Galupo', NULL, NULL, NULL, '', '2177 P Binay St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953888-3', 1233, NULL, 'Makati City', '', '', '', '', '', 'Apolinario', 'Edgardo', 'Tengco', NULL, NULL, NULL, '', '3996 Malvar St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953890-5', 1233, NULL, 'Makati City', '', '', '', '', '', 'Aquino', 'Benigno', 'Cuyo', NULL, NULL, NULL, '', '3397 Gen Lim St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953894-8', 1233, NULL, 'Makati City', '', '', '', '', '', 'Arban', 'Mark Anthony', 'Rocha', NULL, NULL, NULL, '', '2047 M Reyes St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953895-6', 1233, NULL, 'Makati City', '', '', '', '', '', 'Avila', 'Vilma', 'Buranday', NULL, NULL, NULL, '', '4332 Gen Tinio St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953896-4', 1233, NULL, 'Makati City', '', '', '', '', '', 'Bajao', 'Hilaria', 'Sugalan', NULL, NULL, NULL, '', '3852 Gen Macabulos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, ''),
('19-200953897-2', 1233, NULL, 'Makati City', '', '', '', '', '', 'Bajamundi', 'Marcela', 'Vargas', NULL, NULL, NULL, '', '3916 Gen Macabulos St.', 'Bangkal', NULL, '2010-04-16', '2011-04-15', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `member_status`
--

CREATE TABLE IF NOT EXISTS `member_status` (
`ms_id` int(11) NOT NULL,
  `mem_phid` varchar(15) NOT NULL,
  `ms_description` varchar(255) DEFAULT NULL,
  `ms_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_records`
--
ALTER TABLE `member_records`
 ADD PRIMARY KEY (`phid`);

--
-- Indexes for table `member_status`
--
ALTER TABLE `member_status`
 ADD PRIMARY KEY (`ms_id`), ADD KEY `mem_phid` (`mem_phid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_status`
--
ALTER TABLE `member_status`
MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_status`
--
ALTER TABLE `member_status`
ADD CONSTRAINT `member_status_ibfk_1` FOREIGN KEY (`mem_phid`) REFERENCES `member_records` (`phid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
