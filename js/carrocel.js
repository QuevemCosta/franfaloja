setInterval(
    function (){
        let figure = document.querySelectorAll('figure')
        
        let setado = document.querySelector('.set')

        switch(setado.id){
            case 'item-item-1':
                document.getElementById('item-item-1').className="unset"
                document.getElementById('item-item-4').className="set"
                document.getElementById('item-item-3').className="unset"
                document.getElementById('item-item-2').className="unset"
                break;

            case 'item-item-4':
                document.getElementById('item-item-1').className="unset"
                document.getElementById('item-item-3').className="set"
                document.getElementById('item-item-4').className="unset"
                document.getElementById('item-item-2').className="unset"
                break;
        
            case 'item-item-3':
                document.getElementById('item-item-1').className="unset"
                document.getElementById('item-item-2').className="set"
                document.getElementById('item-item-3').className="unset"
                document.getElementById('item-item-4').className="unset";
                break;
            case 'item-item-2':
                document.getElementById('item-item-2').className="unset"
                document.getElementById('item-item-1').className="set"
                document.getElementById('item-item-3').className="unset"
                document.getElementById('item-item-4').className="unset";
                break;
                    
                
        }
    },5000
)