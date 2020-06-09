setTimeout(() => {
   document.getElementById("messager").innerHTML='';
                    
 }, 1000);


$(document).ready(function(){
   //initial
 $('#navbar').load('Creeradmin.php');
 //handle page click
 $('li a').click(function(){
    let page = $(this).attr('href');
    $('#navbar').load(page+'.php');
    return false;
     
 })
});

/*
$("#admin").click(function(){
     
    $.ajax({
       url : 'Creeradmin.php',
       type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){ // success est toujours en place, bien sûr !
          $(code_html).appendTo("#form-admin") //On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       error : function(resultat, statut, erreur){
            alert('data '+erreur)
       }

    });
   
});
*/

//page index
$(document).ready(function(){
   $("#forms").submit(function(){
      $.ajax({
         type:'POST',
         url:'identifiant.php',
         data:{
          login :$('#login').val(),
          password :$('#password').val(),
          role :$('player').val()
       },
       success: function(data,statut){
         if(data==="admin"){
            alert(data)
            window.location.href='admin.php';
         }else if(data==="player"){
            alert(data)
            window.location.href='pageplayer.php';
         }
          
        }

      });
    
   });
});


//player
$(document).ready(function(){
 $("#formplay").submit(function(){
  var formplayer= document.getElementById('formplay')
       var fd = new FormData(formplayer);
       $.ajax({
           url: 'Inscrire.php',
           type: 'post',
           data: fd,
           contentType:false,
           processData:false,
           success: function (data, statut) {
              alert(statut)
            if(data === "ok"){
                window.location.href = "index.php"
            }else alert("error")
        }
       });
   });
   });


 
 /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
             *et d'appliquer les styles de validation aux différents éléments de formulaire*/
 /*(function() {
     'use strict';
     window.addEventListener('load', function() {
       let forms = document.getElementsByClassName('needs-validation');
       let validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
           }
           form.classList.add('was-validated');
         }, false);
       });
     }, false);
   })();*/

   setTimeout(() => {
      document.getElementById("error").innerHTML='';
                       
    }, 1000);