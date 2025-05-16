<?php
    class Menu {
        private $conn;
    
        public function __construct($db) {
            $this->conn = $db;
        }
        
        //método que verifica se os menus e sub-menus estão no banco de dados
        public function getMenuCompleto() {
            // Corrigindo os nomes das tabelas para categoria e subcategoria
            $sql = "SELECT c.nome AS categoria, s.nome AS subcategoria
                    FROM categoria c
                    JOIN subcategoria s ON s.id_categoria = c.id
                    ORDER BY c.nome, s.nome";
    
            // Verificar se a consulta foi executada corretamente
            $result = $this->conn->query($sql);
    
            if ($result === false) {
                die("Erro na consulta SQL: " . $this->conn->error);
            }
    
            $menu = [];
    
            // Processando os resultados a adiciona ao array "LISTA"
            while ($row = $result->fetch_assoc()) {
                $categoria = $row['categoria'];
                $subcategoria = $row['subcategoria'];
                $menu[$categoria][] = $subcategoria;
            }
    
            return $menu;
        }
    }
    
?>
