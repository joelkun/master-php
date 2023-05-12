/*
29. Crear una vista llamada vendedoresA que incluirá todos los vendedores
del grupo que se llame "Vendedores A"
*/

CREATE VIEW vendedoresA as
SELECT v.* FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
WHERE g.nombre='Vendedores A';