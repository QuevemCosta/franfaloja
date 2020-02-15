window.addEventListener('load',async function(){
  fetch('base/export-json.php').then(function(response){
     if(response.status == 200){

      fetch('base/base.json').then(function(response){

      
          response.json().then(function(json){

          console.log(json['produtos'])

            let url = window.location.search
            url = url.substring(1)//seleciona apartir do indici 1 eliminado o sinal de  "?"
            let dataProdutos = json['produtos']
            for(let i = 0;i<dataProdutos.length;i++){
              
              let item = dataProdutos[i]

              let $cod = item[0];
              let $descricao = item[1];
              //let $categoria = item[2];
              let $preco_a_vista = item[3];
              let $preco_parcelado = item[4];
              let $imagem = 'franfaloja-com-ajax/'+item[5];
              let $info = item[7];
              //let $status = item[6];
              
              console.log($imagem)
              console.log(location)

              if($cod == url){
                
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
                const target = document.createAttribute('target')

                const descricao = document.createTextNode($descricao);
                const info = document.createTextNode($info);
                const btnComprar = document.createTextNode('Comprar via Whatsapp');
                const preco_a_vista = document.createTextNode("R$ "+$preco_a_vista);
                const preco_parcelado = document.createTextNode("Ou "+"R$ "+$preco_parcelado+" em até 10X");
                
  
                //Adicionando valores aos atributos html
                id.value = $cod;
                src.value = $imagem;
                target.value='_blank'
                href.value = "https://api.whatsapp.com/send?phone=+559399138-1257&text=Ol%C3%A1%20tenho interece%20em%20" +$descricao+"%20 codigo "+$cod;

                div.setAttributeNode(id);
                div.appendChild(containnerImg).appendChild(img).setAttributeNode(src);

                div.appendChild(containnerDescricao).appendChild(h2).appendChild(descricao);
                div.appendChild(containnerDescricao).appendChild(p).appendChild(info);

                div.appendChild(containnerDescricao).appendChild(span).appendChild(preco_a_vista);
                div.appendChild(containnerDescricao).appendChild(lagend).appendChild(preco_parcelado);

                
                div.appendChild(containnerDescricao).appendChild(a).appendChild(btnComprar);
                div.appendChild(containnerDescricao).appendChild(a).setAttributeNode(href);
                div.appendChild(containnerDescricao).appendChild(a).setAttributeNode(target);

                document.getElementById('saida-produto').appendChild(div)


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
