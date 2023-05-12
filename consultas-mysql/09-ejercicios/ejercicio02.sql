/*
2. Modificar la comisión de los vendedores y ponerla al 0.5% cuando ganan más de 50000
*/

UPDATE vendedores SET comision=2 where sueldo>50000;