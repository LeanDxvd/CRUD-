<?php
require_once('lib\conex.php');
$cone=conectar();
$idGas=$_GET["id"];
$sql="DELETE from gaseosas where idGaseosa='$idGas'";
$query=mysqli_query($cone,$sql);
if ($query==true){
header('Location:gaseosa.php');
}
?>

