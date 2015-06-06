drop database if exists pruebaproyecto;
create database pruebaproyecto; 
use pruebaproyecto;

/*drop table if exists capacidades;
drop table if exists idiomas;
drop table if exists formacion;
drop table if exists experiencia;
drop table if exists curriculum;
drop table if exists usuarios;*/

 
create table usuarios (
    id int auto_increment,
    correo varchar(255) not null unique, 
    contrasena char(128), /*SHA512*/
    f_registro TIMESTAMP, /*para que el servidor convierta la hora a local*/
    primary key (id)
);

create table curriculum (
    id int auto_increment,
	alias varchar(30),
    f_creacion TIMESTAMP,
    nombre varchar(50),
    apellidos varchar(60),
    f_nacimiento date,
	genero enum('hombre','mujer'),
	estado_civil enum('Soltero', 'Casado', 'Divorciado', 'Viudo'),
    direccion varchar(80),
    cp char(5),
    poblacion  varchar(50),
    provincia varchar(30),
    pais varchar(30),
    telefono varchar(15),
    correo varchar(255),
    otros text,
    perfil text,
	reffoto varchar(255),
    id_usuario int,
    primary key (id),
    foreign key (id_usuario)
        references usuarios (id)
);

create table experiencia (
    codigo int auto_increment,
    empresa varchar(60),
    poblacion varchar(50),
    provincia varchar(30),
    pais varchar(30),
    puesto varchar(50),
    funciones text,
    f_inicio date, /*pedir solo mes y año*/
    f_fin date,
    id_curriculum int,
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
);

create table formacion (
    codigo int auto_increment,
    titulacion varchar(100),
    nivel enum('Primarios', 'Secundarios', 'Postobligatorios', 'C.Profesionalidad', 'SuperioresFP', 'Universatrios1', 'Universiataios2', 'Doctorado', 'Otros'),
    centro varchar(60),
    poblacion varchar(50),
    provincia varchar(30),
	pais varchar(30),
    a_inicio int,
    a_fin int,
    id_curriculum int,
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
);

create table idiomas (
    codigo int auto_increment,
    idioma varchar(30),
    com_oral enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    com_escrita enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    exp_oral enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    exp_escrita enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    id_curriculum int,
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
);

create table capacidades (
    codigo int auto_increment,
    nombre varchar(60),
    descripcion text,
    id_curriculum int,
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
);


INSERT  INTO  usuarios (correo,  contrasena, f_registro)  
VALUES  ('prueba@prueba.com', 123, curdate()),
('correo@prueba.com', 'lamia', curdate());

INSERT  INTO  curriculum (f_creacion, alias,  nombre, apellidos, f_nacimiento, direccion, cp, poblacion, provincia, pais, telefono, correo, estado_civil, otros, perfil, id_usuario )  
VALUES  (curdate(), 'prueba1', 'Juan', 'Snow','1990/04/20', 'C/Luna 25 127', 46910, 'Benetusser', 'Valencia', 'España', '943760303', 'elmio@dominio.net', 'soltero', 'licencia de conduccion', 'Soy buena persona y muy legal', 1),
(curdate(), 'prueba2', 'Juan', 'Snow','1990/04/20', 'C/Luna 25 127', 46910, 'Benetusser', 'Valencia', 'España', '688957841', 'elmio@dominio.net', 'casado', 'carnet de manipulador de alimentos', 'Soy muy trabajador y me encanta ser camarero', 1),
(curdate(), 'cv1','Pedro', 'Flowers','1985/05/12', 'C/Pimiento 14 bajo', 15017, 'Alcantarilla', 'Murcia', 'España', '953762770', 'pedroflowers@mailway.com', 'divorciado', 'Completa disponibilidad horaria', 'Encofrador con más de 10 años de experiencia', 2);

INSERT  INTO experiencia (empresa, poblacion, provincia, puesto, funciones, f_inicio, f_fin, id_curriculum)
VALUES ('Bar Manolo Deluxe', 'Paiporta', 'Valencia', 'Camarero', 'Atender la barra y las mesas', '2007/06/20', '2009/02/01', 2),
('Restaurante Puchero con Salero', 'Paterna', 'Valencia', 'Pinche de Cocina', 'Limpiar platos, pelar patatas, limpiar los fogones.', '2009/09/01', '2012/12/15', 2);

INSERT  INTO formacion (titulacion, nivel, centro, poblacion, provincia, pais, a_inicio, a_fin, id_curriculum)
VALUES ('Graduado en ESO', 'Primarios', 'Colegio Ramón y Cajal', 'Alfafar', 'Valencia', null, null, null, 2),
('Técnico en restauración ', 'Postobligatorios', 'Colegio Ramón y Cajal', 'Alfafar', 'Valencia', null, null, null, 2);

INSERT  INTO idiomas (idioma, com_oral, com_escrita, exp_oral, exp_escrita, id_curriculum)
VALUES ('valenciano', 'nativo', 'nativo', 'nativo', 'nativo', 2),
('ingles', 'a2', 'a2', 'a2', 'a2', 2);

INSERT  INTO capacidades (nombre, descripcion, id_curriculum)
VALUES ('Primeros Auxilios', 'Curso en Cruz Roja de 5 horas',  2),
('Informatica', 'Nivel Usuario',  2);


/*select * from usuarios;
select * from curriculum;
select * from experiencia; 
select * from formacion;
select * from idiomas;
select * from capacidades;*/
















