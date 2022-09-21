CREATE DATABASE oficina;



USE oficina;

CREATE TABLE cliente(
idCliente INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_cliente VARCHAR(255) NOT NULL,
cpf_cliente VARCHAR(20) NOT NULL,
rg_cliente VARCHAR(12) NOT NULL,
num_tel_cliente VARCHAR(25) NOT NULL
);

CREATE TABLE veiculo(
idVeiculo INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
modelo_veiculo VARCHAR(255) NOT NULL,
marca_veiculo VARCHAR(255) NOT NULL,
ano_veiculo INT(4),
placa_veiculo VARCHAR(20),
nome_veiculo VARCHAR(255),
id_cliente INT UNSIGNED NOT NULL
);
DESC veiculo;

INSERT INTO veiculo(modelo_veiculo, marca_veiculo, ano_veiculo, placa_veiculo, nome_veiculo, id_cliente) VALUES ("Automóvel", "Volkswagem", "2014", "DJG-7845", "GOLF GTI", "1");

ALTER TABLE veiculo ADD id_cliente INT UNSIGNED NOT NULL;
ALTER TABLE veiculo ADD INDEX indice_veiculo_cliente(id_cliente) CONSTRAINT fk_veiculo_cliente;
ALTER TABLE veiculo ADD FOREIGN KEY(id_cliente) REFERENCES cliente(idCliente);

DROP TABLE veiculo;
SELECT * FROM VEICULO;

CREATE TABLE ordemservice(
idOrderserv INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
descricao_orderserv VARCHAR(255) NOT NULL
);
ALTER TABLE ordemservice ADD statusos ENUM('aberto','fechado');
ALTER TABLE ordemservice ADD id_veiculo INT UNSIGNED NOT NULL;
ALTER TABLE ordemservice ADD FOREIGN KEY(id_veiculo) REFERENCES veiculo(idveiculo);

INSERT INTO ordemservice(descricao_orderserv, statusos, id_veiculo) VALUES ("teste", "aberto", "1");

select descricao_orderserv FROM ordemservice;
SELECT statusos FROM ordemservice;

DROP TABLE ordemservice;
ALTER TABLE ordemservice ADD id_cliente INT UNSIGNED NOT NULL;
ALTER TABLE ordemservice ADD FOREIGN KEY(id_cliente) REFERENCES cliente(idCliente);

DESC ordemservice;
create table user_ofic(
id_user INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
senha VARCHAR(255) NOT NULL
);
