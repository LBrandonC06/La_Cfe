CREATE DATABASE CFE;

use CFE;
CREATE TABLE `sucursales` (
  `Municipio` varchar(50) NOT NULL ,
  `Colonia` varchar(50) NOT NULL,
  `Avenida` varchar(50) NOT NULL,
  `Numero` int(20) NOT NULL,
  `Nombre_Sucursal` varchar(50) NOT NULL,
  `Contacto` int(13) NOT NULL,
  `Horario` varchar(50) NOT NULL,
  `Id_Local` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT
)
