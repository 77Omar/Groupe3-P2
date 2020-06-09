<?php
$error="";
session_start();
if(isset($_GET['role'])){
 $_SESSION['role']=true;
}
?>

<!doctype html>
<html lang="en">
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

 <div class="container">
        <div class="row justify-content-center align-items-center">
        <form class="needs-validation bg-light p-6 mb-5 shadow rounded" id="formplay" novalidate enctype="multipart/form-data" method="post">
        <div class="sms" id="error"><p><?=$error?></p></div>
        <label for=""><h6>S'INSCRIRE</h6></label>
        <label for=""><p>Pour tester votre niveau</p></label>
        <div class="avatar">
        <img src="images/picture.jpg" class="img-responsive rounded-circle" id="img"  alt=""  width="100" height="100">
        </div>
    <div class="form-group w-100 mb-2">
               
           <label for="prenom">Prenom</label>
          <input type="text" class="form-control w-100 rounded-pill field" name="prenom" id="prenom" placeholder="prenom" required>
          <div class="valid-feedback">Ok !</div>
         <div class="invalid-feedback">Champs obligatoire</div>
               
    </div>
    <div class="form-group w-100 mb-2">
         <label for="nom">Nom</label>
         <input type="text" class="form-control w-100 rounded-pill field" name="nom" id="nom" placeholder="nom" required>
         <div class="valid-feedback">Ok !</div>
         <div class="invalid-feedback">Champs obligatoire</div>
   </div>
   <div class="form-group w-100 mb-2">
        <label for="login">Login</label>
        <input type="text" class="form-control w-100 rounded-pill field" name="login" id="login" placeholder="login" required>
        <div class="valid-feedback">Ok !</div>
        <div class="invalid-feedback">Champs obligatoire</div>
               
   </div>
   <div class="form-group w-100 mb-2 ">
      <label for="password">Password</label>
      <input type="password" class="form-control w-100 rounded-pill field" name="password" id="password" placeholder="password" required>
       <div class="valid-feedback" id="pass">Ok !</div>
      <div class="invalid-feedback" id="pass">Champs obligatoire</div>
  </div>
  <div class="form-group w-100 mb-2">
      <label for="password">  Confirm-password</label>
      <input type="password" class="form-control w-100 rounded-pill field" name="confirmpassword" id="password2" placeholder="confirm-password" required>
      <div class="valid-feedback"  id="pass">Ok !</div>
      <div class="invalid-feedback" id="pass">Champs obligatoire</div>
  </div>
  <p><input type="submit" id="but_upload" value="Créer compte" placeholder="Créer compte" class="mt-5 float: left;" style="background-color: #31ADC8; border: 2px solid #31ADC8;border-radius: 10px; color: white;" name="btn"></p><br>
  <input type="file" name="file" id="file" class="float-right" style="background-color: #31ADC8; width:55%;  border: 2px solid #31ADC8; top:1px; border-radius: 10px; color: white;"  error="error-6" accept=".jpg, .JPG, .jpeg, .png, .PNG"
   onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])">
 </form>
</div>
</div>
<script src="jquery-3.5.1.js"></script>

<script>

var $prenom=$('#prenom'),
    $nom=$('#nom'),
    $login=$('#login'),
    $password=$('#password'),
    $password2=$('#password2'),
    $file= $('#file');
    $(document).ready(function() {
    $(document).on('click','#but_upload',function(e){
      var inputArray=[$prenom,$nom,$login,$password,$password2,$file];
      inputArray.forEach(el=>{
        if(el.val()===""){
          el.css('borderColor', 'red');
          e.preventDefault();
        }
      })
    })
    $(document).on('keyup','.field',function(e){
     $(this).css({
       borderColor: 'green',
       color: 'green'
     });
    });
  });
 
 /*
  if($password.val()!=$password2.val()){
    $('#pass').html('Vos mots de pass ne correspond pas!').css({color:'red', display:'block'});
   e.preventDefault();
  }else{
    $(document).on('keyup','#password2',function(){
      $('#pass').css("display","none");
    });
  }
  */

 /* $('#password.form-control').keyup(function(){
    $('span.error-keyup-password').remove();
    var inputVal = $(this).val();
    var len = data.length;
    var passwordReg = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*[\W_]).{3,}$/;
       if(!passwordReg.test(inputVal)){
           $(this).after('<span class="error error-keyup-password">Password must content at least 1 number, 1 letter and 1 special character.</span>');
       }else{
           $('span.error-keyup-password').hide();
}});*/

//Valid password
$('#password2.form-control').keyup(function(){
    $('span.error-keyup-confirmpassword').remove();
        var password = $('#password').val();
        var confirmpassword = $('#password2').val();
        if(password!==confirmpassword){
            $(this).after('<span class="error error-keyup-confirmpassword">Passwords do not match.</span>');
       }
       });
</script>

<script src="Functionajax.js"></script>
 
</body>
</html>
         
         