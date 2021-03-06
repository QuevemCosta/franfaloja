<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="css/menu-descktop.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carrocel.css">
    <link rel="stylesheet" href="css/containner-produtos.css">
    <link rel="stylesheet" href="css/footer.css">


    <!--FONTES- 1 TEXTO COMUM 2 TITULOS E SUB TITOLOS-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

    <title>Franfaloja:home Oficial</title>
</head>

<body>
    <header>
        <h1>Franfaloja Oriximiná</h1>
        <div id="logo">
            <a href=""><img src="icons/logo.png" alt="Franfaloja Oriximiná"></a>
        </div>

        <div class="grup-btn-menu">
            <button type="menu" id="abre-menu">Menu</button>
            <button type="button" id="fecha-menu">x</button>
        </div>
        <div id="topo-contato" >
            <ul>
                
                <li><img src="icons/call.png" alt=""> (93)3544-1051</li>
                <li><img src="icons/whatsapp-logo-variant.png" alt=""> (93) 99138-1257</li>
                <li><img src="icons/black-back-closed-envelope-shape.png" alt=""> franfa54@hotmail.com</li>
            </ul>
        </div>

    </header>
    <div id="menu-descktop">
        <nav>
            <ul>
                <li class="ativo"><a href="index.html">Início</a></li>
                <li><a href="paginas/ofertas.php">Ofertas</a></li>
                <li><a href="paginas/contato.html">Contato</a></li>
                <li><a href="paginas/quem-somos.html">Quem somos</a></li>
            
            </ul>
        </nav>
    </div>
    <div id="menu-mobo">
        <nav>
            <ul>
                <li class="ativo"><a href="index.html">Início</a></li>
                <li><a href="paginas/ofertas.php">Ofertas</a></li>
                <li><a href="paginas/contato.html">Contato</a></li>
                <li><a href="paginas/quem-somos.html">Quem somos</a></li>
            </ul>
        </nav>
    </div>
    <main>
        <section id="carrocel">
            <div class="grup-carrocel">
                <div>
                    <img src="img/produto-1.jpg" alt="">

                </div>
                <div>
                    <img src="img/produto-2.jpg" alt="">

                </div>
                <div>
                    <img src="img/produto-3.jpg" alt="">

                </div>
                <div>
                    <img src="img/produto-5.jpg" alt="">

                </div>


            </div>
            <div style="clear: both;"></div>
        </section>
        
        <?
            include_once('base/output.php');
        ?>
    </main>

    <footer>
        <div class="midias-sociais">
            <a></a>
        </div>
        <p>&copy<a href="">OrixiSoft-2020</a></p>
    </footer>
    <footer id="content-contatos" class="ct-contatos">
        <div id="ct-email">
            <button type="button" class="fechar" onclick="fechaEmail()" >X</button>
            <p>franfa54@hotmail.com</p>
        </div>


        <div id="ct-telefone" class="ct-contatos">
            <button type="button" class="fechar" onclick="fechaTelefone()" >
                X        
            </button>
            <p>(93)3544-1051</p>
        </div>

        <button type="button" onclick="mostraEmeil()" >
            <img src="icons/black-back-closed-envelope-shape.png" alt="email franfaloja oriximina">
        </button type="button">

        <button type="button" onclick="mostraTelefone()" >
            <img src="icons/call.png" alt="Telefone franfaloja">    
        </button type="button">

        <a type="button" href="https://www.facebook.com/franfaloja" target="black" >
            <img src="icons/facebook-circular-logo.png" alt=" FacebookPagina Oficial franfaloja">    
        </a>
        <a href=" https://api.whatsapp.com/send?phone=+559399138-1257&text=Olá%20Desejo%20" target="blank" >
            <img src="icons/whatsapp-logo-variant.png" alt="whatsapp franfaloja">
        </a>
    </footer>
    <!--Javascriip-->
    <script src="js/main.js"></script>
    <script src="js/btn-menu.js"></script>
    <script src="js/paginacao.js"></script>
    <script src="js/pag-produto.js"></script>

</body>

</html>