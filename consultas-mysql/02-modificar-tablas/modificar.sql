# RENOMBRAR UNA TABLA #
ALTER TABLE usuarios RENAME TO usuario_remon;

#CAMBIAR NOMBRE DE UNA COLUMNA#
ALTER TABLE usuario_remon CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE#
ALTER TABLE usuario_remon MODIFY apellido char(40) not null;

# AÑADIR COLUMNA#
ALTER TABLE usuario_remon ADD website varchar(100) null;

# añadir restricción a columna#
ALTER TABLE usuario_remon ADD CONSTRAINT uq_email UNIQUE(email);

# BORRA UNA COLUMNA#
ALTER TABLE usuarios_renom DROP website;
