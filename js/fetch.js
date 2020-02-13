
function pagProduto(click){
    //console.log('pag-produto.html?'+click,'_self')
    window.open('pag-produto.html?'+click,'_self')
         
 }



window.addEventListener('load',async function(){
    fetch('base/export-json.php').then(function(response){
       if(response.status == 200){

        //console.log(location)
        fetch('base/base.json').then(function(response){
            response.json().then(function(json){
                //console.log(json)

                let dataProduto = json["produtos"]

                for(i=0;i<dataProduto.length;i++){
                
                    let item = dataProduto[i]
                    console.log(item)

                    let $cod = item[0];
                    let $descricao = item[1];
                    let $categoria = item[2];
                    let $preco_a_vista = item[3];
                    let $preco_parcelado = item[4];
                    let $imagem = item[5];


                    const div = document.createElement("div");
                    const h2 = document.createElement("h2");
                    const span = document.createElement("span");
                    const lagend = document.createElement("legend");
                    const img = document.createElement("img");
                    
                    const descricao = document.createTextNode($descricao);
                    const preco_a_vista = document.createTextNode("R$ "+$preco_a_vista);
                    const preco_parcelado = document.createTextNode("Ou "+"R$ "+$preco_parcelado+" em até 10X");
                    
                    const id = document.createAttribute('id')
                    const click = document.createAttribute('onclick')
                    const classe = document.createAttribute('class');
                    const src_image = document.createAttribute('src');
                    
                    click.value = "pagProduto("+ $cod+")"
                    id.value = $cod;
                    src_image.value =$imagem;
                    classe.value = $categoria;

                    div.setAttributeNode(id);
                    div.setAttributeNode(click);
                    div.setAttributeNode(classe);
                    div.appendChild(img).setAttributeNode(src_image);

                    div.appendChild(h2).appendChild(descricao);
                    div.appendChild(span).appendChild(preco_a_vista);
                    div.appendChild(lagend).appendChild(preco_parcelado);

                    if(div.className == $categoria){
                    
                        document.getElementById($categoria).appendChild(div);
                    }
                    if(div.className == 'eletro'){
                    
                    document.getElementById('eletro').appendChild(div);

                    }
                    if(div.className == 'musica'){
                    
                    document.getElementById('musica').appendChild(div);

                    }
                }

            })
        })
   
       }
       else{
          alert('Não foi possivel buscar o tmepo.\nErro: '+response.status + '-'+response.statusText)
      }
   })
})
