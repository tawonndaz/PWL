CREATE DATABASE minggu_8;
CREATE TABLE tb_user ( 
	username CHAR(20) primary key,
	password VARCHAR(50) NOT NULL, 
	nama VARCHAR(100) NOT NULL, 
	hak TINYINT(1) UNSIGNED
); 
INSERT INTO tb_user VALUES (
	'admin', 
	'admin', 
	'Mas Admin', 
	1
);
INSERT INTO tb_user VALUES (
	'op', 
	'op', 
	'Mas Operator', 
	2
);