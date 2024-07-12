<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - E-commerce DTEC 2024</title>
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


    <!-- INÍCIO FORMULÁRIO DE CONTATO -->
    <section class="contato-form">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <h2>Entre em Contato</h2>
                    <form action="enviar_email.php" method="POST">
                        <input type="text" name="nome" placeholder="Seu Nome" required>
                        <input type="email" name="email" placeholder="Seu Email" required>
                        <input type="text" name="assunto" placeholder="Assunto" required>
                        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-2">
                    <h2>Informações de Contato</h2>
                    <div class="info-contato">
                        <p><ion-icon name="location-outline"></ion-icon> Avenida do Estado, 1234 - Centro, São Paulo - SP</p>
                        <p><ion-icon name="call-outline"></ion-icon> (11) 96000-9600</p>
                        <p><ion-icon name="mail-outline"></ion-icon> contato@autostop.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM FORMULÁRIO DE CONTATO -->


    <!-- INÍCIO RODAPÉ -->
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
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. DTEC 2024.
            </p>
        </div>
    </footer>
    <!-- FIM RODAPÉ -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
