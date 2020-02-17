<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Painel Franfaloja</title>
    
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/reset.css">

</head>
<body>
    <main>
        <section id="tela-login">
            <fieldset>
                <legend>Login Franfaloja</legend>

                <form action="valida-login.php" method="post">
                    <input type="text" name="user" placeholder="Usuario">
                    <input type="password" name="pass" placeholder="Senha">
                    
                    <button type="submit">Entrar</button>
                    
                    <?php if(isset($_GET['login'])&& $_GET['login'] == 'erro'){?>
                        <p  >Usuario ou senha invalido(s)</p>
                    <?}?>

                    <a href="#">Esqueceu a senha?</a>
                </form>
            </fieldset>
        </section>
    </main>
</body>
</html>