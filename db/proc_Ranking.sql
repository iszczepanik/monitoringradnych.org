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

COMMIT;

END$$

(Delimiter: $$)


