<?php
    class Produto {
        private $conn;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function listarPorSubcategoria($subcategoria) {
            // Alterando a consulta SQL para utilizar o relacionamento de subcategoria
            $sql = "SELECT p.nome, p.preco, p.imagem 
                    FROM produto p
                    JOIN subcategoria s ON p.id_subcategoria = s.id
                    WHERE s.nome = ?";
            
            $stmt = $this->conn->prepare($sql);
            
            // Verifica se a preparação da consulta falhou
            if ($stmt === false) {
                die('Erro na preparação da consulta: ' . $this->conn->error);
            }

            // Ligando a variável $subcategoria para a consulta
            $stmt->bind_param("s", $subcategoria);
            $stmt->execute();
            $result = $stmt->get_result();

            // Coletando os produtos
            $produtos = [];
            while ($row = $result->fetch_assoc()) {
                $produtos[] = $row;
            }

            $stmt->close();
            return $produtos;
        }
    }

?>
