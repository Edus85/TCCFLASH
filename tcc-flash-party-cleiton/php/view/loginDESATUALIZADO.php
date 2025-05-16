
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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

  <title>Cadastro de Produtos</title>
  
</head>
<body>

<?php 

//include '../view/Cabecalho.php';
        $nome = $_SESSION['nome'];
        $pos  = strpos($nome, " ");
        $nome = substr($nome, 0, $pos);

        echo"Bem vindo $nome";

        ?>

  <h2>Cadastro de Produto</h2>
  <form method="post" enctype="multipart/form-data" action="upload_produto.php">
   
    Nome da Empresa: <input type="text" name="nome_fantasia"><br><br>
    Categoria: <input type="text" name="categoria"><br><br>
    Nome do Produto: <input type="text" name="nome_produto"><br><br>
    Valor: <input type="text" name="valor"><br><br>
    Descrição:<br>
    <input type ="text"
     name="descricao" rows="4" cols="40"></textarea><br><br>
    Foto do Produto: <input type="file" name="foto"><br><br>
    <input type="submit" value="Cadastrar Produto" name="envia">
  </form>


</body>
</html>