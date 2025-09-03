
CREATE DATABASE IF NOT EXISTS CreacionApi
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE CreacionApi;

CREATE TABLE IF NOT EXISTS profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    especialidad VARCHAR(100),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    duracion INT, -- duración en horas
    id_profesor INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_profesor) REFERENCES profesores(id) ON DELETE SET NULL
);


CREATE TABLE IF NOT EXISTS estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS inscripciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_estudiante INT NOT NULL,
    id_curso INT NOT NULL,
    fecha_inscripcion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_estudiante) REFERENCES estudiantes(id) ON DELETE CASCADE,
    FOREIGN KEY (id_curso) REFERENCES cursos(id) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS profesor_alumno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_profesor INT NOT NULL,
    id_alumno INT NOT NULL,
    fecha_asignacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_profesor) REFERENCES profesores(id) ON DELETE CASCADE,
    FOREIGN KEY (id_alumno) REFERENCES estudiantes(id) ON DELETE CASCADE
);


INSERT INTO profesores (nombre, email, especialidad)
VALUES
('María Torres', 'maria.torres@example.com', 'PHP'),
('Luis Fernández', 'luis.fernandez@example.com', 'Bases de Datos'),
('Carla Gómez', 'carla.gomez@example.com', 'APIs REST');


INSERT INTO cursos (nombre, descripcion, duracion, id_profesor)
VALUES
('PHP Básico', 'Curso introductorio a PHP y desarrollo web.', 40, 1),
('MySQL Avanzado', 'Administración de bases de datos MySQL.', 50, 2),
('APIs con PHP', 'Cómo construir APIs RESTful con PHP y MySQL.', 60, 3);


INSERT INTO estudiantes (nombre, email)
VALUES
('Juan Pérez', 'juan@example.com'),
('Ana García', 'ana@example.com'),
('Carlos López', 'carlos@example.com');

INSERT INTO inscripciones (id_estudiante, id_curso)
VALUES
(1, 1),
(2, 2),
(3, 3),
(1, 2);


INSERT INTO profesor_alumno (id_profesor, id_alumno)
VALUES
(1, 1), 
(2, 2), 
(3, 3); 
