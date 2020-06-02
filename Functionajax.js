$("#admin").click(function(){
     
    $.ajax({
       url : 'Creeradmin.php',
       type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){ // success est toujours en place, bien sûr !
          $(code_html).appendTo("#form-admin")
       },

       error : function(resultat, statut, erreur){
            alert('data '+erreur)
       }

    });
   
});


//

$(function(){
    
    $("#joueur").click(function(){
         
        $.ajax({
           url : 'listeplayer.php',
           type : 'GET',
           dataType : 'html',
           success : function(code_html, statut){ // success est toujours en place, bien sûr !
              $(code_html).appendTo("#form-admin")
           },
    
           error : function(resultat, statut, erreur){
                alert('data '+erreur)
           }
    
        });
       
    });
    })
    
