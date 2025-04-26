<?php
require_once '../model/Conexao.php';
require_once '../model/Produto.php'; 

// Pegando a subcategoria da URL
$subcategoria = isset($_GET['subcategoria']) ? urldecode($_GET['subcategoria']) : null;

// Conecta ao banco
$db = new Conexao();
$conn = $db->connect();

// Cria objeto Produto e busca os produtos
$produtoObj = new Produto($conn);
$produtos = $produtoObj->listarPorSubcategoria($subcategoria);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!-- NO HEAD COLOCAMOS APENAS AS CONFIGURAÇÕES QUE A PÁGINA TEM -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($subcategoria); ?> - Flash Party</title>
        <!-- AQUI VAMOS LINKAR TODAS AS NOSSAS ESTILIZAÇÕES -->
        
        <!-- RESET DE ESTILOS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/reset.css"/>
        
        <!-- CSS DESTINADO A ESTILIZAÇÃO DO CABEÇALHO, ONDE DEPOIS VAMOS ADICIONAR O MENU  -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css"/>

        <!-- ESTILIZAÇÃO DO MENU -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/menu.css"/>
        <!-- ESTILIZAÇÃO DOS CAMPOS DE PESQUISA E BOTÕES DE LOGIN/CADASTRO -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/pesquisa.css"/>

        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/card.css"/>

        <!-- ESTILIZAÇÃO DO rodape -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/rodape.css"/>

        <!-- CSS DESTINADO AS CONFIGURAÇÕES PRINCIPAIS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/principal.css"/>

    </head>
<body>

    <?php include 'cabecalho.php'; ?>

    <main>
        <div class="container-principal">
            <section class="products">                    
                <h2><?php echo htmlspecialchars($subcategoria); ?></h2>
                <div class="all-products">
                    <?php if (count($produtos) > 0): ?>
                        <?php foreach ($produtos as $produto): ?>
                            <div class="product">
                                <img src="./../../<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                                  
                                <div class="product-info">
                                    <h4 class="product-title"><?php echo $produto['nome']; ?></h4>
                                    <p class="product-price">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                                    <a class="product-btn" href="#">Contratar</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Nenhum produto encontrado para esta categoria.</p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>
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
</body>
</html>
