CREATE DATABASE dbinvoicing; 

use bdinvoicing; 

CREATE TABLE Agencias
 (
 Codigo int primary key not null,
 NombreComercial varchar (100) not null,
 RazonSocial Varchar (100) not null,
 Ruc int (20) not null,
 Direccion varchar (100) not null,
 Direccion2 varchar (100),
 Telefono int(15) not null,
 Telefono2 int(15),
 Telefono3 int(15),
 Correo varchar(30) not null,
 Correo1 varchar(30),
 Fregistro date,
 Hora time
 );
 
CREATE TABLE Logos
(
  Codigo int primary key not null,
  CodigoAgencia int not null,
  Logo LONGBLOB not null,
  FOREIGN KEY (CodigoAgencia) REFERENCES Agencias(Codigo)
);

CREATE TABLE Clientes
 (
 Codigo int primary key not null,
 Nombres varchar (100) not null,
 Tipodocumento ENUM ('DNI','Pasaporte','Tarjeta') not null,
 Numdoc int(20) not null,
 Telefono int(15) not null,
 Correo varchar(30) not null,
 Fnacimiento date,
 Fregistro date,
 Hora time,
 FOREIGN KEY (ReservasCodigo) REFERENCES Reservas(Codigo)
 );

CREATE TABLE Reservas
(
  Codigo int primary key not null,
  Fechapartida date not null,
  Fechallegada date not null,
  Tipopersona ENUM('adulto','niño') not null,
  Tour varchar(100) not null,
  FOREIGN KEY (TourCodigo) REFERENCES Tour(Codigo),
  FOREIGN KEY (HotelCodigo) REFERENCES Hotel(Codigo)
);

CREATE TABLE Tour (
  Codigo int primary key not null,
  Nombre varchar(50) not null
);
CREATE TABLE Hotel (
  Codigo int primary key not null,
  Nombre varchar(50) not null
);
CREATE TABLE Invoice(
 Codigo int primary key not null,	
 Ndia int not null,
 Nnoche int not null,
 Finvoice date,
 Hora time,
 FOREIGN KEY (AgenciasCodigo) REFERENCES Agencias(Codigo),
 FOREIGN KEY (ClientesCodigo) REFERENCES Clientes(Codigo),
 FOREIGN KEY (ReservasCodigo) REFERENCES Reservas(Codigo),
 FOREIGN KEY (HotelCodigo) REFERENCES Hotel(Codigo),
 FOREIGN KEY (PrecioInvoiceCodigo) REFERENCES PrecioInvoice(Codigo)
 );
 
 CREATE TABLE PrecioInvoice(
 Codigo int primary key not null,
 Dia int not null,
 Noche int not null,
 Mtotal decimal(10,2),
 Madelantado decimal(10,2),
 Mtotal decimal(10,2)
 );
DROP TABLE Clientes