<?php
try
{
       //$bdd = new PDO('mysql:host=mysql-omar.alwaysdata.net;dbname=omar_bd;charset=utf8', 'omar', 'omarfaye1234');
       $bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
