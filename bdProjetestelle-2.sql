-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `immobilier`;
CREATE TABLE `immobilier` (
  `type` varchar(300) DEFAULT NULL,
  `dateimport` date NOT NULL,
  `nbrepiece` int(11) DEFAULT NULL,
  `quartier` varchar(300) DEFAULT NULL,
  `m2` int(11) NOT NULL,
  `prixfai` int(100) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `ville` varchar(300) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `id_quartier` (`quartier`),
  KEY `id_ville` (`ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `immobilier` (`type`, `dateimport`, `nbrepiece`, `quartier`, `m2`, `prixfai`, `reference`, `ville`, `id`) VALUES
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Bourg L\'évêque                ',	68,	272480,	'Réf. 3872MBO-24',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Bourg L\'évêque                ',	133),
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;BEAUREGARD                ',	82,	251520,	'Réf. 1994MB',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;BEAUREGARD                ',	134),
('                         Appartement                    ',	'2020-06-10',	3,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Poterie                ',	66,	151960,	'Réf. 2582AL-24',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Poterie                ',	135),
('                         Appartement                    ',	'2020-06-10',	3,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Sainte-Therese                 ',	58,	188640,	'Réf. 1044JG',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Sainte-Therese                 ',	136),
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Poterie                ',	84,	188640,	'Réf. 2581MM-24',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Poterie                ',	137),
('                         Appartement                    ',	'2020-06-10',	5,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;SAINT-HÉLIER                ',	73,	398240,	'Réf. 599SP-23-',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;SAINT-HÉLIER                ',	138),
('                         Appartement                    ',	'2020-06-10',	1,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;SAINT-HÉLIER                 ',	36,	209600,	'Réf. 598AM-23',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;SAINT-HÉLIER                 ',	139),
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	63,	160344,	'Réf. 3841PL',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	140),
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	63,	160344,	'Réf. 3840PL',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	141),
('                         Appartement                    ',	'2020-06-10',	5,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	81,	203312,	'Réf. 3839PL',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	142),
('                         Appartement                    ',	'2020-06-10',	5,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	81,	209600,	'Réf. 3843PL',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;Cleunay                ',	143),
('                         Appartement                    ',	'2020-06-10',	4,	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;VILLEJEAN                ',	75,	223224,	'Réf. 1987MB',	'                     RENNES                    &nbsp;&nbsp;&#x2013&nbsp;&nbsp;VILLEJEAN                ',	144),
('                         Appartement neuf                    ',	'2020-06-10',	4,	'                     LARMOR-PLAGE                                    ',	98,	628000,	'Réf. CPLAGE-T4-24',	'                     LARMOR-PLAGE                                    ',	145),
('                         Appartement neuf                    ',	'2020-06-10',	3,	'                     NANTES                                    ',	62,	349000,	'Réf. 2377f-P10-T3-24',	'                     NANTES                                    ',	146),
('                         Appartement neuf                    ',	'2020-06-10',	2,	'                     NANTES                                    ',	42,	189400,	'Réf. 1001F-P6-T2-24',	'                     NANTES                                    ',	147);

DROP TABLE IF EXISTS `quartier`;
CREATE TABLE `quartier` (
  `id_quartier` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `rue` varchar(15) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_quartier`),
  KEY `id_region` (`id_region`),
  CONSTRAINT `quartier_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `pays` varchar(10) NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `ville`;
CREATE TABLE `ville` (
  `id_ville` int(5) NOT NULL AUTO_INCREMENT,
  `codepostal` int(7) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `region` varchar(14) NOT NULL,
  `pays` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2020-06-10 04:46:33
