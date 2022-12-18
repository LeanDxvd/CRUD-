<?php
require_once("lib/conex.php");
//abrir conexion
$cone=conectar();

$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$cant=$_REQUEST["cant"];
$lot=$_REQUEST["lot"];

$sql="UPDATE gaseosas SET nomGaseosa='$nombre',CantGaseosa='$cant', LoteGaseosa='$lot' WHERE idGaseosa='$id'";
$query=mysqli_query($cone,$sql);
if($query){
    header("Location:gaseosa.php");
   
}
?>