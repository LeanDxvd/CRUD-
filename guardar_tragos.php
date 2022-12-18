<?php
require_once("lib/conex.php");
//abrir conexion
$cone=conectar();

$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$cant=$_REQUEST["cant"];
$lot=$_REQUEST["lot"];

$sql="UPDATE tragos SET nomTrago='$nombre',cantTrago='$cant', loteTrago='$lot' WHERE idTrago='$id'";
$query=mysqli_query($cone,$sql);
if($query){
    header("Location:cigarros.php");
   
}
?>