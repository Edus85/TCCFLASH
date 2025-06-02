<?php
session_start();

require './../model/Usuario.class.php';
$con = $usuario = new Usuario();
if( !$con ){
    echo 
    "<script>
        confirm('Banco indisponivel. Tente mais tarde!'
    </script>";  
}else{
    $email = $_SESSION['email'];
    
    $user = $usuario->checkUser($email);
   
    if( empty(!$user) ){
        
        $email = $user['nome'];
        $chk = $usuario->atualizaSenha($email);
        if ($chk){
            echo"<script>
                confirm('Senha alterada com sucesso!')
            </script>"; 
        }

    }else{
        echo"
        <script>
            confirm('Esse usuario nao existe')
        </script>"; 
        session_destroy();
       exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flash Party</title>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/reset.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/menu.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/pesquisa.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/carrossel.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/rodape.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/principal.css"/>
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/formulario-cadastro.css"/>
       
    </head>
    <body>
        <?php include '../view/Cabecalho.php'; ?>
        <main id="container-principal">
            <div class="cadastro">
                <h2>Trocar Senha</h2>
                <form class="form-cadastro" method = "post">
                    
                    <label for="username">E-mail</label>              
                    <input type="text" id="email" name="email" value ="<?php echo $user['nome']; ?>">

                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua NOVA senha:">
                
                    <button  type="submit"  class = "btn" name = "btnTrocar">Trocar</button>
                    <br><br>
                </form>
            </div>
        </main>
        <footer>
            <div class="container-rodape">
                <div class="rodape-esquerda">
                    <p>Tel: (11) 7070-7070</p>
                        <p>Email: <a href="mailto:flashparty@gmail.com">flashparty@gmail.com</a></p>
                </div>
                <div class="rodape-direita">
                    <p>© 2025 <span class="designer">Flash Party</span>. Todos os direitos reservados.</p>
                </div>
            </div>
        </footer>
        <script src="./../../js/carrossel.js"></script>
    </body>
</html>
