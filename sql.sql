-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS ambualert;
USE ambualert;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  rol ENUM('usuario', 'paramedico', 'admin') DEFAULT 'usuario'
);

-- Tabla de alertas
CREATE TABLE IF NOT EXISTS alertas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tipo VARCHAR(100) NOT NULL,
  descripcion TEXT,
  ubicacion TEXT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  estado ENUM('pendiente', 'en camino', 'atendida') DEFAULT 'pendiente',
  usuario_id INT,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Insertar usuarios de prueba
INSERT INTO usuarios (nombre, email, password, rol)
VALUES
  ('Lorena', 'lorena@email.com', '1234', 'usuario'),
  ('Carlos', 'carlos@paramedico.com', 'abcd', 'paramedico'),
  ('Admin', 'admin@ambualert.com', 'admin123', 'admin');

-- Insertar alertas de prueba
INSERT INTO alertas (tipo, descripcion, ubicacion, usuario_id)
VALUES
  ('Incendio', 'Fuego en la cocina de un apartamento', 'Calle 123, Bogotá', 1),
  ('Desmayo', 'Persona inconsciente en parque público', 'Plaza Central', 2),
  ('Accidente vial', 'Choque entre motos, hay heridos', 'Av. Siempre Viva 742', 1);
