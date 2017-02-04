CREATE TABLE clientes (
 	ID_Cliente mediumint(8) unsigned default null auto_increment,
 	Nombre varchar(15) not null,
 	Apellidos varchar(35) not null,
 	Direccion varchar(35) not null,
 	Email varchar(25) not null,
 	Telefono varchar(15) not null,
 	PRIMARY KEY (ID_Cliente)
);

CREATE TABLE producto (
 	ID_Producto mediumint(8) unsigned default null auto_increment,
 	Nombre varchar(15) not null,
 	Descripcion varchar(60) not null,
 	Precio varchar(4) not null,
 	PRIMARY KEY (ID_producto)
);