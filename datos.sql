create DATABASE notas_Master;

use notas_Master;

create TABLE USUARIOS(
    id int AUTO_INCREMENT not null,
    nombre VARCHAR(255) not null,
    apellidos VARCHAR (255) not null,
    email varchar(100) not null,
    pass varchar(255) not null,
    fecha DATE not null,
    constraint pk_usuarios PRIMARY KEY(id),
    constraint uq_email UNIQUE(email)
)ENGINE=InnoDb;



create table NOTAS(
    id int AUTO_INCREMENT not null,
    titulo varchar(255) not null,
    descripcion varchar(255) not null,
    fecha DATE not null,
    usuario_id int not null,
    constraint pk_notas PRIMARY KEY (id),
    --clave foranea
    constraint fk_usuariosss FOREIGN KEY (usuario_id) REFERENCES USUARIOS(id) on delete cascade on update cascade
)ENGINE=InnoDb;



select * from usuarios;
select * from notas;

--inserts basicos

















--formato de fecha YYYY-MM-DD
insert into usuarios (nombre,apellidos,email,pass,fecha) 
            values('jalapeno','Ceron','jala@jala.com','adminjapaño','2021-12-21');

insert into usuarios (nombre,apellidos,email,pass,fecha) 
            values('gary','hrnz','gary@gary.com','gar_y','2012-01-10');

insert into usuarios (nombre,apellidos,email,pass,fecha) 
            values('felipe','Ceron','felipe@felipe.com','feli_p','1984-01-05');


--no asociar a ninguna entrada (servira para pruebas)
insert into usuarios (nombre,apellidos,email,pass,fecha) 
            values('shushito','shushis','shushi@shushi.com','shu','1994-02-05');



insert into notas (titulo,descripcion,fecha,usuario_id)
            values('saw', 'lorem ipsum', '2020-12-30', 1);

insert into notas (titulo,descripcion,fecha,usuario_id)
            values('it', 'lorem ipsum', curdate(), 2);


insert into notas (titulo,descripcion,fecha,usuario_id)
            values('mad max', 'lorem ipsum', curdate(), 3);












UPDATE usuarios set nombre='jalapeñito' where id = 1;


select * from usuarios;
select * from categorias;
select * from entradas;


