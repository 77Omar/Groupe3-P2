<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="html.css">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      
  <div class="container">
      <div class="col-lg-10 col-xl-10 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body p-5">
           <input type="text" class="form-control rounded-pill col-lg-4 float-left" placeholder="Parametrer Votre Questions" required>
           <button type="button" class="btn btn-light rounded-pill col-lg-4 float-right" id="question" name="envoie" >Enregistrer</button>
          <form class="form-signin" method="post" id="creequestion">
          <div class="form-group" id="inputs">
            <div class="type"><label for="exampleFormControlTextarea2">Questions</label>
            <textarea class="form-control rounded-pill form" name="question" id="typrea" rows="3"></textarea><br>
            </div>
           <div class="type">
            <label for="exampleFormControlTextarea2">Nbre de points</label>
            <input type="number" id="num" class="col-md-7 rounded-pill form" name="points" value=""><br><br>
           </div>
            <div class="selec">
            <label for="sel1">Type de Reponse</label>
            <div class="row">
            <div class="row float-right col-lg-3">
            <button type="button" class="" onclick="onAddInput()"><img src="" href="" alt="">+</button>
            </div>
            <select class="form-control rounded-pill col-lg-9 form" id="select" name="type_reponse" onchange="texte()">
            <option value="">Donnez le type de reponse</option>
            <option value="Texte">Texte</option>
            <option value="choix_simple">Simple</option>
            <option value="choix_multiple">Multiple</option>
             </select><br>
             </div>
            
             <input type="hidden" name="numb_input" id="valeur">
             </div>
            </div>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
  <script src="jquery-3.5.1.js"></script>
  <script src="creationquestion.js"></script>
  <script>
    var  $typrea=$('#typrea'),
         $num=$('#num'),
         $select=$('#select');
     $(document).ready(function() {
      $(document).on('click','#question',function(e){
      var inputArray=[$typrea,$num,$select];
      inputArray.forEach(elt=>{
        if(elt.val()===""){
          elt.css('borderColor', 'red');
          e.preventDefault();
        }
      })
    });
    $(document).on('keyup','.form',function(e){
     $(this).css({
       borderColor: 'green',
       color: 'green'
     });
    });
    });


    //Question
$(document).ready(function(){
    let nbrRow=0;
  $(document).on('click','#question',function(){
    nbrRow++;
   let sr=($('#creequestion').serialize());
   
        $.ajax({
            url: 'BDQuestion.php',
            type: 'post',
            data:sr,
            dataType:"html",
            success: function (data, statut) {
             if(data ==="ok"){
                 alert(data);
             }else{
               alert("no");
             }
         }
        });
    });
    });

  </script>
  </body>
</html>

