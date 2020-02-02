let setNavCategoria = function (e) {
    let set = document.getElementById('categorias-nav').className
    if(set == 'unset'){
        set.className="set"
        document.getElementById('categorias-nav').style.display="flex"
        document.getElementById('desk-menu').style.display="none"

        
    }
}


let btnFechar = document.getElementById('btn-fechar')

btnFechar.addEventListener('click',function(ev){

    if(btnFechar.value =='fechar-nav-categorias'){
        let set = document.getElementById('categorias-nav').className

            document.getElementById('categorias-nav').style.display="none"
            document.getElementById('desk-menu').style.display="block"

    }
},false)

document.getElementById('btn-categoria').addEventListener('click', setNavCategoria,false);