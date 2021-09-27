# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: damian-collection
# Generation Time: 2021-09-27 12:02:22 +0000
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
  `artist` varchar(255) NOT NULL DEFAULT '',
  `release-year` int(4) NOT NULL,
  `genre` varchar(255) NOT NULL DEFAULT '',
  `record-label` varchar(255) NOT NULL DEFAULT '',
  `image-link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;

INSERT INTO `albums` (`id`, `name`, `artist`, `release-year`, `genre`, `record-label`, `image-link`)
VALUES
	(1,'Have One on Me','Joanna Newsom',2010,'Chamber Folk','Drag City','https://e.snmc.io/i/600/w/f2f521ebca74137e57e64de76bd71256/5213492/joanna-newsom-have-one-on-me-Cover-Art.jpg'),
	(2,'Richard D. James Album','Aphex Twin',1996,'IDM','Warp','https://e.snmc.io/i/600/w/0bcef01e1f0057ef3d9c46c3ff0ac001/1370752/aphex-twin-richard-d-james-album-Cover-Art.jpg'),
	(3,'Infest the Rats\' Nest','King Gizzard and the Lizard Wizard',2019,'Thrash Metal','Flightless','https://e.snmc.io/i/600/w/651cb824688e4f99dab7961b1be03126/8754818/king-gizzard-and-the-lizard-wizard-infest-the-rats-nest-Cover-Art.jpg'),
	(4,'Demon Days','Gorillaz',2005,'Art Pop','Parlophone','https://e.snmc.io/i/600/w/341cadedc38946364d48396684e4c882/1779160/gorillaz-demon-days-Cover-Art.jpg'),
	(5,'Rumours','Fleetwood Mac',1977,'Pop Rock','Warner Bros.','https://e.snmc.io/i/600/w/5020a1bd1225292b395e806bf9d7e22a/5709996/fleetwood-mac-rumours-Cover-Art.jpg'),
	(6,'Mezzanine','Massive Attack',1998,'Trip Hop','Virgin','https://e.snmc.io/i/600/w/0f8085d10533550c14236106b63c99ee/8966721/massive-attack-mezzanine-Cover-Art.jpg'),
	(7,'Long Season','Fishmans',1996,'Dream Pop','Polydor','https://e.snmc.io/i/600/w/c622e1e28f04964a2facd567a65c3d2b/7461038/fishmans-long-season-Cover-Art.jpg'),
	(8,'WLFGRL','Machine Girl',2014,'Hardcore Breaks','Dred Collective','https://e.snmc.io/i/600/w/08c03219cd79e74110f9d95671eba3bf/8044180/machine-girl-wlfgrl-Cover-Art.jpg'),
	(9,'Mm..Food','MF DOOM',2004,'East Coast Hip Hop','Rhymesayers','https://e.snmc.io/i/600/w/01842744d441330597dd652b51024dab/1317618/mf-doom-mm-food-Cover-Art.jpg'),
	(10,'Getz/Gilberto','Stan Getz & João Gilberto',1964,'Bossa Nova','Verve','https://e.snmc.io/i/600/w/4ba88ae2857ec7bc450a4f18d0a8736b/8607768/stan-getz-and-joao-gilberto-featuring-antonio-carlos-jobim-getz-gilberto-Cover-Art.jpg');

/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
