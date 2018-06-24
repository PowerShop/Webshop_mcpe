-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 11:00 AM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `name` varchar(255) NOT NULL,
  `redeem` varchar(255) NOT NULL,
  `command` varchar(255) NOT NULL,
  UNIQUE KEY `name_3` (`name`),
  KEY `name` (`name`),
  KEY `name_2` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tran_num` varchar(255) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` longtext CHARACTER SET latin1 NOT NULL,
  `DATETIME` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `tran_num`, `amount`, `phone`, `DATETIME`) VALUES
(2, '50000537956226', '1', '-9683', '2018-04-01 18:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'https://powershop.cf/webb/page/img/01.jpg', 'https://powershop.cf/webb/page/img/02.jpg', 'https://powershop.cf/webb/page/img/03.jpg', 'https://powershop.cf/webb/page/img/04.jpg', 'https://powershop.cf/webb/page/img/05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `command1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `command2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `command3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command7` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command8` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command9` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `command10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `page` varchar(255) CHARACTER SET latin1 NOT NULL,
  `category` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `command1`, `command2`, `command3`, `command4`, `command5`, `command6`, `command7`, `command8`, `command9`, `command10`, `image`, `price`, `page`, `category`) VALUES
(1, '1', '', '', '', '', '', '', '', '', '', '', 'https://www.picz.in.th/images/2018/03/24/S2UrP2.jpg', 0, '1', ''),
(2, 'Test', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', 'https://powershop.cf/webb/page/img/01.jpg', 1, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`) VALUES
(2, '123-4567-8901-1234');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_fb` varchar(255) NOT NULL,
  `admin_dl` varchar(255) NOT NULL,
  `admin_loading` varchar(255) NOT NULL,
  `admin_bg` varchar(255) NOT NULL,
  `admin_favicon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id`, `server_name`, `admin_phone`, `admin_fb`, `admin_dl`, `admin_loading`, `admin_bg`, `admin_favicon`) VALUES
(1, 'WebShop Demo', '0987654321', 'AdminFB', 'Link Dl MCPE 1.1.x', 'https://powershop.cf/webb/page/img/lo.gif', 'http://localhost:8080/shop/page/img/bg.jpg', 'https://vignette.wikia.nocookie.net/minecraft/images/6/64/Favicon.ico/revision/latest?cb=20171216072952&path-prefix=yue');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_point`
--

CREATE TABLE IF NOT EXISTS `transfer_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `transfer_point`
--

INSERT INTO `transfer_point` (`id`, `name`, `username`, `point`, `date`) VALUES
(12, 'Min', 'Test', '1', '0000-00-00 00:00:00'),
(13, 'Min', 'Min', '10', '0000-00-00 00:00:00'),
(14, 'Min', 'admin', '1', '2018-03-29 19:15:35'),
(15, 'Min', 'admin', '10', '2018-03-30 16:21:39'),
(16, 'Min', 'AnuchitZaza', '2', '2018-04-24 14:30:25'),
(17, 'Min', 'admin', '100', '2018-05-06 11:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `truemoney`
--

CREATE TABLE IF NOT EXISTS `truemoney` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truemoney_uid` varchar(255) NOT NULL,
  `truemoney_passkey` varchar(255) NOT NULL,
  `50` int(11) NOT NULL,
  `90` int(11) NOT NULL,
  `150` int(11) NOT NULL,
  `300` int(11) NOT NULL,
  `500` int(11) NOT NULL,
  `100` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `truemoney`
--

INSERT INTO `truemoney` (`id`, `truemoney_uid`, `truemoney_passkey`, `50`, `90`, `150`, `300`, `500`, `100`) VALUES
(1, '12345', '127.0.0.1', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `truewallet`
--

CREATE TABLE IF NOT EXISTS `truewallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truewallet_phone` varchar(255) NOT NULL,
  `truewallet_username` varchar(255) NOT NULL,
  `truewallet_password` varchar(255) NOT NULL,
  `host_name` varchar(255) NOT NULL,
  `host_user` varchar(255) NOT NULL,
  `host_pass` varchar(255) NOT NULL,
  `host_db` varchar(255) NOT NULL,
  `sitekey` varchar(255) NOT NULL,
  `open_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `truewallet`
--

INSERT INTO `truewallet` (`id`, `truewallet_phone`, `truewallet_username`, `truewallet_password`, `host_name`, `host_user`, `host_pass`, `host_db`, `sitekey`, `open_pass`) VALUES
(1, '0987654321', 'dddxcvg@gmail.com', 'dekdee111', 'localhost', 'powersho_demo', 'demoo', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tw_profile`
--

CREATE TABLE IF NOT EXISTS `tw_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(255) NOT NULL,
  `tran_number` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `DATETIME` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tw_profile`
--

INSERT INTO `tw_profile` (`id`, `fb_id`, `tran_number`, `amount`, `DATETIME`) VALUES
(3, 'Min', '50000537956226', '1', '2018-04-01 18:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `point`, `avatar`, `admin`) VALUES
(8, 'Min', '12345', 5880, 'https://www.picz.in.th/images/2018/03/28/SV5bWR.gif', 'true');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
