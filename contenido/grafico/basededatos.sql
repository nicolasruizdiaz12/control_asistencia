CREATE DATABASE IF NOT EXISTS `Ejemplo`;

CREATE TABLE IF NOT EXISTS `Estudiante` (
  `IdEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `IdSemestre` int(11) NOT NULL,
  PRIMARY KEY (`IdEstudiante`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

INSERT INTO `Estudiante` (`IdEstudiante`, `Nombres`, `IdSemestre`) VALUES
(1, 'Genesis Vargas', 4),
(2, 'Angel Palencia', 4),
(3, 'Yeison Rodriguez', 3),
(4, 'Edwin Acosta', 3),
(5, 'Carmen Morelo', 5),
(6, 'Oriana Cabarcas', 5),
(7, 'Yair Abdala', 4),
(8, 'Alberto Perez', 1),
(9, 'Jesus Cardenas', 4),
(10, 'Kelly Rodriguez', 6);


CREATE TABLE IF NOT EXISTS `Semestre` (
  `IdSemestre` int(11) NOT NULL AUTO_INCREMENT,
  `Semestre` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`IdSemestre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

INSERT INTO `Semestre` (`IdSemestre`, `Semestre`) VALUES
(1, '1º Semestre'),
(2, '2º Semestre'),
(3, '3º Semestre'),
(4, '4º Semestre'),
(5, '5º Semestre'),
(6, '6º Semestre');
