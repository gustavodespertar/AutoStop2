<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce DTEC 2024</title>
    <link rel="stylesheet" href="assets/css/style4.css">
</head>

<body>

    <div class="novoMenu">

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">

                <div class="logo">
                    <img src="assets/img/1-removebg-preview.png" alt="DESPERTARTEC" width="300px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="empresa.php" title="">Empresa</a></li>
                        <li><a href="contato.php" title="">Contatos</a></li>
                        <li><a href="promocao.php" title="">Promoções</a></li>
                    </ul>
                </nav>
                <!-- FIM   MENU NAVEGAÇÃO -->

                <a href="carrinho.php" title="">
                    <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">
                </a>
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!-- FIM NAVEGAÇÃO-->

        </div>
        <!-- FIM DO CONTEÚDO-->

    </div>


    <!-- INÍCIO CARRINHO DE COMPRAS -->
    <div class="corpo-categorias carrinho-compras">

        <section class="cart-items" id="cart-items">
            <h2>Seu Carrinho de Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th> <!-- Cabeçalho para o botão de remoção -->
                    </tr>
                </thead>
                <tbody id="pedido-table-body">
                    <!-- Os pedidos serão adicionados aqui -->
                </tbody>
            </table>
            <div class="total-price" id="total-price"></div>
            <button class="checkout-button" onclick="finalizarPedido()">Finalizar Pedido</button>
        </section>

    </div>

    <!-- INÍCIO RODAPÉ-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">

                <div class="rodape-col-1">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="assets/img/logo-2.png" alt="">
                    <p>orem Ipsum is simply dummy text of the </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons </li>
                        <li>Blog </li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>


                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook </li>
                        <li>Instagram </li>
                        <li>Youtube</li>
                        <li>Twiter</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. DTEC 2024.
            </p>

        </div>

    </footer>
    <!-- FIM RODAPÉ-->

    <script>
        // Função para carregar os pedidos do localStorage
        function carregarPedidos() {
            const tableBody = document.getElementById('pedido-table-body');
            const totalPrice = document.getElementById('total-price');

            let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
            let totalPriceValue = 0;

            // Objeto para rastrear os produtos no carrinho
            let carrinhoProdutos = {};

            pedidos.forEach((pedido, index) => {
                totalPriceValue += parseFloat(pedido.preco);

                // Verifica se o produto já está no carrinho
                if (carrinhoProdutos[pedido.nome]) {
                    // Incrementa a quantidade
                    carrinhoProdutos[pedido.nome].quantidade++;
                } else {
                    // Adiciona o produto ao carrinho
                    carrinhoProdutos[pedido.nome] = {
                        quantidade: 1,
                        preco: parseFloat(pedido.preco)
                    };
                }
            });

            // Limpa a tabela
            tableBody.innerHTML = '';

            // Adiciona os produtos na tabela
            Object.keys(carrinhoProdutos).forEach(nomeProduto => {
                const produto = carrinhoProdutos[nomeProduto];

                const row = tableBody.insertRow();
                const cellNome = row.insertCell(0);
                const cellPreco = row.insertCell(1);
                const cellQuantidade = row.insertCell(2);
                const cellRemover = row.insertCell(3); // Célula para o botão de remoção

                cellNome.textContent = nomeProduto;
                cellPreco.textContent = `R$ ${produto.preco}`;
                cellQuantidade.textContent = produto.quantidade;

                // Botão de remoção
                const removeButton = document.createElement('button');
                removeButton.textContent = 'Remover';
                removeButton.onclick = () => removerProduto(nomeProduto); // Chama a função para remover o produto pelo nome
                cellRemover.appendChild(removeButton);
            });

            totalPrice.textContent = `Total: R$ ${totalPriceValue.toFixed(2)}`;
        }

        // Função para remover o produto do carrinho
        function removerProduto(nomeProduto) {
            let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
            let encontrouProduto = false;

            // Percorre os pedidos
            for (let i = 0; i < pedidos.length; i++) {
                if (pedidos[i].nome === nomeProduto) {
                    // Encontrou o produto, decrementa a quantidade
                    pedidos.splice(i, 1); // Remove o produto do array
                    encontrouProduto = true;
                    break;
                }
            }

            // Atualiza o localStorage com os pedidos atualizados
            localStorage.setItem('pedidos', JSON.stringify(pedidos));

            // Se encontrou o produto no carrinho, recarrega a lista de pedidos
            if (encontrouProduto) {
                carregarPedidos();
            }
        }

        // Função para finalizar o pedido
        function finalizarPedido() {
            let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];

            // Verifica se há pedidos para finalizar
            if (pedidos.length > 0) {
                // Cria um objeto FormData para enviar os dados
                let formData = new FormData();
                formData.append('finalizar_pedido', true);
                formData.append('pedidos', JSON.stringify(pedidos));

                // Cria uma instância do objeto XMLHttpRequest
                let xhr = new XMLHttpRequest();

                // Define a função de retorno de chamada quando a requisição estiver concluída
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // Limpa o localStorage após o sucesso do pedido
                        localStorage.removeItem('pedidos');
                        // Exibe uma mensagem de sucesso
                        alert('Crie uma conta ou entre para efetuar sua compra!');
                        // Redireciona para a página 'minha-conta.php'
                        window.location.href = 'minha-conta.php';
                    } else {
                        // Exibe uma mensagem de erro
                        alert('Erro ao finalizar o pedido. Por favor, tente novamente.');
                    }
                };

                // Define o método HTTP e o URL do arquivo PHP
                xhr.open('POST', 'conexao.php', true);

                // Envia a requisição com os dados do formulário
                xhr.send(formData);
            } else {
                // Exibe uma mensagem se não houver pedidos para finalizar
                alert('Não há itens no carrinho.');
            }
        }

        // Chamando a função para carregar os pedidos ao carregar a página
        window.onload = carregarPedidos;

        // Função de exemplo para menu celular
        function menucelular() {
            alert('Menu celular clicado!');
        }
    </script>

</body>

</html>
