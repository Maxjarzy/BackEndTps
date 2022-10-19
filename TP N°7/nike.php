<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda de ropa</title>
</head>
<body>
    
   <h1>Tienda</h1>

    <h3>Nike</h3>

<table class="table table-striped">

    <tr>

        <th>ID</th>
        <th>Tipo de prenda</th>
        <th>Marca</th>
        <th>Talle</th>
        <th>Precio</th>

    </tr>
    
<?php


$conexion=mysqli_connect("127.0.0.1","root","");

mysqli_select_db($conexion,"tienda_de_ropa");

$consulta= "SELECT*FROM ropa WHERE  marca = 'nike'";

$datos= mysqli_query ($conexion, $consulta);

while ($fila =mysqli_fetch_array($datos)) { ?>
    <tr>

    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['tipo_de_prenda']; ?></td>
    <td><?php echo $fila['marca']; ?></td>
    <td><?php echo $fila['talle']; ?></td>
    <td><?php echo $fila['precio']; ?></td>

    </tr>

<?php }

?>

</table>

<button class="btn btn-primary" type="submit"><a href="busqueda.html">Inicio</a></button>

</body>
</html>