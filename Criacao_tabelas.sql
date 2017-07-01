create SCHEMA trab
create table trab.pessoa(
  codigo varchar(10) not NULL UNIQUE,
  cpf varchar(11) NULL,
  cnpj varchar(11) NULL,
  tipo boolean not NULL, /*0-fisica, 1-juridica*/
  cep varchar(8) not NULL,
  nome varchar(30) not NULL,
  senha varchar(15) not NULL
);
create table trab.endereco(
  cep varchar(8) not NULL,
  numero varchar(5) not NULL,
  rua varchar(30) not NULL,
  bairro varchar(15) not NULL,
  complemento varchar(10) not NULL,
  cod_regiao varchar(15) not NULL
);
create table trab.telefone(
  cod_pessoa varchar(15) not NULL,
  numero varchar(9) not NULL
);
create table trab.pedido(
  cod_pedido varchar(10) not NULL UNIQUE,
  cod_cliente varchar(10) not NULL,
  valor_total float not NULL,
  data_pedido date not NULL,
  status text not NULL,
  nota_fiscal text not NULL
);
create table trab.comp_pedido(
  cod_pedido varchar(10) not NULL,
  cod_item varchar(10) not NULL,
  cod_cliente varchar(10) not NULL,
  valor_venda float not NULL
);
create table trab.produto(
  codigo varchar(10) not NULL UNIQUE,
  nome varchar(30) not NULL,
  descricao text not NULL,
  valor_sugerido float not NULL,
  cod_gerente varchar(10) not NULL
);
create table trab.deposito(
  codigo varchar(10) not NULL UNIQUE,
  cod_regiao varchar(15) not NULL,
  cep varchar(8) not NULL
);
create table trab.item(
  codigo varchar(10) not NULL UNIQUE,
  cod_produto varchar(10) not NULL,
  cod_fornecedor varchar(15) not NULL,
  preco_compra float not NULL,
  quantidade integer not NULL,
  data_compra data not NULL
);
create table trab.estoque(
  cod_item varchar(10) not NULL,
  cod_deposito varchar(10) not NULL,
  quantidade integer not NULL,
);
create table trab.regiao(
  codigo varchar(15) not NULL UNIQUE,
  cidade varchar(10) not NULL,
  estado varchar(10) not NULL
);
