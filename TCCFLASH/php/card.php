<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>card</title>
	<link rel="stylesheet" type="text/css" href="card/stylecard.css">
</head>
<body>
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