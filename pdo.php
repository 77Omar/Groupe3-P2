<?php
try
{
      $bdd = new PDO('mysql:host=mysql-omzo.alwaysdata.net;dbname=omzo_bd;charset=utf8', 'omzo', 'omarfaye1234');
       
      //$bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
       
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
