DROP SCHEMA IF EXISTS diario;
CREATE SCHEMA IF NOT EXISTS diario;
CREATE TABLE IF NOT EXISTS diario.timeline(
    id INT PRIMARY KEY AUTO_INCREMENT,
    texto VARCHAR(1000) NOT NULL,
    img LONGBLOB,
    data DATE NOT NULL,
    titulo VARCHAR(1000) NOT NULL,
    position CHAR(1) DEFAULT "E"
);
CREATE TABLE IF NOT EXISTS diario.album(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(10) NOT NULL,
    data DATE,
    imagem LONGBLOB
);