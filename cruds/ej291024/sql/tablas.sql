create table articulos(
    id int auto_increment primary key,
    nombre varchar(100) unique not null,
    descripcion varchar(250),
    precio numeric(6,2) not null,
    stock int
);