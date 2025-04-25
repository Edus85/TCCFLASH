<!DOCTYPE html>
<html>
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

        <link rel="stylesheet" type="text/css" href="./../css/container-layout/card.css"/>


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
						<li><a href="./home.php">Home</a>
                        <li>Locação</a>
                            <ul>
                                <li><a href="./card.php">Brinquedos</a></li>
                                <li><a href="./card.php">Decoração</a></li>
                                <li><a href="./card.php">Mesas e cadeiras</a></li>
                                <li><a href="./card.php">Utensílios</a></li>
                                <li><a href="./card.php">Eletrônicos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Parceiros</a>
                            <ul>
                                <li><a href="./card.php">Bebidas</a></li>
                                <li><a href="./card.php">Confeitarias</a></li>
                                <li><a href="./card.php">Bomboniere</a></li>
                                <li><a href="./card.php">Salgados</a></li>
                            </ul>                            
                        </li>
                        <li><a href="#">Profissionais</a>
                            <ul>
                                <li><a href="./card.php">DJ's e Shows</a></li>
                                <li><a href="./card.php">Segurança</a></li>
                                <li><a href="./card.php">Limpeza</a></li>
                                <li><a href="./card.php">Animador de festa</a></li>
                                <li><a href="./card.php">Garçom</a></li>
                            </ul>
                        </li>
                        <li><a href="./tela.php">Mais serviços</a></li>
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

	<section class="products">
        
		<h2>SERVIÇOS</h2>
		<div class="all-products">
			<div class="product">
				<img src="card/img/decoracao.jpeg">
				<div class="product-info">
					<h4 class="product-title">Decoração
					</h4>
					<p class="product-price">$129</p>
					<a class="product-btn" href="#">Contratar</a>

				</div>
			</div>
			<div class="product">
				<img src="card/img/bolo.jpeg">
				<div class="product-info">
					<h4 class="product-title">Doces
					</h4>
					<p class="product-price">$70 o kilo</p>
					<a class="product-btn" href="#">Contratar</a>

				</div>
			</div>
			<div class="product">
				<img src="card/img/salgado.jpeg">
				<div class="product-info">
					<h4 class="product-title">Salgados
					</h4>
					<p class="product-price">R$ 0,75 uni</p>
					<a class="product-btn" href="#">Contratar</a>

				</div>
			</div>
			<div class="product">
				<img src="card/img/dj.jpeg">
				<div class="product-info">
					<h4 class="product-title">Dj João
						</h4>
					<p class="product-price">R$629*</p>
					<a class="product-btn" href="#">Contratar</a>

				</div>
			</div>
		</div>
	</section>

</body>
</html>