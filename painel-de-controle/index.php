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
    </header>
    <section>

        <div id="form-cadastro-produtos">
            <fieldset>
                <legend>Cadastro de Produtos</legend>
                <form action="input.php" method="post">

                    <input type="text"
                    name="descricao"
                    placeholder="Produto"
                    title="Breve descriçõs do produto" >

                    <input type="text" 
                    name="info" 
                    maxlength="255" 
                    placeholder="Informações do Produto" 
                    title="Informações Sobre o Produto. Será mostrado na pagina de 
                    vendas como detales do produto" >
                    
                    <select name="categoria" id="categoria">
                        <option value="">--Categoria--</option>
                        <option value=""><a href="#">Nova Categoria</a></option>
                    </select>

                    <div>
                        <label for="avista">Preço a vista</label>
                        <input type="text" name="preco_a_vista" id="avista" >

                        <label for="avista">Parcelado</label>
                        <input type="text" name="preco_parcelado" id="parcelado" >
                    </div>

                    <input type="text" neme="status" placeholder="Status" >

                    <input type="file" id="imagem"  name="imagem">

                <button type="reset">Limpar</button>
                <button type="reset">Cadastrar</button>
                </form>
            </fieldset>
        </div>
    </section>    
</body>
</html>