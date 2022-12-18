<?php
include("lib/conex.php");
//abrir conexion
$cone=conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Logo</h4>
            </div>
            <div class="col-4 text-right barra">
                <h4 class="text-light">The Zzz Boss</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
            <?php require_once ('lib/nav.php');?>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="col col-lg-6">
                    <h1>LICORERIA 24/7</h1>  
                    <?php
                    if(isset($_GET['mensaje'])and $_GET['mensaje']=='falta'){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Ella no te ama y a mi tampoco :(!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    }
                    ?>

                  
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">FOTO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">LOTE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql='SELECT * FROM tragos';
                                $resultado=mysqli_query($cone,$sql);
                                foreach($resultado as $fila):
                                ?>
                                <tr>
                                <th scope="row"><?php echo $fila['idTrago']; ?></th>
                                <td><img width="65" height="75" src="<?php echo "img/trago.jpg".$fila['Foto'];?>"></td>
                                <td> <?php echo $fila['nomTrago']; ?></td>
                                <td><?php echo $fila['cantTrago'];?></td>
                                <td><?php echo $fila['loteTrago'];?></td>
                               
                                <td>
                                <a href="editartragos.php? id=<?php echo $fila['idTrago'];?>" class="btn btn-success">Editar</a>
                                </td>
                            
                               
                                <td>
                                <a href="eliminartrago.php? id=<?php echo $fila['idTrago'];?>" class="btn btn-danger">Eliminar</a>
                            </td>
                                </tr>
                            <?php
                            endforeach
                            ?>
                           
                            </tbody>
                            </table>
                              
                    <div class="card-header">
                                <h3>Ingresar Datos</h3>
                            </div>
                            <form  class="p-4" method="POST" action="registrartrago.php">
                                <div class="mb-3">
                                    <label class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" name="nombre" autofocus required></div>

                                <div class="mb-3">
                                    <label class="form-label">Cantidad del producto</label>
                                <input type="text" class="form-control" name="cant" autofocus required></div>

                                <div class="mb-3">
                                    <label class="form-label">Lote estimado del producto</label>
                                <input type="text" class="form-control" name="lot" autofocus required></div>

                                <div class="d-grid">
                                    <input type="hidden" name="oculto" value="1">
                                    <input type="submit" class="btn btn-primary" value="Registrar">
                                </div>
                                </form>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
</body>
</html>