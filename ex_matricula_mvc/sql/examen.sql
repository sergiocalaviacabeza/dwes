use `mvc`;

drop table modulos;

CREATE TABLE modulos(
    id int auto_increment PRIMARY KEY,
    codigo VARCHAR(5),
    nombre VARCHAR(100),
    horas INTEGER,
    plazas INTEGER,
    grupo VARCHAR(10) NOT NULL
);


INSERT INTO modulos(codigo, nombre, horas, plazas, grupo)
VALUES
('BD', 'Bases de datos', 6, 5, 'DAW1' ),
('DWES', 'Desarrollo web en entorno servidor', 9, 4, 'DAW2' ),
('POO', 'Programación orientada a objetos', 8, 5, 'DAW1' ),
('AD', 'Acceso a datos', 6, 3, 'DAM2' ),
('PM', 'Programación multimedia', 2, 5, 'DAM2' ),
('DWEC', 'Desarrollo web en entorno cliente', 6, 2, 'DAW2' ),
('DI', 'Diseño de interfaces', 5, 1, 'DAW2' )
;
