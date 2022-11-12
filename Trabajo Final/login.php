<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <link rel="stylesheet" href="styles.css">
      <title>Tienda piola | Login</title>
  </head>
  <body>

    <h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>



<?php

    
    $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
    mysqli_select_db($conexion,"n260m_32928476_tienda");

    session_start();

    $usuario = $_POST ["user"]; 
    $clave = $_POST [ "pass"];

    $consulta = "SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' and contrasenia = '$clave'";
    
    $datos= mysqli_query ($conexion, $consulta); 
    
    $array = mysqli_fetch_array($datos);

        if($array['contar']>0){

            $_SESSION['USERNAME'] = $usuario;
            header("location:todos.php");

        }else{
            header("location: login.html");
        }

?>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>