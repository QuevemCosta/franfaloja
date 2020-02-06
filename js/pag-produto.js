window.addEventListener('load',async function(){
  fetch('base.json').then(function(response){
     if(response.status == 200){
         var pro = response.json().then(function(retorno){

            let url = window.location.search
            url = url.substring(1)//seleciona apartir do indici 1 eliminado o sinal de  "?"

            let dataProdutos = retorno['produtos'];
            
            for(let i = 0;i<dataProdutos.length;i++){
              //console.log(dataProdutos[i])

              let produto = dataProdutos[i]
              let codProduto = produto['cod']

              if(codProduto == url){
                
                const div = document.createElement("div");
                const containnerDescricao = document.createElement("div");
                const containnerImg = document.createElement("div");
                const img = document.createElement('img');
                const h2 = document.createElement('h2');
                const span = document.createElement("span");
                const lagend = document.createElement("legend");
                const p = document.createElement('p');
                const a = document.createElement('a')
                
            
                const id =  document.createAttribute('id');
                const src = document.createAttribute('src');
                const href = document.createAttribute('href')

                const descricao = document.createTextNode(produto["descricao"]);
                const info = document.createTextNode(produto["info"]);
                const btnComprar = document.createTextNode('Comprar via Whatsapp');
                const preco_a_vista = document.createTextNode("R$ "+produto["preco_a_vista"]);
                const preco_parcelado = document.createTextNode("Ou "+"R$ "+produto["preco_parcelado"]+" em até 10X");
                
  
                //Adicionando valores aos atributos html
                id.value = codProduto;
                src.value = produto['imagem'];
                href.value = "https://api.whatsapp.com/send?phone=+559399138-1257&text=Ol%C3%A1%20tenho interece%20em%20" +produto['descricao']+"%20 codigo "+produto['cod'];

                div.setAttributeNode(id);
                div.appendChild(containnerImg).appendChild(img).setAttributeNode(src);

                div.appendChild(containnerDescricao).appendChild(h2).appendChild(descricao);
                div.appendChild(containnerDescricao).appendChild(p).appendChild(info);

                div.appendChild(containnerDescricao).appendChild(span).appendChild(preco_a_vista);
                div.appendChild(containnerDescricao).appendChild(lagend).appendChild(preco_parcelado);

                div.appendChild(containnerDescricao).appendChild(a).appendChild(btnComprar);
                div.appendChild(containnerDescricao).appendChild(a).setAttributeNode(href);

                document.getElementById('saida-produto').appendChild(div)


              }

            }

         })
     }
     else{
        alert('Não foi possivel buscar o tmepo.\nErro: '+response.status + '-'+response.statusText)
    }
 })
})
