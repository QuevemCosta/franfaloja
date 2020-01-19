<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .post-em-edicao{
            width: 420px;
            text-align: left;
            border: 1px solid #333;
            background: grey;
            display: inline-block;

        }
        .post-em-edicao img{
            width: 50%;
        }
        button{
            cursor:pointer;
            padding:10px
        }
        nav {
            padding: 20px;
        }
        nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    
<?php
    $id = ($_POST['id']);
    include('con.php');

    $sql = "SELECT * FROM `PRODUTO` WHERE `PRODUTO`.`ID` = $id";

    $resul = mysqli_query($con,$sql);

    $post_editar = mysqli_fetch_row($resul);

?>
    <div class="post-em-edicao" id="deleta" >
        <h2>Deletar Poste</h2>
        <span><? echo $post_editar[0]; ?></span>
        <h2><? echo $post_editar[2];?></h2>
        <p><? echo $post_editar[3];?></p>
    
        <img src="<? echo $post_editar[1];?>">
        <span>R$ <? echo $post_editar[4];?></span>
        <form action="deleta-post.php" method="post">

            <input type="text" name="id" value="<? echo $id?>" style="display:none">

            <button type="submit" title="Esta opção apaga o produto da base de dados e não
                estará mais disponivel no site
                "
                >Deletar</button>       
        </form>

    </div>
    <div class="post-em-edicao" id="update" >
        <form action="atualiza-post.php" method="post">
                <h2>Atualizar poste</h2>
                <span><? echo $post_editar[0]; ?></span>
                <h2><? echo $post_editar[2];?></h2>
                <label for="">
                    <legend>Descricao</legend>
                    <input value="<? echo $post_editar[3];?>">
                </label>
            
                <label>
                    <legend>
                        Mudar imagem
                    </legend>
                        <input type="file" enctype="multipart/form-data" name="img" id="img">
                    </label>
                <span>R$ <? echo $post_editar[4];?></span>

            <input type="text" name="id" value="<? echo $id?>" style="display:none">

            <button type="submit" title="Esta opção apaga o produto da base de dados e não
                estará mais disponivel no site
                "
                >Atualizar</button>       
        </form>

    </div>

<?php

?>
</body>

</html>