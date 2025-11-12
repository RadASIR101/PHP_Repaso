CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) UNIQUE NOT NULL,
    descripcion TEXT,
    precio DECIMAL(7,2) CHECK (precio >= 1 AND precio <= 9999.99),
    stock INT CHECK (stock >= 0)
);

INSERT INTO productos (nombre, descripcion, precio, stock) VALUES
('Teclado mecanico RGB', 'Teclado con retroiluminacion multicolor y switches azules', 79.99, 25),
('Raton gaming', 'Raton ergonomico con sensor optico de alta precision', 49.50, 40),
('Monitor 27 pulgadas', 'Monitor LED Full HD con frecuencia de 144Hz', 229.00, 15),
('Auriculares inalambricos', 'Auriculares Bluetooth con cancelacion de ruido', 89.90, 30),
('Disco SSD 1TB', 'Unidad de estado solido SATA III de 1TB', 109.95, 20),
('Memoria RAM 16GB', 'Modulo DDR4 de 16GB a 3200MHz', 64.99, 35),
('Placa base ATX', 'Placa compatible con procesadores Intel de 12a generacion', 149.00, 10),
('Procesador Ryzen 7', 'CPU de 8 nucleos y 16 hilos con refrigeracion incluida', 299.99, 12),
('Tarjeta grafica RTX 4060', 'GPU con 8GB GDDR6 para juegos exigentes', 459.00, 8),
('Fuente de alimentacion 750W', 'Fuente modular 80 Plus Gold', 99.50, 18),
('Caja torre gaming', 'Caja con panel lateral de cristal templado y ventiladores RGB', 89.00, 22),
('Webcam HD', 'Camara web 1080p con microfono integrado', 39.99, 28),
('Microfono USB', 'Microfono condensador con soporte antivibracion', 59.90, 16),
('Disco duro 2TB', 'Disco mecanico de 2TB para almacenamiento masivo', 69.00, 25),
('Silla gaming', 'Silla ergonmica con soporte lumbar ajustable', 159.00, 7),
('Router WiFi 6', 'Router de doble banda con tecnologia WiFi 6', 129.99, 11),
('Pendrive 128GB', 'Memoria USB 3.2 de alta velocidad', 24.99, 50),
('Cable HDMI 2.1', 'Cable de video compatible con resolucion 8K', 12.90, 60),
('Altavoces estereo', 'Altavoces compactos con sonido envolvente', 45.00, 33),
('Soporte monitor', 'Brazo ajustable para monitores de hasta 32 pulgadas', 54.99, 19);