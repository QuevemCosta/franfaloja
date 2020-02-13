<?php

use function PHPSTORM_META\map;

include('con.php');
    $sql = "SELECT * FROM `new_table`";
    $result = mysqli_query($con,$sql);

    $dados =  mysqli_fetch_all($result);
    echo "<pre>";
   //print_r($res);


    $cont = (count($dados));
    for($i = 0;$i<$cont;$i++){

        $produto = $dados[$i];
        

        $produtos [] = $produto;

    }

    $json = [ 'produtos'=> $produtos];

    $json = json_encode($json,JSON_PRETTY_PRINT);
    echo($json);

    file_put_contents('base.json',$json);


?>
?>