ALTER TABLE  `exp` DROP FOREIGN KEY  `exp_ibfk_1` ;
ALTER TABLE `exp` DROP `EXP_UCH_ID`;
ALTER TABLE  `exp` CHANGE  `EXP_CONTENT`  `EXP_CONTENT` TEXT CHARACTER SET utf8 COLLATE utf8_bin NULL;
ALTER TABLE  `exp` ADD  `EXP_FILE` VARCHAR( 256 ) NOT NULL;