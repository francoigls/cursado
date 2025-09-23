CREATE DATABASE IF NOT EXISTS db_sistemas;

USE db_sistemas;

CREATE TABLE IF NOT EXISTS usuario (
idUsuario BIGINT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(255),
telefono BIGINT NULL,
email VARCHAR(255) UNIQUE NOT NULL,
direccion TEXT NULL,
fechaRegistro DATETIME DEFAULT CURRENT_TIMESTAMP,
status INT DEFAULT 1
);

INSERT INTO usuario (nombre, telefono, email, direccion) VALUES (
 'Franco Iglesias',
 3417202312,
 'francoigls99@gmail.com',
 'Dr Rivas 3744'
)



CREATE USER 'phpuser_api'@'localhost' IDENTIFIED BY 'clave_segura';
GRANT ALL PRIVILEGES ON db_sistemas.* TO 'phpuser_api'@'localhost';
FLUSH PRIVILEGES;


/*
mysql -u root -p < /var/www/midominio.local/public_html/db_sistema.sql
*/
