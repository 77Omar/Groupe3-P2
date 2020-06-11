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
          <div class="card-body">
           <input type="text" class="form-control rounded-pill col-lg-4 float-left" placeholder="Parametrer Votre Questions" required>
           <button type="button" class="btn btn-light rounded-pill col-lg-4 float-right">Deconnexion</button>
          <form class="form-signin">
          <div class="form-group">
            <label for="exampleFormControlTextarea2">Questions</label>
            <textarea class="form-control rounded-pill" id="exampleFormControlTextarea2" rows="3"></textarea><br>
            <label for="exampleFormControlTextarea2">Nbre de points</label>
            <input type="number" class="col-md-7 rounded-pill" name="nbre_question" errore="errore-1" value="<?=$nbr?>"><br><br>
            <label for="sel1">Type de Reponse</label>
            <select class="form-control rounded-pill" id="sel1">
            <option>Donnez le type de reponse</option>
            <option>Texte</option>
            <option>Simple</option>
            <option>Multiple</option>
             </select><br>
             <div class="row float-right col-lg-6">
             <button type="button" class="btn btn-light rounded-pill">Enregistrer</button>
             </div>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>