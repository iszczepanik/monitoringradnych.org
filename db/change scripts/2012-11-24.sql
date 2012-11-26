ALTER TABLE  `usr` ADD  `USR_RDN_ID` INT NULL ,
ADD INDEX (  `USR_RDN_ID` );

ALTER TABLE  `usr` ADD FOREIGN KEY (  `USR_RDN_ID` ) REFERENCES  `bonafide_radni`.`rdn` (
`RDN_ID`
) ON DELETE CASCADE ON UPDATE CASCADE ;


INSERT INTO `usr` (`USR_ID`, `USR_NAME`, `USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`, `USR_RDN_ID`) VALUES
(18, 'chmielinski', '765762', 'Marek', 'Chmieliñski', 'm.chmielinski@tlen.pl', 1),
(19, 'dolinkiewicz', '849375', 'Jerzy', 'Dolinkiewicz', 'jerzy.dolinkiewicz@um.katowice.pl', 2),
(20, 'forajter', '896753', 'Jerzy', 'Forajter', 'jforajter@wp.pl', 3),
(21, 'gierlotka', '864589', 'Stefan', 'Gierlotka', 'gierlotkastefan@interia.pl', 4),
(22, 'godlewski', '243565', 'Arkadiusz', 'Godlewski', 'poczta@arkadiuszgodlewski.pl', 5),
(23, 'godziek', '089078', 'Tomasz', 'Godziek', 'tgodziek@gmail.com', 6),
(24, 'hrapkiewicz', '576489', 'Helena', 'Hrapkiewicz', 'helena.hrapkiewicz@us.edu.pl', 7),
(25, 'jedrzejek', '079123', 'Micha³', 'Jêdrzejek', 'kontakt@jedrzejek.org', 8),
(26, 'kosmala', '786956', 'Daria', 'Kosmala', 'poczta@dariakosmala.pl', 9),
(27, 'lyczko', '243568', 'Dariusz', '£yczko', 'dlyczko@op.pl', 10),
(28, 'masnica', '909890', 'Tomasz', 'Maœnica', 'masnicaaa@interia.pl', 11),
(29, 'mrowiec', '786034', 'Wies³aw', 'Mrowiec', 'mrowiec.wieslaw@gmail.com', 12),
(30, 'panek', '673494', 'Krystyna', 'Panek', 'k.panek@poczta.onet.eu', 13),
(31, 'pietrasz', '453980', 'Piotr', 'Pietrasz', 'pc_piotr@poczta.onet.pl', 14),
(32, 'rojewska', '778845', 'Bo¿ena', 'Rojewska', 'kontakt@bozenarojewska.pl', 15),
(33, 'skiba', '342551', 'Mariusz', 'Skiba', 'skiba@post.pl', 16),
(34, 'sokol', '008775', 'Maria', 'Sokó³', '-', 17),
(35, 'szczerbowski', '887692', 'Marek', 'Szczerbowski', 'marek.szczerbowski@um.katowice.pl', 18),
(36, 'szpyrka', '342567', 'Tomasz', 'Szpyrka', 'Tomasz_Szpyrka@poczta.onet.pl', 19),
(37, 'warzecha', '112256', 'Adam', 'Warzecha', 'adam@warzecha.katowice.pl', 20),
(38, 'werminska', '336788', 'Stanis³awa', 'Wermiñska', 'stanislawa.werminska@poczta.onet.pl', 21),
(39, 'wieczorek', '387474', 'Magdalena', 'Wieczorek', 'poczta@magdalenawieczorek.pl', 22),
(40, 'witkowicz', '019225', 'Witold', 'Witkowicz', 'witold.witkowicz@gazeta.pl', 23),
(41, 'wloch', '193023', 'Stanis³aw', 'W³och', 'swloch@pron.pl', 24),
(42, 'wnek', '390332', 'Barbara', 'Wnêk', 'poczta@barbarawnek.pl', 25),
(43, 'zacher', '123332', 'El¿bieta', 'Zacher', 'elka.zacher@gmail.com', 26),
(44, 'zawadzki', '786033', 'Józef', 'Zawadzki', 'j.zawadzki@jzawadzki.nazwa.pl', 27),
(45, 'zydorowicz', '675879', 'Andrzej', 'Zydorowicz', 'andrzej@zydorowicz.pl', 28);


INSERT INTO `authassignment`  (`itemname`, `userid`)
SELECT 'radny' , USR_ID FROM `usr` where USR_ID >= 18
