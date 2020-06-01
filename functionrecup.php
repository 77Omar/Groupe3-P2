<?php
 function validform(){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $login =sha1($_POST['login']);
    $password = sha1($_POST['password']);
    $confirmpassword =sha1($_POST['confirmpassword']);
    $avatar = $_FILES['avatare']['name'];

    $loginlength = strlen($login);
    $prenomlength = strlen($prenom);
    $nomlength = strlen($nom);

    if($loginlength <= 50 && $prenomlength <= 50 && $nomlength <= 50){
        if($password == $confirmpassword){
            if(!empty($avatar)){
                //Je fixe la taille max de la photo à 2Mo
                $tailleMax = 2097152;
                // Je définie les extensions valides
                $extensionValide =array('jpg', 'JPG', 'png', 'PNG','jpeg');
                //Je teste la taille de la photo
                if($_FILES['avatare']['size'] <= $tailleMax){
                     //Je prends l'extension de la photo en mettant tout en miniscule
                     $extensionUpload = strtolower(substr(strrchr($avatar, '.'), 1));
                     //Je vérifie si l'extension est valide
                     if(in_array($extensionUpload, $extensionValide)){
                        $chemin = "images/".$avatar;
                        //Je déplace la photo dans mon serveur
                        $resultat = move_uploaded_file($_FILES['avatare']['tmp_name'], $chemin);
                         //J'enregistre l'utilisateur dans la base de données
                         try
                         {
                                // $bdd = new PDO('mysql:host=mysql-omar.alwaysdata.net;dbname=omar_bd;charset=utf8', 'omar', 'omarfaye1234');
                                 $bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
                         }
                         catch(Exception $e)
                         {
                                 die('Erreur : '.$e->getMessage());
                         }
                         $insertUser = $bdd->prepare("INSERT INTO utilisateur(prenom, nom, login, password,avatar, role) VALUES(:prenom, :nom, :login, :password, :avatar, :role)");
                         $insertUser->execute(array(
                             'prenom'=>$prenom,
                             'nom'=> $nom,
                             'login'=>$login,
                             'password'=>$password, 
                              'avatar'=>$avatar ,
                               'role'=>'player'));
                                //Après enregistrement je le redirige vers la page de connexion
                                header('Location:index.php');
                     }else{
                        $error = "Votre photo de profil doit être au format jpg, JPG, jpeg, png, PNG";
                    }
                }else{
                    $error = "Votre photo de profil ne doit pas dépasser 2Mo";
                }
            }
        } 
        else{
            $error = "Vos mots de passe ne correspondent pas!!";
        }
    }else{
        $error = "Votre prénom, nom ou login ne doivent pas dépasser plus de 50 caractères!!";
    }

 }

