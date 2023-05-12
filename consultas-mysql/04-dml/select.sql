#MOSTRAR TODOS REGISTROS / FILAS DE UNA TABLA#
SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#
SELECT * FROM usuarios;

#OPERADORES ARITMETICOS#
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;

SELECT id, email, (7+7) AS 'OPERACION' FROM usuarios order by id DESC;

SELECT id, email, (7+7) AS 'OPERACION' FROM usuarios order by id ASC;

SELECT id, email, (id+7) AS 'OPERACION' FROM usuarios;

#FUNCIONES MATEMATICAS#

SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.54) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.54) AS 'OPERACION' FROM usuarios;
SELECT PI() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.91,2) AS 'OPERACION' FROM usuarios;
SELECT SQRT(49) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91,2) AS 'OPERACION' FROM usuarios;

#FUNCIONES PARA TEXTO#

SELECT UPPER(nombre) from usuarios;
SELECT LOWER(nombre) from usuarios;
SELECT CONCAT(nombre,' ',apellidos ) AS 'CONVERSION' from usuarios;
SELECT UPPER(CONCAT(nombre,' ',apellidos )) AS 'CONVERSION' from usuarios;
SELECT email, LENGTH(CONCAT(nombre,' ',apellidos )) AS 'CONVERSION' from usuarios;
SELECT trim(CONCAT('   ',nombre,' ',apellidos,'    ' )) AS 'CONVERSION' from usuarios;

#FUNCIONES CON FECHA#

SELECT email, fecha , CURDATE() AS 'Fecha actual' FROM usuarios;
SELECT email, DATEDIFF(fecha , CURDATE()) AS 'Diferencia' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Fecha' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'Fecha' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'Fecha' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'Fecha' FROM usuarios;
SELECT email, MONTH(fecha) AS 'Fecha' FROM usuarios;
SELECT email, YEAR(fecha) AS 'Fecha' FROM usuarios;
SELECT email, CURTIME() AS 'Fecha' FROM usuarios;
SELECT email, SYSDATE() AS 'Fecha' FROM usuarios;
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'Fecha' FROM usuarios;

#FUNCIONES GENERALES#

SELECT email, ISNULL(apellidos) from usuarios;
SELECT email, STRCMP('hola','hola') from usuarios;
SELECT VERSION();
SELECT USER();
SELECT IFNULL(apellidos,'ESTE CAMPO ESTÁ VACIO') from usuarios;

















