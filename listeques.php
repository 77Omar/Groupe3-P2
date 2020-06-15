<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!doctype html>
<html lang="en">

  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--Ce Slim permet de bloquer la page chargement-->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <form class="form-signin col-lg-12">
    <div class="container">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row ">
          <div class="card-body p-5 col-lg-12">
          <input type="number" class="number col-md-2" name="nbre_question" errore="errore-1" value="<?=$nbr?>">
          <label for="" id="nbre">Nbre de question/jeu</label>
          <button type="submit" class="ok" name="btn_q" value="">OK</button>

        </div>
      </div>
    </div>
        <div class=" thiapathioli"></div>
  </div>

    </form>
    <script src="jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function () {
            let offset = 0;
            let thiapathioli = $('.thiapathioli');
            $.ajax({
                url: 'listraitement.php',
                type: 'post',
                dataType: 'json',
                data: {
                    limit: 5,
                    offset: offset
                },
                success: function (data, statut) {
                    alert(statut);

                    showData(data, thiapathioli);
                }
            });

            // function showDta to show data received by the treatment
            function showData(data, liste) {
                $.each(data, (indice, king) => {
                    if (king.type==='Texte'){
                        liste.append(`<div class="row">${king.Nques}__<p>${king.question}</p></div><div class="row"><div class="col-6"><input  type="text" name="" value="${king.reponse}" disabled></div></div>`);
                    }
                    else if (king.type==='choix_simple'){
                        liste.append(`<div class="row">${king.Nques}__<p>${king.question}</p></div>`);

                        resp=king.reponse.trim().split(' ');
                        $.each(resp , function (indice, row) {
                            if (row!==""){
                                liste.append(`<div class="row"><div class="col-1"><input  type="radio" name="radio" disabled></div><div class="col-6">${row}</div></div>`);
                            }
                        })
                    }else {
                        liste.append(`<div class="row">${king.Nques}__<p>${king.question}</p></div>`);
                        resp=king.reponse.trim().split(' ');
                        $.each(resp , function (indice, row) {
                            if (row!==""){
                                liste.append(`<div class="row"><div class="col-1"><input  type="checkbox" name="" disabled></div><div class="col-6">${row}</div></div>`);
                            }
                        })
                    }
                   
                })

            }
        });
    </script>
  </body>
</html>