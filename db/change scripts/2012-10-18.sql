ALTER TABLE  `uch` ADD  `UCH_INVITATION` TEXT NULL;

INSERT INTO `usr` (`USR_ID`, `USR_NAME`, `USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`) 
VALUES (NULL, 'kasia', 'K@+arzyna', 'Kasia', '', 'kasia@bonafides.pl');

INSERT INTO  `AuthAssignment` (
`itemname` ,
`userid` ,
`bizrule` ,
`data`
)
VALUES (
'admin',  '17', NULL , NULL
);