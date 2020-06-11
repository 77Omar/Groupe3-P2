<?php
require_once('pdo.php');
global $bdd;
 $limit = $_POST['limit'];
 $offset = $_POST['offset'];
 $sql=$bdd->query("SELECT Num, prenom,nom,score FROM utilisateur WHERE role ='player' ORDER BY Num
 LIMIT {$limit} 
 OFFSET {$offset}");
 $row= $sql->fetchAll(2);


 echo json_encode($row);


?>