<?php
    $host = 'quevemcosta.com';
    $user = 'quevem97_public';
    $pass = 'XxK4=6+5~*mq';
    $base = 'quevem97_franfaloja';

    $con = mysqli_connect($host,$user,$pass,$base);
    if($con){
        echo'funciona';
    }
    else{
        echo 'erro'.   mysqli_error($con);
    }


?>