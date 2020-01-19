<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $base = 'franfaloja';

    $con = mysqli_connect($host,$user,$pass,$base);
    if($con){
        //echo'funciona';
    }
    else{
        echo 'erro'.   mysqli_error($con);
    }


?>