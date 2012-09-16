UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'gierlotka.jpg' WHERE `rdn`.`RDN_ID` = 4; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'godlewski.jpg' WHERE `rdn`.`RDN_ID` = 5; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'godziek.jpg' WHERE `rdn`.`RDN_ID` = 6; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'hrapkiewicz.jpg' WHERE `rdn`.`RDN_ID` = 7; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'jedrzejek.jpg' WHERE `rdn`.`RDN_ID` = 8; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'kosmala.jpg' WHERE `rdn`.`RDN_ID` = 9; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'lyczko.jpg' WHERE `rdn`.`RDN_ID` = 10; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'masnica.jpg' WHERE `rdn`.`RDN_ID` = 11; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'mrowiec.jpg' WHERE `rdn`.`RDN_ID` = 12; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'panek.jpg' WHERE `rdn`.`RDN_ID` = 13; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'pietrasz.jpg' WHERE `rdn`.`RDN_ID` = 14; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'rojewska.jpg' WHERE `rdn`.`RDN_ID` = 15; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'skiba.jpg' WHERE `rdn`.`RDN_ID` = 16; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'sokol.jpg' WHERE `rdn`.`RDN_ID` = 17; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'szczerbowski.jpg' WHERE `rdn`.`RDN_ID` = 18; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'szpyrka.jpg' WHERE `rdn`.`RDN_ID` = 19; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'warzecha.jpg' WHERE `rdn`.`RDN_ID` = 20; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'werminska.jpg' WHERE `rdn`.`RDN_ID` = 21; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'wieczorek.jpg' WHERE `rdn`.`RDN_ID` = 22; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'witkowicz.jpg' WHERE `rdn`.`RDN_ID` = 23; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'wloch.jpg' WHERE `rdn`.`RDN_ID` = 24; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'wnek.jpg' WHERE `rdn`.`RDN_ID` = 25; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'zacher.jpg' WHERE `rdn`.`RDN_ID` = 26; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'zawadzki.jpg' WHERE `rdn`.`RDN_ID` = 27; UPDATE `radni`.`rdn` SET `RDN_PHOTO` = 'zydorowicz.jpg' WHERE `rdn`.`RDN_ID` = 28;

ALTER TABLE  `vot` DROP FOREIGN KEY  `vot_ibfk_3` ;

ALTER TABLE  `vot` ADD FOREIGN KEY (  `VOT_RDN_ID` ) REFERENCES  `radni`.`rdn` (
`RDN_ID`
) ON DELETE CASCADE ;

ALTER TABLE  `uch_in_cat` DROP FOREIGN KEY  `uch_in_cat_ibfk_1` ;

ALTER TABLE  `uch_in_cat` ADD FOREIGN KEY (  `UCH_IN_CAT_UCH_ID` ) REFERENCES  `radni`.`uch` (
`UCH_ID`
) ON DELETE CASCADE ;

DELETE FROM `uch_in_dzl`;

ALTER TABLE  `uch_in_dzl` ADD FOREIGN KEY (  `UCH_IN_DZL_UCH_ID` ) REFERENCES  `radni`.`uch` (
`UCH_ID`
) ON DELETE CASCADE ;