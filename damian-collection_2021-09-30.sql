# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: damian-collection
# Generation Time: 2021-09-30 15:36:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `creator` varchar(255) NOT NULL DEFAULT '',
  `release-year` int(4) NOT NULL,
  `genre` varchar(255) NOT NULL DEFAULT '',
  `record-label` varchar(255) NOT NULL DEFAULT '',
  `image-link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;

INSERT INTO `albums` (`id`, `name`, `creator`, `release-year`, `genre`, `record-label`, `image-link`)
VALUES
	(1,'Have One on Me','Joanna Newsom',2010,'Chamber Folk','Drag City','http://is5.mzstatic.com/image/thumb/Music124/v4/ca/64/8f/ca648f11-0d57-ea7e-c369-997ef6aac516/source/100000x100000-999.jpg'),
	(2,'Richard D. James Album','Aphex Twin',1996,'IDM','Warp','http://is5.mzstatic.com/image/thumb/Music/v4/af/20/fa/af20fac5-afa6-0230-0f52-7b07f616ccde/source/100000x100000-999.jpg'),
	(3,'Infest the Rats\' Nest','King Gizzard and the Lizard Wizard',2019,'Thrash Metal','Flightless','http://is5.mzstatic.com/image/thumb/Music113/v4/a4/47/82/a44782dd-f9c8-cb86-a629-dcb464633138/source/100000x100000-999.jpg'),
	(4,'Demon Days','Gorillaz',2005,'Art Pop','Parlophone','http://is5.mzstatic.com/image/thumb/Music125/v4/22/d1/ce/22d1cede-83de-e172-600d-3535d21b1b88/source/100000x100000-999.jpg'),
	(5,'Rumours','Fleetwood Mac',1977,'Pop Rock','Warner Bros.','http://is5.mzstatic.com/image/thumb/Music114/v4/d9/f1/b1/d9f1b180-74f3-cd25-cd5a-2f92ab5b15cb/source/100000x100000-999.jpg'),
	(6,'Mezzanine','Massive Attack',1998,'Trip Hop','Virgin','http://is5.mzstatic.com/image/thumb/Music115/v4/b6/c6/73/b6c673c9-25dc-99c2-40eb-e15bfc2c267e/source/100000x100000-999.jpg'),
	(7,'Long Season','Fishmans',1996,'Dream Pop','Polydor','http://is5.mzstatic.com/image/thumb/Music118/v4/ee/e2/27/eee22716-d664-2580-8407-6b29ee218b84/source/100000x100000-999.jpg'),
	(8,'WLFGRL','Machine Girl',2014,'Hardcore Breaks','Dred Collective','http://is5.mzstatic.com/image/thumb/Music125/v4/45/9a/f0/459af00f-61e1-ad4d-b212-ef8e963d1911/source/100000x100000-999.jpg'),
	(9,'Mm..Food','MF DOOM',2004,'East Coast Hip Hop','Rhymesayers','http://is5.mzstatic.com/image/thumb/Music115/v4/d0/9a/76/d09a7610-f92c-a099-0552-84f037dfe7a6/source/100000x100000-999.jpg'),
	(10,'Getz/Gilberto','Stan Getz & João Gilberto',1964,'Bossa Nova','Verve','http://is5.mzstatic.com/image/thumb/Music115/v4/33/f2/35/33f235b2-0004-3f6f-298f-18765a877ddb/source/100000x100000-999.jpg'),
	(11,'Amnesiac','Radiohead',2001,'Alternative Rock','Parlophone','http://is5.mzstatic.com/image/thumb/Music124/v4/6b/17/48/6b1748d0-3a58-1de7-4f7e-b8d0171c68c4/source/100000x100000-999.jpg'),
	(12,'The Black Saint and the Sinner Lady','Charles Mingus',1963,'Avant-Garde Jazz','Impulse!','http://is5.mzstatic.com/image/thumb/Music118/v4/ea/8e/25/ea8e2529-ecea-4d8e-b33b-370fd1d359eb/source/100000x100000-999.jpg'),
	(13,'Ultimate Success Today','Protomartyr',2020,'Post Punk','Domino','http://is5.mzstatic.com/image/thumb/Music113/v4/39/74/b8/3974b865-69e0-2c20-8a1c-a22232bf357a/source/100000x100000-999.jpg'),
	(43,'Spiderland','Slint',1991,'Post Rock','Touch and Go','http://is5.mzstatic.com/image/thumb/Music115/v4/64/11/26/6411267d-62aa-aa5d-37a8-8421c17fbe24/source/100000x100000-999.jpg');

/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
