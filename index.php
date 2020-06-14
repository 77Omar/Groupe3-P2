<?php
$message="";
$message='<b style="color:red ">login ou mot de pass incorrect</b>';
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo-QuizzSA.png">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      h1 {text-align: center;}
      </style>
  </head>
  <body style="background-color: grey;" class="h-75">

    <div class="container p-4 bg-info  text-white col-md-12" >
    <img src="images/logo-QuizzSA.png" class="img-responsive float-left" alt="Cinque Terre"  style="background-color: #FFFFFF;" width="119" height="80">
      <h1>Le Plaisir De Jouer</h1>
     
  </div>    
  <div class="container h-100">
        
             
  <div class="row  h-100 justify-content-center align-items-center">
  <form class="needs-validation  p-3 w-50 bg-light p-5 shadow rounded" id="forms" method="post" novalidate >
    <div class="sms" id="messager"><p><?=$message?></p></div>
      <div class="container p-2 bg-info  text-white col-md-10">
        <h3 style="text-align:center">Register</h3>
               
        </div>
    <div class="form-group mb-4">
      <label for="login">Login</label>
      <input type="text" class="form-control rounded-pill" id="login" name="login" placeholder="Entrer votre login" required>
      <div class="valid-feedback">Ok !</div>
    <div class="invalid-feedback">Champs obligatoire</div>
                    
    </div>
   <div class="form-group mb-4">
    <label for="password">Password</label>
    <input type="password" class="form-control rounded-pill" name="password" id="password" placeholder="Entrer votre password" required>
    <div class="valid-feedback">Ok !</div>
    <div class="invalid-feedback">Champs obligatoire</div>
    </div>
    <button class="btn bg-info w-100 mb-3" name="btn"  id='submit' type="submit" style="color:white">Connexion</button>
    <a href="player.php?role=player" role="player" class="btn bg-info w-100" type="submit" style="color:white">S'inscrire pour jouer</a>
      
  </form>
</div>
         </div>
         <script src="jquery-3.5.1.js"></script>
         <script src="Functionajax.js"></script>

</body>
</html>