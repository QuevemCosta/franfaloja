function paginacao(id) {
    listPag = ['eletro', 'musica', 'cama-mesa'];
    remover = listPag.indexOf(id)
    removido = listPag.splice(remover, 1)
    pagAtual = removido

    //-----------------
    listDesabledPags = listPag.length
    //----- se a pagina clicada nao esta na listPag e porque esta ativa--------
    if (!listPag.indexOf[removido]) {//se removido é igual a -1
        //pagina atual = display block
        
        //console.log(listPag.indexOf(removido))
        document.getElementById(pagAtual).className = "btn-ativo"
        for(let i = 0;i<=listDesabledPags;i++){
            document.getElementById(pagAtual).style.display='block'
    
        }

    }
    //console.log(listDesabledPags)
    for(let i = 0;i<=listDesabledPags;i++){
        //tudo que for diferente de pagina atual = display none
        document.getElementById(listPag[i]).style.display = "none"

    }

}