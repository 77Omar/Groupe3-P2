<?php
require_once 'pdo.php';
global $bdd;


if(isset($_POST['question'])and isset($_POST['points']) and isset($_POST['type_reponse']) and isset($_POST['numb_input'])){
    $question=$_POST['question'];
    $points=$_POST['points'];
    $select=$_POST['type_reponse'];
    $reponse='';
    $numinput=$_POST['numb_input'];
    $repvalid='';
 
      for($i=1;$i<=$numinput;$i++){
      $reponse=$reponse.$_POST['reponse'.$i].' ';
      if($_POST['type_reponse']=='Texte'){
          $repvalid=$_POST['reponse'.$i];   
       }else{
          if(isset($_POST['checkbox'.$i])){
              $repvalid=$repvalid.$_POST['reponse'.$i].' ';
          }elseif(isset($_POST['radio'])){
              if($_POST['radio']=="reponse".$i){
                  $repvalid=$repvalid.$_POST['reponse'.$i].' ';
              }
          }
      }

     } 
  
  

  if(!empty($question) and !empty($points) and !empty($select) and !empty($reponse)){
 $sql=$bdd->prepare('INSERT INTO questions(Nques, question, points)  VALUES (:Nques,
 :question, :points)');
 $sql->execute(array(
    'Nques'=>'', //Retourne l'identifiant de la dernière ligne insérée ou la valeur d'une séquence
    'question'=>$question,
    'points'=>$points
));
if($sql->rowCount() > 0){
  $resp=$bdd->prepare('INSERT INTO reponses (Nres, reponse, repvalide, type, Nques)  VALUES (:Nres,
  :reponse,:repvalide, :type, :Nques)');
  $resp->execute(array(
     'Nres'=>"",
     'reponse'=> $reponse,
     'repvalide'=>$repvalid,
     'type'=>$select,
     'Nques'=>$bdd->lastInsertId()
  ));
  if($resp){
    echo 'ok';
  }
 } 
 }
}
?>