<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<section class="containner-produtos">
            <nav>
                <ul>
                    <li title="Cama Mesa e banho">
                        <button onclick="paginacao('cama-mesa','btn-cama-banho')" class="btn-ativo" id="btn-cama-banho">
                            <img src="icons/cama.png" alt="">
                        </button>
                    </li>
                    <li title="Eletrodomesticos">
                        <button onclick="paginacao('eletro','btn-eletro')" id="btn-eletro">
                            <img src="icons/eletro.png" alt="">
                        </button>
                    </li>
                    <li title="Instrumentos musicais">
                        <button onclick="paginacao('musica','btn-musica')" id="btn-musica">
                            <img src="icons/music.png" alt="">
                        </button>
                    </li>
                </ul>
            </nav>
            <section id="cama-mesa">
                <h2>Moveis</h2>
            <div class="grup-produtos">

            <?php
            include('con.php');
            $sql = "SELECT * FROM `new_table`";
            $result = mysqli_query($con,$sql);

            while( $post_Produto = mysqli_fetch_assoc($result)){
                

                $code = $post_Produto['cod'];
                $descircao = $post_Produto['descricao'];
                $categoria = $post_Produto['categoria'];
                $preco_a_viata = $post_Produto['preco_a_vista'];
                $preco_parcelado = $post_Produto['preco_parcelado'];
                $imagem = $post_Produto['imagem'];
                $status = $post_Produto['status'];
            

            ?>
    
    
                    <!------------------------>
                    <div class="produto-click <?echo $categoria?>" onclick="pagProduto(<?echo $code;?>)">
                        <img src="base/<?echo $imagem;?>" alt="">
                        <h2><?echo $descircao;?></h2>
                        <span class="av"> R$ <?echo $preco_a_viata;?></span>
                        <p>ou</p>
                        <span>R$ <?echo $preco_parcelado;?> em ate 10X</span>
                        
                    </div>
            <?}?>
                 </div>
    
            </section>
        
            <section class="disabled" id="musica">
                <h2>Instrumentos Musicais</h2>
            </section>
            <section class="disabled" id="eletro">
                <h2>Eletro</h2>
            </section>
        </section>
</body>
        <script src="../js/main.js"></script>
</html>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<section class="containner-produtos">
            <nav>
                <ul>
                    <li title="Cama Mesa e banho">
                        <button onclick="paginacao('cama-mesa','btn-cama-banho')" class="btn-ativo" id="btn-cama-banho">
                            <img src="icons/cama.png" alt="">
                        </button>
                    </li>
                    <li title="Eletrodomesticos">
                        <button onclick="paginacao('eletro','btn-eletro')" id="btn-eletro">
                            <img src="icons/eletro.png" alt="">
                        </button>
                    </li>
                    <li title="Instrumentos musicais">
                        <button onclick="paginacao('musica','btn-musica')" id="btn-musica">
                            <img src="icons/music.png" alt="">
                        </button>
                    </li>
                </ul>
            </nav>
            <section id="cama-mesa">
                <h2>Moveis</h2>
            <div class="grup-produtos">    
                    <!------------------------>
                    <div class="produto-click <?echo $categoria?>" onclick="pagProduto(<?echo $code;?>)">
                        <img src="base/<?echo $imagem;?>" alt="">
                        <h2><?echo $descircao;?></h2>
                        <span class="av"> R$ <?echo $preco_a_viata;?></span>
                        <p>ou</p>
                        <span>R$ <?echo $preco_parcelado;?> em ate 10X</span>
                        
                    </div>
                 </div>
    
            </section>
        
            <section class="disabled" id="musica">
                <h2>Instrumentos Musicais</h2>
            </section>
            <section class="disabled" id="eletro">
                <h2>Eletro</h2>
            </section>
        </section>
