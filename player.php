<<<<<<< HEAD
=======
<?php
if(isset($_POST['btn'])){
  require_once('pdo.php');
  require_once('functionrecup.php');
  validform();
}
?>

>>>>>>> 5bac0e8... projet2
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
    <link rel="stylesheet" href="html.css">
    <style>
      h1 {text-align: center;}
      </style>
  </head>
  <body style="background-color: grey;" class="h-100">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <div class="container p-4 bg-info  text-white col-md-12" >
    <img src="images/logo-QuizzSA.png" class="img-responsive float-left" alt="Cinque Terre"  style="background-color: #FFFFFF;" width="119" height="80">
      <h1>Le Plaisir De Jouer</h1>
     
  </div>    

 <div class="container h-100">
        <div class="row  h-100 justify-content-center align-items-center">
<<<<<<< HEAD
        <form class="needs-validation bg-light p-6 mb-6 shadow rounded" novalidate >
        <label for=""><h6>S'INSCRIRE</h6></label>
        <label for=""><p>Pour tester votre niveau</p></label>
        <div class="avatar">
          <img id="img"  alt="">
=======
        <form class="needs-validation bg-light p-6 mb-6 shadow rounded" novalidate enctype="multipart/form-data" method="post">
        <label for=""><h6>S'INSCRIRE</h6></label>
        <label for=""><p>Pour tester votre niveau</p></label>
        <div class="avatar">
        <img src="images/picture.jpg" class="img-responsive rounded-circle" id="img"  alt=""  width="100" height="100">
>>>>>>> 5bac0e8... projet2
        </div>
       
            <div class="form-group w-100 mb-2">
               
                    <label for="prenom">Prenom</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="prenom" placeholder="prenom" required>
=======
                    <input type="text" class="form-control w-100 rounded-pill" name="prenom" id="prenom" placeholder="prenom" required>
>>>>>>> 5bac0e8... projet2
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
               
            </div>
            <div class="form-group w-100 mb-2">
               
                    <label for="nom">Nom</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="nom" placeholder="nom" required>
=======
                    <input type="text" class="form-control w-100 rounded-pill" name="nom" id="nom" placeholder="nom" required>
>>>>>>> 5bac0e8... projet2
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
           <div class="form-group w-100 mb-2">
               
                    <label for="login">Login</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="login" placeholder="login" required>
=======
                    <input type="text" class="form-control w-100 rounded-pill" name="login" id="login" placeholder="login" required>
>>>>>>> 5bac0e8... projet2
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
               
            </div>
            <div class="form-group w-100 mb-2 ">
               
                    <label for="password">Password</label>
<<<<<<< HEAD
                    <input type="password" class="form-control" id="password" placeholder="password" required>
=======
                    <input type="password" class="form-control w-100 rounded-pill" name="password" id="password" placeholder="password" required>
>>>>>>> 5bac0e8... projet2
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
           <div class="form-group w-100 mb-2">
               
                    <label for="password">  Confirm-password</label>
<<<<<<< HEAD
                    <input type="password" class="form-control" id="password" placeholder="confirm-password" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
            <p><input type="submit" value="Créer compte" placeholder="Créer compte" class="connection" name="btn"></p><br>
          <input type="file" name="avatare" class="fichier" error="error-6" accept=".jpg, .JPG, .jpeg, .png, .PNG"
=======
                    <input type="password" class="form-control w-100 rounded-pill" name="confirmpassword" id="password" placeholder="confirm-password" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
            <p><input type="submit" value="Créer compte" placeholder="Créer compte" class="mt-5 float: left;" style="background-color: #31ADC8; border: 2px solid #31ADC8;border-radius: 10px; color: white;" name="btn"></p><br>
          <input type="file" name="avatare" class=" float: right;" style="background-color: #31ADC8; width:55%;  border: 2px solid #31ADC8; border-radius: 10px; color: white;"  error="error-6" accept=".jpg, .JPG, .jpeg, .png, .PNG"
>>>>>>> 5bac0e8... projet2
          onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])">
        </form>
        </div>
    </div>
    
</body>
</html>
<script src="functionvalid.js"></script>