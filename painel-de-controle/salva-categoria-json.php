<?php 
require_once('valida-acesso.php');
require_once('../base/con.php');
    //print_r($_POST);

    $categoria = $_POST['categoria'];
    $descricao_categoria = $_POST['descricao-categoria'];

    $sql = "INSERT INTO `categorias` (`nome`, `descricao_cate`) VALUES ('$categoria','$descricao_categoria')";
        $querey = mysqli_query($con,$sql) or die("Erro".mysqli_error($con));
        if($querey){
            echo 'funcionouy';
    header('Location:categorias.php');

        }        


?>