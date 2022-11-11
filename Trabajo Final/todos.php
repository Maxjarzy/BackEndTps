<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda de ropa | Administrar</title>
</head>

<body>
<?php
    session_start();
    $usuario = $_SESSION['USERNAME'];

         if(!isset($usuario)){

          header("location: login.php");
}

?>
    

<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>
  <h2>Administrar artículos</h2>
    <h3 class="saludos-session">Sesion iniciada como: <?php echo "$usuario" ?></h3>

<?php

    if($usuario == "MJarzy"){?>
        <div class="botones_perfil">
            <a class="btn btn-secondary boton boton_agregar" href="agregar.php" role="button"  aria-expanded="false"> Agregar nuevo articulo</a>
            <a class="btn btn-secondary boton boton_agregar" href="index.php" role="button"  aria-expanded="false"> Ir a la tienda</a>

            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle boton" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Usuarios</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="registro_usuario.php" role="button"  aria-expanded="false"> Generar nuevo usuario</a></li>
                        <li><a class="dropdown-item" href="eliminar_usuario.php" role="button" aria-expanded="false">Eliminar usuario</a></li>
                        <li><a class="dropdown-item" href="salir.php" role="button"  aria-expanded="false"> Cerrar sesion</a></li>
                </ul>
            </div>
        </div>

<?php
}
    else{ 
?>

        <a class="btn btn-secondary boton boton_agregar" href="agregar.php" role="button"  aria-expanded="false"> Agregar nuevo articulo</a>
        <a class="btn btn-secondary boton boton_agregar" href="index.php" role="button"  aria-expanded="false"> Ir a la tienda</a>
        <a class="btn btn-secondary boton" href="salir.php" role="button"  aria-expanded="false"> Cerrar sesion</a>
<?php
}?>   
    
<table class="table table-striped">

    <tr>

        <th>ID</th>
        <th>Tipo de prenda</th>
        <th>Marca</th>
        <th>Talle</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Link de pago</th>
        <th>Modificar</th>
        <th>Eliminar</th>
        


    </tr>
    
<?php


        $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
        mysqli_select_db($conexion,"n260m_32928476_tienda");

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
            <td><?php echo $fila['link']; ?></td>
            <td><a class="editar-todos" href="modificar.php?id=<?php echo $fila['id'];?>">Editar</a></td>
            <td><a class="eliminar-todos" href="baja.php?id=<?php echo $fila['id'];?>">Borrar</a></td>



            </tr>

<?php }

?>

    </table>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>