<?php
session_start();
require_once('fonctionavatar.php');
Avatar();
if($_SESSION['role']){
   $role="player";
  }
require_once 'pdo.php';   
global $bdd;
$sql=$bdd->prepare('INSERT INTO utilisateur(prenom, nom, login, password, role, avatar, score)  VALUES (:prenom, 
 :nom, :login, :password, :role, :avatar, :score)');
 $sql->execute(array(
   'prenom'=>$_POST['prenom'],
   'nom'=> $_POST['nom'],
   'login'=>$_POST['login'],
   'password'=>$_POST['password'], 
   'role'=>$role,
    'avatar'=>$_FILES['file']['name'],
    'score'=>0
 ));
 if($sql->rowCount() > 0){
  echo "ok";
}else echo "nok";

?>