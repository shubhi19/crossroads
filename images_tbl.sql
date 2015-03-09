-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 01:03 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raw`
--

-- --------------------------------------------------------

--
-- Table structure for table `images_tbl`
--

CREATE TABLE IF NOT EXISTS `images_tbl` (
  `images_id` int(11) NOT NULL AUTO_INCREMENT,
  `images_path` varchar(200) NOT NULL,
  `submission_date` date DEFAULT NULL,
  `offense` varchar(50) DEFAULT NULL,
  `registration_no` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `images_tbl`
--

INSERT INTO `images_tbl` (`images_id`, `images_path`, `submission_date`, `offense`, `registration_no`, `name`, `email`) VALUES
(1, 'pictures/09-03-2015-1425898482.jpg', '2015-03-09', 'over-speeding', 'MP-04-2222', 'John', 'johnme@hotmail.com'),
(4, 'pictures/09-03-2015-1425898745.jpg', '2015-03-09', 'over-speeding', 'NP-11-2020', 'alyonsa', 'aly@gmail.com'),
(5, 'pictures/09-03-2015-1425898791.jpg', '2015-03-09', 'over-speeding', 'ww-89-1007', 'rajesh', 'rajhere@gmail.com'),
(6, 'pictures/09-03-2015-1425898840.jpg', '2015-03-09', 'over-speeding', 'CG-02-1956', 'priyanka', 'priyal@rediffmail.com'),
(7, 'pictures/09-03-2015-1425899592.jpg', '2015-03-09', 'drunk driving', 'st-02-6767', 'mausami', 'mausami@gmail.com'),
(8, 'pictures/09-03-2015-1425899637.jpg', '2015-03-09', 'drunk driving', 'rt-02-4578', 'shaan', 'shaanme@yahoo.com'),
(9, 'pictures/09-03-2015-1425899676.jpg', '2015-03-09', 'drunk driving', 'cv-04-2389', 'sagarika', 'sags@gmail.com'),
(10, 'pictures/09-03-2015-1425899727.jpg', '2015-03-09', 'Reckless driving', 'sd-04-5609', 'roy', 'coolme@gmail.com'),
(11, 'pictures/09-03-2015-1425899770.jpg', '2015-03-09', 'Reckless driving', 'er-78-1200', 'divya', 'divya@hotmail.com'),
(12, 'pictures/09-03-2015-1425899850.jpg', '2015-03-09', 'Reckless driving', 'gh-88-9090', 'deepa sayal', 'sayal@yahoo.com'),
(13, 'pictures/09-03-2015-1425899907.jpg', '2015-03-09', 'Running a red light', 'th-02-1356', 'hansika sharma', 'sharma@gmail.com'),
(14, 'pictures/09-03-2015-1425899953.jpg', '2015-03-09', 'Running a red light', 'py-02-6924', 'ojaswi', 'oo@gmail.com'),
(15, 'pictures/09-03-2015-1425900036.jpg', '2015-03-09', 'Running a red light', 'jh-04-5353', 'george', 'georgina@yahoo.com'),
(16, 'pictures/09-03-2015-1425900090.jpg', '2015-03-09', 'Using a cell phone', 'yu-04-7878', 'satya', 'satyai@gmail.com'),
(17, 'pictures/09-03-2015-1425900140.jpg', '2015-03-09', 'Using a cell phone', 'zx-04-1709', 'darshita peshwani', 'peshdarshna@rediffmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
