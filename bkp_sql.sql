USE test;

CREATE TABLE usuario (
		id INT NOT NULL AUTO_INCREMENT,
		nome VARCHAR(64) NOT NULL,
		email VARCHAR(64) NOT NULL,
		PRIMARY KEY(id)
		);


INSERT INTO test.usuario(`nome`,`email`) VALUES('maria','maria123@gmail.com');