<?php
class Produto {
    private $conn;

    // Construtor que recebe a conexão com o banco
    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para listar os produtos por subcategoria
    public function listarPorSubcategoria($subcategoria) {
        // Consulta SQL para buscar produtos de acordo com a subcategoria
        $sql = "SELECT p.nome, p.preco, p.imagem 
                FROM produto p
                JOIN subcategoria s ON p.id_subcategoria = s.id
                WHERE s.nome = ?";

        // Preparando a consulta
        $stmt = $this->conn->prepare($sql);

        // Verificando erro na preparação da consulta
        if ($stmt === false) {
            die('Erro na preparação da consulta: ' . $this->conn->error);
        }

        // Vinculando o parâmetro da subcategoria na consulta
        $stmt->bind_param("s", $subcategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        // Coletando os produtos no formato de um array
        $produtos = [];
        while ($row = $result->fetch_assoc()) {
            $produtos[] = $row;
        }

        // Fechando a declaração
        $stmt->close();
        
        // Retornando os produtos encontrados
        return $produtos;
    }
}
?>
