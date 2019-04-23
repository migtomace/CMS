CREATE DATABASE `cms` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(35) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`postID`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
