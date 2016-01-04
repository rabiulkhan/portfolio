-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Mar 11, 2015 at 04:33 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `portfolio1`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `about`
-- 

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `sname` longtext NOT NULL,
  `company` longtext NOT NULL,
  `address` longtext NOT NULL,
  `city` longtext NOT NULL,
  PRIMARY KEY  (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `about`
-- 

INSERT INTO `about` (`about_id`, `name`, `sname`, `company`, `address`, `city`) VALUES 
(1, 'Ananya', 'Dey', 'bekar', 'gandaria', 'dhaka');

-- --------------------------------------------------------

-- 
-- Table structure for table `education`
-- 

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL auto_increment,
  `institute` longtext NOT NULL,
  `subject` longtext NOT NULL,
  `starting_year` longtext NOT NULL,
  `ending_year` longtext NOT NULL,
  PRIMARY KEY  (`education_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `education`
-- 

INSERT INTO `education` (`education_id`, `institute`, `subject`, `starting_year`, `ending_year`) VALUES 
(3, 'AUST', 'cse', '2015-03-05', '2015-03-28');

-- --------------------------------------------------------

-- 
-- Table structure for table `project`
-- 

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  `duration` longtext NOT NULL,
  PRIMARY KEY  (`project_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `project`
-- 

INSERT INTO `project` (`project_id`, `name`, `description`, `duration`) VALUES 
(2, 'portfolio', 'jhjhkjhkjklj', '3'),
(3, 'BBC', 'ZXCVBNMSDFGHJK', '2');

-- --------------------------------------------------------

-- 
-- Table structure for table `skill`
-- 

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `percentage` longtext NOT NULL,
  PRIMARY KEY  (`skill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `skill`
-- 

INSERT INTO `skill` (`skill_id`, `name`, `percentage`) VALUES 
(1, 'Web Developer', '10'),
(2, 'JAVA', '70');

-- --------------------------------------------------------

-- 
-- Table structure for table `system_settings`
-- 

CREATE TABLE `system_settings` (
  `system_settings_id` int(11) NOT NULL auto_increment,
  `system_name` longtext NOT NULL,
  `system_title` longtext NOT NULL,
  `address` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `about` longtext NOT NULL,
  PRIMARY KEY  (`system_settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `system_settings`
-- 

INSERT INTO `system_settings` (`system_settings_id`, `system_name`, `system_title`, `address`, `phone`, `about`) VALUES 
(1, 'Rabi', 'Ananya Dey', 'Rampura', '01737916277', 'a developer');
