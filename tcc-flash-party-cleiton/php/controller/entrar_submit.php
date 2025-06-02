<?php
session_start();


require"..\model\Usuario.class.php";
$con = $usuario = new Usuario();
$email = $_POST['email'];

if( !$con ){
    echo
    "<script>
        confirm('Nao consegui conectar ao banco')
    </script>";
     
}else{    
    if( isset($_POST['btnEntrar']) ){
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $user = $usuario->checkUser($email);
        if( $user ){          
           $user = $usuario->checkPass($email, $senha);
           if( $user ){
                if( !empty( $user['nome']) ){
                    $_SESSION['nome'] = $user['nome'];     
                }else{
                    $_SESSION['nome'] = $user['razao'];
                }
                header("location:../view/home.php");
           }else{
            $usuario->alerta("Senha nao confere");
           }
        }else{
            $usuario->alerta("Usuario ou Prestador nao cadastrados");
        }
    }else{
        if( isset($_POST['btnEsqueci']) ){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $_SESSION['senha'] = $senha;
            $_SESSION['email'] = $email;
            header("location:../view/esqueci.php");
        }
    }   
}