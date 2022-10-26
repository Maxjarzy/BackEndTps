<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda de ropa</title>
</head>
<body>
    
<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

<a class="btn btn-secondary boton" href="tienda.php" role="button"  aria-expanded="false"> Todo</a>
<a class="btn btn-secondary boton" href="buzo.php" role="button"  aria-expanded="false"> Buzos</a>
<a class="btn btn-secondary boton" href="nike.php" role="button"  aria-expanded="false"> Nike</a>
<a class="btn btn-secondary boton" href="500.php" role="button"  aria-expanded="false"> +$500</a>




   <div class="tienda">
<?php


$conexion=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($conexion,"tienda_de_ropa");

$consulta= "SELECT*FROM ropa where precio >= 500";

$datos= mysqli_query ($conexion, $consulta); 

while ($fila =mysqli_fetch_array($datos)) { ?>

<div class="card" style="width: 18rem;">
    <img class="imagen-card" src="data:image/png;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px">
  
    <ul class="list-group list-group-flush">
         <li class="list-group-item">Tipo de prenda: <?php echo $fila['tipo_de_prenda']; ?></li>
         <li class="list-group-item">Marca: <?php echo $fila['marca']; ?></li>
        <li class="list-group-item">Talle: <?php echo $fila['talle']; ?></li>
        <li class="list-group-item">Codigo de articulo: <?php echo $fila['id']; ?></li>

    </ul>
  <div class="card-body">
    <p>Precio: $<?php echo $fila['precio']; ?></p>
    <a class="btn btn-secondary boton" href="#" role="button"  aria-expanded="false"> Comprar</a>
    
  </div>
</div>



<?php }

?>

</div>


<a class="btn btn-secondary boton" href="index.html" role="button"  aria-expanded="false"> Volver a la página principal</a>

</body>
</html>