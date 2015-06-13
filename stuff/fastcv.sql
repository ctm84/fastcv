drop table if exists capacidades;
drop table if exists idiomas;
drop table if exists formacion;
drop table if exists experiencia;
drop table if exists curriculum;
drop table if exists admins;
drop table if exists usuarios;

create table usuarios(
    id varchar(20),
    correo varchar(255) not null unique, 
    contrasena varchar(32), 
    f_registro TIMESTAMP, 
    primary key (id)
);

create table admins(
    num_admin varchar(20),
	id_usuario varchar(20),
	primary key (num_admin ),
    foreign key (id_usuario)
        references usuarios (id) 
		on delete cascade 
		on update cascade 
);


create table curriculum (
    id varchar(20),
	alias varchar(30),
    f_creacion TIMESTAMP, /*Por defecto ON UPDATE CURRENT_TIMESTAMP*/
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
    id_usuario varchar(20),
    primary key (id),
    foreign key (id_usuario)
        references usuarios (id) 
		on delete cascade 
		on update cascade 
);

create table experiencia (
    codigo int auto_increment,
    empresa varchar(60),
    poblacion varchar(50),
    provincia varchar(30),
    pais varchar(30),
    puesto varchar(50),
    funciones text,
    f_inicio varchar(25), 
    f_fin varchar(25),
    id_curriculum varchar(20),
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
		on delete cascade 
		on update cascade 
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
    id_curriculum varchar(20),
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
		on delete cascade 
		on update cascade 
);

create table idiomas (
    codigo int auto_increment,
    idioma varchar(30),
    com_oral enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    com_escrita enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    exp_oral enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    exp_escrita enum('A1', 'A2', 'B1', 'B2', 'C1', 'C2', 'nativo'),
    id_curriculum varchar(20),
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
		on delete cascade 
		on update cascade 
);

create table capacidades (
    codigo int auto_increment,
    nombre varchar(60),
    descripcion text,
    id_curriculum varchar(20),
    primary key (codigo),
    foreign key (id_curriculum)
        references curriculum (id)
		on delete cascade 
		on update cascade 
);


















