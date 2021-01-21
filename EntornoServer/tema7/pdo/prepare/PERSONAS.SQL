CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `apellidos` varchar(90) NOT NULL DEFAULT '',
  `direccion` varchar(120) NOT NULL DEFAULT '',
  `sueldo` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellidos`, `direccion`, `sueldo`) VALUES
(1, 'María', 'Gago', 'c/pez, 44 madrid', 2000),
(2, 'Pedro', 'Piña', 'c/rosal, 14 madrid', 1500),
(3, 'Fernando', 'Román', 'c/árbol del naranjo, 5 madrid', 1200),
(4, 'Richard', 'Martinez', 'c/las ñoras, 2 madrid', 2000),
(5, 'Mariano', 'Merino', 'c/blanco, 1 madrid', 2500);
