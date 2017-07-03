create SCHEMA trab;
create table trab.pessoa(
  codigo varchar(10) not NULL UNIQUE,
  cpf varchar(11) NULL,
  cnpj varchar(11) NULL,
  tipo boolean not NULL, /*0-fisica, 1-juridica*/
  cep varchar(8) not NULL,
  numero_res varchar(5) not NULL,
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
  cep varchar(8) not NULL,
  numero_res varchar(5) not NULL
);
create table trab.item(
  codigo varchar(10) not NULL UNIQUE,
  cod_produto varchar(10) not NULL,
  cod_fornecedor varchar(15) not NULL,
  preco_compra float not NULL,
  quantidade integer not NULL,
  data_compra date not NULL
);
create table trab.estoque(
  cod_item varchar(10) not NULL,
  cod_deposito varchar(10) not NULL,
  quantidade integer not NULL
);
create table trab.regiao(
  codigo varchar(15) not NULL UNIQUE,
  cidade varchar(10) not NULL,
  estado varchar(10) not NULL
);

/*Alter tables*/
alter table trab.endereco
  add constraint un_endereco unique (cep, numero);
alter table trab.pessoa
  add constraint pk_pessoa primary key (codigo);
alter table trab.pessoa
  add foreign key (cep, numero_res) references trab.endereco(cep,numero)
  on update cascade on delete cascade;
alter table trab.endereco
  add constraint pk_endereco primary key (cep, numero);
alter table trab.endereco
  add foreign key (cod_regiao) references trab.regiao(codigo)
  on update cascade on delete cascade;
alter table trab.telefone
  add constraint un_telefone unique (numero, cod_pessoa);
alter table trab.telefone
  add constraint pk_telefone primary key (numero,cod_pessoa);
alter table trab.telefone
  add foreign key (cod_pessoa) references trab.pessoa(codigo)
  on update cascade on delete cascade;
alter table trab.pedido
  add constraint un_pedido unique (cod_pedido, cod_cliente);
alter table trab.pedido
  add constraint pk_pedido primary key (cod_pedido, cod_cliente);
alter table trab.pedido
  add foreign key (cod_cliente) references trab.pessoa(codigo)
  on update cascade on delete cascade;
alter table trab.comp_pedido
  add constraint un_comp_pedido unique (cod_pedido, cod_item);
alter table trab.comp_pedido
  add constraint pk_comp_pedido primary key (cod_pedido, cod_item);
alter table trab.comp_pedido
  add foreign key (cod_pedido) references trab.pedido(cod_pedido),
  add foreign key (cod_item) references trab.item(codigo)
  on update cascade on delete cascade;
alter table trab.produto
  add constraint pk_produto primary key (codigo);
alter table trab.produto
  add foreign key (cod_gerente) references trab.pessoa(codigo)
  on update cascade on delete cascade;
alter table trab.deposito
  add constraint pk_deposito primary key (codigo);
alter table trab.deposito
  add foreign key (cep, numero_res) references trab.endereco(cep, numero)
  on update cascade on delete cascade;
alter table trab.item
  add constraint pk_item primary key (codigo);
alter table trab.item
  add foreign key (cod_produto) references trab.produto(codigo),
  add foreign key (cod_fornecedor) references trab.pessoa(codigo)
  on update cascade on delete cascade;
alter table trab.estoque
  add constraint un_estoque unique (cod_item, cod_deposito);
alter table trab.estoque
  add constraint pk_estoque primary key (cod_item, cod_deposito);
alter table trab.estoque
  add foreign key (cod_item) references trab.item(codigo),
  add foreign key (cod_deposito) references trab.deposito(codigo)
  on update cascade on delete cascade;
alter table trab.regiao
  add constraint pk_regiao primary key (codigo);