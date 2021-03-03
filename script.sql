CREATE TABLE Colaboradores (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
apellidoP VARCHAR(30) NOT NULL,
apellidoM VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
puestoId INT(8) UNSIGNED,
FOREIGN KEY (puestoId) REFERENCES Puestos(puestoId)
);


CREATE TABLE Puestos (
    puestoId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombrePuesto VARCHAR(60) NOT NULL,
    PRIMARY KEY (puestoId)
);
