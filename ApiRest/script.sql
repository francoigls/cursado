USE CreacionApi;

CREATE TABLE instructores (
    id_instructor INT AUTO_INCREMET PRIMARY KEY,
    nombre VARCHAR(60),
    apellido VARCHAR(40),
    edad VARCHAR(2)
);


CREATE TABLE cursos (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    titulo_curso VARCHAR(100) ,
    descripcion_curso TEXT,
    imagen_curso VARCHAR(200),
    precio_curso DECIMAL(10,2),
    id_instructor INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_instructor) REFERENCES instructores(id_instructor)
);



-- Ejemplo de datos de prueba
INSERT INTO cursos (titulo_curso, descripcion_curso, imagen_curso, precio_curso, id_instructor)
VALUES 
('Curso PHP Básico', 'Aprende los fundamentos de PHP', 'php.png', 1500.00, 1),
('Curso MySQL', 'Gestión de bases de datos con MySQL', 'mysql.png', 1800.00, 2);