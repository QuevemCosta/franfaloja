<?php 

session_start();

print_r($_SESSION);

$usuario_autenticado = false;

$userApp = Array ( 
    Array('user'=>'root','pass'=>''),
    Array('user'=>'quevem97','pass'=>'E174xdbq4O')
);

foreach ($userApp as $user) {
    if($user['user']== $_POST['user'] && $user['pass']==$_POST['pass']){
        $usuario_autenticado = true;
    }
}


if($usuario_autenticado){

    $_SESSION['autenticado']= 'SIM';
    header('Location:home.php');

}else{
    $_SESSION['autenticado']= 'NÃO';
    header('Location:index.php?login=erro');
}


?>