CREATE TABLE  `clb` (
`CLB_ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`CLB_NAME` VARCHAR( 128 ) NOT NULL
) ENGINE = INNODB COMMENT =  'kluby radnych';

ALTER TABLE  `clb` ADD  `CLB_LOGO` VARCHAR( 128 ) NULL;


ALTER TABLE  `rdn` ADD  `RDN_CLB_ID` INT NULL;

ALTER TABLE  `rdn` ADD INDEX (  `RDN_CLB_ID` );

ALTER TABLE  `rdn` ADD FOREIGN KEY (  `RDN_CLB_ID` ) REFERENCES  `clb` (
`CLB_ID`
) ON DELETE RESTRICT ;

INSERT INTO  `clb` (
`CLB_ID` ,
`CLB_NAME`,
`CLB_LOGO`
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

UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 1; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 2; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 3; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 4; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 5; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 6; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 7; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 8; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 9; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 10; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 11; 
UPDATE `rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 12; 
UPDATE `rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 13; 
UPDATE `rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 14; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 15; 
UPDATE `rdn` SET `RDN_CLB_ID` = '3' WHERE `rdn`.`RDN_ID` = 16; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 17; 
UPDATE `rdn` SET `RDN_CLB_ID` = '4' WHERE `rdn`.`RDN_ID` = 18; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 19; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 20; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 21; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 22; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 23; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 24; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 25; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 26; 
UPDATE `rdn` SET `RDN_CLB_ID` = '1' WHERE `rdn`.`RDN_ID` = 27; 
UPDATE `rdn` SET `RDN_CLB_ID` = '2' WHERE `rdn`.`RDN_ID` = 28;