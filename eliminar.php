<?php
require_once('lib\conex.php');
$cone=conectar();
$idCig=$_GET["id"];
$sql="DELETE from cigarros where idCigarros='$idCig'";
$query=mysqli_query($cone,$sql);
if ($query==true){
header('Location:cigarros.php');
}
?>

