-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2014 at 11:24 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hoivietsec`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contact_content` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faq_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `faq_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `faq_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `faq_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `faq_content` text COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text COLLATE utf8_unicode_ci NOT NULL,
  `faq_date` date NOT NULL,
  `faq_ans_people` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `faq_status` int(2) NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `faq`
--


-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `group_number` int(11) NOT NULL,
  `group_status` int(2) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `group`
--


-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
  `intro_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `intro_text` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_date` date NOT NULL,
  `intro_author` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `intro_status` int(2) NOT NULL,
  PRIMARY KEY (`intro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `introduction`
--


-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `job_number` int(11) NOT NULL,
  `job_status` int(2) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `job`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mem_first_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mem_last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_birthday` year(4) NOT NULL,
  `mem_competece` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mem_gender` int(2) NOT NULL,
  `mem_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mem_address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mem_office` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mem_office_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_home_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_cell_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_job_id` int(11) NOT NULL,
  `mem_year_start` year(4) NOT NULL,
  `mem_year_finish` year(4) NOT NULL,
  `mem_local` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mem_city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mem_speciaty` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mem_group_id` int(11) NOT NULL,
  `mem_information` text COLLATE utf8_unicode_ci NOT NULL,
  `mem_card` int(2) NOT NULL,
  `mem_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mem_number` int(11) NOT NULL,
  `mem_status` int(11) NOT NULL,
  `mem_associtation` int(2) NOT NULL,
  `mem_associtation_number` int(11) NOT NULL,
  PRIMARY KEY (`mem_id`),
  KEY `mem_year_start` (`mem_year_start`),
  KEY `mem_gender` (`mem_gender`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `member`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo_category`
--

CREATE TABLE IF NOT EXISTS `photo_category` (
  `photo_cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_cat_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo_cat_date` date NOT NULL,
  `photo_cat_number` int(11) NOT NULL,
  `photo_cat_status` int(2) NOT NULL,
  PRIMARY KEY (`photo_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `photo_cat_id` int(11) NOT NULL,
  `photo_number` int(11) NOT NULL,
  `photo_status` int(2) NOT NULL,
  `photo_avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photo_gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sche_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sche_text` text COLLATE utf8_unicode_ci NOT NULL,
  `sche_date` date NOT NULL,
  `sche_author` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sche_status` int(2) NOT NULL,
  PRIMARY KEY (`sche_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_advert`
--

CREATE TABLE IF NOT EXISTS `tbl_advert` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ad_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ad_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ad_state` int(11) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_advert`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE IF NOT EXISTS `tbl_catalog` (
  `ca_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catalogid` int(11) NOT NULL,
  `ca_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ca_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_catalog`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_clip`
--

CREATE TABLE IF NOT EXISTS `tbl_clip` (
  `cl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cl_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cl_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cl_state` int(2) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_clip`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_link`
--

CREATE TABLE IF NOT EXISTS `tbl_link` (
  `li_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `li_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `li_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `li_order` int(11) NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_link`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `ne_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ne_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ne_date` date NOT NULL,
  `ne_destion` text COLLATE utf8_unicode_ci NOT NULL,
  `ne_content` text COLLATE utf8_unicode_ci NOT NULL,
  `ne_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catalogid` int(11) NOT NULL,
  `ne_author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ne_state` int(2) NOT NULL,
  `ne_focus` int(2) NOT NULL,
  PRIMARY KEY (`ne_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_news`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE IF NOT EXISTS `tbl_notice` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_date` date NOT NULL,
  `no_content` text COLLATE utf8_unicode_ci NOT NULL,
  `no_state` int(2) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_notice`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_view`
--

CREATE TABLE IF NOT EXISTS `tbl_view` (
  `vi_id` int(11) NOT NULL AUTO_INCREMENT,
  `vi_views` int(11) NOT NULL,
  PRIMARY KEY (`vi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_view`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
