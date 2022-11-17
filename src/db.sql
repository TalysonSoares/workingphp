CREATE TABLE tb_alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) NOT NULL,
    cidade VARCHAR (20) NOT NULL
);

INSERT INTO tb_alunos (nome, matricula, cidade)
VALUES
('Maria', '123456', 'Fortaleza')
('Chiquinha', '223456', 'Caucaia')
('Chiquim', '323456', 'Fortaleza')
('Zezim', '5505050', 'Fortaleza')