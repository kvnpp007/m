# Desarrollo de Aplicaciones que se Ejecutan en Servidor.
## Pérez Pérez, Kevin Fernando. Cuarto Semestre.
### PRACTICA 29: Consulta número tres. 
-- Listar el nombre de la mascota de menor edad:
SELECT names FROM mascotas WHERE age = ( SELECT MIN ( age ) FROM mascotas );
-- Listar qué mascotas son aves o roedores:
SELECT * FROM mascotas WHERE species = 'ave' OR species = 'roedor';
-- Listar los nombres de los veterinarios:
SELECT forename, surname FROM veterinarios;
-- Listar los nombres de las mascotas que se atendieron el 02 de junio de 2024:
SELECT names FROM mascotas WHERE idPet IN ( SELECT idPet FROM consulta WHERE date = "2024-06-02");
-- Listar los nombres de los veterinarios cuyo apellido empiece con "P" mayusculas:
SELECT forename FROM veterinarios WHERE surname LIKE 'P%' ;