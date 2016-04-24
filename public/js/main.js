$(document).ready(function(){
    
    $('.plus-btn').click(function(){
        var addNumber = $(this).prev().children('input').val();
        if(addNumber >= 999){
            addNumber = 999;
        } else {
             addNumber++;
            $(this).prev().children('input').val(addNumber); 
        }
            
    });
    
    $('.minus-btn').click(function(){
        var minusNumber = $(this).next().children('input').val();
        if(minusNumber <= 0 ) {
            minusNumber = 0;
        } else {
            minusNumber--;
            $(this).next().children('input').val(minusNumber); 
        
        }
        
         
       
    });
});