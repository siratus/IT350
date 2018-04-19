#TRIGGER
DELIMITER 
//
CREATE TRIGGER priceCheck
BEFORE UPDATE ON boba
FOR EACH ROW IF NEW.price < 0 THEN SET NEW.price = 0;
END IF;
//
DELIMITER



#VIEW
CREATE VIEW totalOrders AS
	SELECT COUNT(*) FROM orders;



#PROCEDURE
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `discountbobas`(IN `halfbobaID` INT)
    NO SQL
UPDATE boba SET price = (price * 0.5)
WHERE bobaID = halfbobaID
//


