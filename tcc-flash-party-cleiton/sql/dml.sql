USE flash_party;

-- Inserts em categoria
INSERT INTO categoria (nome) VALUES
('Locação'),
('Parceiros'),
('Profissionais');

-- Inserts em subcategoria
INSERT INTO subcategoria (nome, id_categoria) VALUES
('Brinquedos', 1),
('Camas Elásticas', 1),
('Bebidas', 2),
('Doces', 2),
('DJ\''s e Shows', 3),
('Animadores', 3);

-- Inserts em produto
INSERT INTO produto (nome, preco, imagem, id_subcategoria) VALUES
('Pula-Pula Grande', 150.00, 'card/img/pulapula.jpg', 1),
('Cama Elástica 3m', 120.00, 'card/img/camaelastica.jpg', 2),
('Refrigerante Coca-Cola 2L', 7.50, 'card/img/bebida.jpeg', 3),
('Brigadeiro Gourmet', 2.00, 'card/img/doces.jpg', 4),
('DJ João', 629.00, 'card/img/dj.jpeg', 5),
('Palhaço Picolé', 300.00, 'card/img/palhaco.jpg', 6),
--só brinquedos - CAT 1: 
('Argolas', 100.00, 'argolas.png', 1),       
('Cama Elástica', 200.00, 'cama-elastica.png', 1),
('Futebol de Sabão Grande', 350.00, 'futebol-de-sabao-grande.png', 1),
('Io-Iô', 20.00, 'ioio.png', 1),
('Mesa de Pebolim', 150.00, 'mesa-pebolim.png', 1),
('Piscina de Bolinhas', 250.00, 'piscina-bolinha.png', 1);

