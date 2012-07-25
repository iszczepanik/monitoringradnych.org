-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 24 Lip 2012, 16:24
-- Wersja serwera: 5.1.53
-- Wersja PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
(1, 'Bezpieczeñstwo', NULL),
(2, 'Edukacja', NULL),
(3, 'Ekologia', NULL),
(4, 'Finanse', NULL),
(5, 'Inwestycje', NULL),
(6, 'Kultura i sport', NULL),
(7, 'Mienie komunalne', NULL),
(8, 'Nazwy ulic', NULL),
(9, 'Niepe³nosprawnoœæ', NULL),
(10, 'Plan zagospodarowania przestrzennego ', NULL),
(11, 'Pomoc spo³eczna', NULL),
(12, 'Programy i strategie', NULL),
(13, 'Promocja miasta', NULL),
(14, 'Rodzina', NULL),
(15, 'Sprawy organizacyjne Rady', NULL),
(16, 'Zdrowie', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

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
(7, 'D¹brówka Ma³a', 2, NULL, NULL),
(8, 'Szopienice - Burowiec', 2, NULL, NULL),
(9, 'Janów - Nikiszowiec', 2, NULL, NULL),
(10, 'Giszowiec', 2, NULL, NULL),
(11, 'Œródmieœcie', 3, NULL, NULL),
(12, 'Osiedle Paderewskiego - Muchowiec', 3, NULL, NULL),
(13, 'Brynów - Osiedle Zgrzebnioka', 3, NULL, NULL),
(14, 'Osiedle Tysi¹clecia', 4, NULL, NULL),
(15, 'D¹b', 4, NULL, NULL),
(16, 'Za³ê¿e', 4, NULL, NULL),
(17, 'Osiedle Witosa', 4, NULL, NULL),
(18, 'Za³êska Ha³da - Brynów', 4, NULL, NULL),
(19, 'We³nowiec - Józefowiec', 5, NULL, NULL),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `int`
--


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
(1, 'KOMISJA BUD¯ETU MIASTA', ''),
(2, 'KOMISJA EDUKACJI', 'aaa'),
(3, 'KOMISJA INFRASTRUKTURY I ŒRODOWISKA', ''),
(4, 'KOMISJA KULTURY, PROMOCJI I SPORTU', ''),
(5, 'KOMISJA ORGANIZACYJNA', ''),
(6, 'KOMISJA POLITYKI SPO£ECZNEJ', ''),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `kms_in_cat`
--


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
(1, 'Okrêg Nr 1'),
(2, 'Okrêg Nr 2'),
(3, 'Okrêg Nr 3'),
(4, 'Okrêg Nr 4'),
(5, 'Okrêg Nr 5');

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
  PRIMARY KEY (`RDN_ID`),
  KEY `RDN_TNR_ID` (`RDN_TNR_ID`),
  KEY `RDN_OKR_ID` (`RDN_OKR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=29 ;

--
-- Zrzut danych tabeli `rdn`
--

INSERT INTO `rdn` (`RDN_ID`, `RDN_FIRSTNAME`, `RDN_LASTNAME`, `RDN_EMAIL`, `RDN_PHONE`, `RDN_DUTY`, `RDN_WEBSITE`, `RDN_PHOTO`, `RDN_PROMISE`, `RDN_INTERVIEW`, `RDN_PROMISE_CMT`, `RDN_INTERVIEW_CMT`, `RDN_TNR_ID`, `RDN_OKR_ID`, `RDN_STATEMENT_FILE`) VALUES
(1, 'Marek', 'Chmieliñski', 'm.chmielinski@tlen.pl', '(0) 694-476-216', '', '-', '-', '-', '-', '', '', 1, 1, 'osw.pdf'),
(2, 'Jerzy', 'Dolinkiewicz', 'jerzy.dolinkiewicz@um.katowice.pl', '-', '', '-', '-', '-', '-', '', '', 1, 4, NULL),
(3, 'Jerzy', 'Forajter', 'jforajter@wp.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 2, NULL),
(4, 'Stefan', 'Gierlotka', 'gierlotkastefan@interia.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(5, 'Arkadiusz', 'Godlewski', 'poczta@arkadiuszgodlewski.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 4, NULL),
(6, 'Tomasz', 'Godziek', 'tgodziek@gmail.com', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(7, 'Helena', 'Hrapkiewicz', 'helena.hrapkiewicz@us.edu.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 3, NULL),
(8, 'Micha³', 'Jêdrzejek', 'kontakt@jedrzejek.org', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 5, NULL),
(9, 'Daria', 'Kosmala', 'poczta@dariakosmala.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 4, NULL),
(10, 'Dariusz', '£yczko', 'dlyczko@op.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 2, NULL),
(11, 'Tomasz', 'Maœnica', 'masnicaaa@interia.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(12, 'Wies³aw', 'Mrowiec', 'mrowiec.wieslaw@gmail.com', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 4, NULL),
(13, 'Krystyna', 'Panek', 'k.panek@poczta.onet.eu', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 5, NULL),
(14, 'Piotr', 'Pietrasz', 'pc_piotr@poczta.onet.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 3, NULL),
(15, 'Bo¿ena', 'Rojewska', 'kontakt@bozenarojewska.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 3, NULL),
(16, 'Mariusz', 'Skiba', 'skiba@post.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(17, 'Maria', 'Sokó³', '-', '(0) 696-682-088', NULL, '-', '-', '-', '-', NULL, NULL, 1, 2, NULL),
(18, 'Marek', 'Szczerbowski', 'marek.szczerbowski@um.katowice.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 5, NULL),
(19, 'Tomasz', 'Szpyrka', 'Tomasz_Szpyrka@poczta.onet.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 3, NULL),
(20, 'Adam', 'Warzecha', 'adam@warzecha.katowice.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 2, NULL),
(21, 'Stanis³awa', 'Wermiñska', 'stanislawa.werminska@poczta.onet.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(22, 'Magdalena', 'Wieczorek', 'poczta@magdalenawieczorek.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 4, NULL),
(23, 'Witold', 'Witkowicz', 'witold.witkowicz@gazeta.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 5, NULL),
(24, 'Stanis³aw', 'W³och', 'swloch@pron.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 1, NULL),
(25, 'Barbara', 'Wnêk', 'poczta@barbarawnek.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 5, NULL),
(26, 'El¿bieta', 'Zacher', 'elka.zacher@gmail.com', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 2, NULL),
(27, 'Józef', 'Zawadzki', 'j.zawadzki@jzawadzki.nazwa.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 4, NULL),
(28, 'Andrzej', 'Zydorowicz', 'andrzej@zydorowicz.pl', '-', NULL, '-', '-', '-', '-', NULL, NULL, 1, 3, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Zrzut danych tabeli `rdn_in_kms`
--

INSERT INTO `rdn_in_kms` (`RDN_IN_KMS_ID`, `RDN_IN_KMS_RND_ID`, `RDN_IN_KMS_KMS_ID`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 8),
(7, 1, 5),
(8, 1, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `rnk`
--

CREATE TABLE IF NOT EXISTS `rnk` (
  `RNK_RDN_ID` int(11) NOT NULL,
  `RNK_KMS` int(11) NOT NULL,
  `RNK_RADY` int(11) NOT NULL,
  `RNK_DUTY` int(11) NOT NULL,
  `RNK_MAIL` int(11) NOT NULL,
  `RNK_INTERNET` int(11) NOT NULL,
  PRIMARY KEY (`RNK_RDN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `rnk`
--

INSERT INTO `rnk` (`RNK_RDN_ID`, `RNK_KMS`, `RNK_RADY`, `RNK_DUTY`, `RNK_MAIL`, `RNK_INTERNET`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0),
(25, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 0, 0),
(28, 0, 0, 0, 0, 0);


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
  `UCH_ID` int(11) NOT NULL,
  `UCH_FILE` varchar(256) COLLATE utf8_bin NOT NULL,
  `UCH_NAME` varchar(512) COLLATE utf8_bin DEFAULT NULL,
  `UCH_TYPE` int(11) NOT NULL COMMENT '1 - UCHWA£A, 2 - PROJEKT',
  `UCH_KMS_ID` int(11) NOT NULL,
  PRIMARY KEY (`UCH_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `uch`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `uch_in_dzl`
--


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
  `VOT_VOTE` int(11) NOT NULL,
  `VOT_REASON` text COLLATE utf8_bin,
  PRIMARY KEY (`VOT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `vot`
--


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
  ADD CONSTRAINT `rdn_ibfk_2` FOREIGN KEY (`RDN_OKR_ID`) REFERENCES `okr` (`OKR_ID`);

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
-- Ograniczenia dla tabeli `uch_in_dzl`
--
ALTER TABLE `uch_in_dzl`
  ADD CONSTRAINT `uch_in_dzl_ibfk_1` FOREIGN KEY (`UCH_IN_DZL_DZL_ID`) REFERENCES `dzl` (`DZL_ID`),
  ADD CONSTRAINT `uch_in_dzl_ibfk_2` FOREIGN KEY (`UCH_IN_DZL_UCH_ID`) REFERENCES `uch` (`UCH_ID`);
