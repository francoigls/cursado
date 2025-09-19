CREATE DATABASE IF NOT EXISTS ApiRest;

USE ApiRest;

CREATE TABLE IF NOT EXISTS persona(
    idPersona BIGINT PRIMARY KEY AUTO_INCREMENT,
    dni  VARCHAR(50),
    nombre  VARCHAR(200),
    apellido VARCHAR(200),
    telefono BIGINT NULL,
    email VARCHAR(200),
    direccion VARCHAR(200),
    cuil VARCHAR(20),
    datacreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status INT(1)
);

CREATE TABLE IF NOT EXISTS producto(
    idProducto BIGINT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(200),
    nombre VARCHAR(200),
    descripcion TEXT,
    precio DECIMAL(10,2),
    datecreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status INT(1)
);


CREATE TABLE IF NOT EXISTS frecuencia(
    idFrecuencia BIGINT PRIMARY KEY AUTO_INCREMENT,
    frecuencia VARCHAR(200),
    datecreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status INT(1)
);



CREATE TABLE IF NOT EXISTS tipo_movimiento(
    idTipoMovimiento BIGINT PRIMARY KEY AUTO_INCREMENT,
    movimiento VARCHAR(200),
    tipoMovimiento int(1),
    descripcion TEXT,
    datecreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status int(1)
);


CREATE TABLE IF NOT EXISTS cuenta(
    idCuenta BIGINT PRIMARY KEY AUTO_INCREMENT,
    personaid BIGINT,
    productoid BIGINT,
    frecuenciaid BIGINT,
    monto DECIMAL(10,2),
    cuotas INT(1),
    montoCuota DECIMAL(10,2),
    cargo DECIMAL(10,2),
    saldo DECIMAL(10,2),
    datecreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status int(1),
    FOREIGN KEY (personaid) REFERENCES persona(idPersona),
    FOREIGN KEY (productoid) REFERENCES producto(idProducto),
    FOREIGN KEY (frecuenciaid) REFERENCES frecuencia(idFrecuencia)
);



CREATE TABLE IF NOT EXISTS movimiento(
    idMovimiento BIGINT PRIMARY KEY AUTO_INCREMENT,
    cuentaId BIGINT,
    tipoMovimientoId BIGINT,
    monto decimal(10,2),
    descripcion TEXT,
    datecreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    status INT(1),
    FOREIGN KEY (cuentaId) REFERENCES cuenta(idCuenta),
    FOREIGN KEY (tipoMovimientoId) REFERENCES tipo_movimiento(idTipoMovimiento)
);
