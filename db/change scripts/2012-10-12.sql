INSERT INTO  `nws_cat` (
`NWS_CAT_ID` ,
`NWS_CAT_NAME`
)
VALUES (
NULL ,  'Akademia Monitoringu'
);

INSERT INTO  `AuthItem` (
`name` ,
`type` ,
`description` ,
`bizrule` ,
`data`
)
VALUES (
'superadmin',  '1',  'iza', NULL , NULL );

UPDATE  `AuthItem` SET  `description` =  'pracownicy bonafides' WHERE  `AuthItem`.`name` =  'admin';

UPDATE  `AuthItem` SET  `description` =  'radni' WHERE  `AuthItem`.`name` =  'radny';

DELETE FROM `usr` WHERE `usr`.`USR_ID` = 13;
DELETE FROM `usr` WHERE `usr`.`USR_ID` = 14;

UPDATE  `usr` SET  `USR_PASS` =  'k@lafio4' WHERE  `usr`.`USR_ID` =1;
UPDATE  `usr` SET  `USR_PASS` =  'portugali@' WHERE  `usr`.`USR_ID` =15;

INSERT INTO `usr` (`USR_ID`, `USR_NAME`, `USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`) 
VALUES (NULL, 'anna', 'je$temAnn@', 'Anna', 'Zetelman', 'anna.zetelman@bonafides.pl');

DELETE FROM `AuthAssignment` WHERE `AuthAssignment`.`itemname` = 'admin' AND `AuthAssignment`.`userid` = '13';
DELETE FROM `AuthAssignment` WHERE `AuthAssignment`.`itemname` = 'radny' AND `AuthAssignment`.`userid` = '14';

INSERT INTO  `AuthAssignment` (
`itemname` ,
`userid` ,
`bizrule` ,
`data`
)
VALUES (
'admin',  '15', NULL , NULL
), (
'admin',  '16', NULL , NULL
);

UPDATE  `AuthAssignment` SET  `itemname` =  'superadmin' WHERE  `AuthAssignment`.`itemname` =  'admin' AND  `AuthAssignment`.`userid` =  '1';

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES ('superadmin', 'admin');