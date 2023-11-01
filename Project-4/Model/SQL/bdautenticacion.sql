-- -------------------------------------------------------- --
-- -------------------------------------------------------- --
-- -------------------------------------------------------- --

-- -------------------------------------------------------- --
-- Se crea la base de datos
-- -------------------------------------------------------- --
CREATE DATABASE bdautenticacion;

USE bdautenticacion;

-- -------------------------------------------------------- --
-- Se crea la tabla usuario
-- -------------------------------------------------------- --
CREATE TABLE
    `usuario` (
        `idusuario` bigint(20) NOT NULL AUTO_INCREMENT,
        `usnombre` varchar(50) NOT NULL,
        `uspass` int(11) NOT NULL,
        `usmail` varchar(50) NOT NULL,
        `usdeshabilitado` BOOLEAN DEFAULT FALSE,
        PRIMARY KEY (`idusuario`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- -------------------------------------------------------- --
-- Insetar valores a la tabla usuario
-- -------------------------------------------------------- --
INSERT INTO
    `usuario` (
        `idusuario`,
        `usnombre`,
        `uspass`,
        `usmail`,
        `usdeshabilitado`
    )
VALUES
    (
        1,
        'acostaDemianAaron',
        '1111',
        'demian.acosta@est.fi.uncoma.edu.ar',
        0
    ),
    (
        2,
        'veraAlan',
        '2222',
        'alan.vera@est.fi.uncoma.edu.ar',
        0
    ),
    (
        3,
        'SantiagoYaitul',
        '3333',
        'demian.acosta@est.fi.uncoma.edu.ar',
        0
    ),
    (
        4,
        'mausawicki7',
        '4444',
        'mauricio.sawicki@est.fi.uncoma.edu.ar',
        0
    );

-- -------------------------------------------------------- --
-- Se crea la tabla rol
-- -------------------------------------------------------- --
CREATE TABLE
    `rol` (
        `idrol` bigint(20) NOT NULL AUTO_INCREMENT,
        `roldescripcion` varchar(50) NOT NULL,
        PRIMARY KEY (`idrol`)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- -------------------------------------------------------- --
-- Se crea la tabla usuariorol
-- -------------------------------------------------------- --
CREATE TABLE
    `usuariorol` (
        `idusuario` bigint(20) NOT NULL AUTO_INCREMENT,
        `idrol` bigint(20) NOT NULL,
        FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON UPDATE CASCADE,
        FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- -------------------------------------------------------- --
-- Ver tablas
-- -------------------------------------------------------- --

SELECT * FROM usuario;

-- -------------------------------------------------------- --
-- -------------------------------------------------------- --
-- -------------------------------------------------------- --