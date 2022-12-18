<?php
//inicio de conexion
include('lib/conex.php');
$cone=conectar();
//fin de conexion 

$nombre = $_POST['nombre'];
$cantidad = $_POST['cant'];
$lote = $_POST['lot'];

$sql="INSERT INTO cigarros VALUES (' ',' ','$nombre','$cantidad','$lote')";
$resultado=mysqli_query($cone,$sql);


if($resultado){
    echo "ok";
    header('Location:cigarros.php');
}
else{
    echo "nooo";
}


?>
