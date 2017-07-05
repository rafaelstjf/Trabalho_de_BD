DELIMITER //
/*
 * CALCULO DO PREÇO SUGERIDO 
 *
 */

DROP PROCEDURE IF EXISTS `preco_sugerido` //

CREATE PROCEDURE `preco_sugerido`(IN cod_produto BIGINT, OUT novo_preco FLOAT)

BEGIN
    -- Media do preço dos itens ponderado pela quantidade
    SELECT (SUM(I.preco_compra * I.quantidade) / SUM(I.quantidade) * 1.20 )
    INTO novo_preco
    FROM trab.item AS I
    WHERE (I.cod_produto = cod_produto);

END //

/*
 *  ATUALIZA O PRODUTO COM O PREÇO SUGERIDO 
 *
 */

DROP PROCEDURE IF EXISTS `autaliza_preco_sugerido` //

CREATE PROCEDURE `autaliza_preco_sugerido`(IN cod_produto BIGINT)

BEGIN
    -- Calcula o preço sugerido
    DECLARE novo_preco FLOAT;
    CALL preco_sugerido(cod_produto, novo_preco);

    -- Atualiza a tabela produto
    UPDATE trab.produto
    SET valor_sugerido = novo_preco
    WHERE (codigo = cod_produto);
END //


/*
 * TRGGERS PARA ATUALIZAÇÂO E INSERÇÃO DE ITENS 
 *
 */

DROP TRIGGER IF EXISTS atualiza_preco_sugerido_ins //

CREATE TRIGGER atualiza_preco_sugerido_ins
AFTER INSERT
   ON trab.item FOR EACH ROW
BEGIN
    CALL autaliza_preco_sugerido(NEW.cod_produto);
END //

DROP TRIGGER IF EXISTS atualiza_preco_sugerido_upd //

CREATE TRIGGER atualiza_preco_sugerido_upd
AFTER UPDATE
   ON trab.item FOR EACH ROW
BEGIN
    CALL autaliza_preco_sugerido(NEW.cod_produto);
END //

DELIMITER ;