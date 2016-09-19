CREATE DATABASE IF NOT EXISTS `blogm` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blogm`;

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


INSERT INTO `user` (`user_id`, `fio`, `login`, `password`, `email`, `phone`, `country`) VALUES
	(1, 'admin', 'admin', md5('admin'), 'nagine00@mail.ru','','Россия');
	
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `datab` date DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
