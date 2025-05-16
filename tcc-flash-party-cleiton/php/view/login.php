<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- NO HEAD COLOCAMOS APENAS AS CONFIGURAÇÕES QUE A PÁGINA TEM -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flash Party</title>

        <!-- AQUI VAMOS LINKAR TODAS AS NOSSAS ESTILIZAÇÕES -->
        
        <!-- RESET DE ESTILOS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/reset.css"/>
        
        <!-- CSS DESTINADO A ESTILIZAÇÃO DO CABEÇALHO, ONDE DEPOIS VAMOS ADICIONAR O MENU  -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css"/>

        <!-- ESTILIZAÇÃO DO MENU -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/menu.css"/>
        <!-- ESTILIZAÇÃO DOS CAMPOS DE PESQUISA E BOTÕES DE LOGIN/CADASTRO -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/pesquisa.css"/>
        <!-- ESTILIZAÇÃO REFERENTE AO CARROSSEL -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/carrossel.css"/>

        <!-- ESTILIZAÇÃO DO rodape -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/rodape.css"/>

        <!-- CSS DESTINADO AS CONFIGURAÇÕES PRINCIPAIS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/principal.css"/>

        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/formulario-cadastro.css"/>


    </head>
    <body>
<!-- ------------------------------------------MENU DO SITE - REMOVAM O COMENTÁRIO DEPOIS ------------------------------------------- -->
        <!-- ALUNOS DO 3° DS, seguinte, aqui no body colocamos o conteúdo da página menu e etc -->
        <?php include '../view/Cabecalho.php';
        //$nome = $_SESSION['nome'];
        //$pos  = strpos($nome, " ");
        //$nome = substr($nome, 0, $pos);

        //echo"Bem vindo $nome";
        ?>
         
        <!-- --------------- FIM DO MENU / CABEÇALHO  ---------------------->

        <main>

        <div class="container-principal">
                <section class="cadastro efeito-scroll">
                        <div class="pf">

                            <form id="form-cadastro" action="..\controller\cadastro_produto.php" method="POST">
                                
                            <!--<form method="post" enctype="multipart/form-data" action="upload_produto.php"> -->
                    
                                <!--Nome da Empresa: <input type="text" name="nome_fantasia"><br><br> -->
                                <?php 
                                $nome = $_SESSION['nome'];
                                $pos  = strpos($nome, " ");
                                $nome = substr($nome, 0, $pos);

                                echo"Bem vindo $nome"; 
                                ?>
                                <br><br><br><br>
                                Categoria: <input type="text" name="categoria"><br><br>

                                Subcategoria: <input type="text" name="subcategoria"><br><br>

                               <!-- <form id="form-cadastro" action="..\controller\cadastro_submit.php" method="POST">
                        
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" required> -->

                                Nome do Produto: <input type="text" name="nome_produto"><br><br>
                                Valor: <input type="text" name="valor"><br><br>
                                Descrição:<br>
                                <input type ="text" name="descricao" rows="4" cols="40"></textarea><br><br>
                                
                                Foto do Produto: <input type="file" name="foto"><br><br>
                                <input type="submit" name="produto">

        </form>

        </main>


        <br>
            <!-- MESMO CASO DO MENU, MANTER NA TAG BODY, BODY É O CORPO, TEM QUE TER TODO O CONTEÚDO -->
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
        <!-- BOA PRÁTICA DEIXAR OS SCRIPTS SEMPRE NO FINAL DA PÁGINA,
          ISSO FAZ COM QUE ELES SEJAM CARREGADOS APÓS A PÁGINA SER RENDERIZADA NO NAVEGADOR.-->
        <script src="./../../js/carrossel.js"></script>
    </body>
</html>