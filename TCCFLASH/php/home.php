<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- NO HEAD COLOCAMOS APENAS AS CONFIGURAÇÕES QUE A PÁGINA TEM -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flash Party</title>

        <!-- AQUI VAMOS LINKAR TODAS AS NOSSAS ESTILIZAÇÕES -->
        
        <!-- RESET DE ESTILOS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/reset.css"/>
        
        <!-- CSS DESTINADO A ESTILIZAÇÃO DO CABEÇALHO, ONDE DEPOIS VAMOS ADICIONAR O MENU  -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/cabecalho.css"/>

        <!-- ESTILIZAÇÃO DO MENU -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/componentes/menu.css"/>
        
        <!-- ESTILIZAÇÃO DOS CAMPOS DE PESQUISA E BOTÕES DE LOGIN/CADASTRO -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/componentes/pesquisa.css"/>
        <!-- ESTILIZAÇÃO REFERENTE AO CARROSSEL -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/componentes/carrossel.css"/>

        <!-- ESTILIZAÇÃO DO rodape -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/rodape.css"/>

        <!-- CSS DESTINADO AS CONFIGURAÇÕES PRINCIPAIS DA PÁGINA -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/principal.css"/>

    </head>
    <body>
<!-- ------------------------------------------MENU DO SITE - REMOVAM O COMENTÁRIO DEPOIS ------------------------------------------- -->
        <!-- ALUNOS DO 3° DS, seguinte, aqui no body colocamos o conteúdo da página menu e etc -->
        <header class="container-header">
            <div class="logo-principal">
                <img src="./../css/images/logo/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
                <h2>Flash Party</h2>
            </div>
            <!-- Dentro da TAG header colocamos as coisas que estarão  no topo do nosso site como o menu -->
             <div class="container-menu">
                <nav class>
                    <ul class="menu">
                        <li><a href="#">Locação</a>
                            <ul>
                                <li><a href="card.php">Brinquedos</a></li>
                                <li><a href="#">Decoração</a></li>
                                <li><a href="#">Mesas e cadeiras</a></li>
                                <li><a href="#">Utensílios</a></li>
                                <li><a href="#">Eletrônicos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Parceiros</a>
                            <ul>
                                <li><a href="#">Bebidas</a></li>
                                <li><a href="#">Confeitarias</a></li>
                                <li><a href="#">Bomboniere</a></li>
                                <li><a href="#">Salgados</a></li>
                            </ul>                            
                        </li>
                        <li><a href="#">Profissionais</a>
                            <ul>
                                <li><a href="#">DJ's e Shows</a></li>
                                <li><a href="#">Segurança</a></li>
                                <li><a href="#">Limpeza</a></li>
                                <li><a href="#">Animador de festa</a></li>
                                <li><a href="#">Garçom</a></li>
                            </ul>
                        </li>
                        <li><a href="tela.php">Mais serviços</a></li>
                        <li><a href="./sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container-pesquisa">
                <input type="text" placeholder="Buscar..." class="input-pesquisa">   
                <a href="entrar.php" class="btn-pesquisa">Entrar</a>
                <a href="./cadastro.php" class="btn-pesquisa destaque">Cadastro</a>
            </div>
        </header>
        <!-- --------------- FIM DO MENU / CABEÇALHO  ---------------------->
        <main>
            <div class="container-principal">
                <div class="carrossel">
                    <div class="slides">
                        <img src="./../css/images/slides/01.jpeg" alt="Imagem 1">
                        <img src="./../css/images/slides/02.jpeg" alt="Imagem 2">
                        <img src="./../css/images/slides/03.jpeg" alt="Imagem 3">
                        <img src="./../css/images/slides/04.jpeg" alt="Imagem 4">
                        <img src="./../css/images/slides/05.jpeg" alt="Imagem 5">
                        <img src="./../css/images/slides/06.jpeg" alt="Imagem 6">
                    </div>
                    <button class="prev" onclick="mudarSlide(-1)">❮</button>
                    <button class="next" onclick="mudarSlide(1)">❯</button>
                </div>
            </div>
        </main>
        <br>
        <!-- MESMO CASO DO MENU, MANTER NA TAG BODY, BODY É O CORPO, TEM QUE TER TODO O CONTEÚDO -->
        <footer>
        <style>
                    html, body {
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                }

                main {
                    flex: 1; /* Faz o conteúdo crescer e empurrar o footer pra baixo */
                }
            </style>
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
        <script src="./../js/carrossel.js"></script>
    </body>
</html>

