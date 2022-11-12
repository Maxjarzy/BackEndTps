<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
          <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
          <link rel="stylesheet" href="styles.css">
          <title>Tienda piola | +$500</title>
     </head>
<body>
    
<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

<h2>Artículos superiores a $500</h2>
     <div class="botones">
          <div class="dropdown">
               <button class="btn btn-secondary dropdown-toggle boton" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Filtrar</button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li><a class="dropdown-item" href="index.php">Todos</a></li>
               <li><a class="dropdown-item" href="buzo.php">Buzos</a></li>
               <li><a class="dropdown-item" href="nike.php">Nike</a></li>
               <li><a class="dropdown-item" href="500.php">+$500</a></li>
               </ul>
          </div>
<?php
               session_start();
               $usuario = $_SESSION['USERNAME'];

               if($usuario){
?>

                    <a class="btn btn-secondary boton administrar" href="todos.php" role="button"  aria-expanded="false"> Ir al panel de control</a>

<?php
               }else{
?>

                    <a class="btn btn-secondary boton administrar" href="login.php" role="button"  aria-expanded="false"> Iniciar sesion</a>

<?php}
?>
     </div>




     <div class="tienda">
<?php

     
          $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");

          mysqli_select_db($conexion,"n260m_32928476_tienda");

          $consulta= "SELECT*FROM ropa where precio >= 500";

          $datos= mysqli_query ($conexion, $consulta); 
?>

          <div class="container">
               <div class="row col-12">
               
<?php
                    while ($fila =mysqli_fetch_array($datos)) { 
?>


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
                              <a class="btn btn-secondary boton" href="producto.php?id=<?php echo $fila['id'];?>" role="button"  aria-expanded="false">Ver Producto</a>
                         </div>
                    </div>



<?php}

?>
               </div>
          </div>
     </div>


           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     </body>
</html>