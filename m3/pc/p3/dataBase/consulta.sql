-- Material sobre SQL consultas: Luis Ernesto Meza Flores // Martes, 28 de mayo de 2024
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%canon%" AND `moneda` LIKE "%m%" AND `precio` <= 200;
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%kyocera%" AND (`descripcion` LIKE "%Negro%" OR `descripcion` LIKE "%Tóner%") AND `moneda` LIKE "%d%" AND `precio` <= 100;
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%Cian%" AND `descripcion` LIKE "%HP%";
SELECT * FROM `consumible` WHERE (`descripcion` LIKE "%HP%" OR `descripcion` LIKE "%Epson%") AND `descripcion` LIKE "%NEGRO%";
SELECT * FROM `consumible` WHERE `moneda` LIKE "%d%";
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%cinta%";
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%HP%" AND `descripcion` LIKE "%cartucho%" AND `precio` >= 4000;
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%Epson%" AND `descripcion` LIKE "%tinta%";
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%Kyocera%" AND `moneda` LIKE "%m%";
SELECT * FROM `consumible` WHERE `descripcion` LIKE "%Xerox%" AND `descripcion` LIKE "%papel bond%";
-- Pérez Pérez, Kevin Fernando. Cuarto Semestre de Programación T.M.