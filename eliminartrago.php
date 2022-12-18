<?php
require_once('lib\conex.php');
$cone=conectar();
$idTrag=$_GET["id"];
$sql="DELETE from tragos where idTrago='$idTrag'";
$query=mysqli_query($cone,$sql);
if ($query==true){
header('Location:tragos.php');
}
?>

