<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce DTEC 2024</title>
    <link rel="stylesheet" href="assets/css/style3.css">
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
        
        <br>
    </div>

    <!-- INÍCIO PRODUTOS DETALHES  -->
    <div class="corpo-categorias ver-produto">
        <div class="linha">

            <div class="col-2">
                <img src="assets/img/correia2.jpg" alt="" id="produtoImg">

                        </div>
                        

                        <div class="col-2">
                            <p>Correia dentada</p>
                            <h1>Compre com desconto</h1>
                            <h4>R$ 299,90 </h4>
                            <form action="" method="post">

                                
                                <br>
                                <a href="carrinho.php">
                                <button class="btn-adicionar" onclick="adicionarAoCarrinho('Correia dentada', 299.90)">Adicionar ao Carrinho</button>
                                </a>
                            </form>

                            <h3>Descrição:</h3>
                            <p>Correia dentada de ótima qualidade!</p>
                        </div>

                    </div>
                </div>
        
                <!-- FIM PRODUTOS DETALHES -->

                <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
                <div class="corpo-categorias">
                    <div class="linha linha2">
                        <h2>Produtos Relacionados</h2>
                        <p>Veja Mais</p>

                    </div>
                </div>
                <!-- FIM TÍTULO PRODUTOS DETALHES -->


                <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
                <div class="corpo-categorias">

                    <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

                    <!-- alter 1.. deixar apenas 1 produto-->
                    <div class="linha">

                        <!-- INÍCIO ITEM PRODUTO-->

                        <div class="col-4">
                            <img src="assets/img/chaveing.jpg" alt="">

                            <h4>
                                Chave Inglesa
                            </h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                            <p>R$ 20,00</p>


                        </div>

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
            
                            <p>R$ 299,90</p>
            
                        </div>

                        <div class="col-4">
                            <img src="assets/img/motor2.webp" alt="">
            
                            <h4>Motor á gasolina para fusca</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
            
                            <p>R$ 999,90</p>
            
            
                        </div>

                        <!-- FIM ITEM PRODUTO-->

                        <!-- FIM ITEM PRODUTO-->


                    </div>
                    <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

                </div>
                <!-- FIM PRODUTOS EM DESTAQUE alter 3 -- retirar paginação -->



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

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <script src="assets/js/app.js"> </script>
</body>
<script>
        
    function adicionarAoCarrinho(name, price) {
        const pedido = {
            nome: name,
            preco: price,
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