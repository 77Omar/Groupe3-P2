<?php
//Revue
require_once('pdo.php');
if(isset($_POST['Num'])and isset($_POST['prenom'])and isset($_POST['nom'])){
  $num=$_POST['Num'];
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  if(!empty($num) and !empty($prenom) and !empty($nom)){
    $requette="UPDATE utilisateur SET prenom='$prenom', nom='$nom' Where Num='$num'";
    if($bdd->exec($requette)){
      echo"Bien modifier";
    }else{
      echo "Pas Bien";
    }
  }
 
}
