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
   <style>
      h1 {text-align: center;}
      </style>
  </head>
  <body>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div id="scrollZone" class="col">
  <table class="table table-bordered" style="background-color:#C4C4C4;">
          <h1>Liste des joueurs par score</h1>
    <thead class="rounded-pill text-info">
    <tr class="text-center">
      <th scope="col">N°</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Score</th>
      <th scope="col" colspan="2">Choix</th>
    </tr>
  </thead>
  <tbody id="tbody">
  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
       <div  class="form-group">
       <input type="hidden" id="num" class="form-control">
       </div>
       <div  class="form-group">
       <label for="Num">Prenom</label>
       <input type="text" id="prenom" class="form-control">
       </div>
       <div  class="form-group">
       <label for="Num">Nom</label>
       <input type="text" id="nom" class="form-control">
       </div>
      </div>
      <div class="modal-footer">
         <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  </tbody>
</table>
</div>

<script src="jquery-3.5.1.js"></script>
<script>
$(document).ready(function(){

   let offset=0;
  const tbody=$('#tbody');
  $.ajax({
    type:'POST',
    url: "traitementplay.php",
    data:{
    limit:5,offset:offset
  },
    dataType:"JSON",
    success: function(data){
      tbody.html('')
      printData(data,tbody);
        offset+=5
    },
  });
  //srcoll
  const scrollZone = $('#scrollZone')
 scrollZone.scroll(function(){
  
  const st = scrollZone[0].scrollTop;
  const sh = scrollZone[0].scrollHeight;
  const ch = scrollZone[0].clientHeight;
    console.log(st,sh,ch);
  if(sh-st<=ch){
    $.ajax({
    type:'POST',
    url: "traitementplay.php",
    data:{
    limit:5,offset:offset},
    dataType:"JSON",
    success: function(data){
      printData(data,tbody);
        offset+=5;
    }
  });
  }
 });

  //function
  function printData(data,tbody){
    $.each(data, function(indice,player){
      tbody.append(`
      <tr class="text-center">
        <td scope="row">${player.Num}</td>
        <td>${player.prenom}</td>
        <td>${player.nom}</td>
        <td>${player.score}</td>
        <td><button type="button" id="modif" class="btn btn-info"  data-toggle="modal" data-target="#myModal">modifier</button></td>
        <td><button type="button" class="btn btn-danger" id="delete">supprimer</button></td>
      </tr>
      `);
    });
  }
 
  //Suppression
   $(document).on('click','#delete',function(){
     $(this).parents('tr').remove();
        let num=$(this).parents('tr').find('td').eq(0).html();
        //alert(num);
        $.ajax({
    type:'POST',
    url: "Delete.php",
    data:{num:num},
    dataType:"html",
    success: function(data){
      printData(data,tbody);
    },
    });

   });

   //Modifier
   $(document).on('click','#modif',function(){
     let num=$(this).parents('tr').find('td').eq(0).html();
     let prenom=$(this).parents('tr').find('td').eq(1).html();
     let nom=$(this).parents('tr').find('td').eq(2).html();
     $('#num').attr('value',num);
     $('#prenom').attr('value',prenom);
     $('#nom').attr('value',nom);
    });
   $(document).on('click','#save',function(){
    let prenom=$('#prenom').val(),
    nom=$('#nom').val(),
    Num= $('#num').val();
        
        $.ajax({
        type:'POST',
        url: "Modifier.php",
       data:{Num:Num,
        prenom:prenom,
        nom:nom
       },
       dataType:"html",
       success: function(data){
       printData(data,tbody);
     },
    });

   });


   
});

</script>
  </body>
</html>