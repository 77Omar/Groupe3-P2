<?php
//Revue
require_once('pdo.php');
if(isset($_POST['ok'])){
    var_dump($_POST);
}
if(isset($_POST['modif'])){
  //var_dump($_POST);
  $Num=$_POST['modif'];
  $sql=$bdd->query("SELECT * FROM utilisateur WHERE Num=".$Num."");
 $data=$sql->fetchALL(PDO::FETCH_ASSOC);

?>
<form action="Modifier.php" method="POST">
<input type="text" name="Num" value=<?php echo($data[0]['Num'])?> >
<input type="text" name="prenom" value=<?php echo($data[0]['prenom'])?> >
<input type="text" name="nom" value=<?php echo($data[0]['nom'])?> >
<input type="text" name="score" value=<?php echo($data[0]['score'])?> >
<input type="submit" name="ok">
</form>
<?php
}
?>

