<?php
//Galera, aqui estamos adicionando as conexões que essa classe vai usar
require_once '/../model/Conexao.php';
require_once '/../model/Produto.php';

class ProdutoController {
    private $produtoModel;

    //aqui estamos utilizando um construtor para estabelecer a conexão com nossso banco de dados lá no MySQL
    public function __construct() {
        $db = new Conexao();
        $conn = $db->connect();
        //aqui estamos criando uma instância da classe prdouto (model) e vamos passar a conexão como param
        $this->produtoModel = new Produto($conn);
    }

    public function listarPorSubcategoria($subcategoria) {
        //vai chamar o método da classe PRODUTO que está no MODEL
        // e irá permitir que possamos listar as subcategorias
        return $this->produtoModel->listarPorSubcategoria($subcategoria);
    }
}
