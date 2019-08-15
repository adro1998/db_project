
TABLAS AISLADAS

--
CREATE TABLE empresa(
    codigo              INT(10)     PRIMARY KEY,
    nombre              VARCHAR(30) NOT NULL
)engine=innodb;
--
CREATE TABLE cliente(
    cedula              INT(10)     PRIMARY KEY,
    nombre              VARCHAR(30) NOT NULL,
    correo              VARCHAR(30) NOT NULL
)engine=innodb;
--
--
CREATE TABLE factura(
    id                  INT(10)     PRIMARY KEY,
    fecha   DATE        NOT NULL,
    codigo_empresa      INT(10) ,
    cliente_cedula      INT(10) ,
    FOREIGN KEY(codigo_empresa)REFERENCES empresa(codigo) ON       DELETE CASCADE,
	FOREIGN KEY(cliente_cedula)REFERENCES cliente(cedula) ON DELETE CASCADE
) engine=innodb;
--


 