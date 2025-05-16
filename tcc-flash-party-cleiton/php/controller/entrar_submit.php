<?php
session_start();
require"..\model\Usuario.class.php";
$con = $usuario = new Usuario();

if( !$con ){
    echo
    "<script>
        confirm('Nao consegui conectar ao banco')
    </script>";
    return;
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
                header("location:../view/login.php");
           }else{
            $usuario->alerta("Senha nao confere");
           }
        }else{
            $usuario->alerta("Usuario ou Prestador nao cadastrados");
        }
    }
}