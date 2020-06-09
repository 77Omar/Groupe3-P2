<?php
session_start();
?> <!--v-->
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="html.css">
    <link rel="shortcut icon" href="images/logo-QuizzSA.png">
    <style>
      h1 {text-align: center;}
      </style>
  </head>
  <body style="background-image:url('images/img-bg.png')">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <div class="container p-4 text-Black col-md-12" style="background-color: #C4C4C4;" >
    <img src="images/logo-QuizzSA.png" class="img-responsive float-left" alt="Cinque Terre" style="background-color: #FFFFFF;" width="119" height="80">
    <!--<button type="button" class="btn btn-light float-right">Deconnexion</button>-->
    <a href="Deconnexion.php" class="btn btn-light float-right">Deconnexion</a>
      <h1>Le Plaisir De Jouer</h1>
  </div>
  
  <!--
  <div class="container mt-2 col-md-12" >
  <p class=" bloc bg-light mt-2 p-2 "></p>
  </div>-->
  <div class="container-fluid bloc mt-2 w-100 col-md-10" id="form-admin">
    <div class="row justify-content-start align-items-center" style="background:linear-gradient(180deg, #C4C4C4 11.84%, rgba(255, 255, 255, 0) 100%), #C4C4C4; height:150px;">
  <?php
  echo '<img src="images/'.$_SESSION['avatar'].'" class="img-responsive rounded-circle" id="img"  alt=""  width="100" height="100" >';
  ?><!--v-->
   <p><?=$_SESSION['prenom']?><br>
   <?=$_SESSION['nom']?></p>
   </div>

   <div class="row" style="height: 800px;">
     <div class="col-2 #C4C4C4"></div>
     <div class="col-5 " style='background: linear-gradient(180deg, #C4C4C4 11.84%, rgba(255, 255, 255, 0) 100%), #C4C4C4;'></div>
     <div class="col-5 #C4C4C4">
     <button type="button" class="w-100 p-2" style='background: linear-gradient(180deg, #C4C4C4 11.84%, rgba(255, 255, 255, 0) 100%), #C4C4C4;'>TOP SCORE</button><br>
     <button type="button" class="w-100 mt-5 p-2" style='background: linear-gradient(180deg, #C4C4C4 11.84%, rgba(255, 255, 255, 0) 100%), #C4C4C4;'>MON MEILLEUR SCORE</button>
     </div>
   </div>
  </div>
  <script src="jquery-3.5.1.js"></script>

</body>
</html>