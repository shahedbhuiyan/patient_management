-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 12:31 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `masamad`
--

-- --------------------------------------------------------

--
-- Table structure for table `assis_doctor`
--

CREATE TABLE IF NOT EXISTS `assis_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `dob` date NOT NULL DEFAULT '0000-00-00',
  `sex` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `age` decimal(2,0) NOT NULL DEFAULT '0',
  `age1` decimal(2,0) NOT NULL DEFAULT '0',
  `age2` decimal(2,0) NOT NULL DEFAULT '0',
  `paddress` text COLLATE latin1_general_ci NOT NULL,
  `pcontact` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `reff` varchar(70) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `guardian` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `gcontact` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `gaddress` text COLLATE latin1_general_ci NOT NULL,
  `p` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p1` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p2` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `temp` decimal(5,0) NOT NULL DEFAULT '0',
  `weight` decimal(4,0) NOT NULL DEFAULT '0',
  `h1` decimal(3,0) NOT NULL DEFAULT '0',
  `h2` decimal(3,0) NOT NULL DEFAULT '0',
  `odema` text COLLATE latin1_general_ci NOT NULL,
  `cyan` text COLLATE latin1_general_ci NOT NULL,
  `jaundice` text COLLATE latin1_general_ci NOT NULL,
  `skin` text COLLATE latin1_general_ci NOT NULL,
  `dehy` text COLLATE latin1_general_ci NOT NULL,
  `othrs` text COLLATE latin1_general_ci NOT NULL,
  `photo` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `dat` date NOT NULL DEFAULT '0000-00-00',
  `mstatus` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `bp` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=123 ;

--
-- Dumping data for table `assis_doctor`
--

INSERT INTO `assis_doctor` (`id`, `pid`, `pname`, `fname`, `mname`, `dob`, `sex`, `age`, `age1`, `age2`, `paddress`, `pcontact`, `email`, `reff`, `guardian`, `gcontact`, `gaddress`, `p`, `p1`, `p2`, `temp`, `weight`, `h1`, `h2`, `odema`, `cyan`, `jaundice`, `skin`, `dehy`, `othrs`, `photo`, `dat`, `mstatus`, `bp`) VALUES
(88, '1', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(89, '2', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(90, '3', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(91, '4', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(92, '5', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(93, '6', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(94, '7', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(95, '8', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(96, '9', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(97, '12', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(98, '13', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(99, '14', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(100, '15', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(101, '16', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(102, '9', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(103, '20', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(104, '21', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(105, '22', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(106, '23', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(107, '24', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(108, '23', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(109, '25', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(110, '26', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(111, '28', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(112, '29', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(113, '30', '', '', '', '0000-00-00', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', ''),
(114, '31', 'alskdjf', 'asdkfj', 'laksdjf', '2012-12-12', 'M', 20, 8, 20, 'laksjks dkfljsakldf', '9879798', 'shahed.blackmagic@yahoo.com', 'dr. kamal', 'shahed', '987979', 'laskjd ks djfk ksldf jskaldfjlsadjf ', '120', '100', '12', 60, 50, 6, 3, 'kjashdf', 'kasjhdf', 'jsadhf', 'kajshdf', 'kjsahdf', 'kdhfaskj sjakdfh skajdfhsakjdf', '31.', '0000-00-00', 'M', ''),
(115, '31', 'alskdjf', 'asdkfj', 'laksdjf', '2012-12-12', 'M', 20, 8, 20, 'laksjks dkfljsakldf', '9879798', 'shahed.blackmagic@yahoo.com', 'dr. kamal', 'shahed', '987979', 'laskjd ks djfk ksldf jskaldfjlsadjf ', '120', '100', '12', 60, 50, 6, 3, 'kjashdf', 'kasjhdf', 'jsadhf', 'kajshdf', 'kjsahdf', 'kdhfaskj sjakdfh skajdfhsakjdf', '31.', '2012-08-10', 'M', ''),
(117, '32', 'asdklfj', 'myeen uddin', 'lutfunnahar begum', '2012-12-12', 'M', 21, 6, 10, 'feni', '987532045', 'saifmahamud95@gmail.com', 'Dr. M A Samad', 'myeen uddin', '74398387', 'feni', '120', '20', '34', 80, 50, 5, 7, 'lksajdf', 'lskajdf', 'lkjsadf', 'lkdsajf', 'lkasdjf', 'lkj lsaldkfj sdklfj', '32.', '2012-08-10', 'U', ''),
(118, '23', 'md shaokat hossain', 'ksljfald', 'lkjsladkfj', '2012-12-12', 'M', 21, 2, 12, 'lksajdflkjsdalfk ksladfj', '9879898', 'shahed.blackmagic@gmail.com', 'Dr. M A Samad', 'laskdfj', '9879', 'alskj laskdfj', '120', '20', '30', 120, 70, 6, 6, 'lsdjkf', 'lkjsd', 'lkjasdfl', 'kjlskdf', 'lkjsdaf', 'lskadfjlk ksdjf', '23.', '2012-08-10', 'U', '120/80'),
(119, '33', 'Tanjina Binte Oni', 'laksdjf', 'lkjsadf', '2012-12-12', 'F', 21, 3, 4, 'laskdjf', '897987', 'shahed@yahoo.com', 'Dr. M A Samad', 'askldfj', '98798', 'lskadjflksadf sdf', '120', '100', '12', 120, 60, 6, 6, 'lsakdjf', 'lkjsadf', 'lkjsadf', 'ljksadf', 'lksajdf', 'lksa ksdajflkasdfj akdslf', '33.jpg', '2013-07-01', 'U', '120/80'),
(120, '34', 'ahad akni', 'sadkflj', 'lkjsdaf', '2013-06-28', 'M', 21, 3, 3, 'lkasdfj lakdsf', '98798', 'shahed.blackmagic', 'kshdfkj', 'lskadjf', '98098789', 'kjashdfklsajdf', '120', '100', '12', 100, 90, 9, 5, 'lkdsajf', 'lkjsdaf', 'lkjsdlakfj', 'lkjsadflkj', 'lkjsdaflk', 'laksdjflskadjf dslfkaj', '34.', '2013-06-28', 'U', '120/90'),
(121, '42', 'shahd bhuiyan', 'sdfdf', 'lkjl', '0000-00-00', 'M', 0, 0, 0, 'sdfd', '23423234', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '42.', '2016-09-30', 'U', ''),
(122, '43', 'Shariful Islam', 'alksdfj', 'lkasdjf', '1992-01-01', 'M', 22, 0, 0, 'aslkdj', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '43.', '2016-12-23', 'M', '');

-- --------------------------------------------------------

--
-- Table structure for table `assis_doctor2`
--

CREATE TABLE IF NOT EXISTS `assis_doctor2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `pname` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `clinical_ds` text COLLATE latin1_general_ci NOT NULL,
  `diagnoscase` text COLLATE latin1_general_ci NOT NULL,
  `dat` date DEFAULT NULL,
  `nad` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p` decimal(4,0) NOT NULL DEFAULT '0',
  `p1` decimal(4,0) NOT NULL DEFAULT '0',
  `p2` decimal(4,0) NOT NULL DEFAULT '0',
  `bp` decimal(4,0) NOT NULL DEFAULT '0',
  `bp1` decimal(4,0) NOT NULL DEFAULT '0',
  `mur` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mur1` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mur2` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `asound` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `burit` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per1` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per2` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per3` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per4` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per5` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `per6` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri1` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri2` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri3` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri4` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri5` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `peri6` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `bsound` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rho` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `crep` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pleu` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `extra` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `r_ingu` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `l_ingu` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `para` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `r_femo` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `l_femo` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `inci` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ruq` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `epig` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rif` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rt` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `umbili` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `liver` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `spleen` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rkidney` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mass` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ascites` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nad3` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hcf` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `carnail` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `reflexes` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `knee` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ankle` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `plantar` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `knee1` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ankle1` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `plantar1` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=114 ;

--
-- Dumping data for table `assis_doctor2`
--

INSERT INTO `assis_doctor2` (`id`, `pid`, `pname`, `clinical_ds`, `diagnoscase`, `dat`, `nad`, `p`, `p1`, `p2`, `bp`, `bp1`, `mur`, `mur1`, `mur2`, `asound`, `burit`, `per`, `per1`, `per2`, `per3`, `per4`, `per5`, `per6`, `peri`, `peri1`, `peri2`, `peri3`, `peri4`, `peri5`, `peri6`, `bsound`, `rho`, `crep`, `pleu`, `extra`, `r_ingu`, `l_ingu`, `para`, `r_femo`, `l_femo`, `inci`, `ruq`, `epig`, `rif`, `rt`, `umbili`, `liver`, `spleen`, `rkidney`, `mass`, `ascites`, `nad3`, `hcf`, `carnail`, `reflexes`, `knee`, `ankle`, `plantar`, `knee1`, `ankle1`, `plantar1`) VALUES
(87, '1', 'Mahtab Uddin Shahed', 'lkjsd flkasjdf', 'lkjas dkflj', '2012-07-22', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, '2', 'Iftakher Uddin', 'lkjsd fakljsadkfjasdlkfj', 'l kjsadlfkj sadkfljsdlkfj', '2012-07-23', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '3', 'tanvir', 'lj sdfkljasldkf ', 'l kjsdaflk ', '2012-07-22', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, '4', 'Shahed Ahamed', 'j lkasdjf', 'lkjds afklj', '2012-07-22', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, '5', 'shahed khan', 'lkjs dakfljsadkflj', 'lkjsda fkl', '2012-07-23', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, '6', 'lksadjf', 'l kjsdflkj asdkfl ', 'skladjf laskdjf lakdsfj', '2012-07-24', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, '7', 'akbar', 'lkj akdslfjaslkdfj skdlf', 'lk jds flk', '2012-07-24', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, '8', 'Abdur Rahaman', 'l jskaldfj laksdfj sakldf ', 'lk sjdflksjad flskdjf slkdf', '2012-07-24', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, '9', 'shahed', 'lkjsdakf jaskdflj sakdflj', 'k ljsdflkjas dflksjdfl k', '2012-07-25', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, '12', 'rahded', 'lkjdasf lksajdf', 'lkjsda flkasjd f', '2012-07-26', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, '13', 'j,dfg', 'lkjsa dfkljsadftk lj', 'kljs dafkljsa dfklj', '2012-07-27', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, '14', 'lsdkfjsl', 'l;sadkf;lsad f;lsdkf', 'a;lskd;lasdf ;sladfk ', '2012-07-29', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, '15', 'Mahtab Uddin Shahed', 'lkjdsflk ajsdflksadf j', 'lkjsdlfak sadklfj', '2012-07-30', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, '16', 'rjia', 'lkj akdfsljaslkdfj', 'lkj sdafkljsaldfk ', '2012-07-30', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, '16', 'rjia', 'lkj akdfsljaslkdfj', 'lkj sdafkljsaldfk ', '2012-07-30', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, '9', 'shahed', 'lkjsadfk ljsadfklj', 'lskadjf lkasdfjlskadf', '2012-07-30', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, '20', 'mahtab', 'lkjsda flkasdjflkj', 'lksjd flksadjf', '2012-07-31', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, '21', 'Salam Bi Capta', 'lkjslfdak asdfk', 'lksjd afl', '2012-07-31', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, '22', 'Md Sabbir', 'lkj dslkfj lkasdfj akdslfj', 'lkjd lfkjsadlfkjs dkfl ', '2012-07-31', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, '23', 'md shaokat hossain', 'lkjlkasd fjlksadfj ', 'lkjlsakd jf', '2012-07-31', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, '24', 'riaz uddin', 'lkjasdlfk jasdklfj', 'lkjsadkf ljsadkflj ', '2012-08-01', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, '23', 'md shaokat hossain', 'kjs adkfljasldkf k', 'lksja dfkl', '2012-08-01', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, '25', 'ljksdfadf', 'lkjs daflkjsdf', 'lkj sdfkl', '2012-08-01', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, '26', 'Jabed Hosssain', 'lkj sadklfj askdlfj sadklf', 'lkjsdlakfj sadkflsadfklj', '2012-08-01', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, '28', 'Asfar Uddin', 'lkj sdafkljasdlfkj', ' ', '2012-08-02', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, '29', 'Mahtab Uddin Shahed', 'lkjsaldkf jasldkf', 'lk jsdaflkjadkf lsdlkf sadjklf', '2012-08-03', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, '30', 'dklfgjhdkl', 'lkjsdf lkasdjf lk', 'lkasdj flkasjdf', '2012-08-07', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clinical_sign`
--

CREATE TABLE IF NOT EXISTS `clinical_sign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sing` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `clinical_sign`
--

INSERT INTO `clinical_sign` (`id`, `sing`) VALUES
(1, 'NAD'),
(2, 'Pulse'),
(3, 'BP'),
(4, 'JVP'),
(5, 'Murmur'),
(6, 'Added Sound'),
(7, 'Periph. Pulses'),
(8, 'Bruit Over'),
(9, 'Breath Sound'),
(10, 'Rhonchi'),
(11, 'Crepitations'),
(12, 'Pleural Rub'),
(13, 'Extra Findings'),
(14, 'NAD'),
(15, 'Fenderness In'),
(16, 'Liver'),
(17, 'Spleen'),
(18, 'Right Kidney'),
(19, 'Other Mass'),
(20, 'Ascites'),
(21, 'Bowel Sound'),
(22, 'Nervous System'),
(23, 'Higher Cerebral Function'),
(24, 'Cranial Nevers'),
(25, 'Reflexes'),
(26, 'Knee'),
(27, 'Ankle'),
(28, 'Plantar');

-- --------------------------------------------------------

--
-- Table structure for table `day_gap`
--

CREATE TABLE IF NOT EXISTS `day_gap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day_gap` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `day_gap`
--

INSERT INTO `day_gap` (`id`, `day_gap`) VALUES
(1, 'After One Day'),
(2, 'Everyday'),
(3, 'After one hour'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE IF NOT EXISTS `doctor_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `name`) VALUES
(2, 'Prof. Dr. M.A Samad');

-- --------------------------------------------------------

--
-- Table structure for table `drug_cata`
--

CREATE TABLE IF NOT EXISTS `drug_cata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cata_name` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `drug_cata`
--

INSERT INTO `drug_cata` (`id`, `cata_name`) VALUES
(1, 'Tablet'),
(2, 'Capsule'),
(3, 'Syrup'),
(4, 'Injection'),
(7, ''),
(6, 'Ointment');

-- --------------------------------------------------------

--
-- Table structure for table `drug_list`
--

CREATE TABLE IF NOT EXISTS `drug_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `generic` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `cata` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `mg` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=526 ;

--
-- Dumping data for table `drug_list`
--

INSERT INTO `drug_list` (`id`, `brand`, `generic`, `cata`, `mg`) VALUES
(27, 'Zovia Gold', NULL, NULL, '200 ML'),
(28, 'Zovia Silver', NULL, NULL, '2 MG'),
(15, 'Pantid', NULL, NULL, '20 MG'),
(16, 'Pantid', NULL, NULL, '50 MG'),
(17, 'Pantid', NULL, NULL, '40 MG IV'),
(25, 'Zovia Gold', NULL, NULL, '15s & 30s'),
(6, 'Bislol', NULL, NULL, '2.5 MG'),
(7, 'Bislol', NULL, NULL, '5 MG'),
(8, 'Bislol', NULL, NULL, '10 MG'),
(9, 'Hypen', NULL, NULL, '1.5 MG'),
(10, 'Ramace', NULL, NULL, '1.25 MG'),
(11, 'Ramace', NULL, NULL, '2.5 MG'),
(12, 'Ramace', NULL, NULL, '5 MG'),
(13, 'Larb', NULL, NULL, '25 MG'),
(14, 'Larb', NULL, NULL, '50 MG'),
(26, 'Zovia Gold', NULL, NULL, '100 ML'),
(22, 'Trilock', NULL, NULL, '4 MG'),
(23, 'Trilock', NULL, NULL, '5 MG'),
(24, 'Trilock', NULL, NULL, '10 MG'),
(29, 'Trilock', NULL, NULL, '4 MG'),
(30, 'Trilock', NULL, NULL, '5 MG'),
(31, 'Trilock', NULL, NULL, '10 MG'),
(32, '2-(4-chlorphenoxy)-ethanol', NULL, NULL, NULL),
(33, '2-benzhydryloxyethyl)diethyl-methylammonium iodide', NULL, NULL, NULL),
(34, '3-c', NULL, NULL, NULL),
(35, '3-f', NULL, NULL, NULL),
(36, '3-geocef', NULL, NULL, NULL),
(37, '3rd-cef', NULL, NULL, NULL),
(38, '5-FU', NULL, NULL, NULL),
(39, 'A-bi', NULL, NULL, NULL),
(40, 'A-cal', NULL, NULL, NULL),
(41, 'A-calm', NULL, NULL, NULL),
(42, 'A-card', NULL, NULL, NULL),
(43, 'A-clox', NULL, NULL, NULL),
(44, 'A-cof', NULL, NULL, NULL),
(45, 'A-cold', NULL, NULL, NULL),
(46, 'A-fenac', NULL, NULL, NULL),
(47, 'A-flox', NULL, NULL, NULL),
(48, 'A-forte soft', NULL, NULL, NULL),
(49, 'A-mycin', NULL, NULL, NULL),
(50, 'A-rox', NULL, NULL, NULL),
(51, 'A-tetra', NULL, NULL, NULL),
(52, 'A-vit soft', NULL, NULL, NULL),
(53, 'Abac', NULL, NULL, NULL),
(54, 'Abacavir', NULL, NULL, NULL),
(55, 'Abarelix', NULL, NULL, NULL),
(56, 'Abatacept', NULL, NULL, NULL),
(57, 'Abciximab', NULL, NULL, NULL),
(58, 'Abdorin', NULL, NULL, NULL),
(59, 'Abetimus', NULL, NULL, NULL),
(60, 'Abex', NULL, NULL, NULL),
(61, 'absorbable gelatin sponge', NULL, NULL, NULL),
(62, 'Ac pr', NULL, NULL, NULL),
(63, 'Acadesine', NULL, NULL, NULL),
(64, 'Acamprosate', NULL, NULL, NULL),
(65, 'Acarbose', NULL, NULL, NULL),
(66, 'Ace', NULL, NULL, NULL),
(67, 'Ace Plus', NULL, NULL, NULL),
(68, 'Acebid', NULL, NULL, NULL),
(69, 'Acebutolol', NULL, NULL, NULL),
(70, 'acebutolol and Thiazides', NULL, NULL, NULL),
(71, 'Aceclidine', NULL, NULL, NULL),
(72, 'Aceclidine', NULL, NULL, NULL),
(73, 'Combinations', NULL, NULL, NULL),
(74, 'Acecloben', NULL, NULL, NULL),
(75, 'Aceclofenac', NULL, NULL, NULL),
(76, 'Acecol', NULL, NULL, NULL),
(77, 'Acefenac', NULL, NULL, NULL),
(78, 'Acefra', NULL, NULL, NULL),
(79, 'Acefylline Piperazine', NULL, NULL, NULL),
(80, 'Acelex', NULL, NULL, NULL),
(81, 'Acelock', NULL, NULL, NULL),
(82, 'Acemetacin', NULL, NULL, NULL),
(83, 'Acenac', NULL, NULL, NULL),
(84, 'Acenocoumarol', NULL, NULL, NULL),
(85, 'Acep', NULL, NULL, NULL),
(86, 'Acep Plus', NULL, NULL, NULL),
(87, 'Acepro', NULL, NULL, NULL),
(88, 'Acepromazine', NULL, NULL, NULL),
(89, 'Aces Plus', NULL, NULL, NULL),
(90, 'Aceta', NULL, NULL, NULL),
(91, 'Aceta-x', NULL, NULL, NULL),
(92, 'Acetarsol', NULL, NULL, NULL),
(93, 'Acetazolamide', NULL, NULL, NULL),
(94, 'Acetic Acid', NULL, NULL, NULL),
(95, 'Acetohexamide', NULL, NULL, NULL),
(96, 'Acetohydroxamic Acid', NULL, NULL, NULL),
(97, 'Acetophen', NULL, NULL, NULL),
(98, 'Acetophenazine', NULL, NULL, NULL),
(99, 'Acetoxolone', NULL, NULL, NULL),
(100, 'Acetylcarnitine', NULL, NULL, NULL),
(101, 'Acetyldigitoxin', NULL, NULL, NULL),
(102, 'Acetyldigoxin', NULL, NULL, NULL),
(103, 'Acetyldihydrocodeine', NULL, NULL, NULL),
(104, 'Acetylglycinamide Chloral Hydrate', NULL, NULL, NULL),
(105, 'Acetyleucine', NULL, NULL, NULL),
(106, 'Acflam', NULL, NULL, NULL),
(107, 'Acical', NULL, NULL, NULL),
(108, 'Acical-D', NULL, NULL, NULL),
(109, 'Acical-M', NULL, NULL, NULL),
(110, 'aciclovir', NULL, NULL, NULL),
(111, 'Acicot', NULL, NULL, NULL),
(112, 'Acicox', NULL, NULL, NULL),
(113, 'Aciflox', NULL, NULL, NULL),
(114, 'Aciphin', NULL, NULL, NULL),
(115, 'Acipimox', NULL, NULL, NULL),
(116, 'Aciprin CV', NULL, NULL, NULL),
(117, 'Acitretin', NULL, NULL, NULL),
(118, 'Acitrin', NULL, NULL, NULL),
(119, 'Aclarubicin', NULL, NULL, NULL),
(120, 'Aclasta', NULL, NULL, NULL),
(121, 'Aclene', NULL, NULL, NULL),
(122, 'Acliz', NULL, NULL, NULL),
(123, 'Acliz plus', NULL, NULL, NULL),
(124, 'Aclo', NULL, NULL, NULL),
(125, 'Aclovix', NULL, NULL, NULL),
(126, 'Acmecilin', NULL, NULL, NULL),
(127, 'Acn', NULL, NULL, NULL),
(128, 'Acorex', NULL, NULL, NULL),
(129, 'Acriflavinium chloride', NULL, NULL, NULL),
(130, 'Acrivastine', NULL, NULL, NULL),
(131, 'Act', NULL, NULL, NULL),
(132, 'Act plus', NULL, NULL, NULL),
(133, 'Actidex', NULL, NULL, NULL),
(134, 'Actifed', NULL, NULL, NULL),
(135, 'Actifex', NULL, NULL, NULL),
(136, 'Actinase', NULL, NULL, NULL),
(137, 'Actine', NULL, NULL, NULL),
(138, 'Actisal', NULL, NULL, NULL),
(139, 'Active Plus', NULL, NULL, NULL),
(140, 'Activit Silver', NULL, NULL, NULL),
(141, 'Activit Z', NULL, NULL, NULL),
(142, 'Activit ZI', NULL, NULL, NULL),
(143, 'Actizen', NULL, NULL, NULL),
(144, 'Actol', NULL, NULL, NULL),
(145, 'Actolin', NULL, NULL, NULL),
(146, 'Actomeg', NULL, NULL, NULL),
(147, 'Actonel', NULL, NULL, NULL),
(148, 'Actose', NULL, NULL, NULL),
(149, 'Actrapid', NULL, NULL, NULL),
(150, 'Actrim', NULL, NULL, NULL),
(151, 'Acupain', NULL, NULL, NULL),
(152, 'Acuren', NULL, NULL, NULL),
(153, 'Acuten', NULL, NULL, NULL),
(154, 'Adalimumab', NULL, NULL, NULL),
(155, 'Adapalene', NULL, NULL, NULL),
(156, 'Adapalene, combinations', NULL, NULL, NULL),
(157, 'Adecef', NULL, NULL, NULL),
(158, 'Adefovir dipivoxil', NULL, NULL, NULL),
(159, 'Adelax', NULL, NULL, NULL),
(160, 'Ademetionine', NULL, NULL, NULL),
(161, 'Adenosine', NULL, NULL, NULL),
(162, 'Adexim', NULL, NULL, NULL),
(163, 'Adfovir', NULL, NULL, NULL),
(164, 'Adglim', NULL, NULL, NULL),
(165, 'Adinazolam', NULL, NULL, NULL),
(166, 'Adinir', NULL, NULL, NULL),
(167, 'Adiponil', NULL, NULL, NULL),
(168, 'Adiva', NULL, NULL, NULL),
(169, 'Admira', NULL, NULL, NULL),
(170, 'Adnor', NULL, NULL, NULL),
(171, 'Adocef', NULL, NULL, NULL),
(172, 'Adocil', NULL, NULL, NULL),
(173, 'Adolin', NULL, NULL, NULL),
(174, 'Adora', NULL, NULL, NULL),
(175, 'Adovir', NULL, NULL, NULL),
(176, 'Adpas', NULL, NULL, NULL),
(177, 'Adrafinil', NULL, NULL, NULL),
(178, 'Adrenalone', NULL, NULL, NULL),
(179, 'Adriblastina', NULL, NULL, NULL),
(180, 'Adrox', NULL, NULL, NULL),
(181, 'Adryl', NULL, NULL, NULL),
(182, 'Ads', NULL, NULL, NULL),
(183, 'Aduvit', NULL, NULL, NULL),
(184, 'Aerodyl', NULL, NULL, NULL),
(185, 'Aerofen', NULL, NULL, NULL),
(186, 'Aeron', NULL, NULL, NULL),
(187, 'Aeronid', NULL, NULL, NULL),
(188, 'Aeropac', NULL, NULL, NULL),
(189, 'Aerovil', NULL, NULL, NULL),
(190, 'Afelimomab', NULL, NULL, NULL),
(191, 'Afix', NULL, NULL, NULL),
(192, 'Afixime', NULL, NULL, NULL),
(193, 'Afluzole', NULL, NULL, NULL),
(194, 'Afrin', NULL, NULL, NULL),
(195, 'Afun', NULL, NULL, NULL),
(196, 'Afuvin', NULL, NULL, NULL),
(197, 'Agalsidase alfa', NULL, NULL, NULL),
(198, 'Agalsidase beta', NULL, NULL, NULL),
(199, 'Age-M', NULL, NULL, NULL),
(200, 'Age-Plus', NULL, NULL, NULL),
(201, 'Agedefy', NULL, NULL, NULL),
(202, 'Agomelatine', NULL, NULL, NULL),
(203, 'Aire', NULL, NULL, NULL),
(204, 'Ajmaline', NULL, NULL, NULL),
(205, 'Al', NULL, NULL, NULL),
(206, 'Alacot', NULL, NULL, NULL),
(207, 'Alagra', NULL, NULL, NULL),
(208, 'Alanyl glutamine', NULL, NULL, NULL),
(209, 'Alaproclate', NULL, NULL, NULL),
(210, 'Alarex', NULL, NULL, NULL),
(211, 'Alarid', NULL, NULL, NULL),
(212, 'Alatrol', NULL, NULL, NULL),
(213, 'Alba', NULL, NULL, NULL),
(214, 'Albamax', NULL, NULL, NULL),
(215, 'Albaplex', NULL, NULL, NULL),
(216, 'Albatab', NULL, NULL, NULL),
(217, 'Albenda', NULL, NULL, NULL),
(218, 'Albendazole', NULL, NULL, NULL),
(219, 'Albendol', NULL, NULL, NULL),
(220, 'Albezen', NULL, NULL, NULL),
(221, 'Albezole', NULL, NULL, NULL),
(222, 'Albrex', NULL, NULL, NULL),
(223, 'Albumin', NULL, NULL, NULL),
(224, 'Albumin tannate', NULL, NULL, NULL),
(225, 'Albutein', NULL, NULL, NULL),
(226, 'Alcet', NULL, NULL, NULL),
(227, 'Alclofenac', NULL, NULL, NULL),
(228, 'Alclometasone', NULL, NULL, NULL),
(229, 'Alcofen', NULL, NULL, NULL),
(230, 'Alcot', NULL, NULL, NULL),
(231, 'Alcuronium', NULL, NULL, NULL),
(232, 'Alda', NULL, NULL, NULL),
(233, 'Aldaben', NULL, NULL, NULL),
(234, 'Aldes', NULL, NULL, NULL),
(235, 'Aldesleukin', NULL, NULL, NULL),
(236, 'Aldesulfone sodium', NULL, NULL, NULL),
(237, 'Aldex', NULL, NULL, NULL),
(238, 'Aldin', NULL, NULL, NULL),
(239, 'Aldorin', NULL, NULL, NULL),
(240, 'Aldosterone', NULL, NULL, NULL),
(241, 'Alefacept', NULL, NULL, NULL),
(242, 'Alemtuzumab', NULL, NULL, NULL),
(243, 'Alen-d', NULL, NULL, NULL),
(244, 'Alendon', NULL, NULL, NULL),
(245, 'Alendronate', NULL, NULL, NULL),
(246, 'Alendronic acid', NULL, NULL, NULL),
(247, 'Alentin', NULL, NULL, NULL),
(248, 'Alert', NULL, NULL, NULL),
(249, 'Alertadin', NULL, NULL, NULL),
(250, 'Alervil', NULL, NULL, NULL),
(251, 'Aletrin', NULL, NULL, NULL),
(252, 'Alexid', NULL, NULL, NULL),
(253, 'Alexin', NULL, NULL, NULL),
(254, 'Alfa-E', NULL, NULL, NULL),
(255, 'Alfa1 antitrypsin', NULL, NULL, NULL),
(256, 'Alfacalcidol', NULL, NULL, NULL),
(257, 'Alfasin XR', NULL, NULL, NULL),
(258, 'Alfaxalone', NULL, NULL, NULL),
(259, 'Alfentanil', NULL, NULL, NULL),
(260, 'Alfuzosin', NULL, NULL, NULL),
(261, 'Algeldrate', NULL, NULL, NULL),
(262, 'Algex', NULL, NULL, NULL),
(263, 'Alginic acid', NULL, NULL, NULL),
(264, 'Alglucerase', NULL, NULL, NULL),
(265, 'Alglucosidase alfa', NULL, NULL, NULL),
(266, 'Alic', NULL, NULL, NULL),
(267, 'Alidex', NULL, NULL, NULL),
(268, 'Alimag', NULL, NULL, NULL),
(269, 'Alimemazine', NULL, NULL, NULL),
(270, 'Alipogene tiparvovec', NULL, NULL, NULL),
(271, 'Aliskiren', NULL, NULL, NULL),
(272, 'Alitretinoin', NULL, NULL, NULL),
(273, 'Alizapride', NULL, NULL, NULL),
(274, 'Alkeran', NULL, NULL, NULL),
(275, 'Allbeevit', NULL, NULL, NULL),
(276, 'Allbeevit-M', NULL, NULL, NULL),
(277, 'Allercet', NULL, NULL, NULL),
(278, 'Allermine', NULL, NULL, NULL),
(279, 'Allernil', NULL, NULL, NULL),
(280, 'Allobarbital', NULL, NULL, NULL),
(281, 'Allopurinol', NULL, NULL, NULL),
(282, 'Allopurinol, combinations', NULL, NULL, NULL),
(283, 'Allphen', NULL, NULL, NULL),
(284, 'Allylestrenol', NULL, NULL, NULL),
(285, 'Almagate', NULL, NULL, NULL),
(286, 'Almasilate', NULL, NULL, NULL),
(287, 'Almex', NULL, NULL, NULL),
(288, 'Almin', NULL, NULL, NULL),
(289, 'Alminoprofen', NULL, NULL, NULL),
(290, 'Almitrine', NULL, NULL, NULL),
(291, 'Almitrine and raubasine', NULL, NULL, NULL),
(292, 'Almotriptan', NULL, NULL, NULL),
(293, 'Almoxil', NULL, NULL, NULL),
(294, 'Alneed', NULL, NULL, NULL),
(295, 'Aloglutamol', NULL, NULL, NULL),
(296, 'Alon', NULL, NULL, NULL),
(297, 'Alona', NULL, NULL, NULL),
(298, 'Alor', NULL, NULL, NULL),
(299, 'Aloran', NULL, NULL, NULL),
(300, 'Aloric', NULL, NULL, NULL),
(301, 'Alosetron', NULL, NULL, NULL),
(302, 'Aloxif', NULL, NULL, NULL),
(303, 'Aloxiprin', NULL, NULL, NULL),
(304, 'Alpam', NULL, NULL, NULL),
(305, 'Alphin', NULL, NULL, NULL),
(306, 'Alprax', NULL, NULL, NULL),
(307, 'Alprazolam', NULL, NULL, NULL),
(308, 'Alprenolol', NULL, NULL, NULL),
(309, 'Alpro', NULL, NULL, NULL),
(310, 'Alprostadil', NULL, NULL, NULL),
(311, 'Alsone', NULL, NULL, NULL),
(312, 'Alsporin', NULL, NULL, NULL),
(313, 'Alteplase', NULL, NULL, NULL),
(314, 'Althea root', NULL, NULL, NULL),
(315, 'Altretamine', NULL, NULL, NULL),
(316, 'Alucil-S', NULL, NULL, NULL),
(317, 'Aluctin', NULL, NULL, NULL),
(318, 'Alugel', NULL, NULL, NULL),
(319, 'Aluminium acetoacetate', NULL, NULL, NULL),
(320, 'Aluminium acetotartrate', NULL, NULL, NULL),
(321, 'Aluminium chloride', NULL, NULL, NULL),
(322, 'Aluminium chlorohydrate', NULL, NULL, NULL),
(323, 'Aluminium clofibrate', NULL, NULL, NULL),
(324, 'Aluminium glycinate', NULL, NULL, NULL),
(325, 'Aluminium hydroxide', NULL, NULL, NULL),
(326, 'Aluminium nicotinate', NULL, NULL, NULL),
(327, 'Aluminium oxide', NULL, NULL, NULL),
(328, 'Aluminium phosphate', NULL, NULL, NULL),
(329, 'Aluminium preparations', NULL, NULL, NULL),
(330, 'Aluminium, calcium and magnesium combinations', NULL, NULL, NULL),
(331, 'Aluric', NULL, NULL, NULL),
(332, 'Alurol', NULL, NULL, NULL),
(333, 'Alverine', NULL, NULL, NULL),
(334, 'Alverine, combinations', NULL, NULL, NULL),
(335, 'Alvital', NULL, NULL, NULL),
(336, 'Alvolex', NULL, NULL, NULL),
(337, 'Alzed', NULL, NULL, NULL),
(338, 'Alzen', NULL, NULL, NULL),
(339, 'Alzol', NULL, NULL, NULL),
(340, 'Amantadine', NULL, NULL, NULL),
(341, 'Amaryl', NULL, NULL, NULL),
(342, 'Amason', NULL, NULL, NULL),
(343, 'Ambazone', NULL, NULL, NULL),
(344, 'Ambeecal', NULL, NULL, NULL),
(345, 'Ambeecal-D', NULL, NULL, NULL),
(346, 'Ambeeclox', NULL, NULL, NULL),
(347, 'Ambeexin', NULL, NULL, NULL),
(348, 'Ambenonium', NULL, NULL, NULL),
(349, 'Ambolyt', NULL, NULL, NULL),
(350, 'Ambosil', NULL, NULL, NULL),
(351, 'Amboten', NULL, NULL, NULL),
(352, 'Amboxol', NULL, NULL, NULL),
(353, 'Ambrisentan', NULL, NULL, NULL),
(354, 'Ambrosol', NULL, NULL, NULL),
(355, 'Ambrox', NULL, NULL, NULL),
(356, 'Ambroxol', NULL, NULL, NULL),
(357, 'Ambutonium and psycholeptics', NULL, NULL, NULL),
(358, 'Amcinonide', NULL, NULL, NULL),
(359, 'Amdin', NULL, NULL, NULL),
(360, 'Amdocal', NULL, NULL, NULL),
(361, 'Amdocal Plus', NULL, NULL, NULL),
(362, 'Amdoper', NULL, NULL, NULL),
(363, 'Amdopin', NULL, NULL, NULL),
(364, 'Amdopril', NULL, NULL, NULL),
(365, 'Ameloss', NULL, NULL, NULL),
(366, 'Ametil', NULL, NULL, NULL),
(367, 'Ametrol', NULL, NULL, NULL),
(368, 'Ametrol VT', NULL, NULL, NULL),
(369, 'Amezol', NULL, NULL, NULL),
(370, 'Amfepramone', NULL, NULL, NULL),
(371, 'Amfetamine', NULL, NULL, NULL),
(372, 'Amibac', NULL, NULL, NULL),
(373, 'Amifampridine', NULL, NULL, NULL),
(374, 'Amikacin', NULL, NULL, NULL),
(375, 'Amilax', NULL, NULL, NULL),
(376, 'Amiloride', NULL, NULL, NULL),
(377, 'Amineptine', NULL, NULL, NULL),
(378, 'Amino acids', NULL, NULL, NULL),
(379, 'Amino(diphenylhydantoin) valeric acid', NULL, NULL, NULL),
(380, 'Aminoacridine', NULL, NULL, NULL),
(381, 'Aminobenzoic acid', NULL, NULL, NULL),
(382, 'Aminobutyric acid', NULL, NULL, NULL),
(383, 'Aminocaproic acid', NULL, NULL, NULL),
(384, 'Aminoglutethimide', NULL, NULL, NULL),
(385, 'Aminolevulinic acid', NULL, NULL, NULL),
(386, 'Aminomethylbenzoic acid', NULL, NULL, NULL),
(387, 'Aminophenazone', NULL, NULL, NULL),
(388, 'Aminophenazone, combinations excl. psycholeptics', NULL, NULL, NULL),
(389, 'Aminophenazone, combinations with psycholeptics', NULL, NULL, NULL),
(390, 'Aminophylline', NULL, NULL, NULL),
(391, 'Aminophylline and adrenergics', NULL, NULL, NULL),
(392, 'Aminophylline, combinations', NULL, NULL, NULL),
(393, 'Aminosalicylic acid', NULL, NULL, NULL),
(394, 'Amiodarone', NULL, NULL, NULL),
(395, 'Amiquin', NULL, NULL, NULL),
(396, 'Amisol', NULL, NULL, NULL),
(397, 'Amisulpride', NULL, NULL, NULL),
(398, 'Amitriptyline', NULL, NULL, NULL),
(399, 'Amitriptyline and psycholeptics', NULL, NULL, NULL),
(400, 'Amival', NULL, NULL, NULL),
(401, 'Amlexanox', NULL, NULL, NULL),
(402, 'Amlo', NULL, NULL, NULL),
(403, 'Amlocard', NULL, NULL, NULL),
(404, 'Amlodipine', NULL, NULL, NULL),
(405, 'Amlodipine and atenolol', NULL, NULL, NULL),
(406, 'Amlodipine and benazepril hydrochloride', NULL, NULL, NULL),
(407, 'Amlosartan', NULL, NULL, NULL),
(408, 'Amlosin', NULL, NULL, NULL),
(409, 'Amlotab', NULL, NULL, NULL),
(410, 'Amlovas', NULL, NULL, NULL),
(411, 'Amlovas VS', NULL, NULL, NULL),
(412, 'Amlowide', NULL, NULL, NULL),
(413, 'Ammonium chloride', NULL, NULL, NULL),
(414, 'Amo', NULL, NULL, NULL),
(415, 'Amobarbital', NULL, NULL, NULL),
(416, 'Amobin', NULL, NULL, NULL),
(417, 'Amocal', NULL, NULL, NULL),
(418, 'Amocap', NULL, NULL, NULL),
(419, 'Amocil', NULL, NULL, NULL),
(420, 'Amocin', NULL, NULL, NULL),
(421, 'Amoclav', NULL, NULL, NULL),
(422, 'Amodiaquine', NULL, NULL, NULL),
(423, 'Amodis', NULL, NULL, NULL),
(424, 'Amogit', NULL, NULL, NULL),
(425, 'Amorolfine', NULL, NULL, NULL),
(426, 'Amotid', NULL, NULL, NULL),
(427, 'Amotrex', NULL, NULL, NULL),
(428, 'Amox', NULL, NULL, NULL),
(429, 'Amoxapine', NULL, NULL, NULL),
(430, 'Amoxi', NULL, NULL, NULL),
(431, 'Amoxic', NULL, NULL, NULL),
(432, 'Amoxicap', NULL, NULL, NULL),
(433, 'Amoxicillin', NULL, NULL, NULL),
(434, 'Amoxicillin and clavulanic acid', NULL, NULL, NULL),
(435, 'Amoxicon', NULL, NULL, NULL),
(436, 'Amoxil', NULL, NULL, NULL),
(437, 'Amoxima', NULL, NULL, NULL),
(438, 'Amoxipan', NULL, NULL, NULL),
(439, 'Amoxizen', NULL, NULL, NULL),
(440, 'Amoxon', NULL, NULL, NULL),
(441, 'Ampexin', NULL, NULL, NULL),
(442, 'Amphotericin B', NULL, NULL, NULL),
(443, 'Ampicillin', NULL, NULL, NULL),
(444, 'Ampicillin and enzyme inhibitor', NULL, NULL, NULL),
(445, 'Ampicillin, combinations', NULL, NULL, NULL),
(446, 'Ampil', NULL, NULL, NULL),
(447, 'Ampimet', NULL, NULL, NULL),
(448, 'Ampirex', NULL, NULL, NULL),
(449, 'Ampre', NULL, NULL, NULL),
(450, 'Amprenavir', NULL, NULL, NULL),
(451, 'Amrinone', NULL, NULL, NULL),
(452, 'Amsacrine', NULL, NULL, NULL),
(453, 'Amsiv', NULL, NULL, NULL),
(454, 'Anabolin', NULL, NULL, NULL),
(455, 'Anacort', NULL, NULL, NULL),
(456, 'Anadol', NULL, NULL, NULL),
(457, 'Anafen', NULL, NULL, NULL),
(458, 'Anaflam', NULL, NULL, NULL),
(459, 'Anaflex', NULL, NULL, NULL),
(460, 'Anafranil', NULL, NULL, NULL),
(461, 'Anagrelide', NULL, NULL, NULL),
(462, 'Anakinra', NULL, NULL, NULL),
(463, 'Analac', NULL, NULL, NULL),
(464, 'Analgen', NULL, NULL, NULL),
(465, 'Analor', NULL, NULL, NULL),
(466, 'Analpain', NULL, NULL, NULL),
(467, 'Anamet', NULL, NULL, NULL),
(468, 'Anapril', NULL, NULL, NULL),
(469, 'Anaroxyl', NULL, NULL, NULL),
(470, 'Anastrozole', NULL, NULL, NULL),
(471, 'Anaxyl', NULL, NULL, NULL),
(472, 'Anca', NULL, NULL, NULL),
(473, 'Ancef', NULL, NULL, NULL),
(474, 'Ancestim', NULL, NULL, NULL),
(475, 'Ancidplus (DS)', NULL, NULL, NULL),
(476, 'Anclog', NULL, NULL, NULL),
(477, 'Anclog Plus', NULL, NULL, NULL),
(478, 'Ancotil', NULL, NULL, NULL),
(479, 'Ancrod', NULL, NULL, NULL),
(480, 'Andep', NULL, NULL, NULL),
(481, 'Andriol testocaps', NULL, NULL, NULL),
(482, 'Androstanolone', NULL, NULL, NULL),
(483, 'Anecortave', NULL, NULL, NULL),
(484, 'Aneron', NULL, NULL, NULL),
(485, 'Anestho', NULL, NULL, NULL),
(486, 'Anethole trithione', NULL, NULL, NULL),
(487, 'Anexate', NULL, NULL, NULL),
(488, 'Anfasil', NULL, NULL, NULL),
(489, 'Anflu', NULL, NULL, NULL),
(490, 'Anfree', NULL, NULL, NULL),
(491, 'Angicard', NULL, NULL, NULL),
(492, 'Angifix', NULL, NULL, NULL),
(493, 'Angilock', NULL, NULL, NULL),
(494, 'Angilock Plus', NULL, NULL, NULL),
(495, 'Angimet', NULL, NULL, NULL),
(496, 'Angimil', NULL, NULL, NULL),
(497, 'Angin', NULL, NULL, NULL),
(498, 'Anginox', NULL, NULL, NULL),
(499, 'Angiotensinamide', NULL, NULL, NULL),
(500, 'Angiprin', NULL, NULL, NULL),
(501, 'Angist', NULL, NULL, NULL),
(502, 'Angivent', NULL, NULL, NULL),
(503, 'Anidulafungin', NULL, NULL, NULL),
(504, 'Anileridine', NULL, NULL, NULL),
(505, 'Aniracetam', NULL, NULL, NULL),
(506, 'Anistreplase', NULL, NULL, NULL),
(507, 'Ankof', NULL, NULL, NULL),
(508, 'Anlet', NULL, NULL, NULL),
(509, 'Anlet Plus', NULL, NULL, NULL),
(510, 'Anlev', NULL, NULL, NULL),
(511, 'Anodyne', NULL, NULL, NULL),
(512, 'Napa', NULL, NULL, NULL),
(513, 'Parasitamol', NULL, NULL, NULL),
(514, 'Omiprazol 300MG', NULL, NULL, NULL),
(515, 'Pantid 40 MG IV', NULL, NULL, NULL),
(516, 'Pantid 50 MG', NULL, NULL, NULL),
(518, 'Larb 25 MG', NULL, NULL, NULL),
(519, 'Bislol 2.5 MG', NULL, NULL, NULL),
(520, 'Bislol 5 MG', NULL, NULL, NULL),
(521, 'Trilock 10 MG', NULL, NULL, NULL),
(522, 't', NULL, NULL, NULL),
(523, 'Bislol 10 MG', NULL, NULL, NULL),
(524, '', NULL, NULL, NULL),
(525, 'Trilock 4 MG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE IF NOT EXISTS `duration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`id`, `duration`) VALUES
(1, '1 Day'),
(2, '2 Day'),
(3, '3 Day'),
(4, '4 Day'),
(5, '5 Day'),
(6, '6 Day'),
(7, '7 Day'),
(8, '8 Day'),
(9, '9 Day'),
(10, '10 Day'),
(11, '11 Day'),
(12, '12 Day'),
(13, '13 Day'),
(14, '14 Day'),
(15, '15 Day'),
(16, 'One week'),
(17, 'Two week'),
(18, 'Three Week'),
(19, 'Four Week'),
(20, 'Five Week'),
(21, 'Six Week'),
(22, 'Seven Week'),
(23, 'Eight Week'),
(24, 'Nine Week'),
(25, 'Ten Week'),
(26, 'Eleven Week'),
(27, 'Twelve Week'),
(28, 'Thirteen Week'),
(29, 'Fourteen Week'),
(30, 'Fifteen Week'),
(31, '20 Days'),
(32, ''),
(33, '90 Days');

-- --------------------------------------------------------

--
-- Table structure for table `group_list`
--

CREATE TABLE IF NOT EXISTS `group_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `drug` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group_list`
--

INSERT INTO `group_list` (`id`, `g_name`, `drug`) VALUES
(1, 'Diabetis', 'napa'),
(2, 'Non Diabetis', 'ciprosin');

-- --------------------------------------------------------

--
-- Table structure for table `investigation_catagory`
--

CREATE TABLE IF NOT EXISTS `investigation_catagory` (
  `invst_cata_id` int(11) NOT NULL AUTO_INCREMENT,
  `cata_of_invst` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`invst_cata_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `investigation_catagory`
--

INSERT INTO `investigation_catagory` (`invst_cata_id`, `cata_of_invst`) VALUES
(1, 'Haematological Exam'),
(2, 'Biochemical Exam'),
(3, 'Microbiological Exam'),
(4, 'Serology Exam'),
(5, 'Immunology Exam'),
(6, 'Urine Exam'),
(7, 'Stool Exam'),
(8, 'Clinical Pathology'),
(9, 'Other Exam'),
(10, 'MRI'),
(11, 'Multi-Slice CT SCAN'),
(12, 'MAMMOGRAM'),
(13, 'X-RAYS'),
(14, 'OPG'),
(15, 'CONTRAST X-RAYS'),
(16, 'UNTRASOUND IMAGING');

-- --------------------------------------------------------

--
-- Table structure for table `investigation_list`
--

CREATE TABLE IF NOT EXISTS `investigation_list` (
  `invst_id` int(11) NOT NULL AUTO_INCREMENT,
  `invst_cata_id` int(11) NOT NULL DEFAULT '0',
  `investigation` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`invst_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=298 ;

--
-- Dumping data for table `investigation_list`
--

INSERT INTO `investigation_list` (`invst_id`, `invst_cata_id`, `investigation`) VALUES
(1, 1, 'CBC/CP'),
(2, 1, 'TC'),
(3, 1, 'DC'),
(4, 1, 'Hb%'),
(5, 1, 'ESR'),
(6, 1, 'Platelet Count'),
(7, 1, 'Blood Film'),
(8, 1, 'Reticulocyte Count'),
(9, 1, 'MP'),
(10, 1, 'BT'),
(11, 1, 'CT'),
(12, 1, 'CE'),
(13, 1, 'COUNT'),
(14, 1, 'LE CELL'),
(15, 2, 'Sugar Fasting'),
(16, 2, 'Sugar Random'),
(17, 2, 'After 2Hrs.ABF'),
(18, 2, 'After 2Hrs 7gm. Glucose'),
(19, 2, 'Glucose Tolerance test (GTI)'),
(20, 2, 'HbA1C'),
(21, 2, 'Serum Bilirubin (Total)'),
(22, 2, 'Serum Bilirubin (Direct)'),
(23, 2, 'Serum Bilirubin (indirect)'),
(24, 2, 'SGPT (ALT)'),
(25, 2, 'SGOT (AST)'),
(26, 2, 'Alk.Phosphatse'),
(27, 2, 'Acid Phosphatse'),
(28, 2, 'Lipid profile'),
(29, 2, 'Serum Cholesterol'),
(30, 2, 'Serum Triglyceride'),
(31, 2, 'HDL Cholesterol'),
(32, 2, 'LDL Cholesterol'),
(33, 2, 'Serum Creatinine'),
(34, 2, 'Urea/Bun'),
(35, 2, 'Albumin'),
(36, 2, 'Serum Total Protein'),
(37, 2, 'Globulin'),
(38, 2, 'AG Ratio'),
(39, 2, 'CK-MB'),
(40, 2, 'LDH'),
(41, 2, 'CPK/CK'),
(42, 2, 'Serum Amylase'),
(43, 2, 'Serum Phosphate'),
(44, 2, 'Serum Calcium'),
(45, 2, 'Serum Uric Acid'),
(46, 2, 'Serum Lipase'),
(47, 2, 'Serum Aldolase'),
(48, 2, 'Serum lithium'),
(49, 2, 'Hb Electrophoresis'),
(50, 2, 'Protein Electrophoresis'),
(51, 2, 'Serum Magnesium'),
(52, 2, 'Serum Iron'),
(53, 2, 'Serum TIBC'),
(54, 2, 'Serum Electrolytes'),
(55, 2, ' Serum Electrolytes NA+'),
(56, 2, 'Serum Electrolytes K+'),
(57, 2, 'Serum Electrolytes Cl-'),
(58, 2, 'Serum Electrolytes TCO2'),
(59, 3, 'Blood for C/S (Fan Method)'),
(60, 3, 'Urine For C/S (Fan Method)'),
(61, 3, 'Urine For C/S'),
(62, 3, 'Stool For C/S'),
(63, 3, 'Throat Swab  for C/S'),
(64, 3, 'Sputum for C/S'),
(65, 3, 'Sputum for ABF C/S'),
(66, 3, 'Urine Swab  for C/S'),
(67, 3, 'Wound Swab  for C/S'),
(68, 3, 'Vaginal Swab  for C/S'),
(69, 3, 'Umblical smear for C/S'),
(70, 3, 'Conjunctival Swab  for C/S'),
(71, 3, 'Prostatic smear for C/S'),
(72, 3, 'Urethral smear for C/S'),
(73, 3, 'Aural Swab for C/S'),
(74, 3, 'Fungus  for C/S'),
(75, 3, 'CSF for C/S'),
(76, 3, 'Ascitic fluid for C/S'),
(77, 3, 'Pleural fluid for C/S'),
(78, 4, 'ASO Titer'),
(79, 4, 'R.A/R.F .Test'),
(80, 4, 'CRP'),
(81, 4, 'Widal Test'),
(82, 4, 'Febrile /Triple Antigen'),
(83, 4, 'Rose Waller Test'),
(84, 4, 'VDRL'),
(85, 4, 'VDRL (Qlty Qnty)'),
(86, 4, 'TPHA'),
(87, 4, 'TPHA (Qlty Qnty)'),
(88, 4, 'Prothroombin Time'),
(89, 4, 'APTT'),
(90, 4, 'lgE'),
(91, 4, 'Blood group  &Rh factor'),
(92, 4, 'Rh .Antibody titre'),
(93, 4, 'Coomb`s test (Direct/indirect)'),
(94, 4, 'Dengue Virus ab lgG'),
(95, 4, 'Dengue Virus ab lgM'),
(96, 4, 'Helicobacter Pylori (H.Pylori)Ab'),
(97, 4, 'TB (ICT)'),
(98, 4, 'HBsAg (ICT)'),
(99, 4, 'Malaria (ICT)'),
(100, 4, 'Filaira (ICT)'),
(101, 4, 'CFT for Filaira'),
(102, 5, 'HBsAg (E)'),
(103, 5, 'HBeAg'),
(104, 5, 'T3'),
(105, 5, 'T4'),
(106, 5, 'TSH'),
(107, 5, 'FT3'),
(108, 5, 'FT4'),
(109, 5, 'Testosterone'),
(110, 5, 'Prolactin'),
(111, 5, 'Progesterone'),
(112, 5, 'Estrogen/Estradiol'),
(113, 5, 'Anti HAV-lgM'),
(114, 5, 'Anti HBC- lgM'),
(115, 5, 'Anti -HBs'),
(116, 5, 'Anti-HCV'),
(117, 5, 'AntiHBC'),
(118, 5, 'Anti HBE- lgM'),
(119, 5, 'Anti-TB lgA/lgG/lgm'),
(120, 5, 'Serum Ferritin'),
(121, 5, 'Cortisol'),
(122, 5, 'B-Natriuretic Peptide (BNP)'),
(123, 5, 'LH'),
(124, 5, 'FSH'),
(125, 5, 'AFP'),
(126, 5, 'CEA'),
(127, 5, 'PSA'),
(128, 5, 'Free PSA'),
(129, 5, 'B-HCG'),
(130, 5, 'ANA/ANF'),
(131, 5, 'Anti dsDNA'),
(132, 5, 'HIV  Test (Type 1&2)'),
(133, 5, 'CA-125'),
(134, 5, 'CA-19.9'),
(135, 5, 'CA-15.3'),
(136, 5, 'Troponin-1'),
(137, 5, 'Vitamin B12'),
(138, 5, 'Folic acid/Folate'),
(139, 5, 'Insulin'),
(140, 5, 'pANAC'),
(141, 5, 'cANCA'),
(142, 5, 'Anti ?Sperm Ab'),
(143, 5, 'Opiates'),
(144, 5, 'Cannabinoids'),
(145, 5, 'Benzodiazpine'),
(146, 5, 'Anti Thyroglobulin'),
(147, 5, 'TORCH Panel (HSB 1& 2 texo,cmv.Rubella)'),
(148, 6, 'Urine R/E'),
(149, 6, 'Urine M/E'),
(150, 6, 'Urine PT'),
(151, 6, 'Urine Bence jones Protein'),
(152, 6, 'Bill Salts'),
(153, 6, 'Bill Pigment'),
(154, 6, 'Urobilinogen'),
(155, 6, 'Urine 24Hrs.Total Protein/Calcium/Phophate/Uric Acid'),
(156, 6, 'CCR(Creatinine Clearance Rate)'),
(157, 6, 'ACR (Albumin Creatinine Ratio)'),
(158, 6, '24Hrs. Urine For ABF'),
(159, 7, 'Stool R/EM/E'),
(160, 7, 'Stool OBT'),
(161, 7, 'Stool Over Count'),
(162, 7, 'Stool R/S'),
(163, 8, 'KLB for R/E'),
(164, 8, 'KLB for Gram Stain'),
(165, 8, 'Throat Swab for R/E'),
(166, 8, 'Throat Swab for Gram Stain'),
(167, 8, 'Sputum for R/E'),
(168, 8, 'Sputum for Gram Stain ABF'),
(169, 8, 'Sputum for Eosinophil'),
(170, 8, 'Vaginal  Swab for R/E'),
(171, 8, 'Vaginal  Swab for Gram Stain'),
(172, 8, 'Prostatic Smear  for R/E'),
(173, 8, 'Prostatic Smear  for Gram Stain'),
(174, 8, 'Pus for Gram Stain'),
(175, 8, 'CSF'),
(176, 8, 'ASCITIC fluid'),
(177, 8, 'Pleural fluid'),
(178, 8, 'Semen Analysis'),
(179, 9, 'MT'),
(180, 9, 'Skin Scraping for fungus'),
(181, 9, 'Nail Scraping for fungus'),
(182, 9, 'ECG'),
(183, 9, 'Echocardiogram'),
(184, 9, 'Colonoscopy'),
(185, 9, 'Sigmoidscopy'),
(186, 9, 'Bronchoscopy'),
(187, 9, 'Spirometry'),
(188, 9, 'Uroflowmertry'),
(189, 10, 'Brain /Head / skull'),
(190, 10, 'Pituitary Gland'),
(191, 10, 'Orbits /PNS /Nasopharynx'),
(192, 10, 'Neck'),
(193, 10, 'Chest'),
(194, 10, 'Upper Abdomen'),
(195, 10, 'Lower Abdomen'),
(196, 10, 'Pelvis'),
(197, 10, 'Whole Abdomen'),
(198, 10, 'Cervical Spine'),
(199, 10, 'Dorsal Spine'),
(200, 10, 'Lumbo- Sacral Spine'),
(201, 10, 'T.M   joint'),
(202, 10, 'Elbow joint R/L'),
(203, 10, 'Wrist joint R/L'),
(204, 10, 'Hip joint'),
(205, 10, 'Shoulder joint R/L'),
(206, 10, 'Knee joint R/L'),
(207, 10, 'Ankle joint R/L'),
(208, 10, 'Any Single Part'),
(209, 10, 'Whole Body'),
(210, 11, 'Brain /Head'),
(211, 11, 'Pituitary Fossa'),
(212, 11, 'Orbits'),
(213, 11, 'PNS'),
(214, 11, 'Nasopharynx'),
(215, 11, 'Neck'),
(216, 11, 'Chest-Mediastinum'),
(217, 11, 'HBS/Upper Abdomen'),
(218, 11, 'Whole Abdomen'),
(219, 11, 'KUB region'),
(220, 11, 'Supra-Renal Glands'),
(221, 11, 'Lower Abdomen-Pelvic organs'),
(222, 11, 'Myelo-CT of Cervical Spine'),
(223, 11, 'Myelo-CT of Dorsal  Spine'),
(224, 11, 'Myelo-CT of L/S  Spine'),
(225, 11, 'Spines -Plain'),
(226, 11, 'Joints'),
(227, 11, 'Bones'),
(228, 12, 'Both Breasts'),
(229, 12, 'Right /Left Breast'),
(230, 13, 'Chest P/A, A/P View'),
(231, 13, 'Chest  Right & Left Lateral'),
(232, 13, 'Chest Rt.Oblique View'),
(233, 13, 'Chest Decubitas  View'),
(234, 13, 'Chest Apical View'),
(235, 13, 'KUB'),
(236, 13, 'IVU With post Mict , Film'),
(237, 13, 'Retrograde Cystourethogram'),
(238, 13, 'Plain X-ray Abdomen / C.P.D'),
(239, 13, 'Abdomen  In E/P'),
(240, 13, 'Pelvis Both Hip A/P'),
(241, 13, 'Rt. & Lt. femur B/V'),
(242, 13, 'Rt. & Lt. Hip B/V'),
(243, 13, 'Rt. & Lt. S.I Joint B/V'),
(244, 13, 'Rt. & Lt. Knee B/V'),
(245, 13, 'Rt. & Lt. Leg B/V'),
(246, 13, 'Rt. & Lt. Ankle B/V'),
(247, 13, 'Rt. & Lt. Foot B/V'),
(248, 13, 'Rt. & Lt. Heel B/V'),
(249, 13, 'Rt. & Lt. Humerus B/V'),
(250, 13, 'Rt. & Lt. Shoulder B/V'),
(251, 13, 'Rt. & Lt. Clavicle B/V'),
(252, 13, 'Rt. & Lt. Forearm B/V'),
(253, 13, 'Rt. & Lt. Wrist B/V'),
(254, 13, 'Rt. & Lt. Hand B/V'),
(255, 13, 'Rt. & Lt. SCRAM /Coccyx B/V'),
(256, 13, 'Skull B/V'),
(257, 13, 'Skull A/P ,P/A, Lateral'),
(258, 13, 'P.N.S'),
(259, 13, 'Cervical Spine  B/V'),
(260, 13, 'Dorso-Lumber Spine B/V'),
(261, 13, 'Lumbo-Sacral Spine B/V'),
(262, 13, 'Mastoid Towne`s View'),
(263, 13, 'Orbit  B/V'),
(264, 13, 'Nasopharynx  Lateral'),
(265, 13, 'Mussel Bone Lateral'),
(266, 13, 'Neck B/V'),
(267, 13, 'Mandible A/P,A/P'),
(268, 14, 'Dental X-ray (Single)'),
(269, 14, 'Digital OPG'),
(270, 15, 'Ba-Meal Stomach & Duodenum'),
(271, 15, 'Ba-swallow Oesopohagus'),
(272, 15, 'Ba-Enema Double Contrast'),
(273, 15, 'Orl Cholecystography'),
(274, 15, 'Myelogram'),
(275, 16, 'Whole Abdomen & Pelvic Organs'),
(276, 16, 'HBS/Upper Abdomen'),
(277, 16, 'Lower Abdomen / Uterus & Adnexae'),
(278, 16, 'KUB / Genito- Urinary Tract'),
(279, 16, 'KUB with Prostate & Residual Volume'),
(280, 16, 'Thyroid'),
(281, 16, 'Brain'),
(282, 16, 'Breasts'),
(283, 16, 'Scrotum /Testis'),
(284, 16, 'Soft Tissue'),
(285, 16, 'Fetal age determination'),
(286, 16, 'Routine obstetrical U.S'),
(287, 16, 'Color Doppler US Vertebro- basilar System'),
(288, 16, 'Color Doppler US of Carotids'),
(289, 16, 'Color Doppler US of Deep Veins of leg'),
(290, 16, 'Color Doppler US of Renal Artery'),
(291, 16, 'Trans rectal'),
(292, 16, 'Transvaginal (TVS)'),
(293, 16, 'Retro-Urethrogarm'),
(294, 16, 'Histero-sulphingogram'),
(295, 16, 'Ba-Follow Through'),
(296, 16, 'MCU'),
(297, 16, 'Ba-Enema');

-- --------------------------------------------------------

--
-- Table structure for table `invst_view`
--

CREATE TABLE IF NOT EXISTS `invst_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rpt_date` date NOT NULL DEFAULT '0000-00-00',
  `prs_date` date NOT NULL DEFAULT '0000-00-00',
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_id` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `automated_id` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `urine_nm` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `stollfor_cs` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `throat_nm` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sputum_nm` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `urethral_nam` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `prostatic_nam` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hbs_nam` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hbs1_nam` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `skin_nam` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `status` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `automated` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `urine` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `stollfor` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `throat` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sputum` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `urethral` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `prostatic` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hbs` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `hbs1` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `skin` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `invst_view`
--

INSERT INTO `invst_view` (`id`, `rpt_date`, `prs_date`, `name`, `p_id`, `automated_id`, `urine_nm`, `stollfor_cs`, `throat_nm`, `sputum_nm`, `urethral_nam`, `prostatic_nam`, `hbs_nam`, `hbs1_nam`, `skin_nam`, `status`, `automated`, `urine`, `stollfor`, `throat`, `sputum`, `urethral`, `prostatic`, `hbs`, `hbs1`, `skin`) VALUES
(23, '2012-06-03', '2012-06-02', 'shahed', 'P_60', '12', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', ''),
(24, '2012-06-03', '2012-06-02', 'shahed', 'P_60', '', '9', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', ''),
(25, '2012-06-03', '2012-06-03', 'rashed', 'P_68', '100', '', '18', '', '', '', '', '67', '', '', '', '1', '', '1', '', '', '', '', '1', '', ''),
(26, '2012-06-03', '2012-06-03', 'rashed', 'P_68', '', '', '', '56', '23', '', '', '', '', '', '', '', '', '', '1', '1', '', '', '', '', ''),
(27, '2012-06-04', '2012-06-04', 'rashed', 'P_68', '', '', '', '23', '', '', '34', '', '', '', '', '', '', '', '1', '', '', '1', '', '', ''),
(28, '2012-06-05', '2012-06-05', 'rashed', 'P_68', '56', '', '76', '', '', '12', '', '43', '67', '', '', '1', '', '1', '', '', '1', '', '1', '1', ''),
(29, '2012-06-04', '2012-06-04', 'shahed khan', 'P_69', '3', '1', '98', '90', '76', '', '', '', '', '', '', '1', '1', '1', '1', '1', '', '', '', '', ''),
(30, '2012-06-05', '2012-06-05', 'Shahed khan', 'P_69', '', '', '', '', '', '12', '12', '23', '76', '', '', '', '', '', '', '', '1', '1', '1', '1', ''),
(31, '2012-06-04', '2012-06-04', 'shahed khan', 'P_69', '', 'lkdj', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', ''),
(32, '2012-07-22', '2012-07-22', 'Mahtab Uddin Shahed', '1', '12', '6.8', '56', '4.0', '7', '4', '7', '4', '3', '6', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `meal_list`
--

CREATE TABLE IF NOT EXISTS `meal_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `meal_list`
--

INSERT INTO `meal_list` (`id`, `meal`) VALUES
(1, 'Before Meal'),
(2, 'After Meal'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `loc` varchar(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `contact` decimal(20,0) NOT NULL DEFAULT '0',
  `dat` date NOT NULL DEFAULT '0000-00-00',
  `taka` decimal(10,0) NOT NULL DEFAULT '0',
  `status` varchar(5) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=93 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pid`, `name`, `loc`, `contact`, `dat`, `taka`, `status`) VALUES
(62, '1', 'Mahtab Uddin Shahed', 'fnei', 9840534, '2012-07-22', 500, ''),
(63, '2', 'Iftakher Uddin', 'feni', 892479832, '2012-07-23', 400, ''),
(64, '3', 'tanvir', 'feni', 98797, '2012-07-22', 600, ''),
(65, '4', 'Shahed Ahamed', 'feni', 385794, '2012-07-22', 500, ''),
(66, '6', 'lksadjf', 'ksajdf', 98798, '2012-07-24', 500, ''),
(67, '7', 'akbar', 'feni', 9797, '2012-07-24', 500, ''),
(68, '8', 'Abdur Rahaman', 'Noakhali', 90835904, '2012-07-24', 600, ''),
(69, '9', 'shahed', 'feni, sonagazi', 999999, '2012-07-25', 600, ''),
(70, '12', 'rahded', 'lskdajf', 987987, '2012-07-26', 700, ''),
(71, '13', 'j,dfg', 'laskdjf', 93854, '2012-07-27', 400, ''),
(72, '14', 'lsdkfjsl', 'lkjsdfl', 98798, '2012-07-29', 600, ''),
(73, '15', 'Mahtab Uddin Shahed', 'feni', 1821152983, '2012-07-30', 900, ''),
(74, '16', 'rjia', 'askldfj', 98798, '2012-07-30', 400, ''),
(75, '9', 'shahed', 'feni, sonagazi', 999999, '2012-07-30', 0, ''),
(76, '20', 'mahtab', 'feni', 1821152983, '2012-07-31', 400, ''),
(77, '21', 'Salam Bi Capta', 'Pantha Path', 904850395, '2012-07-31', 600, ''),
(78, '22', 'Md Sabbir', 'Laxmipur', 98798, '2012-07-31', 800, ''),
(79, '23', 'md shaokat hossain', 'Noakhali', 78687, '2012-07-31', 1000, ''),
(80, '24', 'riaz uddin', 'feni', 857758, '2012-08-01', 700, ''),
(81, '23', 'md shaokat hossain', 'Noakhali', 78687, '2012-08-01', 500, ''),
(82, '25', 'ljksdfadf', 'slakdjf', 8798, '2012-08-01', 600, ''),
(83, '26', 'Jabed Hosssain', 'Chomohony', 39024, '2012-08-01', 700, ''),
(84, '28', 'Asfar Uddin', 'Noakhali', 93009584, '2012-08-02', 700, ''),
(85, '29', 'Mahtab Uddin Shahed', 'feni', 98798, '2012-08-03', 600, ''),
(86, '35', 'Mahtab Uddin Shahed', 'lkjsadf', 9879, '2012-08-10', 600, ''),
(87, '23', 'md shaokat hossain', 'Noakhali', 78687, '2012-08-10', 500, ''),
(88, '38', 'asdjf', 'lkjafd', 0, '2012-11-25', 700, ''),
(89, '39', 'lsadkjf', 'lsakdjf', 90, '2013-06-28', 600, ''),
(90, '41', 'Ruhul E Azam', 'Dhaka', 1873636366, '2016-09-30', 1000, ''),
(91, '42', 'shahd bhuiyan', 'Dhaka', 9809, '2016-09-30', 500, ''),
(92, '43', 'Shariful Islam', 'Dhaka', 80980, '2016-12-23', 300, '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `drug` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `dose` text COLLATE latin1_general_ci NOT NULL,
  `gap` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `meal` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `duration` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cat` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `dat` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=705 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `patient_id`, `drug`, `dose`, `gap`, `meal`, `duration`, `cat`, `dat`) VALUES
(527, '1', 'Ambrisentan', '0+Ã‚Â½+Ã‚Â½', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(523, '1', '3-c', '0+Ã‚Â½+0', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(524, '1', 'A-rox', 'Ã‚Â½+0+Ã‚Â½', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(525, '1', 'A-fenac', 'Ã‚Â½+0+0', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(526, '1', 'A-calm', '0+0+Ã‚Â½', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(521, '1', 'Hypen  1.5 MG', 'Ã‚Â½+Ã‚Â½+Ã‚Â½', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(522, '1', 'Aluminium acetotartrate', 'Ã‚Â½+Ã‚Â½+0', 'Everyday', 'Before Meal', '2 Week', 'Cap.', '2012-07-22'),
(528, '3', '3rd-cef', '1+0+1', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-22'),
(529, '3', '3rd-cef', 'Â½+Â½+Â½', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-22'),
(547, '4', 'A-calm', '0+1+0', 'Everyday', 'Before Meal', '3 Week', 'Tab.', '2012-07-22'),
(548, '5', 'A-bi', 'Â½+0+0', 'Everyday', 'Before Meal', '4 Week', 'Tab.', '2012-07-23'),
(545, '4', 'A-calm', 'Â½+Â½+Â½', 'Everyday', 'Before Meal', '3 Week', 'Tab.', '2012-07-22'),
(546, '4', 'A-calm', '0+Â½+Â½', 'Everyday', 'Before Meal', '3 Week', 'Tab.', '2012-07-22'),
(549, '5', 'A-cof', '0+Â½+Â½', 'Everyday', 'Before Meal', '4 Week', 'Tab.', '2012-07-23'),
(550, '5', 'A-mycin', 'Â½+Â½+Â½', 'Everyday', 'Before Meal', '4 Week', 'Tab.', '2012-07-23'),
(582, '6', 'A-fenac', 'Ãƒâ€šÃ‚Â½+Ãƒâ€šÃ‚Â½+Ãƒâ€šÃ‚Â½', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-24'),
(581, '6', 'absorbable gelatin sponge', '0+0+1', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-24'),
(580, '6', 'Ambeeclox', 'Ãƒâ€šÃ‚Â½+Ãƒâ€šÃ‚Â½+Ãƒâ€šÃ‚Â½', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-24'),
(579, '6', 'A-mycin', '0+0+Ãƒâ€šÃ‚Â½', 'After One Day', 'Before Meal', '4 Week', 'Tab.', '2012-07-24'),
(583, '7', '3rd-cef', '0+0+1', 'Everyday', 'Before Meal', '2 Week', 'Tab.', '2012-07-24'),
(584, '7', 'A-forte soft', 'Â½+Â½+0', 'After One Day', 'After Meal', '6 Week', 'Cap.', '2012-07-24'),
(585, '8', 'Trilock  10 MG', '1+1+1', 'Everyday', 'Before Meal', '1 Week', 'Tab.', '2012-07-24'),
(586, '8', 'Zovia Silver  2 MG', '1+1+1', 'Everyday', 'Before Meal', '1 Week', 'Tab.', '2012-07-24'),
(587, '8', 'Amobin', 'Â½+Â½+Â½', 'Everyday', 'Before Meal', '1 Week', 'Tab.', '2012-07-24'),
(588, '9', 'Alprenolol', '1+1+0', 'Everyday', 'Before Meal', '4 Week', 'Tab.', '2012-07-25'),
(592, '14', 'A-forte soft', '1+1+1', 'Everyday', 'Before Meal', '1 Week', 'Syrup.', '2012-07-29'),
(591, '14', 'A-forte soft', '1+1+1', 'Everyday', 'Before Meal', '1 Week', 'Cap.', '2012-07-29'),
(593, '14', 'A-forte soft', '0+1+0', 'After One Day', 'Interveing Meal', '5 Week', 'Syrup.', '2012-07-29'),
(598, '15', 'Anlev', '1+0+1', 'Everyday', 'Before Meal', '4 Day', 'Tab.', '2012-07-31'),
(597, '15', 'Bislol  2.5 MG', '1+0+1', 'Everyday', 'Before Meal', '4 Day', 'Tab.', '2012-07-31'),
(599, '15', 'Ankof', '1+0+1', 'Everyday', 'Before Meal', '4 Day', 'Tab.', '2012-07-31'),
(600, '15', 'Pantid  20 MG', '1+1+0', 'Everyday', 'After Meal', '4 Day', 'Capsule', '2012-07-31'),
(605, '15', 'Anistreplase', '0+Ã‚Â½+Ã‚Â½', 'Everyday', 'After Meal', '7 Day', 'Syrup', '2012-07-30'),
(604, '15', 'Bislol 2.5 MG', 'Ã‚Â½+Ã‚Â½+Ã‚Â½', 'Everyday', 'After Meal', '7 Day', 'Syrup', '2012-07-30'),
(606, '15', 'Angimil', '1+0+1', 'After One Day', 'After Meal', 'Five Week', 'Syrup', '2012-07-30'),
(607, '20', 'Larb 25 MG', '½+½+½', 'Everyday', 'After Meal', '7 Day', 'Capsule', '2012-07-31'),
(608, '20', 'Anginox', '1+1+0', 'After One Day', 'Before Meal', '7 Day', 'Capsule', '2012-07-31'),
(609, '20', 'Anlet', '0+Â½+0', 'Everyday', 'Before Meal', '7 Day', 'Capsule', '2012-07-31'),
(610, '21', 'Trilock 4 MG', '1+0+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Tablet', '2012-07-31'),
(611, '21', 'Combinations', '1+0+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Tablet', '2012-07-31'),
(612, '21', 'Pantid  20 MG', '1+0+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Tablet', '2012-07-31'),
(613, '21', 'Larb  50 MG', '1+0+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Tablet', '2012-07-31'),
(614, '21', 'Zovia Gold  200 ML', '1+0+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Tablet', '2012-07-31'),
(615, '22', 'Trilock 5 MG', '1+0+1', 'Everyday', 'After Meal', '6 Day', 'Tablet', '2012-07-31'),
(616, '22', 'Ramace  1.25 MG', '1+0+1', 'Everyday', 'After Meal', '6 Day', 'Tablet', '2012-07-31'),
(617, '22', 'Anodyne', '1+0+1', 'Everyday', 'After Meal', '6 Day', 'Capsule', '2012-07-31'),
(618, '23', 'Bislol 10 MG', '1+1+1', 'Everyday', 'Before Meal', 'Fifteen Week', 'Injection', '2012-07-31'),
(619, '23', 'Anistreplase', '1+0+0', 'After One Day', 'Before Meal', '15 Day', 'Injection', '2012-07-31'),
(653, '24', 'A-mycin', 'Â½+Â½+Â½', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(652, '24', '2-(4-chlorphenoxy)-ethanol', 'Â½+Â½+Â½', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(651, '24', 'A-mycin', '0+Â½+Â½', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(650, '24', '2-(4-chlorphenoxy)-ethanol', 'Â½+0+Â½', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(649, '24', '2-(4-chlorphenoxy)-ethanol', '1+0+1', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(658, '23', 'A-bi', 'dose_val', 'Everyday', 'After Meal', '8 Day', 'Tablet', '2012-08-01'),
(657, '23', 'A-cof', 'dose_val', 'After One Day', 'After Meal', '2 Day', 'Tablet', '2012-08-01'),
(659, '23', 'Trilock 4 MG', 'dose_val', 'Everyday', 'After Meal', '6 Day', 'Tablet', '2012-08-01'),
(665, '25', 'Omiprazol 300MG', '1+1+0', 'After one hour', 'After Meal', '20 Days', 'Ointment', '2012-08-01'),
(666, '26', 'Pantid 40 MG IV', 'Â½+0+Â½', 'After one hour', 'Before Meal', '20 Days', 'Tablet', '2012-08-01'),
(667, '26', 'Pantid 50 MG', 'Â½+0+Â½', 'After One Day', 'After Meal', '2 Day', 'Tablet', '2012-08-01'),
(668, '28', 'A-mycin', '1+0+1', 'Everyday', 'After Meal', '9 Day', 'Tablet', '2012-08-02'),
(670, '29', '2-(4-chlorphenoxy)-ethanol', '1+1+0', 'Everyday', 'Before Meal', '20 Days', 'Capsule', '2012-08-03'),
(671, '29', 'Trilock 10 MG', '0+1+1', 'Everyday', 'After Meal', '90 Days', 'Tablet', '2012-08-03'),
(672, '30', 'Bislol 2.5 MG', '0+0+1', 'Everyday', 'After Meal', '3 Day', 'Tablet', '2012-08-07'),
(673, '30', 'Anidulafungin', '0+0+1', 'Everyday', 'After Meal', 'Four Week', 'Tablet', '2012-08-07'),
(674, '30', 'Anlet', '0+0+1', 'Everyday', 'After Meal', '3 Day', 'Tablet', '2012-08-07'),
(681, '23', 'A-forte soft', '1+1+0', 'Everyday', 'After Meal', '2 Day', 'Injection', '2012-08-10'),
(680, '23', 'Hypen  1.5 MG', '1+1+0', 'Everyday', 'Before Meal', '6 Day', 'Injection', '2012-08-10'),
(682, '23', 'Trilock 10 MG', '1+1+0', 'Everyday', 'Before Meal', '6 Day', 'Injection', '2012-08-10'),
(683, '23', 'A-clox', '1+1+0', 'Everyday', 'Before Meal', '5 Day', 'Tablet', '2012-08-10'),
(684, '33', 'Bislol 5 MG', '1+0+1', 'Everyday', 'After Meal', '20 Days', 'Tablet', '2012-08-10'),
(685, '33', 'Anlev', '1+0+1', 'Everyday', 'After Meal', '20 Days', 'Tablet', '2012-08-10'),
(686, '33', 'Anlet Plus', '1+0+1', 'After One Day', 'Before Meal', '20 Days', 'Tablet', '2012-08-10'),
(698, '34', 'Bislol 2.5 MG', '1+0+0', 'After One Day', 'After Meal', '7 Day', 'Tablet', '2012-08-10'),
(696, '34', 'Angivent', '1+0+1', 'Everyday', 'After Meal', '20 Days', 'Capsule', '2012-08-10'),
(697, '34', 'Bislol 2.5 MG', 'Ã‚Â½+0+0', 'After One Day', 'After Meal', '7 Day', '', '2012-08-10'),
(695, '34', 'Bislol 10 MG', '1+0+1', 'Everyday', 'After Meal', '20 Days', 'Tablet', '2012-08-10'),
(694, '34', 'Bislol 2.5 MG', '1+0+1', 'After One Day', 'After Meal', '7 Day', '', '2012-08-10'),
(703, '42', 'A-cof ', '1+1+1', 'After One Day', 'After Meal', '3 Day', 'Tablet', '2016-09-30'),
(702, '42', 'Acecol  ', '1+1+1', 'After One Day', 'Before Meal', 'Two week', 'Tablet', '2016-09-30'),
(704, '42', 'A-cof ', '1+1+1', 'After One Day', 'After Meal', '3 Day', 'Tablet', '2016-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `prs`
--

CREATE TABLE IF NOT EXISTS `prs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `weight` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `age` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sex` varchar(8) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `phy_exm` text COLLATE latin1_general_ci NOT NULL,
  `investigation` text COLLATE latin1_general_ci NOT NULL,
  `group` decimal(5,0) NOT NULL DEFAULT '0',
  `dat` date NOT NULL DEFAULT '0000-00-00',
  `symp` text COLLATE latin1_general_ci NOT NULL,
  `pic` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `one` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `two` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `three` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `four` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `five` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `six` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `seven` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `eight` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nine` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ten` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `eleven` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `twelve` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `thirteen` char(2) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=202 ;

--
-- Dumping data for table `prs`
--

INSERT INTO `prs` (`id`, `pid`, `pname`, `weight`, `age`, `sex`, `phy_exm`, `investigation`, `group`, `dat`, `symp`, `pic`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`) VALUES
(144, '1', 'Mahtab Uddin Shahed', '', '', 'M', '', '', 0, '2012-07-22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, '3', 'tanvir', '', '', 'M', 'as,kd,120/9,120                               	  lksajdf lkasdj fl,,,askdjf;lksadjf', 'DC;  ESR', 0, '2012-07-22', 'Swelling of legs;  Frequency; back pain', '3.jpg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, '4', 'Shahed Ahamed', '', '', 'M', '', 'Serum Cholesterol', 0, '2012-07-22', 'Buring sensation;  Frequency', '4.jpg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, '5', 'shahed khan', '', '', 'M', 'askld,120/9,120                               	  lksaj dflkasdjf laksdfj', 'Lipid profile;  After 2Hrs.ABF;  Rt. & Lt. Foot B/V;  Abdomen  In E/P', 0, '2012-07-23', 'Scanty Micturition;  Frequency', '5.jpg', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, '6', 'lksadjf', '', '', 'F', '', '', 0, '2012-07-24', '', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', ''),
(155, '7', 'akbar', '', '', 'M', 'slkad,120/9,120                               	  ksadfj lksdjf lakdsfj', 'Both Breasts', 0, '2012-07-24', 'Generalized Swelling;  Buring sensation', '', '1', '', '', '3', '', '1', '', '1', '', '', '', '', ''),
(156, '8', 'Abdur Rahaman', '', '', 'M', 'sakjd,120/9,120                               	  ljksad flksdj flkasdjf', 'ACR (Albumin Creatinine Ratio);  Urine Bence jones Protein', 0, '2012-07-24', 'Swelling of face;  Frequency', '8.jpg', '1', '', '', '2', '', '', '2', '1', '', '', '', '', ''),
(157, '9', 'shahed', '', '', 'M', '', '', 0, '2012-07-25', '', '', '1', '1', '2', '1', '1', '1', '3', '1', '1', '', '', '', ''),
(159, '14', 'lsdkfjsl', '', '', 'M', 'kldfs,120/9,120                               	  ;lsdfkl;sdf ;dslafk ;dslfk', 'Sugar Random', 0, '2012-07-29', 'Swelling of face;  Hesitency;  Dysutry', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, '15', 'Mahtab Uddin Shahed', '', '', 'M', 'skdf, 120/80, 120', 'kalsdfj slkdjf  ladskjf asdlfkj sadfklsa df', 0, '2012-07-30', 'skjdfm s akjdfk sjadhfsd', '', '1', '1', '2', '2', '1', '1', '3', '1', '1', '1', '1', '1', '1'),
(164, '20', 'mahtab', '', '', 'M', 'laskd,120/9,120                               	  lkjsda lf;kasjdflk', 'Pelvis Both Hip A/P;  Chest Rt.Oblique View', 0, '2012-07-31', 'aaa Meal,bbb Meal', '', '', '1', '1', '', '', '', '4', '', '', '', '', '', ''),
(165, '21', 'Salam Bi Capta', '', '', 'M', 'askld,120/9,120                               	  klsjdf ladksfj', 'T.M   joint;  Pelvis', 0, '2012-07-31', 'aaa Meal,bbb Meal', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, '22', 'Md Sabbir', '', '', 'M', 'alskd,120/9,120                               	  lkdsja flaksdjfl aksdf', 'Nail Scraping for fungus;  ECG;  Transvaginal (TVS)', 0, '2012-07-31', 'aaa Meal,bbb Meal', '', '1', '1', '2', '2', '1', '1', '2', '1', '1', '1', '1', '1', 'un'),
(167, '23', 'md shaokat hossain', '', '', 'F', 'alksd,120/9,120                               	  lkjasd lksjdflkasjdf', 'Blood Film;  BT;  FT3', 0, '2012-07-31', 'aaa Meal,bbb Meal', '', '', '1', '1', '', '', '1', '6', '', '1', '', '1', '', 'un'),
(177, '24', 'riaz uddin', '', '', 'M', '', '', 0, '2012-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(187, '26', 'Jabed Hosssain', '', '', 'M', 'kljds,120/9,120                               	  laskjd lfkasdjf laksdfj', 'Dental X-ray (Single);  CCR(Creatinine Clearance Rate)', 0, '2012-08-01', 'Scanty Micturition;  Swelling of legs', '', '', '', '1', '', '', '', '1', '1', '', '', '', '', 'un'),
(186, '25', 'ljksdfadf', '', '', 'M', '', '', 0, '2012-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(180, '23', 'md shaokat hossain', '', '', 'M', '', '', 0, '2012-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, '28', 'Asfar Uddin', '', '', 'M', 'asdlk,120/9,120                               	  l;sadf; ljasdklfj asdkflj', 'Lower Abdomen-Pelvic organs;  Neck', 0, '2012-08-02', 'Scanty Micturition;  Buring sensation', '', '', '', '', '', '', '', '', '1', '', '', '', '', 'un'),
(189, '15', 'Mahtab Uddin Shahed', '', '', 'M', 'ajsdhfm,10/70, 200', 'kjshfkjasd fksjdf kjsa fdjskadfh', 0, '2012-05-05', 'kjsahk ajsdfh ksjadfh', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, '29', 'Mahtab Uddin Shahed', '', '', 'M', 'asdfj,120/9,120                               	  kjasdflk ;skdfj', 'Testosterone', 0, '2012-08-03', 'Scanty Micturition', '', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(192, '30', 'dklfgjhdkl', '', '', 'F', 'asdkj,120/9,120                               	  kjadslkfjdlkfj aslkdjf ', 'ESR', 0, '2012-08-07', 'Swelling of face', '', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(195, '23', 'md shaokat hossain', '70', '21y-2m-12d', 'M', 'Pulse : 120/min20, 30 Volume;  B.P : 120/80;  Height : 6 cm - 6 inch;  Temp : 120;  Height : ;', 'Hb%;  MP', 0, '2012-08-10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(196, '33', 'Tanjina Binte Oni', '60', '21y-3m-4d', 'F', 'Pulse : 120/min100, 12 Volume;  B.P : 120/80;  Height : 6 cm - 6 inch;  Temp : 120;  Height : ;', 'Skin Scraping for fungus;  Echocardiogram', 0, '2012-08-10', '', '33.jpg', '', '', '', '', '', '', '', '', '', '', '', '', 'un'),
(199, '34', 'ahad akni', '90', '21y-3m-3d', 'M', '', 'TC;  KLB for Gram Stain;  Throat Swab for R/E;  Febrile /Triple Antigen', 0, '2012-08-10', '', '', '1', '1', '', '2', '1', '0', '5', '', '', '', '', '', 'un'),
(201, '42', 'shahd bhuiyan', '0', '', 'M', '', 'VDRL (Qlty Qnty);  Dengue Virus ab lgM;  Febrile /Triple Antigen', 0, '2016-09-30', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', 'un');

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE IF NOT EXISTS `p_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` decimal(15,0) DEFAULT NULL,
  `name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `contact` varchar(11) COLLATE latin1_general_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `time2` time DEFAULT NULL,
  `loc` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `present` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=216 ;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`id`, `pid`, `name`, `contact`, `time`, `time2`, `loc`, `dat`, `present`) VALUES
(146, 1, 'Mahtab Uddin Shahed', '09840534', '12:00:00', '12:30:00', 'fnei', '2012-07-22', 'Y'),
(147, 2, 'Iftakher Uddin', '892479832', '12:00:00', '12:30:00', 'feni', '2012-07-23', 'Y'),
(148, 3, 'tanvir', '98797', '12:30:00', '01:00:00', 'feni', '2012-07-22', 'Y'),
(149, 4, 'Shahed Ahamed', '385794', '12:30:00', '01:00:00', 'feni', '2012-07-22', 'Y'),
(150, 5, 'shahed khan', '09385034', '12:30:00', '01:00:00', 'feni', '2012-07-23', 'Y'),
(151, 6, 'lksadjf', '98798', '12:00:00', '12:30:00', 'ksajdf', '2012-07-24', 'Y'),
(152, 7, 'akbar', '9797', '12:30:00', '01:00:00', 'feni', '2012-07-24', 'Y'),
(153, 8, 'Abdur Rahaman', '90835904', '12:30:00', '01:00:00', 'Noakhali', '2012-07-24', 'Y'),
(154, 9, 'shahed', '999999', '12:00:00', '12:30:00', 'feni, sonagazi', '2012-07-25', 'Y'),
(155, 10, 'sadkfl', '9879', '12:30:00', '01:00:00', 'lskadjf', '2012-07-25', 'N'),
(156, 11, 'sldiajf', '9879', '12:30:00', '01:00:00', 'lkjsdaf', '2012-07-25', 'N'),
(157, 12, 'rahded', '987987', '12:00:00', '12:30:00', 'lskdajf', '2012-07-26', 'Y'),
(158, 13, 'j,dfg', '93854', '12:00:00', '12:30:00', 'laskdjf', '2012-07-27', 'Y'),
(159, 14, 'lsdkfjsl', '98798', '12:00:00', '12:30:00', 'lkjsdfl', '2012-07-29', 'Y'),
(160, 15, 'Mahtab Uddin Shahed', '01821152983', '12:00:00', '12:30:00', 'feni', '2012-07-30', 'Y'),
(161, 16, 'rjia', '98798', '12:30:00', '01:00:00', 'askldfj', '2012-07-30', 'Y'),
(162, 9, 'shahed', '999999', '12:30:00', '13:00:00', 'feni, sonagazi', '2012-07-30', 'Y'),
(163, 17, 'lkdjfas', '8320954', '01:00:00', '01:30:00', 'laksjdfl', '2012-07-30', 'N'),
(164, 18, 'alksdjf', '098304', '01:00:00', '01:30:00', 'klasjdf', '2012-07-30', 'N'),
(165, 19, 'sadklfj', '98798', '13:00:00', '13:30:00', 'lksadjf', '2012-07-30', 'N'),
(171, 20, 'mahtab', '01821152983', '17:00:00', '17:30:00', 'feni', '2012-07-31', 'Y'),
(172, 21, 'Salam Bi Capta', '904850395', '17:30:00', '18:00:00', 'Pantha Path', '2012-07-31', 'Y'),
(173, 22, 'Md Sabbir', '98798', '18:00:00', '18:30:00', 'Laxmipur', '2012-07-31', 'Y'),
(174, 23, 'md shaokat hossain', '78687', '18:30:00', '19:00:00', 'Noakhali', '2012-07-31', 'Y'),
(194, 23, 'md shaokat hossain', '78687', '13:00:00', '13:30:00', 'Noakhali', '2012-08-01', 'Y'),
(195, 24, 'Mahtab Uddin Shahed', '9798', '13:30:00', '14:00:00', 'feni', '2012-08-01', 'Y'),
(196, 25, 'ljksdfadf', '8798', '14:00:00', '14:30:00', 'slakdjf', '2012-08-01', 'Y'),
(197, 26, 'Jabed Hosssain', '039024', '14:30:00', '15:00:00', 'Chomohony', '2012-08-01', 'Y'),
(198, 27, 'laskdjf', '98798', '16:00:00', '16:30:00', 'lkjsadf', '2012-08-02', 'N'),
(199, 28, 'Asfar Uddin', '93009584', '16:30:00', '17:00:00', 'Noakhali', '2012-08-02', 'Y'),
(200, 29, 'Mahtab Uddin Shahed', '98798', '00:00:00', '00:30:00', 'feni', '2012-08-03', 'Y'),
(201, 30, 'dklfgjhdkl', '89790', '00:00:00', '00:30:00', 'lkdjslfg', '2012-08-07', 'Y'),
(202, 31, 'alskdjf', '97987', '00:00:00', '00:30:00', 'sadlfkj', '2012-08-08', 'Y'),
(203, 32, 'asdklfj', '98797', '00:30:00', '01:00:00', 'laskjdf', '2012-08-10', 'Y'),
(204, 23, 'md shaokat hossain', '78687', '01:00:00', '01:30:00', 'Noakhali', '2012-08-10', 'Y'),
(205, 33, 'Tanjina Binte Oni', '9304', '01:30:00', '02:00:00', 'Noakhali', '2012-08-10', 'Y'),
(206, 34, 'ahad akni', '87687', '02:00:00', '02:30:00', 'feni', '2012-08-10', 'Y'),
(207, 35, 'Mahtab Uddin Shahed', '9879', '02:30:00', '03:00:00', 'lkjsadf', '2012-08-10', 'Y'),
(208, 36, 'shahed khan', '98798', '03:00:00', '03:30:00', 'Chadpur', '2012-08-10', 'Y'),
(209, 37, 'sadklfj', '098039', '00:00:00', '00:30:00', 'lkjsadf', '2012-09-09', 'Y'),
(210, 38, 'asdjf', 'lkjasfdlk', '00:00:00', '00:30:00', 'lkjafd', '2012-11-25', 'Y'),
(211, 39, 'lsadkjf', '90', '00:00:00', '00:30:00', 'lsakdjf', '2013-06-28', 'Y'),
(212, 40, 'asdf', '345234', '00:00:00', '00:30:00', 'asdf', '2014-08-05', 'Y'),
(213, 41, 'Ruhul E Azam', '01873636366', '00:00:00', '00:30:00', 'Dhaka', '2016-09-30', 'Y'),
(214, 42, 'shahd bhuiyan', '09809', '00:30:00', '01:00:00', 'Dhaka', '2016-09-30', 'Y'),
(215, 43, 'Shariful Islam', '080980', '00:00:00', '00:30:00', 'Dhaka', '2016-12-23', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `p_present`
--

CREATE TABLE IF NOT EXISTS `p_present` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `contact` varchar(12) COLLATE latin1_general_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `loc` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `set_time`
--

CREATE TABLE IF NOT EXISTS `set_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time2` time DEFAULT NULL,
  `dat` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `set_time`
--

INSERT INTO `set_time` (`id`, `time2`, `dat`) VALUES
(1, '08:30:00', '2012-03-26'),
(2, '09:00:00', '2012-03-27'),
(3, '09:00:00', '2012-03-29'),
(4, '07:00:00', '2012-04-11'),
(5, '07:00:00', '2012-04-24'),
(6, '07:00:00', '2012-05-06'),
(7, '17:00:00', '2012-07-31'),
(12, '16:00:00', '2012-08-02'),
(11, '13:00:00', '2012-08-01'),
(13, '08:00:00', '2012-08-02'),
(14, '18:00:00', '2012-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE IF NOT EXISTS `stat` (
  `pid` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `status` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `test_name` char(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `type_id`, `test_name`) VALUES
(1, 1, 'Automated Blood Culture'),
(2, 1, 'Urine for C/S'),
(3, 2, 'Blood Film'),
(4, 2, 'Malarial Parasite'),
(5, 3, 'Blood Group & RH factor'),
(6, 3, 'Coomb''s Test');

-- --------------------------------------------------------

--
-- Table structure for table `test_report`
--

CREATE TABLE IF NOT EXISTS `test_report` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` char(6) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `rpt_date` date NOT NULL DEFAULT '0000-00-00',
  `prs_date` date NOT NULL DEFAULT '0000-00-00',
  `invst_cata_id` char(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `test_id` int(11) NOT NULL DEFAULT '0',
  `test_value` char(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `test_report`
--

INSERT INTO `test_report` (`rid`, `pid`, `rpt_date`, `prs_date`, `invst_cata_id`, `test_id`, `test_value`) VALUES
(34, '29', '2012-01-01', '2012-08-03', '2', 15, '12'),
(35, '29', '2012-01-02', '2012-08-03', '2', 16, '32'),
(36, '29', '2012-01-03', '2012-08-03', '2', 17, '5'),
(4, '', '0000-00-00', '0000-00-00', '2', 32, '10'),
(5, '', '0000-00-00', '0000-00-00', '2', 32, '10'),
(6, '', '0000-00-00', '0000-00-00', '1', 3, '1'),
(7, '', '0000-00-00', '0000-00-00', '15', 271, '6'),
(8, '', '0000-00-00', '0000-00-00', '15', 271, '6'),
(9, '', '0000-00-00', '0000-00-00', '2', 30, '8'),
(10, '', '0000-00-00', '0000-00-00', '2', 32, '89'),
(11, '', '0000-00-00', '0000-00-00', '8', 166, '8'),
(12, '', '0000-00-00', '0000-00-00', '8', 167, '89'),
(13, '13', '0000-00-00', '0000-00-00', '8', 166, '78'),
(14, '13', '2012-02-02', '0000-00-00', '2', 29, '45'),
(15, '13', '2012-01-01', '2012-07-27', '8', 164, '56'),
(16, '9', '0000-00-00', '2012-07-30', '8', 166, '5'),
(17, '21', '2012-01-05', '2012-07-31', '2', 15, '10'),
(18, '21', '2012-01-03', '2012-07-31', '2', 16, '21'),
(19, '21', '2012-01-02', '2012-07-31', '2', 17, '87'),
(20, '21', '2012-01-01', '2012-07-31', '8', 163, '89'),
(21, '21', '2012-01-01', '2012-07-31', '8', 163, '89'),
(22, '21', '2012-01-01', '2012-07-31', '8', 163, '89'),
(23, '24', '2012-02-01', '2012-08-01', '2', 31, '78'),
(24, '24', '2012-02-01', '2012-08-01', '8', 167, '90'),
(25, '26', '2012-02-03', '2012-08-01', '2', 15, '5.5'),
(26, '26', '2012-02-04', '2012-08-01', '2', 16, '98'),
(27, '28', '2012-01-01', '2012-08-02', '2', 19, '78'),
(28, '28', '2012-01-02', '2012-08-02', '2', 20, '87'),
(29, '28', '2012-01-03', '2012-08-02', '2', 21, '87'),
(30, '28', '2012-02-04', '2012-08-02', '5', 102, '7'),
(31, '28', '2012-02-05', '2012-08-02', '5', 103, '9'),
(32, '28', '2012-02-05', '2012-08-02', '5', 104, '8'),
(33, '28', '2012-02-06', '2012-08-02', '5', 105, '7'),
(37, '29', '2012-01-04', '2012-08-03', '2', 18, '8'),
(38, '29', '2012-01-05', '2012-08-03', '2', 19, '78'),
(39, '29', '2012-04-04', '2012-08-03', '2', 15, '5'),
(40, '29', '2012-04-05', '2012-08-03', '2', 16, '55'),
(41, '29', '2012-04-06', '2012-08-03', '2', 17, '555'),
(42, '29', '2012-04-07', '2012-08-03', '2', 18, '3'),
(43, '29', '2012-04-08', '2012-08-03', '2', 19, '6'),
(44, '29', '2012-04-09', '2012-08-03', '2', 20, '7'),
(45, '29', '2012-04-10', '2012-08-03', '2', 21, '7.6'),
(46, '29', '2012-04-11', '2012-08-03', '2', 22, '8.9'),
(47, '29', '2012-04-12', '2012-08-03', '2', 22, '9.9'),
(48, '29', '2012-04-12', '2012-08-03', '2', 23, '5.6'),
(49, '29', '2012-04-15', '2012-08-03', '2', 24, '5.6'),
(50, '29', '2012-04-15', '2012-08-03', '2', 25, '5.6'),
(51, '29', '2012-04-15', '2012-08-03', '2', 26, '5.6'),
(52, '29', '2012-04-16', '2012-08-03', '2', 27, '5.3'),
(53, '29', '2012-04-18', '2012-08-03', '2', 28, '5.4'),
(54, '29', '2012-04-19', '2012-08-03', '2', 31, '54'),
(55, '29', '2012-04-20', '2012-08-03', '2', 32, '40'),
(56, '29', '2012-04-21', '2012-08-03', '2', 33, '21'),
(57, '29', '2012-05-05', '2012-08-03', '8', 163, '4.5'),
(58, '29', '2012-05-06', '2012-08-03', '8', 164, '4.3'),
(59, '29', '2012-05-07', '2012-08-03', '8', 165, '4.5'),
(60, '29', '2012-05-08', '2012-08-03', '8', 166, '4.8'),
(61, '29', '2012-05-10', '2012-08-03', '8', 167, '5.7'),
(62, '34', '2012-08-01', '2012-08-10', '2', 15, '10'),
(63, '34', '2012-08-02', '2012-08-10', '2', 33, '20'),
(64, '34', '2012-08-03', '2012-08-10', '2', 15, '45');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` char(60) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Microbiology'),
(2, 'Haematology'),
(3, 'Serology');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`) VALUES
(1, 'edoctor', 'edoctor'),
(2, 'assis', 'assis'),
(3, 'assis1', 'assis1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
