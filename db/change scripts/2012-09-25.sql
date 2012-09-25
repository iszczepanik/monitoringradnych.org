CREATE TABLE  `radni`.`clb` (
`CLB_ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`CLB_NAME` VARCHAR( 128 ) NOT NULL
) ENGINE = INNODB COMMENT =  'kluby radnych';

ALTER TABLE  `clb` ADD  `CLB_LOGO` VARCHAR( 128 ) NULL;


ALTER TABLE  `rdn` ADD  `RDN_CLB_ID` INT NULL;

ALTER TABLE  `rdn` ADD INDEX (  `RDN_CLB_ID` );

ALTER TABLE  `rdn` ADD FOREIGN KEY (  `RDN_CLB_ID` ) REFERENCES  `radni`.`clb` (
`CLB_ID`
) ON DELETE RESTRICT ;

INSERT INTO  `radni`.`clb` (
`CLB_ID` ,
`CLB_NAME`
)
VALUES (
NULL ,  'Klub radnych Forum Samorz¹dowe i Piotr Uszok' , 'forum.png'
), (
NULL ,  'Platforma Obywatelska RP' , 'po.png'
), (
NULL ,  'Prawo i Sprawiedliwoœæ' , 'pis.png'
), (
NULL ,  'Sojusz Lewicy Demokratycznej' , 'sld.png'
);

UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 1; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 2; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 3; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 4; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 5; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 6; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 7; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 8; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 9; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 10; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 11; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 12; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 13; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 14; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 15; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 16; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 17; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '4' WHERE `rdn`.`RDN_ID` = 18; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 19; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 20; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 21; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 22; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 23; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 24; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 25; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 26; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 27; 
UPDATE `radni`.`rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 28;