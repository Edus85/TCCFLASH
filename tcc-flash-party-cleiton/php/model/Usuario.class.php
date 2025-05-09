<?php

/**
 * classe de conexao e CRUD com banco de dados contato. 
 */
class Usuario{
	private $cnpj;
    private $cpf;
	private $nome;
	private $datan;
	private $endereco;
	private $complemento;
	private $telefone;
	private $email;
	private $senha;
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

	function getCpf(){
		return $this->cpf;
	}
	function getNome(){
		return $this->nome;
	}
	function getDate(){
		return $this->date;
	}
	function getEndereco(){
		return $this->endereco;
	}
	function getComplemento(){
		return $this->complemento;
	}
	function getTelefone(){
		return $this->telefone;
	}
	function getEmail(){
		return $this->email;
	}
	function getSenha(){
		return $this->senha;
	}
	function getCnpj(){
		return $this->cnpj;
	}

	function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
	function setCpf($cpf){
		$this->cpf = $cpf;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	function setData($datan){
		$this->datan = $datan;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function setEComplemento($complemento){
		$this->complemento = $complemento;
	}

	function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}

	function insertUser($cnpj, $cpf, $nome, $datan, $endereco, $complemento, $telefone, $email, $senha, $razao, $fantasia, $tipo){
		
		if($tipo == 1){
			$sql = "INSERT INTO usuarios SET cpf = :c,nome = :n, nascimento = :d, endereco = :e, complemento = :x, telefone = :t, email = :y, senha = :s";
		}else{
			$sql = "INSERT INTO prestadores SET cnpj = :c, razao = :r, fantasia = :f, endereco = :e, complemento = :x, telefone = :t, email = :y, senha = :s";
		}
				
		$sql = $this->pdo->prepare($sql);
		
		if( $tipo == 1){
			$sql->bindValue(":c" , $cpf);
			$sql->bindValue(":d" , $datan);
			$sql->bindValue(":n" , $nome);	
		}else{
			$sql->bindValue(":c" , $cnpj);
			$sql->bindValue(":r", $razao);
			$sql->bindValue(":f", $fantasia);
		}			
		$sql->bindValue(":e" , $endereco);
		$sql->bindValue(":x" , $complemento);
		$sql->bindValue(":t" , $telefone);
		$sql->bindValue(":y" , $email);
		$sql->bindValue(":s" , $senha);
		
		return $sql->execute();
	}

	function checkUser($email){
		
		$sql = "SELECT *FROM prestadores WHERE email = :e";
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":e" , $email);

		$sql->execute();

 		if($sql->rowCount() > 0){
 			$info = $sql->fetch();
 			return $info;
		}else{
			$sql = "SELECT *FROM usuarios WHERE email = :e";
			$sql = $this->pdo->prepare($sql);

			$sql->bindValue(":e" , $email);

			$sql->execute();

			if($sql->rowCount() > 0){
				$info = $sql->fetch();
				return $info;
		   }else{
				return false;
		   }
		}

	}

	function checkPass($email, $senha){	
		$sql = "SELECT *FROM usuarios WHERE email = :e AND senha = :s";
		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":e" , $email);
		$sql->bindValue(":s" , $senha);

		$sql->execute();

 		if($sql->rowCount() > 0){
 			$info = $sql->fetch();
 			return $info;
		}else{
			$sql = "SELECT *FROM prestadores WHERE email = :e AND senha = :s";
			$sql = $this->pdo->prepare($sql);

			$sql->bindValue(":e" , $email);
			$sql->bindValue(":s" , $senha);
	
			$sql->execute();
		
			if($sql->rowCount() > 0){
				$info = $sql->fetch();
				return $info;
			}else{
				return false;
			}
		}	
	}

	function alerta($alerta){
		echo $alerta;			
	}
}