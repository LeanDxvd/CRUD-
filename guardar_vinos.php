<?php
require_once("lib/conex.php");
//abrir conexion
$cone=conectar();

$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$cant=$_REQUEST["cant"];
$lot=$_REQUEST["lot"];

$sql="UPDATE vinos SET NomVinos='$nombre',CantVinos='$cant', LoteVinos='$lot' WHERE idVinos='$id'";
$query=mysqli_query($cone,$sql);
if($query){
    header("Location:vinos.php");
   
}
?>