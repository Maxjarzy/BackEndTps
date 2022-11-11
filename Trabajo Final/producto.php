<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda piola | Producto</title>
</head>
<body>

<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

<?php

    session_start();
    $usuario = $_SESSION['USERNAME'];

$conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
mysqli_select_db($conexion,"n260m_32928476_tienda");

$id = $_GET['id'];
   
$consulta = "SELECT * FROM ropa WHERE id=$id";

$datos= mysqli_query($conexion, $consulta); 


while ($fila = mysqli_fetch_array($datos)){?>

<div class="container">
    <div class="row">

    <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="data:image/png;base64, <?php echo base64_encode($fila['imagen'])?>" class="card-img imagen-card" alt="...">
                            </div>
                                <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $fila['tipo_de_prenda']; ?> <?php echo $fila['marca']; ?></h5>
                                            <p class="card-text"><small class="text-muted">Talle: <?php echo $fila['talle']; ?></small></p>
                                            <p class="card-text"><small class="text-muted">Art. N°: <?php echo $fila['id']; ?></small></p>
                                        </div>
                                        <p>Precio: $<?php echo $fila['precio']; ?></p>
                                        <a class="btn btn-secondary boton" href="<?php echo $fila['link']; ?>" role="button" target="_blank" aria-expanded="false">Pagar</a>
                                </div>
                            </div>
                    </div>
          </div>
    </div>
<?php
}

?>
    <a class="btn btn-secondary boton" href="index.php" role="button" aria-expanded="false">Volver a la tienda</a>




    </body>
</html>