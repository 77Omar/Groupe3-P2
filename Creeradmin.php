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
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--
  <div class="container mt-2 col-md-12" >
  <p class=" bloc bg-light mt-2 p-2 "></p>
  </div>-->
   <div class="row ">
    <form class="needs-validation p-4 mb-6 shadow rounded ml-5 w-75" novalidate method="post"  enctype="multipart/form-data" style="background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%), #C4C4C4;">
        <label for=""><h6>S'INSCRIRE</h6></label>
        <label for=""><p>Pour tester votre niveau</p></label>
        <img src="images/picture.jpg" class="img-responsive thumbnail-circle float-right" id="img1"  alt="" width="250" height="150">
       
            <div class="form-group w-100">
               
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control w-50 rounded-pill" name="prenom" id="prenom" placeholder="prenom" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
               
            </div>
            <div class="form-group w-100">
               
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control w-50 rounded-pill" name="nom" id="nom" placeholder="nom" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
           <div class="form-group w-100">
               
                    <label for="login">Login</label>
                    <input type="text" class="form-control w-50 rounded-pill" name="login" id="login" placeholder="login" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
               
            </div>
            <div class="form-group w-100">
               
                    <label for="password">Password</label>
                    <input type="password" class="form-control w-50 rounded-pill" name="password" id="password" placeholder="password" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
           <div class="form-group w-100">
               
                    <label for="password">  Confirm-password</label>
                    <input type="password" class="form-control w-50 rounded-pill" name="confirmpassword" id="password" placeholder="confirm-password" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="invalid-feedback">Champs obligatoire</div>
           </div>
            <p><input type="submit" value="Créer compte" placeholder="Créer compte" class="connection" name="btn"></p><br>
          <input type="file" name="avatare" class="fichier" error="error-6" accept=".jpg, .JPG, .jpeg, .png, .PNG"
          onchange="document.getElementById('img1').src=window.URL.createObjectURL(this.files[0])">
        </form>
    </div>
    
  </div>

</body>
</html>