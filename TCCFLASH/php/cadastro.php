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
        <main>
            <div class="container-principal">
                <section class="cadastro efeito-scroll">
                    <h2>Cadastro</h2>

                    <!-- Botão de alternância -->
                    <div class="tipo-toggle">
                        <button id="btn-fisica" class="ativo">Pessoa Física</button>
                        <button id="btn-juridica">Pessoa Jurídica</button>
                    </div>

                    <!-- Formulário de Cadastro -->
                    <form id="form-cadastro">
                        <!-- Campos PF -->
                        <div class="pf">

                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" required>

                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nomePF" name="nomePF" required>

                            <label for="date">Data de Nascimento</label>
                            <input type="date" id="date" name="date">

                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco">

                            <label for="complemento">Complemento</label>
                            <input type="text" id="complemento" name="complemento">

                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone">

                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>

                            <label for="senhaPF">Senha</label>
                            <input type="password" id="senhaPF" name="senhaPF"  required>
                        </div>

                        <!-- Campos PJ -->
                        <div class="pj" style="display: none;">

                            <label for="cnpj">CNPJ</label>
                            <input type="text" id="cnpj" name="cnpj" required>

                            <label for="razao">Razão Social</label>
                            <input type="text" id="razao" name="razao" required>

                            <label for="fantasia">Nome Fantasia</label>
                            <input type="text" id="fantasia" name="fantasia">

                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco">

                            <label for="complmento">Complemento</label>
                            <input type="text" id="complemento" name="complemento">

                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone">

                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email">

                            <label for="senhaPJ">Senha</label>
                            <input type="password" id="senhaPJ" name="senhaPJ"  required>

                            <!-- Categorias da empresa -->
                            <!--<label for="categoria-principal">Categoria Principal</label>
                            <select id="categoria-principal" name="categoria-principal" required>
                                <option value="" disabled selected>Selecione uma categoria</option>
                                <option value="decoracao">Decoração</option>
                                <option value="buffet">Buffet</option>
                                <option value="animacao">Animação</option>
                                <option value="local">Aluguel de Espaço</option>
                                <option value="som">Som e Iluminação</option>
                                <option value="foto-video">Foto e Vídeo</option>
                            </select> -->
                            
                            <!--<label for="fantasia">Descrição</label>
                            <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva brevemente os serviços oferecidos, ou qualquer outra informação importante."></textarea> -->

                        </div>

                        <button type="submit">Cadastrar</button>
                    </form>
                </section>
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
        <script src="./../js/scroll.js"></script>
        <script src="./../js/form-cadastro.js"></script>
    </body>
</html>