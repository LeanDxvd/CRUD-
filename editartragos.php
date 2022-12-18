<?php
require_once("lib/conex.php");
//abrir conexion
$cone=conectar();

$id=$_REQUEST["id"];

$sql="SELECT * FROM tragos WHERE idTrago='$id'";
$query=mysqli_query($cone,$sql);
$fila=mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<div class="card-header">
        <h3>Ingresar Datos</h3>
</div>
<form  class="p-4" method="POST" action="guardar_tragos.php">
    <div class="mb-3">
        <label class="form-label">Id</label>
        <input type="text" class="form-control" name="id" value="<?php echo $fila['idTrago'];?>" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre del producto</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nomTrago'];?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Cantidad del producto</label>
        <input type="text" class="form-control" name="cant" value="<?php echo $fila['cantTrago'];?>"></div>
    <div class="mb-3">
        <label class="form-label">Lote estimado del producto</label>
        <input type="text" class="form-control" name="lot" value="<?php echo $fila['loteTrago'];?>"></div>
    <div class="d-grid">
        <input type="hidden" name="oculto" value="1">
        <input type="submit" class="btn btn-primary" value="Guardar Producto">
       <br>
       <a class="btn btn-danger" href="index.php">Cancelar Modificacion</a></div>
</form>
</body>
</html>