window.addEventListener('load',async function(){
  fetch('../base.json').then(function(response){
     if(response.status == 200){
         var pro = response.json().then(function(retorno){
            console.log(retorno['produtos'])
            let url = window.location.search
            url = url.substring(1)//seleciona apartir do indici 1 eliminado o sinal de  "?"

            console.log(url)
            let dataProdutos = retorno['produtos'];
            
            for(let i = 0;i<dataProdutos.length;i++){
              //console.log(dataProdutos[i])

              let produto = dataProdutos[i]
              let codProduto = produto['cod']

              if(codProduto == url){
                
                const div = document.createElement("div");
                const containnerDescricao = document.createElement("div");
                const containnerImg = document.createElement("div");
                const h2 = document.createElement('h2');
                const img = document.createElement('img');
                const p = document.createElement('p');//Informações do produto "criar este item no db"

                const id =  document.createAttribute('id');
                const src = document.createAttribute('src');

                const descricao = document.createTextNode(produto["descricao"]);
                const info = document.createTextNode(produto["info"]);
  
                //Adicionando valores aos atributos html
                id.value = codProduto;
                src.value = "../"+produto['imagem'];
                p.value = info;


                div.setAttributeNode(id);
                div.appendChild(containnerImg).appendChild(img).setAttributeNode(src);
                div.appendChild(containnerDescricao).appendChild(descricao);
                div.appendChild(containnerDescricao).appendChild(p);




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
