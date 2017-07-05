--Carga em Pessoa
insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, login, senha) 
values ('12345678900', NULL, 0, 1, 'Joao da Silva', 'joaodasilva', '123456'); --Pessoa

insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, login, senha) 
values (NULL, '312239281892384', 1, 2, 'Fornecedor Nota 1000', 'nota1000', '1000'); --Fornecedor

--Carga em Endereco
insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao) 
values ('36036-360', '10', 'Rua Numero Um', "Bairro Alto", '101', 1);

insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao) 
values ('35546-430', '545', 'Rua Cinco Quatro Cinco', "Bairro Quinhentos", '100', 2);

--Carga em Telefone	
insert into trab.telefone (cod_pessoa, numero) 
values (1, '(32)32707070');

insert into trab.telefone (cod_pessoa, numero) 
values (2, '(32)32403240');

--Carga em Pedido
insert into trab.pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal)
values (1, 500, '2017-06-15', 0, 123456321654);

--Carga em Comp Pedido
insert into trab.comp_pedido (cod_pedido, cod_item, cod_cliente, valor_venda, quantidade)
values (1, 1, 1, 40, 10);

--Carga em Produto
insert into trab.produto (nome, descricao, valor_sugerido, preco_venda)
values ('Produto20', 'Breve Descricao do Produto 20', 45, 50);

--Carga em Deposito
insert into trab.deposito (cod_endereco)
values (2);

--Carga em Item
insert into trab.item (cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra) 
values (1, 2, 40, 10, '2017-06-10');

--Carga em Estoque
insert into trab.estoque (cod_item, cod_deposito, quantidade)
values (1, 1, 500);

--Carga em Regiao
insert into trab.regiao (cidade, estado)
values ('Cidade Dezdez', 'Dez'); 



