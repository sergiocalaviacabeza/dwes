use `mvc`;

CREATE TABLE equipo(
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(100),
    nacimiento DATETIME,
    puesto VARCHAR(30) NOT NULL
);


INSERT INTO jugadores(nombre, puesto, nacimiento)
VALUES
('De Gea', 'Portero',  '1998-05-22'),
('Kepa', 'Portero',  '1997-03-12'),
('Azpilikueta', 'Defensa',  '1995-7-08'),
('Jordi Alba', 'Defensa',  '1997-03-12'),

