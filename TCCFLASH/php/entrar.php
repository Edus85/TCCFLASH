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
        
        <!-- ESTILIZAÇÃO FORMULARIO DE CADASTRO -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/componentes/formulario-cadastro.css"/>


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


    <style> /* CSS PARA CENTRALIZAR CAIXA E COLOCAR O FOOTER NO RODAPE */
                .body_box {
                    display: flex;
                    justify-content: center;
                    align-items: center;        
                    min-height: 100vh;
                    background-color: white;
                    
                }

                #form_box {
                    padding: 80px;
                    border-radius: 8px;
                    display: flex;
                    justify-content: center;
                    align-items: center;    
                    }

                html, body {
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    }

                main {
                    flex: 1; /* Faz o conteúdo crescer e empurrar o footer pra baixo */
                    }

    </style>

       
    <main id="body_box">
            <div id="form_box"> 
        <!--<main id="container-principal"> container-principal  form-cadastro -->
            <div class="cadastro">
                
                    <h2>Bem Vindo</h2>
                    <form action="" method = "post">
                        
                            <label for="username">email</label>
                            <input type="text" id="username" name="email" placeholder = "Entre com o seu email" required>
                        
                        <!--<div class="input-group"> -->
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="password" required>
                        
                        <!--<button class="btn">Entrar</button> -->
                        <button  type="submit" name = "btnEntrar">     Entrar      </button>
                        
                        <a href="#" class="forgot-password">Esqueci a senha</a>
                    </form>

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

        <!-- BOA PRÁTICA DEIXAR OS SCRIPTS SEMPRE NO FINAL DA PÁGINA,
          ISSO FAZ COM QUE ELES SEJAM CARREGADOS APÓS A PÁGINA SER RENDERIZADA NO NAVEGADOR.-->
        <script src="./../js/carrossel.js"></script>
    </body>
</html>