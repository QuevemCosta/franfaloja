const allProdutos = document.querySelectorAll('.section-produtos')

allProdutos.forEach(output)

function output(item, index,arrey){
  let id_item = arrey[index].id

  //console.log(id_item)
  let filhos = document.querySelector('#'+id_item)

  nos_filhos = filhos.parentNode.children;

  console.log(nos_filhos)
}