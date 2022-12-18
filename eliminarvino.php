<?php
require_once('lib\conex.php');
$cone=conectar();
$idVin=$_GET["id"];
$sql="DELETE from vinos where idVinos='$idVin'";
$query=mysqli_query($cone,$sql);
if ($query==true){
header('Location:vinos.php');
}
?>

