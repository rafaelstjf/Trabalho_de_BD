/*Carga em Regiao*/
insert into trab.regiao (cidade, estado)
values ('Rio de Janeiro', 'RJ');

insert into trab.regiao (cidade, estado)
values ('Sao Paulo', 'SP');

insert into trab.regiao (cidade, estado)
values ('Salvador', 'Bahia');

insert into trab.regiao (cidade, estado)
values ('Juiz de Fora', 'MG');

/*Carga em Endereco*/
insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao)
values ('36036-360', '10', 'Rua Um', "Bairro Alto", '101', 1);

insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao)
values ('35546-430', '545', 'Rio Brando', "Centro", '100', 2);

insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao)
values ('26876-450', '1150', 'Rua das Pedras', "Pedregulho", '405', 3);

insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao)
values ('35698-741', '784', 'Dom Bosco', "Leste", '303', 4);

insert into trab.endereco (cep, numero, rua, bairro, complemento, cod_regiao)
values ('78425-649', '10', 'Avenida Central', "Centro", '402', 2);

/*Carga em Pessoa*/
insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, email, senha)
values ('14587965455', NULL, 0, 1, 'Joao da Silva', 'joaodasilva@hotmail.com', '123456'); /*Pessoa*/

insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, email, senha)
values (NULL, '312239281892384', 1, 2, 'Fornecedor Nota 1000', 'nota1000@hotmail.com', '123456'); /*Fornecedor*/

insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, email, senha)
values ('65487912574', NULL, 0, 3, 'Maria Joaquina', 'maria@hotmail.com', '123456'); /*Pessoa*/

insert into trab.pessoa (cpf, cnpj, tipo, cod_endereco, nome, email, senha)
values (NULL, '321564832154895', 1, 4, 'Atacando o Varejo', 'atacando@hotmail.com', '123456'); /*Fornecedor*/

/*Carga em Telefone	*/
insert into trab.telefone (cod_pessoa, numero)
values (1, '(22)22567894');

insert into trab.telefone (cod_pessoa, numero)
values (2, '(11)32403240');

insert into trab.telefone (cod_pessoa, numero)
values (3, '(75)32707070');

insert into trab.telefone (cod_pessoa, numero)
values (4, '(32)32127279');

/*Carga em Pedido*/
insert into trab.pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal)
values (1, 500, '2017-06-15', 1, 123456321654);

insert into trab.pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal)
values (3, 340, '2017-06-27', 1, 456487444598);

insert into trab.pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal)
values (3, 1500, '2017-07-09', 0, 654812345885);

insert into trab.pedido (cod_cliente, valor_total, data_pedido, status, nota_fiscal)
values (1, 439, '2017-05-05', 1, 984084805550);

/*Carga em Produto*/
insert into trab.produto (nome, descricao, valor_sugerido, preco_venda)
values ('Merendeira', 'Merendeira que cabe Dois Paes', 45, 50);

insert into trab.produto (nome, descricao, valor_sugerido, preco_venda)
values ('Caixa de Viagem', 'Cabe Tudo', 15, 17);

insert into trab.produto (nome, descricao, valor_sugerido, preco_venda)
values ('Mochila de Escalada', 'Cabe Tudo e ainda dá pra Escalar', 150, 150);

insert into trab.produto (nome, descricao, valor_sugerido, preco_venda)
values ('GPS Caminho Iluminado', 'GPS com lanterna Imbutida', 400, 439);

/*Carga em Item*/
insert into trab.item (cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra)
values (1, 2, 50, 10, '2017-06-15');

insert into trab.item (cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra)
values (2, 2, 17, 20, '2017-06-27');

insert into trab.item (cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra)
values (3, 4, 150, 10, '2017-07-01');

insert into trab.item (cod_produto, cod_fornecedor, preco_compra, quantidade, data_compra)
values (4, 4, 439, 1, '2017-05-12');

/*Carga em Comp Pedido*/
insert into trab.comp_pedido (cod_pedido, cod_item, cod_cliente, valor_venda, quantidade)
values (1, 1, 1, 50, 10);

insert into trab.comp_pedido (cod_pedido, cod_item, cod_cliente, valor_venda, quantidade)
values (2, 2, 1, 17, 20);

insert into trab.comp_pedido (cod_pedido, cod_item, cod_cliente, valor_venda, quantidade)
values (3, 3, 3, 150, 10);

insert into trab.comp_pedido (cod_pedido, cod_item, cod_cliente, valor_venda, quantidade)
values (4, 4, 3, 439, 1);

/*Carga em Deposito*/
insert into trab.deposito (cod_endereco, nome)
values (2, 'Deposito Local');

insert into trab.deposito (cod_endereco, nome)
values (2, 'Deposito Reserva 01');

insert into trab.deposito (cod_endereco, nome)
values (4, 'Deposito Um');

insert into trab.deposito (cod_endereco, nome)
values (4, 'Deposito Dois');

/*Carga em Estoque*/
insert into trab.estoque (cod_item, cod_deposito, quantidade)
values (1, 1, 500);

insert into trab.estoque (cod_item, cod_deposito, quantidade)
values (2, 1, 600);

insert into trab.estoque (cod_item, cod_deposito, quantidade)
values (3, 2, 750);

insert into trab.estoque (cod_item, cod_deposito, quantidade)
values (4, 2, 1000);
