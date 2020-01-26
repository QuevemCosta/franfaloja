window.addEventListener('load',async function(){
    fetch('base.json').then(function(response){
       if(response.status == 200){
           var pro = response.json().then(function(retorno){
                console.log(retorno)
               let dataProduto = retorno["produtos"]
               for(i=0;i<dataProduto.length;i++){

                   let item = dataProduto[i]
                   
                   const div = document.createElement("div");
                   const h2 = document.createElement("h2");
                   const span = document.createElement("span");
                   const img = document.createElement("img");
                   const lagend = document.createElement("legend");

                   const descricao = document.createTextNode(item["descricao"]);
                   const preco_a_vista = document.createTextNode("R$ "+item["preco_a_vista"]);
                   const preco_parcelado = document.createTextNode("Ou "+"R$ "+item["preco_parcelado"]+" em 10X");

                   const classe = document.createAttribute('class');
                   const src_image = document.createAttribute('src');
                   
                   src_image.value =item['imagem']
                   classe.value = item['categoria'];

                   div.setAttributeNode(classe);
                   div.appendChild(img).setAttributeNode(src_image);

                   div.appendChild(h2).appendChild(descricao);
                   div.appendChild(span).appendChild(preco_a_vista);
                   div.appendChild(lagend).appendChild(preco_parcelado);

                   if(div.className == 'cama'){
                   
                       document.getElementById('cama').appendChild(div);
                   }
                   if(div.className == 'eletro'){
                   
                   document.getElementById('eletro').appendChild(div);

                   }
                   if(div.className == 'musica'){
                   
                   document.getElementById('musica').appendChild(div);

                   }

               }

           })
       }
       else{
          alert('Não foi possivel buscar o tmepo.\nErro: '+response.status + '-'+response.statusText)
      }
   })
})