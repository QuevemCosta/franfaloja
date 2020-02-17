<? require_once('valida-acesso.php') ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Franfaloja</title>


    <link rel="stylesheet" href="../css/painel-de-controle.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/footer.css">


</head>
<body>
    <header>
        <h3>Painel de Controle Franfaloja</h3>

        <a href="sair.php">Sair</a>
    </header>
    <section>
    <a class="button-geral" href="home.php" id="btn-nova-categoria" >Voltar</a>
<hr>

        <div id="form-cadastro-produtos">
            <fieldset>
                <legend>Cadastro de Produtos</legend>
                <form action="input.php" method="post" enctype="multipart/form-data" >

                    <input type="text"
                    name="descricao"
                    placeholder="Produto"
                    title="Breve descriçõs do produto" >

                    <label for="info">Informações do Produto</label>
                    <textarea type="text"
                    id="info" 
                    name="info" 
                    cols="15"
                    rows="10"
                    maxlength="255" 
                    placeholder="Informações do Produto" 
                    title="Informações Sobre o Produto. Será mostrado na pagina de 
                    vendas como detales do produto" ></textarea>
                    
                    <select name="categoria" id="categoria">
                        <option value="">--Categoria--</option>
                        <option value="cama">Cama</option>
                        <option value="eletro">Eletrodometicos</option>
                        <option value="informatica">Informatica</option>
                        <option value="telefonia">Telefones e Celulares</option>
                        <option value="eletro-portateis">Eletro portatei</option>
                        <option value="cameras-filmadoras">Cameras e filmadoras</option>
                        <option value="musica">Instrumentos musicais</option>
                        <option value="musica">Departamento Infantil</option>
                        <option value="bicicleta">Bicicletas</option>
                        <option value="academia">Academia</option>
                        <option value=""><a href="#">Nova Categoria</a></option>
                    </select>

                    <div>
                        <label for="avista">Preço a vista</label>
                        <input type="text" name="preco_a_vista" id="avista" >

                        <label for="avista">Parcelado</label>
                        <input type="text" name="preco_parcelado" id="parcelado" >
                    </div>
                    <input type="text" name="status" id="status" >


                    <input type="file" id="imagem"  name="imagem">

                <button type="reset">Limpar</button>
                <button type="submit" >Cadastrar</button>
                </form>
            </fieldset>
        </div>
    </section>    
</body>
</html>