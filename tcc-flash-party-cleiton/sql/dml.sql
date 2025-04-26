USE flash_party;


INSERT INTO categoria (nome) VALUES
('Locação'),
('Parceiros'),
('Profissionais');


INSERT INTO subcategoria (nome, id_categoria) VALUES
('Brinquedos', 1),
('Camas Elásticas', 1),
('Bebidas', 2),
('Doces', 2),
('DJ\''s e Shows', 3),
('Animadores', 3);


INSERT INTO produto (nome, preco, imagem, id_subcategoria) VALUES
--só brinquedos - CAT 1: 
('Argolas', 100.00, 'argolas.png', 1),       
('Cama Elástica', 200.00, 'cama-elastica.png', 1),
('Futebol de Sabão Grande', 350.00, 'futebol-de-sabao-grande.png', 1),
('Io-Iô', 20.00, 'ioio.png', 1),
('Mesa de Pebolim', 150.00, 'mesa-pebolim.png', 1),
('Piscina de Bolinhas', 250.00, 'piscina-bolinha.png', 1);

