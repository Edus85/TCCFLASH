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

        <main>
            <div class="container-principal">
                <section class="cadastro efeito-scroll">
                    <h2>Cadastro</h2>

                    <div class="tipo-toggle">
                        <button id="btn-fisica" class="ativo">Pessoa Física</button>
                        <button id="btn-juridica">Pessoa Jurídica</button>
                    </div>
                        <div class="pf">
                            <form id="form-cadastro" action="..\controller\cadastro_submit.php" method="POST">
                        
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" required>

                                <label for="nome">Nome Completo</label>
                                <input type="text" id="nomePF" name="nomePF" required>

                                <label for="date">Data de Nascimento</label>
                                <input type="date" id="date" name="datan">

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
                                <button type="submit" class = "btn" name = "pf">Cadastrar</button>  
                            </form>
                        </div>
                        <div class="pj" style="display: none;">
                            <form id="form-cadastro" action="..\controller\cadastro_submit.php" method="POST">

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
                                <input type="password" id="senhaPJ"  name="senhaPJ" required>
                            <button type="submit" class = "btn" name = "pj">Cadastrar</button>
                        </form>
                    </div>
                </section>
            </div>
        </main>
        <br>
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

        <script src="./../../js/scroll.js"></script>
        <script src="./../../js/form-cadastro.js"></script>
    </body>
</html>