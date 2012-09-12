DROP PROCEDURE IF EXISTS Ranking$$

CREATE PROCEDURE Ranking()
BEGIN
DECLARE FLAG INT;
DECLARE LP INT;
DECLARE LP_COUNT INT;
DECLARE TEMP_MAX DOUBLE;
SET @FLAG = 0;
SET @LP = 1;

START TRANSACTION;

UPDATE `rnk` SET `RNK_SUM` = `RNK_INTERNET` + `RNK_MAIL` + `RNK_DUTY` + `RNK_RADY` + `RNK_KMS`;

drop temporary table if exists tmp;
/* wyznaczanie miejsca ogolem */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_SUM FROM rnk order by RNK_SUM desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_SUM) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP` = @LP WHERE RNK_SUM = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_SUM = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_SUM = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;
/* wyznaczanie miejsca komisje */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_KMS FROM rnk order by RNK_KMS desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;
SET @LP = 1;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_KMS) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP_KMS` = @LP WHERE RNK_KMS = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_KMS = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_KMS = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;

/* wyznaczanie miejsca rady */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_RADY FROM rnk order by RNK_RADY desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;
SET @LP = 1;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_RADY) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP_RADY` = @LP WHERE RNK_RADY = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_RADY = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_RADY = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;

/* wyznaczanie miejsca dyzur */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_DUTY FROM rnk order by RNK_DUTY desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;
SET @LP = 1;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_DUTY) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP_DUTY` = @LP WHERE RNK_DUTY = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_DUTY = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_DUTY = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;

/* wyznaczanie miejsca maile */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_MAIL FROM rnk order by RNK_MAIL desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;
SET @LP = 1;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_MAIL) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP_MAIL` = @LP WHERE RNK_MAIL = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_MAIL = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_MAIL = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;

/* wyznaczanie miejsca internet */
create temporary table tmp engine=memory SELECT RNK_RDN_ID, RNK_INTERNET FROM rnk order by RNK_INTERNET desc;

SELECT COUNT(*) INTO @FLAG FROM tmp;
SET @LP = 1;

WHILE @FLAG > 0 DO  

	/* aktualny max punktow */
	SELECT max(RNK_INTERNET) INTO @TEMP_MAX FROM tmp;

	/* uaktualnienie rnk */
	UPDATE `rnk` SET `RNK_LP_INTERNET` = @LP WHERE RNK_INTERNET = @TEMP_MAX;
	
	SELECT @TEMP_MAX as message;
	
	/* ile jest tych z maxem */
	SELECT COUNT(*) INTO @LP_COUNT FROM tmp WHERE RNK_INTERNET = @TEMP_MAX;
	
	/* zwiekszenie LP o liczbe radnych z ta sama liczba punktow */
	SET @LP = @LP + @LP_COUNT;

	/* usuniecie tych co juz przypisane */
	DELETE FROM tmp WHERE RNK_INTERNET = @TEMP_MAX;
	
	/* ile zostalo recordow */
	SELECT COUNT(*) INTO @FLAG FROM tmp;
	
END WHILE; 

drop temporary table if exists tmp;

COMMIT;

END$$

(Delimiter: $$)


