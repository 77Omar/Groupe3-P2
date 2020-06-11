<?php
require_once('pdo.php');
global $bdd;
 $numb=$_POST['num'];

 $sql=$bdd->query("DELETE FROM utilisateur WHERE num=$numb");
 $row= $sql->rowCount();
 echo json_encode($row);
 ?>