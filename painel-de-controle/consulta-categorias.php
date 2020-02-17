<?php 
require_once('valida-acesso.php');
require_once('../base/con.php');

$sql = "SELECT * FROM `categorias`";

$dados = mysqli_query($con,$sql) or die("Erro".mysqli_error($con));

if($dados){
    $dados =  mysqli_fetch_all($dados);
    $cont = count($dados);
    for($i = 0;$i<$cont;$i++){

        $categoria= $dados[$i];
        

        $categorias [] = $categoria;

    }
    $json = [ 'categorias'=> $categorias];
    $json = json_encode($json);

    file_put_contents('../base/json-categorias.json',$json);

    header('Location:categorias.php');

}else{
    echo 'erro';
}




?>