<?php
require_once '../model/Conexao.php';
require_once '../model/Produto.php'; 

class CardController {
    public function __construct() {
        // Conectar ao banco e buscar os produtos
        $db = new Conexao();
        $conn = $db->connect();

        $produtoObj = new Produto($conn);
        
        // Pegando a subcategoria da URL
        $subcategoria = isset($_GET['subcategoria']) ? urldecode($_GET['subcategoria']) : null;

        // Listar os produtos pela subcategoria
        $produtos = $produtoObj->listarPorSubcategoria($subcategoria);

        // Passando os dados para a view
        require_once '../view/cardView.php';
    }
}
