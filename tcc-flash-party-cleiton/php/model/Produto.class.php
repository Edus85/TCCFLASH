<?php

/**
 * classe de conexao e CRUD com banco de dados contato. 
 */

class Produto{
	private $categoria;
    private $nome_produto;
	private $valor;
	private $descricao;
	private $foto;
	private $pdo;

	function __construct(){
		$dns    ="mysql:dbname=flash_party;host=localhost";
		$dbUser = "root";
		$dbPass = "";
		try {
			$this->pdo = new PDO($dns,$dbUser,$dbPass);	    
            return true;
			
		} catch (Exception $e) {	
			return false;
		}
	}

	function getCategoria(){
		return $this->categoria;
	}
	function getNome_produto(){
		return $this->nome_produto;
	}
	function getValor(){
		return $this->valor;
	}
	function getDescricao(){
		return $this->descricao;
	}	
	function getFoto(){
		return $this->foto;
	}

	function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	function setNome_produto($nome_produto){
		$this->nome_produto = $nome_produto;
	}
	function setValor($valor){
		$this->valor = $valor;
	}
	function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	function setFoto($foto){
		$this->foto = $foto;
	}

	function insertProduct($categoria, $nome_produto, $valor, $descricao, $foto){	
		$sql = "INSERT INTO produto SET categoria = :c, nome_produto = :n, valor = :d, descricao = :e, foto = :x";
		
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":c", $categoria);
		$sql->bindValue(":n", $nome_produto);
		$sql->bindValue(":d", $valor);
		$sql->bindValue(":e", $descricao);
		$sql->bindValue(":x", $foto);

		$sql->execute();
	}
