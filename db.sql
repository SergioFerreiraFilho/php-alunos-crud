USE db_sistema;

CREATE TABLE tB_alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
);

INSERT INTO tb_alunos(nome, matricula, cidade)VALUES
('Maria','123456',"Fortaleza"),
('Chiquinha','1323456',"Fortaleza"),
('Chiquim','1423456',"Fortaleza"),
('Zezim','1523456',"Fortaleza");