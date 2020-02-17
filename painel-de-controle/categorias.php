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

    <style>
        #nova-categoria{
            display: none;
            border: 1px solid #9999;
            border-radius: 5px;
            width: 500px;
            margin: auto;
            text-align: center;
        }
        #nova-categoria h3{
            line-height: 50px;
        }
        #nova-categoria form{
            width: 100%;
            padding: 20px;
        }
        #nova-categoria form input,#nova-categoria form button{
            width: 80%;
            border-radius: 5px;
            border: 1px solid #9999;
            padding: 10px;
            display: block;
            margin: auto;
            margin-top: 10px
        }
        #nova-categoria form button{
            background:#fddf53;
            cursor: pointer;
            color:#2A5DA4;
            font-weight: 550;
        }
       
        table, th, td {
            border: 1px solid red;
        }
        table tr:nth-child(2n) {
                background: #ffff;
                color: #444;
        }
        table tr{
                background: #FDDF53;
                color: #444;
        }
        a{
            width: 120px;
        }
        section hr{
            margin:30px; 
        }
        @media screen and (max-width:700px){
            #nova-categoria{
                width: 80%;
            }
            #nova-categoria form input{
                width: 100%;
            }
        }
        @media screen and (max-width:320px){
            #nova-categoria{
                width: 95%;
                padding: 10px;

            }
        }
    </style>

</head>
<body>
    <header>
        <h3>Painel de Controle Franfaloja</h3>

        <a href="sair.php">Sair</a>
    </header>
    <section>

    <a class="button-geral" href="home.php" id="btn-nova-categoria" >Voltar</a>
        <hr>
            <button
            type="button"
            onclick="novaCategoria()" 
            class="button-geral"
            id="btn-nova-categoria" >
             Nova Categoria
            </button>

            <div id="nova-categoria" >
            <h3>Nova Categoria</h3>
            <button type="button" class="button-geral" onclick="fecharFormCategoria()" >Fechar</button>

            <form action="salva-categoria-json.php" method="post">
                <input type="text" name="categoria" placeholder="Nome da Categoria" >
                <input type="text" name="descricao-categoria" placeholder="Descrição"  >
                <button type="submit" >Cadastrar</button>
            </form>
        </div>
    </section>
    <section>
        <div>
            <table id="lista-categorias">
                <tr>
                    <th>Nº</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                </tr>
            </table>
        </div>
    </section>

    <script>

        window.addEventListener('load',function(){
            fetch('consulta-categorias.php').then(function(response){
                if(response.status==200){
                    fetch('../base/json-categorias.json').then(function(response){
                        //console.log(response)
                        if(response.status == 200){
                            response.json().then(function(json){
                                
                                let $categorias = json['categorias']
                                
                                
                                for(let i = 0;i<$categorias.length;i++ ){
                                    //console.log($categorias[1])
                                   let $item =$categorias[i]

                                    let $id = $item[0]
                                    let $nome = $item[1].toLowerCase()
                                    let $descricao_categoria = $item[2].toLowerCase()

                                    console.log($nome)

                                    let tr = document.createElement('tr')
                                    let td1 = document.createElement('td')
                                    let td2 = document.createElement('td')
                                    let td3 = document.createElement('td')

                                    
                                    let id = document.createTextNode($id)
                                    let nome = document.createTextNode($nome)
                                    let descricao_categoria = document.createTextNode($descricao_categoria)


                                    td1.appendChild(id)
                                    td2.appendChild(nome)
                                    td3.appendChild(descricao_categoria)

                                    tr.appendChild(td1);
                                    tr.appendChild(td2);
                                    tr.appendChild(td3);
                                    //console.log(td1)

                                    document.getElementById('lista-categorias').appendChild(tr)
                                    
                                }

                            })
                        }
                    })
                }
            })
        })

        function novaCategoria(){
            document.getElementById('nova-categoria').style.display="block"
            document.getElementById('btn-nova-categoria').style.display="none"
        }
        function fecharFormCategoria(){
            document.getElementById('nova-categoria').style.display="none"
            document.getElementById('btn-nova-categoria').style.display="block"
        }

    </script>
</body>
</html>