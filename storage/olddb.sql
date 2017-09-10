/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.24 : Database - mycelebwatch
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `mycelebwatch`;

/*Table structure for table `advertisement` */

DROP TABLE IF EXISTS `advertisement`;

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_size` varchar(50) NOT NULL,
  `ad_content` text NOT NULL,
  `ad_key` varchar(250) NOT NULL DEFAULT '0',
  `ad_possition` enum('Left','Right','Top','Bottom','Center','Header','Fotter') NOT NULL DEFAULT 'Right',
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `article_date` date DEFAULT NULL,
  `article_summary` text,
  `article_content` mediumtext,
  `is_featured` bigint(1) NOT NULL DEFAULT '0',
  `is_main_featured` bigint(1) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

/*Table structure for table `artist` */

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(250) DEFAULT NULL,
  `artist_des` varchar(250) DEFAULT NULL,
  `music_file` varchar(250) DEFAULT NULL,
  `artist_pic` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `is_featured` bigint(1) NOT NULL DEFAULT '1',
  `is_promoted` bigint(1) NOT NULL DEFAULT '1',
  `is_promoted2` bigint(1) NOT NULL DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `captcha` */

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Table structure for table `celebrities` */

DROP TABLE IF EXISTS `celebrities`;

CREATE TABLE `celebrities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `nicknames` varchar(255) DEFAULT NULL,
  `birth_name` varchar(255) DEFAULT NULL,
  `bio` text NOT NULL,
  `trade_mark` text,
  `details_trivia` text,
  `personal_quotes` text,
  `profile_pic` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Female','Male','Other') NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `rss` text NOT NULL,
  `height` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `popular_searches` text,
  `featured_video` text,
  `ads_block_1` text,
  `ads_block_2` text,
  `ads_block_3` text,
  `ads_block_4` text,
  `ads1_banner_type` int(1) DEFAULT NULL,
  `ads2_banner_type` int(1) DEFAULT NULL,
  `ads3_banner_type` int(1) DEFAULT NULL,
  `ads4_banner_type` int(1) DEFAULT NULL,
  `ads1_userfile` varchar(250) DEFAULT NULL,
  `ads2_userfile` varchar(250) DEFAULT NULL,
  `ads3_userfile` varchar(250) DEFAULT NULL,
  `ads4_userfile` varchar(250) DEFAULT NULL,
  `ads_banner_link_1` varchar(255) DEFAULT NULL,
  `ads_banner_link_2` varchar(255) DEFAULT NULL,
  `ads_banner_link_3` varchar(255) DEFAULT NULL,
  `ads_banner_link_4` varchar(255) DEFAULT NULL,
  `is_feature` int(1) DEFAULT '0',
  `feature_subtitle` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_children` */

DROP TABLE IF EXISTS `celebrity_children`;

CREATE TABLE `celebrity_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `children_name` varchar(255) DEFAULT NULL,
  `children_dob` date DEFAULT NULL,
  `children_celebrity_id` int(11) DEFAULT NULL,
  `children_gender` varchar(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_featured_project` */

DROP TABLE IF EXISTS `celebrity_featured_project`;

CREATE TABLE `celebrity_featured_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `project_description` text,
  `project_file` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `project_video` text,
  `project_type` enum('image','video') DEFAULT 'image',
  `project_active` bigint(1) DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_followers` */

DROP TABLE IF EXISTS `celebrity_followers`;

CREATE TABLE `celebrity_followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `type` enum('follow','unfollow','like','unlike','heart','unheart') DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_news` */

DROP TABLE IF EXISTS `celebrity_news`;

CREATE TABLE `celebrity_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `news_location` varchar(255) NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_description` text,
  `news_photo` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_photo` */

DROP TABLE IF EXISTS `celebrity_photo`;

CREATE TABLE `celebrity_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `photo_location` varchar(255) NOT NULL,
  `photo_title` varchar(255) DEFAULT NULL,
  `photo_description` text,
  `photo_file` varchar(255) DEFAULT NULL,
  `imgclass` varchar(255) DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_relation` */

DROP TABLE IF EXISTS `celebrity_relation`;

CREATE TABLE `celebrity_relation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email_address` varchar(250) DEFAULT NULL,
  `job_title` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `second_number` varchar(100) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `celebrity_spouse` */

DROP TABLE IF EXISTS `celebrity_spouse`;

CREATE TABLE `celebrity_spouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) NOT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_relation` varchar(255) DEFAULT NULL,
  `spouse_celebrity_id` int(11) DEFAULT NULL,
  `spouse_children` int(11) DEFAULT NULL,
  `spouse_from` date DEFAULT NULL,
  `spouse_to` date DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  `currencyCode` char(3) DEFAULT NULL,
  `capital` varchar(30) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idCountry`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_components` */

DROP TABLE IF EXISTS `crud_components`;

CREATE TABLE `crud_components` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) DEFAULT NULL,
  `component_name` varchar(255) DEFAULT NULL,
  `component_table` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_group_components` */

DROP TABLE IF EXISTS `crud_group_components`;

CREATE TABLE `crud_group_components` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_groups` */

DROP TABLE IF EXISTS `crud_groups`;

CREATE TABLE `crud_groups` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `group_description` text,
  `group_manage_flag` tinyint(4) DEFAULT NULL,
  `group_setting_management` tinyint(4) DEFAULT NULL,
  `group_global_access` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_histories` */

DROP TABLE IF EXISTS `crud_histories`;

CREATE TABLE `crud_histories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `history_action` varchar(255) DEFAULT NULL,
  `history_date_time` datetime DEFAULT NULL,
  `history_table_name` varchar(255) DEFAULT NULL,
  `history_data` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_languages` */

DROP TABLE IF EXISTS `crud_languages`;

CREATE TABLE `crud_languages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `language_code` varchar(255) DEFAULT NULL,
  `language_name` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `crud_permissions` */

DROP TABLE IF EXISTS `crud_permissions`;

CREATE TABLE `crud_permissions` (
  `group_id` bigint(20) NOT NULL,
  `com_id` bigint(20) NOT NULL,
  `permission_type` tinyint(4) NOT NULL,
  PRIMARY KEY (`group_id`,`com_id`,`permission_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `crud_settings` */

DROP TABLE IF EXISTS `crud_settings`;

CREATE TABLE `crud_settings` (
  `setting_key` varchar(255) NOT NULL DEFAULT '',
  `setting_value` longtext,
  PRIMARY KEY (`setting_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `crud_user_permissions` */

DROP TABLE IF EXISTS `crud_user_permissions`;

CREATE TABLE `crud_user_permissions` (
  `user_id` bigint(20) NOT NULL,
  `com_id` bigint(20) NOT NULL,
  `permission_type` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`,`com_id`,`permission_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `crud_users` */

DROP TABLE IF EXISTS `crud_users`;

CREATE TABLE `crud_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_first_name` varchar(255) DEFAULT NULL,
  `user_las_name` varchar(255) DEFAULT NULL,
  `user_info` text,
  `user_code` varchar(255) DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT '0',
  `user_manage_flag` tinyint(4) DEFAULT NULL,
  `user_setting_management` tinyint(4) DEFAULT NULL,
  `user_global_access` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `title` text,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  `description` text,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `allDay` enum('true','false') NOT NULL DEFAULT 'true',
  `rendering` varchar(10) NOT NULL,
  `overlap` enum('true','false') NOT NULL DEFAULT 'true',
  `recurdays` int(4) NOT NULL,
  `recurend` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `filename` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL DEFAULT '0',
  `social` varchar(250) NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=1668 DEFAULT CHARSET=utf8;

/*Table structure for table `events_sales` */

DROP TABLE IF EXISTS `events_sales`;

CREATE TABLE `events_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `total_price` float(12,2) DEFAULT NULL,
  `payment_mode` enum('Stripe','PayPal') DEFAULT 'Stripe',
  `payment_key` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `eventsources` */

DROP TABLE IF EXISTS `eventsources`;

CREATE TABLE `eventsources` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `source_name` varchar(90) NOT NULL,
  `source_url` varchar(255) NOT NULL,
  PRIMARY KEY (`source_id`),
  UNIQUE KEY `source_id` (`source_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Table structure for table `eventsqueues` */

DROP TABLE IF EXISTS `eventsqueues`;

CREATE TABLE `eventsqueues` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `title` text,
  `backgroundColor` varchar(11) NOT NULL,
  `borderColor` varchar(11) NOT NULL,
  `textColor` varchar(11) NOT NULL,
  `description` text,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `allDay` enum('true','false') NOT NULL DEFAULT 'true',
  `rendering` varchar(10) NOT NULL,
  `overlap` enum('true','false') NOT NULL DEFAULT 'true',
  `recurdays` int(4) NOT NULL,
  `recurend` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `filename` varchar(250) NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`),
  UNIQUE KEY `eid` (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `markers` */

DROP TABLE IF EXISTS `markers`;

CREATE TABLE `markers` (
  `markers_id` int(11) NOT NULL AUTO_INCREMENT,
  `markers_category_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `markers_name` varchar(45) NOT NULL,
  `markers_logo` varchar(80) NOT NULL,
  `markers_address` varchar(255) NOT NULL,
  `markers_lat` double NOT NULL,
  `markers_lng` double NOT NULL,
  `markers_url` varchar(110) NOT NULL,
  `markers_desc` text NOT NULL,
  `pubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`markers_id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `access` int(3) NOT NULL,
  `pubdates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `partners` */

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `tier` int(100) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Table structure for table `popular_search` */

DROP TABLE IF EXISTS `popular_search`;

CREATE TABLE `popular_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `search_title` varchar(255) DEFAULT NULL,
  `search_url` varchar(255) DEFAULT NULL,
  `search_sort` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `sub_celebrities` */

DROP TABLE IF EXISTS `sub_celebrities`;

CREATE TABLE `sub_celebrities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `user_first_name` varchar(250) DEFAULT NULL,
  `user_last_name` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `nicknames` varchar(255) DEFAULT NULL,
  `birth_name` varchar(255) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `birth_place` varchar(250) DEFAULT NULL,
  `bio` text NOT NULL,
  `trade_mark` text,
  `details_trivia` text,
  `personal_quotes` text,
  `profile_pic` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Female','Male','Other') NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `rss` text NOT NULL,
  `height` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `popular_searches` text,
  `website` varchar(244) NOT NULL,
  `featured_video` text,
  `is_feature` int(1) DEFAULT '0',
  `feature_subtitle` varchar(255) DEFAULT NULL,
  `user_phone_number` varchar(250) DEFAULT NULL,
  `user_home_number` varchar(250) DEFAULT NULL,
  `user_address1` varchar(250) DEFAULT NULL,
  `user_url_id` varchar(250) DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT '1',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `sub_events` */

DROP TABLE IF EXISTS `sub_events`;

CREATE TABLE `sub_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `celebrity_id` int(11) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_detail` text,
  `event_date` date DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(244) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `event_file` varchar(244) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_cities` */

DROP TABLE IF EXISTS `tbl_cities`;

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `state_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47577 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_comment` */

DROP TABLE IF EXISTS `tbl_comment`;

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `page` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `active` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `notification` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tbl_configuration` */

DROP TABLE IF EXISTS `tbl_configuration`;

CREATE TABLE `tbl_configuration` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` longtext COLLATE utf8_unicode_ci NOT NULL,
  `alert_email` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `add_url` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `add_capcha` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hover_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color_line` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color_back` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color_text` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color_inside_comment` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `send_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `response_notification` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `active_comments` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `active_facebook` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tbl_countries` */

DROP TABLE IF EXISTS `tbl_countries`;

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(45) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_page` */

DROP TABLE IF EXISTS `tbl_page`;

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name_page` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `tbl_states` */

DROP TABLE IF EXISTS `tbl_states`;

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4121 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) DEFAULT NULL,
  `user_stripe` varchar(255) DEFAULT NULL,
  `user_phone_number` varchar(45) DEFAULT NULL,
  `user_date_of_birth` date DEFAULT NULL,
  `user_gender` varchar(45) DEFAULT NULL,
  `user_hear_about_site` text,
  `user_profile_picture` varchar(255) DEFAULT NULL,
  `user_favourite_celebrity` text,
  `user_favourite_artist` text,
  `user_favourite_movie` text,
  `user_favourite_tv_show` text,
  `user_anything_else_wants_to_share` text,
  `user_created_date_time` datetime DEFAULT NULL,
  `user_first_name` varchar(100) DEFAULT NULL,
  `user_last_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_info` text,
  `user_code` varchar(255) DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT '0',
  `fk_country_id` varchar(11) DEFAULT NULL,
  `fk_country_state_id` varchar(11) DEFAULT NULL,
  `fk_country_state_city_id` int(11) DEFAULT NULL,
  `user_url_id` varchar(255) DEFAULT NULL,
  `user_language` varchar(45) DEFAULT NULL,
  `user_address1` varchar(255) DEFAULT NULL,
  `user_address2` varchar(255) DEFAULT NULL,
  `user_home_number` varchar(100) DEFAULT NULL,
  `user_zipcode` varchar(45) DEFAULT NULL,
  `user_manage_flag` tinyint(4) DEFAULT NULL,
  `user_setting_management` tinyint(4) DEFAULT NULL,
  `user_global_access` tinyint(4) DEFAULT NULL,
  `cal_timezone` varchar(100) NOT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_user_log` */

DROP TABLE IF EXISTS `tbl_user_log`;

CREATE TABLE `tbl_user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_user_payment_methods` */

DROP TABLE IF EXISTS `tbl_user_payment_methods`;

CREATE TABLE `tbl_user_payment_methods` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_id` int(11) DEFAULT NULL,
  `fk_country_id` int(11) DEFAULT NULL,
  `fk_country_state_id` int(11) DEFAULT NULL,
  `fk_country_state_city_id` int(11) DEFAULT NULL,
  `set_as` varchar(45) DEFAULT NULL,
  `card_stripe_id` varchar(255) DEFAULT NULL,
  `card_type` varchar(110) DEFAULT NULL,
  `card_name` varchar(255) DEFAULT NULL,
  `card_number` varchar(55) DEFAULT NULL,
  `exp_month` varchar(45) DEFAULT NULL,
  `exp_year` varchar(45) DEFAULT NULL,
  `card_cvv` varchar(15) DEFAULT NULL,
  `user_address1` varchar(255) DEFAULT NULL,
  `user_address2` varchar(255) DEFAULT NULL,
  `user_zipcode` varchar(55) DEFAULT NULL,
  `user_phone_number` varchar(45) DEFAULT NULL,
  `payment_type` varchar(45) DEFAULT NULL,
  `paypal_email` varchar(255) DEFAULT NULL,
  `paypal_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `tbl_user_subscriptions` */

DROP TABLE IF EXISTS `tbl_user_subscriptions`;

CREATE TABLE `tbl_user_subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `subscription_key` varchar(255) DEFAULT NULL,
  `subscription_type` enum('Stripe','PayPal') DEFAULT NULL,
  `type` enum('Subscription','Charge') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `templates` */

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `trands` */

DROP TABLE IF EXISTS `trands`;

CREATE TABLE `trands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trands_title` varchar(255) DEFAULT NULL,
  `trands_url` varchar(255) DEFAULT NULL,
  `trands_views` varchar(255) DEFAULT NULL,
  `is_promoted` bigint(1) DEFAULT '1',
  `promoted_by` varchar(255) DEFAULT NULL,
  `trands_sort` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `uz_cities` */

DROP TABLE IF EXISTS `uz_cities`;

CREATE TABLE `uz_cities` (
  `ID` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `country` char(2) NOT NULL,
  `region` char(3) NOT NULL,
  `url` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `country` (`country`,`name`,`region`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=207637 DEFAULT CHARSET=utf8;

/*Table structure for table `uz_citynames` */

DROP TABLE IF EXISTS `uz_citynames`;

CREATE TABLE `uz_citynames` (
  `ID` int(8) unsigned NOT NULL,
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  UNIQUE KEY `ID` (`ID`,`locale`),
  KEY `locale` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `uz_countries` */

DROP TABLE IF EXISTS `uz_countries`;

CREATE TABLE `uz_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(2) NOT NULL,
  `url` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `regions` int(2) NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`code`),
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

/*Table structure for table `uz_countrynames` */

DROP TABLE IF EXISTS `uz_countrynames`;

CREATE TABLE `uz_countrynames` (
  `code` char(2) NOT NULL,
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  UNIQUE KEY `code` (`code`,`locale`),
  KEY `locale` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `uz_locales` */

DROP TABLE IF EXISTS `uz_locales`;

CREATE TABLE `uz_locales` (
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  PRIMARY KEY (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `uz_regionnames` */

DROP TABLE IF EXISTS `uz_regionnames`;

CREATE TABLE `uz_regionnames` (
  `ID` int(4) unsigned NOT NULL,
  `locale` char(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  UNIQUE KEY `ID` (`ID`,`locale`) USING BTREE,
  KEY `locale` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `uz_regions` */

DROP TABLE IF EXISTS `uz_regions`;

CREATE TABLE `uz_regions` (
  `ID` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `country` char(2) NOT NULL,
  `code` char(3) NOT NULL,
  `url` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `cities` int(4) unsigned NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified_by` bigint(20) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `countryCode` (`country`,`code`),
  UNIQUE KEY `countryCode_2` (`country`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4350 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
