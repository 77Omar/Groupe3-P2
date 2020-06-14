<?php
 require_once 'pdo.php';
 global $bdd;
 if(isset($_POST['select'])and isset($_POST['reponse'])){
    $select=$_POST['select'];
    $reponse=$_POST['reponse'];
  if(!empty($select) and !empty($reponse)){
 $sql=$bdd->prepare('INSERT INTO reponses (Nres, reponse, type, Nques)  VALUES (:Nres,
 :reponse, :type, :Nques)');
 $sql->execute(array(
    'Nres'=>"",
    'reponse'=> $reponse,
    'type'=>$select,
    'Nques'=>$bdd->lastInsertId() //Retourne l'identifiant de la dernière ligne insérée ou la valeur d'une séquence
));
 if($sql->rowCount() > 0){
    echo "ok";
  } 
 }
}

?>