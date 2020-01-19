<?php 
        $id = ($_POST['id']);
        include('con.php');
        $sqlSelect = "SELECT * FROM `PRODUTO` WHERE `PRODUTO`.`ID`=$id";
        $resulSelect = mysqli_query($con,$sqlSelect);
        $imagem_post = mysqli_fetch_assoc($resulSelect);


        echo "<pre>";
        $sql = "DELETE FROM `PRODUTO` WHERE `PRODUTO`.`ID` = $id";
        
        $consulta = mysqli_query($con,$sql);
        if($consulta){
            
            print_r($imagem_post);
            $imagem_post = $imagem_post['IMG'];
            unlink($imagem_post);
            echo 'ok';
        }
        header('location:index.php?deletado');
?>