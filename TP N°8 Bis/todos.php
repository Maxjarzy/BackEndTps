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

<body >
    

<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

   <h2>Administrar artículos</h2>


    <a class="btn btn-secondary boton" href="agregar.html" role="button"  aria-expanded="false"> Agregar nuevo articulo</a>

    
<table class="table table-striped">

    <tr>

        <th>ID</th>
        <th>Tipo de prenda</th>
        <th>Marca</th>
        <th>Talle</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Modificar</th>
        <th>Eliminar</th>

    </tr>
    
<?php


$conexion=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($conexion,"tienda_de_ropa");

$consulta= "SELECT*FROM ropa";

$datos= mysqli_query ($conexion, $consulta);

while ($fila =mysqli_fetch_array($datos)) { ?>
    <tr>

    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['tipo_de_prenda']; ?></td>
    <td><?php echo $fila['marca']; ?></td>
    <td><?php echo $fila['talle']; ?></td>
    <td>$<?php echo $fila['precio']; ?></td>
    <td><img class="imagen-todos" src="data:image/png;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px"></td>
    <td><a class="editar-todos" href="modificar.php?id=<?php echo $fila['id'];?>">Editar</a></td>
    <td><a class="eliminar-todos" href="baja.php?id=<?php echo $fila['id'];?>">Borrar</a></td>



    </tr>

<?php }

?>

</table>

<a class="btn btn-secondary boton" href="index.html" role="button"  aria-expanded="false"> Volver a la página principal</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>