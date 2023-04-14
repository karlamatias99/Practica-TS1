CREATE SCHEMA IF NOT EXISTS Maiz;

USE Maiz;

CREATE TABLE IF NOT EXISTS USUARIO (
	correo VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	PRIMARY KEY(correo) 
);

CREATE TABLE IF NOT EXISTS SEMILLA (
	id VARCHAR(50) NOT NULL,
	variante VARCHAR(50) NOT NULL,
	descripcion LONGTEXT NOT NULL,
	altura_Planta DECIMAL(10,2) NOT NULL,
	altura_Mazorca DECIMAL(10,2) NOT NULL,
	cant_por_Manzana INT NOT NULL,
	rendimiento INT NOT NULL,
	PRIMARY KEY(id) 
);

CREATE TABLE IF NOT EXISTS LUGAR(
	nombre VARCHAR(50) NOT NULL,
	variante_Maiz VARCHAR(50) NOT NULL,
	PRIMARY KEY(nombre)
);


INSERT INTO SEMILLA (id,variante,descripcion,altura_Planta,altura_Mazorca,cant_por_Manzana,rendimiento) VALUES ('ICTA HB-83','Maiz Amarillo','Se caracteriza por sus mazorcas alargadas con grano de  textura semicristalina, coloraciones amarilla y blanca y muy tolerante al volcamiento.',2.40,1.20,30,80);

INSERT INTO SEMILLA (id,variante,descripcion,altura_Planta,altura_Mazorca,cant_por_Manzana,rendimiento) VALUES ('Maiz negro','Maiz Negro','El maíz negro es una variedad del maíz, este posee la coronta y los granos de un color morado característico, debido al pigmento que contiene denominado Antocianina.',0.6,0.4,30,50);

INSERT INTO SEMILLA (id,variante,descripcion,altura_Planta,altura_Mazorca,cant_por_Manzana,rendimiento) VALUES ('Maiz Rojo','Maiz Rojo','El simbolismo del maíz rojo tiene una representación profunda que nos hace recordar el origen de nuestras raíces; el amanecer, el inicio del día y la energía del hombre, siendo éste también el elemento, durante la creación del hombre, para la sangre. También es utilizado como símbolo de alianza y pacto, llevado a la casa de la familia de quien se pide la mano para contraer matrimonio.',0,0,0,0);


INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Peten','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Chimaltenango','Maiz Blanco y Maiz Negro');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Huehuetenango','Maiz Blanco y Maiz Negro');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('San Marcos','Maiz Blanco, Maiz Amarillo y Maiz Negro');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Guatemala','Maiz Blanco');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('El Progreso','Maiz Blanco');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Sacatepequez','Maiz Blanco');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Escuintla','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Santa Rosa','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Solola','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Totonicapan','Maiz Blanco, Maiz Amarillo y Maiz Negro');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Quetzaltenango','Maiz Blanco, Maiz Amarillo y Maiz Negro');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Suchitepequez','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Retalhuleu','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Quiche','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Baja Verapaz','Maiz Blanco');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Alta Verapaz','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Izabal','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('ZacaSpa','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Chiquimula','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Jalapa','Maiz Blanco y Maiz Amarillo');
INSERT INTO LUGAR (nombre,variante_Maiz) VALUES ('Jutiapa','Maiz Blanco y Maiz Amarillo');
