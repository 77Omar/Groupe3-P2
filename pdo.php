<?php
try
{
<<<<<<< HEAD
	$bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
=======
        $bdd = new PDO('mysql:host=mysql-omar.alwaysdata.net;dbname=omar_bd;charset=utf8', 'omar', 'omarfaye1234');
        //$bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root', '');
>>>>>>> 5bac0e8... projet2
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>