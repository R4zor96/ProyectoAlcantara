-----------------------Procdimientos almacenados----------------------
-----Paciente-------
DELIMITER //

CREATE PROCEDURE InsertarPaciente (
    IN p_Nombre VARCHAR(50),
    IN p_AP VARCHAR(50),
    IN p_AM VARCHAR(50),
    IN p_Correo_Electronico VARCHAR(100),
    IN p_FechaN DATE,
    IN p_Municipio VARCHAR(50),
    IN p_Colonia VARCHAR(50),
    IN p_Calle VARCHAR(50),
    IN p_Estado VARCHAR(50)
)
BEGIN
    INSERT INTO Paciente (Nombre, AP, AM, Correo_Electronico, FechaN, Municipio, Colonia, Calle, Estado)
    VALUES (p_Nombre, p_AP, p_AM, p_Correo_Electronico, p_FechaN, p_Municipio, p_Colonia, p_Calle, p_Estado);
END //

DELIMITER ;

-----Historial-------
DELIMITER //

CREATE PROCEDURE InsertarHistorial (
    IN p_idPaciente INT
)
BEGIN
    INSERT INTO Historial (idPaciente)
    VALUES (p_idPaciente);
END //

DELIMITER ;


-----Cita-------
DELIMITER //

CREATE PROCEDURE InsertarCita (
    IN p_idTratamiento INT,
    IN p_idHistorial INT,
    IN p_idPaciente INT,
    IN p_Motivo VARCHAR(200),
    IN p_Fecha DATE,
    IN p_Hora TIME,
    IN p_Metodo_Agenda VARCHAR(50),
    IN p_Estado VARCHAR(50)
)
BEGIN
    INSERT INTO Cita (idTratamiento, idHistorial, idPaciente, Motivo, Fecha, Hora, Metodo_Agenda, Estado)
    VALUES (p_idTratamiento, p_idHistorial, p_idPaciente, p_Motivo, p_Fecha, p_Hora, p_Metodo_Agenda, p_Estado);
END //

DELIMITER ;


-----Tratamiento-------
DELIMITER //

CREATE PROCEDURE InsertarTratamiento (
    IN p_idPaciente INT,
    IN p_Tipo VARCHAR(50),
    IN p_Descripcion TEXT,
    IN p_Estado VARCHAR(50),
    IN p_Fecha_Inicio DATE,
    IN p_Fecha_Finalizacion DATE
)
BEGIN
    INSERT INTO Tratamiento (idPaciente, Tipo, Descripcion, Estado, Fecha_Inicio, Fecha_Finalizacion)
    VALUES (p_idPaciente, p_Tipo, p_Descripcion, p_Estado, p_Fecha_Inicio, p_Fecha_Finalizacion);
END //

DELIMITER ;

-----Antecedentes_Patologicos-------
DELIMITER //

CREATE PROCEDURE InsertarAntecedentePatologico (
    IN p_idHistorial INT,
    IN p_Nombre VARCHAR(50),
    IN p_Estado BOOLEAN,
    IN p_Descripcion TEXT
)
BEGIN
    INSERT INTO Antecedentes_Patologicos (idHistorial, Nombre, Estado, Descripcion)
    VALUES (p_idHistorial, p_Nombre, p_Estado, p_Descripcion);
END //

DELIMITER ;

-----Antecedentes_NO_Patologicos-------
DELIMITER //

CREATE PROCEDURE InsertarAntecedenteNoPatologico (
    IN p_idHistorial INT,
    IN p_Nombre VARCHAR(50),
    IN p_Estado BOOLEAN,
    IN p_Descripcion TEXT
)
BEGIN
    INSERT INTO Antecedentes_NO_Patologicos (idHistorial, Nombre, Estado, Descripcion)
    VALUES (p_idHistorial, p_Nombre, p_Estado, p_Descripcion);
END //

DELIMITER ;

-----Factura-------
DELIMITER //

CREATE PROCEDURE InsertarFactura (
    IN p_idPaciente INT,
    IN p_Fecha_Emision DATE,
    IN p_Monto_Total DECIMAL(10, 2),
    IN p_Estado_Pago VARCHAR(50)
)
BEGIN
    INSERT INTO Factura (idPaciente, Fecha_Emision, Monto_Total, Estado_Pago)
    VALUES (p_idPaciente, p_Fecha_Emision, p_Monto_Total, p_Estado_Pago);
END //

DELIMITER ;

-----Recordatorio-------
DELIMITER //

CREATE PROCEDURE InsertarRecordatorio (
    IN p_idPaciente INT,
    IN p_Medio_Envio VARCHAR(50),
    IN p_Estado_Envio VARCHAR(50)
)
BEGIN
    INSERT INTO Recordatorio (idPaciente, Medio_Envio, Estado_Envio)
    VALUES (p_idPaciente, p_Medio_Envio, p_Estado_Envio);
END //

DELIMITER ;

-----EJEMPLO: CALL InsertarPaciente('Juan', 'Perez', 'Lopez', 'juan.perez@example.com', '1990-05-15', 'Tlaxcala', 'Centro', 'Calle 1', 'Tlaxcala');
