<?php
include"..\model\Produto.class.php";
$con = $usuario = new Produto();

if( !$con ){
    echo
    "<script>
        confirm('Nao consegui conectar ao banco')
    </script>";
    return;
}else{

    if( isset($_POST['produto']) ){      
        $categoria   = $_POST['categoria'];
        $nome_produto= $_POST['nome_produto'];
        $valor       = $_POST['valor'];
        $descricao   = $_POST['descricao'];
        $foto        = $_POST['foto'];
        //$telefone    = $_POST['telefone'];
        //$email       = $_POST['email'];
        //$senha       = $_POST['senhaPF'];
        //$cnpj        = "";
        //$razao       = "";
        //$fantasia    = "";
    }else{
        //$razao       = $_POST['razao'];
        //$fantasia    = $_POST['fantasia'];
        //$cnpj        = $_POST['cnpj'];
        //$endereco    = $_POST['endereco'];
        //$complemento = $_POST['complemento'];
        //$telefone    = $_POST['telefone'];
        //$email       = $_POST['email'];
        //$senha       = $_POST['senhaPJ'];
        //$nome        ="";
        //$cpf         = "";
        //$nome        = "";
        //$datan       = "";

    }

    if ( isset($_POST['produto']) && !empty($_POST['produto']) ){
        $pf = $usuario->checkUser($email);
        if($con){
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








