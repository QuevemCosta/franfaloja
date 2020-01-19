function paginacao(id,click ){
    let listPag = ['eletro', 'musica', 'cama-mesa'];
    let remover = listPag.indexOf(id)
    let removido = listPag.splice(remover, 1)
    let pagAtual = removido
    
    let listBtn =['btn-cama-banho','btn-eletro','btn-musica']
    let positon_btn = listBtn.indexOf(click)
    let atual = listBtn.splice(positon_btn,1)

    const listBtnDeseblad = listBtn.length
        
    if (!listPag.indexOf[positon_btn]) {

        document.getElementById(atual).className='btn-ativo'
        for(let i=0;i<listBtnDeseblad;i++){
            document.getElementById(listBtn[i]).className="btn-desabled"
            
        }

    }
    //-----------------
    
    //----- se a pagina clicada nao esta na listPag e porque esta ativa--------
    let listDesabledPags = listPag.length
    if (!listPag.indexOf[removido]) {//se removido é igual a -1
        //pagina atual = display block
        
        //console.log(listPag.indexOf(removido))
        document.getElementById(pagAtual).className = "btn-ativo"
        for(let i = 0;i<=listDesabledPags;i++){
            document.getElementById(pagAtual).style.display='block'
    
        }

    }
    //console.log(listDesabledPags)
    for(let i = 0;i<listDesabledPags;i++){
        //tudo que for diferente de pagina atual = display none
        document.getElementById(listPag[i]).style.display="none"
    }
    

}
function mostraEmeil(){
    document.getElementById('ct-email').style.display="block"
}
function fechaEmail(){
    document.getElementById('ct-email').style.display="none"
}
function mostraTelefone(){
    document.getElementById('ct-telefone').style.display="block"
}
function fechaTelefone(){
    document.getElementById('ct-telefone').style.display="none"
}