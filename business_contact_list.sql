-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 05:24 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `business_contact_list`
--
CREATE DATABASE IF NOT EXISTS `business_contact_list` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `business_contact_list`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'varin6033@gmail.com', '090024116404vvv'),
(2, 'varin6033', '9429620986vvv');

-- --------------------------------------------------------

--
-- Table structure for table `business_contacts`
--

CREATE TABLE IF NOT EXISTS `business_contacts` (
  `business_contacts_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profession` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `image` varchar(55) NOT NULL,
  PRIMARY KEY (`business_contacts_id`),
  KEY `business_contacts_id` (`business_contacts_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `business_contacts`
--

INSERT INTO `business_contacts` (`business_contacts_id`, `name`, `date_of_birth`, `profession`, `address`, `contact_no`, `image`) VALUES
(1, 'Bill Gates', '1955-10-28', 'ENTREPRENEUR, PROGRAMMER, BUSINESSPERSON, INVESTOR, SOF', 'Washington', '(206) 709-3100', 'bill_gates.jpg'),
(2, 'Carlos Slim', '1940-01-28', 'Enterprenuer, Businessperson, Financier', 'Mexico City', '(206) 709-3100', 'carlos.jpg'),
(3, 'Mukesh Ambani', '1957-04-19', 'Manager director and largest shareholder', 'Mumbai,India', '(206) 709-3100', 'mukesh_ambani.jpg'),
(4, 'Warren Buffet', '1930-08-30', 'ENTREPRENEUR, BUSINESSPERSON, FINANCIER', 'America', '(206) 709-3100', 'warren_buffet.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
