-- Crear tabla "services"
CREATE TABLE services (
  id_services INT AUTO_INCREMENT PRIMARY KEY,
  Nombre VARCHAR(50),
  precio DECIMAL(10, 2),
  medida VARCHAR(20)
);

-- Insertar datos en la tabla "services"
INSERT INTO services (Nombre, precio, medida) VALUES
('Pint_int', 135, 'm<sup>2</sup>'),
('Pint_graf', 100, 'm<sup>2</sup>'),
('Pint_retoque', 80, 'm<sup>2</sup>'),
('Pint_herreria', 180, 'm<sup>2</sup>'),
('Imper_caucho', 230, 'm<sup>2</sup>'),
('Imper_terracota', 180, 'm<sup>2</sup>'),
('filtraciones', 100, 'm<sup>2</sup>'),
('Imper_Paredes', 180, 'm<sup>2</sup>');
