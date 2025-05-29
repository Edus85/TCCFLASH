<?php


session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: ./../view/Entrar.php");
    exit(); // Importante para parar a execução do script após o redirecionamento
}


include"..\model\Usuario.class.php";
$con = $usuario = new Usuario();

if( !$con ){
    echo
    "<script>
        confirm('Nao consegui conectar ao banco')
    </script>";
    return;
}else{

    if( isset($_POST['pf']) ){      
        $cpf         = $_POST['cpf'];
        $nome        = $_POST['nomePF'];
        $datan       = $_POST['datan'];
        $endereco    = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $telefone    = $_POST['telefone'];
        $email       = $_POST['email'];
        $senha       = $_POST['senhaPF'];
        $cnpj        = "";
        $razao       = "";
        $fantasia    = "";
    }else{
        $razao       = $_POST['razao'];
        $fantasia    = $_POST['fantasia'];
        $cnpj        = $_POST['cnpj'];
        $endereco    = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $telefone    = $_POST['telefone'];
        $email       = $_POST['email'];
        $senha       = $_POST['senhaPJ'];
        $nome        ="";
        $cpf         = "";
        $nome        = "";
        $datan       = "";

    }

    if ( isset($_POST['cnpj']) && !empty($_POST['cnpj']) ){
        $pf = $usuario->checkUser($email);
        if($pf){
            $usuario->alerta("Usuario Já Cadastrado. Vá para o Login");
            return;
        }else{
            $pf = $usuario->insertUser($cnpj, $cpf, $nome, $datan, $endereco, $complemento, $telefone, $email, $senha, $razao, $fantasia, "2");
            
            if( $pf ){
                $usuario->alerta("Prestador cadastrado com sucesso!");
            }else{
                $usuario->alerta( "Erro ao cadastrar Prestador. Tente mais tarde!" );
            }
        }
    }elseif ( isset($_POST['cpf']) && !empty($_POST['cpf']) ){
        $pj = $usuario->checkUser($email);
        if( $pj){
            $usuario->alerta("Usuario Já Cadastrado. Vá para o Login");
            return;
        }else{
            $pj = $usuario->insertUser($cnpj, $cpf, $nome, $datan, $endereco, $complemento, $telefone, $email, $senha, $razao, $fantasia, "1");
            if( $pj ){
                $usuario->alerta("Usuario cadastrado com sucesso!");
            }else{
                $usuario->alerta( "Erro ao cadastrar Usuario. Tente mais tarde!" );
            }
        }
    }
}






