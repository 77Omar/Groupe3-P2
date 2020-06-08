<?php
session_start();
require_once('fonctionavatar.php');
Avatar();
if($_SESSION['role']){
   $role="admin";
  }
require_once 'pdo.php';   
global $bdd;
$sql=$bdd->prepare('INSERT INTO utilisateur(prenom, nom, login, password, role, avatar)  VALUES (:prenom, 
 :nom, :login, :password, :role, :avatar)');
 $sql->execute(array(
   'prenom'=>$_POST['prenom'],
   'nom'=> $_POST['nom'],
   'login'=>$_POST['login'],
   'password'=>$_POST['password'], 
   'role'=>$role,
    'avatar'=>$_FILES['file']['name']
 ));
 if($sql->rowCount() > 0){
  echo "ok";
}else echo "nok";

?>