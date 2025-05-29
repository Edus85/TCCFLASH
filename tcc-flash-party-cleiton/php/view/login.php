
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- NO HEAD COLOCAMOS APENAS AS CONFIGURAÇÕES QUE A PÁGINA TEM -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flash Party</title>

        <!-- AQUI VAMOS LINKAR TODAS AS NOSSAS ESTILIZAÇÕES -->
        
       

        <!-- CSS DESTINADO A ESTILIZAÇÃO DO CABEÇALHO, ONDE DEPOIS VAMOS ADICIONAR O MENU  -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css"/>

        <!-- ESTILIZAÇÃO DO MENU -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/menu.css"/>
        <!-- ESTILIZAÇÃO DOS CAMPOS DE PESQUISA E BOTÕES DE LOGIN/CADASTRO -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/componentes/pesquisa.css"/>
      
        <!-- ESTILIZAÇÃO DO rodape -->
        <link rel="stylesheet" type="text/css" href="./../../css/container-layout/rodape.css"/>      

         <link rel="stylesheet" href="./../../css/telalogado.css">

       


    </head>


    <body>

    


    <header class="container-header">
            <div class="logo-principal">
                <img src="./../../css/images/logo/logosemf.png" class="img_logo_header" alt="Logo Flash Party">
                <h2>Flash Party</h2>
            </div>
            <!-- Dentro da TAG header colocamos as coisas que estarão  no topo do nosso site como o menu -->
             <div class="container-menu">
                <nav class>
                    <ul class="menu">
                        <li><a href="#">Locação</a>
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
         <div class="container">
        <!-- Header com informações do usuário -->
        <div class="header">
            <div class="user-info">
                <div class="welcome">
       
                    Bem-vindo, <span id="userName">Prestador XXX</span>! 👋
                </div>
                <button class="logout-btn" onclick="logout()">Sair</button>
            </div>
        </div>

        <!-- Ações principais -->
        <div class="actions">
            <button class="btn-primary" onclick="openModal()">
                ➕ Cadastrar Novo Produto
            </button>
        </div>

        <!-- Lista de produtos -->
        <div class="products-section">
            <h2 class="section-title">Meus Produtos Cadastrados</h2>
            <div class="products-grid" id="productsGrid">
                <!-- Produtos serão carregados aqui -->
            </div>
        </div>
    </div>

    <!-- Modal para cadastro/edição de produtos -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle">Cadastrar Produto</h2>
            <form id="productForm">
                <div class="form-group">
                    <label for="productName">Nome do Produto *</label>
                    <input type="text" id="productName" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="productPrice">Preço *</label>
                    <input type="number" id="productPrice" name="price" step="0.01" required>
                </div>
                
                <div class="form-group">
                    <label for="productCategory">Categoria *</label>
                    <select id="productCategory" name="category" required onchange="updateSubcategories()">
                        <option value="">Selecione uma categoria</option>
                        <option value="locacao">Locação</option>
                        <option value="profissionais">Profissionais</option>                        
                        <option value="parceiros">Parceiros</option>
                    </select>
                </div>

                <div class="form-group subcategory-group" id="subcategoryGroup" style="display: none;">
                    <label for="productSubcategory">Subcategoria *</label>
                    <select id="productSubcategory" name="subcategory">
                        <option value="">Selecione uma subcategoria</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="productDescription">Descrição</label>
                    <textarea id="productDescription" name="description" rows="4" placeholder="Descreva seu produto..."></textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn-primary">Salvar Produto</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Estrutura de categorias e subcategorias
        const categoryStructure = {
            'locacao': {
                name: 'Locação',
                subcategories: {
                    'brinquedos': 'Brinquedos',
                    'eletronicos': 'Eletrônicos',
                    'utensilios': 'Utensílios',
                    'decoracao': 'Decoração'
                }
            },
            'profissionais': {
                name: 'Profissionais',
                subcategories: {
                    'dj_shows': 'DJ e Shows',
                    'garcom': 'Garçom',
                    'seguranca': 'Segurança',
                    'limpeza': 'Limpeza',
                    'animador': 'Animador de Festa'
                }
            },
            'parceiros': {
                name: 'Parceiros',
                subcategories: {
                    'salgados': 'Salgados',
                    'bebidas': 'Bebidas',
                    'confeitaria': 'Confeitaria',
                    'bomboniere': 'Bomboniere'
                }
            }
        };

        // Simulação de dados de produtos com subcategorias
        let products = [
            {
                id: 1,
                name: "Piscina de Bolinhas Infantil",
                price: 150.00,
                category: "locacao",
                subcategory: "brinquedos",
                description: "Piscina de bolinhas coloridas para festas infantis, comporta até 10 crianças."
            },
            {
                id: 2,
                name: "DJ para Festas",
                price: 500.00,
                category: "profissionais",
                subcategory: "dj_shows",
                description: "DJ profissional com equipamento completo de som e iluminação."
            },
            {
                id: 3,
                name: "Salgados Variados",
                price: 25.00,
                category: "parceiros",
                subcategory: "salgados",
                description: "Bandeja com 50 salgados variados: coxinha, pastel, risole e kibe."
            },
            {
                id: 4,
                name: "Som Portátil JBL",
                price: 80.00,
                category: "locacao",
                subcategory: "eletronicos",
                description: "Caixa de som portátil com bluetooth, microfone sem fio incluso."
            }
        ];

        let editingProductId = null;

        // Função para atualizar subcategorias baseado na categoria selecionada
        function updateSubcategories() {
            const categorySelect = document.getElementById('productCategory');
            const subcategoryGroup = document.getElementById('subcategoryGroup');
            const subcategorySelect = document.getElementById('productSubcategory');
            
            const selectedCategory = categorySelect.value;
            
            if (selectedCategory && categoryStructure[selectedCategory]) {
                // Mostra o campo de subcategoria
                subcategoryGroup.style.display = 'block';
                subcategorySelect.required = true;
                
                // Limpa as opções atuais
                subcategorySelect.innerHTML = '<option value="">Selecione uma subcategoria</option>';
                
                // Adiciona as subcategorias da categoria selecionada
                const subcategories = categoryStructure[selectedCategory].subcategories;
                Object.keys(subcategories).forEach(key => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = subcategories[key];
                    subcategorySelect.appendChild(option);
                });
            } else {
                // Esconde o campo de subcategoria
                subcategoryGroup.style.display = 'none';
                subcategorySelect.required = false;
                subcategorySelect.innerHTML = '<option value="">Selecione uma subcategoria</option>';
            }
        }

        // Função para carregar e exibir produtos
        function loadProducts() {
            const grid = document.getElementById('productsGrid');
            
            if (products.length === 0) {
                grid.innerHTML = `
                    <div class="empty-state">
                        <div style="font-size: 48px; margin-bottom: 20px;">📦</div>
                        <h3>Nenhum produto cadastrado</h3>
                        <p>Clique em "Cadastrar Novo Produto" para começar!</p>
                    </div>
                `;
                return;
            }

            grid.innerHTML = products.map(product => `
                <div class="product-card">
                    <div class="product-name">${product.name}</div>
                    <div class="product-price">R$ ${product.price.toFixed(2).replace('.', ',')}</div>
                    <div class="category-tags">
                        <div class="product-category">${getCategoryName(product.category)}</div>
                        <div class="product-subcategory">${getSubcategoryName(product.category, product.subcategory)}</div>
                    </div>
                    <div class="product-description">${product.description || 'Sem descrição'}</div>
                    <div class="product-actions">
                        <button class="btn-edit" onclick="editProduct(${product.id})">Editar</button>
                        <button class="btn-delete" onclick="deleteProduct(${product.id})">Excluir</button>
                    </div>
                </div>
            `).join('');
        }

        // Função para obter nome da categoria
        function getCategoryName(category) {
            return categoryStructure[category]?.name || category;
        }

        // Função para obter nome da subcategoria
        function getSubcategoryName(category, subcategory) {
            return categoryStructure[category]?.subcategories[subcategory] || subcategory;
        }

        // Função para abrir modal
        function openModal() {
            document.getElementById('productModal').style.display = 'block';
            document.getElementById('modalTitle').textContent = 'Cadastrar Produto';
            document.getElementById('productForm').reset();
            document.getElementById('subcategoryGroup').style.display = 'none';
            document.getElementById('productSubcategory').required = false;
            editingProductId = null;
        }

        // Função para fechar modal
        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
        }

        // Função para editar produto
        function editProduct(id) {
            const product = products.find(p => p.id === id);
            if (product) {
                document.getElementById('productName').value = product.name;
                document.getElementById('productPrice').value = product.price;
                document.getElementById('productCategory').value = product.category;
                document.getElementById('productDescription').value = product.description || '';
                document.getElementById('modalTitle').textContent = 'Editar Produto';
                editingProductId = id;
                
                // Atualiza subcategorias e seleciona a correta
                updateSubcategories();
                setTimeout(() => {
                    document.getElementById('productSubcategory').value = product.subcategory;
                }, 100);
                
                document.getElementById('productModal').style.display = 'block';
            }
        }

        // Função para excluir produto
        function deleteProduct(id) {
            if (confirm('Tem certeza que deseja excluir este produto?')) {
                products = products.filter(p => p.id !== id);
                loadProducts();
            }
        }

        // Função para logout
        function logout() {
            if (confirm('Tem certeza que deseja sair?')) {
                alert('Logout realizado com sucesso!');
                // Aqui você redirecionaria para a página de login
                // window.location.href = 'login.php';
            }
        }

        // Event listener para o formulário
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const productData = {
                name: formData.get('name'),
                price: parseFloat(formData.get('price')),
                category: formData.get('category'),
                subcategory: formData.get('subcategory'),
                description: formData.get('description')
            };

            // Validação: verifica se subcategoria foi selecionada quando necessário
            if (productData.category && !productData.subcategory) {
                alert('Por favor, selecione uma subcategoria.');
                return;
            }

            if (editingProductId) {
                // Editando produto existente
                const index = products.findIndex(p => p.id === editingProductId);
                if (index !== -1) {
                    products[index] = { ...products[index], ...productData };
                }
            } else {
                // Criando novo produto
                const newProduct = {
                    id: Math.max(...products.map(p => p.id), 0) + 1,
                    ...productData
                };
                products.push(newProduct);
            }

            loadProducts();
            closeModal();
            
                fetch('save_product.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                    },
                body: JSON.stringify(productData)
                 })
             .then(response => response.json())
                .then(data => {
                if (data.status === "success") {
                    alert("Produto salvo no banco de dados com sucesso!");
                } else {
                    alert("Erro: " + data.message);
                }
            })
            .catch(error => {
                console.error("Erro na requisição:", error);
            });

        });

        // Fechar modal ao clicar fora
        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Carregar produtos ao inicializar a página
        document.addEventListener('DOMContentLoaded', function() {
            loadProducts();
        });
    </script>


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
        <script src="./../../js/carrossel.js"></script>
    </body>
</html>