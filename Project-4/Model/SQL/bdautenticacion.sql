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
        `uspass` varchar(32) NOT NULL,
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
        'b59c67bf196a4758191e42f76670ceba',
        'demian.acosta@est.fi.uncoma.edu.ar',
        0
    ),
    (
        2,
        'veraAlan',
        '934b535800b1cba8f96a5d72f72f1611',
        'alan.vera@est.fi.uncoma.edu.ar',
        0
    ),
    (
        3,
        'SantiagoYaitul',
        '2be9bd7a3434f7038ca27d1918de58bd',
        'demian.acosta@est.fi.uncoma.edu.ar',
        0
    ),
    (
        4,
        'mausawicki7',
        'dbc4d84bfcfe2284ba11beffb853a8c4',
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


INSERT INTO
`rol` (
    `idrol`,
    `roldescripcion`
 )
 VALUES
 (
    1,
    'Admin'
 ),(
    2,
    'Cliente'
 );


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

INSERT INTO
`usuariorol` (
    `idusuario`,
    `idrol`
 )
 VALUES
 (
    1,
    1
 ),(
    2,
    1
 ),(
    3,
    1
 ),(
    4,
    1
 );


-- -------------------------------------------------------- --
-- Ver tablas
-- -------------------------------------------------------- --

SELECT * FROM usuario;

-- -------------------------------------------------------- --
-- -------------------------------------------------------- --
-- -------------------------------------------------------- --