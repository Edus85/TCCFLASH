<?php
class Conexao {

    private $host;
    private $user;
    private $pass;
    private $dbname;
    public $conn;

    /**
     * Vamos utilizar o Construtor da classe.
     * Aqui, ele vai inicializar os parâmetros de conexão e estabelecer a conexão com o banco.
     */
    public function __construct($host = "localhost", $user = "root", $pass = "", $dbname = "flash_party") {
        // Atribui os valores passados ao objeto
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;

        // Tenta conectar ao banco de dados
        $this->connect();
    }

    //Estabelece a conexão com o banco de dados.
    public function connect() {
        // Tentativa de conexão com o banco de dados
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        // Se houver erro na conexão, exibe uma mensagem de erro
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
?>
