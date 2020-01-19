<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crude Franfaloja</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .form{
            margin: 10px;
            width: 420px;
            border: 1px solid grey;
        }
        form{
            width: 100%;
        }
        form input{
            display: block;
            width: 80%;
            margin: 10px;
            padding: 10px;
        }
        #saida{
            width: 500px;
            position: absolute;
            right: 10px;
            top: 10px;
            margin: 10px;
            overflow: auto;
        }
        #saida img{
            width: 320px;
        }
        #img{

            background: #222;
            padding: 20px;
            cursor: pointer;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="form" >
        <h2>Cadastro de produtos no site</h2>

        <form action="input.php" method="post" enctype="multipart/form-data" autocomplete="off" >
    
             
            <input type="text"  name="descricao" placeholder="Descrição do produto">
            <input type="text"  name="categoria" placeholder="Categoria">
            
            <input type="text"  name="preco-a-vista" placeholder="Preço a vista">
            <input type="text"  name="preco-parcelado" placeholder="Preço parcelado">
            <input type="text"  name="status" placeholder="status">
            <input type="file" id="img"  name="imagem">

            <input type="submit" value="Salvar">
            <input type="reset" value="Limpar">
        
        </form>
    </div>
    <div id="saida">
        <?php
            include('output.php')
        ?>
    </div>
</body>
</html>