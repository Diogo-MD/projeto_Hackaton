-- Arquivo para iserções das Tabelas

-- Tabela Area
INSERT INTO Area (Cor, Tipo) VALUES 
('Azul', 'Administração'),
('Verde', 'Engenharia'),
('Amarelo', 'Ciências da Computação'),
('Vermelho', 'Medicina'),
('Roxo', 'Artes');

-- Tabela Curso
INSERT INTO Curso (Nome, Sigla, AreaID) VALUES 
('Administração de Empresas', 'ADM', 1),
('Engenharia Civil', 'EC', 2),
('Ciência da Computação', 'CC', 3),
('Medicina', 'MED', 4),
('Artes Visuais', 'AV', 5);

-- Tabela Docente
INSERT INTO Docente (Nome) VALUES 
('Aécio'),
('Luana'),
('Cristiano'),
('Celso');

-- Tabela Turma
INSERT INTO Turma (Nome, Oferta, CursoID, DocenteID) VALUES 
('Turma A', 2024, 1, 1),
('Turma B', 2024, 2, 2),
('Turma C', 2024, 3, 3),
('Turma D', 2024, 4, 4);

-- Tabela Sala
INSERT INTO Sala (Cor, Tipo, Capacidade) VALUES 
('Branco', 'Auditório', 100),
('Vermelho', 'Sala de Aula', 50),
('Verde', 'Laboratório', 30),
('Azul', 'Sala de Reunião', 20),
('Amarelo', 'Sala de Estudo', 10);

-- Tabela Reserva
INSERT INTO Reserva (Inicio, Fim, Periodo, TurmaID, SalaID) VALUES 
('2024-05-20', '2024-05-20', 'Manhã', 1, 1),
('2024-05-21', '2024-05-21', 'Tarde', 2, 2),
('2024-05-22', '2024-05-22', 'Noite', 3, 3),
('2024-05-23', '2024-05-23', 'Manhã', 4, 4);

SELECT * FROM Reserva