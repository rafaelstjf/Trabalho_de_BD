/** PREÇO SUGERIDO **/
DELIMITER //

DROP PROCEDURE IF EXISTS `preco_sugerido` //

CREATE PROCEDURE `preco_sugerido`(IN cod_produto BIGINT)

BEGIN

    SELECT (SUM(I.preco_compra * I.quantidade) / SUM(I.quantidade) * 1.20 )
    FROM trab.item AS I
    WHERE (I.cod_produto = cod_produto);

END //

DELIMITER ;