<?php
    echo "<pre>>";
    print_r($_POST);
    $imagem = $_FILES['imagem'];
    print_r($_FILES);


    function salvaImagem ($name){
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $info = $_POST['info'];
        $preco_a_vista = $_POST['preco_a_vista'];
        $preco_parcelado = $_POST['preco_parcelado'];
        $status = $_POST['status'];


        if($name != NULL){
            $nome_final = '../db-img/'.time().'.jpeg';
            echo $nome_final;
            
            //move imagem para pasta especificada no servidor
            move_uploaded_file($name['tmp_name'],$nome_final);
            
            //salvando o endereço na base
            include('../base/con.php');
            $sql = "INSERT INTO `new_table` (`descricao`, `categoria`, `preco_a_vista`, `preco_parcelado`, `imagem`, `status`,`info`) VALUES ('$descricao', '$categoria', '$preco_a_vista', '$preco_parcelado', '$nome_final', '$status', '$info')";
            mysqli_query($con,$sql) or die("Erro".mysqli_error($con));
        }
        
    }

    function checaTipoImg ($tipo,$imagem){
        $tipo = $tipo['type'];
        echo $tipo.'<br>';
        if($tipo != 'image/jpeg' and $tipo != 'image/png' ){
            echo 'Tipo de arquivo não suportado. Aceitamos apenas os formatos jpeg, jpg ou png!<br> O
             arquivo que esta tentando inputar é do tiopo:'.$tipo;
             //header('location:index.php?falha');

        }
        else{
            salvaImagem($imagem);
            header('location:index.php?ok');
        }
    }

    checaTipoImg($imagem,$imagem);
?>