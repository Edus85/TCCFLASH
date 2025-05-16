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
        <main id="container-principal">
            <div class="cadastro">
                
                <h2>Login</h2>
                <form class="form-cadastro" method = "post" action="..\controller\entrar_submit.php">
                    
                        <label for="username">E-mail</label>
                        <input type="text" id="email" name="email" placeholder = "Digite seu email:" required>
                    
                    <!--<div class="input-group"> -->
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite sua senha:">
                    
                    <!--<button class="btn">Entrar</button> -->
                    <button  type="submit" name = "btnEntrar">Entrar</button>
                    <br><br>
                    <a href="#" class="forgot-password">Esqueci a senha</a>
                </form>
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

        <!-- BOA PRÁTICA DEIXAR OS SCRIPTS SEMPRE NO FINAL DA PÁGINA,
          ISSO FAZ COM QUE ELES SEJAM CARREGADOS APÓS A PÁGINA SER RENDERIZADA NO NAVEGADOR.-->
        <script src="./../../js/carrossel.js"></script>
    </body>
</html>