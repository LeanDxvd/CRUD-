<?php
//inicio de conexion
include('lib/conex.php');
$cone=conectar();
//fin de conexion 

$nombre = $_POST['nombre'];
$cantidad = $_POST['cant'];
$lote = $_POST['lot'];

$sql="INSERT INTO gaseosas VALUES (' ','$nombre','$cantidad','$lote')";
$resultado=mysqli_query($cone,$sql);


if($resultado){
    echo "<div class='alert alert-warning'>Ella no te ama y a mi tampoco</div>";
    header('Location: gaseosa.php');
    
}
else{
    echo "nooo";
}


?>
