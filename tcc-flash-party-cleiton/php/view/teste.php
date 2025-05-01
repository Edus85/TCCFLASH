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

            <!-- ESTILIZAÇÃO FORMULARIO DE CADASTRO -->
            <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/formulario-cadastro.css"/>


        </head>

        <body>
<!-- ------------------------------------------MENU DO SITE - REMOVAM O COMENTÁRIO DEPOIS ------------------------------------------- -->
        <!-- ALUNOS DO 3° DS, seguinte, aqui no body colocamos o conteúdo da página menu e etc -->
        
        <?php include '../view/Cabecalho.php'; ?>

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
                    <form id="form-cadastro" action="cadastro_submit.php" method="POST">
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

                    
                        <button type="submit">Cadastrar</button>
                    </form>
                </section>
            </div>
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
        <script src="./../../js/scroll.js"></script>
        <script src="./../../js/form-cadastro.js"></script>
    </body>
</html>