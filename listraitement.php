<?php
require_once('pdo.php');
$message="";
$nbr=0;

$sql=$bdd->query("SELECT reponses.reponse, reponses.repvalide, reponses.type, 
questions.Nques, questions.question FROM questions, reponses 
WHERE reponses.Nques=questions.Nques");

if ($sql->rowCount()>0){
    $data= $sql->fetchAll();
    echo json_encode($data);
}
?>
