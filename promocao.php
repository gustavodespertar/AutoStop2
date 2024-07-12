<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce DTEC 2024</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>

    <div class="novoMenu">

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">

                <div class="logo">
                    <img src="assets/img/novo.png" alt="DESPERTARTEC" width="300px">
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


    <!-- INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">

        <div class="linha linha2">
            <h2>Promoções</h2>
           
        </div>


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

        <div class="linha">

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/correia2.jpg" alt="">

                <h4>Correia dentada</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 299,90</p>
                <br>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 239,92 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Correia dentada',299.90)">Adicionar ao Carrinho</button>

            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/discoplato.jpg" alt="">

                <h4>KIT DE EMBREAGEM COMPLETO</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 299,90</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 239,92 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('KIT DE EMBREAGEM COMPLETO', 299.90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/freioadisco368,00.jpg" alt="">

                <h4>Freio a disco</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 359,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 287,20 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Freio a disco', 359.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/bobinaignicao.jpg" alt="">

                <h4>Bomba de </h4>
                <h4>alta pressão</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 2000,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 1600,00 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Bomba de Alta Pressão',2000.00)">Adicionar ao Carrinho</button>


            </div>

            <div class="col-4">
                <img src="assets/img/bobina2.jpg" alt="">

                <h4>Bobina de ignição</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 1500,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 1200,00 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Bobina', 1500.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/bobina.jpg" alt="" class="produto-img">

                <h4>Lona de freio</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 30,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 24,00 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Bobina', 30.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/motor2.webp" alt="" class="produto-img">

                <h4>Motor à gasolina para fusca</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 999,90</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 790,92 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Motor à gasolina para fusca', 999.90)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/oleomoto.png" alt="">

                <h4>Óleo para moto</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 35,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 28,00 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Óleo para moto', 35.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/oleocarro.jpg" alt="">

                <h4>Óleo para carro</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 45,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 36,00 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Óleo para carro', 45.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/pneus.jpg" alt="">

                <h4>Pneu </h4>
                <h4>Aro 16</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>De R$ 464,00</p>
                <h1>20% OFF</h1>
                <p class="preco-promocional">Por R$ 371,20 no PIX</p>
                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Pneu Aro 16', 464.00 )">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- FIM ITEM PRODUTO-->


        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

    </div>
    <!-- FIM PRODUTOS EM DESTAQUE-->


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
                    <p>Venha conhecer nossa loja nas redes! </p>
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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>
<script>
function adicionarAoCarrinho(name, price) {
    // Calcular o preço com 20% de desconto
    let precoComDesconto = price * 0.8; // 20% de desconto

    const pedido = {
        nome: name,
        preco: precoComDesconto.toFixed(2), // Formata para 2 casas decimais
    };

    // Armazenar os dados do pedido em localStorage
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push(pedido);
    localStorage.setItem('pedidos', JSON.stringify(pedidos));

    // Redirecionar para a página do carrinho
    window.location.href = 'carrinho.php';
}

</script>
</html>