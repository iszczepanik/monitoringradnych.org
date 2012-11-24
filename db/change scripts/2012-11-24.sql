ALTER TABLE  `usr` ADD  `USR_RDN_ID` INT NULL ,
ADD INDEX (  `USR_RDN_ID` );

ALTER TABLE  `usr` ADD FOREIGN KEY (  `USR_RDN_ID` ) REFERENCES  `bonafide_radni`.`rdn` (
`RDN_ID`
) ON DELETE CASCADE ON UPDATE CASCADE ;


INSERT INTO `usr` (`USR_NAME`,`USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`) VALUES
('chmielinski', '765762', 'Marek', 'Chmieliñski', 'm.chmielinski@tlen.pl'),
('dolinkiewicz', '849375', 'Jerzy', 'Dolinkiewicz', 'jerzy.dolinkiewicz@um.katowice.pl'),
('forajter', '896753', 'Jerzy', 'Forajter', 'jforajter@wp.pl'),
('gierlotka', '864589', 'Stefan', 'Gierlotka', 'gierlotkastefan@interia.pl'),
('godlewski', '243565', 'Arkadiusz', 'Godlewski', 'poczta@arkadiuszgodlewski.pl'),
('godziek', '089078', 'Tomasz', 'Godziek', 'tgodziek@gmail.com'),
('hrapkiewicz', '576489', 'Helena', 'Hrapkiewicz', 'helena.hrapkiewicz@us.edu.pl'),
('jedrzejek', '079123', 'Micha³', 'Jêdrzejek', 'kontakt@jedrzejek.org'),
('kosmala', '786956', 'Daria', 'Kosmala', 'poczta@dariakosmala.pl'),
('lyczko', '243568', 'Dariusz', '£yczko', 'dlyczko@op.pl'),
('masnica', '909890', 'Tomasz', 'Maœnica', 'masnicaaa@interia.pl'),
('mrowiec', '786034', 'Wies³aw', 'Mrowiec', 'mrowiec.wieslaw@gmail.com'),
('panek', '673494', 'Krystyna', 'Panek', 'k.panek@poczta.onet.eu'),
('pietrasz', '453980', 'Piotr', 'Pietrasz', 'pc_piotr@poczta.onet.pl'),
('rojewska', '778845', 'Bo¿ena', 'Rojewska', 'kontakt@bozenarojewska.pl'),
('skiba', '342551', 'Mariusz', 'Skiba', 'skiba@post.pl'),
('sokol', '008775', 'Maria', 'Sokó³', '-'),
('szczerbowski', '887692', 'Marek', 'Szczerbowski', 'marek.szczerbowski@um.katowice.pl'),
('szpyrka', '342567', 'Tomasz', 'Szpyrka', 'Tomasz_Szpyrka@poczta.onet.pl'),
('warzecha', '112256', 'Adam', 'Warzecha', 'adam@warzecha.katowice.pl'),
('werminska', '336788', 'Stanis³awa', 'Wermiñska', 'stanislawa.werminska@poczta.onet.pl'),
('wieczorek', '387474', 'Magdalena', 'Wieczorek', 'poczta@magdalenawieczorek.pl'),
('witkowicz', '019225', 'Witold', 'Witkowicz', 'witold.witkowicz@gazeta.pl'),
('wloch', '193023', 'Stanis³aw', 'W³och', 'swloch@pron.pl'),
('wnek', '390332', 'Barbara', 'Wnêk', 'poczta@barbarawnek.pl'),
('zacher', '123332', 'El¿bieta', 'Zacher', 'elka.zacher@gmail.com'),
('zawadzki', '786033', 'Józef', 'Zawadzki', 'j.zawadzki@jzawadzki.nazwa.pl'),
('zydorowicz', '675879', 'Andrzej', 'Zydorowicz', 'andrzej@zydorowicz.pl');


INSERT INTO `authassignment`  (`itemname`, `userid`)
SELECT 'radny' , USR_ID FROM `usr` where USR_ID >= 18
