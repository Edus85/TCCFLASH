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

        
        <!-- --------SOBRE------ -->
        <link rel="stylesheet" type="text/css" href="./../css/container-layout/componentes/sobre.css"/>
        
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
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="#">Locação</a>
                            <ul>
                                <li><a href="#">Brinquedos</a></li>
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
        <!-- Conteúdo Principal -->
        <main>
            <section class="container-sobre efeito-scroll">
                <div class="container">
                <div class="texto">
                    <h2 class = "sobre">Conheça a Flash Party</h2>
                    <p class="sobre">
                    A Flash Party é uma empresa que visa a facilidade e rapidez na busca por artigos e produtos destinados à realização de festas.
                    Nosso objetivo é unir prestador e cliente através de uma plataforma intuitiva e confiável.
                    </p>
                    <p>
                    Fundada com a missão de simplificar a organização de eventos, a Flash Party se tornou referência no mercado de festas e eventos,
                    oferecendo uma solução completa tanto para quem busca produtos para sua festa quanto para quem deseja oferecer seus serviços.
                    </p>
                </div>
                <div class="card-missao">
                    <h3>Nossa Missão</h3>
                    <p>
                    Facilitar a conexão entre prestadores de serviços de festas e clientes, criando um ambiente prático, rápido e confiável para a
                    organização de eventos inesquecíveis.
                    </p>
                </div>
                </div>
            </section>

            <section class="efeito-scroll">
                <h2>Nossa Equipe</h2>
                <div class="equipe">
                <div class="card-equipe">
                    <h4>Maria Silva</h4>
                    <p>Fundadora & CEO</p>
                    <p>Especialista em marketing digital com mais de 10 anos de experiência no ramo de eventos.</p>
                </div>
                <div class="card-equipe">
                    <h4>João Oliveira</h4>
                    <p>Co-fundador & CTO</p>
                    <p>Desenvolvedor com visão inovadora para criar soluções tecnológicas simples e eficientes.</p>
                </div>
                <div class="card-equipe">
                    <h4>Ana Santos</h4>
                    <p>Diretora de Operações</p>
                    <p>Responsável por garantir a qualidade e confiabilidade de todos os prestadores na plataforma.</p>
                </div>
                </div>
            </section>
            <section class="cta efeito-scroll">
                <h2 class="cta-title">Comece a organizar sua festa hoje!</h2>
                <p class="cta-text">
                    Cadastre-se na Flash Party e tenha acesso aos melhores prestadores de serviços para festas.
                    Se você é um prestador, venha mostrar seus produtos e começar a fazer parte da revolução no mercado de eventos.
                </p>
            </section>
        </main>

        <br/>
        <hr/>

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
         ISSO FAZ COM QUE ELES SEJAM CARREGADOS APÓS A PÁGINA SER RENDERIZADA NO NAVEGADOR.--> -->
         <script src="./../js/scroll.js"></script>
    </body>
</html>