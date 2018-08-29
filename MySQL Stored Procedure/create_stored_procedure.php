
DELIMITER $$
CREATE  PROCEDURE NAME_OF_PROCEDURE (IN something_var VARCHAR(100))
BEGIN

SET @Variable_var = (SELECT something FROM mytable WHERE something = something_var);

IF(@Variable_var IS NULL)
THEN

/* DO SOMETHING */

ELSE

/* DO SOMETHING */

END IF;


END$$
DELIMITER ;
