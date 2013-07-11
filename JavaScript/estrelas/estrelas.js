
function muda(event){
                  
   var x = event.layerX;
    
    var saida = parseInt(x) - parseInt(9); 
    
    if(saida <= parseInt(100))
    {
        document.getElementById("estrela").style.width = (saida + "%"); 
        document.getElementById("valor").value = x;
    }
    
}