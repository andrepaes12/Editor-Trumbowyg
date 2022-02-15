CREATE DATABASE `editor` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE TABLE `articles` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='tutorial celke';
