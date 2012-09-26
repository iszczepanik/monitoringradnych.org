-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 26 Wrz 2012, 18:38
-- Wersja serwera: 5.1.53
-- Wersja PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `radni`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_bin NOT NULL,
  `userid` varchar(64) COLLATE utf8_bin NOT NULL,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, NULL),
('admin', '13', NULL, NULL),
('radny', '14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 1, 'Admin role', NULL, NULL),
('radny', 1, 'Radny', NULL, NULL),
('user', 1, 'Low access user', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authitemchild`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_NAME` varchar(128) COLLATE utf8_bin NOT NULL,
  `CAT_DESC` text COLLATE utf8_bin,
  PRIMARY KEY (`CAT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Zrzut danych tabeli `cat`
--

INSERT INTO `cat` (`CAT_ID`, `CAT_NAME`, `CAT_DESC`) VALUES
(1, 'Bezpieczeństwo', NULL),
(2, 'Edukacja', NULL),
(3, 'Ekologia', NULL),
(4, 'Finanse', NULL),
(5, 'Inwestycje', NULL),
(6, 'Kultura i sport', NULL),
(7, 'Mienie komunalne', NULL),
(8, 'Nazwy ulic', NULL),
(9, 'Niepełnosprawność', NULL),
(10, 'Plan zagospodarowania przestrzennego ', NULL),
(11, 'Pomoc społeczna', NULL),
(12, 'Programy i strategie', NULL),
(13, 'Promocja miasta', NULL),
(14, 'Rodzina', NULL),
(15, 'Sprawy organizacyjne Rady', NULL),
(16, 'Zdrowie', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `clb`
--

CREATE TABLE IF NOT EXISTS `clb` (
  `CLB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLB_NAME` varchar(128) COLLATE utf8_bin NOT NULL,
  `CLB_LOGO` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`CLB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='kluby radnych' AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `clb`
--

INSERT INTO `clb` (`CLB_ID`, `CLB_NAME`, `CLB_LOGO`) VALUES
(1, 'Klub radnych Forum Samorządowe i Piotr Uszok', 'forum.png'),
(2, 'Platforma Obywatelska RP', 'po.png'),
(3, 'Prawo i Sprawiedliwość', 'pis.png'),
(4, 'Sojusz Lewicy Demokratycznej', 'sld.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `cmt_exp`
--

CREATE TABLE IF NOT EXISTS `cmt_exp` (
  `CMT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CMT_DATE` date NOT NULL,
  `CMT_AUTHOR` varchar(256) COLLATE utf8_bin NOT NULL,
  `CMT_CONTENT` text COLLATE utf8_bin NOT NULL,
  `CMT_EXP_ID` int(11) NOT NULL,
  PRIMARY KEY (`CMT_ID`),
  KEY `CMT_EXP_ID` (`CMT_EXP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `cmt_exp`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `cmt_uch`
--

CREATE TABLE IF NOT EXISTS `cmt_uch` (
  `CMT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CMT_DATE` date NOT NULL,
  `CMT_AUTHOR` varchar(256) COLLATE utf8_bin NOT NULL,
  `CMT_TYPE` int(11) NOT NULL COMMENT '1 - DZIENNIKARSKI, 2 - EKSPERCKI, 3 - RADNEGO',
  `CMT_CONTENT` text COLLATE utf8_bin NOT NULL,
  `CMT_RDN_ID` int(11) DEFAULT NULL,
  `CMT_UCH_ID` int(11) NOT NULL,
  PRIMARY KEY (`CMT_ID`),
  KEY `CMT_RDN_ID` (`CMT_RDN_ID`),
  KEY `CMT_UCH_ID` (`CMT_UCH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `cmt_uch`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `dzl`
--

CREATE TABLE IF NOT EXISTS `dzl` (
  `DZL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DZL_NAME` varchar(128) COLLATE utf8_bin NOT NULL,
  `DZL_OKR_ID` int(11) NOT NULL,
  `DZL_CITIZEN_COUNT` int(11) DEFAULT NULL,
  `DZL_AREA` int(11) DEFAULT NULL,
  PRIMARY KEY (`DZL_ID`),
  KEY `DZL_OKR_ID` (`DZL_OKR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `dzl`
--

INSERT INTO `dzl` (`DZL_ID`, `DZL_NAME`, `DZL_OKR_ID`, `DZL_CITIZEN_COUNT`, `DZL_AREA`) VALUES
(1, 'Ligota - Panewniki', 1, NULL, NULL),
(2, 'Piotrowice - Ochojec', 1, NULL, NULL),
(3, 'Kostuchna', 1, NULL, NULL),
(4, 'Podlesie', 1, NULL, NULL),
(5, 'Zarzecze', 1, NULL, NULL),
(6, 'Murcki', 1, NULL, NULL),
(7, 'Dąbrówka Mała', 2, NULL, NULL),
(8, 'Szopienice - Burowiec', 2, NULL, NULL),
(9, 'Janów - Nikiszowiec', 2, NULL, NULL),
(10, 'Giszowiec', 2, NULL, NULL),
(11, 'Śródmieście', 3, NULL, NULL),
(12, 'Osiedle Paderewskiego - Muchowiec', 3, NULL, NULL),
(13, 'Brynów - Osiedle Zgrzebnioka', 3, NULL, NULL),
(14, 'Osiedle Tysiąclecia', 4, NULL, NULL),
(15, 'Dąb', 4, NULL, NULL),
(16, 'Załęże', 4, NULL, NULL),
(17, 'Osiedle Witosa', 4, NULL, NULL),
(18, 'Załęska Hałda - Brynów', 4, NULL, NULL),
(19, 'Wełnowiec - Józefowiec', 5, NULL, NULL),
(20, 'Koszutka', 5, NULL, NULL),
(21, 'Bogucice', 5, NULL, NULL),
(22, 'Zawodzie', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
  `EXP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EXP_AUTHOR` varchar(512) COLLATE utf8_bin NOT NULL,
  `EXP_DATE` date NOT NULL,
  `EXP_CONTENT` text COLLATE utf8_bin NOT NULL,
  `EXP_UCH_ID` int(11) NOT NULL,
  PRIMARY KEY (`EXP_ID`),
  KEY `EXP_UCH_ID` (`EXP_UCH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `exp`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `int`
--

CREATE TABLE IF NOT EXISTS `int` (
  `INT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INT_NAME` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `INT_FILE` varchar(256) COLLATE utf8_bin NOT NULL,
  `INT_ANSWER_FILE` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `INT_RDN_ID` int(11) NOT NULL,
  `INT_RDN_COMMENT` text COLLATE utf8_bin,
  PRIMARY KEY (`INT_ID`),
  KEY `INT_RDN_ID` (`INT_RDN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `int`
--

INSERT INTO `int` (`INT_ID`, `INT_NAME`, `INT_FILE`, `INT_ANSWER_FILE`, `INT_RDN_ID`, `INT_RDN_COMMENT`) VALUES
(1, 'jsdkfsf', 'lkdjdkfg', 'lkjlkfg', 3, 'sfsdfsf'),
(2, 'sdfs', 'rwerw', 'qwqqwe', 4, 'wqeqwe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `kms`
--

CREATE TABLE IF NOT EXISTS `kms` (
  `KMS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `KMS_NAME` varchar(256) COLLATE utf8_bin NOT NULL,
  `KMS_DESC` text COLLATE utf8_bin,
  PRIMARY KEY (`KMS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Zrzut danych tabeli `kms`
--

INSERT INTO `kms` (`KMS_ID`, `KMS_NAME`, `KMS_DESC`) VALUES
(1, 'KOMISJA BUDŻETU MIASTA', ''),
(2, 'KOMISJA EDUKACJI', 'aaa'),
(3, 'KOMISJA INFRASTRUKTURY I ŚRODOWISKA', ''),
(4, 'KOMISJA KULTURY, PROMOCJI I SPORTU', ''),
(5, 'KOMISJA ORGANIZACYJNA', ''),
(6, 'KOMISJA POLITYKI SPOŁECZNEJ', ''),
(7, 'KOMISJA REWIZYJNA', ''),
(8, 'KOMISJA ROZWOJU MIASTA', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `kms_in_cat`
--

CREATE TABLE IF NOT EXISTS `kms_in_cat` (
  `KMS_IN_CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `KMS_IN_CAT_KMS_ID` int(11) NOT NULL,
  `KMS_IN_CAT_CAT_ID` int(11) NOT NULL,
  PRIMARY KEY (`KMS_IN_CAT_ID`),
  KEY `KMS_IN_CAT_KMS_ID` (`KMS_IN_CAT_KMS_ID`),
  KEY `KMS_IN_CAT_CAT_ID` (`KMS_IN_CAT_CAT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `kms_in_cat`
--

INSERT INTO `kms_in_cat` (`KMS_IN_CAT_ID`, `KMS_IN_CAT_KMS_ID`, `KMS_IN_CAT_CAT_ID`) VALUES
(1, 2, 7),
(2, 2, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `nws`
--

CREATE TABLE IF NOT EXISTS `nws` (
  `NWS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NWS_DATE` date NOT NULL,
  `NWS_TITLE` varchar(256) COLLATE utf8_bin NOT NULL,
  `NWS_CONTENT` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`NWS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `nws`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `okr`
--

CREATE TABLE IF NOT EXISTS `okr` (
  `OKR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `OKR_NAME` varchar(128) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`OKR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `okr`
--

INSERT INTO `okr` (`OKR_ID`, `OKR_NAME`) VALUES
(1, 'Okręg Nr 1'),
(2, 'Okręg Nr 2'),
(3, 'Okręg Nr 3'),
(4, 'Okręg Nr 4'),
(5, 'Okręg Nr 5');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rdn`
--

CREATE TABLE IF NOT EXISTS `rdn` (
  `RDN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `RDN_FIRSTNAME` varchar(64) COLLATE utf8_bin NOT NULL,
  `RDN_LASTNAME` varchar(64) COLLATE utf8_bin NOT NULL,
  `RDN_EMAIL` varchar(128) COLLATE utf8_bin NOT NULL,
  `RDN_PHONE` varchar(32) COLLATE utf8_bin NOT NULL,
  `RDN_DUTY` text COLLATE utf8_bin,
  `RDN_WEBSITE` varchar(128) COLLATE utf8_bin NOT NULL,
  `RDN_PHOTO` varchar(256) COLLATE utf8_bin NOT NULL,
  `RDN_PROMISE` text COLLATE utf8_bin NOT NULL,
  `RDN_INTERVIEW` text COLLATE utf8_bin NOT NULL,
  `RDN_PROMISE_CMT` text COLLATE utf8_bin,
  `RDN_INTERVIEW_CMT` text COLLATE utf8_bin,
  `RDN_TNR_ID` int(11) NOT NULL,
  `RDN_OKR_ID` int(11) NOT NULL,
  `RDN_STATEMENT_FILE` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `RDN_CLB_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`RDN_ID`),
  KEY `RDN_TNR_ID` (`RDN_TNR_ID`),
  KEY `RDN_OKR_ID` (`RDN_OKR_ID`),
  KEY `RDN_CLB_ID` (`RDN_CLB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=29 ;

--
-- Zrzut danych tabeli `rdn`
--

INSERT INTO `rdn` (`RDN_ID`, `RDN_FIRSTNAME`, `RDN_LASTNAME`, `RDN_EMAIL`, `RDN_PHONE`, `RDN_DUTY`, `RDN_WEBSITE`, `RDN_PHOTO`, `RDN_PROMISE`, `RDN_INTERVIEW`, `RDN_PROMISE_CMT`, `RDN_INTERVIEW_CMT`, `RDN_TNR_ID`, `RDN_OKR_ID`, `RDN_STATEMENT_FILE`, `RDN_CLB_ID`) VALUES
(1, 'Marek', 'Chmieliński', 'm.chmielinski@tlen.pl', '(0) 694-476-216', '', '-', 'chmielinski.jpg', 'Każdemu dam milion!', 'To jest jakiś wywiad...', 'To jest komentarz do obietnicy', 'To jest komentarz do wywiadu', 1, 1, 'chmielinski.pdf', 1),
(2, 'Jerzy', 'Dolinkiewicz', 'jerzy.dolinkiewicz@um.katowice.pl', '-', '', '-', 'dolinkiewicz.jpg', '-', '-', '', '', 1, 4, NULL, 1),
(3, 'Jerzy', 'Forajter', 'jforajter@wp.pl', '-', NULL, '-', 'forajter.jpg', '-', '-', NULL, NULL, 1, 2, NULL, 1),
(4, 'Stefan', 'Gierlotka', 'gierlotkastefan@interia.pl', '-', NULL, '-', 'gierlotka.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 1),
(5, 'Arkadiusz', 'Godlewski', 'poczta@arkadiuszgodlewski.pl', '-', NULL, '-', 'godlewski.jpg', '-', '-', NULL, NULL, 1, 4, NULL, 2),
(6, 'Tomasz', 'Godziek', 'tgodziek@gmail.com', '-', NULL, '-', 'godziek.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 2),
(7, 'Helena', 'Hrapkiewicz', 'helena.hrapkiewicz@us.edu.pl', '-', NULL, '-', 'hrapkiewicz.jpg', '-', '-', NULL, NULL, 1, 3, NULL, 1),
(8, 'Michał', 'Jędrzejek', 'kontakt@jedrzejek.org', '-', NULL, '-', 'jedrzejek.jpg', '-', '-', NULL, NULL, 1, 5, NULL, 1),
(9, 'Daria', 'Kosmala', 'poczta@dariakosmala.pl', '-', '', '-', 'kosmala.jpg', '-', '-', '', '', 1, 4, '', 2),
(10, 'Dariusz', 'Łyczko', 'dlyczko@op.pl', '-', NULL, '-', 'lyczko.jpg', '-', '-', NULL, NULL, 1, 2, NULL, 1),
(11, 'Tomasz', 'Maśnica', 'masnicaaa@interia.pl', '-', NULL, '-', 'masnica.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 2),
(12, 'Wiesław', 'Mrowiec', 'mrowiec.wieslaw@gmail.com', '-', NULL, '-', 'mrowiec.jpg', '-', '-', NULL, NULL, 1, 4, NULL, 3),
(13, 'Krystyna', 'Panek', 'k.panek@poczta.onet.eu', '-', NULL, '-', 'panek.jpg', '-', '-', NULL, NULL, 1, 5, NULL, 3),
(14, 'Piotr', 'Pietrasz', 'pc_piotr@poczta.onet.pl', '-', NULL, '-', 'pietrasz.jpg', '-', '-', NULL, NULL, 1, 3, NULL, 3),
(15, 'Bożena', 'Rojewska', 'kontakt@bozenarojewska.pl', '-', NULL, '-', 'rojewska.jpg', '-', '-', NULL, NULL, 1, 3, NULL, 2),
(16, 'Mariusz', 'Skiba', 'skiba@post.pl', '-', NULL, '-', 'skiba.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 3),
(17, 'Maria', 'Sokół', '-', '(0) 696-682-088', NULL, '-', 'sokol.jpg', '-', '-', NULL, NULL, 1, 2, NULL, 2),
(18, 'Marek', 'Szczerbowski', 'marek.szczerbowski@um.katowice.pl', '-', NULL, '-', 'szczerbowski.jpg', '-', '-', NULL, NULL, 1, 5, NULL, 4),
(19, 'Tomasz', 'Szpyrka', 'Tomasz_Szpyrka@poczta.onet.pl', '-', NULL, '-', 'szpyrka.jpg', '-', '-', NULL, NULL, 1, 3, NULL, 2),
(20, 'Adam', 'Warzecha', 'adam@warzecha.katowice.pl', '-', NULL, '-', 'warzecha.jpg', '-', '-', NULL, NULL, 1, 2, NULL, 2),
(21, 'Stanisława', 'Wermińska', 'stanislawa.werminska@poczta.onet.pl', '-', NULL, '-', 'werminska.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 1),
(22, 'Magdalena', 'Wieczorek', 'poczta@magdalenawieczorek.pl', '-', NULL, '-', 'wieczorek.jpg', '-', '-', NULL, NULL, 1, 4, NULL, 2),
(23, 'Witold', 'Witkowicz', 'witold.witkowicz@gazeta.pl', '-', NULL, '-', 'witkowicz.jpg', '-', '-', NULL, NULL, 1, 5, NULL, 2),
(24, 'Stanisław', 'Włoch', 'swloch@pron.pl', '-', NULL, '-', 'wloch.jpg', '-', '-', NULL, NULL, 1, 1, NULL, 2),
(25, 'Barbara', 'Wnęk', 'poczta@barbarawnek.pl', '-', NULL, '-', 'wnek.jpg', '-', '-', NULL, NULL, 1, 5, NULL, 2),
(26, 'Elżbieta', 'Zacher', 'elka.zacher@gmail.com', '-', NULL, '-', 'zacher.jpg', '-', '-', NULL, NULL, 1, 2, NULL, 1),
(27, 'Józef', 'Zawadzki', 'j.zawadzki@jzawadzki.nazwa.pl', '-', NULL, '-', 'zawadzki.jpg', '-', '-', NULL, NULL, 1, 4, NULL, 1),
(28, 'Andrzej', 'Zydorowicz', 'andrzej@zydorowicz.pl', '-', NULL, '-', 'zydorowicz.jpg', '-', '-', NULL, NULL, 1, 3, NULL, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rdn_in_kms`
--

CREATE TABLE IF NOT EXISTS `rdn_in_kms` (
  `RDN_IN_KMS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `RDN_IN_KMS_RND_ID` int(11) NOT NULL,
  `RDN_IN_KMS_KMS_ID` int(11) NOT NULL,
  PRIMARY KEY (`RDN_IN_KMS_ID`),
  KEY `RDN_IN_KMS_RND_ID` (`RDN_IN_KMS_RND_ID`),
  KEY `RDN_IN_KMS_KMS_ID` (`RDN_IN_KMS_KMS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- Zrzut danych tabeli `rdn_in_kms`
--

INSERT INTO `rdn_in_kms` (`RDN_IN_KMS_ID`, `RDN_IN_KMS_RND_ID`, `RDN_IN_KMS_KMS_ID`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 8),
(19, 1, 5),
(20, 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rnk`
--

CREATE TABLE IF NOT EXISTS `rnk` (
  `RNK_RDN_ID` int(11) NOT NULL,
  `RNK_KMS` double NOT NULL,
  `RNK_RADY` double NOT NULL,
  `RNK_DUTY` double NOT NULL,
  `RNK_MAIL` double NOT NULL,
  `RNK_INTERNET` double NOT NULL,
  `RNK_SUM` double NOT NULL,
  `RNK_LP` int(11) NOT NULL,
  `RNK_LP_KMS` int(11) NOT NULL,
  `RNK_LP_RADY` int(11) NOT NULL,
  `RNK_LP_DUTY` int(11) NOT NULL,
  `RNK_LP_MAIL` int(11) NOT NULL,
  `RNK_LP_INTERNET` int(11) NOT NULL,
  PRIMARY KEY (`RNK_RDN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `rnk`
--

INSERT INTO `rnk` (`RNK_RDN_ID`, `RNK_KMS`, `RNK_RADY`, `RNK_DUTY`, `RNK_MAIL`, `RNK_INTERNET`, `RNK_SUM`, `RNK_LP`, `RNK_LP_KMS`, `RNK_LP_RADY`, `RNK_LP_DUTY`, `RNK_LP_MAIL`, `RNK_LP_INTERNET`) VALUES
(1, 16.5, 19, 9, 1, 0, 45.5, 4, 2, 8, 1, 4, 5),
(2, 16, 20, 9, 0, 0, 45, 5, 3, 1, 1, 9, 5),
(3, 16, 20, 9, 1, 4.5, 50.5, 1, 3, 1, 1, 4, 2),
(4, 14, 20, 9, 1, 0, 44, 6, 9, 1, 1, 4, 5),
(5, 13, 18, 5, -1, 0, 35, 11, 12, 11, 8, 25, 5),
(6, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(7, 14, 19, 8, 1, 0, 42, 7, 9, 8, 5, 4, 5),
(8, 11, 16, 4, 3, 0, 34, 12, 13, 13, 10, 1, 5),
(9, 15, 17, 0, -1.5, 0, 30.5, 13, 8, 12, 13, 27, 5),
(10, 17, 20, 5, 3, 5, 50, 2, 1, 1, 8, 1, 1),
(11, 15.5, 20, 2, 1, 0.5, 39, 9, 7, 1, 12, 4, 4),
(12, 16, 20, 6, -1.5, 0, 40.5, 8, 3, 1, 7, 27, 5),
(13, 16, 20, 8, 3, 0, 47, 3, 3, 1, 5, 1, 5),
(14, 14, 19, 3, -1, 3, 38, 10, 9, 8, 11, 25, 3),
(15, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(16, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(17, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(18, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(19, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(20, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(21, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(22, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(23, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(24, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(25, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(26, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(27, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5),
(28, 0, 0, 0, 0, 0, 0, 14, 14, 14, 13, 9, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `tnr`
--

CREATE TABLE IF NOT EXISTS `tnr` (
  `TNR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TNR_NAME` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `TNR_BEGINS` date NOT NULL,
  `TNR_ENDS` date NOT NULL,
  `TNR_PRESENT` tinyint(1) NOT NULL,
  PRIMARY KEY (`TNR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `tnr`
--

INSERT INTO `tnr` (`TNR_ID`, `TNR_NAME`, `TNR_BEGINS`, `TNR_ENDS`, `TNR_PRESENT`) VALUES
(1, 'VI', '2010-11-30', '2014-11-29', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `uch`
--

CREATE TABLE IF NOT EXISTS `uch` (
  `UCH_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UCH_FILE` varchar(256) COLLATE utf8_bin NOT NULL,
  `UCH_NAME` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `UCH_TYPE` int(11) NOT NULL COMMENT '1 - UCHWAŁA, 2 - PROJEKT',
  `UCH_KMS_ID` int(11) NOT NULL,
  `UCH_DATE` date DEFAULT NULL,
  `UCH_NUMBER` int(11) DEFAULT NULL,
  PRIMARY KEY (`UCH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Zrzut danych tabeli `uch`
--

INSERT INTO `uch` (`UCH_ID`, `UCH_FILE`, `UCH_NAME`, `UCH_TYPE`, `UCH_KMS_ID`, `UCH_DATE`, `UCH_NUMBER`) VALUES
(6, 'kdfjgkldg', 'test ligota i piotrowice', 1, 1, '2012-09-06', 424),
(7, 'pomoc_spoleczna/XXI_482__25_04_2012.pdf', 'UCHWAŁA NR XXI/482/12 RADY MIASTA KATOWICE z dnia 25 kwietnia 2012 r. w sprawie przyjęcia oceny zasobów pomocy społecznej za 2011 rok.', 1, 6, '2012-04-25', 482),
(8, 'ssdf', 'werwer', 1, 4, '0000-00-00', 45);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `uch_in_cat`
--

CREATE TABLE IF NOT EXISTS `uch_in_cat` (
  `UCH_IN_CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UCH_IN_CAT_UCH_ID` int(11) NOT NULL,
  `UCH_IN_CAT_CAT_ID` int(11) NOT NULL,
  PRIMARY KEY (`UCH_IN_CAT_ID`),
  KEY `UCH_IN_CAT_UCH_ID` (`UCH_IN_CAT_UCH_ID`),
  KEY `UCH_IN_CAT_CAT_ID` (`UCH_IN_CAT_CAT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Zrzut danych tabeli `uch_in_cat`
--

INSERT INTO `uch_in_cat` (`UCH_IN_CAT_ID`, `UCH_IN_CAT_UCH_ID`, `UCH_IN_CAT_CAT_ID`) VALUES
(28, 6, 10),
(29, 6, 11),
(30, 6, 16),
(32, 7, 11),
(33, 8, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `uch_in_dzl`
--

CREATE TABLE IF NOT EXISTS `uch_in_dzl` (
  `UCH_IN_DZL` int(11) NOT NULL AUTO_INCREMENT,
  `UCH_IN_DZL_DZL_ID` int(11) NOT NULL,
  `UCH_IN_DZL_UCH_ID` int(11) NOT NULL,
  PRIMARY KEY (`UCH_IN_DZL`),
  KEY `UCH_IN_DZL_UCH_ID` (`UCH_IN_DZL_UCH_ID`),
  KEY `UCH_IN_DZL_DZL_ID` (`UCH_IN_DZL_DZL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=117 ;

--
-- Zrzut danych tabeli `uch_in_dzl`
--

INSERT INTO `uch_in_dzl` (`UCH_IN_DZL`, `UCH_IN_DZL_DZL_ID`, `UCH_IN_DZL_UCH_ID`) VALUES
(69, 1, 6),
(70, 2, 6),
(93, 1, 7),
(94, 2, 7),
(95, 3, 7),
(96, 4, 7),
(97, 5, 7),
(98, 6, 7),
(99, 7, 7),
(100, 8, 7),
(101, 9, 7),
(102, 10, 7),
(103, 11, 7),
(104, 12, 7),
(105, 13, 7),
(106, 14, 7),
(107, 15, 7),
(108, 16, 7),
(109, 17, 7),
(110, 18, 7),
(111, 19, 7),
(112, 20, 7),
(113, 21, 7),
(114, 22, 7),
(115, 1, 8),
(116, 2, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `USR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_NAME` varchar(16) NOT NULL DEFAULT '',
  `USR_PASS` varchar(16) NOT NULL DEFAULT '',
  `USR_FIRSTNAME` varchar(100) NOT NULL DEFAULT '',
  `USR_LASTNAME` varchar(100) NOT NULL DEFAULT '',
  `USR_EMAIL` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USR_NAZWA` (`USR_NAME`),
  UNIQUE KEY `USR_EMAIL` (`USR_EMAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 COMMENT='users' AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `usr`
--

INSERT INTO `usr` (`USR_ID`, `USR_NAME`, `USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`) VALUES
(1, 'admin', 'haslo', 'Izabela', 'Szczepanik', 'izabela.szczepanik@gazeta.pl'),
(13, 'Agata', 'haslo', 'Agata', 'Hofelmajer', 'agata@bonafides.pl'),
(14, 'radny1', 'haslo', 'Jakis', 'Radny', 'jakis.radny@kato.pl'),
(15, 'grzegorz', 'haslo', 'Grzegorz', 'Wójkowski', 'grzegorz@bonafides.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `vot`
--

CREATE TABLE IF NOT EXISTS `vot` (
  `VOT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VOT_RDN_ID` int(11) NOT NULL,
  `VOT_UCH_ID` int(11) NOT NULL,
  `VOT_VOTE` int(11) NOT NULL COMMENT '-1 - PRZECIW, 0 - WSTRZYMAL SIE, 1 - ZA, 2 - NIEOBECNOSC',
  `VOT_REASON` text COLLATE utf8_bin,
  PRIMARY KEY (`VOT_ID`),
  KEY `VOT_RDN_ID` (`VOT_RDN_ID`),
  KEY `VOT_UCH_ID` (`VOT_UCH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=253 ;

--
-- Zrzut danych tabeli `vot`
--

INSERT INTO `vot` (`VOT_ID`, `VOT_RDN_ID`, `VOT_UCH_ID`, `VOT_VOTE`, `VOT_REASON`) VALUES
(169, 1, 6, -1, NULL),
(170, 2, 6, -1, NULL),
(171, 3, 6, -1, NULL),
(172, 4, 6, -1, NULL),
(173, 5, 6, -1, NULL),
(174, 6, 6, -1, NULL),
(175, 7, 6, -1, NULL),
(176, 8, 6, -1, NULL),
(177, 9, 6, -1, NULL),
(178, 10, 6, -1, NULL),
(179, 11, 6, -1, NULL),
(180, 12, 6, -1, NULL),
(181, 13, 6, -1, NULL),
(182, 14, 6, -1, NULL),
(183, 15, 6, 1, NULL),
(184, 16, 6, 1, NULL),
(185, 17, 6, 1, NULL),
(186, 18, 6, 1, NULL),
(187, 19, 6, 1, NULL),
(188, 20, 6, 1, NULL),
(189, 21, 6, 1, NULL),
(190, 22, 6, 1, NULL),
(191, 23, 6, 1, NULL),
(192, 24, 6, 1, NULL),
(193, 25, 6, 1, NULL),
(194, 26, 6, 1, NULL),
(195, 27, 6, 1, NULL),
(196, 28, 6, 1, NULL),
(197, 1, 7, 0, NULL),
(198, 2, 7, 1, NULL),
(199, 3, 7, 1, NULL),
(200, 4, 7, 1, NULL),
(201, 5, 7, -1, NULL),
(202, 6, 7, -1, NULL),
(203, 7, 7, 1, NULL),
(204, 8, 7, 1, NULL),
(205, 9, 7, 0, NULL),
(206, 10, 7, 2, NULL),
(207, 11, 7, -1, NULL),
(208, 12, 7, -1, NULL),
(209, 13, 7, -1, NULL),
(210, 14, 7, 0, NULL),
(211, 15, 7, 1, NULL),
(212, 16, 7, 1, NULL),
(213, 17, 7, -1, NULL),
(214, 18, 7, -1, NULL),
(215, 19, 7, 1, NULL),
(216, 20, 7, -1, NULL),
(217, 21, 7, 1, NULL),
(218, 22, 7, 1, NULL),
(219, 23, 7, -1, NULL),
(220, 24, 7, 1, NULL),
(221, 25, 7, 1, NULL),
(222, 26, 7, 1, NULL),
(223, 27, 7, 1, NULL),
(224, 28, 7, 1, NULL),
(225, 1, 8, -1, NULL),
(226, 2, 8, -1, NULL),
(227, 3, 8, -1, NULL),
(228, 4, 8, -1, NULL),
(229, 5, 8, -1, NULL),
(230, 6, 8, -1, NULL),
(231, 7, 8, 2, NULL),
(232, 8, 8, 2, NULL),
(233, 9, 8, 2, NULL),
(234, 10, 8, 2, NULL),
(235, 11, 8, 2, NULL),
(236, 12, 8, 2, NULL),
(237, 13, 8, 2, NULL),
(238, 14, 8, 2, NULL),
(239, 15, 8, 2, NULL),
(240, 16, 8, 2, NULL),
(241, 17, 8, 2, NULL),
(242, 18, 8, 2, NULL),
(243, 19, 8, 2, NULL),
(244, 20, 8, 2, NULL),
(245, 21, 8, 2, NULL),
(246, 22, 8, 2, NULL),
(247, 23, 8, 2, NULL),
(248, 24, 8, 2, NULL),
(249, 25, 8, 2, NULL),
(250, 26, 8, 2, NULL),
(251, 27, 8, 2, NULL),
(252, 28, 8, 2, NULL);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `cmt_exp`
--
ALTER TABLE `cmt_exp`
  ADD CONSTRAINT `cmt_exp_ibfk_1` FOREIGN KEY (`CMT_EXP_ID`) REFERENCES `exp` (`EXP_ID`);

--
-- Ograniczenia dla tabeli `cmt_uch`
--
ALTER TABLE `cmt_uch`
  ADD CONSTRAINT `cmt_uch_ibfk_1` FOREIGN KEY (`CMT_RDN_ID`) REFERENCES `rdn` (`RDN_ID`),
  ADD CONSTRAINT `cmt_uch_ibfk_2` FOREIGN KEY (`CMT_UCH_ID`) REFERENCES `uch` (`UCH_ID`);

--
-- Ograniczenia dla tabeli `dzl`
--
ALTER TABLE `dzl`
  ADD CONSTRAINT `dzl_ibfk_1` FOREIGN KEY (`DZL_OKR_ID`) REFERENCES `okr` (`OKR_ID`);

--
-- Ograniczenia dla tabeli `exp`
--
ALTER TABLE `exp`
  ADD CONSTRAINT `exp_ibfk_1` FOREIGN KEY (`EXP_UCH_ID`) REFERENCES `uch` (`UCH_ID`);

--
-- Ograniczenia dla tabeli `int`
--
ALTER TABLE `int`
  ADD CONSTRAINT `int_ibfk_1` FOREIGN KEY (`INT_RDN_ID`) REFERENCES `rdn` (`RDN_ID`);

--
-- Ograniczenia dla tabeli `kms_in_cat`
--
ALTER TABLE `kms_in_cat`
  ADD CONSTRAINT `kms_in_cat_ibfk_1` FOREIGN KEY (`KMS_IN_CAT_KMS_ID`) REFERENCES `kms` (`KMS_ID`),
  ADD CONSTRAINT `kms_in_cat_ibfk_2` FOREIGN KEY (`KMS_IN_CAT_CAT_ID`) REFERENCES `cat` (`CAT_ID`);

--
-- Ograniczenia dla tabeli `rdn`
--
ALTER TABLE `rdn`
  ADD CONSTRAINT `rdn_ibfk_1` FOREIGN KEY (`RDN_TNR_ID`) REFERENCES `tnr` (`TNR_ID`),
  ADD CONSTRAINT `rdn_ibfk_2` FOREIGN KEY (`RDN_OKR_ID`) REFERENCES `okr` (`OKR_ID`),
  ADD CONSTRAINT `rdn_ibfk_3` FOREIGN KEY (`RDN_CLB_ID`) REFERENCES `clb` (`CLB_ID`);

--
-- Ograniczenia dla tabeli `rdn_in_kms`
--
ALTER TABLE `rdn_in_kms`
  ADD CONSTRAINT `rdn_in_kms_ibfk_1` FOREIGN KEY (`RDN_IN_KMS_RND_ID`) REFERENCES `rdn` (`RDN_ID`),
  ADD CONSTRAINT `rdn_in_kms_ibfk_2` FOREIGN KEY (`RDN_IN_KMS_KMS_ID`) REFERENCES `kms` (`KMS_ID`);

--
-- Ograniczenia dla tabeli `rnk`
--
ALTER TABLE `rnk`
  ADD CONSTRAINT `rnk_ibfk_1` FOREIGN KEY (`RNK_RDN_ID`) REFERENCES `rdn` (`RDN_ID`);

--
-- Ograniczenia dla tabeli `uch_in_cat`
--
ALTER TABLE `uch_in_cat`
  ADD CONSTRAINT `uch_in_cat_ibfk_2` FOREIGN KEY (`UCH_IN_CAT_CAT_ID`) REFERENCES `cat` (`CAT_ID`),
  ADD CONSTRAINT `uch_in_cat_ibfk_3` FOREIGN KEY (`UCH_IN_CAT_UCH_ID`) REFERENCES `uch` (`UCH_ID`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `uch_in_dzl`
--
ALTER TABLE `uch_in_dzl`
  ADD CONSTRAINT `uch_in_dzl_ibfk_1` FOREIGN KEY (`UCH_IN_DZL_DZL_ID`) REFERENCES `dzl` (`DZL_ID`),
  ADD CONSTRAINT `uch_in_dzl_ibfk_2` FOREIGN KEY (`UCH_IN_DZL_UCH_ID`) REFERENCES `uch` (`UCH_ID`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `vot`
--
ALTER TABLE `vot`
  ADD CONSTRAINT `vot_ibfk_2` FOREIGN KEY (`VOT_UCH_ID`) REFERENCES `uch` (`UCH_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `vot_ibfk_3` FOREIGN KEY (`VOT_RDN_ID`) REFERENCES `rdn` (`RDN_ID`) ON DELETE CASCADE;
