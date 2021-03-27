SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

create database bd_corridas;

use bd_corridas;


create table tbl_motorista(
cod_motorista int unsigned auto_increment primary key,
nome_motorista varchar(50) not null,
sobrenome_motorista varchar(50) not null,
datanasc_motorista varchar(20) not null,
cpf_motorista varchar(14) not null,
modelo_carro varchar(50) not null,
status_motorista varchar(20) not null,
sexo_motorista varchar(20) not null

);


create table tbl_passageiro(
cod_passageiro int unsigned auto_increment primary key,
nome_passageiro varchar(50) not null,
sobrenome_passageiro varchar(50) not null,
datanasc_passageiro varchar(20) not null,
cpf_passageiro varchar(14) not null,
sexo_passageiro varchar(20) not null
);

create table tbl_corrida(
cod_corrida int unsigned auto_increment primary key,
cod_motorista int unsigned,
cod_passageiro int unsigned,
valor_corrida varchar(20) not null,
data_corrida varchar(20) not null

);

create table tbl_login(
cod_login int unsigned auto_increment primary key,
cod_motorista int unsigned,
cod_passageiro int unsigned,
login varchar(20) not null,
senha varchar(10) not null

);

create table tbl_consulta(
cod_consulta int unsigned auto_increment primary key,
cod_motorista int unsigned,
cod_passageiro int unsigned,
cod_corrida int unsigned,
data_consul varchar(20) not null

);

create table mensagem(
cod_mensagem int unsigned auto_increment primary key,
cod_motorista int unsigned,
cod_passageiro int unsigned,
cod_login int unsigned,
mensagem varchar(500) not null

);

#CRIAÇÃO DAS CHAVES ESTRAGEIRAS TABELA CORRIDA#
alter table tbl_corrida add constraint fk_motorista
foreign key (cod_motorista)
references tbl_motorista (cod_motorista);

alter table tbl_corrida add constraint fk_passageiro
foreign key (cod_passageiro)
references tbl_passageiro (cod_passageiro);


#CRIAÇÃO DAS CHAVES ESTRAGEIRA TABELA LOGIN#
alter table tbl_login add constraint gk_motorista
foreign key (cod_motorista)
references tbl_motorista (cod_motorista);

alter table tbl_login add constraint gk_passageiro
foreign key (cod_passageiro)
references tbl_passageiro (cod_passageiro);


# CRIAÇÃO DAS CHAVES ESTRANGEIRAS NA TABELA CONSULTA#
alter table tbl_consulta add constraint nk_motorista
foreign key(cod_motorista)
references tbl_motorista(cod_motorista);

alter table tbl_consulta add constraint nk_passageiro
foreign key(cod_passageiro)
references tbl_passageiro(cod_passageiro);

alter table tbl_consulta add constraint nk_corrida
foreign key(cod_corrida)
references tbl_corrida(cod_corrida);


# CRIAÇÃO DAS CHAVES ESTRANGEIRAS NA TABELA MENSAGEM:
alter table mensagem add constraint msg_nk_motorista
foreign key(cod_motorista)
references tbl_motorista(cod_motorista);

alter table mensagem add constraint msg_nk_passageiro
foreign key(cod_passageiro)
references tbl_passageiro(cod_passageiro);

alter table mensagem add constraint msg_nk_login
foreign key(cod_login)
references tbl_login(cod_login);

# SELECTS #
select * from tbl_motorista;
select * from tbl_passageiro;
select * from tbl_login;
select * from tbl_corrida;
select * from tbl_consulta;
select * from mensagem;
