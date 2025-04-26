<?php
require_once '../model/Conexao.php';
require_once '../model/Menu.php'; 

$db = new Conexao();
$conn = $db->connect();

$menuObj = new Menu($conn);
$menu = $menuObj->getMenuCompleto();
?>

<header class="container-header">
    <div class="logo-principal">
        <img src="./../../css/images/logo/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
        <h2>Flash Party</h2>
    </div>
    <div class="container-menu">
        <nav>
            <ul class="menu">
                <li><a href="../view/home.php">Home</a></li>

                <?php foreach ($menu as $categoria => $subcategorias): ?>
                    <li><a href="#"><?php echo $categoria; ?></a>
                        <ul>
                            <?php foreach ($subcategorias as $sub): ?>
                                <li>
                                    <a href="../view/card.php?subcategoria=<?php echo urlencode($sub); ?>">
                                        <?php echo $sub; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>

                <li><a href="../view/sobre.php">Sobre</a></li>
            </ul>
        </nav>
    </div>
    <div class="container-pesquisa">
        <input type="text" placeholder="Buscar..." class="input-pesquisa">   
        <a href="../view/entrar.php" class="btn-pesquisa">Entrar</a>
        <a href="../view/cadastro.php" class="btn-pesquisa destaque">Cadastro</a>
    </div>
</header>
