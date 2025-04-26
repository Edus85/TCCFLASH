<?php
class Conexao {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "flash_party";
    public $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
?>
