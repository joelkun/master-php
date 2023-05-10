#MODIFICAR FILAS / ACTUALIZAR DATOS#

UPDATE usuarios SET fecha=CURDATE() WHERE id=4;
UPDATE usuarios SET nombre='admin',apellidos='admin' WHERE id=4;

