
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `contacts_contacts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_work` varchar(40) NOT NULL,
  `phone_mobile` varchar(40) NOT NULL,
  `email_work` varchar(256) NOT NULL,
  `email_private` varchar(256) NOT NULL,
  `home` varchar(4000) NOT NULL,
  `note` varchar(4000) NOT NULL,
  `favorite` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `contacts_contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;