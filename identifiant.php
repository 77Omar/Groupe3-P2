<?php
session_start();
require_once('pdo.php');

$sql=$bdd->query("SELECT * FROM utilisateur WHERE login = '".$_POST['login']."'
 and password = '".$_POST['password']."'");
 $row= $sql->rowCount();
 if( $row == 1){
    $data=$sql->fetch();
    $_SESSION['avatar']= $data['avatar']; //
    if($data['role']==='admin'){
        echo "admin";
       }elseif ($data['role']==='player'){
           echo "player";
       }
    }
 
?>